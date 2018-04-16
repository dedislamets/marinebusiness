<style type="text/css">
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
            margin: 40px !important;
        }
        
    }
    

    h2.contact-large a {     
        font-weight: bold;
    }

</style>

<div class="page-content">
    <div class="container-fluid container-top">
        <div class="row">
            <aside class="col-md-3 aside aside-left sidebar-left">
                <div class="agent-info clearfix" >                   
                    <div class="agent-info__identity">
                        <figure>
                            <a href="/agusriyadi2016">
                                <img src="https://d3sknresuoj0kc.cloudfront.net/noprofile40.jpeg" class="img-circle" alt="">
                        </figure>        
                        <div class="basic-info impression">
                            <h2 class="contact-large">
                                <a href="/agusriyadi2016" itemprop="name"><?= $data[0]->nama ?>
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
                 
                <div class="page-content clearfix" style="margin-top: 10px">   
                    
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-header">
                              <h3 class="box-title">List Pengajuan</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">                
                                    <table id="Viewlist" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>                                        
                                                <th>Kode</th>
                                                <th>Title</th>
                                                <th>Author</th>
                                                <th>Type</th>
                                                <th>Amount</th>
                                                <th>Status</th>                                                    
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        </tbody>
                                    </table>                
                            </div>
                            <!-- /.box-body -->
                        </div>                
                        <!-- <table id="table"
                               data-toolbar="#toolbar"
                               data-search="true"
                               data-show-refresh="true"
                               data-show-toggle="true"
                               data-show-columns="true"
                               data-show-export="true"
                               data-detail-view="false"
                               data-striped="true"
                               data-detail-formatter="detailFormatter"
                               data-minimum-count-columns="2"
                               data-show-pagination-switch="true"
                               data-pagination="true"
                               data-id-field="id"
                               data-page-list="[10, 25, 50, 100, ALL]"
                               data-side-pagination="server"
                               data-url="<?= base_url(); ?>setting/getlist"
                               data-response-handler="responseHandler" style="margin-top: 0">
                                <thead>
                                    <tr>
                                        <th data-field="id">Item ID</th>
                                        <th data-field="title_pengajuan" data-formatter="linkFormatter">Item Name</th>
                                        <th data-field="nama_seller">Item Name</th>
                                        <th data-field="nilai_pengajuan" data-editable="true" data-formatter="totalPriceFormatter" data-editable="true">Item Price</th>
                                    </tr>
                                </thead>
                        </table> -->                        
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url(); ?>assets/js/jquery-2.2.3.min.js"></script>


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
