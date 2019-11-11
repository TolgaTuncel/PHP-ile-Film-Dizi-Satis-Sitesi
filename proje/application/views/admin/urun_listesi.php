<?php
	    $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h4>URUN LISTESI</h4>  
                <a href="<?=base_url()?>admin/urunler/ekle" class="btn bg-indigo waves-effect">
                Urun Ekle </a>
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
                                        <th>Kodu</th>
                                        <th>Adı</th>
                                        <th>Kategorisi</th>
                                        <th>Miktar</th>
                                        <th>Birimi</th>
                                        <th>S.Fiyat</th>
                                        <th>Resim</th>
                                        <th>Galeri</th>
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
                                        <th scope="row"><?=$rs->kodu?></th>
                                        <td><?=$rs->adi?></td>
                                        <td><?=$rs->katadi?></td>
                                        <td><?=$rs->miktar?></td>
                                        <td><?=$rs->birimi?></td>

                                        <td><?=$rs->sfiyat?></td>
                                        
                                        <td>
                                        <?php 
                                        if($rs->resim)
                                        {
                                        ?>                                          
                                         <a href="<?=base_url()?>admin/Urunler/resimekle/<?=$rs->Id?>">    
                                        <img src="<?=base_url()?>uploads/<?=$rs->resim?>" height="50" width="50"/>                                                    
                                        </a> 
                                          
                                        <?php
                                        } 
                                        else 
                                        { 
                                        ?>
                                         <a href="<?=base_url()?>admin/Urunler/resimekle/<?=$rs->Id?>" class="btn bg-teal waves-effect">Resim Ekle</a>

                                        <?php 
                                        } 
                                        ?>
                                        </td>
                                        <td><a href="<?=base_url()?>admin/Urunler/galeriekle/<?=$rs->Id?>" class="btn btn-info btn-xs">Galeri Ekle</a></td>
                                        
                                        <td><?=$rs->durum?></td>
                                        <td><a href="<?=base_url()?>admin/urunler/duzenle/<?=$rs->Id?>" class="btn bg-teal waves-effect"> Düzenle</a></td>
                                        <td><a href="<?=base_url()?>admin/urunler/sil/<?=$rs->Id?>" class="btn bg-red waves-effect" onclick="return confirm('Silmek istediğinize emin misiniz ?')" >Sil </a>
                                        
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