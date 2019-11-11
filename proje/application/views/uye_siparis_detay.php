	<?php
		$this->load->view('_header');
		$this->load->view('_uyesidebar');
	?>

<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">YAPILAN SİPARİŞ BİLGİLERİ</h2>
						
						    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
							<thead>
							<tr>
								<th>Adı Soyadı:</th>
								<td><?=$siparis[0]->adsoy?></td>
							</tr>
							<tr>
								<th>Adres:</th>
								<td><?=$siparis[0]->adres?></td>
							</tr>
							<tr>
								<th>Telefon:</th>
								<td><?=$siparis[0]->tel?></td>
							</tr>
							<tr>
								<th>Şehir:</th>
								<td><?=$siparis[0]->sehir?></td>
							</tr>
							<tr>
								<th>Kargo Firma:</th>
								<td><?=$siparis[0]->kargofirma?></td>
							</tr>
							<tr>
								<th>Kargo No:</th>
								<td><?=$siparis[0]->kargono?></td>
							</tr>
							<tr>
								<th>Alişveriş Durumu:</th>
								<td><?=$siparis[0]->durum?></td>
							</tr>
							<tr>
								<th>Site Admin Açıklaması:</th>
								<td><?=$siparis[0]->admin_aciklama?></td>
							</tr>
								
							</thead>
							
						</table>
						<h2 class="title text-center">Bu siparişe Ait Ürünler</h2>
						
						    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
							<thead>
							<tr>
								<th>S.No</th>								
								<th>Ürün Adı</th>
								<th>Miktar</th>	
								<th>Tutar</th>																
								
								
							</tr>
							    
							</thead>
							<tbody>
							<?php
							$sn=0;
							foreach ($urunler as $rs)
							{ $sn++;								
							?>
							
							 <tr>
								<td><?=$sn?></td>
								<td><?=$rs->adi?></td>
								<td><?=$rs->miktar?></td>
								<td><?=$rs->tutar?></td>
								
								
							 </tr>
							<?php } ?>
							<?php
							
							foreach ($siparis as $rs)
							{ 								
							?>
							<th>Toplam</th><td class="center"><?=$siparis[0]->tutar?></td>	
							<?php } ?>
							</tbody>
							</table>
					</div><!--features_items-->	
				</div>
			</div>
		</div>
	</section>
<?php
  $this->load->view('_footer');
?>	