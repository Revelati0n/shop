<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?=base_url();?>assets/css/pace.min.css"/>
	<link rel="stylesheet" href="<?=base_url();?>assets/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.css"/>
	<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap-theme.css"/>
	<link rel="stylesheet" href="<?=base_url();?>assets/css/stylesheet.css"/>
	<link rel="stylesheet" href="<?=base_url();?>assets/css/animate.css"/>
	<link rel="stylesheet" href="<?=base_url();?>assets/css/pnotify.min.css"/>
	<link rel="stylesheet" href="<?=base_url();?>assets/css/sweetalert.min.css"/>
	<link rel="stylesheet" href="<?=base_url();?>assets/css/summernote.css"/>
	<script src="<?=base_url();?>assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="<?=base_url();?>assets/js/pace.min.js" type="text/javascript"></script>
	<script src="<?=base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?=base_url();?>assets/js/angular.min.js" type="text/javascript"></script>
	<script src="<?=base_url();?>assets/js/app.js" type="text/javascript"></script>
	<script src="<?=base_url();?>assets/js/pnotify.min.js" type="text/javascript"></script>
	<script src="<?=base_url();?>assets/js/sweetalert.min.js" type="text/javascript"></script>
	<script src="<?=base_url();?>assets/js/summernote.min.js" type="text/javascript"></script>
</head>
<body ng-app="App" class="">
<nav id="top">
  <div class="container">
    <div id="top-links" class="nav pull-right">
      <ul class="list-inline">
        <li><a href=""><i class="fa fa-phone"></i></a> <span class="hidden-xs hidden-sm hidden-md"> <?=$this->config->item("tel");?> </span></li>
				<li><a href="/Register"><i class="fa fa-edit"></i> สมัครสมาชิก</a></li>
				<li><a href="/Login"><i class="fa fa-sign-in"></i> เข้าสู่ระบบ</a></li>
				<!-- <li class="dropdown"><a href="#" title="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <span class="hidden-xs hidden-sm hidden-md"> ระบบสมาชิก</span> <span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-menu-right">
						<li><a href="/Register"><i class="fa fa-edit"></i> สมัครสมาชิก</a></li>
						<li><a href="/Login"><i class="fa fa-sign-in"></i> เข้าสู่ระบบ</a></li>
          </ul>
        </li> -->
    </ul>
    </div>
  </div>
</nav>
<header>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div id="logo">
					<h1><a href="<?=base_url();?>">SHOP</a></h1>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="container">
  <nav id="menu" class="navbar">
    <div class="navbar-header"><span id="category" class="visible-xs"><?php echo $text_category; ?></span>
      <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
    </div>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav">
			<li><a href="">ปปปป</a></li>
		</ul>
	</div>
</nav>
</div>
