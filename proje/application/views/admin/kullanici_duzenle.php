<?php
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h3>
                    KULLANICI DUZENLE
                    <small> <a href="#" target="_blank"></a></small>
                </h3>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2></h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form id="form_validation" action="<?=base_url()?>admin/kullanicilar/guncelle/<?=$veri[0]->id?>" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="adsoy" class="form-control" value="<?=$veri[0]->adsoy?>" name="adsoy" required>
                                        <label class="form-label">Adı Soyadı</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" id="sifre" class="form-control" value="<?=$veri[0]->sifre?>" name="sifre" required>
                                        <label class="form-label">Sifre</label>
                                    </div>
                                </div>  
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" id="email" class="form-control" value="<?=$veri[0]->email?>" name="email" required>
                                        <label class="form-label">E-mail</label>
                                    </div>
                                </div>

                         <label>Durum&nbsp&nbsp&nbsp</label>
                         <form action="radioButtons.php" method="post" value="<?=$veri[0]->durum?>>
                      
                                <div class="form-group">
                                    
                                    <input type="radio" name="durum" id="aktif" value="aktif"  class="with-gap">
                                    <label for="aktif">Aktif</label>

                                    <input type="radio" name="durum" id="pasif" value="pasif" class="with-gap">
                                    <label for="pasif" class="m-l-20">Pasif</label>
                    
                                </div>

                   
                                <label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspYetki</label>
                                 <form action="radioButtons.php" method="post" value="<?=$veri[0]->yetki?>>
                      
                                <div class="form-group">
                                    <input type="radio" name="yetki" id="admin" value="admin" class="with-gap">
                                    <label for="admin">Admin</label>

                                    <input type="radio" name="yetki" id="satıscı" value="satıscı" class="with-gap">
                                    <label for="satıscı" >Satış Elemanı</label>

                                    <input type="radio" name="yetki" id="stokcu" value="stokcu" class="with-gap">
                                    <label for="stokcu" >Stokçu</label>

                                    <input type="radio" name="yetki" id="kargocu" value="kargocu"  class="with-gap">
                                    <label for="kargocu" >Kargocu</label>
                  

                            
                                </div>


                       
               
                                <button class="btn btn-primary waves-effect" type="submit">GUNCELLE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        </section>
        <?php
        $this->load->view('admin/footer');
       
?>