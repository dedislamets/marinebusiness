<style type="text/css">
    .title-adv {
          display: -webkit-box;
          -webkit-box-orient: vertical;
          -webkit-line-clamp: 2;
          overflow: hidden;
      }
    .post-media {    
        height: 200px;    
    }

    .ckateg {
        text-align: center;
        padding: 10px;
        background-color: #565f66;
        color: #fff;
    }

    .ckateg a {        
        color: #fff;
    }

    .isotope {
        padding-right: 0;
        padding-left: 0;
    }
    .clients-li li:first-child {
         padding-left: 15px; 
    }  
    .verify-alert .button-alert {
        margin-top: 5px;
        padding: 6px;
    }    
    .btn-primary {
        background: #ed6c09;
        border-color: #ed6c09;
    }  
    .verify-alert .circle-phone {
        color: #f8d2c9;
    }
    .ph {
        background-color: #f5f5f5;
        border-color: #ddd;
    }   
    .mason {
        margin-bottom: 30px;                    
        float: left;
    } 
    .putih {
        background-color: #fff;
    }
    .page-content.custom-bkg {
        padding-top: 15px;
    }
    .page-title-style02 {    
        margin-bottom: 15px;
    }
    .title-adv {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        overflow: hidden;
    }
    ul li, ol li {
        padding-bottom: 5px;
        padding-top: 5px;
    }
    .container {        
        padding-left: 5px;
        padding-right: 5px;
    }
    .panel-default>.panel-heading {
        color: #fff;
        background-color: #565f66;        
    }
    .panel {        
        background-color: transparent;
    }

     @media (min-width:767px)  {    
        .container-top {
            margin-top:100px;
        }
        body {
            margin: 40px;
        }
    }

</style>

