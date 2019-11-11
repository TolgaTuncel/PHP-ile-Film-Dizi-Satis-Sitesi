<?php
	    $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h4>MESAJ LISTESI</h4>  
                <a href="<?=base_url()?>admin/mesajlar/ekle" class="btn bg-indigo waves-effect">
                Mesaj Ekle </a>
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
                                   
                                        <th>Adı Soyadı</th>
                                        <th>Email</th>
                                        <th>Telefon</th>
                                        <th>Mesaj</th>
                                        <th>Tarih</th>
                                        <th>IP</th>
                                        <th>Durum</th>
                                        <th>Notunuz</th>
                                        <th>Detay</th>
                                        <th>Silme</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                foreach ($veriler as $rs)
                            { ?>
                                    <tr>
                                        <th scope="row"><?=$rs->adsoy?></th>
                                        
                                        <td><?=$rs->email?></td>
                                        <td><?=$rs->tel?></td>
                                        <td><?=$rs->mesaj?></td>
                                        <td><?=$rs->tarih?></td>
                                        <td><?=$rs->IP?></td>
                                        <td><?=$rs->durum?></td>
                                        <td><?=$rs->adminnotu?></td>

                                        <td><a href="<?=base_url()?>admin/mesajlar/detay/<?=$rs->Id?>" class="btn bg-teal waves-effect"> Detay</a></td>
                                        <td><a href="<?=base_url()?>admin/mesajlar/sil/<?=$rs->Id?>" class="btn bg-red waves-effect" onclick="return confirm('Silmek istediğinize emin misiniz ?')" >Sil </a></td>
                                        
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