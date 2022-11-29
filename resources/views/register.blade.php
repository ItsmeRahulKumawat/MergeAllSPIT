<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
    <!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
<link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
<link rel="stylesheet" href="{{ asset('css/navbar.css') }}" />
<link rel="stylesheet" href="{{ asset('css/dash_icons.css') }}" />
<link rel="stylesheet" href="{{ asset('css/login.css') }}" />
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" type="text/css"
	href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
<link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}" />
<link rel="stylesheet" type="text/css" href="https://www.spit.ac.in/wp-content/themes/spit-main/red.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
	integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <script>
        // For Demo Purpose [Changing input group text on focus]
        $(function() {
            $("input, select").on("focus", function() {
                $(this).parent().find(".input-group-text").css("border-color", "#80bdff");
            });
            $("input, select").on("blur", function() {
                $(this).parent().find(".input-group-text").css("border-color", "#ced4da");
            });
        });
    </script>
	<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

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
                    <div id="mega-menu-wrap-primary" class="mega-menu-wrap mb-5">
                        {{-- <ul id="mega-menu-primary" class="mega-menu max-mega-menu mega-menu-horizontal mega-no-js"
                        data-event="hover_intent" data-effect="fade_up" data-effect-speed="200"
                        data-effect-mobile="disabled" data-effect-speed-mobile="0" data-mobile-force-width="false"
                        data-second-click="go" data-document-click="collapse" data-vertical-behaviour="standard"
                        data-breakpoint="600" data-unbind="true" data-hover-intent-timeout="300"
                        data-hover-intent-interval="100">
                        <li class='mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-25693'
                            id='mega-menu-item-25693'>
                            <a class="mega-menu-link" target="_blank" href="" tabindex="0">Login</a>
                        </li>
                        <li class='mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-25693'
                            id='mega-menu-item-25693'>
                            <a class="mega-menu-link" target="_blank" href="" tabindex="0">Register</a>
                        </li>
                    </ul> --}}
                    </div>
                </div>
            </div><!-- End Nav -->
        @show
    </div>
    <div class="container">
        <div class="row py-5 mt-4 align-items-center">
            <!-- For Demo Purpose -->
            <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
                <img src="https://res.cloudinary.com/mhmd/image/upload/v1569543678/form_d9sh6m.svg" alt=""
                    class="img-fluid mb-3 d-none d-md-block">
                <h1>Create an Account</h1>
                </p>
            </div>

            <!-- Registeration Form -->
            <div class="col-md-7 col-lg-6 ml-auto">
                <form action="#">
                    <div class="row">

                        <!-- First Name -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input id="firstName" type="text" name="firstname" placeholder="First Name"
                                class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Last Name -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input id="lastName" type="text" name="lastname" placeholder="Last Name"
                                class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Email Address -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-envelope text-muted"></i>
                                </span>
                            </div>
                            <input id="email" type="email" name="email" placeholder="Email Address"
                                class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Phone Number -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-phone-square text-muted"></i>
                                </span>
                            </div>
                            <select id="countryCode" name="countryCode" style="max-width: 80px"
                                class="custom-select form-control bg-white border-left-0 border-md h-100 font-weight-bold text-muted">
                                <option value="">+12</option>
                                <option value="">+10</option>
                                <option value="">+15</option>
                                <option value="">+18</option>
                            </select>
                            <input id="phoneNumber" type="tel" name="phone" placeholder="Phone Number"
                                class="form-control bg-white border-md border-left-0 pl-3">
                        </div>.

                        <!-- Job -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
									<i class="fas fa-user-graduate"></i>
                                </span>
                            </div>
                            <select id="job" name="jobtitle"
                                class="form-control custom-select bg-white border-left-0 border-md">
                                <option value="">Choose your job</option>
                                <option value="">Designer</option>
                                <option value="">Developer</option>
                                <option value="">Manager</option>
                                <option value="">Accountant</option>
                            </select>
                        </div>

                        <!-- Password -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-lock text-muted"></i>
                                </span>
                            </div>
                            <input id="password" type="password" name="password" placeholder="Password"
                                class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Password Confirmation -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-lock text-muted"></i>
                                </span>
                            </div>
                            <input id="passwordConfirmation" type="text" name="passwordConfirmation"
                                placeholder="Confirm Password" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group col-lg-12 mx-auto mb-0">
                            <a href="#" class="btn btn-primary btn-block py-2">
                                <span class="font-weight-bold">Create your account</span>
                            </a>
                        </div>

                        <!-- Divider Text -->
                        <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                            <div class="border-bottom w-100 ml-5"></div>
                            <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                            <div class="border-bottom w-100 mr-5"></div>
                        </div>

                        <!-- Already Registered -->
                        <div class="text-center w-100">
                            <p class="text-muted font-weight-bold">Already Registered? <a href="#"
                                    class="text-primary ml-2">Login</a></p>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
	<div class="footer">
        @section('footer')
            <p>
            <a href='http://www.spit.ac.in/'>Home</a> |
            <a href='http://www.aicte-india.org/' target='_blank'>AICTE</a> |
            <a href='http://www.mu.ac.in/' target='_blank'>Mumbai University</a> |
            <a href='http://www.dtemaharashtra.gov.in/' target='_blank'>DTE</a> |
            <a href='http://www.spit.ac.in/wp-content/uploads/SPITVirtualTour/SPIOT_Templates/SPIOTFL' target='_blank'>Campus Virtual Tour</a> |
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
            <ul id="" class="cnss-social-icon " style="text-align:center;"><li class="cn-fa-facebook cn-fa-icon " style="display:inline-block;"><a class="" target="_blank" href="https://www.facebook.com/SPITCOLLEGE/" title="Facebook" style="width:18px;height:18px;padding:3px 0;margin:2px;color: #ffffff;border-radius: 50%;"><i title="Facebook" style="font-size:12px;" class="fa fa-facebook"></i></a></li><li class="cn-fa-twitter cn-fa-icon " style="display:inline-block;"><a class="" target="_blank" href="https://twitter.com/bvbspit" title="Twitter" style="width:18px;height:18px;padding:3px 0;margin:2px;color: #ffffff;border-radius: 50%;"><i title="Twitter" style="font-size:12px;" class="fa fa-twitter"></i></a></li><li class="cn-fa-linkedin cn-fa-icon " style="display:inline-block;"><a class="" target="_blank" href="https://www.linkedin.com/school/bhartiya-vidya-bhavans-sardar-patel-institute-of-technology-munshi-nagar-andheri-mumbai/" title="LinkedIn" style="width:18px;height:18px;padding:3px 0;margin:2px;color: #ffffff;border-radius: 50%;"><i title="LinkedIn" style="font-size:12px;" class="fa fa-linkedin"></i></a></li></ul></p>
            <script src="{{asset('js/bootstrap.js')}}"></script>
            <script src="{{asset('js/app.js')}}"></script>
     @show
    </div>
</body>


</html>
