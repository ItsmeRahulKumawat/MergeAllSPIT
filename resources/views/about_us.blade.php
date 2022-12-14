<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title> About Us</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        {{-- cdn for animate min --}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" rel="stylesheet">
        {{-- cdn for owl carousel --}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
        {{-- cdn for lightbox --}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.min.css" rel="stylesheet">
        
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
    
        <!-- Template Stylesheet -->
        <link href="{{ asset('css/style1.css')}}" rel="stylesheet">
    </head>

    <body data-spy="scroll" data-offset="51">
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

        


        <!-- Team Start -->
        <div class="team" id="team">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <h2>Our Team</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/aarti maam.jpg" alt="Image">
                            </div>
                            <div class="team-text">
                                <h2>Dr.Aarti Karande</h2>
                                <h4>Guide and Assistant Professor</h4>
                                <p>
                                  <!--  Lorem ipsum dolor sit amet consec adipis elit. Etiam accum lacus
                                  --></p>
                                <div class="team-social">
                                    
                                    <a class="btn" href="https://www.linkedin.com/in/aartimkarande"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/shubham.jpg" alt="Image">
                            </div>
                            <div class="team-text">
                                <h2>Shubham Gupta</h2>
                                <h4>Developer</h4>
                                <p>
                                  <!--  Lorem ipsum dolor sit amet consec adipis elit. Etiam accum lacus
                                  --></p>
                                <div class="team-social">
                                    <a class="btn" href="https://www.linkedin.com/in/shoebham"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/swapnil.jpg" alt="Image">
                            </div>
                            <div class="team-text">
                                <h2>Swapnil Mhapankar</h2>
                                <h4>Developer</h4>
                                <p>
                                 <!--    Lorem ipsum dolor sit amet consec adipis elit. Etiam accum lacus
                                --></p>
                                <div class="team-social">
                                    <a class="btn" href="https://www.linkedin.com/in/swapnil-mhapankar-79b50a221"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>                    
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/rahul.jpg" height="170px" alt="Image">
                            </div>
                            <div class="team-text">
                                <h2>Rahul Kumawat</h2>
                                <h4>Developer</h4>
                                <p>
                                 <!--    Lorem ipsum dolor sit amet consec adipis elit. Etiam accum lacus
                                --></p>
                                <div class="team-social">
                                    
                                    <a class="btn" href="https://www.linkedin.com/in/rahulkumawat369"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>                    
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/srushti.jpg" alt="Image">
                            </div>
                            <div class="team-text">
                                <h2>Srushti Panchbai</h2>
                                <h4>Developer</h4>
                                <p>
                                 <!--    Lorem ipsum dolor sit amet consec adipis elit. Etiam accum lacus
                                --></p>
                                <div class="team-social">
                                    <a class="btn" href="https://www.linkedin.com/in/srushti-panchbhai-72035023b"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
        <!-- Team End -->
        
        
        <!-- Contact Start 
        <div class="contact wow fadeInUp" data-wow-delay="0.1s" id="contact">
            <div class="container-fluid">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <div class="contact-form">
                                <div id="success"></div>
                                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="control-group">
                                        <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                        <p class="help-block"></p>
                                    </div>
                                    <div>
                                        <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         Contact End -->


        <!-- 
        <div class="blog" id="blog">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>From Blog</p>
                    <h2>Latest Articles</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="blog-item wow fadeInUp" data-wow-delay="0.1s">
                            <div class="blog-img">
                                <img src="img/blog-1.jpg" alt="Blog">
                            </div>
                            <div class="blog-text">
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <div class="blog-meta">
                                    <p><i class="far fa-user"></i>Admin</p>
                                    <p><i class="far fa-list-alt"></i>Web Design</p>
                                    <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                    <p><i class="far fa-comments"></i>5</p>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Nullam commodo mattis mi. Nullam eu erat lectus. Proin viverra risus vitae luctus. Proin ut ante, vitae sapien. Fusce sem ac erat rhoncus, ornare mattis nisl massa et eros vitae pulvin
                                </p>
                                <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="blog-item wow fadeInUp" data-wow-delay="0.3s">
                            <div class="blog-img">
                                <img src="img/blog-2.jpg" alt="Blog">
                            </div>
                            <div class="blog-text">
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <div class="blog-meta">
                                    <p><i class="far fa-user"></i>Admin</p>
                                    <p><i class="far fa-list-alt"></i>Apps Design</p>
                                    <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                    <p><i class="far fa-comments"></i>10</p>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Nullam commodo mattis mi. Nullam eu erat lectus. Proin viverra risus vitae luctus. Proin ut ante, vitae sapien. Fusce sem ac erat rhoncus, ornare mattis nisl massa et eros vitae pulvin
                                </p>
                                <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      -->


        {{-- <div class="footer wow fadeIn" data-wow-delay="0.3s">
            <div class="container-fluid">
                <div class="container">
                    <div class="footer-info">
                        <h2>Thank You</h2>
                        <h3>for visiting our website...</h3>
                        
                    </div>
                </div>
                
            </div>
        </div>
         --}}
              
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/typed/typed.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>

        
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
