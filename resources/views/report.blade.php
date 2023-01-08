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

                            <li class='mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-25693' id='mega-menu-item-25693'>
                                <a class="mega-menu-link" target="_blank" href="http://spit.ac.in" tabindex="0">SPIT</a></li>
                            <li class='mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-25693' id='mega-menu-item-25693'>
                                <a class="mega-menu-link" target="_blank" href="/" tabindex="0">Home</a></li>
                            @guest
                                @if (Route::has('login'))
                                    <li id='mega-menu-item-25693' tabindex="0"
                                        class="nav-item mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-25693">
                                        <a class=" mega-menu-link nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif
                                <li class='mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-25693'
                                    id='mega-menu-item-25693'>
                                    <a class="mega-menu-link" target="_blank" href="proposal" tabindex="0">Proposal</a>
                                </li>
                                <li class='mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-25693'
                                    id='mega-menu-item-25693'>
                                    <a class="mega-menu-link" target="_blank" href="outreach" tabindex="0">Outreach</a>
                                </li>
                                {{-- @if (Route::has('register'))
                                <li  id="mega-menu-item-25693"  tabindex="0" class="nav-item mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-25693">
                                    <a class=" mega-menu-link nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                            @else
                                @if (Auth::user()->role == '1')
                                    <li id='mega-menu-item-25693' tabindex="0"
                                        class="nav-item mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-25693">
                                        <a class=" mega-menu-link nav-link"
                                            href="{{ route('admin.department') }}">Department</a>
                                    </li>
                                    <li id='mega-menu-item-25693' tabindex="0"
                                        class="nav-item mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-25693">
                                        <a class=" mega-menu-link nav-link" href="{{ route('admin.faculty') }}">Faculty</a>
                                    </li>
                                @endif
                                @if (Auth::user()->role == '0')
                                    <li class='mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-25693'
                                        id='mega-menu-item-25693'>
                                        <a class="mega-menu-link" target="_blank" href="{{route('proposal')}}"
                                            tabindex="0">Proposal</a>
                                    </li>
                                    <li class='mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-25693'
                                        id='mega-menu-item-25693'>
                                        <a class="mega-menu-link" target="_blank" href="{{route('outreach')}}"
                                            tabindex="0">Outreach</a>
                                    </li>
                                @endif
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
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
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
        <?php
            $faculty_names = array();
        ?>
        <div id="wrapper" class="card m-5" style="border-radius: 10px;">

            <div class="card-header">
                <h3>Report</h3>
            </div>
            <div class="card-body">
                @php
                    // guest session
                    
                    $link = route('admin.report');
                    if (Route::has('login')) {
                        $link = route('report');
                    }
                @endphp
                <form id="report-form" action="{{ $link }}" method="POST" novalidate>
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
                                        url: `{{route('getDept')}}`,
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
                                            } else {
                                                $(`#faculty_select`).html(data);
                                                checkFaculty();
                                            }
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
                        {{-- download button --}}

                        <table  data-show-export="true"
                        data-pagination="true"
                        data-side-pagination="client"
                        data-click-to-select="true"
                        data-toolbar="#toolbar"
                        data-show-toggle="true"
                        data-show-columns="true"
                        class="table table-striped table-bordered table-hover" id="tab">
                                <thead>
                                    @if (isset($proposal))
                                        <tr class="d-flex">
                                            <th class="col-1">Proposal Id</th>
                                            <th class="col-2">Proposal Name</th>
                                            <th class="col-1">Propsal Date</th>
                                            <th class="col-1">Proposal Amount</th>
                                            <th class="col-1">Authority/Organization</th>
                                            <th class="col-1"> Govt/Private</th>
                                            <th class="col-2">Faculty Name</th>
                                            <th class="col-1">Department Name</th>
                                            <th class="col-2">Actions</th>
                                        </tr>
                                    @else
                                    <tr class="d-flex">
                                        <th class="col-1">Outreach Id</th>
                                        <th class="col-2">Outreach Activity</th>
                                        <th class="col-1">Outreach Status</th>
                                        <th class="col-1">Outreach Date</th>
                                        <th class="col-1">Outreach Amount</th>
                                        <th class="col-1">Outreach Place</th>
                                        <th class="col-1">Outreach Sponsors</th>
                                        <th class="col-1">Outreach Faculty Name</th>
                                        <th class="col-1">Outreach Faculty Department</th>
                                        <th class="col-2">Actions</th>

                                    </tr>
                                    @endif
                                </thead>
                                <tbody>
                                    {{-- show proposal data that is fetched from post request --}}
                                    {{-- if proposal size is 0 --}}

                                    @if(isset($proposal))
                                        @if (count($proposal) == 0)
                                            <tr>
                                                <td colspan="4" class="text-center">No Data Found</td>
                                            </tr>
                                        @else
                                            @foreach ($proposal as $proposal)
                                                <tr class="d-flex">
                                                    {{-- {{-- reduce size of id --}}
                                                    @php
                                                        $id = $proposal->proposal_id;
                                                        // $id = substr($id, 0, 5) . '...' . substr($id, -5);
                                                    @endphp
                                                    <td class="col-1">{{ $id }}</td>
                                                    <td class="col-2">{{ $proposal->proposal_title }}</td>
                                                    <td class="col-1">{{ $proposal->proposal_submissionDate }}</td>
                                                    <td class="col-1">{{ $proposal->proposal_fundingAmount }}</td>
                                                    <td class="col-1">{{ $proposal->proposal_authorityOrOrganization }}
                                                    </td>
                                                    <td class="col-1">{{ $proposal->proposal_govtPrivate }}</td>
                                                    {{-- show faculty by getting faculty name from faculty group id --}}
                                                    {{-- hide this --}}
                                                    <?php
                                                    $faculty_names = DB::table('faculty_groups')
                                                        ->where('faculty_group_id', $proposal->proposal_faculty_group_id)
                                                        ->get();
                                                    ?>
                                                    <td class="col-2">{{ $faculty_names[0]->faculty_group_name }}</td>
                                                    <td class="col-1">{{ $faculty_names[0]->faculty_group_department }}
                                                    </td>

                                                    <td>
                                                        {{-- if admin is logged in --}}

                                                        @guest
                                                            @if (Route::has('login'))
                                                                <a href="{{ route('proposal') }}/{{ $proposal->proposal_id }}"
                                                                    class="btn btn-primary">View</a>
                                                            @endif
                                                        @else
                                                            @if (Auth::user()->role == '0')
                                                                <a href="{{ route('proposal') }}/{{ $proposal->proposal_id }}"
                                                                    class="btn btn-primary">View</a>
                                                            @else
                                                                <a href="{{ route('admin.proposal') }}/{{ $proposal->proposal_id }}"
                                                                    class="btn btn-primary">View</a>
                                                                <button class="btn btn-danger m-1"
                                                                    onclick="removeProposal('{{ $proposal->proposal_id }}')">
                                                                    {{-- bootstrap icon for trash --}}
                                                                    <i class="bi bi-trash"></i>
                                                                <button class="btn btn-warning"
                                                                    onclick="editProposal('{{ $proposal->proposal_id }}')">
                                                                    <i class="bi bi-pencil-square"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-success mt-2" onclick="createPDF(this,'{{ $proposal  }}')">
                                                                    Download</button>
                                                            @endif
                                                        @endguest
                                                        {{-- <a href="{{ route('pdfStream') }}" class="btn btn-primary">View</a> --}}

                                                </tr>
                                            @endforeach

                                        @endif
                                    @else
                                        @if (count($outreach) == 0)
                                        <tr>
                                            <td colspan="4" class="text-center">No Data Found</td>
                                        </tr>
                                        @else
                                            @foreach ($outreach as $outreach)
                                                <tr class="d-flex">
                                                {{-- {{-- reduce size of id --}}
                                                @php
                                                    $id = $outreach->id;
                                                @endphp
                                                <td class="col-1">{{ $id }}</td>
                                                <td class="col-2">{{ $outreach->outreach_activity }}</td>
                                                <td class="col-1">{{ $outreach->outreach_status }}</td>
                                                <td class="col-1">{{ $outreach->outreach_date }}</td>
                                                <td class="col-1">{{ $outreach->outreach_amount }}</td>
                                                <td class="col-1">{{ $outreach->outreach_place }}</td>
                                                <td class="col-1">{{ $outreach->outreach_sponsors }}</td>
                                            
                                                {{-- <?php
                                                $faculty_name = DB::table('faculties')
                                                    ->where('faculty_id', $outreach->outreach_faculty_name)
                                                    ->get();
                                                ?> --}}
                                                
                                                    {{-- @if(count($faculty_name)!=0) --}}
                                                        {{-- <td class="col-1">{{ $faculty_name[0]->faculty_name }}</td> --}}
                                                    {{-- @else --}}
                                                        <td class="col-1">{{$outreach->outreach_faculty_name}}</td>
                                                    {{-- @endif --}}
                                                    <td class="col-1">{{ $outreach->outreach_faculty_department }}</td>
                                                

                                                <td>
                                                    {{-- if admin is logged in --}}

                                                    @guest
                                                        @if (Route::has('login'))
                                                            <a href="{{ route('outreach') }}/{{ $outreach->id }}"
                                                                class="btn btn-primary">View</a>
                                                        @endif
                                                    @else
                                                        @if (Auth::user()->role == '0')
                                                            <a href="{{ route('outreach') }}/{{ $outreach->id  }}"
                                                                class="btn btn-primary">View</a>
                                                        @else
                                                            <a href="{{ route('admin.outreach') }}/{{$outreach->id  }}"
                                                                class="btn btn-primary m-1">View</a>
                                                            <button class="btn btn-danger"
                                                                onclick="removeOutreach('{{ $outreach->id  }}')">Delete</button>
                                                            <button type="submit" class="btn btn-warning m-1"
                                                                onclick="editOutreach('{{$outreach->id }}')">
                                                                <i class="bi bi-pencil-square"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-success m-1" onclick="createPDF(this,'{{ $outreach}}')">
                                                                Download</button>
                                                        @endif
                                                    @endguest
                                                    {{-- <a href="{{ route('pdfStream') }}" class="btn btn-primary">View</a> --}}
                                                    </tr>
                                            @endforeach
                                        @endif
                                    @endif
                                    {{-- show outreach data that is fetched from post request --}}
                                </tbody>
                                {{-- @else  --}}
                                {{-- <thead>
                                    
                                </thead> --}}
                                {{-- <tbody> --}}
                                    {{-- show proposal data that is fetched from post request --}}
                                    
                                                                {{-- <tbody> --}}
                            {{-- @endif --}}
                            
                        </table>
                        <div id="toolbar" class="select">
                            <select class="form-control">
                              <option value="">Export Basic</option>
                              <option value="all">Export All</option>
                              <option value="selected">Export Selected</option>
                            </select>
                        </div>
                          
                    </div>
                @endif
            </div>
    </section>
    <script>

        var $table = $('#tab')
        $(function() {
        $('#toolbar').find('select').change(function () {
            $table.bootstrapTable('destroy').bootstrapTable({
            exportDataType: $(this).val(),
            exportTypes: ['json', 'xml', 'csv', 'txt', 'sql', 'excel', 'pdf'],
            })
        }).trigger('change')
        })

        function createPDF(e,prop_outreach){
            
            // convert prop_outreach to json
            console.log(prop_outreach);
            prop_outreach = JSON.parse(prop_outreach);
            if(prop_outreach["proposal_id"]!=null){
                //sample proposal object {"proposal_id":"c14692c3c5150f6e6ccdf6528a0f1433","proposal_title":"test 7 jan 2","proposal_authorityOrOrganization":"Authority","proposal_govtPrivate":"Govt","proposal_abstract":"test 7 jan 2test 7 jan 2test 7 jan 2","proposal_fundingAmount":"1111","proposal_submissionDate":"2023-01-07","proposal_file":"proposal/2023/January/07/test 7 jan 2.pdf","proposal_faculty_group_id":"42","created_at":"2023-01-07T07:35:29.000000Z","updated_at":"2023-01-07T07:35:29.000000Z"}
                var win = window.open('', '', 'height=600,width=1200');
                // write text to the window
                win.document.write('<html><head>');
                win.document.write('<title></title>');   // <title> FOR PDF HEADER.
                var heading = "Proposal Report";
                win.document.write('</head>');
                var  faculty_in_proposal = prop_outreach.faculty_group_id;
                // query faculty group id from faculty group table
                // check if faculty names is set

                var faculty_group =  <?php echo json_encode($faculty_names); ?>;
                
                var faculty_name = faculty_group[0].faculty_group_name;
                var faculty_dept = faculty_group[0].faculty_group_department;
                // create a array of faculty name by splitting faculty_name by ,
                var faculty_name_array = faculty_name.split(",");
                var fauclty_dept_array = faculty_dept.split(",");
                win.document.write('<body> <h1 style="text-align:center">'+heading+'</h1>');
                    // write in paragraph
                    win.document.write('<p><b>Proposal ID: </b>'+prop_outreach.proposal_id+'</p>');
                    win.document.write('<p><b>Proposal Title: </b>'+prop_outreach.proposal_title+'</p>');
                    win.document.write('<p><b>Proposal Authority/</b>Organization: '+prop_outreach.proposal_authorityOrOrganization+'</p>');
                    win.document.write('<p><b>Proposal Govt/</b>Private: '+prop_outreach.proposal_govtPrivate+'</p>');
                    win.document.write('<p><b>Proposal Abstract: </b>'+prop_outreach.proposal_abstract+'</p>');
                    win.document.write('<p><b>Proposal Funding </b>Amount: '+prop_outreach.proposal_fundingAmount+'</p>');
                    win.document.write('<p><b>Proposal Submission </b>Date: '+prop_outreach.proposal_submissionDate+'</p>');
                    win.document.write('<p><b>Proposal File Path: </b>'+prop_outreach.proposal_file+'</p>');
                    for(var i=0;i<faculty_name_array.length;i++){
                        win.document.write( `<p>${(i+1)}. <b>Faculty Name : </b>' ${faculty_name_array[i]}</p>`);
                        win.document.write(`<p><b>  Faculty Department: </b>'${fauclty_dept_array[i]}</p>`);
                    }
                    win.document.write('<p><b>Created At</b>: '+prop_outreach.created_at+'</p>');
                    win.document.write('<p><b>Updated At</b>: '+prop_outreach.updated_at+'</p>');
                win.document.write('</body></html>');
                win.document.close(); 	// CLOSE THE CURRENT WINDOW.
                win.print();    // PRINT THE CONTENTS.
            }else{
                // sample outreach object {"id":81,"created_at":"2023-01-07T06:53:25.000000Z","updated_at":"2023-01-07T06:53:25.000000Z","outreach_faculty_department":"mca","outreach_faculty_name":"testfaculty","outreach_activity":"testtt","outreach_status":"Conducted","outreach_place":"test","outreach_date":"2023-01-07","outreach_sponsors":"ACM","outreach_amount":"1112","outreach_photos":"outreach/photos/2023/January/07/testtt_1.jpeg","outreach_report":"outreach/report/2023/January/07/testtt.pdf"}
                var win = window.open('', '', 'height=600,width=1200');
                // write text to the window
                win.document.write('<html><head>');
                win.document.write('<title></title>');   // <title> FOR PDF HEADER.
                var heading = "Outreach Report";
                ;
                win.document.write('</head>');
                win.document.write('<body> <h1 style="text-align:center">'+heading+'</h1>');
                    // write in paragraph
                    win.document.write('<p><b>Outreach ID: </b>'+prop_outreach.id+'</p>');
                    win.document.write('<p><b>Outreach Faculty Department: </b>'+prop_outreach.outreach_faculty_department+'</p>');
                    win.document.write('<p><b>Outreach Faculty Name: </b>'+prop_outreach.outreach_faculty_name+'</p>');
                    win.document.write('<p><b>Outreach Activity: </b>'+prop_outreach.outreach_activity+'</p>');
                    win.document.write('<p><b>Outreach Status: </b>'+prop_outreach.outreach_status+'</p>');
                    win.document.write('<p><b>Outreach Place: </b>'+prop_outreach.outreach_place+'</p>');
                    win.document.write('<p><b>Outreach Date: </b>'+prop_outreach.outreach_date+'</p>');
                    win.document.write('<p><b>Outreach Sponsors: </b>'+prop_outreach.outreach_sponsors+'</p>');
                    win.document.write('<p><b>Outreach Amount: </b>'+prop_outreach.outreach_amount+'</p>');
                    win.document.write('<p><b>Outreach Photos: </b>'+prop_outreach.outreach_photos+'</p>');
                    win.document.write('<p><b>Outreach Report: </b>'+prop_outreach.outreach_report+'</p>');
                    win.document.write('<p><b>Created At</b>: '+prop_outreach.created_at+'</p>');
                    win.document.write('<p><b>Updated At</b>: '+prop_outreach.updated_at+'</p>');
                win.document.write('</body></html>');
                win.document.close(); 	// CLOSE THE CURRENT WINDOW.
                win.print();    // PRINT THE CONTENTS.

            }
                //Create Window Object
                
                // get the contents inside the table
                // var row = e.parentNode.parentNode;
                // console.log(row);
                // // fill the page with row contents
                // var th = Array.from(document.querySelectorAll("th"));
                // th.pop();
                // var headings = th.children;
                // var contents = Array.from(row.children);
                // console.log(contents);
                // // remove the last element of the array
                // contents.pop();
                // // get th 
                // win.document.write('<html><head>');
                // win.document.write('<title></title>');   // <title> FOR PDF HEADER.
                // var heading = document.getElementById("reportType").value;
                // win.document.write('</head>');
                // win.document.write('<body>  <center><div id="Heading"> <h1 id="Report_Heading">' + heading + '</h1><hr style="width:40%;"> </div></center><br><br>');
                // win.document.write('<table border="1" cellspacing="0" cellpadding="5" style="width:100%;border-collapse:collapse;">');   // CREATE A TABLE WITH BORDER.
                // win.document.write('<tr>');
                // for(var i = 0; i < th.length; i++){
                //     win.document.write('<th>' + th[i].innerHTML + '</th>');  // TABLE HEADER.
                // }
                // win.document.write('</tr>');
                // win.document.write('<tr>');
                // for(var i = 0; i < contents.length; i++){
                //     win.document.write('<td>' + contents[i].innerHTML + '</td>');  // TABLE HEADER.
                // }
                // win.document.write('</tr>');
                // win.document.write('</table>');
                // win.document.write('</body></html>');

                // win.document.close(); 	// CLOSE THE CURRENT WINDOW.
                // win.print();    // PRINT THE CONTENTS.
            }
        function editProposal(id){
            var url = "{{ route('admin.proposal.edit', ':id') }}";
            url = url.replace(':id', id);
            window.location.href = url;
            // fill the form with the details
            
            
        }
        function editOutreach(outreachId){
            var url = "{{ route('admin.outreach.edit', ':id') }}";
            url = url.replace(':id', outreachId);
            window.location.href = url;
        }
        function removeOutreach(outreachId){
            console.log(outreachId);
            // sweet alert for confirming
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if(result.isConfirmed){
                    // if confirmed then delete the proposal
                    var url = "{{ route('admin.outreach.remove', ':id') }}";
                    url = url.replace(':id', outreachId);
                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        data: {
                            '_token': "{{ csrf_token() }}"
                        },
                        success: function(response){
                            console.log(response);
                            
                                Swal.fire(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success'
                                ).then((result) => {
                                    if(result.isConfirmed){
                                        location.reload();
                                    }
                                });
                        }
                    });
                }
            });

        }
        function removeProposal(proposalId) {
            console.log(proposalId);
            // sweet alert for confirming
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // if confirmed then delete the proposal
                    var url = "{{ route('admin.proposal.remove', ':id') }}";
                    url = url.replace(':id', proposalId);
                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        data: {
                            'proposal_id': proposalId,
                            "_token": "{{ csrf_token() }}",
                        },
                        success: function(response) {
                            console.log(response);
                            // sweet alert
                            Swal.fire({
                                title: 'Success',
                                text: 'Proposal deleted successfully',
                                icon: 'success',
                                confirmButtonText: 'Ok'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.reload();
                                }
                            })
                        }
                    });
                }
            })

        }
        //    change selected button on click
        const buttons = document.querySelectorAll('.btn-group button');
        buttons.forEach(button => {
            button.addEventListener('click', changeSelection, false);
        });

        function changeSelection() {
            buttons.forEach(btn => btn.classList.remove('selected'));
            this.classList.add('selected');
            console.log(this);
            // reset form
            var temp = document.querySelector("#reportType").value;
            console.log("before reset",temp);
            document.querySelector("#report-form").reset();
            // do not reset report type
            console.log("after reset",temp);

            document.querySelector("#reportType").value = temp;
            document.querySelector("#faculty_select").value = '0';
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
            var department_select = document.getElementById('faculty_department_1');
            if (department_select.value != 'Choose..') {
                generate_report_btn.disabled = false;
            }
            checkFaculty();
        }

        function checkFaculty() {
            // enable button if faculty is selected
            var faculty_select = document.getElementById('faculty_select');
            console.log("test", faculty_select.value);
            if (faculty_select.value != '0') {
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
        }

        faculty_btn.addEventListener('click', showFaculty, false);

        function showFaculty() {
            faculty_selection.classList.remove('hidden');
            date_selection.classList.add('hidden');
            department_selection.classList.add('hidden');
        }
    </script>
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
            <link href="https://unpkg.com/bootstrap-table@1.21.0/dist/bootstrap-table.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/tableexport.jquery.plugin@1.10.21/tableExport.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tableexport.jquery.plugin@1.10.21/libs/jsPDF/jspdf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tableexport.jquery.plugin@1.10.21/libs/jsPDF-AutoTable/jspdf.plugin.autotable.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.21.0/dist/bootstrap-table.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.21.0/dist/extensions/export/bootstrap-table-export.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    @show
    </div>
    
</body>

</html>
