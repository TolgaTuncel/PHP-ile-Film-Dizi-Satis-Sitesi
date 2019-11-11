<?php
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h3>
                    SORUCEVAP DÜZENLEME SAYFASI
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
                            <form id="form_validation" action="<?=base_url()?>admin/sorucevaplar/guncelle/<?=$veri[0]->Id?>" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="soru" class="form-control" value="<?=$veri[0]->soru?>" name="soru" required>
                                        <label class="form-label">Soru</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="cevap" class="form-control" value="<?=$veri[0]->cevap?>" name="cevap" required>
                                        <label class="form-label">Cevap</label>
                                    </div>
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