<?php 
	require "parts/header.php";
	$id = $_GET['id'];
	$product = $dbh->query("SELECT * FROM products WHERE idProducts = '" . $id . "'")->fetch();
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?=$product['name'];?></title>
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
        <link rel="stylesheet" href="style.css">
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
		
		<!-- Breadcurb Area -->

		<!-- Single Product details Area -->
		<div class="single-product-detaisl-area">
			<!-- Single Product View Area -->
			<div class="product-view-area">
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-sm-12 col-xs-12">
							<!-- Single Product View -->
							<div class="single-procuct-view">
								<!-- Simple Lence Gallery Container -->
								<div class="simpleLens-gallery-container" id="p-view">
									<div class="simpleLens-container tab-content">
										<div class="tab-pane active" id="p-view-1">
												<div class="simpleLens-big-image-container">
													<a class="simpleLens-lens-image" data-lens-image="<?=$product['pictures'];?>">
														<img src="<?=$product['pictures'];?>" class="simpleLens-big-image" alt="productd">
													</a>
												</div>
										</div>
									</div>
									<!-- Simple Lence Thumbnail -->
									<div class="simpleLens-thumbnails-container">
										<h2>More Views</h2>
										<div id="single-product" class="owl-carousel">
											<ul class="nav nav-tabs" role="tablist">
												<li class="active"><a href="#p-view-1" role="tab" data-toggle="tab"><img src="img/product/single-product/thumbnail/1.jpg" alt="productd"></a></li>
												<li class=""><a href="#p-view-2" role="tab" data-toggle="tab"><img src="img/product/single-product/thumbnail/2.jpg" alt="productd"></a></li>
												<li class="last-li"><a href="#p-view-3" role="tab" data-toggle="tab"><img src="img/product/single-product/thumbnail/3.jpg" alt="productd"></a></li>
												<li class="hidden-md hidden-xs"><a href="#p-view-4" role="tab" data-toggle="tab"><img src="img/product/single-product/thumbnail/4.jpg" alt="productd"></a></li>
											</ul>
											<ul class="nav nav-tabs" role="tablist">
												<li class=""><a href="#p-view-5" role="tab" data-toggle="tab"><img src="img/product/single-product/thumbnail/1.jpg" alt="productd"></a></li>
												<li class=""><a href="#p-view-6" role="tab" data-toggle="tab"><img src="img/product/single-product/thumbnail/2.jpg" alt="productd"></a></li>
												<li class="last-li"><a href="#p-view-7" role="tab" data-toggle="tab"><img src="img/product/single-product/thumbnail/3.jpg" alt="productd"></a></li>
												<li class="hidden-md hidden-xs"><a href="#p-view-8" role="tab" data-toggle="tab"><img src="img/product/single-product/thumbnail/4.jpg" alt="productd"></a></li>
											</ul>
										</div>
									</div><!-- End Simple Lence Thumbnail -->
								</div><!-- End Simple Lence Gallery Container -->
							</div><!-- End Single Product View -->
						</div>
						<div class="col-md-4 col-sm-8 col-xs-12">
							<!-- Single Product Content View -->
							<div class="single-product-content-view">
								<h2><?=$product['name'];?></h2>
								<div class="short-description">
									<div class="std">
										<?=$product['description'];?>
									</div>
								</div>
								<div class="price-box">
									<span class="regular-price">
										<span class="price"><?=$product['price'];?>р</span> 
									</span>
								</div>
								<p class="availability in-stock">Availability: <span>In stock</span></p>
								<div class="add-to-box add-to-box2">
									<div class="actions-inner">
										<ul class="add-to-links">
											<li><a class="link-wishlist" title="Add to Wishlist" href="#"><i class="fa fa-star"></i>Add to Wishlist</a></li>
											<li><a class="link-compare" title="Add to Compare" href="#"><i class="fa fa-pie-chart"></i> Add to Compare</a></li>
											<li class="email-friend" title="Email to a Friend"><a href="#"><i class="fa fa-envelope"></i> Email a Friend</a></li>
										</ul>
									</div>
									<div class="product-select product-color">
										<h2>Color <sup>*</sup></h2>
										<select>
											<option>--Please Select--</option>
											<option>Green +$2.00</option>
											<option>Blue +$1.00</option>
											<option>White +$3.00</option>
										</select>
									</div>
									<div class="product-select product-size">
										<h2>Size <sup>*</sup></h2>
										<select>
											<option>--Please Select--</option>
											<option>XL +$3.00</option>
											<option>L +$2.00</option>
											<option>M +$1.00</option>
										</select>
									</div>
									<div class="price-box">
										<span class="regular-price">
											<span class="price"><b>$155.00</b></span> 
										</span>
									</div>
									<div class="add-to-cart">
										<div class="input-content">
											<label for="qty">Qty:</label>
											<input type="button" class="qty-decrease" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) qty_el.value--;return false;" value="-">
											<input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
											<input type="button" class="qty-increase" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty )) qty_el.value++;return false;" value="+">
										</div>
										<button type="button" class="btn"><span>Add to Cart</span></button>
									</div>
								</div>
							</div><!-- End Single Product Content View -->
						</div>
						<div class="col-md-3 col-sm-4 col-xs-12">
							<!-- Single Product Right Banner -->
							<div class="single-product-right-banner">
								<h2>Compare</h2>
								<p>You have no items to compare.</p>
								<div class="banner-add">
									<a href="#">
										<img alt="banner" src="img/banner/b18.png">
									</a>
								</div>
							</div><!-- End Single Product Right Banner -->
						</div>
					</div>
				</div>
			</div><!-- End Single Product View Area -->
			<!-- Single Description Tab -->
			<div class="single-product-description">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="product-description-tab">
								<!-- tab bar -->
								<ul class="nav nav-tabs" role="tablist">
									<li class="active"><a href="#product-des" data-toggle="tab">Product Description</a></li>
									<li><a href="#product-rev" data-toggle="tab">Reviews</a></li>
									<li><a href="#product-tag" data-toggle="tab">Product Tags</a></li>
								</ul>
								<!-- Tab Content -->
								<div class="tab-content">
									<div class="tab-pane active" id="product-des">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue. Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat a felis. Suspendisse aliquet urna pretium eros convallis interdum. Quisque in arcu id dui vulputate mollis eget non arcu. Aenean et nulla purus. Mauris vel tellus non nunc mattis lobortis. </p>
									</div>
									<div class="tab-pane" id="product-rev">
										<div class="row">
											<div class="col-md-6">
												<div class="product-rev-left">
													<p class="product-action">
														<a href="http://bootexperts.com/">BootExperts</a> Review by <span>Plazathemes</span>
													</p>
													<div class="product-ratting">
														<table class="">
															<tr>
																<td>Quality</td>
																<td>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																</td>
															</tr>
															<tr>
																<td>Price</td>
																<td>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																</td>
															</tr>
															<tr>
																<td>Value</td>
																<td>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																</td>
															</tr>
														</table>
													</div>
													<p>BootExperts <span class="posted">(Posted on 01/02/2016)</span></p>
												</div>
											</div>
											<div class="col-md-6">
												<div class="product-rev-right">
													<h3>You're reviewing: Donec ac tempus <span>*</span></h3>
													<h3>How do you rate this product? </h3>
													<div class="product-rev-right-table table-responsive">
														<table>
															<thead>
																<tr class="first last">
																	<th>&nbsp;</th>
																	<th><span class="nobr">1 star</span></th>
																	<th><span class="nobr">2 stars</span></th>
																	<th><span class="nobr">3 stars</span></th>
																	<th><span class="nobr">4 stars</span></th>
																	<th><span class="nobr">5 stars</span></th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<th>Value</th>
																	<th><input type="radio" class="radio" name="ratings[1]"></th>
																	<th><input type="radio" class="radio" name="ratings[1]"></th>
																	<th><input type="radio" class="radio" name="ratings[1]"></th>
																	<th><input type="radio" class="radio" name="ratings[1]"></th>
																	<th><input type="radio" class="radio" name="ratings[1]"></th>
																</tr>
																<tr>
																	<th>Quality</th>
																	<th><input type="radio" class="radio" name="ratings[2]"></th>
																	<th><input type="radio" class="radio" name="ratings[2]"></th>
																	<th><input type="radio" class="radio" name="ratings[2]"></th>
																	<th><input type="radio" class="radio" name="ratings[2]"></th>
																	<th><input type="radio" class="radio" name="ratings[2]"></th>
																</tr>
																<tr>
																	<th>Price</th>
																	<th><input type="radio" class="radio" name="ratings[3]"></th>
																	<th><input type="radio" class="radio" name="ratings[3]"></th>
																	<th><input type="radio" class="radio" name="ratings[3]"></th>
																	<th><input type="radio" class="radio" name="ratings[3]"></th>
																	<th><input type="radio" class="radio" name="ratings[3]"></th>
																</tr>
															</tbody>
														</table>
													</div>
													<div class="porduct-rev-right-form">
														<form action="#" class="form-horizontal product-form">
															<div class="form-goroup">
																<label>Nickname <sup>*</sup></label>
																<input type="text" class="form-control" required="required">
															</div>
															<div class="form-goroup">
																<label>Summary of Your Review <sup>*</sup></label>
																<input type="text" class="form-control" required="required">
															</div>
															<div class="form-goroup">
																<label>Review <sup>*</sup></label>
																<textarea class="form-control" rows="5" required="required"></textarea>
															</div>
															<div class="form-goroup form-group-button">
																<button class="btn" value="submit">Submit Review</button>
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="product-tag">
										<h2>Other people marked this product with these tags:</h2>
										<p class="product-action">
											<a href="http://bootexperts.com/">Clothing </a> <span>(3)</span>
										</p>
										<form action="#" class="product-form">
											<label>Add Your Tags:</label>
											<input type="text" class="form-control" required="required">
											<button class="btn" value="submit">Add Tags</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- End Single Description Tab -->
			<!-- Upsell Product area area -->
			<div class="upsell-product-area product-another">
				<div class="container">
					<div class="row">
						<!-- Brand Product Column -->
						<div class="col-md-12">
							<div class="brand-products c-carousel-button">
								<div class="row">
									<div class="col-md-12">
										<div class="products-head">
											<div class="products-head-title">
												<i class="fa fa-picture-o"></i>
												<h2>UpSell Products</h2>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<!-- Single Product Carousel-->
									<div id="single-product-upsell" class="owl-carousel">
										<!-- Start Single Product Column-->
										<div class="col-md-3">
											<div class="single-product">
												<div class="single-product-img">
													<a href="#">
														<img class="primary-img" src="img/product/sp9.jpg" alt="product">
													</a>
													<div class="product-status">
														<span class="product-new">New</span>
													</div>
												</div>
												<div class="single-product-content another-content">
													<div class="ratings">
														<div class="rating-box">
															<ul>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
															</ul>
														</div>
														<p class="rating-links">
															<a href="#">1 Review(s)</a>
														</p>
													</div>
													<div class="product-content-head">
														<h2 class="product-title"><a href="#">Cras neque metus</a></h2>
														<p class="product-price">$155.00</p>
													</div>
												</div>
											</div>
										</div><!-- End Single Product Column -->
										<!-- Start Single Product Column -->
										<div class="col-md-3">
											<div class="single-product">
												<div class="single-product-img">
													<a href="#">
														<img class="primary-img" src="img/product/sp7.jpg" alt="product">
													</a>
													<div class="product-status">
														<span class="product-sale">Sale</span>
													</div>
												</div>
												<div class="single-product-content another-content">
													<div class="ratings">
														<div class="rating-box">
															<ul>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
															</ul>
														</div>
														<p class="rating-links">
															<a href="#">3 Review(s)</a>
														</p>
													</div>
													<div class="product-content-head">
														<h2 class="product-title"><a href="#">Cras neque metus</a></h2>
														<p class="product-price">$155.00</p>
													</div>
												</div>
											</div>
										</div><!-- End Single Product Column -->
										<!-- Start Single Product Column -->
										<div class="col-md-3">
											<div class="single-product">
												<div class="single-product-img">
													<a href="#">
														<img class="primary-img" src="img/product/sp5.jpg" alt="product">
													</a>
													<div class="product-status">
														<span class="product-new">New</span>
													</div>
												</div>
												<div class="single-product-content another-content">
													<div class="ratings">
														<div class="rating-box">
															<ul>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
															</ul>
														</div>
														<p class="rating-links">
															<a href="#">1 Review(s)</a>
														</p>
													</div>
													<div class="product-content-head">
														<h2 class="product-title"><a href="#">Cras neque metus</a></h2>
														<p class="product-price">$155.00</p>
													</div>
												</div>
											</div>
										</div><!-- End Single Product Column -->
										<!-- Start Single Product Column -->
										<div class="col-md-3">
											<div class="single-product">
												<div class="single-product-img">
													<a href="#">
														<img class="primary-img" src="img/product/sp8.jpg" alt="product">
													</a>
													<div class="product-status">
														<span class="product-new">New</span>
													</div>
												</div>
												<div class="single-product-content another-content">
													<div class="ratings">
														<div class="rating-box">
															<ul>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
															</ul>
														</div>
														<p class="rating-links">
															<a href="#">4 Review(s)</a>
														</p>
													</div>
													<div class="product-content-head">
														<h2 class="product-title"><a href="#">Cras neque metus</a></h2>
														<p class="product-price">$155.00</p>
													</div>
												</div>
											</div>
										</div><!-- End Single Product Column -->
									</div><!-- End Single Product Carousel -->
								</div>
							</div>
						</div><!-- End Brand Products Column -->
					</div>
				</div>
			</div><!-- End Upsell Product area area -->
			<!-- Related Product area area -->
			<div class="related-product-area">
				<div class="container">
					<div class="row">
						<!-- Brand Product Column -->
						<div class="col-md-12">
							<div class="brand-products c-carousel-button">
								<div class="row">
									<div class="col-md-12">
										<div class="products-head">
											<div class="products-head-title">
												<i class="fa fa-picture-o"></i>
												<h2>Related Products</h2>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<!-- Single Product Carousel-->
									<div id="single-product-related" class="owl-carousel">
										<!-- Start Single Product Column-->
										<div class="col-md-3">
											<div class="single-product">
												<div class="single-product-img">
													<a href="#">
														<img class="primary-img" src="img/product/sp12.jpg" alt="product">
													</a>
													<div class="product-status">
														<span class="product-new">New</span>
													</div>
												</div>
												<div class="single-product-content another-content another-content-2">
													<div class="ratings">
														<div class="rating-box">
															<ul>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
															</ul>
														</div>
													</div>
													<div class="product-content-head">
														<h2 class="product-title"><a href="#">Cras neque metus</a></h2>
														<p class="product-price">$155.00</p>
													</div>
												</div>
											</div>
										</div><!-- End Single Product Column -->
										<!-- Start Single Product Column -->
										<div class="col-md-3">
											<div class="single-product">
												<div class="single-product-img">
													<a href="#">
														<img class="primary-img" src="img/product/sp13.jpg" alt="product">
													</a>
													<div class="product-status">
														<span class="product-sale">Sale</span>
													</div>
												</div>
												<div class="single-product-content another-content another-content-2">
													<div class="ratings">
														<div class="rating-box">
															<ul>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
															</ul>
														</div>
													</div>
													<div class="product-content-head">
														<h2 class="product-title"><a href="#">Cras neque metus</a></h2>
														<p class="product-price">$155.00</p>
													</div>
												</div>
											</div>
										</div><!-- End Single Product Column -->
										<!-- Start Single Product Column -->
										<div class="col-md-3">
											<div class="single-product">
												<div class="single-product-img">
													<a href="#">
														<img class="primary-img" src="img/product/sp14.jpg" alt="product">
													</a>
													<div class="product-status">
														<span class="product-new">New</span>
													</div>
												</div>
												<div class="single-product-content another-content another-content-2">
													<div class="ratings">
														<div class="rating-box">
															<ul>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
															</ul>
														</div>
													</div>
													<div class="product-content-head">
														<h2 class="product-title"><a href="#">Cras neque metus</a></h2>
														<p class="product-price">$155.00</p>
													</div>
												</div>
											</div>
										</div><!-- End Single Product Column -->
										<!-- Start Single Product Column -->
										<div class="col-md-3">
											<div class="single-product">
												<div class="single-product-img">
													<a href="#">
														<img class="primary-img" src="img/product/sp18.jpg" alt="product">
													</a>
													<div class="product-status">
														<span class="product-new">New</span>
													</div>
												</div>
												<div class="single-product-content another-content another-content-2">
													<div class="ratings">
														<div class="rating-box">
															<ul>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
															</ul>
														</div>
													</div>
													<div class="product-content-head">
														<h2 class="product-title"><a href="#">Cras neque metus</a></h2>
														<p class="product-price">$155.00</p>
													</div>
												</div>
											</div>
										</div><!-- End Single Product Column -->
										<!-- Start Single Product Column-->
										<div class="col-md-3">
											<div class="single-product">
												<div class="single-product-img">
													<a href="#">
														<img class="primary-img" src="img/product/sp2.jpg" alt="product">
													</a>
													<div class="product-status">
														<span class="product-new">New</span>
													</div>
												</div>
												<div class="single-product-content another-content another-content-2">
													<div class="ratings">
														<div class="rating-box">
															<ul>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
															</ul>
														</div>
													</div>
													<div class="product-content-head">
														<h2 class="product-title"><a href="#">Cras neque metus</a></h2>
														<p class="product-price">$155.00</p>
													</div>
												</div>
											</div>
										</div><!-- End Single Product Column -->
										<!-- Start Single Product Column -->
										<div class="col-md-3">
											<div class="single-product">
												<div class="single-product-img">
													<a href="#">
														<img class="primary-img" src="img/product/sp3.jpg" alt="product">
													</a>
													<div class="product-status">
														<span class="product-sale">Sale</span>
													</div>
												</div>
												<div class="single-product-content another-content another-content-2">
													<div class="ratings">
														<div class="rating-box">
															<ul>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
															</ul>
														</div>
													</div>
													<div class="product-content-head">
														<h2 class="product-title"><a href="#">Cras neque metus</a></h2>
														<p class="product-price">$155.00</p>
													</div>
												</div>
											</div>
										</div><!-- End Single Product Column -->
										<!-- Start Single Product Column -->
										<div class="col-md-3">
											<div class="single-product">
												<div class="single-product-img">
													<a href="#">
														<img class="primary-img" src="img/product/sp1.jpg" alt="product">
													</a>
													<div class="product-status">
														<span class="product-new">New</span>
													</div>
												</div>
												<div class="single-product-content another-content another-content-2">
													<div class="ratings">
														<div class="rating-box">
															<ul>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
															</ul>
														</div>
													</div>
													<div class="product-content-head">
														<h2 class="product-title"><a href="#">Cras neque metus</a></h2>
														<p class="product-price">$155.00</p>
													</div>
												</div>
											</div>
										</div><!-- End Single Product Column -->
										<!-- Start Single Product Column -->
										<div class="col-md-3">
											<div class="single-product">
												<div class="single-product-img">
													<a href="#">
														<img class="primary-img" src="img/product/sp6.jpg" alt="product">
													</a>
													<div class="product-status">
														<span class="product-new">New</span>
													</div>
												</div>
												<div class="single-product-content another-content another-content-2">
													<div class="ratings">
														<div class="rating-box">
															<ul>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
															</ul>
														</div>
													</div>
													<div class="product-content-head">
														<h2 class="product-title"><a href="#">Cras neque metus</a></h2>
														<p class="product-price">$155.00</p>
													</div>
												</div>
											</div>
										</div><!-- End Single Product Column -->
									</div><!-- End Single Product Carousel -->
								</div>
							</div>
						</div><!-- End Brand Products Column -->
					</div>
				</div>
			</div><!-- End Related Product area -->
		</div><!-- End Single Product details Area -->
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
		<!-- Footer area -->
		<div class="footer-area">
			<!-- Footer Top -->
		<?php require "parts/footer.php"?>