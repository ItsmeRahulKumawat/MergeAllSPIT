<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/custom.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/dash_icons.css')}}"/>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">

    <link rel="icon" type="image/png" href="{{asset('images/favicon.png')}}" />

    <link rel="stylesheet" type="text/css" href="https://www.spit.ac.in/wp-content/themes/spit-main/red.css" />

</head>
<body>
    <div class="header">
        @section('header')
        <div id="header">
            <div id="wrapper">
            <img src="https://www.spit.ac.in/wp-content/themes/spit-main/images/SPIT_logo.png" style="margin-top:5px; float:left;">
                <a href="http://www.spit.ac.in/">
                    <img src="https://www.spit.ac.in/wp-content/themes/spit-main/images/red/logo.gif" alt="Sardar Patel Institute of Technology" id="logo" />
                </a>
            <div id="search-links">
                <div id="links">
                    <strong><a href="https://www.spit.ac.in/ariia/">ARIIA</a></strong> |
                    <strong><a href="https://iic.spit.ac.in" target="_blank">IIC</a></strong> |
                    <strong><a href="https://www.spit.ac.in/nirf" style="text-decoration: none;border-bottom: 2px solid #f22d00;">NIRF</a></strong> |
                    <strong><a href="https://www.spit.ac.in/naac/">NAAC</a></strong> |
                    <strong><a href="https://www.spit.ac.in/nba/">NBA</a></strong>
                </div>
                <div id="social-links">
                    <ul id="" class="cnss-social-icon cn-fa-icon" style="text-align:center;">
                        <li class="cn-fa-facebook cn-fa-icon " style="display:inline-block;">
                            <a class="" target="_blank" href="https://www.facebook.com/SPITCOLLEGE/" title="Facebook" style="width:18px;height:18px;padding:3px 0;margin:2px;color: #ffffff;border-radius: 50%;">
                                <i title="Facebook" style="font-size:12px;" class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="cn-fa-twitter cn-fa-icon " style="display:inline-block;">
                            <a class="" target="_blank" href="https://twitter.com/bvbspit" title="Twitter" style="width:18px;height:18px;padding:3px 0;margin:2px;color: #ffffff;border-radius: 50%;">
                                <i title="Twitter" style="font-size:12px;" class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="cn-fa-linkedin cn-fa-icon " style="display:inline-block;">
                            <a class="" target="_blank" href="https://www.linkedin.com/school/bhartiya-vidya-bhavans-sardar-patel-institute-of-technology-munshi-nagar-andheri-mumbai/" title="LinkedIn" style="width:18px;height:18px;padding:3px 0;margin:2px;color: #ffffff;border-radius: 50%;">
                                <i title="LinkedIn" style="font-size:12px;" class="fa fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div id='search'>
                    <form id="searchform" action="https://www.spit.ac.in/" method="get" role="search">
                        <div>
                            <input type="text" value="search..." onfocus="if (this.value == 'search...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'search...';}" name="s" id="s" />
                            <input id="searchsubmit" type="submit" value="GO"/>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>

		<div id="nav">
            <div id="wrapper">

                <div id="mega-menu-wrap-primary" class="mega-menu-wrap">
                    <div class="mega-menu-toggle">
                        <div class="mega-toggle-blocks-left">
                            <div class='mega-toggle-block mega-menu-toggle-block mega-toggle-block-1' id='mega-toggle-block-1' tabindex='0'>
                                <span class='mega-toggle-label' role='button' aria-expanded='false'>
                                    <span class='mega-toggle-label-closed'>MENU</span>
                                    <span class='mega-toggle-label-open'>MENU</span>
                                </span>
                            </div>
                        </div>
                        <div class="mega-toggle-blocks-center">
                        </div>
                        <div class="mega-toggle-blocks-right">
                        </div>
                    </div>
                    <ul id="mega-menu-primary" class="mega-menu max-mega-menu mega-menu-horizontal mega-no-js" data-event="hover_intent" data-effect="fade_up" data-effect-speed="200" data-effect-mobile="disabled" data-effect-speed-mobile="0" data-mobile-force-width="false" data-second-click="go" data-document-click="collapse" data-vertical-behaviour="standard" data-breakpoint="600" data-unbind="true" data-hover-intent-timeout="300" data-hover-intent-interval="100">
                        <li class='mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-25693' id='mega-menu-item-25693'>
                            <a class="mega-menu-link" href="about_us" tabindex="0">About Us</a>
                        </li>
                        <li class='mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-25693' id='mega-menu-item-25693'>
                            <a class="mega-menu-link" href="/" tabindex="0">Home</a>
                        </li>
                        <li class='mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-25693' id='mega-menu-item-25693'>
                            <a class="mega-menu-link" href="student_registration" tabindex="0">Student Registration</a>
                        </li>
                        <li class='mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-25693' id='mega-menu-item-25693'>
                            <a class="mega-menu-link" href="login" tabindex="0">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!-- End Nav -->
        @show
    </div>

    <div id="wrapper">
    <div id="main">

    <div class="content">
        @section('content')

        @show
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
    </div>
</div>
</body>
</html>
