<!DOCTYPE html>
<html lang="en-us">	
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title> CFS | Open Institute</title>
        <meta name="description" content="Child Friendly School">
        <meta name="phinath" content="OI Software Developer">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <!-- #CSS Links -->
        <!-- Basic Styles -->
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo e(asset('css/font-awesome.min.css')); ?>">

        <!-- SmartAdmin Styles : Caution! DO NOT change the order -->
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo e(asset('css/smartadmin-production-plugins.min.css')); ?>">
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo e(asset('css/smartadmin-production.min.css')); ?>">
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo e(asset('css/smartadmin-skins.min.css')); ?>">

        <!-- DEV links : turn this on when you like to develop directly -->
        <!--<link rel="stylesheet" type="text/css" media="screen" href="../Source_UNMINIFIED_CSS/smartadmin-production.css">-->
        <!--<link rel="stylesheet" type="text/css" media="screen" href="../Source_UNMINIFIED_CSS/smartadmin-skins.css">-->

        <!-- SmartAdmin RTL Support -->
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo e(asset('css/smartadmin-rtl.min.css')); ?>"> 

        <!-- We recommend you use "your_style.css" to override SmartAdmin
             specific styles this will also ensure you retrain your customization with each SmartAdmin update.
        <link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->

        <!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->

        <!-- #FAVICONS -->
        <link rel="shortcut icon" href="<?php echo e(asset('img/favicon/open.jpg')); ?>" type="image/x-icon">
        <link rel="icon" href="<?php echo e(asset('img/favicon/open.jpg')); ?>" type="image/x-icon">

        <!-- #GOOGLE FONT -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

        <!-- #APP SCREEN / ICONS -->
        <!-- Specifying a Webpage Icon for Web Clip 
                 Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
        <link rel="apple-touch-icon" href="<?php echo e(asset('img/splash/sptouch-icon-iphone.png')); ?>">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('img/splash/touch-icon-ipad.png')); ?>">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo e(asset('img/splash/touch-icon-iphone-retina.png')); ?>">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo e(asset('img/splash/touch-icon-ipad-retina.png')); ?>">

        <!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <!-- Startup image for web apps -->
        <link rel="apple-touch-startup-image" href="<?php echo e(asset('img/splash/ipad-landscape.png')); ?>" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
        <link rel="apple-touch-startup-image" href="<?php echo e(asset('img/splash/ipad-portrait.png')); ?>" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
        <link rel="apple-touch-startup-image" href="<?php echo e(asset('img/splash/iphone.png')); ?>" media="screen and (max-device-width: 320px)">

    </head>

    <!--

    TABLE OF CONTENTS.
    
    Use search to find needed section.
    
    ===================================================================
    
    |  01. #CSS Links                |  all CSS links and file paths  |
    |  02. #FAVICONS                 |  Favicon links and file paths  |
    |  03. #GOOGLE FONT              |  Google font link              |
    |  04. #APP SCREEN / ICONS       |  app icons, screen backdrops   |
    |  05. #BODY                     |  body tag                      |
    |  06. #HEADER                   |  header tag                    |
    |  07. #PROJECTS                 |  project lists                 |
    |  08. #TOGGLE LAYOUT BUTTONS    |  layout buttons and actions    |
    |  09. #MOBILE                   |  mobile view dropdown          |
    |  10. #SEARCH                   |  search field                  |
    |  11. #NAVIGATION               |  left panel & navigation       |
    |  12. #MAIN PANEL               |  main panel                    |
    |  13. #MAIN CONTENT             |  content holder                |
    |  14. #PAGE FOOTER              |  page footer                   |
    |  15. #SHORTCUT AREA            |  dropdown shortcuts area       |
    |  16. #PLUGINS                  |  all scripts and plugins       |
    
    ===================================================================
    
    -->

    <!-- #BODY -->
    <!-- Possible Classes

            * 'smart-style-{SKIN#}'
            * 'smart-rtl'         - Switch theme mode to RTL
            * 'menu-on-top'       - Switch to top navigation (no DOM change required)
            * 'no-menu'			  - Hides the menu completely
            * 'hidden-menu'       - Hides the main menu but still accessable by hovering over left edge
            * 'fixed-header'      - Fixes the header
            * 'fixed-navigation'  - Fixes the main menu
            * 'fixed-ribbon'      - Fixes breadcrumb
            * 'fixed-page-footer' - Fixes footer
            * 'container'         - boxed layout mode (non-responsive: will not work with fixed-navigation & fixed-ribbon)
    -->
    <body class="smart-style-0">

        <!-- #HEADER -->
        <header id="header">
            <div id="logo-group">

                <!-- PLACE YOUR LOGO HERE -->
                <span id="logo"> <img src="img/logo.png" alt="Monitoring" style="position: absolute; top: 0;"> </span>
                <!-- END LOGO PLACEHOLDER -->

                <!-- Note: The activity badge color changes when clicked and resets the number to 0
                         Suggestion: You may want to set a flag when this happens to tick off all checked messages / notifications -->
