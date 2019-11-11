<?php
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h3>
                    URUN DUZENLE
                    <small> <a href="#" target="_blank"></a></small>
                </h3>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                     <div class="body">
                            <form id="form_validation" action="<?=base_url()?>admin/siparisler/guncelle/<?=$veri[0]->Id?>" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="kargofirma" class="form-control" value="<?=$veri[0]->kargofirma?>" name="kargofirma" required>
                                        <label class="form-label">Kargo Firma</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="kargono" class="form-control" value="<?=$veri[0]->kargono?>" name="kargono" required>
                                        <label class="form-label">Kargo No</label>
                                    </div>
                                </div>  
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="admin_aciklama" class="form-control" value="<?=$veri[0]->admin_aciklama?>" name="admin_aciklama" required>
                                        <label class="form-label">Admin Açıklaması</label>
                                    </div>
                                </div>  
                                
                                
                                   
                        

                    
                         <label>Durum&nbsp&nbsp&nbsp</label>
                         <form action="radioButtons.php" method="post" value="<?=$veri[0]->durum?>">
                      
                                <div class="form-group">
                                    
                                 <input type="radio" name="durum" id="onaylandı" value="onaylandı"  class="with-gap">
                                    <label for="onaylandı">Onaylandı</label>

                                    <input type="radio" name="durum" id="kargoda" value="kargoda" class="with-gap">
                                    <label for="kargoda" class="m-l-20">Kargoda</label>
                    
                    
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