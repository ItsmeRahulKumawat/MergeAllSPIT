<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>outreach</title>
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
                                <li class='mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-25693'
                                    id='mega-menu-item-25693'>
                                    <a class="mega-menu-link" target="_blank" href="proposal" tabindex="0">Proposal</a>
                                </li>
                                <li class='mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-25693'
                                    id='mega-menu-item-25693'>
                                    <a class="mega-menu-link" target="_blank" href="report" tabindex="0">Report</a>
                                </li>
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
        <div id="wrapper" class="card m-5" style="border-radius: 10px;">
            {{-- <h2 class="text-left">Outreach Submission</h2> --}}
            <div class="content">
                <div class="card-header">
                    <h3>Outreach Submission</h3>
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <form autocomplete="off" action="{{route('admin.outreach.edit',$outreach->id) }}" method="post" enctype="multipart/form-data">
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
                            <div id="addFaculty">
                                <div class='card mt-4'>
                                    <div class="card-header">
                                        <h5>Faculty</h5>
                                    </div>
                                    <div class="faculty_info card-body">
                                        <blockquote class='blockquote mb-0'>
                                            <div class="row">
                                                <div class="form-group col-md-6 mt-4">
                                                    <label class="form-label" for="faculty_department_1"
                                                        class="form-label">Department</label>
                                                    <select class="form-control select" aria-label
                                                        class="form-label faculty_department_1"
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
                                                            url: '/getDeptOutreach',
                                                            type: 'POST',
                                                            dataType: 'html',
                                                            data: {
                                                                department: selected,
                                                                _token: '{{ csrf_token() }}',
                                                                num: i
                                                            },
                                                            success: function(data) {

                                                                if (data == "") {
                                                                    $(`#faculty_name_${i}`).html(
                                                                        "<option selected disabled value=''>No faculty found in this department</option>"
                                                                    );
                                                                } else $(`#faculty_name_${i}`).html(data);
                                                            }
                                                        });
                                                    }
                                                </script>
                                                <div class="form-group col-md-6 mt-4">
                                                    <label class="form-label" for="faculty_name_1"
                                                        class="form-label">Faculty Name</label>
                                                    <select class="form-control select" aria-label class="form-label"
                                                        id="faculty_name_1" name="faculty_name_1" required>
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
                            <div class="form-group">
                                <label for="">Name of Activity</label>
                                <input required type="text" name="activity" id="activity" class="form-control"
                                    placeholder="" />
                                <span class="text-danger">
                                    @error('activity')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label class="my-1 mr-2" for="status">Coducted or Attended</label>
                                <select required class="custom-select my-1 mr-sm-2" id="status" name="status">
                                    <option selected>Choose...</option>
                                    <option value="Attended">Attended</option>
                                    <option value="Conducted">Conducted</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="plcae">Name of Organization where attended</label>
                                <input type="text" name="place" id="place" class="form-control"
                                    placeholder="" />
                                <span class="text-danger">
                                    @error('place')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <?php
                                $month = date('m');
                                $day = date('d');
                                $year = date('Y');
                                $today = $year . '-' . $month . '-' . $day;
                                ?>
                                <label class="form-flabel" for="date_activity">Date of Activity</label
                                    class="form-label">
                                <input required name="date_activity" type="date" class="form-control"
                                    id="date_activity" value="<?php echo $today; ?>" max="<?php echo date('Y-m-d'); ?>">
                            </div>
                            <div class="form-group">
                                <label class="my-1 mr-2" for="sponsorList">Sponsored</label>
                                <select required class="custom-select my-1 mr-sm-2" id="sponsorList"
                                    name="sponsorList">
                                    <option selected>Choose...</option>
                                    <option value="IEEE">IEEE (Institute of Electrical and Electronics Engineers)
                                    </option>
                                    <option value="ACM">ACM (Association for Computing Machinery)</option>
                                    <option value="ATAL">ATAL (AICTE ATAL)</option>
                                </select>
                                <span class="text-danger">
                                    @error('place')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="outreach_amount">Funding amount</label>
                                <input required min="500" type="number" name="outreach_amount"
                                    id="outreach_amount" class="form-control" placeholder="">
                                <span class="text-danger">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="photos" class="form-label">Photos</label>
                                <input type="file" class="form-control" id="photos" name="photos[]"
                                    accept="image/png, image/jpeg" multiple>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="report">Upload Report</label class="form-label">
                                <input type="file" class="form-control" id="report" name="report"
                                    accept=".pdf,.doc">
                            </div>
                            <button class="btn btn-info btn-md" type="submit">Submit Data</button>
                        </form>
                    </blockquote>
                    

                </div>
            </div>
        </div>
    </section>
    <script>
        (()=>{
            var status = document.getElementById('status');
            var sponsorList = document.getElementById('sponsorList');
            var outreach_amount = document.getElementById('outreach_amount');
            var photos = document.getElementById('photos');
            var report = document.getElementById('report');
            var date = document.getElementById('date_activity');
            var place = document.getElementById('place');
            var activity = document.getElementById('activity');
            var faculty_department = document.getElementById('faculty_department_1');
            var faculty_name = document.getElementById('faculty_name_1');
            
            var outreach = <?php echo $outreach; ?>;
            
            console.log(outreach);
            activity.value = outreach.outreach_activity;
            place.value = outreach.outreach_place;
            date.value = outreach.outreach_date;
            outreach_amount.value = outreach.outreach_amount;
            status.value = outreach.outreach_status;
            sponsorList.value = outreach.outreach_sponsors;
            faculty_department.value = outreach.outreach_faculty_department;
            faculty_department.onchange();
            
            setTimeout(() => {
                faculty_name.value = outreach.outreach_faculty_name;
            }, 1000);

            photos.style="color:transparent !important";
            var photosLabel = document.querySelector('label[for="photos"]');
            var photos_array = outreach.outreach_photos.split(',');
            var photosFileName = []
            var labelForPhotos = ""
            for(var i=0;i<photos_array.length;i++){
                photosFileName.push(photos_array[i].split('/')[photos_array[i].split('/').length-1]);
                labelForPhotos += photosFileName[i] + ", ";
            }

            console.log(outreach.outreach_photos)
            photosLabel.innerHTML = labelForPhotos;
            photos.onchange = function(){
                photosLabel.innerHTML = "";
                for(var i=0;i<photos.files.length;i++){
                    photosLabel.innerHTML += photos.files[i].name + ", ";
                }
            }

            
            report.style="color:transparent !important";
            var reportLabel = document.querySelector('label[for="report"]');
            var reportFileName = outreach.outreach_report.split('/');
            reportLabel.innerHTML = reportFileName[reportFileName.length-1];
            reportFileName=reportFileName[reportFileName.length-1];
            report.onchange = function(){
                reportLabel.innerHTML = report.files[0].name;
                reportFileName = report.files[0].name;
            }


            var report_file_path = "<?php echo asset('storage/'.$outreach->outreach_report) ?>";
            // create a new file
            var report_file = new File([report_file_path],reportFileName);
            var container = new DataTransfer();
            container.items.add(report_file);
            // add file to proposal file input
            console.log(report_file);
            report.files = container.files;
            console.log(container.files);
            console.log( report.files);


            var photos_file_path = "<?php echo asset('storage/'.$outreach->outreach_photos) ?>";
            // create a new file array
            var photos_file_array = [];
            for(var i=0;i<photosFileName.length;i++){
                photos_file_array.push(new File([photos_file_path],photosFileName[i]));
            }
            var container = new DataTransfer();
            for(var i=0;i<photos_file_array.length;i++){
                container.items.add(photos_file_array[i]);
            }
            // add file to proposal file input
            console.log(photos_file_array);
            photos.files = container.files;
            console.log(container.files);
            console.log( photos.files);

            report.onchange();
            photos.onchange();

            
            
        })()
    </script>


    {{-- Footer Part --}}
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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>
