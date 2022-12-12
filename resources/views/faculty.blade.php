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
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

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
                           
                            <li  id='mega-menu-item-25693' tabindex="0" class="nav-item mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-25693" >
                                <a class=" mega-menu-link nav-link" href="{{ route('admin.department') }}">Department</a>
                            </li>
                            
                            <li  id='mega-menu-item-25693' tabindex="0" class="nav-item mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-25693" >
                                <a class=" mega-menu-link nav-link" href="{{ route('admin.report') }}">Report</a>
                            </li>
                            @guest
                            @if (Route::has('login'))
                                <li  id='mega-menu-item-25693' tabindex="0" class="nav-item mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-25693" >
                                    <a class=" mega-menu-link nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            {{-- @if (Route::has('register'))
                                <li  id="mega-menu-item-25693"  tabindex="0" class="nav-item mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-25693">
                                    <a class=" mega-menu-link nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        @else
                            <li class="nav-item mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-25693 nav-item dropdown">
                                <a id="navbarDropdown" class="mega-menu-link nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-user-menu dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a id="dropdown-user-menu-item " class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        </ul>
                    </div>
                </div>
            </div><!-- End Nav -->
        @show
    </div>
    <section class="container">
        <div id="wrapper" class="card m-5" style="border-radius: 10px;">
        <div class="card-header">
            <h1>Faculty Info</h1>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('admin/faculty') }}" novalidate>
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
                <table class="add_faculty_table table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                        <th>S. No</th>
                        <th>Faculty Name</th>
                        <th>Faculty Email</th>
                        <th>Faculty Phone</th>
                        <th>Faculty Department</th>
                        <th>Faculty Password</th>
                        <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($faculties as $faculty)
                        <tr class="row_{{ $loop->iteration }}">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $faculty->faculty_name }}</td>
                            <td>{{ $faculty->faculty_email }}</td>
                            <td>{{ $faculty->faculty_phone }}</td>
                            <td>{{ $faculty->faculty_department }}</td>
                            <td>{{$faculty->faculty_password}}</td>
                            <td><button type="button" class="btn btn-danger remove_{{ $loop->iteration }}"
                                    onclick="removeFaculty({{ $faculty->faculty_id }},{{ $loop->iteration }})">Remove</button>
                            </td>
                            <td><button type="button" class="btn btn-primary edit_{{ $loop->iteration }}"
                                    onclick="editFaculty({{ $faculty->faculty_id }},{{ $loop->iteration }})">Edit</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="buttons">
                    <button type="button" class="p-1 mt-2 btn btn-primary add_faculty_button" onclick="addRow()">Add
                        Faculty</button>
                    <button class="p-1 mt-2 btn btn-primary submit_faculty hidden" type="button" 
                    onclick="addFacultyInDB()">Submit</button>
                </div>
            </form>
            <script>
                // prevent buttons from submitting
                
                document.querySelector(".submit_faculty").disabled = true;
                // stop form from submitting
                document.querySelector("form").addEventListener("submit", function(stop) {
                    stop.preventDefault();
                });

                // function checkValidity(){
                //     var email  = document.getElementById('faculty_email').value;
                //     var phone  = document.getElementById('faculty_phone').value;
                //     var password  = document.getElementById('faculty_password').value;
                //     var name  = document.getElementById('faculty_name').value;
                //     var department  = document.getElementById('faculty_department').value;
                //     validateEmail();
                //     validatePhone();
                //     validateDepartment();
                // }
                function validate(cnt){
                    var submit_btn = document.querySelector(".submit_faculty");
                    var val_email = validateEmail();
                    var val_phone = validatePhone();
                    var val_department = validateDepartment();
                    var val_password = validatePassword();
                    submit_btn.disabled = (val_email || val_phone || val_department|| val_password);
                }
                function validatePassword(){
                    var password = document.querySelector('.faculty_password').value;
                    var submit_btn = document.querySelector(".submit_faculty");
                    if(password.length==0)return true;
                    if(password.length < 8){
                        document.querySelector('.faculty_password').style.border = "2px solid red";
                        
                        return true;
                    }
                    else{
                        document.querySelector('.faculty_password').style.border = "2px solid green";
                        
                        return false;
                    }
                }
                function validateEmail() {
                    var email = document.querySelector('.faculty_email').value;
                    var re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                    if(email.length==0)return true;
                    // show error if email is not valid
                    if (!re.test(email)&&email!="") {
                        // show error in label
                        document.querySelector(".faculty_email_error").innerHTML = "Invalid email";
                        // add error class to input
                        document.querySelector(".faculty_email").classList.add("error");
                        // disable submit button
                        // document.querySelector(".submit_faculty").disabled = true;
                        return true;
                    }else {
                        // remove error class from input
                        document.querySelector(".faculty_email").classList.remove("error");
                        // remove error from label
                        document.querySelector(".faculty_email_error").innerHTML = "";
                        // enable submit button
                        // document.querySelector(".submit_faculty").disabled = false;
                        return false;
                    }
                    return true;
                }
                function validatePhone(){
                    var phone = document.querySelector('.faculty_phone').value;
                    console.log(phone);
                    var re = /^[0-9]{10}$/;
                    // show error if phone is not valid
                    if(phone.length==0)return true;
                    if (!re.test(phone)&&phone.length!=0) {
                        // show error in label
                        document.querySelector(".faculty_phone_error").innerHTML = "Invalid phone";
                        // add error class to input
                        document.querySelector(".faculty_phone").classList.add("error");
                        // disable submit button
                        // document.querySelector(".submit_faculty").disabled = true;
                        return true;
                    }else {
                        // remove error class from input
                        document.querySelector(".faculty_phone").classList.remove("error");
                        // remove error from label
                        document.querySelector(".faculty_phone_error").innerHTML = "";
                        // enable submit button
                        // document.querySelector(".submit_faculty").disabled = false;
                        return false;
                    }
                }

                function validateDepartment(){
                    var department = document.querySelector(".faculty_department").value;
                    console.log(department);
                    if(department.length==0)return true;
                    if(department == ""&&department.length!=0){
                        // show error in label
                        document.querySelector(".faculty_department_error").innerHTML = "Select Department";
                        // add error class to input
                        document.querySelector(".faculty_department").classList.add("error");
                        // disable submit button
                        // document.querySelector(".submit_faculty").disabled = true;
                        return true;
                    }else{
    
                        // remove error class from input
                        document.querySelector(".faculty_department").classList.remove("error");
                        // remove error from label
                        document.querySelector(".faculty_department_error").innerHTML = "";
                        // enable submit button
                        // document.querySelector(".submit_faculty").disabled = false;
                        return false;
                    }
                }
                
                
                function addRow() {
                    // dont send request
                    event.preventDefault();
                    let lastRow = document.querySelector('.add_faculty_table tbody tr:last-child');
                    // get last row number
                    if(lastRow!=null){
                        let lastRowNumber = lastRow.querySelector('td:first-child').innerText;
                    // get last row number and increment it
                        let newRowNumber = parseInt(lastRowNumber) + 1;
                        addFaculty(newRowNumber);    
                    }else{
                        addFaculty(1);
                    }
                    
                }
                function addFaculty(newId) {
                    // add a new table row to add faculty name in input box
                    var table = document.querySelector(".add_faculty_table tbody");
                    var row = table.insertRow(-1);
                    row.classList.add("row_" + newId);
                    row.classList.add("input-tr");
                    var cell0 = row.insertCell(0);
                    var cell1 = row.insertCell(1);
                    var cell2 = row.insertCell(2);
                    var cell3 = row.insertCell(3);
                    var cell4 = row.insertCell(4);
                    var cell5 = row.insertCell(5);
                    var cell6 = row.insertCell(6);
                    cell0.innerHTML = newId;
                    cell1.innerHTML =
                        `<input type='text' class='form-control faculty_name'  placeholder='Faculty Name' name='faculty_name[]' required>
                        <label class='faculty_name_error' style='color:red;'></label>`;
                    cell2.innerHTML =
                        `<input onkeyup="validate()" type='email' class='form-control faculty_email'  placeholder='Faculty Email' name='faculty_email[]' required>
                        <label class='faculty_email_error' style='color:red;'></label>`;
                    cell3.innerHTML =
                        `<input onkeyup="validate()" type='text' class='form-control faculty_phone'  placeholder='Faculty Phone' name='faculty_phone[]' required>
                        <label class='faculty_phone_error' style='color:red;'></label>`;
                    cell4.innerHTML = `
                    <select onchange="validate()" class="form-control select faculty_department" aria-label
                                                                class="form-label faculty-department" id="department_1" name="faculty_department[]"
                                                                 required>
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
                    cell5.innerHTML = `<input onkeyup="validate()" class="form-control faculty_password" type="text" name="faculty_password[]" value="" >
                    <label class='faculty_password_error' style='color:red;'></label>
                    `;
                    cell6.innerHTML =
                        `<button type="button" class="btn btn-primary remove_${newId}" onclick="removeFaculty(${null},${newId})">Remove</button>`;
                    
                    // show submit button
                    document.getElementsByClassName("submit_faculty")[0].classList.remove("hidden");
                    newId++;
                }
                function addFacultyInDB(){
                    // store data for many  input fields
                    var faculty_name = [];
                    var faculty_email = [];
                    var faculty_phone = [];
                    var faculty_department = [];
                    var faculty_password = [];
                    // get all input fields
                    var faculty_name_input = document.querySelectorAll(".faculty_name");
                    var faculty_email_input = document.querySelectorAll(".faculty_email");
                    var faculty_phone_input = document.querySelectorAll(".faculty_phone");
                    var faculty_department_input = document.querySelectorAll(".faculty_department");
                    var faculty_password_input = document.querySelectorAll(".faculty_password");
                    // store data in array
                    for (var i = 0; i < faculty_name_input.length; i++) {
                        faculty_name.push(faculty_name_input[i].value);
                        faculty_email.push(faculty_email_input[i].value);
                        faculty_phone.push(faculty_phone_input[i].value);
                        faculty_department.push(faculty_department_input[i].value);
                        faculty_password.push(faculty_password_input[i].value);
                    }
                    // send data to server
                    $.ajax({
                        url: `{{route('admin.faculty')}}`,
                        type: "POST",
                        dataType: "json",
                        data: {
                            faculty_name: faculty_name,
                            faculty_email: faculty_email,
                            faculty_phone: faculty_phone,
                            faculty_department: faculty_department,
                            faculty_password: faculty_password,
                            _token: "{{ csrf_token() }}",
                        },
                        success: function(response) {
                            console.log(response);
                            // if success then reload page
                            if (response) {
                                if (response["status"] == "success") {
                                    Swal.fire({
                                        title: 'Success',
                                        text: 'Faculty Added Successfully',
                                        icon: 'success',
                                        confirmButtonText: 'Ok'
                                    })
                                    // var faculty_name = response["data"]["faculty_name"];
                                    // var faculty_email = response["data"]["faculty_email"];
                                    // var faculty_phone = response["data"]["faculty_phone"];
                                    // var faculty_department = response["data"]["faculty_department"];
                                    data = response["data"];
                                    changeInputToRow(data)
                                }
                            }
                        },
                        error: function(error) {
                            console.log(error);
                            if (error.responseJSON["status"]) {
                                    Swal.fire({
                                        position: 'center',
                                        icon: 'error',
                                        title: 'Faculty already exists',
                                        showConfirmButton: false,
                                        timer: 1500
                                    })
                            }else {
                                // print validation errors
                                // reload
                                Swal.fire({
                                    position: 'center',
                                    icon: 'error',
                                    title: `Something went wrong`,
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                            }
                        }
                    });
                }

                function changeInputToRow(data){
                    // remove input fields
                    var faculty_name_input = document.querySelectorAll(".faculty_name");
                    var faculty_email_input = document.querySelectorAll(".faculty_email");
                    var faculty_phone_input = document.querySelectorAll(".faculty_phone");
                    var faculty_department_input = document.querySelectorAll(".faculty_department");
                    var faculty_password_input = document.querySelectorAll(".faculty_password");
                    // for (var i = 0; i < faculty_name_input.length; i++) {
                    //     faculty_name_input[i].remove();
                    //     faculty_email_input[i].remove();
                    //     faculty_phone_input[i].remove();
                    //     faculty_department_input[i].remove();
                    // }
                    // replace input fields 
                    var input_tr = document.querySelectorAll(".input-tr");
                    var faculty_name_td = document.querySelectorAll(".input-tr td input.faculty_name");
                    var faculty_email_td = document.querySelectorAll(".input-tr td input.faculty_email");
                    var faculty_phone_td = document.querySelectorAll(".input-tr td input.faculty_phone");
                    var faculty_department_td = document.querySelectorAll(".input-tr td select.faculty_department");
                    var faculty_password_td = document.querySelectorAll(".input-tr td input.faculty_password");
                    var s_no = document.querySelectorAll(".input-tr td:nth-child(1)");
                    var remove_td = document.querySelectorAll(".input-tr td button");
                    
                    
                    for (var i = 0; i < faculty_name_td.length; i++) {
                        var edit_td = document.createElement("td");
                        faculty_name_td[i].parentElement.innerHTML = data[i]["faculty_name"];
                        faculty_email_td[i].parentElement.innerHTML = data[i]["faculty_email"];
                        faculty_phone_td[i].parentElement.innerHTML = data[i]["faculty_phone"];
                        faculty_department_td[i].parentElement.innerHTML = data[i]["faculty_department"];
                        faculty_password_td[i].parentElement.innerHTML = data[i]["faculty_password"];
                        remove_td[i].parentElement.innerHTML = `<button type="button" class="btn btn-danger remove_${s_no[i].innerHTML}" onclick="removeFaculty(${data[i]["faculty_id"]},${s_no[i].innerHTML})">Remove</button>`;
                        edit_td.innerHTML = `<button type="button" class="btn btn-primary edit_${s_no[i].innerHTML}" onclick="editFaculty(${data[i]["faculty_id"]},${s_no[i].innerHTML})">Edit</button>`;
                        input_tr[i].appendChild(edit_td);
                        faculty_name_td[i].remove();
                        faculty_email_td[i].remove();
                        faculty_phone_td[i].remove();
                        faculty_department_td[i].remove();
                                                
                        input_tr[i].classList.remove("input-tr");
                    }
                }
                
                function editFaculty(id, i) {
                    // stop submit
                    event.preventDefault();
                    // change td to input
                    var faculty_name = document.getElementsByClassName("row_" + i)[0].getElementsByTagName("td")[1].innerHTML;
                    var faculty_email = document.getElementsByClassName("row_" + i)[0].getElementsByTagName("td")[2].innerHTML;
                    var faculty_phone = document.getElementsByClassName("row_" + i)[0].getElementsByTagName("td")[3].innerHTML;
                    var faculty_department = document.getElementsByClassName("row_" + i)[0].getElementsByTagName("td")[4].innerHTML;
                    var faculty_password = document.getElementsByClassName("row_" + i)[0].getElementsByTagName("td")[5].innerHTML;
                    document.getElementsByClassName("row_" + i)[0].getElementsByTagName("td")[1].innerHTML =
                    `<input type='text' class='form-control faculty_name' placeholder='Faculty Name' name='faculty_name[]' required value=${faculty_name}>
                    <label class='faculty_name_error' style='color:red;'></label>`;
                    document.getElementsByClassName("row_" + i)[0].getElementsByTagName("td")[2].innerHTML =
                    `<input type='email' value = "${faculty_email}" class='form-control faculty_email'  placeholder='Faculty Email' name='faculty_email[]' required>
                        <label class='faculty_email_error' style='color:red;'></label>`;
                    document.getElementsByClassName("row_" + i)[0].getElementsByTagName("td")[3].innerHTML =
                    `<input type='text' value="${faculty_phone}" class='form-control faculty_phone'  placeholder='Faculty Phone' name='faculty_phone[]' required>
                        <label class='faculty_phone_error' style='color:red;'></label>`;
                    document.getElementsByClassName("row_" + i)[0].getElementsByTagName("td")[4].innerHTML =
                       `<select class="form-control select faculty_department" aria-label
                                                                class="form-label faculty-department" id="department_1" name="faculty_department[]"
                                                                 required>
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
                    document.getElementsByClassName("row_" + i)[0].getElementsByTagName("td")[5].innerHTML =
                    `<input type='text' value="${faculty_password}" class='form-control faculty_password'  placeholder='Faculty Password' name='faculty_password[]' required>
                        <label class='faculty_password_error' style='color:red;'></label>`;
                    // change edit button to update button
                    document.getElementsByClassName("edit_" + i)[0].innerHTML = "Update";
                    // submit on click update
                    document.getElementsByClassName("edit_" + i)[0].setAttribute("onclick", "updateFaculty(" + id + "," + i + ")");
                }

                function updateFaculty(id, i) {
                    // stop submit
                    event.preventDefault();
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
                        type: "PUT",
                        url: "{{route('admin.faculty')}}" + "/" +id,
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



                function removeFaculty(id,i){
                    var faculty_name = document.getElementsByClassName("row_" + i)[0].getElementsByTagName("td")[1].innerHTML;
                    var faculty_department = document.getElementsByClassName("row_" + i)[0].getElementsByTagName("td")[4].innerHTML;
                    Swal.fire({
                        title: 'Are you sure',
                        html: `<p>Do you want to delete this faculty ?</p>
                                <p>Faculty Name : <b>${faculty_name}</b></p>
                                <p>Faculty Department : <b>${faculty_department}</b></p>`,
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.fire(
                                title = 'Deleted!',
                                html = '<p>Faculty <b>' + faculty_name + '</b> has been deleted.</p>',
                                icon = 'success',
                                showConfirmButton = false,
                                timer = 1500
                            );
                            removeFacultyFromDB(id, i);
                        }
                    });
                }
                function removeFacultyFromDB(id, i) {
                    console.log("here",id,i);
                    // remove from table
                    var table = document.querySelector('.add_faculty_table');
                    var row = document.querySelector('.row_' + i);
                    $(row).remove();
                    console.log(id, "removed");
                    // if id is present
                    if (id) {
                        $.ajax({
                            url: "{{route('admin.faculty')}}" + "/" +id,
                            type: 'DELETE',
                            dataType: 'json',
                            data: {
                                faculty_id: id,
                                _token: '{{ csrf_token() }}',
                            },
                            success: function(data) {
                                console.log(data);
                                // sweet alert on delete
                                // Swal.fire({
                                //     position: 'center',
                                //     icon: 'success',
                                //     title: 'Faculty Deleted Successfully',
                                //     showConfirmButton: false,
                                //     timer: 1500
                                // })
                            }
                        });
                    }

                }

                
            </script>
        </div>
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