<div class="page-content">
    <div class="container-fluid container-top">
        <div class="row">
            <aside class="col-md-3 aside aside-left sidebar-left">
                <div class="agent-info clearfix" >                   
                    <div class="agent-info__identity">
                        <figure>
                            <a href="#">
                                <img src="https://d3sknresuoj0kc.cloudfront.net/noprofile40.jpeg" class="img-circle" alt="">
                            </a>
                        </figure>        
                        <div class="basic-info impression">
                            <h2 class="contact-large">
                                <a href="#" itemprop="name"><?= $data[0]->nama ?>
                                </a>
                            </h2>                            
                            <p name="lastActivity" class="contact-large">
                                Aktif: Kurang dari 1 minggu            </p>
                        </div>
                    </div>                                                
                </div>
                <div class="clearfix"></div> 
                <ul class="aside-widgets">
                    <li class="widget widget_nav_menu clearfix">
                        <div class="panel-heading ph">
                            <h3 class="panel-title">Pengaturan</h3>
                        </div>          
                        <div>
                            <div class="shopee-create" data-ember-action="" data-ember-action-6365="6365">
                                <div class="button">
                                    <a href="<?= base_url('setting/baru') ?>">
                                        <svg viewBox="0 0 32 32"><path d="M17.5 2.5h-3v12h-12v3h12v12h3v-12h12v-3h-12v-12z"></path></svg>
                                    </a>
                                </div>
                                <div class="description">Tambah Produk Baru</div>
                            </div>
                        </div>              
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="<?= base_url('setting') ?>">Profil</a>
                            </li>
                            <li class="menu-item">
                                <a href="#visi" class="click">Notifikasi</a>
                            </li>
                            <li class="menu-item">
                                <a href="<?= base_url('setting/iklan') ?>">Daftar Iklan</a>
                            </li>
                            <li class="menu-item">
                                <a href="<?= base_url('setting/pengajuan') ?>">Daftar Pengajuan</a>
                            </li>                      
                            <li class="menu-item current-menu-item">
                                <a href="#kontak" class="click">Keluar</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </aside>
            <div class="col-md-9"> 
                 <div class="title">
                    <h3>Iklan Saya</h3>
                </div>
                <div class="page-content custom-bkg bkg-grey clearfix">                    
                        <div class="col-md-12" style="padding-left: 0;padding-right: 0">                           
                            <div class="panel with-nav-tabs panel-default clearfix">
                                <div class="panel-heading">
                                    <ul class="nav nav-tabs">
                                        <li class="active mov" id="biodata">
                                            <a href="#tab1default" data-toggle="tab">Semua</a>
                                        </li>
                                        <li id="live" class="mov">
                                            <a href="#tab2default" data-toggle="tab" style="color: #fff;">Live</a>
                                        </li>
                                        <li id="nonaktif" class="mov">
                                            <a href="#tab3default" data-toggle="tab" style="color: #fff;">Non Aktif</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="tab1default">  
                                            <ul class="col-md-12 blog-posts isotope">
                                            <?php 
                                                $no=1; 
                                                foreach ($listing as $key => $value): ?>
                                                    <?php 
                                                        $service = $value->service; 

                                                        if ($service == 'Trading') {
                                                            $price = number_format($value->price);
                                                        } else if ($service == 'CSM') {
                                                            $price = number_format($value->price_csm);
                                                        } else if ($service == 'Transportation') {
                                                            $price = number_format($value->price_charter);
                                                        } else if ($service == 'Chartering') {
                                                            $service = ucwords($value->type_charter)." Charter";
                                                            $price = number_format($value->price_charter);
                                                        } 
                                                    ?>
                                                    <li class="blog-post clearfix isotope-item col-xs-6 col-sm-6 col-md-4 col-lg-4 nopad mason">
                                                        <div class="putih clearfix "> 
                                                            <div class="post-date">
                                                                <p class="table-adv">Rp <?= $price; ?></p>
                                                            </div>                                                            
                                                            <div class="ckateg">                               
                                                                <div class="post-category">                                    
                                                                    <a href="#" class="table-adv">                                                
                                                                        <?= $service; ?>                                        
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="post-body">
                                                                <a href="<?= base_url(); ?>ship/<?= $value->id; ?>/<?= str_replace(" ", "-",strtolower($value->title)) ?>.html" class="table-adv">
                                                                    <h3 class="title-adv table-adv"><?= $value->title; ?></h3>
                                                                </a>                              
                                                            </div>
                                                            <div class="post-media">
                                                                <a href="<?= base_url(); ?>ship/<?= $value->id; ?>/<?= str_replace(" ", "-",strtolower($value->title)) ?>.html" class="post-img">
                                                                     <img src="<?= base_url(); ?>uploads/<?= isset($value->nama_foto)?$value->nama_foto:'not-found.jpg' ?>" />
                                                                </a>
                                                            </div>
                                                            <!-- <div class="post-footer">
                                                                <ul class="post-meta">
                                                                    <li class="comments fa fa-comments-o"><a href="news-single.html">6</a></li>
                                                                    <li class="post-like fa fa-heart-o" data-url="http://www.envato.com" data-text="This is an example of sharing your blog post"></li>
                                                                </ul>
                                                                <a href="<?= base_url(); ?>ship/<?= $value->id; ?>/<?= str_replace(" ", "-",strtolower($value->title)) ?>.html" class="read-more">
                                                                    <span>
                                                                        Read more
                                                                        <i class="fa fa-external-link"></i>
                                                                    </span>
                                                                </a>
                                                            </div> -->
                                                        </div>
                                                    </li>                                  
                                            <?php 
                                                $no++; 
                                                endforeach ?>                                            
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="tab2default">
                                            <ul class="col-md-12 blog-posts isotope">
                                            <?php 
                                                $no=1; 
                                                foreach ($live as $key => $value): ?>
                                                    <li class="blog-post clearfix isotope-item col-xs-12 col-sm-12 col-md-4 col-lg-4 nopad mason">
                                                        <div class="putih clearfix ">                                        
                                                            <div class="post-info clearfix">
                                                                <div class="post-date">
                                                                    <p>
                                                                        Rp300.000.000
                                                                    </p>
                                                                </div><!-- .post-date end -->  
                                                                <div class="post-category">
                                                                    <a href="#"><?= $value->service; ?></a>
                                                                </div>
                                                            </div>
                                                            <div class="post-body">
                                                                <a href="<?= base_url(); ?>ship/<?= $value->id; ?>/<?= str_replace(" ", "-",strtolower($value->title)) ?>.html">
                                                                    <h3 class="title-adv"><?= $value->title; ?></h3>
                                                                </a>                              
                                                            </div>
                                                            <div class="post-media">
                                                                <a href="<?= base_url(); ?>ship/<?= $value->id; ?>/<?= str_replace(" ", "-",strtolower($value->title)) ?>.html" class="post-img">
                                                                    <img src="<?= base_url(); ?>uploads/<?= isset($value->nama_foto)?$value->nama_foto:'not-found.jpg' ?>" />
                                                                </a>
                                                            </div>
                                                            <div class="post-footer">
                                                                <ul class="post-meta">
                                                                    <li class="comments fa fa-comments-o"><a href="news-single.html">6</a></li>
                                                                    <li class="post-like fa fa-heart-o" data-url="http://www.envato.com" data-text="This is an example of sharing your blog post"></li>
                                                                </ul><!-- .post-meta end -->
                                                                <a href="<?= base_url(); ?>ship/<?= $value->id; ?>/<?= str_replace(" ", "-",strtolower($value->title)) ?>.html" class="read-more">
                                                                    <span>
                                                                        Read more
                                                                        <i class="fa fa-external-link"></i>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>                                  
                                            <?php 
                                                $no++; 
                                                endforeach ?>                                            
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="tab3default">
                                            <ul class="col-md-12 blog-posts isotope">
                                            <?php 
                                                $no=1; 
                                                foreach ($nonaktif as $key => $value): ?>
                                                    <li class="blog-post clearfix isotope-item col-xs-12 col-sm-12 col-md-4 col-lg-4 nopad mason">
                                                        <div class="putih clearfix ">                                        
                                                            <div class="post-info clearfix">
                                                                <div class="post-date">
                                                                    <p>
                                                                        Rp300.000.000
                                                                    </p>
                                                                </div><!-- .post-date end -->  
                                                                <div class="post-category">
                                                                    <a href="#"><?= $value->service; ?></a>
                                                                </div>
                                                            </div>
                                                            <div class="post-body">
                                                                <a href="<?= base_url(); ?>ship/<?= $value->id; ?>/<?= str_replace(" ", "-",strtolower($value->title)) ?>.html">
                                                                    <h3 class="title-adv"><?= $value->title; ?></h3>
                                                                </a>                              
                                                            </div>
                                                            <div class="post-media">
                                                                <a href="<?= base_url(); ?>ship/<?= $value->id; ?>/<?= str_replace(" ", "-",strtolower($value->title)) ?>.html" class="post-img">
                                                                     <img src="<?= base_url(); ?>uploads/<?= isset($value->nama_foto)?$value->nama_foto:'not-found.jpg' ?>" />
                                                                </a>
                                                            </div>
                                                            <div class="post-footer">
                                                                <ul class="post-meta">
                                                                    <li class="comments fa fa-comments-o"><a href="news-single.html">6</a></li>
                                                                    <li class="post-like fa fa-heart-o" data-url="http://www.envato.com" data-text="This is an example of sharing your blog post"></li>
                                                                </ul><!-- .post-meta end -->
                                                                <a href="<?= base_url(); ?>ship/<?= $value->id; ?>/<?= str_replace(" ", "-",strtolower($value->title)) ?>.html" class="read-more">
                                                                    <span>
                                                                        Read more
                                                                        <i class="fa fa-external-link"></i>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>                                  
                                            <?php 
                                                $no++; 
                                                endforeach ?>                                            
                                            </ul>
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
<script src="<?= base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript">
    $('.click').click(function(e){
       // prevent default action
       e.preventDefault();    
       scrollToElement( $(this).attr('href'), 2000 );
    });
    var scrollToElement = function(el, ms){        
        var speed = (ms) ? ms : 600;
        $('html,body').animate({
            scrollTop: $(el).offset().top - 100
        }, speed);
        // $(el).css('padding-top','100px');
    }
</script>
