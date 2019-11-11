<?php
	    $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h4>SİPARİS LISTESI</h4>  
              
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
                                            <th>Müşteri Id</th>
                                            <th>Müşteri Adı Soyadı</th>
                                            <th>Adres Bilgileri</th>
                                            <th>Şehir</th>
                                            <th>Alışveriş Durumu</th>
                                            <th>Müşteri Tel No</th>
                                            <th>Alışveriş Tutarı</th>
                                            <th>Tarih</th>
                                            <th>Kargo Firma</th>
                                            <th>Kargo No</th>
                                            <th>Admin Açıklaması</th>
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
                                            <td><?=$rs->musteri_id?></td>
                                            <td><?=$rs->adsoy?></td>
                                            <td><?=$rs->adres?></td>
                                            <td><?=$rs->sehir?></td>
                                            <td><?=$rs->durum?></td>
                                            <td><?=$rs->tel?></td>
                                            <td><?=$rs->tutar?></td>  
                                            <td><?=$rs->tarih?></td>
                                            <td><?=$rs->kargofirma?></td>
                                            <td><?=$rs->kargono?></td>
                                            <td><?=$rs->admin_aciklama?></td>
                                        <td><a href="<?=base_url()?>admin/siparisler/duzenle/<?=$rs->Id?>" class="btn bg-teal waves-effect"> Düzenle</a></td>
                                        <td><a href="<?=base_url()?>admin/siparisler/sil/<?=$rs->Id?>" class="btn bg-red waves-effect" onclick="return confirm('Silmek istediğinize emin misiniz ?')" >Sil </a></td>
                                        
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