<?php
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h3>
                    Kategori EKLEME
                    <small> <a href="#" target="_blank"></a></small>
                </h3>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <form id="form_validation" action="<?=base_url()?>admin/kategoriler/kaydet" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="adi" class="form-control" name="adi" required>
                                        <label class="form-label">Adı</label>
                                    </div> 

                    <br>
               
                                <button class="btn btn-primary waves-effect" type="submit">EKLE</button>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        </section>
        <?php
        $this->load->view('admin/footer');
       
?>