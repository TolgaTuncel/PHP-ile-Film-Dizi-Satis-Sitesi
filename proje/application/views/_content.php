		<div class="span9">		
			<div class="well well-small">
			<h4>BAZI URUNLERIMIZ <small class="pull-right"></small></h4>
			<hr class="soft"/>
	
	
	  

<br class="clr"/>
<div class="tab-content">
	

	<div class="tab-pane  active" id="blockView">
		<ul class="thumbnails">
	


		<?php

		  foreach ($urunler as $rs) 

		  {

		  ?>
				<li class="span2">
				  <div class="thumbnail">
					<a  href="<?=base_url()?>home/urundetay/<?=$rs->Id?>"><img style="height:150px; width: 150px;" src="<?=base_url()?>uploads/<?=$rs->resim?>"  alt=""/></a>
					<div class="caption">
					  <h5><?=$rs->adi?></h5>
			
					 
					  <a class="btn" href="<?=base_url()?>home/urundetay/<?=$rs->Id?>">Ürün Detayı</a> 
					  <a class="btn btn-primary" href="<?=base_url()?>home/urundetay/<?=$rs->Id?>"><?=$rs->sfiyat?> <?=$rs->birimi?></a></h4>
					</div>
				  </div>
				</li>

				<?php
		}
		?>
				
			  </ul>
	<hr class="soft"/>
	</div>
</div>

</div>