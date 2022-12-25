<html>

<head>
    <title>Proposal</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

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
                        <li class='mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-25693' id='mega-menu-item-25693'>
                            <a class="mega-menu-link" target="_blank" href="outreach" tabindex="0">Outreach</a></li>
                            <li class='mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-25693' id='mega-menu-item-25693'>
                                <a class="mega-menu-link" target="_blank" href="report" tabindex="0">Report</a></li>
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
            <div class="content">
                @section('content')
                    <div class="card-header">
                        <h3>Proposal Submission</h3>
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <div class="form">
                                <form autocomplete="off" method="POST" action="{{ url('/proposal') }}"
                                    enctype="multipart/form-data">
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
                                    <div class="form-group">
                                        <label class="form-label" for="proposal_title">Title of Proposal</label
                                            class="form-label">
                                        <input name="proposal_title" type="text" class="form-control"
                                            id="title-proposal">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mt-4">
                                            <label class="form-label"
                                                for="proposal_authorityOrOrganization[]">Authority/Organization</label
                                                class="form-label">
                                            <select name="proposal_authorityOrOrganization[]" class="form-control"
                                                id="exampleFormControlSelect1">
                                                <option value="Authority">Authority</option>
                                                <option value="Organization">Organization</option>
                                            </select>
                                        </div>

                                        <div class="col-md-4 mt-4">
                                            <label class="form-label" for="proposal_govtPrivate[]">Govt./Private</label
                                                class="form-label">
                                            <select name="proposal_govtPrivate[]" class="form-control"
                                                id="exampleFormControlSelect1">
                                                <option value="Govt">Govt</option>
                                                <option value="Private">Private</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mt-4">
                                            <label class="form-label" for="proposal_numberOfFaculty">Number of
                                                Faculty</label class="form-label">

                                            <select class="form-control select" aria-label class="form-label"
                                                id="number_of_faculty" name="number_of_faculty"
                                                onchange="return addFaculty()" required>
                                                <option disabled value="">Choose...</option>
                                                <option selected value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div id="addFaculty">
                                        <div class='card mt-4'>
                                            <div class="card-header">
                                                <h5>Faculty 1</h5>
                                            </div>
                                            <div class="faculty_info card-body">
                                                <blockquote class='blockquote mb-0'>
                                                    <div class="row">
                                                        <div class="form-group col-md-6 mt-4">
                                                            <label class="form-label" for="faculty_department_1"
                                                                class="form-label">Department*</label>
                                                            <select class="form-control select" aria-label
                                                                class="form-label faculty_department_1"
                                                                id="faculty_department_1" name="faculty_department_1"
                                                                required onchange="getFacultyFromDept(1)">
                                                                <option selected disabled value="">Choose...</option>
                                                                {{-- get all departments --}}
                                                                <?php
                                                                $departments = DB::table('departments')->get();
                                                                foreach ($departments as $department) {
                                                                    echo "<option value='$department->department_name'>$department->department_name</option>";
                                                                }
                                                                ?>
                                                            </select>
                                                            <span class="error-msg" id="dept-msg">
                                                            </span>
                                                        </div>
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
                                                                        
                                                                        if(data==""){
                                                                            $(`#faculty_name_${i}`).html(
                                                                                "<option selected disabled value=''>No faculty found in this department</option>"
                                                                            );
                                                                        }
                                                                        else $(`#faculty_name_${i}`).html(data);
                                                                    }
                                                                });
                                                            }
                                                        </script>
                                                        <div class="form-group col-md-6 mt-4">
                                                            <label class="form-label" for="faculty_name_1"
                                                                class="form-label">Faculty Name</label>
                                                            <select class="form-control select" aria-label
                                                                class="form-label" id="faculty_name_1"
                                                                name="faculty_name_1"required>
                                                                <option selected disabled value="">Choose...</option>

                                                            </select>
                                                            <span class="error-msg" id="dept-msg">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        function addFaculty() {
                                            $("#addFaculty").empty();
                                            var facultyCount = document.getElementById("number_of_faculty").value;
                                            for (var i = 1; i <= facultyCount; i++) {
                                                $(` <div class='card mt-4'>
                                <div class="card-header">
                                    <h5>Faculty ${i}</h5>
                                </div>
                                <div class="faculty_info card-body">
                                    <blockquote class='blockquote mb-0'>
                                    <div class="row">
                                    <div class="form-group col-md-6 mt-4">
                                        <label class="form-label" for="faculty_department_${i}" class="form-label class="form-label"">Department*</label class="form-label">
                                        <select class="form-control select" aria-label class="form-label" id="faculty_department_${i}" name="faculty_department_${i}" required onChange="getFacultyFromDept(${i})">
                                            <option selected disabled value="">Choose...</option>
                                            // get all departments
                                                                <?php
                                                                $departments = DB::table('departments')->get();
                                                                foreach ($departments as $department) {
                                                                    echo "<option value='$department->department_name'>$department->department_name</option>";
                                                                }
                                                                ?>
                                        </select>
                                        <span class="error-msg" id="dept-msg">
                                        </span>
                                    </div>
                                    <div class="form-group col-md-6 mt-4">
                                        <label class="form-label" for="faculty_name" class="form-label class="form-label"">Faculty Name</label class="form-label">
                                        <select class="form-control select" aria-label class="form-label"="Default select example" id="faculty_name_${i}" name="faculty_name_${i}" required>
                                            <option selected disabled value="">Choose...</option>
                                        </select>
                                        <span class="error-msg" id="dept-msg">
                                        </span>
                                    </div>
                                    </div>
                                    </blockquote>
                                </div>
                            </div>`).appendTo("#addFaculty");
                                            }
                                        }
                                    </script>
                                    <div class="form-group mt-4">
                                        <label class="form-label" for="abstract">Abstract</label class="form-label">
                                        <textarea name="proposal_abstract" class="form-control" id="abstract" rows="3"></textarea>
                                    </div>
                                    <div class="row">

                                        <div class="form-group col-md-4 mt-4">
                                            <label class="form-label" for="proposal_fundingAmount">Funding amount applied
                                                for</label class="form-label">
                                            <input name="proposal_fundingAmount" type="Number" class="form-control"
                                                id="amount">
                                        </div>
                                        <div class="form-group col-md-4 mt-4">
                                            <?php
                                            $month = date('m');
                                            $day = date('d');
                                            $year = date('Y');
                                            $today = $year . '-' . $month . '-' . $day;
                                            ?>
                                            <label class="form-flabel" for="amount">Date of Submission</label
                                                class="form-label">
                                            <input name="proposal_submissionDate" type="date" class="form-control"
                                                id="submission-date" value="<?php echo $today; ?>"
                                                max="<?php echo date('Y-m-d'); ?>">
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label class="form-label" for="proposal_file">Upload File</label
                                            class="form-label">
                                        <input type="file" name="proposal_file" accept="application/pdf"
                                            id="proposal_file" class="form-control" aria-describedby="">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </blockquote>
                    @show
                </div>


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

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

</body>

</html>
