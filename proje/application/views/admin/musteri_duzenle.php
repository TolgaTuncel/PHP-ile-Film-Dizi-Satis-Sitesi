<?php
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h3>
                    MUSTERI DUZENLE
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
                            <form id="form_validation" action="<?=base_url()?>admin/musteriler/guncelle/<?=$veri[0]->Id?>" method="POST">
                               

                         <label>Durum&nbsp&nbsp&nbsp</label>
                         <form action="radioButtons.php" method="post" value="<?=$veri[0]->durum?>>
                      
                                <div class="form-group">
                                    
                                    <input type="radio" name="durum" id="aktif" value="aktif"  class="with-gap">
                                    <label for="aktif">Aktif</label>

                                    <input type="radio" name="durum" id="pasif" value="pasif" class="with-gap">
                                    <label for="pasif" class="m-l-20">Pasif</label>
                    
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