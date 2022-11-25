<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add faculty</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/dash_icons.css') }}" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}" />
    <link rel="stylesheet" type="text/css" href="https://www.spit.ac.in/wp-content/themes/spit-main/red.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/proposal.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/addFaculty.css') }}" />
</head>

<body>
    <div class="header">
        @section('header')
            <div id="header">
                <div id="wrapper">
                    <img src="https://www.spit.ac.in/wp-content/themes/spit-main/images/SPIT_logo.png"
                        style="margin-top:5px; float:left;">
                    <a href="http://www.spit.ac.in/">
                        <img src="https://www.spit.ac.in/wp-content/themes/spit-main/images/red/logo.gif"
                            alt="Sardar Patel Institute of Technology" id="logo" />
                    </a>
                </div>
            </div>
            <div id="nav">
                <div id="wrapper">
                    <div id="mega-menu-wrap-primary" class="mega-menu-wrap">
                        <div class="mega-menu-toggle">
                            <div class="mega-toggle-blocks-left">
                                <div class='mega-toggle-block mega-menu-toggle-block mega-toggle-block-1'
                                    id='mega-toggle-block-1' tabindex='0'>
                                    <span class='mega-toggle-label class="form-label"' role='button' aria-expanded='false'>
                                        <span class='mega-toggle-label class="form-label"-closed'>MENU</span>
                                        <span class='mega-toggle-label class="form-label"-open'>MENU</span>
                                    </span>
                                </div>
                            </div>
                            <div class="mega-toggle-blocks-center">
                            </div>
                            <div class="mega-toggle-blocks-right">
                            </div>
                        </div>
                        <ul id="mega-menu-primary" class="mega-menu max-mega-menu mega-menu-horizontal mega-no-js"
                            data-event="hover_intent" data-effect="fade_up" data-effect-speed="200"
                            data-effect-mobile="disabled" data-effect-speed-mobile="0" data-mobile-force-width="false"
                            data-second-click="go" data-document-click="collapse" data-vertical-behaviour="standard"
                            data-breakpoint="600" data-unbind="true" data-hover-intent-timeout="300"
                            data-hover-intent-interval="100">
                            <li class='mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-25693'
                                id='mega-menu-item-25693'>
                                <a class="mega-menu-link" target="_blank" href="login" tabindex="0">Login</a>
                            </li>
                            <li class='mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-25693'
                                id='mega-menu-item-25693'>
                                <a class="mega-menu-link" target="_blank" href="register" tabindex="0">Register</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- End Nav -->
        @show
    </div>
    <section class="container">
        <div>
            <h1>Faculty Info</h1>
        </div>
        <div class="wrapper">
            <form method="POST" action="{{ url('/faculty') }}" novalidate>
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @php
                    $faculties = DB::table('faculties')->get();
                @endphp
                <table class="add_faculty_table">
                    <tr>
                        <th>S. No</th>
                        <th>Faculty Name</th>
                        <th>Faculty Email</th>
                        <th>Faculty Phone</th>
                        <th>Faculty Department</th>
                    </tr>

                    @foreach ($faculties as $faculty)
                        <tr class="row_{{ $loop->iteration }}">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $faculty->faculty_name }}</td>
                            <td>{{ $faculty->faculty_email }}</td>
                            <td>{{ $faculty->faculty_phone }}</td>
                            <td>{{ $faculty->faculty_department }}</td>
                            <td><button class="btn btn-primary remove_{{ $loop->iteration }}"
                                    onclick="removeFaculty({{ $faculty->faculty_id }},{{ $loop->iteration }})">Remove</button>
                            </td>
                            <td><button class="btn btn-primary edit_{{ $loop->iteration }}"
                                    onclick="editFaculty({{ $faculty->faculty_id }},{{ $loop->iteration }})">Edit</button>
                            </td>
                        </tr>
                    @endforeach
                </table>
                <div class="buttons">
                    <button class="p-1 mt-2 btn btn-primary add_faculty_button" onclick="addRow()">Add
                        Faculty</button>
                    <button class="p-1 mt-2 btn btn-primary submit_faculty hidden" type="submit"
                        onclick="submitForm()">Submit</button>
                </div>
            </form>
            <script>
                document.querySelector(".submit_faculty").disabled = true;
                // stop form from submitting
                document.querySelector("form").addEventListener("submit", function(stop) {
                    stop.preventDefault();
                });

                function submitForm() {
                    document.querySelector(".submit_faculty").disabled = false;
                    document.querySelector("form").submit();

                }

                function validateEmail() {
                    var faculty_email = document.querySelector(".faculty_email").value;
                    var faculty_email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                    // show error if email is not valid
                    if (!faculty_email_regex.test(faculty_email)) {
                        document.querySelector(".faculty_email_error").innerHTML = "Please enter a valid email";
                    } else {
                        document.querySelector(".faculty_email_error").innerHTML = "";
                    }
                    enableSubmit();

                }

                function validateDepartment() {
                    console.log("here")
                    // disable if department is not selected
                    var faculty_department = document.querySelector(".faculty_department").value;
                    if (faculty_department == "Choose...") {
                        document.querySelector(".faculty_department_error").innerHTML = "Please select a department";
                    } else {
                        document.querySelector(".faculty_department_error").innerHTML = "";
                    }
                    enableSubmit();
                }

                function validatePhone() {

                    var faculty_phone = document.querySelector(".faculty_phone").value;
                    var faculty_phone_regex = /^[0-9]{10}$/;
                    // show error if phone is not valid
                    if (!faculty_phone_regex.test(faculty_phone)) {
                        document.querySelector(".faculty_phone_error").innerHTML = "Please enter a valid phone number";
                    } else {
                        document.querySelector(".faculty_phone_error").innerHTML = "";
                    }
                    enableSubmit();
                }
                // function submitData(){
                //     var faculty_name = document.getElementsByClassName("faculty_name");
                //     var faculty_email = document.getElementsByClassName("faculty_email");
                //     var faculty_phone = document.getElementsByClassName("faculty_phone");
                //     var faculty_department = document.getElementsByClassName("faculty_department");
                //     var faculty_data = [];
                //     for(var i=0;i<faculty_name.length;i++){
                //         faculty_data.push({
                //             "faculty_name":faculty_name[i].value,
                //             "faculty_email":faculty_email[i].value,
                //             "faculty_phone":faculty_phone[i].value,
                //             "faculty_department":faculty_department[i].value,
                //         });
                //     }
                //     console.log(faculty_data);
                //     $.ajax({
                //         type: "POST",
                //         url: "/addFaculty",
                //         data: {
                //             "_token": "{{ csrf_token() }}",
                //             "faculty_data": faculty_data
                //         },
                //         success: function (response) {
                //             console.log(response);
                //             swal.fire({
                //                 title: "Success",
                //                 text: "Faculty Added Successfully",
                //                 icon: "success",
                //                 confirmButtonText: "OK"
                //             }).then(function () {
                //                 // location.reload();
                //             });
                //         }
                //     });

                // }

                function editFaculty(id, i) {
                    // change td to input
                    var faculty_name = document.getElementsByClassName("row_" + i)[0].getElementsByTagName("td")[1].innerHTML;
                    var faculty_email = document.getElementsByClassName("row_" + i)[0].getElementsByTagName("td")[2].innerHTML;
                    var faculty_phone = document.getElementsByClassName("row_" + i)[0].getElementsByTagName("td")[3].innerHTML;
                    var faculty_department = document.getElementsByClassName("row_" + i)[0].getElementsByTagName("td")[4].innerHTML;
                    document.getElementsByClassName("row_" + i)[0].getElementsByTagName("td")[1].innerHTML =
                    `<input type='text' class='form-control faculty_name' placeholder='Faculty Name' name='faculty_name[]' required value=${faculty_name}>
                    <label class='faculty_name_error' style='color:red;'></label>`;
                    document.getElementsByClassName("row_" + i)[0].getElementsByTagName("td")[2].innerHTML =
                    `<input type='email' value = "${faculty_email}" class='form-control faculty_email' onchange='validateEmail()' placeholder='Faculty Email' name='faculty_email[]' required>
                        <label class='faculty_email_error' style='color:red;'></label>`;
                    document.getElementsByClassName("row_" + i)[0].getElementsByTagName("td")[3].innerHTML =
                    `<input type='text' value="${faculty_phone}" class='form-control faculty_phone' onchange='validatePhone()' placeholder='Faculty Phone' name='faculty_phone[]' required>
                        <label class='faculty_phone_error' style='color:red;'></label>`;
                    document.getElementsByClassName("row_" + i)[0].getElementsByTagName("td")[4].innerHTML =
                       `<select class="form-control select faculty_department" aria-label
                                                                class="form-label faculty-department" id="department_1" name="faculty_department[]"
                                                                onchange="validateDepartment()" required>
                                                                required>
                                                                <option selected value="${faculty_department}">${faculty_department}</option>
                                                        
                                                                // get all departments
                                                                <?php
                                                                $departments = DB::table('departments')->get();
                                                                foreach ($departments as $department) {
                                                                    echo "<option value='$department->department_name'>$department->department_name</option>";
                                                                }
                                                                ?>
                                                                // select department
                                                            </select>
                    <label class='faculty_department_error' style='color:red;'></label>`
                    // change edit button to update button
                    document.getElementsByClassName("edit_" + i)[0].innerHTML = "Update";
                    // submit on click update
                    document.getElementsByClassName("edit_" + i)[0].setAttribute("onclick", "updateFaculty(" + id + "," + i + ")");
                }

                function updateFaculty(id, i) {
                    // submit on update
                    var faculty_name = document.getElementsByClassName("row_" + i)[0].getElementsByTagName("td")[1]
                        .getElementsByTagName("input")[0].value;
                    var faculty_email = document.getElementsByClassName("row_" + i)[0].getElementsByTagName("td")[2]
                        .getElementsByTagName("input")[0].value;
                    var faculty_phone = document.getElementsByClassName("row_" + i)[0].getElementsByTagName("td")[3]
                        .getElementsByTagName("input")[0].value;
                    // get value from select
                    var faculty_department = document.getElementsByClassName("row_" + i)[0].getElementsByTagName("td")[4]
                        .getElementsByTagName("select")[0].value;
                    var data = {
                        "_token": "{{ csrf_token() }}",
                        "faculty_name": faculty_name,
                        "faculty_email": faculty_email,
                        "faculty_phone": faculty_phone,
                        "faculty_department": faculty_department,
                    };
                    $.ajax({
                        type: "POST",
                        url: "/updateFaculty/" + id,
                        data: data,
                        success: function(response) {
                            console.log(response);
                            // change input to td
                            document.getElementsByClassName("row_" + i)[0].getElementsByTagName("td")[1].innerHTML =
                                faculty_name;
                            document.getElementsByClassName("row_" + i)[0].getElementsByTagName("td")[2].innerHTML =
                                faculty_email;
                            document.getElementsByClassName("row_" + i)[0].getElementsByTagName("td")[3].innerHTML =
                                faculty_phone;
                            document.getElementsByClassName("row_" + i)[0].getElementsByTagName("td")[4].innerHTML =
                                faculty_department;
                            // change update button to edit button
                            document.getElementsByClassName("edit_" + i)[0].innerHTML = "Edit";
                            // submit on click edit
                            document.getElementsByClassName("edit_" + i)[0].setAttribute("onclick", "editFaculty(" +
                                id + "," + i + ")");
                            // give sweet alert on update
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Faculty Updated Successfully',
                                showConfirmButton: false,
                                timer: 1500
                            })
                        }
                    });
                }

                // enable submit only after all values have been entered
                function enableSubmit() {

                    var faculty_name = document.getElementsByClassName("faculty_name");
                    var faculty_email = document.getElementsByClassName("faculty_email");
                    var faculty_phone = document.getElementsByClassName("faculty_phone");
                    var faculty_department = document.getElementsByClassName("faculty_department");
                    var flag = 0;
                    for (var i = 0; i < faculty_name.length; i++) {
                        if (faculty_name[i].value == "" || faculty_email[i].value == "" || faculty_phone[i].value == "" ||
                            faculty_department[i].value == "") {
                            flag = 1;
                        }
                    }
                    if (flag == 0) {
                        document.querySelector(".submit_faculty").disabled = false;
                    } else {
                        document.querySelector(".submit_faculty").disabled = true;

                    }
                }

                function addRow() {
                    let lastRow = document.querySelector('.add_faculty_table tr:last-child');
                    // get last row number
                    let lastRowNumber = lastRow.querySelector('td:first-child').innerText;
                    // get last row number and increment it
                    let newRowNumber = parseInt(lastRowNumber) + 1;
                    addFaculty(newRowNumber);
                }


                function removeFaculty(id, i) {
                    console.log("here",id,i);
                    // remove from table
                    var table = document.querySelector('.add_faculty_table');
                    var row = document.querySelector('.row_' + i);
                    $(row).remove();
                    console.log(id, "removed");
                    // if id is present
                    if (id) {
                        $.ajax({
                            url: `/removeFaculty/${id}`,
                            type: 'POST',
                            dataType: 'html',
                            data: {
                                faculty_id: id,
                                _token: '{{ csrf_token() }}',
                            },
                            success: function(data) {
                                console.log(data);
                                // sweet alert on delete
                                Swal.fire({
                                    position: 'center',
                                    icon: 'success',
                                    title: 'Faculty Deleted Successfully',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                            }
                        });
                    }

                }

                function addFaculty(newId) {
                    // add a new table row to add faculty name in input box
                    var table = document.getElementsByClassName("add_faculty_table")[0];
                    var row = table.insertRow(-1);
                    row.classList.add("row_" + newId);
                    var cell0 = row.insertCell(0);
                    var cell1 = row.insertCell(1);
                    var cell2 = row.insertCell(2);
                    var cell3 = row.insertCell(3);
                    var cell4 = row.insertCell(4);
                    var cell5 = row.insertCell(5);
                    cell0.innerHTML = newId;
                    cell1.innerHTML =
                        `<input type='text' class='form-control faculty_name'  placeholder='Faculty Name' name='faculty_name[]' required>
                        <label class='faculty_name_error' style='color:red;'></label>`;
                    cell2.innerHTML =
                        `<input type='email' class='form-control faculty_email' onchange='validateEmail()' placeholder='Faculty Email' name='faculty_email[]' required>
                        <label class='faculty_email_error' style='color:red;'></label>`;
                    cell3.innerHTML =
                        `<input type='text' class='form-control faculty_phone' onchange='validatePhone()' placeholder='Faculty Phone' name='faculty_phone[]' required>
                        <label class='faculty_phone_error' style='color:red;'></label>`;
                    cell4.innerHTML = `
                    <select class="form-control select faculty_department" aria-label
                                                                class="form-label faculty-department" id="department_1" name="faculty_department[]"
                                                                onchange="validateDepartment()" required>
                                                                required>
                                                                <option selected disabled value="">Choose...</option>
                                                                // get all departments
                                                                <?php
                                                                $departments = DB::table('departments')->get();
                                                                foreach ($departments as $department) {
                                                                    echo "<option value='$department->department_name'>$department->department_name</option>";
                                                                }
                                                                ?>
                                                            </select>
                    <label class='faculty_department_error' style='color:red;'></label>
                    `
                    cell5.innerHTML =
                        `<button class="btn btn-primary remove_${newId}" onclick="removeFaculty(${null},${newId})">Remove</button>`;
                    // show submit button
                    document.getElementsByClassName("submit_faculty")[0].classList.remove("hidden");
                    newId++;
                }
            </script>
        </div>
    </section>
    <div class="footer">
        @section('footer')
            <p>
                <a href='http://www.spit.ac.in/'>Home</a> |
                <a href='http://www.aicte-india.org/' target='_blank'>AICTE</a> |
                <a href='http://www.mu.ac.in/' target='_blank'>Mumbai University</a> |
                <a href='http://www.dtemaharashtra.gov.in/' target='_blank'>DTE</a> |
                <a href='http://www.spit.ac.in/wp-content/uploads/SPITVirtualTour/SPIOT_Templates/SPIOTFL'
                    target='_blank'>Campus Virtual Tour</a> |
                <a href='http://mail.spit.ac.in'>Webmail</a> |
                <a href='http://www.spit.ac.in/about/contact/'>Contact</a> |
            </p>

            <p>
                <a href='http://www.spit.ac.in/terms-conditions/'>Terms & Conditions</a> |
                <a href='http://www.spit.ac.in/privacy-policy/'>Privacy Policy</a> |
                <a href='http://www.spit.ac.in/refund-cancellation-policy/'>Refund/Cancellation Policy</a>
            </p>

            <p>Bharatiya Vidya Bhavans Sardar Patel Institute of Technology
                Munshi Nagar, Andheri (West), Mumbai 400 058</p>
            <p>(91)-(022)-26707440, 26287250</p>

            <p>
            <ul id="" class="cnss-social-icon " style="text-align:center;">
                <li class="cn-fa-facebook cn-fa-icon " style="display:inline-block;"><a class="" target="_blank"
                        href="https://www.facebook.com/SPITCOLLEGE/" title="Facebook"
                        style="width:18px;height:18px;padding:3px 0;margin:2px;color: #ffffff;border-radius: 50%;"><i
                            title="Facebook" style="font-size:12px;" class="fa fa-facebook"></i></a></li>
                <li class="cn-fa-twitter cn-fa-icon " style="display:inline-block;"><a class="" target="_blank"
                        href="https://twitter.com/bvbspit" title="Twitter"
                        style="width:18px;height:18px;padding:3px 0;margin:2px;color: #ffffff;border-radius: 50%;"><i
                            title="Twitter" style="font-size:12px;" class="fa fa-twitter"></i></a></li>
                <li class="cn-fa-linkedin cn-fa-icon " style="display:inline-block;"><a class="" target="_blank"
                        href="https://www.linkedin.com/school/bhartiya-vidya-bhavans-sardar-patel-institute-of-technology-munshi-nagar-andheri-mumbai/"
                        title="LinkedIn"
                        style="width:18px;height:18px;padding:3px 0;margin:2px;color: #ffffff;border-radius: 50%;"><i
                            title="LinkedIn" style="font-size:12px;" class="fa fa-linkedin"></i></a></li>
            </ul>
            </p>
            <script src="{{ asset('js/bootstrap.js') }}"></script>
            <script src="{{ asset('js/app.js') }}"></script>
        @show
    </div>
</body>

</html>