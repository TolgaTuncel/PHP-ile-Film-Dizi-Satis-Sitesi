<div id="carouselBlk">
	<div id="myCarousel" class="carousel slide" >
		<div class="carousel-inner">
			 <div class="item active">
      <div class="container">
      <a href=""><img style="height:350px; width: 1500px;" src="<?=base_url()?>uploads/slider1.jpg" alt="special offers"/></a>

      </div>
      </div>
		 
		

		<?php

		  foreach ($slider as $rs) 

		  {

		  ?>
	


		  <div class="item">
		  <div class="col-sm-6">
									<h2><?=$rs->adi?></h2>
									<p><?=$rs->aciklama?></p>
									<a type="button" href="<?=base_url()?>home/urundetay/<?=$rs->Id?>"  class="btn btn-default get">ÜRÜN DETAYI</a>
								</div>
		  <div class="container">
			<a href="<?=base_url()?>home/urundetay/<?=$rs->Id?>"><img  src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="<?=$rs->adi?>" ></a>
				<div class="carousel-caption">
				  <h4><?=$veri[0]->adi?></h4>
				  <p></p>
				</div>
		  </div>
		  </div>



		  	<?php
		}
		?>





	
		  

		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	  </div> 
</div>
<div id="mainBody">
	<div class="container">
	<div class="row">