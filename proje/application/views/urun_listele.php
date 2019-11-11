	
	<?php
	
		$this->load->view('_header');
		$this->load->view('_sidebar');
	?>
	<div class="span9">
    
	<h3> Ürünler</h3>	
	<hr class="soft"/>
	
	
	  

<br class="clr"/>
<div class="tab-content">
	

	<div class="tab-pane  active" id="blockView">
		<ul class="thumbnails">

			<?php foreach ($urunler as $rs) {
				?>
			<li class="span3">
			  <div class="thumbnail">
				<a href="<?=base_url()?>home/urundetay/<?=$rs->Id?>"><img style="height:200px; width: 200px;" src="<?=base_url()?>uploads/<?=$rs->resim?>" alt=""/></a>
				<div class="caption">
				  <h5><?=$rs->adi?></h5>
				  <p> 
					<?=$rs->aciklama?>
				  </p>
				   <h4 style="text-align:center"><a class="btn" href="<?=base_url()?>home/urundetay/<?=$rs->Id?>">Urun Detayı</a>  
				   <a class="btn btn-primary" href="<?=base_url()?>home/urundetay/<?=$rs->Id?>"><?=$rs->sfiyat?><?=$rs->birimi?></a></h4>
				</div>
			  </div>
			</li>
			<?php # code...
			} ?>
		  </ul>
	<hr class="soft"/>
	</div>
</div>

</div>


