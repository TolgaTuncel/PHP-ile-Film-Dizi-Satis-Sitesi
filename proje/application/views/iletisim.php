<?php 
	$this->load->view('_header');
?>
<div id="mainBody">
<div class="container">
	<hr class="soften">
	<h5>İletişim Bilgilerimiz</h5>
	<hr class="soften"/>	
	<div class="row">
		<div class="span4">
		
		<address>
		<?=$veri[0]->iletisim?>	
		</address>
		<h4>Bize Yazın</h4>
		 <?php

            if($this->session->flashdata("mesaj"))
            {

            ?>
             <div class="alert alert-success">
             <?=$this->session->flashdata("mesaj")?>
             <?php
             	}
             ?>

		<form action="<?=base_url()?>home/mesajkaydet" method="post" class="form-horizontal">
        <fieldset>
          <div class="control-group">
           
              <input type="text" name="adsoy" required="required" placeholder="Adı Soyadı" class="input-xlarge"/>
           
          </div>
		   <div class="control-group">
           
              <input type="email" name="email" required="required" placeholder="E-mail" class="input-xlarge"/>
           
          </div>
		   <div class="control-group">
           
              <input type="text" name="tel" required="required" placeholder="Telefon" class="input-xlarge"/>
          
          </div>
          <div class="control-group">
              <textarea  name="mesaj" id="mesaj" required="required" rows="8" placeholder="Mesaj" class="input-xlarge"></textarea>
           
          </div>

            <button class="btn btn-large" name="submit" type="submit" value="GONDER">MESAJ GÖNDER</button>

        </fieldset>
      </form>
		</div>
	</div>
	
</div>
</div>
<?php 
	$this->load->view('_footer');
?>