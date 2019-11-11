<?php
  $this->load->view('_header');
  $this->load->view('_uyesidebar');
  
?>	<div class="span9">
            <ul id="productDetail" class="nav nav-tabs">
              <li class="active"><a href="#home" data-toggle="tab"></a></li>
              <li><a href="#profile" data-toggle="tab"></a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade active in" id="home">
			  <h4>URUN DETAYLARI</h4>
						<h2 class="title text-center">PROFİLİM</h2>
						    <?php
                            if ($this->session->flashdata("guncel"))
							{ ?>
                            <div class="alert alert-success">
                                <a href="#" class="alert-link"><?=$this->session->flashdata("guncel")?></a>.
                            </div> 
                            <?php } ?>
						<form action="<?=base_url()?>home/uyeguncelle/<?=$veri2[0]->Id?>" method="post" >
						<table class="table">
                        <thead>
                        <tr>
                            <th>Adı Soyadı   : </th><td><input type="text" name="adsoy" value="<?=$veri2[0]->adsoy?>"></td>
						</tr>	
						<tr>
                            <th>Sifre   : </th><td><input type="text" name="sifre" value="<?=$veri2[0]->sifre?>"></td>
						</tr>	
						<tr>
                            <th>E-mail   : </th><td><input type="text" name="email" value="<?=$veri2[0]->email?>"></td>
						</tr>	
						
						<tr>
                            <th>Telefon   : </th><td><input type="text" name="tel" value="<?=$veri2[0]->tel?>"></td>
						</tr>
						<tr>
                            <th>Adres  : </th><td><input type="text" name="adres" value="<?=$veri2[0]->adres?>"></td>
						</tr>	
						<tr>
                            <th>Şehir  : </th><td><input type="text" name="sehir" value="<?=$veri2[0]->sehir?>"></td>
						</tr>
						<tr>
                            <th>Cinsiyet   : </th><td><input type="text" name="cinsiyet" value="<?=$veri2[0]->cinsiyet?>"></td>
						</tr>						
						
						<tr>
                            <th>Durum    : </th><td class="center">								
                                <span class="label-success label label-default"><?=$veri2[0]->durum?></span>
                            </td>
						</tr>
						<tr>
                            <th>Tarih    : </th><td><?=$veri2[0]->tarih?></td>
						</tr>
						<tr>
                            <td>
											<input type="submit" class="btn btn-danger" value="Güncelle" >
											
											
										
										</td>
										
						</tr>						
							
                        </thead>
                        <tbody>
                        <tr>
                           
                        </tr>
                        
                        </tbody>
                    </table>
					</form>




								
								</div>
							</div>
						</div>
						
						
						
						
						
						
						
		
	
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php

?>