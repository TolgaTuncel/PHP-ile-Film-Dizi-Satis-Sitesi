<?php
	    $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h4>MUSTERI LISTESI</h4>  
              
            <hr/>

            <?php

            	if($this->session->flashdata("mesaj"))
            	{

            ?>
             <div class="alert alert-success">
             <?=$this->session->flashdata("mesaj")?>
             <?php
             	}
             ?>
             </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>                                      
                                        <th>Id</th>
                                            <th>Adı Soyadı</th>
                                            <th>Email</th>                                           
                       
                                            <th>Durum</th>
                                            <th>Telefon</th>
                                            <th>Cinsiyet</th>
                                            <th>Adres</th>
                                            <th>Şehir</th>
                                            <th>Üyelik Tarihi</th>
                                            <th>Düzenle</th>
                                            <th>Sil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                foreach ($veriler as $rs)
                            { ?>
                                    <tr>
                                        <th scope="row"><?=$rs->Id?></th></th>
                                            <td><?=$rs->adsoy?></td>
                                            <td><?=$rs->email?></td>                                          
                                     
                                            <td><?=$rs->durum?></td>
                                            <td><?=$rs->tel?></td>
                                            <td><?=$rs->cinsiyet?></td>
                                            <td><?=$rs->adres?></td>
                                            <td><?=$rs->sehir?></td>    
                                            <td><?=$rs->tarih?></td> 
                                        <td><a href="<?=base_url()?>admin/musteriler/duzenle/<?=$rs->Id?>" class="btn bg-teal waves-effect"> Düzenle</a></td>
                                        <td><a href="<?=base_url()?>admin/musteriler/sil/<?=$rs->Id?>" class="btn bg-red waves-effect" onclick="return confirm('Silmek istediğinize emin misiniz ?')" >Sil </a></td>
                                        
                                    </tr>
                  <?php 
                            }
                                
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
<?php

	 $this->load->view('admin/footer');



?>