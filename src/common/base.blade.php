<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Webarch - Responsive Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN PLUGIN CSS -->
    <link href="{{asset('assets/plugins/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/jquery-metrojs/MetroJs.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/shape-hover/css/demo.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/shape-hover/css/component.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/owl-carousel/owl.carousel.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/owl-carousel/owl.theme.css')}}" />
    <link href="{{asset('assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css')}}" media="screen" />
    <link href="{{asset('assets/plugins/jquery-slider/css/jquery.sidr.light.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{asset('assets/plugins/jquery-ricksaw-chart/css/rickshaw.css')}}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{asset('assets/plugins/Mapplic/mapplic/mapplic.css')}}" type="text/css" media="screen">
    <!-- END PLUGIN CSS -->
    <!-- BEGIN PLUGIN CSS -->
    <link href="{{asset('assets/plugins/pace/pace-theme-flash.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('assets/plugins/bootstrapv3/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/bootstrapv3/css/bootstrap-theme.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{asset('assets/plugins/animate.min.css" rel="stylesheet')}}" type="text/css" />
    <link href="{{asset('assets/plugins/jquery-scrollbar/jquery.scrollbar.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PLUGIN CSS -->
    <!-- BEGIN CORE CSS FRAMEWORK -->
    <link href="{{asset('assets/webarch/css/webarch.css')}}" rel="stylesheet" type="text/css" />
    <!-- END CORE CSS FRAMEWORK -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse ">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner">
        <div class="header-seperation">
            <ul class="nav pull-left notifcation-center visible-xs visible-sm">
                <li class="dropdown">
                    <a href="#main-menu" data-webarch="toggle-left-side">
                        <i class="material-icons">menu</i>
                    </a>
                </li>
            </ul>
            <!-- BEGIN LOGO -->
            <a href="index.html">
                <img src="{{asset('assets/img/logo.png')}}" class="logo" alt="" data-src="{{asset('assets/img/logo.png')}}"
                     data-src-retina="{{asset('assets/img/logo2x.png')}}" width="106" height="21" />
            </a>
            <!-- END LOGO -->
            <ul class="nav pull-right notifcation-center">
                <li class="dropdown hidden-xs hidden-sm">
                    <a href="index.html" class="dropdown-toggle active" data-toggle="">
                        <i class="material-icons">home</i>
                    </a>
                </li>
                <li class="dropdown hidden-xs hidden-sm">
                    <a href="email.html" class="dropdown-toggle">
                        <i class="material-icons">email</i><span class="badge bubble-only"></span>
                    </a>
                </li>
                <li class="dropdown visible-xs visible-sm">
                    <a href="#" data-webarch="toggle-right-side">
                        <i class="material-icons">chat</i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <div class="header-quick-nav">
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="pull-left">
                <ul class="nav quick-section">
                    <li class="quicklinks">
                        <a href="#" class="" id="layout-condensed-toggle">
                            <i class="material-icons">menu</i>
                        </a>
                    </li>
                </ul>
                <ul class="nav quick-section">
                    <li class="quicklinks  m-r-10">
                        <a href="#" class="">
                            <i class="material-icons">refresh</i>
                        </a>
                    </li>
                    <li class="quicklinks">
                        <a href="#" class="">
                            <i class="material-icons">apps</i>
                        </a>
                    </li>
                    <li class="quicklinks"> <span class="h-seperate"></span></li>
                    <li class="quicklinks">
                        <a href="#" class="" id="my-task-list" data-placement="bottom" data-content='' data-toggle="dropdown" data-original-title="Notifications">
                            <i class="material-icons">notifications_none</i>
                            <span class="badge badge-important bubble-only"></span>
                        </a>
                    </li>
                    <li class="m-r-10 input-prepend inside search-form no-boarder">
                        <span class="add-on"> <i class="material-icons">search</i></span>
                        <input name="" type="text" class="no-boarder " placeholder="Search Dashboard" style="width:250px;">
                    </li>
                </ul>
            </div>
            <div id="notification-list" style="display:none">
                <div style="width:300px">
                    <div class="notification-messages info">
                        <div class="user-profile">
                            <img src="{{asset('assets/img/profiles/d.jpg')}}" alt="" data-src="{{asset('assets/img/profiles/d.jpg')}}"
                                 data-src-retina="{{asset('assets/img/profiles/d2x.jpg')}}" width="35" height="35">
                        </div>
                        <div class="message-wrapper">
                            <div class="heading">
                                David Nester - Commented on your wall
                            </div>
                            <div class="description">
                                Meeting postponed to tomorrow
                            </div>
                            <div class="date pull-left">
                                A min ago
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="notification-messages danger">
                        <div class="iconholder">
                            <i class="icon-warning-sign"></i>
                        </div>
                        <div class="message-wrapper">
                            <div class="heading">
                                Server load limited
                            </div>
                            <div class="description">
                                Database server has reached its daily capicity
                            </div>
                            <div class="date pull-left">
                                2 mins ago
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="notification-messages success">
                        <div class="user-profile">
                            <img src="{{asset('assets/img/profiles/h.jpg')}}" alt="" data-src="{{asset('assets/img/profiles/h.jpg')}}"

                                 data-src-retina="{{asset('assets/img/profiles/h2x.jpg')}}" width="35" height="35">
                        </div>
                        <div class="message-wrapper">
                            <div class="heading">
                                You haveve got 150 messages
                            </div>
                            <div class="description">
                                150 newly unread messages in your inbox
                            </div>
                            <div class="date pull-left">
                                An hour ago
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- END TOP NAVIGATION MENU -->
            <!-- BEGIN CHAT TOGGLER -->
            <div class="pull-right">
                <div class="chat-toggler sm">
                    <div class="profile-pic">
                        <img src="{{asset('assets/img/profiles/avatar_small.jpg')}}" alt="" data-src="{{asset('assets/img/profiles/avatar_small.jpg')}}"
                             data-src-retina="{{asset('assets/img/profiles/avatar_small2x.jpg')}}" width="35" height="35" />
                        <div class="availability-bubble online"></div>
                    </div>
                </div>
                <ul class="nav quick-section ">
                    <li class="quicklinks">
                        <a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">
                            <i class="material-icons">tune</i>
                        </a>
                        <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
                            <li>
                                <a href="user-profile.html"> My Account</a>
                            </li>
                            <li>
                                <a href="calender.html">My Calendar</a>
                            </li>
                            <li>
                                <a href="email.html"> My Inbox&nbsp;&nbsp;
                                    <span class="badge badge-important animated bounceIn">2</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="login.html"><i class="material-icons">power_settings_new</i>&nbsp;&nbsp;Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <li class="quicklinks"> <span class="h-seperate"></span></li>
                    <li class="quicklinks">
                        <a href="#" class="chat-menu-toggle" data-webarch="toggle-right-side"><i class="material-icons">chat</i><span class="badge badge-important hide">1</span>
                        </a>
                        <div class="simple-chat-popup chat-menu-toggle hide">
                            <div class="simple-chat-popup-arrow"></div>
                            <div class="simple-chat-popup-inner">
                                <div style="width:100px">
                                    <div class="semi-bold">David Nester</div>
                                    <div class="message">Hey you there </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- END CHAT TOGGLER -->
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<!-- BEGIN CONTAINER -->
<div class="page-container row-fluid">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar " id="main-menu">
        <!-- BEGIN MINI-PROFILE -->
        <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
            <div class="user-info-wrapper sm">
                <div class="profile-wrapper sm">
                    <img src="{{asset('assets/img/profiles/avatar.jpg')}}" alt="" data-src="{{asset('assets/img/profiles/avatar.jpg')}}"
                         data-src-retina="{{asset('assets/img/profiles/avatar2x.jpg')}}" width="69" height="69" />
                    <div class="availability-bubble online"></div>
                </div>
                <div class="user-info sm">
                    <div class="username">Fred <span class="semi-bold">Smith</span></div>
                    <div class="status">Life goes on...</div>
                </div>
            </div>
            <!-- END MINI-PROFILE -->
            <!-- BEGIN SIDEBAR MENU -->
            <p class="menu-title sm">BROWSE <span class="pull-right"><a href="javascript:;"><i class="material-icons">refresh</i></a></span></p>
                @include('common.menu')
            <div class="clearfix"></div>
            <!-- END SIDEBAR MENU -->
        </div>
    </div>
    <a href="#" class="scrollup">Scroll</a>
    <div class="footer-widget">
        <div class="progress transparent progress-small no-radius no-margin">
            <div class="progress-bar progress-bar-success animate-progress-bar" data-percentage="79%" style="width: 79%;"></div>
        </div>
        <div class="pull-right">
            <div class="details-status"> <span class="animate-number" data-value="86" data-animation-duration="560">86</span>% </div>
            <a href="lockscreen.html"><i class="material-icons">power_settings_new</i></a></div>
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN PAGE CONTAINER-->
    <div class="page-content">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div class="clearfix"></div>
        <div class="content sm-gutter">
            @yield('content')
        </div>
    </div>
    <!-- BEGIN CHAT -->
    <div class="chat-window-wrapper">
        <div id="main-chat-wrapper" class="inner-content">
            <div class="chat-window-wrapper scroller scrollbar-dynamic" id="chat-users">
                <div class="chat-header">
                    <div class="pull-left">
                        <input type="text" placeholder="search">
                    </div>
                    <div class="pull-right">
                        <a href="#" class="">
                            <div class="iconset top-settings-dark "></div>
                        </a>
                    </div>
                </div>
                <div class="side-widget">
                    <div class="side-widget-title">group chats</div>
                    <div class="side-widget-content">
                        <div id="groups-list">
                            <ul class="groups">
                                <li>
                                    <a href="#">
                                        <div class="status-icon green"></div>Office work</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="status-icon green"></div>Personal vibes</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="side-widget fadeIn">
                    <div class="side-widget-title">favourites</div>
                    <div id="favourites-list">
                        <div class="side-widget-content">
                            <div class="user-details-wrapper active" data-chat-status="online" data-chat-user-pic="{{asset('assets/img/profiles/d.jpg')}}"
                                 data-chat-user-pic-retina="{{asset('assets/img/profiles/d2x.jpg')}}" data-user-name="Jane Smith">
                                <div class="user-profile">
                                    <img src="{{asset('assets/img/profiles/d.jpg')}}" alt="" data-src="{{asset('assets/img/profiles/d.jpg')}}"
                                         data-src-retina="{{asset('assets/img/profiles/d2x.jpg')}}" width="35" height="35">
                                </div>
                                <div class="user-details">
                                    <div class="user-name">
                                        Jane Smith
                                    </div>
                                    <div class="user-more">
                                        Hello you there?
                                    </div>
                                </div>
                                <div class="user-details-status-wrapper">
                                    <span class="badge badge-important">3</span>
                                </div>
                                <div class="user-details-count-wrapper">
                                    <div class="status-icon green"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="{{asset('assets/img/profiles/d.jpg')}}"
                                 data-chat-user-pic-retina="{{asset('assets/img/profiles/d2x.jpg')}}" data-user-name="David Nester">
                                <div class="user-profile">
                                    <img src="{{asset('assets/img/profiles/c.jpg')}}" alt="" data-src="{{asset('assets/img/profiles/c.jpg')}}"
                                         data-src-retina="{{asset('assets/img/profiles/c2x.jpg')}}" width="35" height="35">
                                </div>
                                <div class="user-details">
                                    <div class="user-name">
                                        David Nester
                                    </div>
                                    <div class="user-more">
                                        Busy, Do not disturb
                                    </div>
                                </div>
                                <div class="user-details-status-wrapper">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="user-details-count-wrapper">
                                    <div class="status-icon red"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="side-widget">
                    <div class="side-widget-title">more friends</div>
                    <div class="side-widget-content" id="friends-list">
                        <div class="user-details-wrapper" data-chat-status="online" data-chat-user-pic="{{asset('assets/img/profiles/d.jpg')}}"
                             data-chat-user-pic-retina="{{asset('assets/img/profiles/d2x.jpg')}}" data-user-name="Jane Smith">
                            <div class="user-profile">
                                <img src="{{asset('assets/img/profiles/d.jpg')}}" alt="" data-src="{{asset('assets/img/profiles/d.jpg')}}"
                                     data-src-retina="{{asset('assets/img/profiles/d2x.jpg')}}" width="35" height="35">
                            </div>
                            <div class="user-details">
                                <div class="user-name">
                                    Jane Smith
                                </div>
                                <div class="user-more">
                                    Hello you there?
                                </div>
                            </div>
                            <div class="user-details-status-wrapper">
                            </div>
                            <div class="user-details-count-wrapper">
                                <div class="status-icon green"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="{{asset('assets/img/profiles/d.jpg')}}"
                             data-chat-user-pic-retina="{{asset('assets/img/profiles/d2x.jpg')}}" data-user-name="David Nester">
                            <div class="user-profile">
                                <img src="{{asset('assets/img/profiles/h.jpg')}}" alt="" data-src="{{asset('assets/img/profiles/h.jpg')}}"
                                     data-src-retina="{{asset('assets/img/profiles/h2x.jpg')}}" width="35" height="35">
                            </div>
                            <div class="user-details">
                                <div class="user-name">
                                    David Nester
                                </div>
                                <div class="user-more">
                                    Busy, Do not disturb
                                </div>
                            </div>
                            <div class="user-details-status-wrapper">
                                <div class="clearfix"></div>
                            </div>
                            <div class="user-details-count-wrapper">
                                <div class="status-icon red"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="user-details-wrapper" data-chat-status="online" data-chat-user-pic="{{asset('assets/img/profiles/d.jpg')}}"
                             data-chat-user-pic-retina="{{asset('assets/img/profiles/d2x.jpg')}}" data-user-name="Jane Smith">
                            <div class="user-profile">
                                <img src="{{asset('assets/img/profiles/c.jpg')}}" alt="" data-src="{{asset('assets/img/profiles/c.jpg')}}"
                                     data-src-retina="{{asset('assets/img/profiles/c2x.jpg')}}" width="35" height="35">
                            </div>
                            <div class="user-details">
                                <div class="user-name">
                                    Jane Smith
                                </div>
                                <div class="user-more">
                                    Hello you there?
                                </div>
                            </div>
                            <div class="user-details-status-wrapper">
                            </div>
                            <div class="user-details-count-wrapper">
                                <div class="status-icon green"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="{{asset('assets/img/profiles/d.jpg')}}"
                             data-chat-user-pic-retina="{{asset('assets/img/profiles/d2x.jpg')}}" data-user-name="David Nester">
                            <div class="user-profile">
                                <img src="{{asset('assets/img/profiles/h.jpg')}}" alt="" data-src="{{asset('assets/img/profiles/h.jpg')}}"
                                     data-src-retina="{{asset('assets/img/profiles/h2x.jpg')}}" width="35" height="35">
                            </div>
                            <div class="user-details">
                                <div class="user-name">
                                    David Nester
                                </div>
                                <div class="user-more">
                                    Busy, Do not disturb
                                </div>
                            </div>
                            <div class="user-details-status-wrapper">
                                <div class="clearfix"></div>
                            </div>
                            <div class="user-details-count-wrapper">
                                <div class="status-icon red"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="chat-window-wrapper" id="messages-wrapper" style="display:none">
                <div class="chat-header">
                    <div class="pull-left">
                        <input type="text" placeholder="search">
                    </div>
                    <div class="pull-right">
                        <a href="#" class="">
                            <div class="iconset top-settings-dark "></div>
                        </a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="chat-messages-header">
                    <div class="status online"></div><span class="semi-bold">Jane Smith(Typing..)</span>
                    <a href="#" class="chat-back"><i class="icon-custom-cross"></i></a>
                </div>
                <div class="chat-messages scrollbar-dynamic clearfix">
                    <div class="inner-scroll-content clearfix">
                        <div class="sent_time">Yesterday 11:25pm</div>
                        <div class="user-details-wrapper ">
                            <div class="user-profile">
                                <img src="{{asset('asset')}}" alt="" data-src="{{asset('assets/img/profiles/d.jpg')}}"
                                     data-src-retina="{{asset('assets/img/profiles/d2x.jpg')}}" width="35" height="35">
                            </div>
                            <div class="user-details">
                                <div class="bubble">
                                    Hello, You there?
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="sent_time off">Yesterday 11:25pm</div>
                        </div>
                        <div class="user-details-wrapper ">
                            <div class="user-profile">
                                <img src="{{asset('assets/img/profiles/d.jpg')}}" alt="" data-src="{{asset('assets/img/profiles/d.jpg')}}"
                                     data-src-retina="{{asset('assets/img/profiles/d2x.jpg')}}" width="35" height="35">
                            </div>
                            <div class="user-details">
                                <div class="bubble">
                                    How was the meeting?
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="sent_time off">Yesterday 11:25pm</div>
                        </div>
                        <div class="user-details-wrapper ">
                            <div class="user-profile">
                                <img src="{{asset('assets/img/profiles/d.jpg')}}" alt="" data-src="{{asset('assets/img/profiles/d.jpg')}}"
                                     data-src-retina="{{asset('assets/img/profiles/d2x.jpg')}}" width="35" height="35">
                            </div>
                            <div class="user-details">
                                <div class="bubble">
                                    Let me know when you free
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="sent_time off">Yesterday 11:25pm</div>
                        </div>
                        <div class="sent_time ">Today 11:25pm</div>
                        <div class="user-details-wrapper pull-right">
                            <div class="user-details">
                                <div class="bubble sender">
                                    Let me know when you free
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="sent_time off">Sent On Tue, 2:45pm</div>
                        </div>
                    </div>
                </div>
                <div class="chat-input-wrapper" style="display:none">
                    <textarea id="chat-message-input" rows="1" placeholder="Type your message"></textarea>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- END CHAT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN CORE JS FRAMEWORK-->
