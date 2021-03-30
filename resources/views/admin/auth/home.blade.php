@extends('admin.auth.layouts.app')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Wooble Html5 Admin panel</title>
    <link rel="icon" type="image/png" href="{{asset('css1/css1/image/fav.png')}}">
    <link rel="stylesheet" href="{{asset('css1/css1/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css1/css1/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css1/css1/line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css1/css1/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css1/css1/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css1/css1/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css1/css1/perfect-scrollbar.min.css')}}">
    <link rel="stylesheet" href="{{asset('css1/css1/jquery.datepicker.min.css')}}">
    <!-- calander -->
    <link rel="stylesheet" href="{{asset('css1/css1/style.css')}}">
    <link rel="stylesheet" href="{{asset('css1/css1/color.css')}}">
    <link rel="stylesheet" href="{{asset('css1/css1/responsive.css')}}">
</head>

<body>
    <!-- Start Page Loading -->

    <div class="panel-layout">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-page">
                        <header>
                            <div class="side-menus">
                                <div class="side-header">
									<div class="logo"><a title="" href="index.html"><img alt="" src="images/logo2.png"></a></div>
                                    <nav class="slide-menu">
                                        <span>Navigation <i class="ti-layout"></i></span>
                                        <ul class="parent-menu">

                                          <div class="card">
                                              <div class="card-header">{{ __('Dashboard') }}</div>

                                            <li class="menu-item-has-children active"> <a title="#"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
                                                <ul style="display: block">
                                                    <li><a class="active" href="index.html" title="">Dashboard 1</a></li>
                                                    <li><a href="index2.html" title="">Dashboard 2</a></li>
                                                    <li><a href="index3.html" title="">Dashboard 3</a></li>
                                                    <li><a href="index4.html" title="">Dashboard 4</a></li>
                                                    <li><a href="index5.html" title="">Dashboard 5</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"> <a title=""><i class="fa fa-laptop"></i><span>layouts</span></a>
                                                <ul class="mega">
                                                    <li><a href="index-boxed.html" title="">boxed layout</a></li>
                                                    <li><a href="overlap-sidebar.html">overlap sliderbar</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"> <a title=""><i class="fa fa-shopping-cart"></i><span>WooCommercee</span></a>
                                                <ul class="mega">
                                                    <li><a href="product.html" title="">product</a></li>
                                                    <li><a href="product-detail.html">product-detail</a></li>
                                                    <li><a href="product-order.html">product-order</a></li>
                                                    <li><a href="product-add.html">add product</a></li>
                                                    <li><a href="product-cart.html">product cart</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"> <a title="#"><i class="fa fa-bookmark-o"></i><span>UI Elements</span></a>
                                                <ul>
                                                    <li><a href="accordion-n-tabs.html">accordions & tabs</a></li>
                                                    <li><a href="elements.html">elements</a></li>
                                                    <li><a href="invoices.html">invoices</a></li>
                                                    <li><a href="tabels.html">tabels styles</a></li>
                                                    <li><a href="typography.html">typography</a></li>
                                                    <li><a href="megamenu.html">mega menu styles</a></li>
                                                    <li><a href="socials-btns.html">social buttons</a></li>
                                                    <li><a href="testimonials.html">testimonials styles</a></li>
													<li><a href="calendar.html">event calendar</a></li>
                                                </ul>
                                            </li>
											<li><a href="inbox.html" title=""><i class="fa fa-inbox"></i><span>inbox</span><ins>5</ins></a></li>
                                            <li><a href="charts.html" title=""><i class="fa fa-bar-chart"></i><span>charts</span></a></li>
                                            <li> <a href="maps.html" title=""><i class="fa fa-globe"></i><span>Google maps</span></a> </li>
											<li class="menu-item-has-children">
												<a title=""><i class="fa fa-flag"></i><span>Icons</span></a>
                                                <ul>
                                                    <li><a href="icons.html">Font Awesome</a></li>
                                                    <li><a href="icons2.html">Themify Icons</a></li>
                                                </ul>
                                            </li>
											<li class="menu-item-has-children"> <a title=""><i class="fa fa-inbox"></i><span>Pages</span></a>
                                                <ul class="mega">
                                                    <li><a href="profile.html">profile</a></li>
                                                    <li><a href="edit-profile.html">edit profile</a></li>
                                                    <li><a href="login.html">login</a></li>
                                                    <li><a href="register.html">register</a></li>
                                                    <li><a href="forgot-pass.html">forgot password</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"> <a title=""><i class="fa fa-external-link"></i><span>extras</span></a>
                                                <ul class="mega">
                                                    <li><a href="404.html">404 error page</a></li>
                                                    <li><a href="505.html">505 error page</a></li>
                                                    <li><a href="maintenance.html">maintenance</a></li>
                                                    <li><a href="coming-soon.html">coming soon </a></li>

                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </header>
                        <!-- side header -->
                        <div class="topbar">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="logo"><a href="index.html" title=""><img src="images/logo.png" alt=""></a></div>
                                    </div>
                                    <div class="col-lg-9">
                                        <ul class="notify-area">
                                            <li>
                                                <div class="nav-icon3"> <span></span> <span></span> <span></span> <span></span> </div>
                                                <i class="fa fa-navicon nav-icon3"></i>
                                            </li>
                                            <li class="notifications"><a href="index.html#" title=""><i class="fa fa-bell-o"></i></a><span class="red-bg">02</span>
                                                <div class="drop notify"> <span class="drop-head">Notifications</span>
                                                    <ul class="drop-meta">
                                                        <li> <i class="notifi-icon blue">N</i>
                                                            <div class="notifi-meta">
                                                                <h4><a href="index.html#" title="">Nulla Vel Metus Scelerisque Ante Commodo. </a></h4>
                                                                <span>02:34PM</span> </div>
                                                        </li>
                                                        <li> <i class="notifi-icon red">C</i>
                                                            <div class="notifi-meta">
                                                                <h4><a href="index.html#" title="">Nulla Vel Metus Scelerisque Ante Commodo. </a></h4>
                                                                <span>02:34PM</span> </div>
                                                        </li>
                                                        <li> <i class="notifi-icon yellow">A</i>
                                                            <div class="notifi-meta">
                                                                <h4><a href="index.html#" title="">Nulla Vel Metus Scelerisque Ante Commodo. </a></h4>
                                                                <span>02:34PM</span> </div>
                                                        </li>
                                                        <li> <i class="notifi-icon blue">N</i>
                                                            <div class="notifi-meta">
                                                                <h4><a href="index.html#" title="">Nulla Vel Metus Scelerisque Ante Commodo. </a></h4>
                                                                <span>02:34PM</span> </div>
                                                        </li>
                                                    </ul>
                                                    <span class="drop-bottom"><a href="index.html#" title="">View More Notifications</a></span> </div>
                                            </li>
                                            <li class="messages"><a href="index.html#" title=""><i class="fa fa-envelope-o"></i></a><span class="blue-bg">10</span>
                                                <div class="drop messages"> <span class="drop-head">3 New Message <i class="fa fa-pencil-square-o"></i></span>
                                                    <ul class="drop-meta">
                                                        <li> <i class="notifi-icon"><img src="images/resources/user-mesg.jpg" alt=""></i>
                                                            <div class="notifi-meta"> <span>02:34PM</span>
                                                                <h4><a href="index.html#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                            </div>
                                                        </li>
                                                        <li> <i class="notifi-icon"><img src="images/resources/user-mesg2.jpg" alt=""></i>
                                                            <div class="notifi-meta"> <span>02:34PM</span>
                                                                <h4><a href="index.html#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                            </div>
                                                        </li>
                                                        <li> <i class="notifi-icon"><img src="images/resources/user-mesg3.jpg" alt=""></i>
                                                            <div class="notifi-meta"> <span>02:34PM</span>
                                                                <h4><a href="index.html#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                            </div>
                                                        </li>
                                                        <li> <i class="notifi-icon"><img src="images/resources/user-mesg.jpg" alt=""></i>
                                                            <div class="notifi-meta"> <span>02:34PM</span>
                                                                <h4><a href="index.html#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                            </div>
                                                        </li>
                                                        <li> <i class="notifi-icon"><img src="images/resources/user-mesg2.jpg" alt=""></i>
                                                            <div class="notifi-meta"> <span>02:34PM</span>
                                                                <h4><a href="index.html#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <span class="drop-bottom"><a href="index.html#" title="">View More messages</a></span> </div>
                                            </li>
                                            <li class="mega"><a href="index.html#" title="">mega</a>
                                                <div class="mega-menu">
                                                    <div class="row mega-style1">
                                                        <div class="col-lg-4">
                                                            <div class="mega-post-info"> <span>envato market</span>
                                                                <ul>
                                                                    <li><a href="index.html#" title="">Envato Market</a></li>
                                                                    <li><a href="index.html#" title="">terms</a></li>
                                                                    <li><a href="index.html#" title="">licenses</a></li>
                                                                    <li><a href="index.html#" title="">market API</a></li>
                                                                    <li><a href="index.html#" title="">Become an affiliate</a></li>
                                                                    <li><a href="index.html#" title="">help</a></li>
                                                                    <li><a href="index.html#" title="">Themes and Templates</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mega-post-info"> <span>Themeforest</span>
                                                                <ul>
                                                                    <li><a href="index.html#" title="">Envato Market</a></li>
                                                                    <li><a href="index.html#" title="">terms</a></li>
                                                                    <li><a href="index.html#" title="">licenses</a></li>
                                                                    <li><a href="index.html#" title="">market API</a></li>
                                                                    <li><a href="index.html#" title="">Become an affiliate</a></li>
                                                                    <li><a href="index.html#" title="">help</a></li>
                                                                    <li><a href="index.html#" title="">Themes and Templates</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mega-post-info"> <span>Evato Element</span>
                                                                <ul>
                                                                    <li><a href="index.html#" title="">Envato Market</a></li>
                                                                    <li><a href="index.html#" title="">terms</a></li>
                                                                    <li><a href="index.html#" title="">licenses</a></li>
                                                                    <li><a href="index.html#" title="">market API</a></li>
                                                                    <li><a href="index.html#" title="">Become an affiliate</a></li>
                                                                    <li><a href="index.html#" title="">help</a></li>
                                                                    <li><a href="index.html#" title="">Themes and Templates</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="t-search">
                                            <form method="post">
                                                <input type="text" placeholder="Enter Your Keyword">
                                                <button type="submit"><i class="fa fa-search"></i></button>
                                            </form>
                                        </div>
                                        <ul class="seting-area">
                                            <li class="langages">
                                                <a href="index.html#" title="">Eng</a>
                                                <ul class="drop language">
                                                    <li class="lang-selected"><a href="index.html"><i class="fa fa-check"></i> Eng</a></li>
                                                    <li><a href="index.html">Rus</a></li>
                                                    <li><a href="index.html">Jap</a></li>
                                                    <li><a href="index.html">Arb</a></li>
                                                </ul>
                                            </li>
                                            <li class="setting-panel"><a href="index.html#" title=""><i class="icon-equalizer"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="user-head">
                                            <div class="admin">
                                                <div class="admin-avatar"><img src="images/resources/admin.png" alt=""> <i class="online"></i> </div>
                                            </div>
                                            <div class="drop setting"> <span class="drop-head">stifen Doe <i>30 days trial</i></span>
                                                <ul class="drop-meta">
                                                    <li> <a href="index.html#" title=""><i class="fa fa-eyedropper"></i>Edit Profile</a> </li>
                                                    <li> <a href="index.html#" title=""><i class="fa fa-envelope-o"></i>My Inbox</a> </li>
                                                    <li> <a href="index.html#" title=""><i class="fa fa-adjust"></i>task</a> </li>
                                                    <li> <a href="index.html#" title=""><i class="fa fa-calendar"></i>Calender</a> </li>
                                                    <li> <a href="index.html#" title=""><i class="fa fa-align-right"></i>Balance Report</a> </li>
                                                </ul>
                                                <span class="drop-bottom"><a href="index.html#" title=""><i class="fa fa-sign-out"></i>log Out</a></span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-content">
                            <div class="responsive-header">
                                <div class="logo-area">
                                    <ul class="notify-area">
                                        <li>
                                            <div class="nav-icon3"> <span></span> <span></span> <span></span> <span></span> </div>
                                        </li>
                                        <li class="notifications"><a href="index.html#" title=""><i class="fa fa-bell-o"></i></a><span class="red-bg">02</span>
                                            <div class="drop notify"> <span class="drop-head">Notifications</span>
                                                <ul class="drop-meta">
                                                    <li> <i class="notifi-icon blue">N</i>
                                                        <div class="notifi-meta">
                                                            <h4><a href="index.html#" title="">Nulla Vel Metus Scelerisque Ante Commodo. </a></h4>
                                                            <span>02:34PM</span> </div>
                                                    </li>
                                                    <li> <i class="notifi-icon red">C</i>
                                                        <div class="notifi-meta">
                                                            <h4><a href="index.html#" title="">Nulla Vel Metus Scelerisque Ante Commodo. </a></h4>
                                                            <span>02:34PM</span> </div>
                                                    </li>
                                                    <li> <i class="notifi-icon yellow">A</i>
                                                        <div class="notifi-meta">
                                                            <h4><a href="index.html#" title="">Nulla Vel Metus Scelerisque Ante Commodo. </a></h4>
                                                            <span>02:34PM</span> </div>
                                                    </li>
                                                    <li> <i class="notifi-icon blue">N</i>
                                                        <div class="notifi-meta">
                                                            <h4><a href="index.html#" title="">Nulla Vel Metus Scelerisque Ante Commodo. </a></h4>
                                                            <span>02:34PM</span> </div>
                                                    </li>
                                                </ul>
                                                <span class="drop-bottom"><a href="index.html#" title="">View More Notifications</a></span> </div>
                                        </li>
                                        <li class="messages"><a href="index.html#" title=""><i class="fa fa-envelope-o"></i></a><span class="blue-bg">10</span>
                                            <div class="drop messages"> <span class="drop-head">3 New Message <i class="fa fa-pencil-square-o"></i></span>
                                                <ul class="drop-meta">
                                                    <li> <i class="notifi-icon"><img src="images/resources/user-mesg.jpg" alt=""></i>
                                                        <div class="notifi-meta"> <span>02:34PM</span>
                                                            <h4><a href="index.html#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                        </div>
                                                    </li>
                                                    <li> <i class="notifi-icon"><img src="images/resources/user-mesg2.jpg" alt=""></i>
                                                        <div class="notifi-meta"> <span>02:34PM</span>
                                                            <h4><a href="index.html#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                        </div>
                                                    </li>
                                                    <li> <i class="notifi-icon"><img src="images/resources/user-mesg3.jpg" alt=""></i>
                                                        <div class="notifi-meta"> <span>02:34PM</span>
                                                            <h4><a href="index.html#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                        </div>
                                                    </li>
                                                    <li> <i class="notifi-icon"><img src="images/resources/user-mesg.jpg" alt=""></i>
                                                        <div class="notifi-meta"> <span>02:34PM</span>
                                                            <h4><a href="index.html#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                        </div>
                                                    </li>
                                                    <li> <i class="notifi-icon"><img src="images/resources/user-mesg2.jpg" alt=""></i>
                                                        <div class="notifi-meta"> <span>02:34PM</span>
                                                            <h4><a href="index.html#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <span class="drop-bottom"><a href="index.html#" title="">View More messages</a></span> </div>
                                        </li>
                                    </ul>

                                    <div class="user-head">
									<div class="admin">
										<div class="admin-avatar"> <img src="images/resources/admin.png" alt=""> <i class="online"></i> </div>
									</div>
									<div class="drop setting"> <span class="drop-head">stifen Doe <i>30 days trial</i></span>
										<ul class="drop-meta">
											<li> <a href="index.html#" title=""><i class="fa fa-eyedropper"></i>Edit Profile</a> </li>
											<li> <a href="index.html#" title=""><i class="fa fa-envelope-o"></i>My Inbox</a> </li>
											<li> <a href="index.html#" title=""><i class="fa fa-adjust"></i>task</a> </li>
											<li> <a href="index.html#" title=""><i class="fa fa-calendar"></i>Calender</a> </li>
											<li> <a href="index.html#" title=""><i class="fa fa-align-right"></i>Balance Report</a> </li>
										</ul>
										<span class="drop-bottom"><a href="index.html#" title=""><i class="fa fa-sign-out"></i>log Out</a></span> </div>
                                    </div>
									<ul class="seting-area">
									<li class="langages">
										<a title="" href="index.html#">Eng</a>
										<ul class="drop language">
											<li class="lang-selected"><a href="index.html"><i class="fa fa-check"></i> Eng</a></li>
											<li><a href="index.html">Rus</a></li>
											<li><a href="index.html">Jap</a></li>
											<li><a href="index.html">Arb</a></li>
										</ul>
									</li>
									<li class="setting-panel"><a title="" href="index.html#"><i class="icon-equalizer"></i></a></li>
								</ul>
                                </div>
                                <div class="t-search">
                                    <form method="post">
                                        <input type="text" placeholder="Enter Your Keyword">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <!-- responsive header -->
                            <div class="panel-body">
                                <div class="content-area">
                                    <div class="sub-bar">
                                        <div class="sub-title">
                                            <h4>Dashboard:</h4>
                                            <span>Welcome To web Admin Panel!</span>
                                        </div>
                                        <ul class="bread-crumb">
                                            <li><a href="index.html#" title="">Home</a></li>
                                            <li>Dashbord</li>
                                        </ul>
                                    </div>
                                    <!-- top subbar -->
                                    <div class="info-section">
										<div class="panel-widget">
											<div class="b-meta">
												<i class="icon-people"></i>
												<div class="info-meta">
													<h4>5412</h4>
													<p>70%</p>
                          
													<span>Total Visitors</span>
												</div>
												<span class="seventy blue"></span>
											</div>
										</div>
										<div class="panel-widget">
												<div class="b-meta">
													<i class="icon-login"></i>
													<div class="info-meta">
														<h4>4515</h4>
														<p>50%</p>
														<span>New Signups </span> </div>
													<span class="fifty purpal"></span></div>
											</div>
										<div class="panel-widget">
												<div class="b-meta">
													<i class="icon-like"></i>
													<div class="info-meta">
														<h4>8289</h4>
														<p>40%</p>
														<span>Email Enquiries </span> </div>
													<span class="fourty green"></span> </div>
											</div>
                                    </div>
                                    <!-- top info widgets -->
									<div class="widget">
                                    <div class="quick-all-report">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2 col-sm-3">
                                                <div class="quick-all">
                                                    <span id="quick-visit" class="sparkline">1,5,2,7,9,6,7,11,9,13,12,15,14,18</span>
                                                    <h4>3,403</h4>
                                                    <p>Visits</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-3">
                                                <div class="quick-all">
                                                    <span id="quick-view" class="sparkline">6,4,7,2,9,8,2,5,4</span>
                                                    <h4>67,456</h4>
                                                    <p>Page Views</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-3">
                                                <div class="quick-all">
                                                    <span id="quick-page" class="sparkline">7,3,5,7,8,9,3,5,6</span>
                                                    <h4>67.9</h4>
                                                    <p>Page / Visits</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-3">
                                                <div class="quick-all">
                                                    <span id="quick-time" class="sparkline">7,5,2,6,7,8,5,8,7</span>
                                                    <h4>00:02:03</h4>
                                                    <p>Average Time</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-3">
                                                <div class="quick-all">
                                                    <span id="quick-returning" class="sparkline">4,6,7,8,3,5,8,6,5</span>
                                                    <h4>25%</h4>
                                                    <p>Returning Visits</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-3">
                                                <div class="quick-all">
                                                    <span id="quick-rate" class="sparkline">2,7,7,11,9,13,12,5,7</span>
                                                    <h4>66.1%</h4>
                                                    <p>Bounce Rate</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                    <div class="widget">
                                        <div class="widget-title">
                                            <h4>Organizational Statistics</h4>
                                            <ul class="widget-controls">
                                                <li title="Refresh" class="refresh-content"><i class="fa fa-refresh"></i></li>
                                                <li title="Maximize" class="expand-content"><i class="icon-frame"></i></li>
                                                <li title="More Options" class="more-option"><i class="ti-more-alt"></i></li>
                                            </ul>
                                        </div>
                                        <div class="widget-peding">
                                            <div class="revenue-chart line">
                                                <canvas id="canvas_line4"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- line dot chart full -->
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-12">
                                            <div class="widget">
                                                <div class="widget-title">
                                                    <h4>Feeds</h4>
                                                    <ul class="widget-controls">
                                                <li title="Refresh" class="refresh-content"><i class="fa fa-refresh"></i></li>
                                                <li title="Maximize" class="expand-content"><i class="icon-frame"></i></li>
                                                <li title="More Options" class="more-option"><i class="ti-more-alt"></i></li>
                                            </ul>
                                                </div>
                                                <div class="widget-peding">
                                                    <ul class="feeds">
                                                        <li class="green"> <span class="date">25 Sec Ago</span>
                                                            <h5>Nulla Vel Metus Scelerue Commodo</h5>
                                                        </li>
                                                        <li class="green"> <span class="date">05 Sec Ago</span>
                                                            <h5>Completed Layout Examples</h5>
                                                        </li>
                                                        <li class="blue"> <span class="date">55 Sec Ago</span>
                                                            <h5>New Updated Has Been Installed </h5>
                                                        </li>
                                                        <li class="yellow"> <span class="date">25 Min Ago</span>
                                                            <h5>4 Friends Request Accepted</h5>
                                                        </li>
                                                        <li class="red"> <span class="date">2 Hour Ago</span>
                                                            <h5>Daisy Has Joined Your Team</h5>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- user list -->
                                        </div>
										<div class="col-lg-8">
                                        <div class="row merged">
                                            <div class="col-lg-7 col-sm-8">
                                                <div class="widget">
                                                    <div class="clndr-wdgt">
                                                        <div class="clndr">
                                                            <div class="clndr"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- calander -->
                                            <div class="col-lg-5 col-sm-4">
                                                <div class="events">
                                                    <div class="event-head">
                                                        <h5>event calender</h5>
                                                    </div>
                                                    <ul class="event-detail">
                                                        <li> <span>12 February 2019</span>
                                                            <h6><a href="index.html#" title="">News & Fitness Advice</a></h6>
                                                            <p>Completed Layout Examples</p>
                                                        </li>
                                                        <li> <span>16 February 2019</span>
                                                            <h6><a href="index.html#" title="">Some quick example</a></h6>
                                                            <p>Completed Layout Examples</p>
                                                        </li>
                                                        <li> <span>21 February 2019</span>
                                                            <h6><a href="index.html#" title="">bulk card's content</a></h6>
                                                            <p>Completed Layout Examples</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- calander event -->
                                        </div>
										</div>
                                    </div>
									<div class="row">
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="widget">
                                                <div class="widget-title">
                                                    <h4>Statistics</h4>
                                                    <ul class="widget-controls">
														<li title="Refresh" class="refresh-content"><i class="fa fa-refresh"></i></li>
														<li title="Maximize" class="expand-content"><i class="icon-frame"></i></li>
														<li title="More Options" class="more-option"><i class="ti-more-alt"></i></li>
													</ul>
                                                </div>
                                                <div class="line-chart">
                                                    <div class="static">
                                                        <div class="static-info">
                                                            <h4>63%</h4>
                                                            <span>2,341 New Customers</span> </div>
                                                        <ul>
                                                            <li class="green">upcoming</li>
                                                            <li class="purpal">incoming</li>
                                                        </ul>
                                                    </div>
                                                    <canvas id="canvas_line5"></canvas>
                                                </div>
                                            </div>
                                            <!-- guage widget -->
                                        </div>
                                        <!-- statics chart widget -->
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="widget">
                                                <div class="widget-title">
                                                    <h4>Monthly visits</h4>
                                                    <ul class="widget-controls">
                                                <li title="Refresh" class="refresh-content"><i class="fa fa-refresh"></i></li>
                                                <li title="Maximize" class="expand-content"><i class="icon-frame"></i></li>
                                                <li title="More Options" class="more-option"><i class="ti-more-alt"></i></li>
                                            </ul>
                                                </div>
                                                <div class="donut-chart">
                                                    <ul class="total">
                                                        <li>Google Plus<span>25A</span></li>
                                                        <li>Direct Access<span>1034</span></li>
                                                    </ul>
                                                    <canvas id="canvasDoughnut"></canvas>
                                                    <ul class="total">
                                                        <li>Facebook<span>779</span></li>
                                                        <li>Twitter<span>489</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- guage widget -->
                                        </div>
                                        <!-- donut widget -->
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="widget">
                                                <div class="widget-title">
                                                    <h4>Monthly sales</h4>
                                                    <ul class="widget-controls">
                                                <li title="Refresh" class="refresh-content"><i class="fa fa-refresh"></i></li>
                                                <li title="Maximize" class="expand-content"><i class="icon-frame"></i></li>
                                                <li title="More Options" class="more-option"><i class="ti-more-alt"></i></li>
                                            </ul>
                                                </div>
                                                <div class="">
                                                    <div class="gage-chart">
                                                        <div id="echart_gauge" style="height:370px;"></div>
                                                    </div>
                                                    <ul class="total-count">
                                                        <li> <span>$18,249</span> <i>Completed</i> </li>
                                                        <li> <span>$10,298</span> <i>Remaining</i> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- guage widget -->
                                        </div>
                                        <!-- guage widget -->
                                    </div>
									<div class="widget">
									  <div class="widget-title no-margin">
										<h4>Visitor by Country</h4>
										<span>Visitors & Earnings</span>
										<ul class="widget-controls">
											<li title="Refresh" class="refresh-content"><i class="fa fa-refresh"></i></li>
											<li title="Maximize" class="expand-content"><i class="icon-frame"></i></li>
											<li title="More Options" class="more-option"><i class="ti-more-alt"></i></li>
										</ul>
									  </div>
									  <div class="">
										<div class="vctr-map">
										  <div id="vctr-map" style="width: 480px; height: 280px;"></div>
										</div>
										<div class="visito-country-list">
										  <ul>
											<li class="title"><span>No</span><span>Country</span><span>Visits</span></li>
											<li><i>01.</i><i>United Stats</i><i>15890</i></li>
											<li><i>02.</i><i>Brazil</i><i>23900</i></li>
											<li><i>03.</i><i>Russia</i><i>98001</i></li>
											<li><i>04.</i><i>France</i><i>10098</i></li>
											<li><i>05.</i><i>Canada</i><i>21004</i></li>
										  </ul>
										</div>
									  </div>
									</div>
									<!-- vector map -->

                                    <div class="row">
                                        <div class="col-lg-6 col-sm-12">
                                            <div class="widget">
                                                <div class="widget-title">
                                                    <h4>recent comment</h4>
                                                    <ul class="widget-controls">
                                                <li title="Refresh" class="refresh-content"><i class="fa fa-refresh"></i></li>
                                                <li title="Maximize" class="expand-content"><i class="icon-frame"></i></li>
                                                <li title="More Options" class="more-option"><i class="ti-more-alt"></i></li>
                                            </ul>
                                                </div>
                                                <div class="widget-peding">
                                                    <ul class="q-comments recent">
                                                        <li>
                                                            <div class="comenter"> <img src="images/resources/q-comment1.jpg" alt=""> </div>
                                                            <div class="comment-detail">
                                                                <h5>Michael Baker</h5>
                                                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus sc risque ante sollicitudin commodo. </p>
                                                            </div>
                                                            <ul class="comment-date">
                                                                <li><span>October 21, 2019</span></li>
                                                            </ul>
                                                            <a class="approved" href="index.html#" title="">approved</a>
                                                            <ul class="control">
                                                                <li><a href="index.html#" title=""><i class="icon-pencil"></i></a></li>
                                                                <li><a href="index.html#" title=""><i class="icon-pin"></i></a></li>
                                                                <li><a class="close-content" href="index.html#" title=""><i class="icon-trash"></i></a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <div class="comenter"> <img src="images/resources/q-comment3.jpg" alt=""> </div>
                                                            <div class="comment-detail">
                                                                <h5>Sarah Loren</h5>
                                                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus sc risque ante sollicitudin commodo. </p>
                                                            </div>
                                                            <ul class="comment-date">
                                                                <li><span>December 21, 2019</span></li>
                                                            </ul>
                                                            <a class="approved" href="index.html#" title="">approved</a>
                                                            <ul class="control">
                                                                <li><a href="index.html#" title=""><i class="icon-pencil"></i></a></li>
                                                                <li><a href="index.html#" title=""><i class="icon-pin"></i></a></li>
                                                                <li><a class="close-content" href="index.html#" title=""><i class="icon-trash"></i></a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <div class="comenter"> <img src="images/resources/q-comment2.jpg" alt=""> </div>
                                                            <div class="comment-detail">
                                                                <h5>Michael Baker</h5>
                                                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus sc risque ante sollicitudin commodo. </p>
                                                            </div>
                                                            <ul class="comment-date">
                                                                <li><span>September 10, 2019</span></li>
                                                            </ul>
                                                            <a class="approved" href="index.html#" title="">approved</a>
                                                            <ul class="control">
                                                                <li><a href="index.html#" title=""><i class="icon-pencil"></i></a></li>
                                                                <li><a href="index.html#" title=""><i class="icon-pin"></i></a></li>
                                                                <li><a class="close-content" href="index.html#" title=""><i class="icon-trash"></i></a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- user list -->
                                        </div>
                                        <!-- recent comment widget -->
                                        <div class="col-lg-6 col-sm-12">
                                            <div class="widget">
                                                <div class="widget-title">
                                                    <h4>Quick Actions</h4>
                                                    <ul class="widget-controls">
                                                <li title="Refresh" class="refresh-content"><i class="fa fa-refresh"></i></li>
                                                <li title="Maximize" class="expand-content"><i class="icon-frame"></i></li>
                                                <li title="More Options" class="more-option"><i class="ti-more-alt"></i></li>
                                            </ul>
                                                </div>
                                                <div class="widget-peding">
                                                    <ul class="q-comments">
                                                        <li>
                                                            <div class="comenter"> <img src="images/resources/q-comment1.jpg" alt=""> </div>
                                                            <div class="comment-detail">
                                                                <h5>Michael Baker</h5>
                                                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus sc risque ante sollicitudin commodo. </p>
                                                            </div>
                                                            <ul class="comment-date">
                                                                <li class="mango"><span>October 21, 2019</span></li>
                                                                <li><span>9:30-13:00</span></li>
                                                            </ul>
                                                            <div class="approv-reject"> <a class="approve active" href="index.html#" title="">approved</a> <a class="rejected" href="index.html#" title="">reject</a> </div>
                                                        </li>
                                                        <li>
                                                            <div class="comenter"> <img src="images/resources/q-comment2.jpg" alt=""> </div>
                                                            <div class="comment-detail">
                                                                <h5>Natasha Kim</h5>
                                                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus sc risque ante sollicitudin commodo. </p>
                                                            </div>
                                                            <ul class="comment-date">
                                                                <li class="carrot"><span>October 21, 2019</span></li>
                                                                <li><span>9:30-13:00</span></li>
                                                            </ul>
                                                            <div class="approv-reject"> <a class="approve" href="index.html#" title="">approved</a> <a class="rejected active" href="index.html#" title="">reject</a> </div>
                                                        </li>
                                                        <li>
                                                            <div class="comenter"> <img src="images/resources/q-comment3.jpg" alt=""> </div>
                                                            <div class="comment-detail">
                                                                <h5>Jason Bourne</h5>
                                                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus sc risque ante sollicitudin commodo. </p>
                                                            </div>
                                                            <ul class="comment-date">
                                                                <li class="berry"><span>October 21, 2019</span></li>
                                                                <li><span>9:30-13:00</span></li>
                                                            </ul>
                                                            <div class="approv-reject"> <a class="approve active" href="index.html#" title="">approved</a> <a class="rejected" href="index.html#" title="">reject</a> </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- user list -->
                                        </div>
                                        <!-- quick action widget -->
                                    </div>
                                </div>
                                <div class="bottombar">
									<span>© 2019. Dewwater. All Rights Reserved.</span>
                                </div>
                                <!-- bottombar -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="side-panel">
			<h4 class="panel-title">General Setting</h4>
			<form method="post">
				<div class="setting-row">
					<span>use night mode</span>
					<input type="checkbox" id="nightmode1"/>
					<label for="nightmode1" data-on-label="ON" data-off-label="OFF"></label>
				</div>
				<div class="setting-row">
					<span>Notifications</span>
					<input type="checkbox" id="switch22" />
					<label for="switch22" data-on-label="ON" data-off-label="OFF"></label>
				</div>
				<div class="setting-row">
					<span>Notification sound</span>
					<input type="checkbox" id="switch33" />
					<label for="switch33" data-on-label="ON" data-off-label="OFF"></label>
				</div>
				<div class="setting-row">
					<span>My profile</span>
					<input type="checkbox" id="switch44" />
					<label for="switch44" data-on-label="ON" data-off-label="OFF"></label>
				</div>
				<div class="setting-row">
					<span>Show profile</span>
					<input type="checkbox" id="switch55" />
					<label for="switch55" data-on-label="ON" data-off-label="OFF"></label>
				</div>
			</form>
			<h4 class="panel-title">Account Setting</h4>
			<form method="post">
				<div class="setting-row">
					<span>Sub users</span>
					<input type="checkbox" id="switch66" />
					<label for="switch66" data-on-label="ON" data-off-label="OFF"></label>
				</div>
				<div class="setting-row">
					<span>personal account</span>
					<input type="checkbox" id="switch77" />
					<label for="switch77" data-on-label="ON" data-off-label="OFF"></label>
				</div>
				<div class="setting-row">
					<span>Business account</span>
					<input type="checkbox" id="switch88" />
					<label for="switch88" data-on-label="ON" data-off-label="OFF"></label>
				</div>
				<div class="setting-row">
					<span>Show me online</span>
					<input type="checkbox" id="switch99" />
					<label for="switch99" data-on-label="ON" data-off-label="OFF"></label>
				</div>
				<div class="setting-row">
					<span>Delete history</span>
					<input type="checkbox" id="switch101" />
					<label for="switch101" data-on-label="ON" data-off-label="OFF"></label>
				</div>
				<div class="setting-row">
					<span>Expose author name</span>
					<input type="checkbox" id="switch111" />
					<label for="switch111" data-on-label="ON" data-off-label="OFF"></label>
				</div>
			</form>
		</div><!-- side panel -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/perfect-scrollbar.jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/chart.min.js"></script>
    <script src="js/echart.min.js"></script>
    <script src="js/jquery.sparkline.min.js"></script>
    <script src="js/calander.min.js"></script>
	<script src="js/sparkline.js"></script>
    <!-- calander -->
    <script src="js/calander-int.js"></script>
    <!-- calander -->
    <script src="js/custom.js"></script>
    <!-- scripts -->
    <script src="js/custom2.js"></script>
    <script src="js/jvectormap.js"></script><!-- jvactor map -->

</body>

</html>
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hi {{ Auth::guard('admin')->user()->name }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
