<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Career Bridge Group</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicn.png">
    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Magnific -->
    <link href="<?php echo base_url() ?>assets/css/magnific-popup.css" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="<?php echo base_url() ?>assets/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Slider -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/flatpickr.min.css">
    <link href="<?php echo base_url() ?>assets/css/swiper.min.css" rel="stylesheet" type="text/css" />
    <!-- Main Css -->
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="<?php echo base_url() ?>assets/css/colors/default.css" rel="stylesheet" id="color-opt">
       <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NXQMTZ4');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- Loader -->
    <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
    <!-- Loader -->
    <!-- Navbar STart -->

    <div id="topbar">
        <div class="container">
            <div class="row">
              <?php $contact = json_decode($this->db->get_where("tbl_options",["option_name"=>"contact"])->row()->option_value); ?>
            <?php   $social_links = json_decode($this->db->get_where("tbl_options",["option_name"=>"social"])->row()->option_value); //print_r($data['social']);  ?>
                <div class="col-md-6 col-sm-12 pt-2 text-white">
                    <div class="phone_email d-inline">
                        <i class="mdi mdi-cellphone-iphone"></i>+<?php echo $contact->mobile_number ?>  | <i class="mdi mdi-email-open"></i> <a href="#" target="_blank" class="rounded"> <?php echo $contact->email ?></a>
                    </div>
                </div>
                <div class="col-md-6 text-right">
                    <li class="list-inline-item events_btn"> <a href="<?php echo base_url() ?>events" class="rounded events">
							Events
						</a> </li>
                    <ul class="list-unstyled social-icon social mb-0 pt-2">
                     <?php if($social_links->facebook){ ?>
                        <li class="list-inline-item">
                            <a href="<?php echo $social_links->facebook ?>" target="_blank" class="rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook fea icon-sm fea-social">
									<path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
								</svg>
                            </a>
                        </li>
                         <?php }?>
                        <?php if($social_links->instagram){ ?>
                        <li class="list-inline-item">
                            <a href="<?php echo $social_links->instagram ?>" target="_blank" class="rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram fea icon-sm fea-social">
									<rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
									<path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
									<line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
								</svg>
                            </a>
                        </li>
                         <?php 
                        }
                        
                        if($social_links->twitter){ ?>
                        <li class="list-inline-item">
                            <a href="<?php echo $social_links->twitter ?>" target="_blank" class="rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter fea icon-sm fea-social">
									<path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
								</svg>
                            </a>
                        </li>
                        <?php 
                        }
                        if($social_links->linkedin){ ?>
                        <li class="list-inline-item">
                            <a href="<?php echo $social_links->linkedin ?>" target="_blank" class="rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin fea icon-sm fea-social">
									<path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
									<rect x="2" y="9" width="4" height="12"></rect>
									<circle cx="4" cy="4" r="2"></circle>
								</svg>
                            </a>
                        </li>
                         <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <header id="topnav" class="defaultscroll sticky">
        <div class="container">
            <!-- Logo container-->
            <div>
                <a class="logo" href="index.html"> <img src="<?php echo base_url() ?>assets/images/logo.jpg" class="l-dark" height="70" alt=""> 
                <img src="<?php echo base_url() ?>assets/images/logo.jpg" class="l-light" height="70" alt=""> </a>
            </div>
            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines"> <span></span> <span></span> <span></span> </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu nav-light">
                    <li class="active"><a href="<?php echo base_url() ?>home">Home</a></li>
                    <li class="has-submenu"> <a href="javascript:void(0)">About Us</a><span class="menu-arrow"></span>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li><a href="<?php echo base_url() ?>about">About Career Bridge Group</a></li>
                                    <li><a href="<?php echo base_url() ?>about/why_cbg">Why Career Bridge Group</a></li>
                                    <li><a href="<?php echo base_url() ?>about/what_students">What Students Say About us</a></li>
                                    <li><a href="<?php echo base_url() ?>about/our_team">Our Team</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url() ?>services">Services</a></li>
                    <li class="blink"><a href="<?php echo base_url() ?>live">Live</a></li>
                    <li><a href="<?php echo base_url() ?>partnerwithus">Partner With Us</a></li>
                    <li class="blink"><a href="<?php echo base_url() ?>hiring">Hiring</a></li>
                    <li><a href="<?php echo base_url() ?>contact">Contact Us</a></li>
                </ul>
                <!--end navigation menu-->
            </div>
            <!--end navigation-->
        </div>
        <!--end container-->
    </header>