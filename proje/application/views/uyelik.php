<?php
  $this->load->view('_header');
  
?>	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
							<?php
                            if ($this->session->flashdata("mesaj"))   

                            {?>
                            <div class="alert alert-danger">
                                <a href="#" class="alert-link"><?=$this->session->flashdata("mesaj")?></a>.
                            </div>
                            <?php
                            }
                            ?>	
						<h2>Üye Girişi</h2>
						
						<form action="<?=base_url()?>home/login" method="post" >
							<input type="text" name="email" placeholder="E-mail" /><br>
							<input type="password" name="sifre" placeholder="Şifre" /><br>
							
							<button type="submit" class="btn btn-default">Giriş Yap</button>
						</form>
					</div><!--/login form-->
				</div>
				<br>
				<div class="col-sm-1">
					<h2 class="or">Veya</h2><br>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Kayıt Ol</h2>
							<?php
                            if ($this->session->flashdata("kayıt"))   

                            {?>
                            <div class="alert alert-success">
                                <a href="#" class="alert-link"><?=$this->session->flashdata("kayıt")?></a>.
                            </div>
                            <?php
                            }
                            ?>	
						<form action="<?=base_url()?>home/uyeekle" method="post"><br>
							<input type="text" name="adsoy" required="required" placeholder="Adı Soyadı"/><br>							
							<input type="email" name="email" required="required" placeholder="Email Adres"/><br>
							<input type="password" name="sifre" required="required" placeholder="Şifre"/>	<br>						
							<input type="text" name="tel" required="required" placeholder="Telelefon Numarası"/><br>
							<input type="text" name="adres" required="required" placeholder="Adres"/><br>
							<input type="text" name="sehir" required="required" placeholder="Sehir"/><br>
							<input type="text" name="cinsiyet" required="required" placeholder="Cinsiyet"/><br>
							
							<button type="submit" class="btn btn-default">Kayıt Ol</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
  $this->load->view('_footer');
?>