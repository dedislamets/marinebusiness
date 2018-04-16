<style type="text/css">
    .clients-li li:first-child {
         padding-left: 15px; 
    }    

     @media (min-width:767px)  {    
        .container {
            top:50px;
        }
    }
    .widget li a {
        color: #777;
    }
</style>
<div class="page-title-style02 pt-bkg02">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Marine Business</h1>
            </div><!-- .col-md-6 end -->
            <div class="col-md-6">
                <div class="breadcrumb-container">
                    <ul class="breadcrumb clearfix">
                        <li>You are here:</li>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="about03.html">About</a>
                        </li>
                    </ul><!-- .breadcrumb end -->
                </div><!-- .breadcrumb-container end -->
            </div><!-- .col-md-12 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div>
 <div class="page-content">
    <div class="container">
        <div class="row">
            <aside class="col-md-3 aside aside-left">
                <ul class="aside-widgets">
                    <li class="widget widget_nav_menu clearfix">
                        <div class="title">
                            <h3>company</h3>
                        </div>                        
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="#profil" class="click">About Company</a>
                            </li>
                            <li class="menu-item">
                                <a href="#visi" class="click">Vision & Mission</a>
                            </li>
                            <li class="menu-item">
                                <a href="#servis" class="click">Service</a>
                            </li>

                        </ul><!-- .menu end -->
                    </li><!-- .widget.widget_nav_menu end -->
                    <li class="widget widget-text">
                        <div class="title">
                            <h3>brochure download</h3>
                        </div>
                        <img src="<?= base_url(); ?>assets/img/pics/brochure02.jpg" alt="Trucking brochure"/>
                        <br />
                        <a href="trucking_brochure.pdf" target="_blank" class="download-link">
                            <span>
                                <i class="fa fa-file-pdf-o"></i>
                                Annual brochure_EN.pdf
                            </span>
                        </a>
                        <a href="trucking_brochure.pdf" target="_blank" class="download-link">
                            <span>
                                <i class="fa fa-file-pdf-o"></i>
                                Annual brochure_FR.pdf
                            </span>
                        </a>
                    </li><!-- .widget.widget-text end -->
                    <!-- .widget.widget-text start -->
                    
                </ul><!-- .aside-widgets end -->
            </aside><!-- .aside.aside-left end -->
            <div class="col-md-9"> 
                <div id="profil" class="">                       
                    <div class="custom-heading">
                        <h2>Who We Are</h2>
                    </div>
                    <?= $data[0]->history ?>
                    <br />
                </div>
                <div id="visi">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="custom-heading">
                                <h3>Our Vision</h3>
                            </div><!-- .custom-heading end -->
                            <?= $data[0]->visi ?>                              
                        </div><!-- .col-md-5 end -->
                        <div class="col-md-7">
                            <div class="custom-heading">
                                <h3>Our Mission</h3>
                            </div>
                            <?= $data[0]->misi ?> 
                            <!-- <ul class="fa-ul">
                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    Providing high quality transportation services to all of our clients
                                </li>
                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    Invest in our employees to provide better service and company growth
                                </li>
                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    Worry about enviroment according to latest industry standards
                                </li>
                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    Safety as top priority in assuring safe work procedures
                                </li>
                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    Investing in technology to provide fast, acurate and cost-effective service
                                </li>
                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    Living up to highest industry standards
                                </li>
                            </ul> -->
                        </div><!-- .col-md-7 end -->
                    </div>
                </div>
                <div id="choose">
                    <div>
                        <div class="custom-heading">
                            <h3>why choose us</h3>
                        </div><!-- .custom-heading end -->
                        <div class="accordion clearfix">
                            <!-- ACCODRION 1 -->
                            <div class="title active">
                                <a href="#" class="clearfix">
                                    Exceptional design with wide range of layouts.
                                </a>
                            </div><!-- .title.active end -->
                            <div class="content clearfix">
                                <p>
                                    Trucking is website template dedicated to 
                                    trucking and logistics companies. It offers 
                                    a wide range of different layouts and 
                                    elements to provide endless options of 
                                    arranging and displaying your content.
                                </p>
                            </div><!-- .content end -->
                            <!-- ACCODRION 2 -->
                            <div class="title">
                                <a href="#" class="clearfix">
                                    Unlimited color options plus 10 predefined color combinations
                                </a>
                            </div><!-- .title.active end -->
                            <div class="content clearfix">
                                <p>
                                    Trucking comes with 10 predefined color combinations
                                    which you can use. There are two color layouts and 
                                    single color layouts. Icons you see on the services 
                                    are svg images and you can change it's color by 
                                    editing a single line in css file. All colors are 
                                    placed in separate css file to make your customization 
                                    quick and easy.
                                </p>
                            </div><!-- .content end -->
                            <!-- ACCODRION 3 -->
                            <div class="title">
                                <a href='#' class='clearfix'>
                                    Appropriate for small and large trucking  and logistics companies
                                </a>
                            </div><!-- .title end -->
                            <div class="content clearfix">
                                <p>
                                    Trucking includes several hompeage options 
                                    plus a great number of other pages so it can be used 
                                    for both small and large logistics and trucking 
                                    companies. There is a vehicle fleet gallery which is 
                                    specific for trucking companies and for example, 
                                    locations layout which is specific for large 
                                    logistics companies.
                                </p>
                            </div><!-- .content end -->
                            <!-- ACCODRION 4 -->
                            <div class="title">
                                <a href='#' class='clearfix'>
                                    Regular updates with new features and options
                                </a>
                            </div><!-- .title end -->
                            <div class="content clearfix">
                                <p>
                                    We take care of our items and update them 
                                    on a regular basis. Weather there is a new 
                                    feature or a quick fix, the updates are quick.
                                </p>
                            </div><!-- .content end -->
                            <!-- ACCODRION 5 -->
                            <div class="title">
                                <a href='#' class='clearfix'>
                                    Compatible with most popular and appropriate plugins
                                </a>
                            </div><!-- .title end -->
                            <div class="content clearfix">
                                <p>
                                    Trucking has working contact and email subscription 
                                    form included. We used classes from WordPress plugin
                                    Contact form 7, so if you decide to purchase WordPress 
                                    version, you'll have your forms working. Locations 
                                    page includes google map with multiple locations, using 
                                    newest Google API. You can change your locations quick, 
                                    by replacing latitude and longitude in js code.
                                </p>
                            </div><!-- .content end -->
                            <!-- ACCODRION 6 -->
                            <div class="title">
                                <a href='#' class='clearfix'>
                                    Interactive map solution for showing your locations
                                </a>
                            </div><!-- .title end -->
                            <div class="content clearfix">
                                <p>
                                    There are two possibilities of showcasing your 
                                    locations. With amazing master slider jQuery plugin,
                                    where you can use image and interactive highlights or 
                                    with google maps, which you can see on locations.html 
                                    page.
                                </p>
                            </div><!-- .content end -->
                        </div>
                    </div>
                </div>
                <div id="servis">
                    <div class="custom-heading">
                        <h3>Services</h3>                    
                    </div>
                    <?= $data[0]->service_desc ?>
                    <ul class="team-list clearfix">
                        <li>
                            <img src="<?= base_url(); ?>assets/img/pics/shiptrading.jpg" alt=""/>
                            <div class="team-details-container">
                                <div class="team-details">
                                    <h5>Ship Trading</h5>
                                    <p class="position">
                                    </p>
                                </div><!-- .team-details end -->
                                <?= $data[0]->trading_desc ?>
                            </div><!-- .team-details-container end -->
                        </li><!-- team-member end -->
                        <li>
                            <img src="<?= base_url(); ?>assets/img/pics/charter_left.jpg" alt=""/>
                            <div class="team-details-container">
                                <div class="team-details">
                                    <h5>Ship Chartering</h5>
                                    <p class="position">
                                    </p>
                                </div><!-- .team-details end -->
                                <?= $data[0]->chartering_desc ?>
                            </div><!-- .team-details-container end -->
                        </li><!-- team-member end -->
                        <li>
                            <img src="<?= base_url(); ?>assets/img/pics/team01.jpg" alt=""/>
                            <div class="team-details-container">
                                <div class="team-details">
                                    <h5>Commercial Ship Management</h5>
                                    <p class="position">
                                      
                                    </p>
                                </div>
                                <?= $data[0]->csm_desc ?>
                            </div><!-- .team-details-container end -->
                        </li>
                        <li>
                            <img src="<?= base_url(); ?>assets/img/pics/transportation.jpg" alt=""/>
                            <div class="team-details-container">
                                <div class="team-details">
                                    <h5>Transportation</h5>
                                    <p class="position">
                                    </p>
                                </div><!-- .team-details end -->
                                <?= $data[0]->transportation_desc ?>
                            </div><!-- .team-details-container end -->
                        </li>
                    </ul>
                </div>
                <br>
                
                 <div class="clearfix"></div>
            </div><!-- .col-md-9 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div>
<script src="<?= base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.validate.min.js"></script>

<script type="text/javascript">
    $('.click').click(function(e){
       // prevent default action
       e.preventDefault();
       // get id of target div (placed in href attribute of anchor element)
       // and pass it to the scrollToElement function
        // also, use 2000 as an argument for the scroll speed (2 seconds, 2000 milliseconds)
       scrollToElement( $(this).attr('href'), 2000 );
    });
    var scrollToElement = function(el, ms){        
        var speed = (ms) ? ms : 600;
        $('html,body').animate({
            scrollTop: $(el).offset().top - 100
        }, speed);
        // $(el).css('padding-top','100px');
    }
    function supports_geolocation() {
  return !!navigator.geolocation;
}

</script>
