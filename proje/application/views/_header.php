<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?=$veri[0]->adi?></title>
    <meta name="keywords"  content="<?=$veri[0]->keywords?>">

<meta name="description"   content="<?=$veri[0]->aciklama?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
	<script src="themes/js/less.js" type="text/javascript"></script> -->
	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="<?=base_url()?>assets/themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="<?=base_url()?>assets/themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="<?=base_url()?>assets/themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="<?=base_url()?>assets/themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="<?=base_url()?>assets/themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="<?=base_url()?>assets/themes/images/ico/indir.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url()?>assets/themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url()?>assets/themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url()?>assets/themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?=base_url()?>assets/themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
  </head>
<body>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6"></div>
	<div class="span6">
	<div class="pull-right">
		<?php if($this->session->uye_session)
								{
									$id=$this->session->uye_session['id'];
									$query=$this->db->query("SELECT count(id) as say FROM sepet where musteri_id=$id");
									$sepet=$query->result();
									
								?>
								<li><a href="<?=base_url()?>home/sepetim"><i class="icon-shopping-cart icon-white"></i><?=$sepet[0]->say?> Ürün Sepetinizde</a></li>
								<?php
								}
								?></span></a>
	
		
		
	</div>
	</div>
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="<?=base_url()?>home"><img src="<?=base_url()?>assets/themes/images/logo1.png" alt=""/></a>

    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="<?=base_url()?>home">ANASAYFA</a></li>
	 <li class=""><a href="<?=base_url()?>home/hakkimizda">HAKKIMIZDA</a></li>
	 <li class=""><a href="<?=base_url()?>home/iletisim">ILETISIM</a></li>
	 <li class=""><a href="<?=base_url()?>home/sorucevap">SIKCA SORULAN SORULAR</a></li>

	
	 <li class="">
	 <?php if($this->session->uye_session)
	 { ?>

	 <a href="<?=base_url()?>home/uyepanel"><?=$this->session->uye_session["adsoy"]?></a></li>
	<?php 	}else{ ?>
	<a href="<?=base_url()?>home/uyelik"><i class="icon-chevron-right"></i>Login</a></li>
	<?php } ?>
	</li>

    </ul>
  </div>
</div>
</div>
</div>