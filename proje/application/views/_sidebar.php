<div id="sidebar" class="span3">
		
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<li class="subMenu open"><a> KATEGORİLER</a>
				<ul>
				<?php 
					$query = $this -> db -> query ("SELECT *  FROM kategoriler ");
					$kategori =  $query ->result(); 
					foreach ($kategori as $rs) {
						?>
					<li><a href="<?=base_url()?>home/urunlistele/<?=$rs->Id?>" class="active" href="products.html"><i class="icon-chevron-right"></i><?=$rs->adi?></a></li>
				<?php } ?>
				</ul>
			</li>
			
			
		</ul>
		<br/>
		
	</div>