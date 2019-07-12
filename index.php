<?php  
if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
	session_start();
	if( !empty( $_SESSION['products'][ $_POST['id'] ] ) ){
		$_SESSION['products'][ $_POST['id'] ] = (int)$_SESSION['products'][ $_POST['id'] ] + 1;
	}else{
		$_SESSION['products'][ $_POST['id'] ] = 1;
	}
	echo 1;
}else{
	require "parts/header.php"; 	
	$categorys = $dbh->query("SELECT * FROM category WHERE parent_id = 2");
	$products_sales = $dbh->query("SELECT * FROM products WHERE sales = 1");
	$products_new = $dbh->query("SELECT * FROM products WHERE new = 1");
	$products_popular = $dbh->query("SELECT * FROM products WHERE popular = 1");

?>
		<!-- Main Slider Area -->
		<div class="main-slider-area">
			<!-- Main Slider -->
			<div class="main-slider">
				<div class="slider">
					<div id="mainSlider" class="nivoSlider slider-image">
						<img src="img/4-8.jpg" alt="main slider" title="#htmlcaption1"/>
						<img src="img/1-8.jpg" alt="main slider" title="#htmlcaption2"/>
					</div>
					<!-- Slider Caption One -->
					<div id="htmlcaption1" class="nivo-html-caption slider-caption-1 hidden-xs">
						<div class="slider-progress"></div>									
						<div class="slide-text">
							<div class="middle-text">
								<div class="cap-title wow zoomInUp" data-wow-duration=".9s" data-wow-delay="0s">
									<h2>At Finally started...</h2>
								</div>
								<div class="cap-dec">
									<h1 class="wow zoomInUp" data-wow-duration="1.1s" data-wow-delay="0s">Huge sale</h1>
									<p class="wow zoomInUp" data-wow-duration="1.3s" data-wow-delay="0s"> up to 70% off Fahion collection Shop now</p>
								</div>	
								<div class="cap-readmore wow zoomInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
									<a href="#">Shop Now</a>
								</div>	
							</div>	
						</div>
					</div>
					<!-- Slider Caption Two -->
					<div id="htmlcaption2" class="nivo-html-caption slider-caption-2 hidden-xs">
						<div class="slider-progress"></div>					
						<div class="slide-text">
							<div class="middle-text">
								<div class="cap-title wow zoomInRight" data-wow-duration=".9s" data-wow-delay="0s">
									<h2>At Finally started...</h2>
								</div>
								<div class="cap-dec">
									<h1 class="cap-dec wow zoomInRight" data-wow-duration="1.1s" data-wow-delay="0s">Huge sale</h1>
									<p class="cap-dec wow zoomInRight" data-wow-duration="1.3s" data-wow-delay="0s"> up to 70% off Fahion collection Shop now</p>
								</div>	
								<div class="cap-readmore wow zoomInRight" data-wow-duration=".9s" data-wow-delay=".5s">
									<a href="#">Shop Now</a>
								</div>	
							</div>	
						</div>
					</div>
				</div>
			</div><!-- End Main Slider -->
		</div><!-- End Main Slider Area -->		
		<!-- Product Box Area -->
		<div class="product-box-area">
			<div class="container">
				<!-- Product Box -->
				<div class="product-box">
					<!-- Single Product Box -->
					<?php $i = 1; while ($category = $categorys->fetch()) { 
							if( $i == 2 ) {?>
					<div class="single-product-box single-product-box-two">
						<div class="product-box-content">				
							<h2><?=$category['name'];?></h2>
							<p> </p>
							<a href="/diplom_shop/shop.php?id=<?=$category['idCategory'];?>">Подробнее</a>
						</div>
						<div class="product-box-img">
							<a href="/diplom_shop/shop.php?id=<?=$category['idCategory'];?>"><img src="<?=$category['picture'];?>" alt="product"></a>							
						</div>
					</div>
						<?php	}else{ ?>
						<div class="single-product-box">
							<div class="product-box-img">
								<a href="/diplom_shop/shop.php?id=<?=$category['idCategory'];?>"><img src="<?=$category['picture'];?>" alt="product"></a>							
							</div>
							<div class="product-box-content">				
								<h2><?=$category['name'];?></h2>
								<p> </p>
								<a href="/diplom_shop/shop.php?id=<?=$category['idCategory'];?>">Подробнее</a>
							</div>
						</div>

						<?php } ?>
					<?php $i++;} ?>
					

				</div><!-- End Product Box -->
			</div>
		</div><!-- End Product Box Area -->
		<!-- Product area -->
		<div class="product-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- Product Top Bar -->
						<div class="product-top-bar customize-tab-bar">
							<!-- Tab Button -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#p-bestseller" data-toggle="tab"><i class="fa fa-pencil-square-o"></i>Популярное</a></li>
								
							</ul><!-- End Tab Button -->
						</div><!-- End Product Top Bar -->
					</div>
					<div class="col-md-12">
						<!-- Single Product area -->
						<div class="single-product-area c-carousel-button">	
							<!-- Tab Content -->
							<div class="tab-content">
								<!-- Tab Pane One -->
								<div class="tab-pane active" id="p-bestseller">
									<div class="row">
										<!-- Single Product Carousel-->
										<div id="single-product-bestseller" class="owl-carousel">
											<?php  while ($item_p = $products_popular->fetch()) { ?>
											<div class="col-md-3">
												<div class="single-product">
													<div class="single-product-img">
														<a href="/diplom_shop/product-details.php?id=<?=$item_p['idProducts'];?>">
															<img class="primary-img" src="<?=$item_p['pictures'];?>" alt="product">
														</a>
														<div class="product-status">
															<span class="product-new">New</span>
														</div>
													</div>
													<div class="single-product-content">
														<div class="product-content-head">
															<h2 class="product-title"><a href="#"><?=$item_p['name'];?></a></h2>
															<p class="product-price"><?=$item_p['price'];?> p</p>
														</div>
														<div class="product-bottom-action">
															<div class="product-action">
																<div class="action-button">
																	<button class="btn" type="button" data-id="<?=$item_p['idProducts'];?>"><i class="fa fa-shopping-cart"></i> <span>Добавить</span></button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<?php } ?>
										</div><!-- End Single Product Carousel-->
									</div>
								</div><!-- End Tab Pane One -->
								<!-- Tab Pane Two -->
								
											</div><!-- End Single Product Column -->
											<!-- Start Single Product Column -->
											
											</div><!-- End Single Product Column -->
											<!-- Start Single Product Column -->
									
											</div><!-- End Single Product Column -->
											<!-- Start Single Product Column -->
										
											</div><!-- End Single Product Column -->
											<!-- Start Single Product Column -->
											
											
								
										
										
															</div>
														</div>
													</div>
												</div>
											</div><!-- End Single Product Column -->
										</div><!-- End Single Product Carousel-->
									</div>
								</div><!-- End Tab Pane Three -->
							</div><!-- End Tab Content -->
						</div><!-- End Single Product area -->
					</div>
				</div>
			</div>
		</div><!-- End Product area -->
		<!-- Single Banner area -->
		<div class="single-banner-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="singler-banner banner-add">
							<a href="#">
								<img src="img/10946.jpg" alt="banner">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div><!-- End Single Banner area -->
		<!-- Brand Product area -->
		<div class="brand-products-area">
			<div class="container">
				<div class="row">
					<!-- Brand Product Column -->
					<div class="col-md-6 col-sm-6">
						<div class="brand-products brand-product-shoes c-carousel-button">
							<div class="row">
								<div class="col-md-12">
									<div class="products-head">
										<div class="products-head-title">
											
											<h2>НОВИНКА</h2>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<!-- Single Product Carousel-->
								<div id="product-brand-shoes" class="owl-carousel">
									<!-- Start Single Product Column -->
									<?php  while ($item_n = $products_new->fetch()) { ?>
										<div class="col-md-6">
											<div class="single-product">
												<div class="single-product-img">
													<a href="/diplom_shop/product-details.php?id=<?=$item_n['idProducts'];?>">
														<img class="primary-img" src="<?=$item_n['pictures'];?>" alt="product">
														
													</a>
												</div>
												<div class="single-product-content">
													<div class="product-content-head">
														<h2 class="product-title"><a href="#"><?=$item_n['name'];?></a></h2>
														<p class="product-price"><?=$item_n['price'];?>р</p>
													</div>
													<div class="product-bottom-action">
														<div class="product-action">
															<div class="action-button">
																<button class="btn" type="button" data-id="<?=$item_n['idProducts'];?>"><i class="fa fa-shopping-cart"></i> <span>Добавить</span></button>
															</div>
															
														</div>
													</div>
												</div>
											</div>
										</div><!-- End Single Product Column -->
									<?php } ?>
								</div><!-- End Single Product Carousel -->
							</div>
						</div>
					</div><!-- End Brand Products Column -->
					<!-- Brand Product Column -->
					<div class="col-md-6 col-sm-6">
						<div class="brand-products c-carousel-button">
							<div class="row">
								<div class="col-md-12">
									<div class="products-head">
										
											<div class="products-head-title">
											<h2>РАСПРОДАЖА</h2>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<!-- Single Product Carousel-->
								<div id="product-brand-bag" class="owl-carousel">
									<!-- Start Single Product Column -->
									<?php  while ($item_s = $products_sales->fetch()) { ?>
									<div class="col-md-6">
										<div class="single-product">
											<div class="single-product-img">
												<a href="/diplom_shop/product-details.php?id=<?=$item_s['idProducts'];?>">
													<img class="primary-img" src="<?=$item_s['pictures'];?>" alt="product">
													
												</a>
											</div>
											<div class="single-product-content">
												<div class="product-content-head">
													<h2 class="product-title"><a href="#"><?=$item_s['name'];?></a></h2>
													<p class="product-price"><?=$item_s['price'];?>p</p>
												</div>
												<div class="product-bottom-action">
													<div class="product-action">
														<div class="action-button">
															<button class="btn" type="button" data-id="<?=$item_s['idProducts'];?>"><i class="fa fa-shopping-cart"></i> <span>Добавить</span></button>
														</div>
														
													</div>
												</div>
											</div>
										</div>
									</div><!-- End Single Product Column -->
									<?php } ?>
								</div><!-- End Single Product Carousel-->
							</div>
						</div>
					</div><!-- End Brand Product Column -->
				</div>
			</div>
		</div><!-- End Brand Product area -->
		<!-- About-add area -->
		<div class="about-add-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-3 col-sm-5">
						<div class="about-add-img banner-add">
							<a href="#">
								
							
						</div>
					</div>
					
				</div>
			</div>
		</div><!-- End About-add area -->
		<!-- Fetured Product area -->
		
		<!-- Brand Logo area -->
		
<?php require "parts/footer.php"; }?>