<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<body class="vertical-layout vertical-compact-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-compact-menu" data-col="2-columns">

 <!-- BEGIN: Header-->
 <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-dark bg-cyan navbar-shadow navbar-brand-center">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="modern admin logo" src="../../../app-assets/images/logo/logo.png">
                            <h3 class="brand-text">Modern Admin</h3>
                        </a></li>
                    <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                        <li class="dropdown nav-item mega-dropdown d-none d-lg-block"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Mega</a>
                            <ul class="mega-dropdown-menu dropdown-menu row">
                                <li class="col-md-2">
                                    <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="la la-newspaper-o"></i> News</h6>
                                    <div id="mega-menu-carousel-example">
                                        <div><img class="rounded img-fluid mb-1" src="../../../app-assets/images/slider/slider-2.png" alt="First slide"><a class="news-title mb-0 d-block" href="#">Poster Frame PSD</a>
                                            <p class="news-content"><span class="font-small-2">January 26, 2018</span></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <h6 class="dropdown-menu-header text-uppercase"><i class="la la-random"></i> Menu</h6>
                                    <ul>
                                        <li class="menu-list">
                                            <ul>
                                                <li><a class="dropdown-item" href="layout-fixed.html"><i class="ft-file"></i> Page layouts</a></li>
                                                <li><a class="dropdown-item" href="color-palette-primary.html"><i class="ft-camera"></i> Color palette</a></li>
                                                <li><a class="dropdown-item" href="layout-2-columns.html"><i class="ft-edit"></i> Starter kit</a></li>
                                                <li><a class="dropdown-item" href="changelog.html"><i class="ft-minimize-2"></i> Change log</a></li>
                                                <li><a class="dropdown-item" href="https://pixinvent.ticksy.com/"><i class="la la-life-ring"></i> Support center</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="col-md-3">
                                    <h6 class="dropdown-menu-header text-uppercase"><i class="la la-list-ul"></i> Accordion</h6>
                                    <div class="mt-1" id="accordionWrap" role="tablist" aria-multiselectable="true">
                                        <div class="card border-0 box-shadow-0 collapse-icon accordion-icon-rotate">
                                            <div class="card-header p-0 pb-2 border-0" id="headingOne" role="tab"><a data-toggle="collapse" href="#accordionOne" aria-expanded="true" aria-controls="accordionOne">Accordion Item #1</a></div>
                                            <div class="card-collapse collapse show" id="accordionOne" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordionWrap" aria-expanded="true">
                                                <div class="card-content">
                                                    <p class="accordion-text text-small-3">Caramels dessert chocolate cake pastry jujubes bonbon. Jelly wafer jelly beans. Caramels chocolate cake liquorice cake wafer jelly beans croissant apple pie.</p>
                                                </div>
                                            </div>
                                            <div class="card-header p-0 pb-2 border-0" id="headingTwo" role="tab"><a class="collapsed" data-toggle="collapse" href="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">Accordion Item #2</a></div>
                                            <div class="card-collapse collapse" id="accordionTwo" role="tabpanel" data-parent="#accordionWrap" aria-labelledby="headingTwo" aria-expanded="false">
                                                <div class="card-content">
                                                    <p class="accordion-text">Sugar plum bear claw oat cake chocolate jelly tiramisu dessert pie. Tiramisu macaroon muffin jelly marshmallow cake. Pastry oat cake chupa chups.</p>
                                                </div>
                                            </div>
                                            <div class="card-header p-0 pb-2 border-0" id="headingThree" role="tab"><a class="collapsed" data-toggle="collapse" href="#accordionThree" aria-expanded="false" aria-controls="accordionThree">Accordion Item #3</a></div>
                                            <div class="card-collapse collapse" id="accordionThree" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordionWrap" aria-expanded="false">
                                                <div class="card-content">
                                                    <p class="accordion-text">Candy cupcake sugar plum oat cake wafer marzipan jujubes lollipop macaroon. Cake dragée jujubes donut chocolate bar chocolate cake cupcake chocolate topping.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="la la-envelope-o"></i> Contact Us</h6>
                                    <form class="form form-horizontal">
                                        <div class="form-body">
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label" for="inputName1">Name</label>
                                                <div class="col-sm-9">
                                                    <div class="position-relative has-icon-left">
                                                        <input class="form-control" type="text" id="inputName1" placeholder="John Doe">
                                                        <div class="form-control-position pl-1"><i class="la la-user"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label" for="inputEmail1">Email</label>
                                                <div class="col-sm-9">
                                                    <div class="position-relative has-icon-left">
                                                        <input class="form-control" type="email" id="inputEmail1" placeholder="john@example.com">
                                                        <div class="form-control-position pl-1"><i class="la la-envelope-o"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label" for="inputMessage1">Message</label>
                                                <div class="col-sm-9">
                                                    <div class="position-relative has-icon-left">
                                                        <textarea class="form-control" id="inputMessage1" rows="2" placeholder="Simple Textarea"></textarea>
                                                        <div class="form-control-position pl-1"><i class="la la-commenting-o"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 mb-1">
                                                    <button class="btn btn-info float-right" type="button"><i class="la la-paper-plane-o"></i> Send </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
                            <div class="search-input">
                                <input class="input" type="text" placeholder="Explore Modern...">
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-gb"></i><span class="selected-language"></span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-gb"></i> English</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> German</a></div>
                        </li>
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
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail"> </i></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Messages</span></h6><span class="notification-tag badge badge-warning float-right m-0">4 New</span>
                                </li>
                                <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Margaret Govan</h6>
                                                <p class="notification-text font-small-3 text-muted">I like your portfolio, let's start.</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm avatar-busy rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Bret Lezama</h6>
                                                <p class="notification-text font-small-3 text-muted">I have seen your work, there is</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Tuesday</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-3.png" alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Carie Berra</h6>
                                                <p class="notification-text font-small-3 text-muted">Can we have call in this week ?</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Friday</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm avatar-away rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Eric Alsobrook</h6>
                                                <p class="notification-text font-small-3 text-muted">We have project party this saturday.</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">last month</time></small>
                                            </div>
                                        </div>
                                    </a></li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all messages</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="mr-1 user-name text-bold-700">John Doe</span><span class="avatar avatar-online"><img src="../../../app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span></a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="user-profile.html"><i class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="app-email.html"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="user-cards.html"><i class="ft-check-square"></i> Task</a><a class="dropdown-item" href="app-chat.html"><i class="ft-message-square"></i> Chats</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="login-with-bg-image.html"><i class="ft-power"></i> Logout</a>
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
                <li class="active"><a href="dashboard-travel.html"><i class="mbri-paper-plane"></i><span class="menu-title" data-i18n="nav.dash.travel">Travel</span></a>
                </li>
                <li class=" nav-item"><a href="travel-list.html"><i class="mbri-bulleted-list"></i><span class="menu-title" data-i18n="">Travel List</span></a>
                </li>
                <li class=" nav-item"><a href="travel-detail.html"><i class="mbri-database"></i><span class="menu-title" data-i18n="">Travel Detail</span></a>
                </li>
                <li class=" nav-item"><a href="travel-booking.html"><i class="mbri-bootstrap"></i><span class="menu-title" data-i18n="">Travel Booking</span></a>
                </li>
                <li class=" nav-item"><a href="travel-payment.html"><i class="mbri-cash"></i><span class="menu-title" data-i18n="">Payment Details</span></a>
                </li>
                <li class=" nav-item"><a href="travel-complete-order.html"><i class="mbri-success"></i><span class="menu-title" data-i18n="">Complete Booking</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="mbri-extension"></i><span class="menu-title" data-i18n="nav.ui.main">UI</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="app-email.html"><i class="la la-envelope"></i><span>Email Application</span></a>
                        </li>
                        <li><a class="menu-item" href="app-chat.html"><i class="la la-comments"></i><span>Chat Application</span></a>
                        </li>
                        <li><a class="menu-item" href="#"><i class="la la-server"></i><span data-i18n="nav.components.main">Components</span></a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="component-alerts.html"><i></i><span data-i18n="nav.components.component_alerts">Alerts</span></a>
                                </li>
                                <li><a class="menu-item" href="component-callout.html"><i></i><span data-i18n="nav.components.component_callout">Callout</span></a>
                                </li>
                                <li><a class="menu-item" href="#"><i></i><span data-i18n="nav.components.components_buttons.main">Buttons</span></a>
                                    <ul class="menu-content">
                                        <li><a class="menu-item" href="component-buttons-basic.html"><i></i><span data-i18n="nav.components.components_buttons.component_buttons_basic">Basic Buttons</span></a>
                                        </li>
                                        <li><a class="menu-item" href="component-buttons-extended.html"><i></i><span data-i18n="nav.components.components_buttons.component_buttons_extended">Extended Buttons</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="menu-item" href="component-carousel.html"><i></i><span data-i18n="nav.components.component_carousel">Carousel</span></a>
                                </li>
                                <li><a class="menu-item" href="component-collapse.html"><i></i><span data-i18n="nav.components.component_collapse">Collapse</span></a>
                                </li>
                                <li><a class="menu-item" href="component-dropdowns.html"><i></i><span data-i18n="nav.components.component_dropdowns">Dropdowns</span></a>
                                </li>
                                <li><a class="menu-item" href="component-list-group.html"><i></i><span data-i18n="nav.components.component_list_group">List Group</span></a>
                                </li>
                                <li><a class="menu-item" href="component-modals.html"><i></i><span data-i18n="nav.components.component_modals">Modals</span></a>
                                </li>
                                <li><a class="menu-item" href="component-pagination.html"><i></i><span data-i18n="nav.components.component_pagination">Pagination</span></a>
                                </li>
                                <li><a class="menu-item" href="component-navs-component.html"><i></i><span data-i18n="nav.components.component_navs_component">Navs Component</span></a>
                                </li>
                                <li><a class="menu-item" href="component-tabs-component.html"><i></i><span data-i18n="nav.components.component_tabs_component">Tabs Component</span></a>
                                </li>
                                <li><a class="menu-item" href="component-pills-component.html"><i></i><span data-i18n="nav.components.component_pills_component">Pills Component</span></a>
                                </li>
                                <li><a class="menu-item" href="component-tooltips.html"><i></i><span data-i18n="nav.components.component_tooltips">Tooltips</span></a>
                                </li>
                                <li><a class="menu-item" href="component-popovers.html"><i></i><span data-i18n="nav.components.component_popovers">Popovers</span></a>
                                </li>
                                <li><a class="menu-item" href="component-badges.html"><i></i><span data-i18n="nav.components.component_badges">Badges</span></a>
                                </li>
                                <li><a class="menu-item" href="component-pill-badges.html"><i></i><span>Pill Badges</span></a>
                                </li>
                                <li><a class="menu-item" href="component-progress.html"><i></i><span data-i18n="nav.components.component_progress">Progress</span></a>
                                </li>
                                <li><a class="menu-item" href="component-media-objects.html"><i></i><span data-i18n="nav.components.component_media_objects">Media Objects</span></a>
                                </li>
                                <li><a class="menu-item" href="component-scrollable.html"><i></i><span data-i18n="nav.components.component_scrollable">Scrollable</span></a>
                                </li>
                                <li><a class="menu-item" href="component-spinners.html"><i></i><span data-i18n="nav.components.component_spinners">Spinners</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="#"><i class="la la-unlock"></i><span data-i18n="nav.pages.main">Authentication</span></a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="login-with-bg-image.html"><i></i><span>Login</span></a>
                                </li>
                                <li><a class="menu-item" href="register-with-bg-image.html"><i></i><span>SignIn</span></a>
                                </li>
                                <li><a class="menu-item" href="recover-password.html"><i></i><span>Forgot Password</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="#"><i class="la la-file-text"></i><span data-i18n="nav.form_layouts.main">Form Layouts</span></a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="form-layout-basic.html"><i></i><span data-i18n="nav.form_layouts.form_layout_basic">Basic Forms</span></a>
                                </li>
                                <li><a class="menu-item" href="form-layout-horizontal.html"><i></i><span data-i18n="nav.form_layouts.form_layout_horizontal">Horizontal Forms</span></a>
                                </li>
                                <li><a class="menu-item" href="form-layout-hidden-labels.html"><i></i><span data-i18n="nav.form_layouts.form_layout_hidden_labels">Hidden Labels</span></a>
                                </li>
                                <li><a class="menu-item" href="form-layout-form-actions.html"><i></i><span data-i18n="nav.form_layouts.form_layout_form_actions">Form Actions</span></a>
                                </li>
                                <li><a class="menu-item" href="form-layout-row-separator.html"><i></i><span data-i18n="nav.form_layouts.form_layout_row_separator">Row Separator</span></a>
                                </li>
                                <li><a class="menu-item" href="form-layout-bordered.html"><i></i><span data-i18n="nav.form_layouts.form_layout_bordered">Bordered</span></a>
                                </li>
                                <li><a class="menu-item" href="form-layout-striped-rows.html"><i></i><span data-i18n="nav.form_layouts.form_layout_striped_rows">Striped Rows</span></a>
                                </li>
                                <li><a class="menu-item" href="form-layout-striped-labels.html"><i></i><span data-i18n="nav.form_layouts.form_layout_striped_labels">Striped Labels</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="#"><i class="la la-paste"></i><span data-i18n="nav.form_wizard.main">Form Wizard</span></a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="form-wizard-circle-style.html"><i></i><span data-i18n="nav.form_wizard.form_wizard_circle_style">Circle Style</span></a>
                                </li>
                                <li><a class="menu-item" href="form-wizard-notification-style.html"><i></i><span data-i18n="nav.form_wizard.form_wizard_notification_style">Notification Style</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="#"><i class="la la-table"></i><span data-i18n="nav.bootstrap_tables.main">Bootstrap Tables</span></a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="table-basic.html"><i></i><span data-i18n="nav.bootstrap_tables.table_basic">Basic Tables</span></a>
                                </li>
                                <li><a class="menu-item" href="table-border.html"><i></i><span data-i18n="nav.bootstrap_tables.table_border">Table Border</span></a>
                                </li>
                                <li><a class="menu-item" href="table-sizing.html"><i></i><span data-i18n="nav.bootstrap_tables.table_sizing">Table Sizing</span></a>
                                </li>
                                <li><a class="menu-item" href="table-styling.html"><i></i><span data-i18n="nav.bootstrap_tables.table_styling">Table Styling</span></a>
                                </li>
                                <li><a class="menu-item" href="table-components.html"><i></i><span data-i18n="nav.bootstrap_tables.table_components">Table Components</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="#"><i class="la la-area-chart"></i><span data-i18n="nav.chartjs.main">Chartjs</span></a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="chartjs-line-charts.html"><i></i><span data-i18n="nav.chartjs.chartjs_line_charts">Line charts</span></a>
                                </li>
                                <li><a class="menu-item" href="chartjs-bar-charts.html"><i></i><span data-i18n="nav.chartjs.chartjs_bar_charts">Bar charts</span></a>
                                </li>
                                <li><a class="menu-item" href="chartjs-pie-doughnut-charts.html"><i></i><span data-i18n="nav.chartjs.chartjs_pie_doughnut_charts">Pie &amp; Doughnut charts</span></a>
                                </li>
                                <li><a class="menu-item" href="chartjs-scatter-charts.html"><i></i><span data-i18n="nav.chartjs.chartjs_scatter_charts">Scatter charts</span></a>
                                </li>
                                <li><a class="menu-item" href="chartjs-polar-radar-charts.html"><i></i><span data-i18n="nav.chartjs.chartjs_polar_radar_charts">Polar &amp; Radar charts</span></a>
                                </li>
                                <li><a class="menu-item" href="chartjs-advance-charts.html"><i></i><span data-i18n="nav.chartjs.chartjs_advance_charts">Advance charts</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="mbri-map-pin"></i><span class="menu-title" data-i18n="nav.maps.main">Maps</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="gmaps-basic-maps.html"><i></i><span data-i18n="nav.maps.google_maps.gmaps_basic_maps">Maps</span></a>
                        </li>
                        <li><a class="menu-item" href="gmaps-services.html"><i></i><span data-i18n="nav.maps.google_maps.gmaps_services">Services</span></a>
                        </li>
                        <li><a class="menu-item" href="gmaps-overlays.html"><i></i><span data-i18n="nav.maps.google_maps.gmaps_overlays">Overlays</span></a>
                        </li>
                        <li><a class="menu-item" href="gmaps-routes.html"><i></i><span data-i18n="nav.maps.google_maps.gmaps_routes">Routes</span></a>
                        </li>
                        <li><a class="menu-item" href="gmaps-utils.html"><i></i><span data-i18n="nav.maps.google_maps.gmaps_utils">Utils</span></a>
                        </li>
                    </ul>
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
<!-- <div class="wrap">
   
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div> -->

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