<!--                <span id="activity" class="activity-dropdown"> <i class="fa fa-user"></i> <b class="badge"> 21 </b> </span>-->

                <!-- AJAX-DROPDOWN : control this dropdown height, look and feel from the LESS variable file -->
                <!--                <div class="ajax-dropdown">
                
                                     the ID links are fetched via AJAX to the ajax container "ajax-notifications" 
                                    <div class="btn-group btn-group-justified" data-toggle="buttons">
                                        <label class="btn btn-default">
                                            <input type="radio" name="activity" id="ajax/notify/mail.html">
                                            Msgs (14) </label>
                                        <label class="btn btn-default">
                                            <input type="radio" name="activity" id="ajax/notify/notifications.html">
                                            notify (3) </label>
                                        <label class="btn btn-default">
                                            <input type="radio" name="activity" id="ajax/notify/tasks.html">
                                            Tasks (4) </label>
                                    </div>
                
                                     notification content 
                                    <div class="ajax-notifications custom-scroll">
                
                                        <div class="alert alert-transparent">
                                            <h4>Click a button to show messages here</h4>
                                            This blank page message helps protect your privacy, or you can show the first message here automatically.
                                        </div>
                
                                        <i class="fa fa-lock fa-4x fa-border"></i>
                
                                    </div>
                                     end notification content 
                
                                     footer: refresh area 
                                    <span> Last updated on: 12/12/2013 9:43AM
                                        <button type="button" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Loading..." class="btn btn-xs btn-default pull-right">
                                            <i class="fa fa-refresh"></i>
                                        </button> </span>
                                     end footer 
                
                                </div>
                                 END AJAX-DROPDOWN -->
            </div>

            <!-- #PROJECTS: projects dropdown -->
            <!--            <div class="project-context hidden-xs">
            
                            <span class="label">Projects:</span>
                            <span class="project-selector dropdown-toggle" data-toggle="dropdown">Recent projects <i class="fa fa-angle-down"></i></span>
            
                             Suggestion: populate this list with fetch and push technique 
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="javascript:void(0);">Online e-merchant management system - attaching integration with the iOS</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Notes on pipeline upgradee</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Assesment Report for merchant account</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="javascript:void(0);"><i class="fa fa-power-off"></i> Clear</a>
                                </li>
                            </ul>
                             end dropdown-menu
            
                        </div>-->
            <!-- end projects dropdown -->

            <!-- #TOGGLE LAYOUT BUTTONS -->
            <!-- pulled right: nav area -->
            <div class="pull-right">

                <!-- collapse menu button -->
                <div id="hide-menu" class="btn-header pull-right">
                    <span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
                </div>
                <!-- end collapse menu -->

                <!-- #MOBILE -->
                <!-- Top menu profile link : this shows only when top menu is active -->
                <ul id="mobile-profile-img" class="header-dropdown-list hidden-xs padding-5">
                    <li class="">
                        <a href="#" class="dropdown-toggle no-margin userdropdown" data-toggle="dropdown"> 
                            <img src="<?php echo e(url('img/avatars/male.png')); ?>" alt="Phinath" class="online" />  
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li>
                                <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0"><i class="fa fa-cog"></i> Setting</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#ajax/profile.html" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>rofile</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="toggleShortcut"><i class="fa fa-arrow-down"></i> <u>S</u>hortcut</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> Full <u>S</u>creen</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="login.html" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"><i class="fa fa-sign-out fa-lg"></i> <strong><u>L</u>ogout</strong></a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <!-- logout button -->
                <div id="logout" class="btn-header transparent pull-right">
                    <span> <a href="<?php echo e(url('lock')); ?>" title="Sign Out" data-action="userLogout" data-logout-msg="You can improve your security further after logging out by closing this opened browser"><i class="fa fa-sign-out"></i></a> </span>
                </div>
                <!-- end logout button -->

                <!-- search mobile button (this is hidden till mobile view port) -->
                <div id="search-mobile" class="btn-header transparent pull-right">
                    <span> <a href="javascript:void(0)" title="Search"><i class="fa fa-search"></i></a> </span>
                </div>
                <!-- end search mobile button -->

                <!-- #SEARCH -->
                <!-- input: search field -->
                <form action="#ajax/search.html" class="header-search pull-right">
                    <input id="search-fld" type="text" name="param" placeholder="Find reports and more">
                    <button type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                    <a href="javascript:void(0);" id="cancel-search-js" title="Cancel Search"><i class="fa fa-times"></i></a>
                </form>
                <!-- end input: search field -->

                <!-- fullscreen button -->
                <div id="fullscreen" class="btn-header transparent pull-right">
                    <span> <a href="javascript:void(0);" data-action="launchFullscreen" title="Full Screen"><i class="fa fa-arrows-alt"></i></a> </span>
                </div>
                <!-- end fullscreen button -->

                <!-- #Voice Command: Start Speech -->
                <!-- NOTE: Voice command button will only show in browsers that support it. Currently it is hidden under mobile browsers. 
                                   You can take off the "hidden-sm" and "hidden-xs" class to display inside mobile browser-->
                <div id="speech-btn" class="btn-header transparent pull-right hidden-sm hidden-xs">
                    <div> 
                        <a href="javascript:void(0)" title="Voice Command" data-action="voiceCommand"><i class="fa fa-microphone"></i></a> 
                        <div class="popover bottom"><div class="arrow"></div>
                            <div class="popover-content">
                                <h4 class="vc-title">Voice command activated <br><small>Please speak clearly into the mic</small></h4>
                                <h4 class="vc-title-error text-center">
                                    <i class="fa fa-microphone-slash"></i> Voice command failed
                                    <br><small class="txt-color-red">Must <strong>"Allow"</strong> Microphone</small>
                                    <br><small class="txt-color-red">Must have <strong>Internet Connection</strong></small>
                                </h4>
                                <a href="javascript:void(0);" class="btn btn-success" onclick="commands.help()">See Commands</a> 
                                <a href="javascript:void(0);" class="btn bg-color-purple txt-color-white" onclick="$('#speech-btn .popover').fadeOut(50);">Close Popup</a> 
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end voice command -->

                <!-- multiple lang dropdown : find all flags in the flags page -->
                <ul class="header-dropdown-list hidden-xs">
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="img/blank.gif" class="flag flag-us" alt="United States"> <span> US</span> <i class="fa fa-angle-down"></i> </a>
                        <ul class="dropdown-menu pull-right">
                            <li class="active">
                                <a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-us" alt="United States"> English (EN)</a>
                            </li>	
                            <li>
                                <a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-kr" alt="Khmer"> Khmer (KH)</a>
                            </li>	

                        </ul>
                    </li>
                </ul>
                <!-- end multiple lang -->

            </div>
            <!-- end pulled right: nav area -->

        </header>
        <!-- END HEADER -->

        <!-- #NAVIGATION -->
        <!-- Left panel : Navigation area -->
        <!-- Note: This width of the aside area can be adjusted through LESS/SASS variables -->
        <aside id="left-panel">

            <!-- User info -->
            <div class="login-info">
                <span> <!-- User image size is adjusted inside CSS, it should stay as is --> 

                    <a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
                        <img src="<?php echo e(asset('img/avatars/male.png')); ?>" alt="me" class="offline" /> 
                        <span>
                            Administrator
                        </span>
                        <i class="fa fa-angle-down"></i>
                    </a> 

                </span>
            </div>
            <!-- end user info -->

            <!-- NAVIGATION : This navigation is also responsive

            To make this navigation dynamic please make sure to link the node
            (the reference to the nav > ul) after page load. Or the navigation
            will not initialize.
            -->
            <nav>
                <!-- 
                NOTE: Notice the gaps after each icon usage <i></i>..
                Please note that these links work a bit different than
                traditional href="" links. See documentation for details.
                -->

                <ul>
