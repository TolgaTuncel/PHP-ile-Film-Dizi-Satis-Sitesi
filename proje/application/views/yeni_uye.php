<?php
  $this->load->view('_header');
  $this->load->view('_sidebar');
?>

	<div class="modal-body">		  
			<form class="form-horizontal loginFrm" method="POST" action="<?=base_url()?>home/uye_ekle"">
			 <label class="control-label" for="inputFname1">Adı Soyadı <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="adsoy" name="adsoy" placeholder="First Name">
			</div>
		 
		

		<div class="control-group">
		<label class="control-label" for="input_email">Email <sup>*</sup></label>
		<div class="controls">
		 <input type="text" id="email" name="email" placeholder="Email">
		</div>
	  </div>	  
	<div class="control-group">
		<label class="control-label" for="inputPassword1">Sifre <sup>*</sup></label>
		<div class="controls">
		 <input type="password" id="sifre" name="sifre" placeholder="Sifre">
		</div>
	  </div>	

	   <div class="control-group">
			<label class="control-label" for="inputLnam">Telefon Numarası <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="tel" name="tel" placeholder="Telefon Numarası">
			</div>
		 </div>

		  <div class="control-group">
			<label class="control-label" for="inputLnam">Adres <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="adres" name="adres" placeholder="Adres">
			</div>
		 </div>

		  <div class="control-group">
			<label class="control-label" for="inputLnam">Sehir <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="sehir" name="sehir" placeholder="Sehir">
			</div>
		 </div>

		  <div class="control-group">
			<label class="control-label" for="inputLnam">Cinsiyet <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="cinsiyet" name="cinsiyet" placeholder="Cinsiyet">
			</div>
		 </div>

				<label class="checkbox">
				<input type="checkbox"> Beni Hatırla
				</label>
				<button type="submit" class="btn btn-success">Kayıt Ol</button>
				</form>
			  </div>

		
			
			
			
			
		 



<?php
  $this->load->view('_footer');
?>