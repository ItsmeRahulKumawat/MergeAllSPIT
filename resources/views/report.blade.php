<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report</title>
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
    <link rel="stylesheet" href="{{ asset('css/faculty.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/report.css') }}" />
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


                            @guest
                                @if (Route::has('login'))
                                    <li id='mega-menu-item-25693' tabindex="0"
                                        class="nav-item mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-25693">
                                        <a class=" mega-menu-link nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                {{-- @if (Route::has('register'))
                                <li  id="mega-menu-item-25693"  tabindex="0" class="nav-item mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-25693">
                                    <a class=" mega-menu-link nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                            @else
                                <li
                                    class="nav-item mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-25693 nav-item dropdown">
                                    <a id="navbarDropdown" class="mega-menu-link nav-link dropdown-toggle" href="#"
                                        role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-user-menu dropdown-menu dropdown-menu-end"
                                        aria-labelledby="navbarDropdown">
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
                <h3>Report</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/report') }}" method="POST" novalidate>
                    @csrf
                    {{-- select between proposal and outreach --}}
                    <div class="form-group">
                        <label for="reportType">Report Type</label>
                        <select class="form-control" id="reportType" name="reportType">
                            <option value="proposal">Proposal</option>
                            <option value="outreach">Outreach</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="column" style="width:30%">
                            <div class="btn-group" id="btn-group-a">
                                <button onclick="disableButton()" type="button"
                                    class="selected date_btn btn btn-primary">Date</button>
                                <button onclick="disableButton()" type="button"
                                    class="faculty_btn btn btn-primary">Faculty</button>
                                <button onclick="disableButton()" type="button"
                                    class="dept_btn btn btn-primary">Department</button>
                            </div>
                        </div>
                    </div>
                    <div class="row date_selection" id="date_selection">
                        <div class="column" style="width:30%">
                            <label class="form-label" for="start_date">Start Date</label>
                            <input class="form-control" type="date" id="start_date" name="start_date"
                                onchange="checkDate()">
                        </div>
                        <div class="column" style="width:30%">
                            <label class="form-label" for="end_date">End Date</label>
                            {{-- input with todays date --}}
                            <input onchange="checkDate()" class="form-control" type="date" id="end_date"
                                name="end_date" value="{{ date('Y-m-d') }}" max="<?php echo date('Y-m-d'); ?>">
                        </div>
                    </div>
                    @php
                    @endphp
                    <div class="row faculty_selection hidden" id="faculty_selection">
                        <div clas="column">
                            <label class="form-label" for="faculty_department_1"
                                class="form-label">Department*</label>
                            <select class="form-control select" aria-label class="form-label faculty_department_1"
                                id="faculty_department_1" name="faculty_department_1" required
                                onchange="getFacultyFromDept(1)">
                                <option selected disabled value="">Choose...</option>
                                {{-- get all departments --}}
                                <?php
                                $departments = DB::table('departments')->get();
                                foreach ($departments as $department) {
                                    echo "<option value='$department->department_name'>$department->department_name</option>";
                                }
                                ?>
                            </select>
                            <script>
                                $(document).ready(function() {
                                    getFacultyFromDept(1);
                                });

                                function getFacultyFromDept(i) {
                                    var selected = $(`#faculty_department_${i}`).val();
                                    console.log(selected);
                                    $.ajax({
                                        url: '/getDept',
                                        type: 'POST',
                                        dataType: 'html',
                                        data: {
                                            department: selected,
                                            _token: '{{ csrf_token() }}',
                                            num: i
                                        },
                                        success: function(data) {
                                            console.log(data);
                                            if (data == "") {
                                                $(`#faculty_select`).html(
                                                    "<option  selected disabled value=''>No faculty found in this department</option>"
                                                );
                                            } else $(`#faculty_select`).html(data);
                                        }
                                    });
                                }
                            </script>
                            <div class="form-group">
                                <label class="form-label" for="faculty_select" class="form-label">Faculty
                                    Name</label>
                                <select class="form-control select" aria-label class="form-label" id="faculty_select"
                                    name="faculty_select" onchange="checkFaculty()" required>
                                    <option selected disabled value="">Choose...</option>
                                </select>
                                <span class="error-msg" id="dept-msg">
                                </span>
                            </div>
                            {{-- <label class="form-label" for="faculty_select">Faculty</label>
                    <select class="form-control" id="faculty_select" name="faculty_select">
                        <option selected value="0" >Select Faculty</option>
                        <?php
                        $faculties = DB::table('faculties')->get();
                        foreach ($faculties as $faculty) {
                            echo "<option value='$faculty->faculty_id'>$faculty->faculty_name</option>";
                        }
                        ?>
                    </select> --}}
                        </div>
                    </div>
                    <div class="row department_selection hidden" id="department_selection">
                        <div class="column" style="width:30%">
                            <label class="form-label" for="department_select">Department</label>
                            <select onchange="checkDepartment()" class="form-control" aria-label
                                class="form-label faculty-department" id="department_select"
                                name="department_select">
                                <option selected disabled value="0">Choose...</option>
                                <?php
                                $departments = DB::table('departments')->get();
                                foreach ($departments as $department) {
                                    echo "<option value='$department->department_id'>$department->department_name</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="column" style="width:30%">
                            <button disabled type="submit" class="btn btn-primary" id="generate_report">Generate
                                Report</button>
                        </div>
                    </div>
                </form>
                {{-- make report table visible is $report is true --}}
                @if (isset($report))
                    <div class="report_table mt-5">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Proposal Id</th>
                                    <th>Proposal Name</th>
                                    <th>Propsal Date</th>
                                    <th>Proposal Amount</th>
                                    <th>Authority/Organization</th>
                                    <th> Govt/Private</th>
                                    <th>Faculty Name</th>
                                    <th>Department Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- show proposal data that is fetched from post request --}}
                                @if (isset($proposal))
                                    {{-- if proposal size is 0 --}}
                                    @if (count($proposal) == 0)
                                        <tr>
                                            <td colspan="4" class="text-center">No Data Found</td>
                                        </tr>
                                    @else
                                        @foreach ($proposal as $proposal)
                                            <tr>
                                                {{-- {{-- reduce size of id --}}
                                                @php
                                                    $id = $proposal->proposal_id;
                                                    $id = substr($id, 0, 5) . '...' . substr($id, -5);
                                                @endphp
                                                <td>{{ $id }}</td>
                                                <td>{{ $proposal->proposal_title }}</td>
                                                <td>{{ $proposal->proposal_submissionDate }}</td>
                                                <td>{{ $proposal->proposal_fundingAmount }}</td>
                                                <td>{{ $proposal->proposal_authorityOrOrganization }}</td>
                                                <td>{{ $proposal->proposal_govtPrivate }}</td>
                                                {{-- show faculty by getting faculty name from faculty group id --}}
                                                {{-- hide this --}}
                                                <?php
                                                $faculty_names = DB::table('faculty_groups')
                                                    ->where('faculty_group_id', $proposal->proposal_faculty_group_id)
                                                    ->get();
                                                ?>
                                                <td>{{ $faculty_names[0]->faculty_group_name }}</td>
                                                <td>{{ $faculty_names[0]->faculty_group_department }}</td>

                                                <td>
                                                    <a href="{{ url('/proposal/' . $proposal->proposal_id) }}"
                                                        class="btn btn-primary">View</a>
                                                    {{-- <a href="{{ route('pdfStream') }}" class="btn btn-primary">View</a> --}}

                                            </tr>
                                        @endforeach

                                    @endif
                                @endif
                                {{-- show outreach data that is fetched from post request --}}
                            </tbody>
                        </table>
                    </div>
                @endif
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
    <script>
        //    change selected button on click
        const buttons = document.querySelectorAll('.btn-group button');
        buttons.forEach(button => {
            button.addEventListener('click', changeSelection, false);
        });

        function changeSelection() {
            buttons.forEach(btn => btn.classList.remove('selected'));
            this.classList.add('selected');
        }

        // show date only on date select
        const date_btn = document.querySelector('.date_btn');
        const date_selection = document.querySelector('#date_selection');
        const faculty_btn = document.querySelector('.faculty_btn');
        const faculty_selection = document.querySelector('#faculty_selection');
        const dept_btn = document.querySelector('.dept_btn');
        const department_selection = document.querySelector('#department_selection');

        date_btn.addEventListener('click', showDate, false);

        function checkAll() {
            checkDate();
            checkFaculty();
            checkDepartment();
        }

        function showDate() {
            date_selection.classList.remove('hidden');
            faculty_selection.classList.add('hidden');
            department_selection.classList.add('hidden');
        }

        var generate_report_btn = document.querySelector('#generate_report');

        function checkDepartment() {
            // enable button if department is selected
            var department_select = document.getElementById('department_select');
            if (department_select.value != 'Choose..') {
                generate_report_btn.disabled = false;
            }
        }

        function checkFaculty() {
            // enable button if faculty is selected
            var faculty_select = document.getElementById('faculty_select');
            if (faculty_select.value != 'Choose..') {
                generate_report_btn.disabled = false;
            }
        }

        function checkDate() {
            var start_date = document.getElementById('start_date');
            var end_date = document.getElementById('end_date');
            // end date cannot be less than start date
            console.log(start_date.value);
            console.log(end_date.value);

            if (start_date.value != '' && end_date.value != '') {
                generate_report_btn.disabled = false;
            }
            if (start_date.value > end_date.value) {
                generate_report_btn.disabled = true;
            }
        }
        // show department only on department select
        dept_btn.addEventListener('click', showDept, false);

        function showDept() {
            department_selection.classList.remove('hidden');
            faculty_selection.classList.add('hidden');
            date_selection.classList.add('hidden');
        }


        function disableButton() {
            generate_report_btn.disabled = true;
            // clear date 
            var start_date = document.getElementById('start_date');
            var end_date = document.getElementById('end_date');
            start_date.value = '';
            end_date.value = '';
            // clear faculty
            var faculty_select = document.getElementById('faculty_select');
            // clear department
            var department_select = document.getElementById('department_select');
            // select option 0

            // if date is not empty
            // checkDate();
            // checkFaculty();
            // checkDepartment();
        }

        faculty_btn.addEventListener('click', showFaculty, false);

        function showFaculty() {
            faculty_selection.classList.remove('hidden');
            date_selection.classList.add('hidden');
            department_selection.classList.add('hidden');
        }
    </script>
</body>

</html>
