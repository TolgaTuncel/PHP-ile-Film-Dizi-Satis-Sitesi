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
                            <form id="form_validation" action="<?=base_url()?>admin/urunler/guncelle/<?=$veri[0]->Id?>" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="kodu" class="form-control" value="<?=$veri[0]->kodu?>" name="kodu" required>
                                        <label class="form-label">Urun Kodu</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="adi" class="form-control" value="<?=$veri[0]->adi?>" name="adi" required>
                                        <label class="form-label">Adı</label>
                                    </div>
                                </div>  
                                
                                
                                   
                        
                                 <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="afiyat" class="form-control" value="<?=$veri[0]->afiyat?>" name="afiyat" required>
                                        <label class="form-label">Alış Fiyatı</label>
                                    </div>
                                </div>
                                 <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="sfiyat" class="form-control" value="<?=$veri[0]->sfiyat?>" name="sfiyat" required>
                                        <label class="form-label">Satış Fiyatı</label>
                                    </div>
                                </div>
                                 <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="miktar" class="form-control" value="<?=$veri[0]->miktar?>" name="miktar" required>
                                        <label class="form-label">Miktar</label>
                                    </div>
                                </div>

                                 <label>Birimi&nbsp&nbsp&nbsp</label>
                                 <form action="radioButtons.php" method="post" value="<?=$veri[0]->birimi?>">
                      
                                <div class="form-group">
                                    <input type="radio" name="birimi" id="euro" value="euro" class="with-gap">
                                    <label for="euro">Euro</label>

                                    <input type="radio" name="birimi" id="usd" value="usd" class="with-gap">
                                    <label for="usd" >USD</label>

                                    <input type="radio" name="birimi" id="tl" value="tl" class="with-gap">
                                    <label for="tl" >TL</label>
               
                                </div>
                    
                         <label>Yayın Durum&nbsp&nbsp&nbsp</label>
                         <form action="radioButtons.php" method="post" value="<?=$veri[0]->durum?>">
                      
                                <div class="form-group">
                                    
                                 <input type="radio" name="durum" id="aktif" value="aktif"  class="with-gap">
                                    <label for="aktif">Aktif</label>

                                    <input type="radio" name="durum" id="pasif" value="pasif" class="with-gap">
                                    <label for="pasif" class="m-l-20">Pasif</label>
                    
                    
                                </div>

                     

                            <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="aciklama" class="form-control" value="<?=$veri[0]->aciklama?>" name="aciklama" required>
                                        <label class="form-label">Açıklama</label>
                                    </div>
                                </div>       



                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="keywords" class="form-control" value="<?=$veri[0]->keywords?>" name="keywords" required>
                                        <label class="form-label">Anahtar Kelime</label>
                                    </div>
                                </div>    

                                    <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="detay" class="form-control" value="<?=$veri[0]->detay?>"name="detay" required>
                                        <label class="form-label">Detay</label>
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