<!--                    <li class="">
                        <a href="dashboard" title="Dashboard"><i class="fa fa-lg fa-fw fa-dashboard txt-color-blue"></i><span class="menu-item-parent"><?php echo e(trans('home.dashboard')); ?></span></a>
                    </li>-->
                    
                    <?php foreach($tables as $table): ?>
                    <li class="">
                        <a href="monitor/entity-info/<?php echo e($table->id); ?>" title="monitor-info"><i class="fa fa-lg fa-fw fa-search"></i> <span class="menu-item-parent"><?php echo e($table->TableNameEN); ?> <?php echo e(trans('home.monitor.information-list')); ?></span></a>
                    </li>
                    <li class="">
                        <a href="monitor/entity-agg/<?php echo e($table->id); ?>" title="monitor-info"><i class="fa fa-lg fa-fw fa-search-plus"></i> <span class="menu-item-parent"><?php echo e($table->TableNameEN); ?> Aggregate List</span></a>
                    </li>
                    <?php endforeach; ?>
                    <li class="">
                        <a href="#"><i class="fa fa-lg fa-fw fa-wrench"></i> <span class="menu-item-parent"><?php echo e(trans('home.system-config')); ?></span></a>
                        <ul>
                            <li class="">
                                <a href="system/table" title="sys-table"><?php echo e(trans('home.system.table')); ?></a>
                            </li>
                            <li class="">
                                <a href="system/category" title="sys-category"><?php echo e(trans('home.system.category')); ?></a>
                            </li>
                            <li class="">
                                <a href="system/language" title="sys-language"><?php echo e(trans('home.system.language')); ?></a>
                            </li>
                            <li class="">
                                <a href="system/condition" title="sys-condition"><?php echo e(trans('home.system.condition')); ?></a>
                            </li>
                            <li class="">
                                <a href="system/entity-field" title="sys-entity-defined-field"><?php echo e(trans('home.system.entity-defined-field')); ?></a>
                            </li>
                            <li class="">
                                <a href="system/edf-import" title="sys-entity-defined-field">Import</a>
                            </li>
                            <li class="">
                                <a href="system/edf-export" title="sys-entity-defined-field">Export</a>
                            </li>
                        <!--    <li class="">
                                <a href="system/entity-field-condition" title="sys-entity-defined-field-condition"><?php echo e(trans('home.system.entity-defined-field-condition')); ?></a>
                            </li>
                            <li class="">
                                <a href="system/entity-field-value" title="sys-entity-defined-field-value"><?php echo e(trans('home.system.entity-defined-field-value')); ?></a>
                            </li>
                            <li class="">
                                <a href="system/entity-field-search" title="sys-entity-defined-field-search"><?php echo e(trans('home.system.entity-defined-field-search')); ?></a>
                            </li>-->
                        </ul>
                    </li>
                </ul>
            </nav>
            <span class="minifyme" data-action="minifyMenu"> <i class="fa fa-arrow-circle-left hit"></i> </span>

        </aside>
        <!-- END NAVIGATION -->

        <!-- #MAIN PANEL -->
        <div id="main" role="main">

            <!-- RIBBON -->
            <div id="ribbon">

                <span class="ribbon-button-alignment"> 
                    <span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh" rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true" data-reset-msg="Would you like to RESET all your saved widgets and clear LocalStorage?"><i class="fa fa-refresh"></i></span> 
                </span>

                <!-- breadcrumb -->
                <ol class="breadcrumb">
                    <!-- This is auto generated -->
                </ol>
                <!-- end breadcrumb -->

                <!-- You can also add more buttons to the
                ribbon for further usability

                Example below:

                <span class="ribbon-button-alignment pull-right" style="margin-right:25px">
                        <a href="#" id="search" class="btn btn-ribbon hidden-xs" data-title="search"><i class="fa fa-grid"></i> Change Grid</a>
                        <span id="add" class="btn btn-ribbon hidden-xs" data-title="add"><i class="fa fa-plus"></i> Add</span>
                        <button id="search" class="btn btn-ribbon" data-title="search"><i class="fa fa-search"></i> <span class="hidden-mobile">Search</span></button>
                </span> -->

            </div>
            <!-- END RIBBON -->

            <!-- #MAIN CONTENT -->
            <div id="content">

            </div>

            <!-- END #MAIN CONTENT -->

        </div>
        <!-- END #MAIN PANEL -->

        <!-- #PAGE FOOTER -->
        <div class="page-footer">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <span class="txt-color-white">CFS Version 1.0 <span class="hidden-xs"> Powered by Open Institute</span> � 2016</span>
                </div>

                <div class="col-xs-6 col-sm-6 text-right hidden-xs">
                    <div class="txt-color-white inline-block">
                        <i class="txt-color-blueLight hidden-mobile">Last account activity <i class="fa fa-clock-o"></i> <strong>52 mins ago &nbsp;</strong> </i>
                        <div class="btn-group dropup">
                            <button class="btn btn-xs dropdown-toggle bg-color-blue txt-color-white" data-toggle="dropdown">
                                <i class="fa fa-link"></i> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu pull-right text-left">
                                <li>
                                    <div class="padding-5">
                                        <p class="txt-color-darken font-sm no-margin">Download Progress</p>
                                        <div class="progress progress-micro no-margin">
                                            <div class="progress-bar progress-bar-success" style="width: 50%;"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="padding-5">
                                        <p class="txt-color-darken font-sm no-margin">Server Load</p>
                                        <div class="progress progress-micro no-margin">
                                            <div class="progress-bar progress-bar-success" style="width: 20%;"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li >
                                    <div class="padding-5">
                                        <p class="txt-color-darken font-sm no-margin">Memory Load <span class="text-danger">*critical*</span></p>
                                        <div class="progress progress-micro no-margin">
                                            <div class="progress-bar progress-bar-danger" style="width: 70%;"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="padding-5">
                                        <button class="btn btn-block btn-default">refresh</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- end btn-group-->
                    </div>
                    <!-- end div-->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- END FOOTER -->

        <!-- #SHORTCUT AREA : With large tiles (activated via clicking user name tag)
                 Note: These tiles are completely responsive, you can add as many as you like -->
