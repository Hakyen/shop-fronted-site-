<?php 
	require "parts/header.php";
	if( isset( $_GET['id'] ) ){
		$products = $dbh->query("SELECT * FROM products WHERE category_id = '" . $_GET['id'] . "'");
	}else{
		$products = $dbh->query("SELECT * FROM products");
	}
 ?>
		<!-- Breadcurb Area -->
		<div class="breadcurb-area">
			<div class="container">
				<ul class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Women</a></li>
					<li>Clother</li>
				</ul>
			</div>
		</div><!-- End Breadcurb Area -->
		<!-- Shop Product Area -->
		<div class="shop-product-area">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-12">
						<!-- Shop Product Left -->
						<div class="shop-product-left">
							<!-- Shop Layout Area -->
							
							<div class="shop-layout-area">
								<div class="layout-title">
									
								</div>
								
								<div class="Популярные запросы">
									<h2>Популярные запросы</h2>
									<div class="tag-list">
										<ul>
											<li><a href="#">ЗЕРКАЛО</a></li>
											<li><a href="#">ПОДУШКА</a></li>
											<li><a href="#">КРУЖКА</a></li>
											<li><a href="#">СТОЛ</a></li>
											<li><a href="#">ЧАСЫ</a></li>
											<li><a href="#">БЛЮДО</a></li>
											<li><a href="#">ВАЗА</a></li>
											
										</ul>
									</div>
									<div class="tag-action">
										<ul>
											<li><a href="#">View all tags</a></li>
										</ul>
									</div>
								</div>
								<div class="shop-layout-banner banner-add">
									<a href="#">
										<img alt="banner" src="img/banner/b18.jpg">
									</a>
								</div>
							</div><!-- End Shop Layout Area -->
						</div><!-- End Shop Product Left -->
					</div>
					<div class="col-md-9 col-sm-12">
						<!-- Shop Product Right -->
						<div class="shop-product-right">
							<div class="product-tab-area">
								<!-- Tab Bar -->
								<div class="tab-bar">
									<div class="tab-bar-inner">
										<ul class="nav nav-tabs" role="tablist">
											
											<li><a href="#shop-list" data-toggle="tab"><i class="fa fa-th-list"></i>List</a></li>
										</ul>
									</div>
									<div class="toolbar">
										<div class="sorter">
											<div class="sort-by">
												<label>Sort By</label>
												<select>
													<option value="position">Position</option>
													<option value="name">Name</option>
													<option value="price">Price</option>
												</select>
												<a href="#"><i class="fa fa-long-arrow-up"></i></a>
											</div>
										</div>
										<div class="pager-list">
											<div class="limiter">
												<label>Show</label>
												<select>
													<option value="9">12</option>
													<option value="12">15</option>
													<option value="24">18</option>
													<option value="36">36</option>
												</select>
												per page
											</div>
										</div>
									</div>
								</div><!-- End Tab Bar -->
								<!-- Tab Content -->
								<div class="tab-content">
									<div class="tab-pane active" id="shop-product">
											<div class="row tab-content-row">
										<?php foreach ($products as $key => $item) { ?>

										
	

											<div class="col-md-4 col-sm-4">
												<div class="single-product">
													<div class="single-product-img">
														<a href="#">
															<img class="primary-img" src="<?=$item['pictures'];?>" alt="product">
														</a>
													</div>
													<div class="single-product-content">
														<div class="product-content-head">
															<h2 class="product-title"><a href="#"><?=$item['name'];?></a></h2>
															<p class="product-price"><?=$item['price'];?>p</p>
														</div>
														<div class="product-bottom-action">
															<div class="product-action">
																<div class="action-button">
																	<button class="btn" type="button" data-id="<?=$item['idProducts'];?>"><i class="fa fa-shopping-cart"></i> <span>Add to bag</span></button>
																</div>
																<div class="action-view">
																	<button type="button" class="btn" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i>Quick view</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>



									<?php } ?>
											</div>
									</div>

								</div><!-- End Tab Content -->
								<!-- Tab Bar -->

							</div>
						</div><!-- End Shop Product Left -->
					</div>
				</div>
			</div>
		</div><!-- End Shop Product Area -->
		<!-- Brand Logo area -->
		<div class="brand-logo-area">
			<div class="container">
				<div class="brand-logo">
					<div class="brand-logo-title">
						<h2>Logo brands</h2>
					</div>
					<div id="brands-logo" class="owl-carousel">
						<div class="single-brand-logo">
							<a href="#">
								<img src="img/brand-logo/blogo1.png" alt="logo">
							</a>
						</div>
						<div class="single-brand-logo">
							<a href="#">
								<img src="img/brand-logo/blogo5.png" alt="logo">
							</a>
						</div>
						<div class="single-brand-logo">
							<a href="#">
								<img src="img/brand-logo/blogo2.png" alt="logo">
							</a>
						</div>
						<div class="single-brand-logo">
							<a href="#">
								<img src="img/brand-logo/blogo3.png" alt="logo">
							</a>
						</div>
						<div class="single-brand-logo">
							<a href="#">
								<img src="img/brand-logo/blogo4.png" alt="logo">
							</a>
						</div>
						<div class="single-brand-logo">
							<a href="#">
								<img src="img/brand-logo/blogo1.png" alt="logo">
							</a>
						</div>
						<div class="single-brand-logo">
							<a href="#">
								<img src="img/brand-logo/blogo5.png" alt="logo">
							</a>
						</div>
						<div class="single-brand-logo">
							<a href="#">
								<img src="img/brand-logo/blogo3.png" alt="logo">
							</a>
						</div>
						<div class="single-brand-logo">
							<a href="#">
								<img src="img/brand-logo/blogo4.png" alt="logo">
							</a>
						</div>
						<div class="single-brand-logo">
							<a href="#">
								<img src="img/brand-logo/blogo2.png" alt="logo">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div><!-- End Brand Logo area -->
<?php require "parts/footer.php"?>