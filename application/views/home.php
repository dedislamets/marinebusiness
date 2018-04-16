<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
        <title>Marine Business</title>
        <meta name="description" content="Marine Business">
        <meta name="author" content="pixel-industry">
        <meta name="keywords" content="transportation, logistics, transportation template, logistics template, cargo, business">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Stylesheets -->
        
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css"/>
        <link rel="stylesheet" href="<?= base_url(); ?>assets/masterslider/style/masterslider.css" /><!-- Master slider css -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/masterslider/skins/default/style.css" /><!-- Master slider default skin -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/animate.css"/><!-- animations -->
        <link rel='stylesheet' href='<?= base_url(); ?>assets/owl-carousel/owl.carousel.css'/><!-- Client carousel -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css"/><!-- template styles -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/color-default.css"/><!-- template main color -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/retina.css"/><!-- retina ready styles -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/responsive.css"/><!-- responsive styles -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/datepicker3.css"/>
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/dropzone.min.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-table.min.css">

        <!-- Google Web fonts -->
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,800,700,600' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Font icons -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/icon-fonts/font-awesome-4.3.0/css/font-awesome.min.css"/>
        <!-- Fontawesome icons css -->
        
        <link rel="stylesheet" href="<?= base_url(); ?>assets/style-switcher/styleSwitcher.css"/><!-- styleswitcher -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/main.css"/>
        
		<link rel="stylesheet" href="<?= base_url(); ?>assets/css/basic.min.css">	
		<link rel="stylesheet" href="<?= base_url(); ?>assets/css/jquery.gritter.css">	
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/thickbox.css">

        <style type="text/css">
        	.gritter-title {
			    color: #fff;
			}
			.gritter-item p {
			    color: #fff;
			}
        	.main-nav {
        		margin-top: 0px;

        	}

            .label-warning {
                position: absolute;
                top: 14px;
                right: 1px;
                text-align: center;
                font-size: 9px;
                padding: 5px 6px;
                background-color: gold !important;
                line-height: .9;
                color: #fff;
            }

            .notif {
                font-size: 13pt;
                padding-top: 6px;
                color: #fff;
                border-radius: 50%;
                border: solid 1px grey;
                padding: 11px;
                background: #1a7cbe;
            }
        </style>
    </head>
    
    <body class="pushmenu-push">
        <!-- <section id="style-switcher">
            <section id="styles-container">
                <section>
                    <h4>header styles</h4>
                    <ul class="header-list clearfix">
                        <li class="active">
                            <a href="index.html">style 01</a>
                            
                            <img src="<?= base_url(); ?>assets/style-switcher/img/header01.jpg" alt="header 01"/>
                        </li>
                        
                        <li>
                            <a href="header-default-top-bar.html">style 02</a>
                            <img src="<?= base_url(); ?>assets/style-switcher/img/header02.jpg" alt="header 01"/>
                        </li>
                        
                        <li>
                            <a href="index08.html">style 03</a>
                            <img src="<?= base_url(); ?>assets/style-switcher/img/header03.jpg" alt="header 01"/>
                        </li>
                        
                        <li>
                            <a href="header-simple-dark-bar.html">style 04</a>
                            <img src="<?= base_url(); ?>assets/style-switcher/img/header04.jpg" alt="header 01"/>
                        </li>
                        
                        <li>
                            <a href="header-simple-dark.html">style 05</a>
                            <img src="<?= base_url(); ?>assets/style-switcher/img/header05.jpg" alt="header 01"/>
                        </li>
                        
                        <li>
                            <a href="header-menu-bottom.html">style 06</a>
                            <img src="<?= base_url(); ?>assets/style-switcher/img/header06.jpg" alt="header 01"/>
                        </li>
                        
                        <li>
                            <a href="header-menu-bottom-dark.html">style 07</a>
                            <img src="<?= base_url(); ?>assets/style-switcher/img/header07.jpg" alt="header 01"/>
                        </li>
                    </ul>
                </section>
                
                <section>
                    <h4>color styles</h4>
                    
                    <ul class="styles-list">
                        <li class="color-default"></li>
                        <li class="color-blueaqua"></li>
                        <li class="color-bluegreen"></li>
                        <li class="color-blueorange"></li>
                        <li class="color-bluered"></li>
                        <li class="color-blue"></li>
                        <li class="color-aqua"></li>
                        <li class="color-green"></li>
                        <li class="color-orange"></li>
                        <li class="color-red"></li>
                    </ul>
                </section>
                
                <section>
                    <h4>layouts</h4>
                    <ul class="header-list clearfix">
                        <li class="active">
                            <a href="index.html">style 01</a>                            
                            <img src="<?= base_url(); ?>assets/style-switcher/img/layout01.jpg" alt="header 01"/>
                        </li>
                        
                        <li>
                            <a href="index02.html">style 02</a>
                            <img src="<?= base_url(); ?>assets/style-switcher/img/layout02.jpg" alt="header 01"/>
                        </li>
                        
                        <li>
                            <a href="index03.html">style 03</a>
                            <img src="<?= base_url(); ?>assets/style-switcher/img/layout03.jpg" alt="header 01"/>
                        </li>
                        
                        <li>
                            <a href="index04.html">style 04</a>
                            <img src="<?= base_url(); ?>assets/style-switcher/img/layout04.jpg" alt="header 01"/>
                        </li>
                        
                        <li>
                            <a href="index05.html">style 05</a>
                            <img src="<?= base_url(); ?>assets/style-switcher/img/layout05.jpg" alt="header 01"/>
                        </li>
                        
                        <li>
                            <a href="index06.html">style 06</a>
                            <img src="<?= base_url(); ?>assets/style-switcher/img/layout06.jpg" alt="header 01"/>
                        </li>
                        
                        <li>
                            <a href="index07.html">style 07</a>
                            <img src="<?= base_url(); ?>assets/style-switcher/img/layout07.jpg" alt="header 01"/>
                        </li>
                        
                        <li>
                            <a href="index08.html">style 08</a>
                            <img src="<?= base_url(); ?>assets/style-switcher/img/layout08.jpg" alt="header 01"/>
                        </li>
                        
                        <li>
                            <a href="index09.html">style 09</a>
                            <img src="<?= base_url(); ?>assets/style-switcher/img/layout09.jpg" alt="header 01"/>
                        </li>
                        
                        <li>
                            <a href="index10.html">style 10</a>
                            <img src="<?= base_url(); ?>assets/style-switcher/img/layout10.jpg" alt="header 01"/>
                        </li>
                    </ul>
                </section>
            </section>
            <a href="#" id="styles-button"><div id="switcher-logo"></div></a>
        </section>
 -->
        <div class="header-wrapper" style="top: 0px;left:0">
            <!-- .header.header-style01 start -->
            <header id="header"  class="header-style02">
                <!-- .container start -->
                <div class="">
                    <!-- .main-nav start -->
                    <div class="main-nav">
                        <!-- .row start -->
                        <div class="row">
                            <div class="col-md-12">
                                <nav class="navbar navbar-default nav-left" role="navigation">

                                    <!-- .navbar-header start -->
                                    <div class="navbar-header">
                                        <div class="logo logo-m">
                                            <a href="<?= base_url(); ?>">
                                                <img src="<?= base_url(); ?>assets/img/logo-white.png" alt="Marine Business"/>
                                            </a>
                                        </div>
                                        <div class="logo logo-deks">
                                            <a href="<?= base_url(); ?>">
                                                <img src="<?= base_url(); ?>assets/img/logo.png" alt="Marine Business"/>
                                            </a>
                                        </div>
                                    </div><!-- .navbar-header start -->

                                    <!-- MAIN NAVIGATION -->
                                    <div class="collapse navbar-collapse">
                                        <ul class="nav navbar-nav">
                                            <li class="dropdown current-menu-item">
                                                <a href="<?= base_url(); ?>">Home</a>
                                            </li><!-- .dropdown end -->

                                            <li class="dropdown">
                                                <a href="<?= base_url('profil'); ?>">Profile</a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="<?= base_url('profil'); ?>">Tracking</a>
                                            </li>                                            

                                            <!-- <li class="dropdown">
                                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Blog</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="news-list.html">News list</a></li>
                                                    <li><a href="news-masonry.html">News masonry</a></li>
                                                    <li><a href="news-standard.html">News standard</a></li>
                                                    <li><a href="news-single.html">News single</a></li>
                                                </ul>
                                            </li> -->

                                            <li class="dropdown">
                                                <a href="#" >Bantuan</a>
                                            </li>
                                            
                                            <li class="advertise-fast" id="top-advertise-button">
										        <a href="/submit"><i class="fa fa-bullhorn fa-md tada"></i>Pasang Gratis</a>   
										        <div class="shine"></div>
										    </li>
                                            
										    <?php if(empty($this->session->userdata('email'))) { ?>

                                            <li>
                                                <a href="<?= base_url('register'); ?>" >Daftar</a>
                                            </li>
                                            <?php } else { ?>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-bell" style="color: #fff;font-size: 12pt;"></i>
                                                    <span class="label label-warning">10</span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                      <li class="header">You have 10 notifications</li>
                                                      <li>                                                        
                                                        <ul class="menu" style="list-style-position: inherit;list-style: none;">
                                                          <li>
                                                            <a href="#">
                                                              <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                                            </a>
                                                          </li>
                                                          <li>
                                                            <a href="#">
                                                              <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                                                              page and may cause design problems
                                                            </a>
                                                          </li>
                                                          <li>
                                                            <a href="#">
                                                              <i class="fa fa-users text-red"></i> 5 new members joined
                                                            </a>
                                                          </li>
                                                          <li>
                                                            <a href="#">
                                                              <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                                            </a>
                                                          </li>
                                                          <li>
                                                            <a href="#">
                                                              <i class="fa fa-user text-red"></i> You changed your username
                                                            </a>
                                                          </li>
                                                        </ul>
                                                      </li>
                                                      <li class="footer"><a href="#">View all</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">

                                            	<span class="meta">
					                                <span class="avatar"><img src="https://d3sknresuoj0kc.cloudfront.net/noprofile40.jpeg" class="img-circle" alt=""></span>
					                                <div class="text hidden-xs hidden-sm pl5">
					                                      <?php echo $this->session->userdata('nama') ?>                            
					                                </div>

					                            </span>					                            
					                            <ul class="dropdown-menu">
                                                    <li><a href="<?= base_url('setting') ?>">Pengaturan</a></li>
                                                    <li><a href="<?= base_url('register/keluar') ?>">Logout</a></li>
                                                </ul>
                                            </li>            
                                            <?php } ?>                                
                                        </ul><!-- .nav.navbar-nav end -->

                                        <!-- RESPONSIVE MENU -->
                                        <div id="dl-menu" class="dl-menuwrapper">
                                            <button class="dl-trigger">Open Menu</button>
                                        </div>
                                        
                                        <div class="pushmenu pushmenu-left">
                                          <ul class="links">
                                                <li>
                                                    <a href="<?= base_url(); ?>">Home</a>               
                                                </li>

                                                <li>
                                                    <a href="<?= base_url('profil'); ?>">Profil</a>                                                    
                                                </li>

                                                <li>
                                                    <a href="<?= base_url('profil'); ?>">Tracking</a>
                                                </li>                                       

                                                <li>
                                                    <a href="#" >Bantuan</a>
                                                </li>

                                                <li class="advertise-fast" id="top-advertise-button">
                                                    <a href="/submit"><i class="fa fa-bullhorn fa-md tada"></i>Pasang Gratis</a>   
                                                    <div class="shine"></div>
                                                </li>
                                                <?php if(empty($this->session->userdata('email'))) { ?>
                                                <li>
                                                    <a href="<?= base_url('register'); ?>" >Daftar</a>
                                                </li>
                                                <?php } else { ?>  
                                                <li><a href="#" >
                                                        Notifikasi
                                                        <i class="fa fa-bell" style="color: #fff;font-size: 12pt;"></i> 
                                                        <span class="label label-warning" style="top: 2px;right: 13px;">10</span>
                                                    </a>
                                                    
                                                </li>                                              
                                                <li><a href="<?= base_url('setting') ?>">Pengaturan</a></li>
                                                <li><a href="<?= base_url('register/keluar') ?>">Logout</a></li>
                                                <?php } ?>                                                 
                                          </ul>
                                        </div>
                                     
                                        <div id="search">

                                            <form action="#" method="get">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-bell-o notif lonceng"></i>&nbsp;&nbsp;
                                                <span class="label label-warning lonceng" style="top: 3px;right: 53px;">10</span>
                                                <a>                                                
                                                <input class="search-submit" type="submit" />
                                                <input id="m_search" name="s" type="text" placeholder="Type and hit enter..." />                        
                                            </form>
                                        </div><!-- #search end -->
                                    </div><!-- MAIN NAVIGATION END -->
                                </nav><!-- .navbar.navbar-default end -->
                            </div><!-- .col-md-12 end -->
                        </div><!-- .row end -->
                    </div><!-- .main-nav end -->
                </div><!-- .container end -->
            </header><!-- .header.header-style01 -->
        </div><!-- .header-wrapper end -->
       
        
        <?php 
        if ($this->router->fetch_class() != 'home'){            
            $this->load->view($main); 
        }
        else {                 	
        	$this->load->view('home/index'); 
        } 
        ?>                                 

        <div id="footer-wrapper" class="footer-dark">
            <footer id="footer">
                <div class="container">
                    <div class="row">
                        <ul class="col-md-3 col-sm-6 footer-widget-container clearfix">
                            <!-- .widget.widget_text -->
                            <li class="widget widget_newsletterwidget">
                                <div class="title">                                    
                                    <h3>newsletter subscribe</h3>
                                </div>

                                <p>
                                    Subscribe to our newsletter and we will 
                                    inform you about newest projects and promotions.
                                </p>

                                <br />

                                <form class="newsletter">
                                    <input class="email" type="email" placeholder="Your email...">
                                    <input type="submit" class="submit" value="">
                                </form>
                            </li><!-- .widget.widget_newsletterwidget end -->
                        </ul><!-- .col-md-3.footer-widget-container end -->

                        <ul class="col-md-3 col-sm-6 footer-widget-container">
                            <!-- .widget-pages start -->
                            <li class="widget widget_pages">
                                <div class="title">
                                    <h3>quick links</h3>
                                </div>

                                <ul>
                                    <li><a href="about01.html">About us</a></li>
                                    <li><a href="company-history.html">Company history</a></li>
                                    <li><a href="events.html">Company Events</a></li>
                                    <li><a href="supply-chain-management.html">Supply chain management</a></li>
                                    <li><a href="warehousing.html">Warehousing</a></li>                                   
                                </ul>
                            </li><!-- .widget-pages end -->
                        </ul><!-- .col-md-3.footer-widget-container end -->

                        <ul class="col-md-3 col-sm-6 footer-widget-container">
                            <!-- .widget-pages start -->
                            <li class="widget widget_pages">
                                <div class="title">
                                    <h3>Industry solutions</h3>
                                </div>

                                <ul>
                                    <li><a href="overland-transportation.html">Overland transportation</a></li>
                                    <li><a href="air-freight.html">Air freight</a></li>
                                    <li><a href="ocean-freight.html">Ocean freight</a></li>
                                    <li><a href="large-projects.html">Large projects</a></li>
                                    <li><a href="rail-transportation.html">Rail international shipping</a></li>
                                </ul>
                            </li><!-- .widget-pages end -->
                        </ul><!-- .col-md-3.footer-widget-container end -->

                        <ul class="col-md-3 col-sm-6 footer-widget-container">
                            <li class="widget widget-text">
                                <div class="title">
                                    <h3>contact us</h3>
                                </div>

                                <address>
                                    Komplek Ruko Marakash Square<br>
                                    Blok-E.10 No.9 Kab.Bekasi – Indonesia,
                                </address>

                                <span class="text-big">
                                    021-88387229
                                </span>
                                <br />

                                <a href="mailto:">operation@jmmaritim.com</a>
                                <br />
                                <ul class="footer-social-icons">
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-google-plus"></a></li>
                                </ul><!-- .footer-social-icons end -->
                            </li><!-- .widget.widget-text end -->
                        </ul><!-- .col-md-3.footer-widget-container end -->
                    </div><!-- .row end -->
                </div><!-- .container end -->
            </footer><!-- #footer end -->
            

            <!-- <a href="#" class="scroll-up">Scroll</a> -->
        </div><!-- #footer-wrapper end -->

        <script src="<?= base_url(); ?>assets/js/jquery-2.2.3.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/datatables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/datatables/dataTables.bootstrap.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/jquery.validate.min.js"></script>
  
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.2/umd/popper.min.js"></script> -->
        <!-- <script type="text/JavaScript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->

        <!-- <script src="https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap4.min.js"></script> -->
        <script src="<?= base_url(); ?>assets/js/jquery.srcipts.min.js"></script><!-- modernizr, retina, stellar for parallax -->  
        <script src="<?= base_url(); ?>assets/owl-carousel/owl.carousel.min.js"></script><!-- Carousels script -->
        <script src="<?= base_url(); ?>assets/masterslider/masterslider.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/jquery.matchHeight-min.js"></script><!-- for columns with background image -->
        <script src="<?= base_url(); ?>assets/js/jquery.dlmenu.min.js"></script>
        <script src="<?= base_url(); ?>assets/style-switcher/styleSwitcher.js"></script><!-- styleswitcher script -->
        <script src="<?= base_url(); ?>assets/js/include.js"></script><!-- custom js functions -->
        <script src="<?= base_url(); ?>assets/js/wow.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/uou-accordions.js"></script>
        <script src="<?= base_url(); ?>assets/js/uou-tabs.js"></script>
        <script src="<?= base_url(); ?>assets/js/validator.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/jquery.validate.min.js"></script>
		<script src="<?= base_url(); ?>assets/js/jquery.smartWizard.min.js"></script>
		<script src="<?= base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
		<script src="<?= base_url(); ?>assets/js/jquery.gritter.min.js"></script>		
		<script src="<?= base_url(); ?>assets/js/jquery.price_format.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/bootstrap-tagsinput.js"></script>
        <script src="<?= base_url(); ?>assets/js/thickbox.js"></script>
        <!-- <script src="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css"></script> -->
        <!-- 
        <script src="<?= base_url(); ?>assets/js/locale/bootstrap-table-id-ID.min.js"></script>
        <script src="https://rawgit.com/hhurz/tableExport.jquery.plugin/master/tableExport.js"></script>
        <script src="https://rawgit.com/wenzhixin/bootstrap-table/master/src/extensions/export/bootstrap-table-export.js"></script> -->

		
        <script>
            /* <![CDATA[ */
            jQuery(document).ready(function ($) {
                'use strict';
                var wow = new WOW({
				    animateClass: 'animated',
				    offset:100,
				    callback:function(box) {}
				  });
				  wow.init();

                $("#area").tagsinput('items');

		    	$(".custom-select").each(function(){
		            $(this).wrap("<span class='select-wrapper'></span>");
		            $(this).after("<span class='holder'></span>");
		        });
		        $(".custom-select").change(function(){
		            var selectedOption = $(this).find(":selected").text();
		            $(this).next(".holder").text(selectedOption);
		        }).trigger('change');

                function equalHeight() {
                    $('.page-content.column-img-bkg *[class*="custom-col-padding"]').each(function () {
                        var maxHeight = $(this).outerHeight();
                        $('.page-content.column-img-bkg *[class*="img-bkg"]').height(maxHeight);
                    });
                };
                
                $(document).ready(equalHeight);
                $(window).resize(equalHeight);

                // MASTER SLIDER START 
                var slider = new MasterSlider();
                slider.setup('masterslider', {
                    width: 1140, // slider standard width
                    height: 500, // slider standard height
                    space: 0,
                    speed: 50,
                    layout: "fullwidth",
                    centerControls: false,
                    loop: true,
                    autoplay: true
                            // more slider options goes here...
                            // check slider options section in documentation for more options.
                });
                // adds Arrows navigation control to the slider.
                slider.control('arrows');

                // CLIENTS CAROUSEL START 
                $('#client-carousel').owlCarousel({
                    items: 6,
                    loop: true,
                    margin: 30,
                    responsiveClass: true,
                    mouseDrag: true,
                    dots: false,
                    responsive: {
                        0: {
                            items: 2,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true
                        },
                        600: {
                            items: 3,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true
                        },
                        1000: {
                            items: 6,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true,
                            mouseDrag: true
                        }
                    }
                });

                // TESTIMONIAL CAROUSELS START
                $('#testimonial-carousel').owlCarousel({
                    items: 1,
                    loop: true,
                    margin: 30,
                    responsiveClass: true,
                    mouseDrag: true,
                    dots: false,
                    autoheight: true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true,
                            autoHeight: true
                        },
                        600: {
                            items: 1,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true,
                            autoHeight: true
                        },
                        1000: {
                            items: 1,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true,
                            mouseDrag: true,
                            autoHeight: true
                        }
                    }
                });
            });
            /* ]]> */
        </script>
        <script type="text/javascript">
   			$.ajaxSetup({
			    data: {
		            csrf_token: <?php echo "'". $this->security->get_csrf_hash()."'" ?>
		        }
			});			
	           
	        $(document).ready(function(){	        	

                $("input[type='checkbox']").on('click', function(event){                                            
                    var check = $("input[type='checkbox']").is(':checked');
                    if(check){
                         $("#btnAgreement").removeAttr('disabled');
                    }else{
                        $("#btnAgreement").attr('disabled',true);
                    }     
                }) 

                $("#btnAgreement").on('click', function(event){                                            
                   $("#myModal").modal('hide');
                })                 

                $menuLeft = $('.pushmenu-left');                
                $nav_list = $('.dl-trigger');
                $nav_list.click(function() {
                    $(this).toggleClass('active');
                    $('.pushmenu-push').toggleClass('pushmenu-push-toright');                
                    $menuLeft.toggleClass('pushmenu-open');                
                });

	            $('#datetimepicker10').datepicker({
	            	autoclose: true,     
	                // viewMode: 'years',
	                // minViewMode: "years",
	                format: 'yyyy-mm-dd'
	            });
	            $('#datetimepicker11').datepicker({
	            	autoclose: true,     
	                // viewMode: 'years',
	                // minViewMode: "years",
	                format: 'yyyy-mm-dd'
	            });
	            
	            var btnFinish = $('<button></button>').text('Finish')
	                                             .addClass('btn btn-info hidden')
	                                             .attr('id','btn-finish')
	                                             .on('click', function(){                                                         
	                                                    if( !$(this).hasClass('disabled')){ 
	                                                        var elmForm = $("#myForm");
	                                                        if(elmForm){
	                                                            elmForm.validator('validate'); 
	                                                            var elmErr = elmForm.find('.has-error');
	                                                            if(elmErr && elmErr.length > 0){
	                                                                alert('Oops we still have error in the form');
	                                                                return false;    
	                                                            }else{	
	                                                                var post = $('form#myForm').serialize();
	                                                                $.ajax({
															            type:"post",
															            data:post,
															            url:"<?php echo base_url(); ?>setting/simpan_data",
															            cache:false,
															            dataType: 'json',
															            success: function(data){
															            	if(data.error==false){								
															            		document.cookie = 'csrf_cookie_name=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';	
															            		
																				window.location.href= window.location.origin+"/"+window.location.pathname.split('/')[1] + '/setting/iklan' ;
															            	}													
															            },
															            error: function(){
															                console.log("Error");
															            }
															        });
	                                                             	return false;  
	                                                            }
	                                                        }
	                                                    }
	                                                });
	            var btnCancel = $('<button></button>').text('Cancel')
	                                             .addClass('btn btn-danger')
	                                             .on('click', function(){ 
	                                                    $('#smartwizard').smartWizard("reset"); 
	                                                    $('#myForm').find("input, textarea").val(""); 
	                                                });                         	            	            
	            
	            // Smart Wizard
	            $('#smartwizard').smartWizard({ 
	                    selected: 0, 
	                    theme: 'dots',
	                    transitionEffect:'fade',
	                    toolbarSettings: {toolbarPosition: 'bottom',
	                                      toolbarExtraButtons: [btnFinish]
	                                    },
	                    anchorSettings: {
	                                markDoneStep: true, // add done css
	                                markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
	                                removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
	                                enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
	                            }
	                 });
	            
	            $("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
	                var elmForm = $("#form-step-" + stepNumber);
	                if(stepDirection === 'forward' && elmForm){
	                    elmForm.validator('validate'); 
	                    var elmErr = elmForm.children('.has-error');
	                    if(elmErr && elmErr.length > 0){
	                        // Form validation failed
	                        return false;    
	                    }
	                }
	                return true;
	            });
	            
	            $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
	                // Enable finish button only on last step
	                if(stepNumber == 2){ 
	                    $('#btn-finish').removeClass('hidden');  
	                }else{
	                    $('#btn-finish').addClass('hidden');
	                }
	            });                               
	            
                table = $('#Viewlist').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: {
                        "url": "<?php echo site_url('setting/getlist') ?>",
                        "type" : "POST"
                    },                    
                    dom: 'Bfrtip',
                    // order: [[1, "asc"], [2, "asc"], [3, "asc"], [4, "asc"], [5, "asc"]],
                    columns: [                        
                        {data: 'kode_pengajuan', name: 'kode_pengajuan'},
                        {data: 'title_pengajuan', name: 'title_pengajuan'},
                        {data: 'nama_seller', name: 'nama_seller'},
                        {data: 'jenis_pengajuan', name: 'jenis_pengajuan'},                
                        {data: 'nilai_pengajuan', name: 'nilai_pengajuan', render: $.fn.dataTable.render.number('.', ',', 0)},
                        {data: 'status', name: 'status'},                
                    ],                                         
                    buttons: [
                        {
                            text: '<a href="#" class="btn btn-default" id="addBtn" ><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah</a>',
                            titleAttr: 'Add',
                            className: 'bAdd',
                            action: function (e, dt, node, config) {
                                add();
                            }
                        },
                        {
                            text: '<a href="#" class="btn btn-default"><i class="fa fa-file-text-o"></i>&nbsp;&nbsp;Edit</a>',
                            titleAttr: 'Edit',
                            enabled: false,
                            className: 'bEdit',
                            action: function (e, dt, node, config) {
                                edit();
                            }
                        },
                        {
                            text: '<a href="#" class="btn btn-default"><i class="fa fa-trash"></i>&nbsp;&nbsp;Hapus</a>',
                            titleAttr: 'Delete',
                            className: 'bDelete',
                            enabled: false,
                            action: function (e, dt, node, config) {
                                destroy();
                            }
                        },
                        {
                            text: '<a href="#" class="btn btn-default"><i class="fa fa-print">&nbsp;&nbsp;Print</i></a>',
                            titleAttr: 'Print',
                            className: 'tPrint',
                            action: function (e, dt, node, config) {
                                var data = $('#button-search').serialize();
                                window.open("/report/pagu/listing_pagu_indikatif/pdf?" + data, "_blank");
                            }
                        },
                        {
                            text: '<a href="#" class="btn btn-default"><i class="fa fa-file-excel-o">&nbsp;&nbsp;Excel</i></a>',
                            titleAttr: 'Excel',
                            className: 'tExcel',
                            action: function (e, dt, node, config) {
                                window.location.href = "/report/pagu/listing_pagu_indikatif/xls";
                            }
                        },
                        {
                            text: '<a href="#" class="btn btn-default"><i class="fa fa-file-pdf-o">&nbsp;&nbsp;PDF</i></a>',
                            titleAttr: 'Pdf',
                            className: 'tPdf',
                            action: function (e, dt, node, config) {
                                var data = $('#button-search').serialize();
                                window.location.href = "/report/pagu/listing_pagu_indikatif/pdf/download?"+data;
                            }
                        }
                    ]
                });
	              
	        });   
    	</script> 
        <script type="text/javascript">
    	<?php $this->load->view($script); ?>    	
    	</script>      
    </body>
</html>
