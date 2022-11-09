<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
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
    {{-- <div id="wrapper">
        
        <div id="main">
            <div class="content">
                @section('content')
                    <form>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="form2Example1" class="form-control" />
                            <label class="form-label" for="form2Example1">Email address</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="form2Example2" class="form-control" />
                            <label class="form-label" for="form2Example2">Password</label>
                        </div>

                        <!-- 2 column grid layout for inline styling -->
                        <div class="row mb-4">
                            <div class="col d-flex justify-content-center">
                                <!-- Checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="form2Example31"
                                        checked />
                                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                                </div>
                            </div>

                            <div class="col">
                                <!-- Simple link -->
                                <a href="#!">Forgot password?</a>
                            </div>
                        </div>

                        <!-- Submit button -->
                        <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>

                        <!-- Register buttons -->
                        <div class="text-center">
                            <p>Not a member? <a href="#!">Register</a></p>
                            <p>or sign up with:</p>
                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-facebook-f"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-google"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-twitter"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-github"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}
        <main class="main">
            <div class="container">
                <section class="wrapper-login">
                    <div class="heading">
                        <h1 class="text text-large">Sign In</h1>
                        <p class="text text-normal">New user? <span><a href="register" class="text text-links">Create an account</a></span>
                        </p>
                    </div>
                    <form name="signin" class="form">
                        <div class="input-control">
                            <label for="email" class="input-label" hidden>Email Address</label>
                            <input type="email" name="email" id="email" class="input-field" placeholder="Email Address">
                        </div>
                        <div class="input-control">
                            <label for="password" class="input-label" hidden>Password</label>
                            <input type="password" name="password" id="password" class="input-field" placeholder="Password">
                        </div>
                        <div class="input-control">
                            <a href="#" class="text text-links">Forgot Password</a>
                            <input type="submit" name="submit" class="input-submit" value="Sign In" disabled>
                        </div>
                    </form>
                    <div class="striped">
                        <span class="striped-line"></span>
                        <span class="striped-line"></span>
                    </div>
                    
                </section>
            </div>
        </main>
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
