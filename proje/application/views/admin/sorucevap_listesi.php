<?php
	    $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h4>SORUCEVAP LISTESI</h4>  
                <a href="<?=base_url()?>admin/sorucevaplar/ekle" class="btn bg-indigo waves-effect">
                Soru Cevap Ekle </a>
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
                                            <th>Soru</th>
                                            <th>Cevap</th>  
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
                                            <td><?=$rs->soru?></td>
                                            <td><?=$rs->cevap?></td>
                                         <td><a href="<?=base_url()?>admin/sorucevaplar/duzenle/<?=$rs->Id?>" class="btn bg-teal waves-effect"> Düzenle</a></td>
                                        <td><a href="<?=base_url()?>admin/sorucevaplar/sil/<?=$rs->Id?>" class="btn bg-red waves-effect" onclick="return confirm('Silmek istediğinize emin misiniz ?')" >Sil </a></td>
                                        
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