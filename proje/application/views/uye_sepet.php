
	<?php
	
		$this->load->view('_header');
		$this->load->view('_uyesidebar');
	?>

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#" ><?=$this->session->uye_session["adsoy"]?></a></li>
				  <li class="active">Sepet İşlemleri</li>
				</ol>
			</div>
			
						<?php
                            if ($this->session->flashdata("mesaj")){    

                            ?>
                            <div class="alert alert-success">
                                <a href="#" class="alert-link"><?=$this->session->flashdata("mesaj")?></a>.
                            </div> 
                            <?php
                            }
                            ?>     
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="description">Sıra No</td>
							<td class="description">Ürün Resim</td>
							<td class="description">Ürün Adı</td>
							<td class="quantity">Miktar</td>							
							<td class="price">Fiyat</td>														
							<td class="total">Tutar</td>
							<td class="price">Sil</td>
							
							<td></td>
						</tr> 
						
					</thead>
					<tbody>
					<?php
							$sn=0;
							$toplam=0;
							foreach($veriler as $rs)
							{ $sn++;
							  
							?>	
						<tr>
							<td class="cart_product"><h6><?=$sn?></h6></td>
							<td class="cart_product"><img src="<?=base_url()?>uploads/<?=$rs->urunresim?>" width="85" height="84"></td>
							<td class="cart_description"><?=$rs->urunadi?></a></td>
							<td class="cart_quantity"><?=$rs->miktar?></a></td>
							<td class="cart_price"><p><?=$rs->urunfiyat?> TL</p></td>
							<td class="cart_total"><p class="cart_total_price"><?php echo $tutar=$rs->urunfiyat * $rs->miktar ?> TL</p></td>
							<td class="cart_delete"><a  class="cart_quantity_delete" href="<?=base_url()?>home/sepetsil/<?=$rs->Id?>" class="btn bg-red waves-effect" onclick="return confirm('Silmek istediğinize emin misiniz ?')" >Sil </a></td><i class="fa fa-times"></i></a></td>
						</tr>
						
							<?php					
							$toplam=$toplam+$tutar;
							}
							?>
						<tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Toplam Tutar</td>
										<td><?=$toplam?> TL</td>
									</tr>	
									<tr>
										<td>Vergi Ücreti</td>
										<td> 5 TL</td>
									</tr>
									<tr class="shipping-cost">
										<td>Kargo</td>
										<td>Ücretsiz</td>										
									</tr>
									<tr>
										<td class="cart_total">
								<p class="cart_total_price">Toplam Tutar</p></td>
										<td class="cart_total">
								<p class="cart_total_price"><?=$toplam+=5?> TL</p>
							</td>
							</tr>
							
									
								</table>
							</td>
						</tr>												
						
					</tbody>
				</table>
				<?php
				if($sn>0)
				{
				?>
			</div>
		</div>
	</section> <!--/#cart_items-->
<section id="do_action">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-6">
					<div class="shopper-info">
						<h3>Kredi Kartı Bilgileri</h3>
							<form action="<?=base_url()?>home/siparis_tamamla/" method="post">
								Kredi Kartı No: <input type="text" name="karno"  required="required" placeholder="Kart Numarası"><br>
								SKT AY: <input type="text" name="ay"  required="required" placeholder="Son Kullanma Tarihi Ayı"><br>
								SKT YIL: <input type="text" name="yil"  required="required" placeholder="Son Kullanma Tarihi Yılı"><br>
								Güvenlik Kodu:  <input type="text"  name="gkodu" required="required" placeholder="Güvenlik Kodu"><br>
								<h3>Adres ve Teslimat Bilgileri</h3>
								Alıcı Adı Soyadı: <input type="text" name="adsoy" value="<?=$musteri[0]->adsoy?>" required="required" placeholder="Alıcı Adı Soyadı"><br>	
								Adresi: <input type="text" name="adres" value="<?=$musteri[0]->adres?>" required="required" placeholder="Alıcı Adres"><br>								
								Telefonu: <input type="text" name="tel" value="<?=$musteri[0]->tel?>" required="required" placeholder="Alıcı Telefon Numarası"><br>
								Şehir: <input type="text" name="sehir" value="<?=$musteri[0]->sehir?>" required="required" placeholder="Alıcı Şehir"><br>
								TOPLAM TUTAR: <input type="text" name="tutar" readonly value="<?=$toplam?>" required="required"><br>
							
								<br><input value="Ödeme Yap" type="submit"  > 
							</form>	
				<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section><


    <?php
	
	?>