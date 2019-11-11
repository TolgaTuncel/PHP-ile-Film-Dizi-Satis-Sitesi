<?php
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h3>
                    SORUCEVAP EKLEME SAYFASI
                    <small> <a href="#" target="_blank"></a></small>
                </h3>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <form id="form_validation" action="<?=base_url()?>admin/Sorucevaplar/kaydet" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="soru" class="form-control" name="soru" required>
                                        <label class="form-label">Soru</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="cevap" class="form-control" name="cevap" required>
                                        <label class="form-label">Cevap</label>
                                    </div>
                                </div>                                  
                       
               
                                <button class="btn btn-primary waves-effect" type="submit">EKLE</button>
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