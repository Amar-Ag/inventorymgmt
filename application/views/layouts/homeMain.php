<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trago</title>

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-lineariconago.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/travel-setting.css">


</head>

<body class="transparent_home_page">
<div class="wrapper-container">
    <header id="masthead" class="site-header sticky_header affix-top">
        <div class="header_top_bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <aside id="text-15" class="widget_text">
                            <div class="textwidget">
                                <ul class="top_bar_info clearfix">
                                    <li><i class="fa fa-clock-o"></i> Sun - Fri 8.00 - 18.00. Saturday CLOSED</li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <div class="col-sm-8 topbar-right">
                        <aside id="text-7" class="widget widget_text">
                            <div class="textwidget">
                                <ul class="top_bar_info clearfix">
                                    <li><i class="fa fa-phone"></i> 0123456789</li>
                                    <li class="hidden-info">
                                        <i class="fa fa-map-marker"></i> Kathmandu,Nepal &nbsp;&nbsp;&nbsp;&nbsp;
                                    </li>
                                </ul>
                            </div>
                        </aside>
                        <?php if ($this->session->userdata("UserId") == ''){
                            ?>
                            <a href="<?php echo base_url('User/login_view'); ?>">
                                <span class="register_btn">
                                    <i class="fa fa-user"></i>
                                    Login &nbsp;|&nbsp;
                                </span>
                            </a>

                            <a href="<?php echo base_url('User/add'); ?>">
                                <span class="register_btn">
                                    <i class="fa fa-user"></i>
                                    Register
                                </span>
                            </a>

                            <!--                        <aside id="travel_login_register_from-2" class="widget widget_login_form">-->
                            <!--                            <span class="show_from login"><i class="fa fa-user"></i>Login</span>-->
                            <!---->
                            <!--                            <div class="form_popup from_login" tabindex="-1">-->
                            <!--                                <div class="inner-form">-->
                            <!--                                    <div class="closeicon"></div>-->
                            <!--                                    <h3>Login</h3>-->
                            <!--                                    <form name="loginform" id="loginform" action="#" method="post">-->
                            <!--                                        <p class="login-username">-->
                            <!--                                            <label for="user_login">Username or Email Address</label>-->
                            <!--                                            <input type="text" name="log" id="user_login" class="input" value=""-->
                            <!--                                                   size="20">-->
                            <!--                                        </p>-->
                            <!--                                        <p class="login-password">-->
                            <!--                                            <label for="user_pass">Password</label>-->
                            <!--                                            <input type="password" name="pwd" id="user_pass" class="input" value=""-->
                            <!--                                                   size="20">-->
                            <!--                                        </p>-->
                            <!--                                        <p class="login-remember">-->
                            <!--                                            <label><input name="rememberme" type="checkbox" id="rememberme"-->
                            <!--                                                          value="forever"> Remember Me</label>-->
                            <!--                                        </p>-->
                            <!--                                        <p class="login-submit">-->
                            <!--                                            <input type="submit" name="wp-submit" id="wp-submit"-->
                            <!--                                                   class="button button-primary" value="Log In">-->
                            <!--                                            <input type="hidden" name="redirect_to" value="">-->
                            <!--                                        </p>-->
                            <!--                                    </form>-->
                            <!--                                    <a href="#" title="Lost your password?" class="lost-pass">Lost your password?</a>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                            <span class="register_btn">Register</span>-->
                            <!--                            <div class="form_popup from_register" tabindex="-1">-->
                            <!--                                <div class="inner-form">-->
                            <!--                                    <div class="closeicon"></div>-->
                            <!--                                    <h3>Register</h3>-->
                            <!--                                    <form method="post" class="register">-->
                            <!--                                        <p class="form-row">-->
                            <!--                                            <label for="reg_username">Username <span class="required">*</span></label>-->
                            <!--                                            <input type="text" class="input" name="username" id="reg_username" value=""-->
                            <!--                                                   autocomplete="off">-->
                            <!--                                        </p>-->
                            <!--                                        <p class="form-row">-->
                            <!--                                            <label for="reg_email">Email address <span class="required">*</span></label>-->
                            <!--                                            <input type="email" class="input" name="email" id="reg_email" value="">-->
                            <!--                                        </p>-->
                            <!--                                        <p class="form-row">-->
                            <!--                                            <label for="reg_password">Password <span class="required">*</span></label>-->
                            <!--                                            <input type="password" class="input" name="password" id="reg_password">-->
                            <!--                                        </p>-->
                            <!--                                        <div style="left: -999em; position: absolute;">-->
                            <!--                                            <label for="trap">Anti-spam</label><input type="text" name="email_2"-->
                            <!--                                                                                      id="trap" tabindex="-1"-->
                            <!--                                                                                      autocomplete="off">-->
                            <!--                                        </div>-->
                            <!--                                        <p class="form-row">-->
                            <!--                                            <input type="submit" class="button" name="register" value="Register">-->
                            <!--                                        </p>-->
                            <!--                                    </form>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                        <?php } else {
                            ?>
                            <a href="<?php echo base_url('User/user_logout'); ?>"> <span
                                        class="register_btn">Logout</span></a>
                        <?php }
                        ?>
                        <div class="background-overlay"></div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <div class="navigation-menu">
            <div class="container">
                <div class="menu-mobile-effect navbar-toggle button-collapse" data-activates="mobile-demo">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </div>
                <div class="width-logo sm-logo">
                    <a href="" title="Travel" rel="home">
                        <img src="<?php echo base_url() ?>assets/images/logo/logo.png" alt="Logo" width="474"
                             height="130"
                             class="logo_transparent_static">
                        <img src="<?php echo base_url() ?>assets/images/logo/logo_sticky.png" alt="Sticky logo"
                             width="474" height="130"
                             class="logo_sticky">
                    </a>
                </div>
                <nav class="width-navigation">
                    <ul class="nav navbar-nav menu-main-menu side-nav" id="mobile-demo">
                        <li class="current-menu-ancestor current-menu-parent">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="tour.html">Tours</a>
                        </li>

                        <li class="menu-item-has-children">
                            <a href="gallery.html">Gallery</a>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                        <li class="menu-right">
                            <ul>
                                <li id="travel_social_widget-2" class="widget travel_search">
                                    <div class="search-toggler-unit">
                                        <div class="search-toggler">
                                            <i class="fa fa-search"></i>
                                        </div>
                                    </div>
                                    <div class="search-menu search-overlay search-hidden">
                                        <div class="closeicon"></div>
                                        <form method="get" class="search-form" action="tours.html">
                                            <input type="search" class="search-field" placeholder="Search ..." value=""
                                                   name="s" title="Search for:">
                                            <input type="submit" class="search-submit font-awesome" value="&#xf002;">
                                        </form>
                                        <div class="background-overlay"></div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <div class="site wrapper-content">
        <div class="home-content" role="main">
            <div class="wrapper-bg-video">
                <video poster="<?php echo base_url() ?>assets/images/video_slider.jpg" playsinline autoplay muted loop>
                    <source src="http://physcode.com/video/330149744.mp4" type="video/mp4">
                </video>
                <div class="content-slider">
                    <p>Find your special tour today </p>
                    <h2>With Travel Tours </h2>
                    <p><a href="tours.html" class="btn btn-slider">VIEW TOURS </a></p>
                </div>
            </div>

            <div class="slider-tour-booking">
                <div class="container">
                    <div class="travel-booking-search hotel-booking-search travel-booking-style_1">
                        <form name="hb-search-form" action="tours.html" id="tourBookingForm">
                            <ul class="hb-form-table" style="color: #FFF;">
                                <li class="hb-form-field">
                                    Destination:
                                    <div class="hb-form-field-input hb_input_field">
                                        <select name="tourtax[pa_destination]">
                                            <?php foreach ($destination as $d) {
                                                ?>
                                                <option value="<?php echo $d['DestinationId'] ?>"><?php echo $d['DestinationTitle'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </li>
                                <li class="hb-form-field">
                                    Start Date:
                                    <div class="hb-form-field-input hb_input_field">
                                        <input type="date" name="sDate" value="" placeholder="Start Date">
                                    </div>
                                </li>
                                <li class="hb-form-field">
                                    End Date:
                                    <div class="hb-form-field-input hb_input_field">
                                        <input type="date" name="eDate" value="" placeholder="End Date">
                                    </div>
                                </li>
                                <li class="hb-form-field">
                                    Number of Travellers:
                                    <div class="hb-form-field-input hb_input_field">
                                        <input type="number" name="" value="" placeholder="Number of Travellers">
                                    </div>
                                </li>
                                <li class="hb-submit">
                                    &nbsp
                                    <button type="submit">Search Tours</button>
                                </li>
                            </ul>
                            <input type="hidden" name="lang" value="">

                        </form>
                    </div>
                </div>
            </div>
            <div class="container two-column-respon mg-top-6x mg-bt-6x">
                <?php
                if (isset($_view) && $_view)
                    $this->load->view($_view);
                ?>
                <div class="row">
                    <div class="col-sm-12 mg-btn-6x">
                        <div class="shortcode_title title-center title-decoration-bottom-center">
                            <h3 class="title_primary">Easy to use, easy to Browse</h3><span
                                    class="line_after_title"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="wpb_column col-sm-3">
                        <div class="widget-icon-box widget-icon-box-base iconbox-center">
                            <div class="boxes-icon circle"
                                 style="font-size:30px;width:80px; height:80px;line-height:80px">
                                <span class="inner-icon"><i class='fa fa-map-o'></i></span>
                            </div>
                            <div class="content-inner">
                                <div class="sc-heading article_heading">
                                    <h4 class="heading__primary">Get a personalized plan</h4></div>
                                <div class="desc-icon-box">
                                    <div>A complete day-by-day itinerary based on your perferences</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column col-sm-3">
                        <div class="widget-icon-box widget-icon-box-base iconbox-center">
                            <div class="boxes-icon " style="font-size:30px;width:80px; height:80px;line-height:80px">
                                <span class="inner-icon"><i class='fa fa-check-square-o'></i></span>
                            </div>
                            <div class="content-inner">
                                <div class="sc-heading article_heading">
                                    <h4 class="heading__primary">Customize it</h4></div>
                                <div class="desc-icon-box">
                                    <div>Refine your plan. We'll find the best routes and schedules</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column col-sm-3">
                        <div class="widget-icon-box widget-icon-box-base iconbox-center">
                            <div class="boxes-icon " style="font-size:30px;width:80px; height:80px;line-height:80px">
                                <span class="inner-icon"><i class='fa fa-ticket'></i></span>
                            </div>
                            <div class="content-inner">
                                <div class="sc-heading article_heading">
                                    <h4 class="heading__primary">Book it</h4></div>
                                <div class="desc-icon-box">
                                    <div>Choose from the best hotels and activities. Up to 50% off</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column col-sm-3">
                        <div class="widget-icon-box widget-icon-box-base iconbox-center">
                            <div class="boxes-icon circle"
                                 style="font-size:30px;width:80px; height:80px;line-height:80px">
                                <span class="inner-icon"><i class='fa fa-users'></i></span>
                            </div>
                            <div class="content-inner">
                                <div class="sc-heading article_heading">
                                    <h4 class="heading__primary">Manage it</h4></div>
                                <div class="desc-icon-box">
                                    <div>Everything in one place.Everyone on the same page.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="padding-top-6x padding-bottom-6x section-background"
                 style="background-image:url(images/1418296097.jpg)">
                <div class="container">
                    <div class="shortcode_title text-white title-center title-decoration-bottom-center">
                        <div class="title_subtitle">Take a Look at Our</div>
                        <h3 class="title_primary">MOST POPULAR TOURS</h3>
                        <span class="line_after_title" style="color:#ffffff"></span>
                    </div>
                    <div class="row wrapper-tours-slider">
                        <div class="tours-type-slider list_content" data-dots="true" data-nav="true"
                             data-responsive='{"0":{"items":1}, "480":{"items":2}, "768":{"items":2}, "992":{"items":3}, "1200":{"items":4}}'>
                            <div class="item-tour">
                                <div class="item_border">
                                    <div class="item_content">
                                        <div class="post_images">
                                            <a href="single-tour.html" class="travel_tour-LoopProduct-link">
											<span class="price"><del>
												<span class="travel_tour-Price-amount amount">$70.46</span></del>
												<ins><span class="travel_tour-Price-amount amount">$54.46</span></ins>
											</span>
                                                <span class="onsale">Sale!</span>
                                                <img src="images/tour1t.jpg" alt="" title="">
                                            </a>
                                            <div class="group-icon">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title=""
                                                   class="frist" data-original-title="River Cruise"><i
                                                            class="flaticon-transport-2"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title=""
                                                   data-original-title="Wildlife"><i class="flaticon-island"></i></a>
                                            </div>
                                        </div>
                                        <div class="wrapper_content">
                                            <div class="post_title"><h4>
                                                    <a href="single-tour.html" rel="bookmark">Everest Base Camp Trek</a>
                                                </h4></div>
                                            <span class="post_date">14 Days</span>
                                            <p>Everest base camp trek traditionally is a route normally following
                                                the</p>
                                        </div>
                                    </div>
                                    <div class="read_more">
                                        <div class="item_rating">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i>
                                        </div>
                                        <a href="single-tour.html" class="read_more_button">VIEW MORE
                                            <i class="fa fa-long-arrow-right"></i></a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-tour">
                                <div class="item_border">
                                    <div class="item_content">
                                        <div class="post_images">
                                            <a href="single-tour.html" class="travel_tour-LoopProduct-link">
											<span class="price">
												<span class="travel_tour-Price-amount amount">$82.00</span>
											</span>
                                                <img src="images/tour-2.jpg" alt="" title="">
                                            </a>
                                            <div class="group-icon">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title=""
                                                   class="frist" data-original-title="River Cruise"><i
                                                            class="flaticon-transport-2"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title=""
                                                   data-original-title="Wildlife"><i class="flaticon-island"></i></a>
                                            </div>
                                        </div>
                                        <div class="wrapper_content">
                                            <div class="post_title"><h4>
                                                    <a href="single-tour.html" rel="bookmark">Upper Mustang Trek
                                                </h4></div>
                                            <span class="post_date">17 Days</span>
                                            <p>Upper Mustang trek offers a spectacular trekking experience</p>
                                        </div>
                                    </div>
                                    <div class="read_more">
                                        <div class="item_rating">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i>
                                        </div>
                                        <a href="single-tour.html" class="read_more_button">VIEW MORE
                                            <i class="fa fa-long-arrow-right"></i></a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-tour">
                                <div class="item_border">
                                    <div class="item_content">
                                        <div class="post_images">
                                            <a href="single-tour.html" class="travel_tour-LoopProduct-link">
											<span class="price">
												<span class="travel_tour-Price-amount amount">$89.00</span>
											</span>
                                                <img src="images/tour-3.jpg" alt="" title="">
                                            </a>
                                            <div class="group-icon">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title=""
                                                   class="frist" data-original-title="River Cruise"><i
                                                            class="flaticon-transport-2"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title=""
                                                   data-original-title="Wildlife"><i class="flaticon-island"></i></a>
                                            </div>
                                        </div>
                                        <div class="wrapper_content">
                                            <div class="post_title"><h4>
                                                    <a href="single-tour.html" rel="bookmark">Nepal Temples Tour
                                                </h4></div>
                                            <span class="post_date">5 DAYS</span>
                                            <p>The Kathmandu valley boasts of a considerably high number of</p>
                                        </div>
                                    </div>
                                    <div class="read_more">
                                        <div class="item_rating">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i>
                                        </div>
                                        <a href="single-tour.html" class="read_more_button">VIEW MORE
                                            <i class="fa fa-long-arrow-right"></i></a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-tour">
                                <div class="item_border">
                                    <div class="item_content">
                                        <div class="post_images">
                                            <a href="single-tour.html" class="travel_tour-LoopProduct-link">
											<span class="price">
												<span class="travel_tour-Price-amount amount">90.00</span>
 											</span>
                                                <img src="images/tour-4.jpg" alt="" title="">
                                            </a>
                                            <div class="group-icon">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title=""
                                                   class="frist" data-original-title="River Cruise"><i
                                                            class="flaticon-transport-2"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title=""
                                                   data-original-title="Wildlife"><i class="flaticon-island"></i></a>
                                            </div>
                                        </div>
                                        <div class="wrapper_content">
                                            <div class="post_title"><h4>
                                                    <a href="single-tour.html" rel="bookmark">Nepal Experience Tour</a>
                                                </h4></div>
                                            <span class="post_date">12 Days</span>
                                            <p>Nepal Experience Tour tries to provide travelers with a taste</p>
                                        </div>
                                    </div>
                                    <div class="read_more">
                                        <div class="item_rating">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i>
                                        </div>
                                        <a href="single-tour.html" class="read_more_button">VIEW MORE
                                            <i class="fa fa-long-arrow-right"></i></a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-tour">
                                <div class="item_border">
                                    <div class="item_content">
                                        <div class="post_images">
                                            <a href="single-tour.html" class="travel_tour-LoopProduct-link">
											<span class="price"><del>
												<span class="travel_tour-Price-amount amount">$70.46</span></del>
												<ins><span class="travel_tour-Price-amount amount">$54.46</span></ins>
											</span>
                                                <span class="onsale">Sale!</span>
                                                <img src="images/tour1t.jpg" alt="" title="">
                                            </a>
                                            <div class="group-icon">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title=""
                                                   class="frist" data-original-title="River Cruise"><i
                                                            class="flaticon-transport-2"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title=""
                                                   data-original-title="Wildlife"><i class="flaticon-island"></i></a>
                                            </div>
                                        </div>
                                        <div class="wrapper_content">
                                            <div class="post_title"><h4>
                                                    <a href="single-tour.html" rel="bookmark">Everest Base Camp Trek</a>
                                                </h4></div>
                                            <span class="post_date">14 Days</span>
                                            <p>Everest base camp trek traditionally is a route normally following
                                                the</p>
                                        </div>
                                    </div>
                                    <div class="read_more">
                                        <div class="item_rating">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i>
                                        </div>
                                        <a href="single-tour.html" class="read_more_button">VIEW MORE
                                            <i class="fa fa-long-arrow-right"></i></a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-tour">
                                <div class="item_border">
                                    <div class="item_content">
                                        <div class="post_images">
                                            <a href="single-tour.html" class="travel_tour-LoopProduct-link">
											<span class="price">
												<span class="travel_tour-Price-amount amount">$82.00</span>
											</span>
                                                <img src="images/tour-2.jpg" alt="" title="">
                                            </a>
                                            <div class="group-icon">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title=""
                                                   class="frist" data-original-title="River Cruise"><i
                                                            class="flaticon-transport-2"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title=""
                                                   data-original-title="Wildlife"><i class="flaticon-island"></i></a>
                                            </div>
                                        </div>
                                        <div class="wrapper_content">
                                            <div class="post_title"><h4>
                                                    <a href="single-tour.html" rel="bookmark">Upper Mustang Trek
                                                </h4></div>
                                            <span class="post_date">17 Days</span>
                                            <p>Upper Mustang trek offers a spectacular trekking experience</p>
                                        </div>
                                    </div>
                                    <div class="read_more">
                                        <div class="item_rating">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i>
                                        </div>
                                        <a href="single-tour.html" class="read_more_button">VIEW MORE
                                            <i class="fa fa-long-arrow-right"></i></a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-tour">
                                <div class="item_border">
                                    <div class="item_content">
                                        <div class="post_images">
                                            <a href="single-tour.html" class="travel_tour-LoopProduct-link">
											<span class="price">
												<span class="travel_tour-Price-amount amount">$89.00</span>
											</span>
                                                <img src="images/tour-3.jpg" alt="" title="">
                                            </a>
                                            <div class="group-icon">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title=""
                                                   class="frist" data-original-title="River Cruise"><i
                                                            class="flaticon-transport-2"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title=""
                                                   data-original-title="Wildlife"><i class="flaticon-island"></i></a>
                                            </div>
                                        </div>
                                        <div class="wrapper_content">
                                            <div class="post_title"><h4>
                                                    <a href="single-tour.html" rel="bookmark">Nepal Temples Tour
                                                </h4></div>
                                            <span class="post_date">5 DAYS</span>
                                            <p>The Kathmandu valley boasts of a considerably high number of</p>
                                        </div>
                                    </div>
                                    <div class="read_more">
                                        <div class="item_rating">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i>
                                        </div>
                                        <a href="single-tour.html" class="read_more_button">VIEW MORE
                                            <i class="fa fa-long-arrow-right"></i></a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-tour">
                                <div class="item_border">
                                    <div class="item_content">
                                        <div class="post_images">
                                            <a href="single-tour.html" class="travel_tour-LoopProduct-link">
											<span class="price">
												<span class="travel_tour-Price-amount amount">90.00</span>
 											</span>
                                                <img src="images/tour-4.jpg" alt="" title="">
                                            </a>
                                            <div class="group-icon">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title=""
                                                   class="frist" data-original-title="River Cruise"><i
                                                            class="flaticon-transport-2"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title=""
                                                   data-original-title="Wildlife"><i class="flaticon-island"></i></a>
                                            </div>
                                        </div>
                                        <div class="wrapper_content">
                                            <div class="post_title"><h4>
                                                    <a href="single-tour.html" rel="bookmark">Nepal Experience Tour</a>
                                                </h4></div>
                                            <span class="post_date">12 Days</span>
                                            <p>Nepal Experience Tour tries to provide travelers with a taste</p>
                                        </div>
                                    </div>
                                    <div class="read_more">
                                        <div class="item_rating">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i>
                                        </div>
                                        <a href="single-tour.html" class="read_more_button">VIEW MORE
                                            <i class="fa fa-long-arrow-right"></i></a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="section-white padding-top-6x padding-bottom-6x tours-type">
                <div class="container">
                    <div class="shortcode_title title-center title-decoration-bottom-center">
                        <div class="title_subtitle">Find a Tour by</div>
                        <h3 class="title_primary">DESTINATION</h3><span class="line_after_title"></span>
                    </div>
                    <div class="wrapper-tours-slider wrapper-tours-type-slider">
                        <div class="tours-type-slider" data-dots="true" data-nav="true"
                             data-responsive='{"0":{"items":1}, "480":{"items":2}, "768":{"items":3}, "992":{"items":4}, "1200":{"items":5}}'>
                            <div class="tours_type_item">
                                <a href="tours.html" class="tours-type__item__image">
                                    <img src="images/everest11.jpg" alt="Brazil">
                                </a>
                                <div class="content-item">
                                    <div class="item__title">Everest</div>
                                </div>
                            </div>
                            <div class="tours_type_item">
                                <a href="tours.html" class="tours-type__item__image">
                                    <img src="images/anapurna.jpg" alt="Philippines">
                                </a>
                                <div class="content-item">
                                    <div class="item__title">Annapurna</div>
                                </div>
                            </div>
                            <div class="tours_type_item">
                                <a href="tours.html" class="tours-type__item__image">
                                    <img src="images/pokhara.jpg" alt="Brazil">
                                </a>
                                <div class="content-item">
                                    <div class="item__title">Pokhara</div>
                                </div>
                            </div>
                            <div class="tours_type_item">
                                <a href="tours.html" class="tours-type__item__image">
                                    <img src="images/mustang.jpg" alt="Brazil">
                                </a>
                                <div class="content-item">
                                    <div class="item__title">Mustang</div>
                                </div>
                            </div>
                            <div class="tours_type_item">
                                <a href="tours.html" class="tours-type__item__image">
                                    <img src="images/Tilicho.jpg" alt="Brazil">
                                </a>
                                <div class="content-item">
                                    <div class="item__title">Tilicho Lake</div>
                                </div>
                            </div>
                            <div class="tours_type_item">
                                <a href="tours.html" class="tours-type__item__image">
                                    <img src="images/kathmandu.jpg" alt="Brazil">
                                </a>
                                <div class="content-item">
                                    <div class="item__title">Kathmandu</div>
                                </div>
                            </div>
                            <div class="tours_type_item">
                                <a href="tours.html" class="tours-type__item__image">
                                    <img src="images/lumbini.jpg" alt="Brazil">
                                </a>
                                <div class="content-item">
                                    <div class="item__title">Lumbini</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="padding-top-6x padding-bottom-6x bg__shadow section-background"
                 style="background-image:url(images/bg-pallarax.jpg)">
                <div class="container">
                    <div class="shortcode_title text-white title-center title-decoration-bottom-center">
                        <div class="title_subtitle">Some statistics about Travel WP</div>
                        <h3 class="title_primary">CENTER ACHIEVEMENTS</h3>
                        <span class="line_after_title" style="color:#ffffff"></span>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="stats_counter text-center text-white">
                                <div class="wrapper-icon">
                                    <i class="flaticon-airplane"></i>
                                </div>
                                <div class="stats_counter_number">94,532</div>
                                <div class="stats_counter_title">Customers</div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="stats_counter text-center text-white">
                                <div class="wrapper-icon">
                                    <i class="flaticon-island"></i>
                                </div>
                                <div class="stats_counter_number">1021</div>
                                <div class="stats_counter_title">Destinations</div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="stats_counter text-center text-white">
                                <div class="wrapper-icon">
                                    <i class="flaticon-globe"></i>
                                </div>
                                <div class="stats_counter_number">20,096</div>
                                <div class="stats_counter_title">Tours</div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="stats_counter text-center text-white">
                                <div class="wrapper-icon">
                                    <i class="flaticon-people"></i>
                                </div>
                                <div class="stats_counter_number">12</div>
                                <div class="stats_counter_title">Tour types</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="section-white padding-top-6x padding-bottom-6x">
                <div class="container">
                    <div class="shortcode_title title-center title-decoration-bottom-center">
                        <h3 class="title_primary">DEALS AND DISCOUNTS</h3><span class="line_after_title"></span>
                    </div>
                    <div class="row wrapper-tours-slider">
                        <div class="tours-type-slider list_content" data-dots="true" data-nav="true" data-responsive='{"0":{"items":1}, "480":{"items":2}, "768":{"items":3}, "992":{"items":3}, "1200":{"items":3}}'>
                            <div class="item-tour">
                                <div class="item_border">
                                    <div class="item_content">
                                        <div class="post_images">
                                            <a href="single-tour.html" class="travel_tour-LoopProduct-link">
                                            <span class="price">
                                                <span class="travel_tour-Price-amount amount">$89.00</span>
                                            </span>
                                                <img src="images/tour/430x305/tour-3.jpg" alt="" title="">
                                            </a>
                                            <div class="group-icon">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
                                            </div>
                                        </div>
                                        <div class="wrapper_content">
                                            <div class="post_title"><h4>
                                                <a href="single-tour.html" rel="bookmark">Anchorage to Santiago</a>
                                            </h4></div>
                                            <span class="post_date">5 DAYS 4 NIGHTS</span>
                                            <p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
                                        </div>
                                    </div>
                                    <div class="read_more">
                                        <div class="item_rating">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                        </div>
                                        <a href="single-tour.html" class="read_more_button">VIEW MORE
                                            <i class="fa fa-long-arrow-right"></i></a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-tour">
                                <div class="item_border">
                                    <div class="item_content">
                                        <div class="post_images">
                                            <a href="single-tour.html" class="travel_tour-LoopProduct-link">
                                            <span class="price">
                                                <span class="travel_tour-Price-amount amount">90.00</span>
                                             </span>
                                                <img src="images/tour/430x305/tour-4.jpg" alt="" title="">
                                            </a>
                                            <div class="group-icon">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
                                            </div>
                                        </div>
                                        <div class="wrapper_content">
                                            <div class="post_title"><h4>
                                                <a href="single-tour.html" rel="bookmark">Anchorage to Ushuaia</a>
                                            </h4></div>
                                            <span class="post_date">5 DAYS 4 NIGHTS</span>
                                            <p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
                                        </div>
                                    </div>
                                    <div class="read_more">
                                        <div class="item_rating">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                        </div>
                                        <a href="single-tour.html" class="read_more_button">VIEW MORE
                                            <i class="fa fa-long-arrow-right"></i></a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-tour">
                                <div class="item_border">
                                    <div class="item_content">
                                        <div class="post_images">
                                            <a href="single-tour.html" class="travel_tour-LoopProduct-link">
                                            <span class="price">
                                                <span class="travel_tour-Price-amount amount">$94.00</span>
                                            </span>
                                                <img src="images/tour/430x305/tour-5.jpg" alt="" title="">
                                            </a>
                                            <div class="group-icon">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
                                            </div>
                                        </div>
                                        <div class="wrapper_content">
                                            <div class="post_title"><h4>
                                                <a href="single-tour.html" rel="bookmark">Discover Brazil</a>
                                            </h4></div>
                                            <span class="post_date">5 DAYS 4 NIGHTS</span>
                                            <p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
                                        </div>
                                    </div>
                                    <div class="read_more">
                                        <div class="item_rating">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                        </div>
                                        <a href="single-tour.html" class="read_more_button">VIEW MORE
                                            <i class="fa fa-long-arrow-right"></i></a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-tour">
                                <div class="item_border">
                                    <div class="item_content">
                                        <div class="post_images">
                                            <a href="single-tour.html" class="travel_tour-LoopProduct-link">
                                            <span class="price"><del>
                                                <span class="travel_tour-Price-amount amount">$87.00</span></del>
                                                <ins><span class="travel_tour-Price-amount amount">$82.00</span></ins>
                                            </span>
                                                <span class="onsale">Sale!</span>
                                                <img src="images/tour/430x305/tour-1.jpg" alt="" title="">
                                            </a>
                                            <div class="group-icon">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
                                            </div>
                                        </div>
                                        <div class="wrapper_content">
                                            <div class="post_title"><h4>
                                                <a href="single-tour.html" rel="bookmark">Kiwiana Panorama</a>
                                            </h4></div>
                                            <span class="post_date">5 DAYS 4 NIGHTS</span>
                                            <p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
                                        </div>
                                    </div>
                                    <div class="read_more">
                                        <div class="item_rating">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                        </div>
                                        <a href="single-tour.html" class="read_more_button">VIEW MORE
                                            <i class="fa fa-long-arrow-right"></i></a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg__shadow padding-top-6x padding-bottom-6x section-background" style="background-image:url(images/home/bg-pallarax.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <div class="discounts-tour">
                                <h3 style="color:#ffffff" class="discounts-title"> Special Tour in April, Discover Australia for 100 customers with
                                    <span> discount 50%</span></h3>
                                <span class="line" style="color:#ffffff"></span>
                                <p style="color:#ffffff">It’s limited seating! Hurry up</p>
                                <div class="row centered text-center" id="myCounter"></div>
                                <div class="col-sm-12 text-center padding-top-2x">
                                    <a href="#" class="icon-btn"><i class="flaticon-airplane-4"></i> Get tour </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                </div>
            </div> -->

            <div class="section-white padding-top-6x padding-bottom-6x">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="shortcode_title title-center title-decoration-bottom-center">
                                <h2 class="title_primary">Tours Reviews</h2>
                                <span class="line_after_title"></span>
                            </div>
                            <div class="shortcode-tour-reviews wrapper-tours-slider">
                                <div class="tours-type-slider" data-autoplay="true" data-dots="true" data-nav="false"
                                     data-responsive='{"0":{"items":1}, "480":{"items":1}, "768":{"items":1}, "992":{"items":1}, "1200":{"items":1}}'>
                                    <div class="tour-reviews-item">
                                        <div class="reviews-item-info">
                                            <img alt="" src="images/avata.jpeg" class="avatar avatar-95 photo"
                                                 height="90" width="90">
                                            <div class="reviews-item-info-name">Jessica</div>
                                            <div class="reviews-item-rating">
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="reviews-item-content">
                                            <h3 class="reviews-item-title">
                                                <a href="#">Canadian Rockies</a>
                                            </h3>
                                            <div class="reviews-item-description">The sightseeing and activities were
                                                better than we even thought! I still can’t believe we did so much in
                                                such a short time
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tour-reviews-item">
                                        <div class="reviews-item-info">
                                            <img alt="" src="images/avata.jpeg" class="avatar avatar-95 photo"
                                                 height="90" width="90">
                                            <div class="reviews-item-info-name">Jessica</div>
                                            <div class="reviews-item-rating">
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="reviews-item-content">
                                            <h3 class="reviews-item-title">
                                                <a href="#">Canadian Rockies</a>
                                            </h3>
                                            <div class="reviews-item-description">The sightseeing and activities were
                                                better than we even thought! I still can’t believe we did so much in
                                                such a short time
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tour-reviews-item">
                                        <div class="reviews-item-info">
                                            <img alt="" src="images/avata.jpeg" class="avatar avatar-95 photo"
                                                 height="90" width="90">
                                            <div class="reviews-item-info-name">Jessica</div>
                                            <div class="reviews-item-rating">
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="reviews-item-content">
                                            <h3 class="reviews-item-title">
                                                <a href="#">Canadian Rockies</a>
                                            </h3>
                                            <div class="reviews-item-description">The sightseeing and activities were
                                                better than we even thought! I still can’t believe we did so much in
                                                such a short time.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper-footer wrapper-footer-newsletter">
        <div class="main-top-footer">
            <div class="container">
                <div class="row">
                    <aside class="col-sm-3 widget_text"><h3 class="widget-title">CONTACT</h3>
                        <div class="textwidget">
                            <div class="footer-info">
                                <p>Lorem ipsum dolor sit amet, cons ectetueradipiscing elit, sed diam nonu my nibh euis
                                    motincidunt ut laoreetd
                                </p>
                                <ul class="contact-info">
                                    <li><i class="fa fa-map-marker fa-fw"></i> 1945 Washington, San Francisco</li>
                                    <li><i class="fa fa-phone fa-fw"></i> +1 234 456 7890</li>
                                    <li>
                                        <i class="fa fa-envelope fa-fw"></i><a href="mailto:hello@siteinfo.com">
                                            hello@siteinfo.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                    <aside class="col-sm-3 widget_text"><h3 class="widget-title">INFORMATION</h3>
                        <div class="textwidget">
                            <ul class="menu list-arrow">
                                <li><a href="#">Press Centre</a></li>
                                <li><a href="#">Travel News</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </aside>
                    <aside class="col-sm-3 widget_text"><h3 class="widget-title">Our Menu</h3>
                        <div class="textwidget">
                            <ul class="menu list-arrow">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Career</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </aside>
                    <aside class="col-sm-3 custom-instagram widget_text">
                        <h3 class="widget-title">Instagram</h3>
                        <div class="textwidget">
                            <ul>
                                <li><img src="images/instagram/1.jpg" alt="instagram"></li>
                                <li><img src="images/instagram/2.jpg" alt="instagram"></li>
                                <li><img src="images/instagram/3.jpg" alt="instagram"></li>
                                <li><img src="images/instagram/4.jpg" alt="instagram"></li>
                                <li><img src="images/instagram/5.jpg" alt="instagram"></li>
                                <li><img src="images/instagram/6.jpg" alt="instagram"></li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        <div class="container wrapper-copyright">
            <div class="row">
                <div class="col-sm-6">
                    <div><p>Copyright © 2017 Travel. All Rights Reserved.</p></div>
                </div>
                <div class="col-sm-6">
                    <aside id="text-5" class="widget_text">
                        <div class="textwidget">
                            <ul class="footer_menu">
                                <li><a href="#">Terms of Use</a></li>
                                <li>|</li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li>|</li>
                                <li><a href="https://twitter.com/physcode"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.facebook.com/physcode/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.instagram.com/physcode/"><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper-subscribe" style="background-image: url(images/1507736679_0Ebd6BFOVclq82L.jpeg.webp)">
        <div class="subscribe_shadow"></div>
        <div class="form-subscribe parallax-section stick-to-bottom form-subscribe-full-width">
            <div class="shortcode_title text-white title-center title-decoration-bottom-center margin-bottom-3x">
                <div class="title_subtitle">To receive our best monthly deals</div>
                <h3 class="title_primary">JOIN THE NEWSLETTER</h3>
                <span class="line_after_title"></span>
            </div>
            <div class="form-subscribe-form-wrap">
                <aside class="mailchimp-container">
                    <form class="epm-sign-up-form" name="epm-sign-up-form" action="#" method="post">
                        <div class="epm-form-field">
                            <label for="epm-email">Email Address</label>
                            <input type="email" placeholder="Email Address" name="epm-email" tabindex="8" class="email"
                                   id="epm-email" value="">
                        </div>


                        <input type="submit" name="epm-submit-chimp" value="Sign Up Now" data-wait-text="Please wait..."
                               tabindex="10" class="button btn epm-sign-up-button epm-submit-chimp">
                    </form>
                </aside>
            </div>
        </div>
    </div>
</div><!-- ./wrapper -->

<script src="<?php echo base_url() ?>assets/js/jquery.min.js.download"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js.download"></script>
<script src="<?php echo base_url() ?>assets/js/vendors.js.download"></script>
<script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js.download"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.mb-comingsoon.min.js.download"></script>
<script src="<?php echo base_url() ?>assets/js/waypoints.min.js.download"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.counterup.min.js.download"></script>
<script src="<?php echo base_url() ?>assets/js/theme.js.download"></script>

</body>
</html>
