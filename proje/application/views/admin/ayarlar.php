<?php
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
?>
  <section class="content">
        <div class="container-fluid">
            <div class="block-header">


                <h2>Ayarlar</h2>


            </div>
        </div>

        <?php
                            if ($this->session->flashdata("sonuc")){    

                            ?>
                            <div class="alert alert-success">
                                <a href="#" class="alert-link"><?=$this->session->flashdata("sonuc")?></a>.
                            </div> 
                            <?php
                            }
                            ?>    
					<div class="panel-body">
					<form action="<?=base_url()?>admin/Home/ayarguncelle/<?=$veri[0]->Id?>" class="form-horizontal " method="post" >
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Site Adı</label>
                                      <div class="col-sm-10">
                                            <input type="text"  name="adi" value="<?=$veri[0]->adi?>" class="form-control round-input">
                                      </div>
                                    </div>

                                     <div class="form-group">
                                      <label class="col-sm-2 control-label">Açıklama</label>
                                      <div class="col-sm-10">
                                            <input type="text"  name="aciklama" value="<?=$veri[0]->aciklama?>" class="form-control round-input">
                                      </div></div>
                                       <div class="form-group">
                                      <label class="col-sm-2 control-label">Keywords</label>
                                      <div class="col-sm-10">
                                            <input type="text" name="keywords" value="<?=$veri[0]->keywords?>" class="form-control round-input">
                                      </div></div>
                                       <div class="form-group">
                                      <label class="col-sm-2 control-label">Smtp Server</label>
                                      <div class="col-sm-10">
                                            <input type="text" name="smtpserver" value="<?=$veri[0]->smtpserver?>" class="form-control round-input">
                                      </div></div>
                                       <div class="form-group">
                                      <label class="col-sm-2 control-label">Smtp E-mail</label>
                                      <div class="col-sm-10">
                                            <input type="text" name="smtpemail" value="<?=$veri[0]->smtpemail?>" class="form-control round-input">
                                      </div></div>
                                        <div class="form-group">
                                      <label class="col-sm-2 control-label">Smtp Sifre</label>
                                      <div class="col-sm-10">
                                            <input type="text" name="smtpsifre" value="<?=$veri[0]->smtpsifre?>" class="form-control round-input">
                                      </div>
                                    </div>
									<div class="form-group">
                                      <label class="col-sm-2 control-label">Adres</label>
                                      <div class="col-sm-10">
                                            <input type="text" name="adres" value="<?=$veri[0]->adres?>" class="form-control round-input">
                                      </div></div>
									<div class="form-group">
                                      <label class="col-sm-2 control-label">Şehir</label>
                                      <div class="col-sm-10">
                                            <input type="text" name="sehir" value="<?=$veri[0]->sehir?>" class="form-control round-input">
                                      </div></div>
									<div class="form-group">
                                      <label class="col-sm-2 control-label">Telefon Numarası</label>
                                      <div class="col-sm-10">
                                            <input type="text" name="tel" value="<?=$veri[0]->tel?>" class="form-control round-input">
                                      </div></div>
									<div class="form-group">
                                      <label class="col-sm-2 control-label">Hakkımızda</label>
                                      <div class="col-sm-10">
                                            <script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
                                        <textarea class="form-control" id="hakkimizda" name="hakkimizda" rows="3" value="<?=$veri[0]->hakkimizda?>">
											</textarea>
											<script>
											// Replace the <textarea id="editor1"> with a CKEditor
											// instance, using default configuration.
											CKEDITOR.replace( 'hakkimizda' );
											</script>
                                        </div>
                                    </div>
									<div class="form-group">
                                      <label class="col-sm-2 control-label">Facebook</label>
                                      <div class="col-sm-10">
                                            <input type="text" name="facebook" value="<?=$veri[0]->facebook?>" class="form-control round-input">
                                      </div></div>
									<div class="form-group">
                                      <label class="col-sm-2 control-label">İnstagram</label>
                                      <div class="col-sm-10">
                                            <input type="text" name="instegram" value="<?=$veri[0]->instegram?>" class="form-control round-input">
                                      </div></div>
									
                                     <div class="form-group">
                                      <label class="col-sm-2 control-label">İletişim Sayfası</label>
                                      <div class="col-sm-10">
                                            <script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
                                            <textarea class="form-control" id="iletisim" name="iletisim" rows="3" value="<?=$veri[0]->iletisim?>">
											</textarea>
											<script>
											// Replace the <textarea id="editor1"> with a CKEditor
											// instance, using default configuration.
											CKEDITOR.replace( 'iletisim' );
											</script>
                                        </div>
                                    </div>
                                    
                                      <div class="form-group">
                                       <label class="col-sm-2 control-label">	</label>
                                      <div class="col-sm-10">
                                          <input class="btn btn-success" type="submit" value="Kaydet">
                                      </div>
                                  </div>
                                 
                              </form>
    </section>
<?php

    $this->load->view('admin/footer');
       
?>