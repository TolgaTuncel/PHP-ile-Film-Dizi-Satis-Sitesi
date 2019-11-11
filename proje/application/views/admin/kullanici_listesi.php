<?php
	    $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h4>KULLANICI LISTESI</h4>  
                <a href="<?=base_url()?>admin/kullanicilar/ekle" class="btn bg-indigo waves-effect">
                Kullanıcı Ekle </a>
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
                                        <th>ID</th>
                                        <th>Adı Soyadı</th>
                                        <th>Email</th>
                                        <th>Tarih</th>
                                        <th>Sifre</th>
                                        <th>Yetki</th>
                                        <th>Durum</th>
                                        <th>Düzenle</th>
                                        <th>Silme</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                foreach ($veriler as $rs)
                            { ?>
                                    <tr>
                                        <th scope="row"><?=$rs->id?></th>
                                        <td><?=$rs->adsoy?></td>
                                        <td><?=$rs->email?></td>
                                        <td><?=$rs->tarih?></td>
                                        <td><?=$rs->sifre?></td>
                                        <td><?=$rs->yetki?></td>
                                        <td><?=$rs->durum?></td>
                                        <td><a href="<?=base_url()?>admin/kullanicilar/duzenle/<?=$rs->id?>" class="btn bg-teal waves-effect"> Düzenle</a></td>
                                        <td><a href="<?=base_url()?>admin/kullanicilar/sil/<?=$rs->id?>" class="btn bg-red waves-effect" onclick="return confirm('Silmek istediğinize emin misiniz ?')" >Sil </a></td>
                                        
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