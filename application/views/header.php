<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?=base_url();?>assets/css/animate.css"/>
	<link rel="stylesheet" href="<?=base_url();?>assets/css/pace.min.css"/>
	<link rel="stylesheet" href="<?=base_url();?>assets/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.css"/>
	<link rel="stylesheet" href="<?=base_url();?>assets/css/fileinput.min.css"/>
	<!-- <link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap-theme.css"/> -->
	<link rel="stylesheet" href="<?=base_url();?>assets/css/pnotify.min.css"/>
	<link rel="stylesheet" href="<?=base_url();?>assets/css/stylesheet.css"/>
	<link rel="stylesheet" href="<?=base_url();?>assets/css/sweetalert.min.css"/>
	<script src="<?=base_url();?>assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="<?=base_url();?>assets/js/pace.min.js" type="text/javascript"></script>
	<script src="<?=base_url();?>assets/js/plugins/canvas-to-blob.min.js" type="text/javascript"></script>
	<script src="<?=base_url();?>assets/js/plugins/sortable.min.js" type="text/javascript"></script>
	<script src="<?=base_url();?>assets/js/plugins/purify.min.js" type="text/javascript"></script>
	<script src="<?=base_url();?>assets/js/fileinput.min.js" type="text/javascript"></script>
	<script src="<?=base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?=base_url();?>assets/js/angular.min.js" type="text/javascript"></script>
	<script src="<?=base_url();?>assets/js/app.js" type="text/javascript"></script>
	<script src="<?=base_url();?>assets/js/pnotify.min.js" type="text/javascript"></script>
	<script src="<?=base_url();?>assets/js/sweetalert.min.js" type="text/javascript"></script>
	<script src="<?=base_url();?>assets/js/locales/theme.js" type="text/javascript"></script>
	<script src="<?=base_url();?>assets/js/locales/th.js" type="text/javascript"></script>

</head>
<body ng-app="App" class="">
<nav id="top">
  <div class="container">
    <div id="top-links" class="nav pull-right">
      <ul class="list-inline">
        <li><a href=""><i class="fa fa-phone"></i></a> <span class="hidden-xs hidden-sm hidden-md"> <?=$this->config->item("tel");?> </span></li>
			<?php if(!$this->userModel->isLogin()): ?>
				<li><a href="<?=base_url();?>Register"><i class="fa fa-edit"></i> สมัครสมาชิก</a></li>
				<li><a href="<?=base_url();?>Login"><i class="fa fa-sign-in"></i> เข้าสู่ระบบ</a></li>
			<?php
			else :
			if(!$this->userModel->isMember()):
			?>
				<li><a href="#"><i class="fa fa-user"></i> <?=$this->userModel->getUsername();?> </a></li>
				<li><a href="<?=base_url();?>admin/" style="color:green;"><i class="fa fa-tachometer"></i> จัดการระบบ </a></li>
				<li><a href="<?=base_url();?>Logout" style="color:red;"><i class="fa fa-sign-out"></i> ออกจากระบบ </a></li>
			<?php	else:	?>
				<li><a href="<?=base_url();?>Account"><i class="fa fa-user"></i> <?=$this->userModel->getUsername();?> </a></li>
				<li><a href="<?=base_url();?>Account" style="color:green;"><i class="fa fa-envelope"></i> มีการแจ้งเตือนใหม่ </a></li>
				<li><a href="<?=base_url();?>Cart"><i class="fa fa-shopping-cart"></i> ตะกร้าสินค้า </a></li>
				<li><a href="<?=base_url();?>Checkout"><i class="fa fa-check"></i> ชำระเงิน </a></li>
				<li><a href="<?=base_url();?>Logout" style="color:red;"><i class="fa fa-sign-out"></i> ออกจากระบบ </a></li>
			<?php	endif; endif;	?>
    </ul>
    </div>
  </div>
</nav>
<header>
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <div id="logo">
			<a href="<?=base_url();?>"><img src="<?=base_url();?>assets/imgs/logo.png" class="img-responsive" /></a>
        </div>
      </div>
	  <div class="col-sm-4">

	  </div>
    </div>
  </div>
</header>
<div class="container">
  <nav id="menu" class="navbar">
    <div class="navbar-header"><span id="category" class="visible-xs">เมนู</span>
      <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
    </div>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav">
		  <?php
		  $Categorys = $this->db->get('category');
		  foreach ($Categorys->result() as $Category)
		  {
		  	if(count($Category->categoryID) != 0) {
				$categoryParents = $this->db->where('categoryID', $Category->categoryID)->get('categoryParent')->result();
				if(count($categoryParents) > 0){
					echo '<li class="dropdown"><a href="'.base_url().'Categorys/'.$Category->categoryID.'" class="dropdown-toggle" data-toggle="dropdown">'.$Category->categoryName.'</a>';
					echo '<div class="dropdown-menu">';
            		echo '<div class="dropdown-inner">';
					echo '<ul class="list-unstyled">';
					foreach ($categoryParents as $categoryParent) {
						echo '<li><a href="'.base_url().'Categorys/'.$Category->categoryID.'/'.$categoryParent->categoryParentID.'">'.$categoryParent->categoryParentName.'</a></li>';
					}
					echo '</ul></div>';
					echo '<a href="'.base_url().'Categorys/'.$Category->categoryID.'" class="see-all"> ดู '.$Category->categoryName.' ทั้งหมด</a> </div>';
					echo '</li>';
				}else{
					echo '<li><a href="'.base_url().'Categorys/'.$Category->categoryID.'">'.$Category->categoryName.'</a></li>';
				}
			}
		  }
		  ?>
		</ul>
	</div>
</nav>
</div>
