<?php
	    $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h4>MESAJ DETAY BILGILERI</h4>  

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
                                
                                    <tr>                                                                         
                                    <th>Adı Soyadı</th>
                                    <td><?=$veri[0]->adsoy?></td>
                                    </tr>   
                                    <tr>
                                    <th>Email</th>
                                    <td><?=$veri[0]->email?></td>
                                    </tr>   
                                    <tr>
                                    <th>Telefon</th>
                                    <td><?=$veri[0]->tel?></td>
                                    </tr>
                                    <tr> 
                                    <th>Mesaj</th>
                                    <td><?=$veri[0]->mesaj?></td>
                                    </tr>
                                    <tr>
                                    <th>Tarih</th>
                                    <td><?=$veri[0]->tarih?></td>
                                    </tr>
                                    <tr>
                                    <th>IP</th>
                                    <td><?=$veri[0]->IP?></td>
                                    </tr>
                                    <tr>
                                    <th>Durum</th>
                                    <td><?=$veri[0]->durum?></td>
                                    </tr>
                                    <tr>
                                    <th>Notunuz</th>
                                    <td> 
                                    <form id="form_validation" action="<?=base_url()?>admin/mesajlar/guncelle/<?=$veri[0]->Id?>" method="POST">

                                    <textarea class="form-control" name="adminnotu" rows="3" value="<?=$veri[0]->adminnotu?>"></textarea>
                                            
                                    <button class="btn btn-primary waves-effect" type="submit">GUNCELLE</button>
                                    </td>                                     
                                    </tr>
                               
                               
                              
                            
                                
                               
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
<?php

	 $this->load->view('admin/footer');



?>