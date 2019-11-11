
	<?php
		$this->load->view('_header');
		$this->load->view('_uyesidebar');
	?>

	<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">YAPILAN SİPARİŞLER</h2>
						
						    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
							<thead>
							<tr>
								<th>S.No</th>
								<th>Tarih</th>
								<th>Tutar</th>										
								<th>Durum</th>							
								<th>İşlem</th>
							</tr>
							</thead>
							<tbody>
							<?php
							$sn=0;
							foreach ($veriler as $rs)
							{ $sn++;								
							?>
							
							 <tr>
								<td><?=$sn?></td>							
								<td class="center"><?=$rs->tarih?></td>
								<td class="center"><?=$rs->tutar?> TL</td>
							    <td class="center"><span class="label label-warning"><?=$rs->durum?></span></td>
								<td class="center"><a class="btn btn-danger" href="<?=base_url()?>home/siparis_detay/<?=$rs->Id?>"<i class=" glyphicon glyphicon-search"></i>Sipariş Detay</a></td>
							</tr>
							<?php } ?>
							</tbody>
							</table>
							<br><br><br><br><br><br><br><br><br><br><br><br><br>
					</div><!--features_items-->	
				</div>
			</div>
		</div>
	</section>
<?php
  $this->load->view('_footer');
?>	