<script src="{{asset('assets/plugins/pace/pace.min.js')}}" type="text/javascript"></script>
<!-- BEGIN JS DEPENDECENCIES-->
<script src="{{asset('assets/plugins/jquery/jquery-1.11.3.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/bootstrapv3/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/jquery-block-ui/jqueryblockui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/jquery-unveil/jquery.unveil.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/bootstrap-select2/select2.min.js')}}" type="text/javascript"></script>
<!-- END CORE JS DEPENDECENCIES-->
<!-- BEGIN CORE TEMPLATE JS -->
<script src="{{asset('assets/webarch/js/webarch.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/chat.js')}}" type="text/javascript"></script>
<!-- END CORE TEMPLATE JS -->
<!-- BEGIN PAGE LEVEL JS -->
<script src="{{asset('assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/jquery-ricksaw-chart/js/raphael-min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-ricksaw-chart/js/d3.v2.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-ricksaw-chart/js/rickshaw.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-sparkline/jquery-sparkline.js')}}"></script>
<script src="{{asset('assets/plugins/skycons/skycons.js')}}"></script>
<script src="{{asset('assets/plugins/owl-carousel/owl.carousel.min.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="{{asset('assets/plugins/jquery-gmap/gmaps.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/Mapplic/js/jquery.easing.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/Mapplic/js/jquery.mousewheel.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/Mapplic/js/hammer.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/Mapplic/mapplic/mapplic.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/jquery-flot/jquery.flot.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/jquery-metrojs/MetroJs.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN CORE TEMPLATE JS -->
<script src="{{asset('assets/js/dashboard_v2.js')}}" type="text/javascript"></script>
</body>
</html>