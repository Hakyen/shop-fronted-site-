<?php 

	include("./inc/db.php");
	$category = $dbh->query("SELECT * FROM category WHERE parent_id = 0");
	if( isset( $_SESSION['products'] ) ){
		$p = 0;
		foreach ( $_SESSION['products'] as $count ) {
			$p += $count;
		}
	}else{
		$p = 0;
	}
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home || Minoan</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon
		============================================ -->		
        <link rel="shortcut icon" type="image/x-icon" href="img/logo/favicon.ico">
		
		<!-- Google Fonts
		============================================ -->		
       <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	   <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	   
		<!-- Bootstrap CSS
		============================================ -->		
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Font Awesome CSS
		============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- Mean Menu CSS
		============================================ -->      
        <link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- owl.carousel CSS
		============================================ -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
		<!-- nivo-slider css
		============================================ --> 
		<link rel="stylesheet" href="css/nivo-slider.css">
		<!-- Price slider css
		============================================ --> 
		<link rel="stylesheet" href="css/jquery-ui-slider.css">
		<!-- Simple Lence css
		============================================ --> 
		<link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">
		<link rel="stylesheet" type="text/css" href="css/jquery.simpleGallery.css">
		<!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- normalize CSS
		============================================ -->
        <link rel="stylesheet" href="css/normalize.css">
		<!-- main CSS
		============================================ -->
        <link rel="stylesheet" href="css/main.css">
		<!-- style CSS
		============================================ -->
        <link rel="stylesheet" href="style.css?v=<?=time();?>">
		<!-- responsive CSS
		============================================ -->
        <link rel="stylesheet" href="css/responsive.css">
		<!-- modernizr JS
		============================================ -->		
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
		<!-- Header Area -->
        <div class="header-area">
			<!-- Header top bar -->
			<div class="header-top-bar">
				<div class="container">
					<div class="header-top-inner">
						<div class="row">
							<div class="col-md-8 col-sm-12">
								<div class="header-top-left">
									<div class="phone">
										<label>Позвонить нам:</label> 8(925)977-31-45
									</div>
									<div class="e-mail">
										<label>Наша поста:</label> admin@bootexperts.com
									</div>
									<!-- Header Link Area -->
									<div class="header-link-area">
										<div class="header-link">
											
											
										
												<li><a hef="#">Account <span class="caret"></span></a>
													<ul>
														
														<li><a href="my-account.php">Войти в аккаунт</a></li>
													</ul>
												</li>
											</ul>
										</div>
									</div><!-- End Header Link Area -->
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="header-top-right">
									<!-- Header Social Icon -->
									<div class="header-social-icon">
										<ul>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-youtube"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- End Header Top bar -->
			<!-- Header bottom -->
			<div class="header-bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-12">
							<!-- Header Search -->
							<div class="header-search">
								<form action="#">
									<input type="text" placeholder="ПОИСК...">
									<button type="button" class="btn"><i class="fa fa-search"></i></button>
								</form>
							</div>
						</div>
						<div class="col-md-4 col-sm-12">
							<!-- Header logo -->
							<div class="header-logo">
								<a href="index.php"><img src="img/Без имени-1.jpg" alt="logo"></a>
							</div>
						</div>
						<div class="col-md-4 col-sm-12">
							<!-- Header Cart Area-->
							<div class="header-cart-area">
								<div class="header-cart">
									<ul>
										<li>
											<a href="/diplom_shop/cart.php">
												<i class="fa fa-shopping-cart"></i>
												<span class="my-cart">Корзина</span>
												<span class="badge"><?=$p;?></span>
											</a>
										</li>
									</ul>
								</div>
							</div><!-- End Header Cart Area-->
						</div>
					</div>
				</div>
			</div><!-- End Header bottom -->
		</div><!-- End Header Area -->
        <!-- Main Menu Area -->
		<div class="main-menu-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- Main Menu -->
						<div class="main-menu hidden-sm hidden-xs">
							<nav>
								<ul class="main-ul">
									<?php while ($data = $category->fetch()) { ?>
										<li class="sub-menu-li"><a href="/diplom_shop/<?=$data['alias']; ?>.php" class="active"><?=$data['name']; ?> </a></li>
									<?php } ?>
								</ul>
							</nav>
						</div><!-- End Main Menu -->
						<!-- Start Mobile Menu -->
						<div class="mobile-menu hidden-md hidden-lg">
							<nav>
								<ul>
									<?php while ($data = $category->fetch()) { ?>
										<li class=""><a href="index.php"><?=$data['name']; ?></a></li>
									<?php } ?>
								</ul>
							</nav>
						</div><!-- End Mobile Menu -->
					</div>
				</div>
			</div>
		</div><!-- End Main Menu Area -->