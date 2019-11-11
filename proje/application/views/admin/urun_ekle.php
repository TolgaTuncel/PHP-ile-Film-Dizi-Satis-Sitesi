<?php
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h3>
                    URUN EKLEME
                    <small> <a href="#" target="_blank"></a></small>
                </h3>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <form id="form_validation" action="<?=base_url()?>admin/urunler/kaydet" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="kodu" class="form-control" name="kodu" required>
                                        <label class="form-label">Urun Kodu</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="adi" class="form-control" name="adi" required>
                                        <label class="form-label">Adı</label>
                                    </div>
                                </div>  

                                

                <label>Kategori&nbsp&nbsp&nbsp</label>
                                
                       <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <select name="kategori_id" id="kategori_id">
                                    <?php
                                    foreach ($kategoriler as $rs) 
                                    {
                                      ?>

                                        <option value="<?=$rs->Id?>"><?=$rs->adi?></option>
                                     <?php } ?>  

                                    </select>
                                </div>                   
                            </div>
                        </div>

                               
                                    
                                
                                 <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="afiyat" class="form-control" name="afiyat" required>
                                        <label class="form-label">Alış Fiyatı</label>
                                    </div>
                                </div>
                                 <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="sfiyat" class="form-control" name="sfiyat" required>
                                        <label class="form-label">Satış Fiyatı</label>
                                    </div>
                                </div>
                                 <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="miktar" class="form-control" name="miktar" required>
                                        <label class="form-label">Miktar</label>
                                    </div>
                                </div>

                                 <label>Birimi&nbsp&nbsp&nbsp</label>
                                 <form action="radioButtons.php" method="post">
                      
                                <div class="form-group">
                                    <input type="radio" name="birimi" id="euro" value="euro" class="with-gap">
                                    <label for="euro">Euro</label>

                                    <input type="radio" name="birimi" id="usd" value="usd" class="with-gap">
                                    <label for="usd" >USD</label>

                                    <input type="radio" name="birimi" id="tl" value="tl" class="with-gap">
                                    <label for="tl" >TL</label>
               
                                </div>
                                
                    
                         <label>Yayın Durum&nbsp&nbsp&nbsp</label>
                         <form action="radioButtons.php" method="post">
                      
                                <div class="form-group">
                                    
                                 <input type="radio" name="durum" id="aktif" value="aktif"  class="with-gap">
                                    <label for="aktif">Aktif</label>

                                    <input type="radio" name="durum" id="pasif" value="pasif" class="with-gap">
                                    <label for="pasif" class="m-l-20">Pasif</label>
                    
                    
                                </div>
                                


                            <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="aciklama" class="form-control" name="aciklama" required>
                                        <label class="form-label">Açıklama</label>
                                    </div>
                                </div>       



                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="keywords" class="form-control" name="keywords" required>
                                        <label class="form-label">Anahtar Kelime</label>
                                    </div>
                                </div>    

                                    <label class="col-sm-2 control-label">Detay</label>
                                            <div class="col-sm-10">
                                            <script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
                                            <textarea class="form-control" id="detay" name="detay" rows="3">
                                            </textarea>
                                            <script>
                                            // Replace the <textarea id="editor1"> with a CKEditor
                                            // instance, using default configuration.
                                            CKEDITOR.replace( 'detay' );
                                            </script>
                                            
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