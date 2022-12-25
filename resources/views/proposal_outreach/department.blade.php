<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Department Info</title>
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
                                <a class=" mega-menu-link nav-link" href="{{ route('admin.faculty') }}">Faculty</a>
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
                <h1>Department Info</h1>
            </div>
            <div class="wrapper card-body">

                <form method="POST" action="{{ url('admin/department') }}" novalidate>
                    @csrf
                    <?php
                    $departments = DB::table('departments')->get();
                    ?>
                    <table class="table table-striped table-bordered table-hover ">
                        <thead>
                            <tr>
                                <th>Department Id</th>
                                <th>Department Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($departments as $department)
                                <tr class="department_info" id="{{ $department->department_id }}">
                                    <td>{{ $department->department_id }}</td>
                                    <td>{{ $department->department_name }}</td>
                                    <td>

                                        {{-- edit button --}}
                                        <button type="button" class="btn btn-primary mr-1"
                                            onclick="editDepartment('{{ $department->department_id }}','{{ $department->department_name }}')">Edit</a>

                                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                                onclick="deleteDepartment('{{ $department->department_id }}','{{ $department->department_name }}')">
                                                Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                            {{-- <tr id="addDepartment" class="hidden">
                                <td>
                                    @if ($departments->count() == 0)
                                        <input type="text" name="department_id" id="department_id" value="1" readonly>
                                    @else
                                    <input type="text" name="department_id" id="department_id"
                                        class="form-control" value="{{ $department->department_id + 1 }}" readonly>
                                    @endif
                                    
                                    
                                </td>
                                <td>
                                    <input type="text" name="department_name" id="department_name"
                                        class="form-control" placeholder="Department Name" required>
                                </td>
                                <td>
                                    <button class="btn btn-success" onclick="addDepartment()">Add</button>
                                </td>
                            </tr> --}}
                        </tbody>
                    </table>
                    {{-- add new department button --}}
                    <button type="button" class="btn btn-success addNewDepartmentBtn"
                        onclick="addNewDepartmentInput()" data-toggle="modal" data-target="#addDepartment">
                        Add New Department</button>
                </form>
            </div>
            <script>
                // prevent page reload on form submit
                $('form').submit(function(e) {
                    e.preventDefault();
                });

                function deleteDepartment(department_id, department_name) {
                    Swal.fire({
                        title: 'Are you sure',
                        html: '<p>Do you want to delete this department?</p>',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.fire(
                                title = 'Deleted!',
                                html = '<p>Department <b>' + department_name + '</b> has been deleted.</p>',
                                icon = 'success',
                                showConfirmButton = false,
                                timer = 1500
                            );
                            deleteDepartmentFromDB(department_id, department_name);
                        }
                    });
                }

                function deleteDepartmentFromDB(department_id, department_name) {
                    // delete department from db
                    // send post request to delete
                    $.ajax({
                        type: "DELETE",
                        url: "{{route('admin.department')}}" + "/" +department_id,
                        data: {
                            department_id: department_id,
                            department_name: department_name,
                            _token: "{{ csrf_token() }}",
                        },
                        success: function(response) {
                            // remove the row which was deleted
                            $(`#${department_id}`).remove();
                        }
                    });

                }

                function addDepartment(department_name) {
                    // get values from form
                    console.log(department_name);
                    // send ajax request
                    $.ajax({
                        url: "{{route('admin.department')}}",
                        type: "POST",
                        dataType: 'json',
                        data: {
                            department_name: department_name,
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            if (response) {
                                if (response["status"] == "success") {
                                    Swal.fire({
                                        position: 'center',
                                        icon: 'success',
                                        title: 'Department added successfully',
                                        showConfirmButton: false,
                                        timer: 1500
                                    })
                                    department_id = response["data"]["department_id"];
                                    changeInputToRow(department_id, department_name);
                                } 
                            }
                        },
                        error: function(response) {
                            console.log(response);
                            if (response.responseJSON["status"]) {
                                    Swal.fire({
                                        position: 'center',
                                        icon: 'error',
                                        title: 'Department already exists',
                                        showConfirmButton: false,
                                        timer: 1500
                                    })
                                
                            }
                        }
                    });
                }

                function changeInputToRow(department_id, department_name) {
                    var table = document.querySelector("table");
                    var row = table.insertRow(-1);
                    row.setAttribute("id", department_id);
                    var cell1 = row.insertCell(0);
                    var cell2 = row.insertCell(1);
                    var cell3 = row.insertCell(2);
                    cell1.innerHTML = department_id;
                    cell2.innerHTML = department_name;
                    cell3.innerHTML = ` <button class="btn btn-primary mr-1" onclick="editDepartment('${department_id}','${department_name}')">Edit</a>
                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                        onclick="deleteDepartment('${department_id}','${department_name}')">
                                        Delete</button>`;
                    // clear form
                    $('#department_id').val('');
                    $('#department_name').val('');
                    // hide the form
                    $('#addDepartment').addClass('hidden');
                    // show error in unique key error

                }
                
                function addNewDepartmentInput() {
                    Swal.fire({
                        title: 'New Department Name',
                        html: `<input type="text" id="department_name" class="swal2-input" placeholder="Department Name">`,
                        showCancelButton: true,
                        focusConfirm: false,
                        confirmButtonText: 'Add',
                        cancelButtonText: 'Cancel',
                        preConfirm: () => {
                            const department_name = Swal.getPopup().querySelector('#department_name').value
                            if (!department_name) {
                                Swal.showValidationMessage(`Please enter department name`)
                            }
                            return {
                                department_name: department_name
                            }
                        }
                    }).then((result) => {
                        if (result.isConfirmed) {
                            addDepartment(result.value.department_name);

                        }
                    })
                }

                function editDepartment(department_id, department_name) {
                    // edit department
                    Swal.fire({
                        title: 'Edit Department',
                        html: `<input type="text" id="department_name" class="swal2-input" placeholder="${department_name}" name="department_name">`,
                        focusConfirm: false,
                        preConfirm: () => {
                            const department_name = Swal.getPopup().querySelector('#department_name').value
                            return {
                                department_name: department_name
                            }
                        }
                    }).then((result) => {
                        if (result.value) {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Department edited successfully',
                                showConfirmButton: false,
                                timer: 1500
                            });
                            console.log(result);
                            editDepartmentInDb(department_id, result.value.department_name);
                        }
                    });
                }

                function editDepartmentInDb(department_id, department_name) {
                    // edit department in db
                    // send post request to edit
                    $.ajax({
                        type: "PUT",
                        url: "{{route('admin.department')}}" + "/" +department_id,
                        data: {
                            department_id: department_id,
                            department_name: department_name,
                            _token: "{{ csrf_token() }}",
                        },
                        success: function(response) {
                            // edit the department name which was edited
                            $(`#${department_id}`).find('td:eq(1)').text(department_name);
                        }
                    });

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
