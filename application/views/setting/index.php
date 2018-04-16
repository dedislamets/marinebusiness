<style type="text/css">
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
    .page-title-style02 {    
        margin-bottom: 15px;
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
<input type="hidden" id="csrf_token" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" >
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
                                <a href="#"><?= $data[0]->nama ?> 
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
                                <a href="<?= base_url('setting') ?>" >Profil</a>
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
                            <li class="menu-item">
                                <a href="#kontak" class="click">Keluar</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </aside>
            <div class="col-md-9"> 
                <div class="panel with-nav-tabs panel-default">
                    <div class="panel-heading">
                            <ul class="nav nav-tabs">
                                <li class="active mov" id="biodata"><a href="#tab1default" data-toggle="tab">Data Diri</a></li>
                                <li id="doc" class="mov"><a href="#tab2default" data-toggle="tab">Unggah Dokumen</a></li>
                                <li id="rekening" class="mov"><a href="#tab3default" data-toggle="tab">Rekening Bank</a></li> 
                            </ul>
                    </div>
                    <div class="panel-body">
                        <?php if(!empty($this->session->flashdata('statusMsg'))) { ?>
                        <div class="alert alert-success alert-dismissable">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <strong>Success!</strong><?php echo $this->session->flashdata('statusMsg'); ?>
                        </div>
                        <?php } ?>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab1default">      
                                <div class="row" style="margin-bottom: 0">
                                    <div class="col-md-12">
                                        <div class="panel">
                                            <div class="verify-alert panel-collapse pull out hidden">
                                                <div class="account-profile-alerts">
                                                    <div class="row" style="margin-bottom: 0">
                                                        <div class="col-md-1 exclamation mt5 pl0">
                                                            <span class="fa-stack fa-lg fa-3x">
                                                              <i class="fa fa-circle fa-stack-2x circle-phone"></i>
                                                              <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-md-10 mt10 contact-alert">
                                                            <span class="col-md-10">
                                                                Banyak calon pembeli mengeluh <b> sulit menghubungi agen/pemilik </b> karena no. telepon tidak aktif/salah.
                                                                Jangan biarkan properti gagal terjual.                            </span>
                                                            <span class="col-md-2">
                                                                <a id="btnBannerAlertsVerify" class="btn btn-secondary btn-sm" href="#" data-label="Update Profile Page">Verifikasi</a>                            
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5">                                                
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Profil</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <figure class="profile-img">
                                                        <img src="https://d3sknresuoj0kc.cloudfront.net/noprofile80.jpeg" alt="">
                                                    </figure>
                                                    <h3 class="profile-fullname"><?= $data[0]->nama ?></h3>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-secondary btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Ubah Foto Profil Saya                    <i class="fa fa-gear"></i> <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a class="btn btn-file js-upload-profile-pic">
                                                                    Unggah Foto<input name="files[]" multiple="" type="file">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="clearfix"></div>
                                                <form id="w1" action="/account/profile/update-password" method="post">
                                                    <div class="form-group field-userpasswordupdateform-oldpassword required">
                                                        <label class="control-label" for="userpasswordupdateform-oldpassword">Password Lama</label>
                                                        <input type="password" id="userpasswordupdateform-oldpassword" class="form-control" name="UserPasswordUpdateForm[oldPassword]">
                                                        <div class="help-block"></div>
                                                    </div>            
                                                    <div class="form-group field-userpasswordupdateform-newpassword required">
                                                        <label class="control-label" for="userpasswordupdateform-newpassword">Password Baru</label>
                                                        <input type="password" id="userpasswordupdateform-newpassword" class="form-control" name="UserPasswordUpdateForm[newPassword]">
                                                        <div class="help-block"></div>
                                                    </div>            
                                                    <div class="form-group field-userpasswordupdateform-confirmnewpassword required">
                                                        <label class="control-label" for="userpasswordupdateform-confirmnewpassword">Konfirmasi Password Baru</label>
                                                        <input type="password" id="userpasswordupdateform-confirmnewpassword" class="form-control" name="UserPasswordUpdateForm[confirmNewPassword]">
                                                        <div class="help-block"></div>
                                                    </div>            
                                                    <div class="panel-footer text-right">
                                                        <button type="reset" class="btn btn-default btn-sm">Reset</button>                
                                                        <button type="submit" class="btn btn-secondary btn-sm">Simpan</button>            
                                                    </div>
                                                </form>    
                                            </div>
                                        </div>
                                                              
                                    </div>
                                    <div class="col-lg-7">
                                        <!-- <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Cover Image</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="no-cover-image">Cover image tidak tersedia</div>
                                                <div class="panel-footer text-right">
                                                    <a class="btn btn-secondary btn-sm js-upload-cover-image" href="/account/premium/cover-image/index" title="" data-toggle="tooltip" data-placement="top" data-original-title="Anda membutuhkan 10 Koin untuk mengunggah Cover Image">Ubah Cover Image</a>        
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Informasi Profil</h3>
                                            </div>
                                            <div class="panel-body">
                                                <form id="form-profil" action="<?php echo base_url(); ?>setting/ajax_save_profil" onsubmit="return false;">
                                                    <div class="form-group">
                                                        <label class="control-label" >Nama Lengkap</label>&nbsp;
                                                        <input type="text" id="fullname" class="form-control" name="fullName" value="<?= $data[0]->nama ?>" required>
                                                        <div class="help-block"></div>
                                                    </div>           
                                                     <div class="form-group">
                                                        <label class="control-label" for="baseprofileupdateform-email">Alamat Email</label>                                                        
                                                        <input type="text" id="emailuser" class="form-control" name="emailuser" value="<?= $data[0]->email ?>" readonly>
                                                        <div class="help-block"></div>
                                                    </div> 
                                                    <div class="form-group">
                                                        <label class="control-label">Handphone</label>&nbsp;
                                                        <input type="text" id="hp" class="form-control" name="hp" value="<?= $data[0]->phone ?>" required>
                                                        <div class="help-block"></div>
                                                    </div>              
                                                    <div class="form-group">
                                                        <label class="control-label" >Biodata Singkat</label>
                                                        <textarea id="biodata" class="form-control" name="biodata" rows="3"><?= $data[0]->biodata ?>
                                                        </textarea>
                                                        <div class="help-block"></div>
                                                    </div>            
                                                    <div class="form-group>
                                                        <label class="control-label" >Alamat</label>
                                                        <textarea id="address" class="form-control" name="address" rows="3"><?= $data[0]->address ?></textarea>
                                                        <div class="help-block"></div>
                                                    </div>            
                                                    <div class="panel-footer text-right">
                                                        <button type="reset" class="btn btn-default btn-sm">Reset</button>     
                                                        <button type="submit" id="btnSave" class="btn btn-secondary btn-sm">Simpan</button>            
                                                    </div>
                                                </form>    
                                            </div>
                                        </div>                          
                                    </div>
                                </div>  
                            </div>
                            <div class="tab-pane fade" id="tab2default">
                                <h2>Unggah Dokumen Anda Untuk Melengkapi Pendaftaran</h2>
                                <hr class="hr">
                                <ul class="doc">
                                    <li>
                                        <div class="accordion careers">
                                            <div class="title">
                                                <a href='#' class="clearfix">
                                                    <span class='job-position'>KTP</span> 
                                                    <?php 
                                                        if(empty($files_npwp)) { ?>
                                                        <span class='job-place unverified'>Unverified</span> 
                                                    <?php }else{ ?>
                                                        <span class='job-place verified'>Verified</span>
                                                    <?php } ?>                     
                                                </a>
                                            </div>
                                            <div class="content clearfix">                                                
                                                <div class="col-md-6 clearfix">
                                                    <form enctype="multipart/form-data" action="" method="post">
                                                        <div class="form-group">
                                                            <label>Choose Files</label>
                                                            <input type="file" class="form-control" name="userFiles[]"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control" type="submit" name="fileSubmit" value="UPLOAD"/>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-md-6 clearfix">
                                                    <ul class="doc">                                                        
                                                        <?php if(!empty($files_ktp)): foreach($files_ktp as $file): ?>
                                                        <li class="col-md-6">
                                                            <div style="border:solid 1px #dde4e6;padding: 10px;background-color: #f7f7f7;">
                                                                <img src="<?php echo base_url('uploads/files/'.$file['file_name']); ?>" alt="" class="img img-responsive" >
                                                            </div>                                                                
                                                            <p>Uploaded <?php echo date("j M Y",strtotime($file['created'])); ?></p>
                                                        </li>
                                                        <?php endforeach; else: ?>
                                                        <p>Image(s) not found.....</p>
                                                        <?php endif; ?>
                                                    </ul>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <hr class="hr">
                                    </li>
                                    <li>
                                        <div class="accordion careers">
                                            <div class="title">
                                                <a href='#' class="clearfix">
                                                    <span class='job-position'>NPWP</span> 
                                                        <?php 
                                                            if(empty($files_npwp)) { ?>
                                                            <span class='job-place unverified'>Unverified</span> 
                                                        <?php }else{ ?>
                                                            <span class='job-place verified'>Verified</span>
                                                        <?php } ?>                     
                                                </a>
                                            </div>
                                            <div class="content clearfix">
                                                <div class="col-md-6 clearfix">
                                                    <form enctype="multipart/form-data" action="" method="post">
                                                        <div class="form-group">
                                                            <label>Choose Files</label>
                                                            <input type="file" class="form-control" name="userFilesNPWP[]" />
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control" type="submit" name="fileSubmitNPWP" value="UPLOAD"/>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-md-6 clearfix">
                                                    <ul class="doc">
                                                        <?php if(!empty($files_npwp)): foreach($files_npwp as $file_npwp): ?>
                                                        <li class="col-md-6">
                                                            <div style="border:solid 1px #dde4e6;padding: 10px;background-color: #f7f7f7;">
                                                                <img src="<?php echo base_url('uploads/files/'.$file_npwp['file_name']); ?>" alt="" class="img img-responsive" >
                                                            </div>                                                                
                                                            <p>Uploaded <?php echo date("j M Y",strtotime($file_npwp['created'])); ?></p>
                                                        </li>
                                                        <?php endforeach; else: ?>
                                                        <p>Image(s) not found.....</p>
                                                        <?php endif; ?>
                                                    </ul>
                                                </div>                                           
                                            </div>
                                        </div>
                                        <hr class="hr">
                                    </li>
                                    <li>
                                        <div class="accordion careers">
                                            <div class="title">
                                                <a href='#' class="clearfix">
                                                    <span class='job-position'>Ijazah</span> 
                                                        <?php 
                                                            if(empty($files_ijazah)) { ?>
                                                            <span class='job-place unverified'>Unverified</span> 
                                                        <?php }else{ ?>
                                                            <span class='job-place verified'>Verified</span>
                                                        <?php } ?>                     
                                                </a>
                                            </div>
                                            <div class="content clearfix">
                                                <div class="col-md-6 clearfix">
                                                    <form enctype="multipart/form-data" action="" method="post">
                                                        <div class="form-group">
                                                            <label>Choose Files</label>
                                                            <input type="file" class="form-control" name="userFilesIJAZAH[]" />
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control" type="submit" name="fileSubmitIJAZAH" value="UPLOAD"/>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-md-6 clearfix">
                                                    <ul class="doc">
                                                        <?php if(!empty($files_ijazah)): foreach($files_ijazah as $file_ijazah): ?>
                                                        <li class="col-md-6">
                                                            <div style="border:solid 1px #dde4e6;padding: 10px;background-color: #f7f7f7;">
                                                                <img src="<?php echo base_url('uploads/files/'.$file_ijazah['file_name']); ?>" alt="" class="img img-responsive" >
                                                            </div>                                                                
                                                            <p>Uploaded <?php echo date("j M Y",strtotime($file_ijazah['created'])); ?></p>
                                                        </li>
                                                        <?php endforeach; else: ?>
                                                        <p>Image(s) not found.....</p>
                                                        <?php endif; ?>
                                                    </ul>
                                                </div>                                           
                                            </div>
                                        </div>
                                        <hr class="hr">
                                    </li>
                                    <li>
                                        <div class="accordion careers">
                                            <div class="title">
                                                <a href='#' class="clearfix">
                                                    <span class='job-position'>SIUP</span> 
                                                        <?php 
                                                            if(empty($files_siup)) { ?>
                                                            <span class='job-place unverified'>Unverified</span> 
                                                        <?php }else{ ?>
                                                            <span class='job-place verified'>Verified</span>
                                                        <?php } ?>                     
                                                </a>
                                            </div>
                                            <div class="content clearfix">
                                                <div class="col-md-6 clearfix">
                                                    <form enctype="multipart/form-data" action="" method="post">
                                                        <div class="form-group">
                                                            <label>Choose Files</label>
                                                            <input type="file" class="form-control" name="userFilesSIUP[]" />
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control" type="submit" name="fileSubmitSIUP" value="UPLOAD"/>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-md-6 clearfix">
                                                    <ul class="doc">
                                                        <?php if(!empty($files_siup)): foreach($files_siup as $file_siup): ?>
                                                        <li class="col-md-6">
                                                            <div style="border:solid 1px #dde4e6;padding: 10px;background-color: #f7f7f7;">
                                                                <img src="<?php echo base_url('uploads/files/'.$file_siup['file_name']); ?>" alt="" class="img img-responsive" >
                                                            </div>                                                                
                                                            <p>Uploaded <?php echo date("j M Y",strtotime($file_siup['created'])); ?></p>
                                                        </li>
                                                        <?php endforeach; else: ?>
                                                        <p>Image(s) not found.....</p>
                                                        <?php endif; ?>
                                                    </ul>
                                                </div>                                           
                                            </div>
                                        </div>
                                        <hr class="hr">
                                    </li>
                                    <li>
                                        <div class="accordion careers">
                                            <div class="title">
                                                <a href='#' class="clearfix">
                                                    <span class='job-position'>TDP</span> 
                                                        <?php 
                                                            if(empty($files_tdp)) { ?>
                                                            <span class='job-place unverified'>Unverified</span> 
                                                        <?php }else{ ?>
                                                            <span class='job-place verified'>Verified</span>
                                                        <?php } ?>                     
                                                </a>
                                            </div>
                                            <div class="content clearfix">
                                                <div class="col-md-6 clearfix">
                                                    <form enctype="multipart/form-data" action="" method="post">
                                                        <div class="form-group">
                                                            <label>Choose Files</label>
                                                            <input type="file" class="form-control" name="userFilesTDP[]" />
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control" type="submit" name="fileSubmitTDP" value="UPLOAD"/>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-md-6 clearfix">
                                                    <ul class="doc">
                                                        <?php if(!empty($files_tdp)): foreach($files_tdp as $file_tdp): ?>
                                                        <li class="col-md-6">
                                                            <div style="border:solid 1px #dde4e6;padding: 10px;background-color: #f7f7f7;">
                                                                <img src="<?php echo base_url('uploads/files/'.$file_tdp['file_name']); ?>" alt="" class="img img-responsive" >
                                                            </div>                                                                
                                                            <p>Uploaded <?php echo date("j M Y",strtotime($file_tdp['created'])); ?></p>
                                                        </li>
                                                        <?php endforeach; else: ?>
                                                        <p>Image(s) not found.....</p>
                                                        <?php endif; ?>
                                                    </ul>
                                                </div>                                           
                                            </div>
                                        </div>
                                        <hr class="hr">
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="tab3default">Default 3</div>                            
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
    $.ajaxSetup({
        data: {
            csrf_token: <?php echo "'". $this->security->get_csrf_hash()."'" ?>
        }
    });
    $('.mov').click(function(e){      
       e.preventDefault();    
       var id = $(this).attr('id');
        $('.mov').removeClass('active');  
        $(this).addClass('active');
    });

    $("#btnSave").on('click',function(e){      
         e.preventDefault();         
         var validator  = $('#form-profil').validate({
            rules: {                
                fullname: {
                    required: true
                },
                hp: {
                    required: true
                },                              
            }
        });
        validator.valid();
        $status = validator.form();
        if($status)
        {
            var post = $('form#form-profil').serialize();
            $.post("<?php echo base_url(); ?>setting/ajax_save_profil",post+'&csrf_token='+ $("input[name=csrf_token]").val(), function(data){    
                if(data.error==false)
                {
                    alert('Profil berhasil terupdate');
                }
            });
        }
    });
</script>
