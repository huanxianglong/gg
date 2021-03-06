<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'My App') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('vendor/laravelextendeduser/js/laravelextendeduser.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/laravelextendeduser/css/laravelextendeduser.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'My App') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item dark-hover" href="{{ route('home') }}">{{ __('Dashboard') }}</a>
                                    <a class="dropdown-item dark-hover" href="{{ route('profile') }}">{{ __('Profile') }}</a>
                                    <a class="dropdown-item dark-hover" href="{{ route('account') }}">{{ __('Account') }}</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item dark-hover" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <div id="loader-wrapper">
          <div id="loader"></div>
          <div class="loader-section section-left"></div>
          <div class="loader-section section-right"></div>
        </div>
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
                                                <li class="menu-item-has-children"> <a title="#"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
                                                    <ul>
                                                        <li><a href="index.html" title="">Dashboard 1</a></li>
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
    											<li class="menu-item-has-children active"> <a title=""><i class="fa fa-inbox"></i><span>Pages</span></a>
                                                    <ul class="mega" style="display: block;">
                                                        <li><a class="active" href="profile.html">profile</a></li>
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
    								<li class="notifications"><a href="profile.html#" title=""><i class="fa fa-bell-o"></i></a><span class="red-bg">02</span>
    									<div class="drop notify"> <span class="drop-head">Notifications</span>
    										<ul class="drop-meta">
    											<li> <i class="notifi-icon blue">N</i>
    												<div class="notifi-meta">
    													<h4><a href="profile.html#" title="">Nulla Vel Metus Scelerisque Ante Commodo. </a></h4>
    													<span>02:34PM</span> </div>
    											</li>
    											<li> <i class="notifi-icon red">C</i>
    												<div class="notifi-meta">
    													<h4><a href="profile.html#" title="">Nulla Vel Metus Scelerisque Ante Commodo. </a></h4>
    													<span>02:34PM</span> </div>
    											</li>
    											<li> <i class="notifi-icon yellow">A</i>
    												<div class="notifi-meta">
    													<h4><a href="profile.html#" title="">Nulla Vel Metus Scelerisque Ante Commodo. </a></h4>
    													<span>02:34PM</span> </div>
    											</li>
    											<li> <i class="notifi-icon blue">N</i>
    												<div class="notifi-meta">
    													<h4><a href="profile.html#" title="">Nulla Vel Metus Scelerisque Ante Commodo. </a></h4>
    													<span>02:34PM</span> </div>
    											</li>
    										</ul>
    										<span class="drop-bottom"><a href="profile.html#" title="">View More Notifications</a></span> </div>
    								</li>
    								<li class="messages"><a href="profile.html#" title=""><i class="fa fa-envelope-o"></i></a><span class="blue-bg">10</span>
    									<div class="drop messages"> <span class="drop-head">3 New Message <i class="fa fa-pencil-square-o"></i></span>
    										<ul class="drop-meta">
    											<li> <i class="notifi-icon"><img src="images/resources/user-mesg.jpg" alt=""></i>
    												<div class="notifi-meta"> <span>02:34PM</span>
    													<h4><a href="profile.html#" title="">Hi Teddy, Just wanted to let you...</a></h4>
    												</div>
    											</li>
    											<li> <i class="notifi-icon"><img src="images/resources/user-mesg2.jpg" alt=""></i>
    												<div class="notifi-meta"> <span>02:34PM</span>
    													<h4><a href="profile.html#" title="">Hi Teddy, Just wanted to let you...</a></h4>
    												</div>
    											</li>
    											<li> <i class="notifi-icon"><img src="images/resources/user-mesg3.jpg" alt=""></i>
    												<div class="notifi-meta"> <span>02:34PM</span>
    													<h4><a href="profile.html#" title="">Hi Teddy, Just wanted to let you...</a></h4>
    												</div>
    											</li>
    											<li> <i class="notifi-icon"><img src="images/resources/user-mesg.jpg" alt=""></i>
    												<div class="notifi-meta"> <span>02:34PM</span>
    													<h4><a href="profile.html#" title="">Hi Teddy, Just wanted to let you...</a></h4>
    												</div>
    											</li>
    											<li> <i class="notifi-icon"><img src="images/resources/user-mesg2.jpg" alt=""></i>
    												<div class="notifi-meta"> <span>02:34PM</span>
    													<h4><a href="profile.html#" title="">Hi Teddy, Just wanted to let you...</a></h4>
    												</div>
    											</li>
    										</ul>
    										<span class="drop-bottom"><a href="profile.html#" title="">View More messages</a></span> </div>
    								</li>
    								<li class="mega"><a href="profile.html#" title="">mega</a>
    									<div class="mega-menu">
    										<div class="row mega-style1">
    											<div class="col-lg-4">
    												<div class="mega-post-info"> <span>envato market</span>
    													<ul>
    														<li><a href="profile.html#" title="">Envato Market</a></li>
    														<li><a href="profile.html#" title="">terms</a></li>
    														<li><a href="profile.html#" title="">licenses</a></li>
    														<li><a href="profile.html#" title="">market API</a></li>
    														<li><a href="profile.html#" title="">Become an affiliate</a></li>
    														<li><a href="profile.html#" title="">help</a></li>
    														<li><a href="profile.html#" title="">Themes and Templates</a></li>
    													</ul>
    												</div>
    											</div>
    											<div class="col-lg-4">
    												<div class="mega-post-info"> <span>Themeforest</span>
    													<ul>
    														<li><a href="profile.html#" title="">Envato Market</a></li>
    														<li><a href="profile.html#" title="">terms</a></li>
    														<li><a href="profile.html#" title="">licenses</a></li>
    														<li><a href="profile.html#" title="">market API</a></li>
    														<li><a href="profile.html#" title="">Become an affiliate</a></li>
    														<li><a href="profile.html#" title="">help</a></li>
    														<li><a href="profile.html#" title="">Themes and Templates</a></li>
    													</ul>
    												</div>
    											</div>
    											<div class="col-lg-4">
    												<div class="mega-post-info"> <span>Evato Element</span>
    													<ul>
    														<li><a href="profile.html#" title="">Envato Market</a></li>
    														<li><a href="profile.html#" title="">terms</a></li>
    														<li><a href="profile.html#" title="">licenses</a></li>
    														<li><a href="profile.html#" title="">market API</a></li>
    														<li><a href="profile.html#" title="">Become an affiliate</a></li>
    														<li><a href="profile.html#" title="">help</a></li>
    														<li><a href="profile.html#" title="">Themes and Templates</a></li>
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
    									<a href="profile.html#" title="">Eng</a>
    									<ul class="drop language">
    										<li class="lang-selected"><a href="profile.html"><i class="fa fa-check"></i> Eng</a></li>
    										<li><a href="profile.html">Rus</a></li>
    										<li><a href="profile.html">Jap</a></li>
    										<li><a href="profile.html">Arb</a></li>
    									</ul>
    								</li>
    								<li class="setting-panel"><a href="profile.html#" title=""><i class="icon-equalizer"></i></a></li>
    							</ul>
    						</div>
    						<div class="col-lg-1">
    							<div class="user-head">
    								<div class="admin">
    									<div class="admin-avatar"><img src="images/resources/admin.png" alt=""> <i class="online"></i> </div>
    								</div>
    								<div class="drop setting"> <span class="drop-head">stifen Doe <i>30 days trial</i></span>
    									<ul class="drop-meta">
    										<li> <a href="profile.html#" title=""><i class="fa fa-eyedropper"></i>Edit Profile</a> </li>
    										<li> <a href="profile.html#" title=""><i class="fa fa-envelope-o"></i>My Inbox</a> </li>
    										<li> <a href="profile.html#" title=""><i class="fa fa-adjust"></i>task</a> </li>
    										<li> <a href="profile.html#" title=""><i class="fa fa-calendar"></i>Calender</a> </li>
    										<li> <a href="profile.html#" title=""><i class="fa fa-align-right"></i>Balance Report</a> </li>
    									</ul>
    									<span class="drop-bottom"><a href="profile.html#" title=""><i class="fa fa-sign-out"></i>log Out</a></span> </div>
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
                                            <li class="notifications"><a href="profile.html#" title=""><i class="fa fa-bell-o"></i></a><span class="red-bg">02</span>
                                                <div class="drop notify"> <span class="drop-head">Notifications</span>
                                                    <ul class="drop-meta">
                                                        <li> <i class="notifi-icon blue">N</i>
                                                            <div class="notifi-meta">
                                                                <h4><a href="profile.html#" title="">Nulla Vel Metus Scelerisque Ante Commodo. </a></h4>
                                                                <span>02:34PM</span> </div>
                                                        </li>
                                                        <li> <i class="notifi-icon red">C</i>
                                                            <div class="notifi-meta">
                                                                <h4><a href="profile.html#" title="">Nulla Vel Metus Scelerisque Ante Commodo. </a></h4>
                                                                <span>02:34PM</span> </div>
                                                        </li>
                                                        <li> <i class="notifi-icon yellow">A</i>
                                                            <div class="notifi-meta">
                                                                <h4><a href="profile.html#" title="">Nulla Vel Metus Scelerisque Ante Commodo. </a></h4>
                                                                <span>02:34PM</span> </div>
                                                        </li>
                                                        <li> <i class="notifi-icon blue">N</i>
                                                            <div class="notifi-meta">
                                                                <h4><a href="profile.html#" title="">Nulla Vel Metus Scelerisque Ante Commodo. </a></h4>
                                                                <span>02:34PM</span> </div>
                                                        </li>
                                                    </ul>
                                                    <span class="drop-bottom"><a href="profile.html#" title="">View More Notifications</a></span> </div>
                                            </li>
                                            <li class="messages"><a href="profile.html#" title=""><i class="fa fa-envelope-o"></i></a><span class="blue-bg">10</span>
                                                <div class="drop messages"> <span class="drop-head">3 New Message <i class="fa fa-pencil-square-o"></i></span>
                                                    <ul class="drop-meta">
                                                        <li> <i class="notifi-icon"><img src="images/resources/user-mesg.jpg" alt=""></i>
                                                            <div class="notifi-meta"> <span>02:34PM</span>
                                                                <h4><a href="profile.html#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                            </div>
                                                        </li>
                                                        <li> <i class="notifi-icon"><img src="images/resources/user-mesg2.jpg" alt=""></i>
                                                            <div class="notifi-meta"> <span>02:34PM</span>
                                                                <h4><a href="profile.html#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                            </div>
                                                        </li>
                                                        <li> <i class="notifi-icon"><img src="images/resources/user-mesg3.jpg" alt=""></i>
                                                            <div class="notifi-meta"> <span>02:34PM</span>
                                                                <h4><a href="profile.html#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                            </div>
                                                        </li>
                                                        <li> <i class="notifi-icon"><img src="images/resources/user-mesg.jpg" alt=""></i>
                                                            <div class="notifi-meta"> <span>02:34PM</span>
                                                                <h4><a href="profile.html#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                            </div>
                                                        </li>
                                                        <li> <i class="notifi-icon"><img src="images/resources/user-mesg2.jpg" alt=""></i>
                                                            <div class="notifi-meta"> <span>02:34PM</span>
                                                                <h4><a href="profile.html#" title="">Hi Teddy, Just wanted to let you...</a></h4>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <span class="drop-bottom"><a href="profile.html#" title="">View More messages</a></span> </div>
                                            </li>
                                        </ul>

                                        <div class="user-head">
    									<div class="admin">
    										<div class="admin-avatar"> <img src="images/resources/admin.png" alt=""> <i class="online"></i> </div>
    									</div>
    									<div class="drop setting"> <span class="drop-head">stifen Doe <i>30 days trial</i></span>
    										<ul class="drop-meta">
    											<li> <a href="profile.html#" title=""><i class="fa fa-eyedropper"></i>Edit Profile</a> </li>
    											<li> <a href="profile.html#" title=""><i class="fa fa-envelope-o"></i>My Inbox</a> </li>
    											<li> <a href="profile.html#" title=""><i class="fa fa-adjust"></i>task</a> </li>
    											<li> <a href="profile.html#" title=""><i class="fa fa-calendar"></i>Calender</a> </li>
    											<li> <a href="profile.html#" title=""><i class="fa fa-align-right"></i>Balance Report</a> </li>
    										</ul>
    										<span class="drop-bottom"><a href="profile.html#" title=""><i class="fa fa-sign-out"></i>log Out</a></span> </div>
                                        </div>
    									<ul class="seting-area">
    									<li class="langages">
    										<a title="" href="profile.html#">Eng</a>
    										<ul class="drop language">
    											<li class="lang-selected"><a href="profile.html"><i class="fa fa-check"></i> Eng</a></li>
    											<li><a href="profile.html">Rus</a></li>
    											<li><a href="profile.html">Jap</a></li>
    											<li><a href="profile.html">Arb</a></li>
    										</ul>
    									</li>
    									<li class="setting-panel"><a title="" href="profile.html#"><i class="icon-equalizer"></i></a></li>
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
                        <li><a href="profile.html#" title="">Home</a></li>
                        <li>Dashbord</li>
                      </ul>
                    </div>
                    <div class="profile">
                      <div class="row merged">
                        <div class="col-md-4 col-sm-12 col-xs-12">
                          <div class="profile-bg"> <img src="images/resources/profile-bg.jpg" alt="">
                            <div class="admin-meta"> <img src="images/resources/profile-avatar.jpg" alt="">
                              <h5>Mario Flores</h5>
                              <span>developer</span> </div>
                          </div>
                        </div>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                          <div class="row">
                            <div class="col-md-6 col-sm-6">
                              <ul class="follow-btns">
                                <li class="active"><a class="follow" href="profile.html#" title="">follow</a></li>
                                <li><a class="message" href="profile.html#" title="">message</a></li>
                              </ul>
                            </div>
                            <div class="col-md-6 col-sm-6">
                              <ul class="profile-socials">
                                <li><a class="facebook" href="profile.html#" title=""><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="profile.html#" title=""><i class="fa fa-twitter"></i></a></li>
                                <li><a class="vk" href="profile.html#" title=""><i class="fa fa-vk"></i></a></li>
                                <li><a class="tumblr" href="profile.html#" title=""><i class="fa fa-tumblr"></i></a></li>
                              </ul>
                            </div>
                            <div class="col-md-12">
                              <div class="sub-area">
                                <ul>
                                  <li><a href="profile.html#" title=""><i class="fa fa-briefcase"></i>Over View </a></li>
                                  <li><a href="profile.html#" title=""><i class="fa fa-gear"></i>Account Settings </a></li>
                                  <li><a href="profile.html#" title=""><i class="fa fa-adjust"></i>Over View </a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="about">
    						  <div class="row">
    							<div class="col-md-6">
    							  <div class="about-info">
    								<h4>About Mario:</h4>
    								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut consectet uer adipiscing elit laoreet dolore magna.</p>
    							  </div>
    							</div>
    							<div class="col-md-6">
    							  <ul class="vlaue-show">
    								<li> <span>37</span> <a href="profile.html#" title="">projects</a> </li>
    								<li> <span>59</span> <a href="profile.html#" title="">Tasks</a> </li>
    								<li> <span>60</span> <a href="profile.html#" title="">Uploads</a> </li>
    							  </ul>
    							</div>
    						</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="widget">
                          <div class="widget-title">
                            <h4>your activity</h4>
                            <ul class="widget-controls">
    							<li title="Refresh" class="refresh-content"><i class="fa fa-refresh"></i></li>
    							<li title="Maximize" class="expand-content"><i class="icon-frame"></i></li>
    							<li title="More Options" class="more-option"><i class="ti-more-alt"></i></li>
    						</ul>
                          </div>
                          <div class="widget-peding">
                            <ul class="activity-meta">
                              <li>
                                <div class="activity-ico"> <img src="images/icon-6.png" alt=""> <span>4515 <i>total sales</i></span> </div>
                                <div class="spark">
                                  <div class="sparkline11"></div>
                                </div>
                              </li>
                              <li>
                                <div class="activity-ico"> <img src="images/icon-7.png" alt=""> <span>2089<i>new sales</i></span> </div>
                                <div class="spark">
                                  <div class="sparkline12"></div>
                                </div>
                              </li>
                            </ul>
                            <table class="member-activity table table-responsive">
                              <thead>
                                <tr>
                                  <th>member</th>
                                  <th>earnings</th>
                                  <th>case</th>
                                  <th>closed</th>
                                  <th>rate</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td><i><img src="images/resources/active-member1.jpg" alt=""></i> <span>tom</span></td>
                                  <td>$18</td>
                                  <td>65</td>
                                  <td>28</td>
                                  <td>80%</td>
                                </tr>
                                <tr>
                                  <td><i><img src="images/resources/active-member2.jpg" alt=""></i> <span>rifn</span></td>
                                  <td>$198</td>
                                  <td>99</td>
                                  <td>68</td>
                                  <td>90%</td>
                                </tr>
                                <tr>
                                  <td><i><img src="images/resources/active-member3.jpg" alt=""></i> <span>tom</span></td>
                                  <td>$18</td>
                                  <td>65</td>
                                  <td>28</td>
                                  <td>80%</td>
                                </tr>
                                <tr>
                                  <td><i><img src="images/resources/active-member4.jpg" alt=""></i> <span>rifn</span></td>
                                  <td>$198</td>
                                  <td>99</td>
                                  <td>68</td>
                                  <td>90%</td>
                                </tr>
                                <tr>
                                  <td><i><img src="images/resources/active-member3.jpg" alt=""></i> <span>Daniel</span></td>
                                  <td>$198</td>
                                  <td>99</td>
                                  <td>68</td>
                                  <td>90%</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <!-- user list -->
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
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
                              <li class="green"> <span class="date">25 Sec Ago</span>
                                <h5>Nulla Vel Metus Scelerue Commodo</h5>
                              </li>
                              <li class="green"> <span class="date">05 Sec Ago</span>
                                <h5>Completed Layout Examples</h5>
                              </li>
                              <li class="blue"> <span class="date">55 Sec Ago</span>
                                <h5>New Updated Has Been Installed </h5>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <!-- user list -->
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="widget">
                          <div class="widget-title">
                            <h4>customer support</h4>
                            <ul class="widget-controls">
    							<li title="Refresh" class="refresh-content"><i class="fa fa-refresh"></i></li>
    							<li title="Maximize" class="expand-content"><i class="icon-frame"></i></li>
    							<li title="More Options" class="more-option"><i class="ti-more-alt"></i></li>
    						</ul>
                          </div>
                          <div class="widget-peding">
                            <ul class="q-comments support">
                              <li>
                                <div class="comenter"> <img src="images/resources/q-comment1.jpg" alt=""> </div>
                                <div class="comment-detail">
                                  <h5>Michael Baker</h5>
                                  <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus sc risque ante sollicitudin commodo. </p>
                                </div>
                                <ul class="comment-date">
                                  <li><span>October 21, 2017</span></li>
                                  <li class="status mango"><span>open</span></li>
                                </ul>
                              </li>
                              <li>
                                <div class="comenter"> <img src="images/resources/q-comment1.jpg" alt=""> </div>
                                <div class="comment-detail">
                                  <h5>Michael Baker</h5>
                                  <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus sc risque ante sollicitudin commodo. </p>
                                </div>
                                <ul class="comment-date">
                                  <li><span>October 21, 2017</span></li>
                                  <li class="status berry"><span>open</span></li>
                                </ul>
                              </li>
                              <li>
                                <div class="comenter"> <img src="images/resources/q-comment1.jpg" alt=""> </div>
                                <div class="comment-detail">
                                  <h5>Michael Baker</h5>
                                  <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus sc risque ante sollicitudin commodo. </p>
                                </div>
                                <ul class="comment-date">
                                  <li><span>October 21, 2017</span></li>
                                  <li class="status carrot"><span>open</span></li>
                                </ul>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <!-- user list -->
                      </div>
                      <!-- customer support widget -->
                      <div class="col-md-6">
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
                                  <li class="mango"><span>October 21, 2017</span></li>
                                  <li><span>9:30-13:00</span></li>
                                </ul>
                                <div class="approv-reject"> <a class="approve active" href="profile.html#" title="">approved</a> <a class="rejected" href="profile.html#" title="">reject</a> </div>
                              </li>
                              <li>
                                <div class="comenter"> <img src="images/resources/q-comment2.jpg" alt=""> </div>
                                <div class="comment-detail">
                                  <h5>Natasha Kim</h5>
                                  <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus sc risque ante sollicitudin commodo. </p>
                                </div>
                                <ul class="comment-date">
                                  <li class="carrot"><span>October 21, 2017</span></li>
                                  <li><span>9:30-13:00</span></li>
                                </ul>
                                <div class="approv-reject"> <a class="approve" href="profile.html#" title="">approved</a> <a class="rejected active" href="profile.html#" title="">reject</a> </div>
                              </li>
                              <li>
                                <div class="comenter"> <img src="images/resources/q-comment3.jpg" alt=""> </div>
                                <div class="comment-detail">
                                  <h5>Jason Bourne</h5>
                                  <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus sc risque ante sollicitudin commodo. </p>
                                </div>
                                <ul class="comment-date">
                                  <li class="berry"><span>October 21, 2017</span></li>
                                  <li><span>9:30-13:00</span></li>
                                </ul>
                                <div class="approv-reject"> <a class="approve active" href="profile.html#" title="">approved</a> <a class="rejected" href="profile.html#" title="">reject</a> </div>
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
    					<span>?? 2019. Dewwater. All Rights Reserved.</span>
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
            </div>
    </div>

    @yield('script')
</body>
</html>
