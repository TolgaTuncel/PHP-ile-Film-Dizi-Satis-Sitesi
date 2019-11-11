<?php
  $this->load->view('_header');
?>

<section>
		<div class="container">
			<div class="row">
				
				<div class="col-sm-9">
					

					
					
					<div class="response-area">
						<h2>SIKÇA SORULAN SORULAR</h2>
						<ul class="media-list">
						
						<?php
						foreach($sorular as $rs)
						{
						?>
						
						
							<li class="media">
								
								
								<div class="media-body">
									<ul class="sinlge-post-meta">
										<b><li><i class="fa fa-user"></i><?=$rs->soru?></li></b>
								
									</ul>
									<p><?=$rs->cevap?></p>
									
								</div>
							</li>
						
					<?php
					}
					?>
						</ul>					
					</div><!--/Response-area-->
					
					</div><!--/Repaly Box-->
				</div>	
			</div>
		</div>
</section>

<?php
  $this->load->view('_footer');
?>