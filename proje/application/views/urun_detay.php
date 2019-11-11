	<?php
		$this->load->view('_header');
		$this->load->view('_sidebar');
	?>
	<div class="row">	
							<?php
                            if ($this->session->flashdata("mesaj")){    

                            ?>
							<div class="status alert alert-success" >
                            <?=$this->session->flashdata("mesaj")?>
							</div>
                            <?php
                            }
                            ?>      
			<div id="gallery" class="span3">
            <a href="themes/images/products/large/f1.jpg" title="">
				<img src="<?=base_url()?>uploads/<?=$veri[0]->resim?>" style="width:75%" alt="Fujifilm FinePix S2950 Digital Camera"/>
            </a>
			<div id="differentview" class="moreOptopm carousel slide">
                <div class="carousel-inner">
                  <div class="item active">

          <?php

		  foreach ($resimler as $rs) 

		  {

		  ?>
                   <a> <img style="width:20%" src="<?=base_url()?>uploads/<?=$rs->resim?>" /></a>
                  
        <?php
		}
		?>

                </div>
                </div>
           
              </div>
			  
	
			</div>
			<div class="span6">
				<h3><?=$veri[0]->adi?></h3>
				
				<hr class="soft"/>
				<form class="form-horizontal qtyFrm" method="post"  action="<?=base_url()?>home/sepete_ekle/<?=$veri[0]->Id?>">
				  <div class="control-group">
					<label class="control-label"><span><?=$veri[0]->sfiyat?> <?=$veri[0]->birimi?></span></label>
					<div class="controls">
					
									
						
										
                                            <input type="text" size="4" class="input-text qty text" value="1" name="miktar" min="1" step="1">
                                      <?php
										if($this->session->uye_session)
										{
										?>			
                                        <button type="submit">Sepete Ekle</button>
                               <?php
										}
										else
										{
											?>
										<a href="<?=base_url()?>home/uyelik" class="btn btn-fefault cart">Giriş Yapınız </a>
										<?php
										}
										?>
                               
                                    
									
					</div>
				  </div>
				</form>
				
				
				
				<hr class="soft clr"/>
				<p>
					<?=$veri[0]->aciklama?>
				
				</p>
				
				<br class="clr"/>
			<a href="#" name="detail"></a>
			<hr class="soft"/>
			</div>
			
			<div class="span9">
            <ul id="productDetail" class="nav nav-tabs">
          
            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade active in" id="home">
			  <h4>URUN DETAYLARI</h4>
                <table class="table table-bordered">
				<tbody>
				
				<tr class="techSpecRow"><td class="techSpecTD1">KATEGORİ: </td><td class="techSpecTD2"><?=$veri[0]->katadi?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">KODU: </td><td class="techSpecTD2"><?=$veri[0]->kodu?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">MIKTARI:</td><td class="techSpecTD2"> <?=$veri[0]->miktar?></td></tr>
		
				</tbody>
				</table>
				
				<h4>Film Açıklama</h4>
				<p>
				 <?=$veri[0]->detay?>
				</p>

				
              </div>
              </div>
              </div>
              </div>



    <?php
		$this->load->view('_footer');
	?>