<!--        <div id="shortcut">
            <ul>
                <li>
                    <a href="#ajax/inbox.html" class="jarvismetro-tile big-cubes bg-color-blue"> <span class="iconbox"> <i class="fa fa-envelope fa-4x"></i> <span>Mail <span class="label pull-right bg-color-darken">14</span></span> </span> </a>
                </li>
                <li>
                    <a href="#ajax/calendar.html" class="jarvismetro-tile big-cubes bg-color-orangeDark"> <span class="iconbox"> <i class="fa fa-calendar fa-4x"></i> <span>Calendar</span> </span> </a>
                </li>
                <li>
                    <a href="#ajax/gmap-xml.html" class="jarvismetro-tile big-cubes bg-color-purple"> <span class="iconbox"> <i class="fa fa-map-marker fa-4x"></i> <span>Maps</span> </span> </a>
                </li>
                <li>
                    <a href="#ajax/invoice.html" class="jarvismetro-tile big-cubes bg-color-blueDark"> <span class="iconbox"> <i class="fa fa-book fa-4x"></i> <span>Invoice <span class="label pull-right bg-color-darken">99</span></span> </span> </a>
                </li>
                <li>
                    <a href="#ajax/gallery.html" class="jarvismetro-tile big-cubes bg-color-greenLight"> <span class="iconbox"> <i class="fa fa-picture-o fa-4x"></i> <span>Gallery </span> </span> </a>
                </li>
                <li>
                    <a href="#ajax/profile.html" class="jarvismetro-tile big-cubes selected bg-color-pinkDark"> <span class="iconbox"> <i class="fa fa-user fa-4x"></i> <span>My Profile </span> </span> </a>
                </li>
            </ul>
        </div>-->
        <!-- END SHORTCUT AREA -->

        <!--================================================== -->

        <!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)
        <script data-pace-options='{ "restartOnRequestAfter": true }' src="js/plugin/pace/pace.min.js"></script>-->


        <!-- #PLUGINS -->
        <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
                                    if (!window.jQuery) {
                                        document.write('<script src="js/libs/jquery-2.1.1.min.js"><\/script>');
                                    }
        </script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script>
                                    if (!window.jQuery.ui) {
                                        document.write('<script src="js/libs/jquery-ui-1.10.3.min.js"><\/script>');
                                    }
        </script>
        <script src="<?php echo e(asset('js/libs/angular-1.5.0.js')); ?>"></script>
        <script src="<?php echo e(asset('js/app.js')); ?>"></script>
        <script src="<?php echo e(asset('js/school-info.js')); ?>"></script>

        <!-- IMPORTANT: APP CONFIG -->
        <script src="<?php echo e(asset('js/app.config.js')); ?>"></script>

        <!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
        <script src="<?php echo e(asset('js/plugin/jquery-touch/jquery.ui.touch-punch.min.js')); ?>"></script> 

        <!-- BOOTSTRAP JS -->
        <script src="<?php echo e(asset('js/bootstrap/bootstrap.min.js')); ?>"></script>

        <!-- CUSTOM NOTIFICATION -->
        <script src="<?php echo e(asset('js/notification/SmartNotification.min.js')); ?>"></script>

        <!-- JARVIS WIDGETS -->
        <script src="<?php echo e(asset('js/smartwidgets/jarvis.widget.min.js')); ?>"></script>

        <!-- EASY PIE CHARTS -->
        <script src="<?php echo e(asset('js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js')); ?>"></script>

        <!-- SPARKLINES -->
        <script src="<?php echo e(asset('js/plugin/sparkline/jquery.sparkline.min.js')); ?>"></script>

        <!-- JQUERY VALIDATE -->
        <script src="<?php echo e(asset('js/plugin/jquery-validate/jquery.validate.min.js')); ?>"></script>

        <!-- JQUERY MASKED INPUT -->
        <script src="<?php echo e(asset('js/plugin/masked-input/jquery.maskedinput.min.js')); ?>"></script>

        <!-- JQUERY SELECT2 INPUT -->
        <script src="<?php echo e(asset('js/plugin/select2/select2.min.js')); ?>"></script>

        <!-- JQUERY UI + Bootstrap Slider -->
        <script src="<?php echo e(asset('js/plugin/bootstrap-slider/bootstrap-slider.min.js')); ?>"></script>

        <!-- browser msie issue fix -->
        <script src="<?php echo e(asset('js/plugin/msie-fix/jquery.mb.browser.min.js')); ?>"></script>

        <!-- FastClick: For mobile devices: you can disable this in app.js -->
        <script src="<?php echo e(asset('js/plugin/fastclick/fastclick.min.js')); ?>"></script>

        <!--[if IE 8]>
                <h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>
        <![endif]-->


        <!-- MAIN APP JS FILE -->
        <script src="<?php echo e(asset('js/app.min.js')); ?>"></script>

        <!-- ENHANCEMENT PLUGINS : NOT A REQUIREMENT -->
        <!-- Voice command : plugin -->
        <script src="<?php echo e(asset('js/speech/voicecommand.min.js')); ?>"></script>

        <!-- SmartChat UI : plugin -->
        <script src="<?php echo e(asset('js/smart-chat-ui/smart.chat.ui.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/smart-chat-ui/smart.chat.manager.min.js')); ?>"></script>

        <!-- Your GOOGLE ANALYTICS CODE Below -->
        <script type="text/javascript">

                                    var _gaq = _gaq || [];
                                    _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
                                    _gaq.push(['_trackPageview']);

                                    (function () {
                                        var ga = document.createElement('script');
                                        ga.type = 'text/javascript';
                                        ga.async = true;
                                        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                                        var s = document.getElementsByTagName('script')[0];
                                        s.parentNode.insertBefore(ga, s);
                                    })();

        </script>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>

    </body>

</html>