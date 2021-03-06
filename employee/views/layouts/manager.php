<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
$baseUrl = Yii::$app->request->baseUrl;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

       <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?= $baseUrl; ?>/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $baseUrl; ?>/app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css">
    <link rel="stylesheet" type="text/css" href="<?= $baseUrl; ?>/app-assets/vendors/css/weather-icons/climacons.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $baseUrl; ?>/app-assets/fonts/meteocons/style.css">
    <link rel="stylesheet" type="text/css" href="<?= $baseUrl; ?>/app-assets/vendors/css/charts/morris.css">
    <link rel="stylesheet" type="text/css" href="<?= $baseUrl; ?>/app-assets/vendors/css/charts/chartist.css">
    <link rel="stylesheet" type="text/css" href="<?= $baseUrl; ?>/app-assets/vendors/css/charts/chartist-plugin-tooltip.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?= $baseUrl; ?>/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= $baseUrl; ?>/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?= $baseUrl; ?>/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?= $baseUrl; ?>/app-assets/css/components.css">
    <!-- END: Theme CSS-->

     <!-- BEGIN: Page CSS-->
     <link rel="stylesheet" type="text/css" href="<?= $baseUrl; ?>/app-assets/css/core/menu/menu-types/vertical-compact-menu.css">
    <link rel="stylesheet" type="text/css" href="<?= $baseUrl; ?>/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?= $baseUrl; ?>/app-assets/fonts/mobiriseicons/24px/mobirise/style.css">
    <link rel="stylesheet" type="text/css" href="<?= $baseUrl; ?>/app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css">
    <link rel="stylesheet" type="text/css" href="<?= $baseUrl; ?>/app-assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="<?= $baseUrl; ?>/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?= $baseUrl; ?>/app-assets/css/pages/timeline.css">
    <link rel="stylesheet" type="text/css" href="<?= $baseUrl; ?>/app-assets/css/pages/dashboard-travel.css">
    <!-- END: Page CSS-->

      <!-- BEGIN: Custom CSS-->
      <link rel="stylesheet" type="text/css" href="<?= $baseUrl; ?>/assets/css/style.css">
    <!-- END: Custom CSS-->

    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="vertical-layout vertical-compact-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-compact-menu" data-col="2-columns" >
<?php $this->beginBody() ?>

<!-- <body > -->

 <!-- BEGIN: Header-->
 <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-dark bg-cyan navbar-shadow navbar-brand-center">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item"><a class="navbar-brand" href="/site/manager"><img class="brand-logo" alt="modern admin logo" src="../../../app-assets/images/logo/logo.png">
                            <h3 class="brand-text">Sample Logo</h3>
                        </a></li>
                    <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                       
                       
                    </ul>
                    <ul class="nav navbar-nav float-right">
                       
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i><span class="badge badge-pill badge-danger badge-up badge-glow">5</span></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span></h6><span class="notification-tag badge badge-danger float-right m-0">5 New</span>
                                </li>
                                <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">You have new order!</h6>
                                                <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-download-cloud icon-bg-circle bg-red bg-darken-1"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading red darken-1">99% Server load</h6>
                                                <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Five hour ago</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                                                <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-check-circle icon-bg-circle bg-cyan"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Complete the task</h6><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last week</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-file icon-bg-circle bg-teal"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Generate monthly report</h6><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last month</time></small>
                                            </div>
                                        </div>
                                    </a></li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a></li>
                            </ul>
                        </li>
                        
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="mr-1 user-name text-bold-700">John Doe</span><span class="avatar avatar-online"><img src="../../../app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span></a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="user-profile.html"><i class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="app-email.html"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="user-cards.html"><i class="ft-check-square"></i> Task</a><a class="dropdown-item" href="app-chat.html"><i class="ft-message-square"></i> Chats</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="/site/login"><i class="ft-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

      <!-- BEGIN: Main Menu-->

      <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                
                <li class=" nav-item"><a href="/site/manager"><i class="mbri-users"></i><span class="menu-title" data-i18n="">Tables </span></a>
                </li>
                <li class=" nav-item"><a href="/site/employee-list"><i class="mbri-users"></i><span class="menu-title" data-i18n="">My Employees </span></a>
                </li>
                
                   
             
            </ul>
        </div>
    </div>

     <!-- BEGIN: Content-->
     <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row mb-1">
            </div>
            <div class="content-body">
                <?= $content ?>

            </div>
        </div>
    </div>

</body>


<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

 <!-- BEGIN: Vendor JS-->
 <script src="<?= $baseUrl; ?>/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

       <!-- BEGIN: Page Vendor JS-->
    <!-- script(src=app_assets_path + '/vendors/js/charts/chartist.min.js')-->
    <script src="<?= $baseUrl; ?>/app-assets/vendors/js/charts/chart.min.js"></script>
    <script src="<?= $baseUrl; ?>/app-assets/vendors/js/charts/raphael-min.js"></script>
    <script src="<?= $baseUrl; ?>/app-assets/vendors/js/charts/morris.min.js"></script>
    <script src="<?= $baseUrl; ?>/app-assets/vendors/js/charts/jquery.sparkline.min.js"></script>
    <script src="<?= $baseUrl; ?>/app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="<?= $baseUrl; ?>/app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js"></script>
    <!-- <script src="<?= $baseUrl; ?>/app-assets/data/jvector/visitor-data.js"></script> -->
    <!-- END: Page Vendor JS-->

     <!-- BEGIN: Theme JS-->
     <script src="<?= $baseUrl; ?>/app-assets/js/core/app-menu.js"></script>
    <script src="<?= $baseUrl; ?>/app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- <script src="<?= $baseUrl; ?>/app-assets/js/scripts/pages/dashboard-travel.js"></script> -->
    <!-- END: Page JS-

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
