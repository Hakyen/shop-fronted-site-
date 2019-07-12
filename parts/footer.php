<!-- Footer area -->
		<div class="footer-area">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<!-- Footer Left -->
							<div class="footer-left">
								<!-- Footer Logog -->
								<div class="footer-logo">
									<a href="index.html"><img src="img/111111.png" alt="logo"></a>
								</div>
								<div class="footer-static-content">
									<p>© 2018 Компания 1Decor</p>
								</div>
								<div class="footer-payment">
									
									
								</div>
							</div><!-- End Footer Left -->
						</div>
						<div class="col-md-8 footer-right-col">
							<!-- Footer Right -->
							<div class="footer-right">
								<div class="footer-newsletter">
									<form action="#">
										<h2>НОВОСТНАЯ РАССЫЛКА</h2>
										<input type="text" title="Sign up for our newsletter" required>
										<button type="submit">ПОДПИСЫВАЙТЕСЬ</button>
									</form>
								</div>
							
									
																</div>
							</div><!-- End Footer Left -->
						</div>
					</div>
				</div>
			</div><!-- End Footer Top -->
			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="container">
					<!-- Copyright -->
					<div class="copyright">
						<p>Copyright &copy; <a href="http://1Decor.com/">1Decor</a> All Rights Reserved.</p>
					</div>
				</div>
			</div><!-- End Footer Bottom -->
		</div><!-- End Footer area -->
		<!-- QUICKVIEW PRODUCT -->
		<div id="quickview-wrapper">
			<!-- Modal -->
			<div class="modal fade" id="productModal" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body">
							<div class="modal-product">
								<div class="product-images">
									<div class="main-image images">
										<img alt="product" src="img/product/sp2.jpg">
									</div>
								</div><!-- .product-images -->
								
								<div class="product-info">
									<h1>Cras neque metus</h1>
									<div class="price-box">
										<p class="price"><span class="special-price"><span class="amount">$155.00</span></span></p>
									</div>
									<a href="product-details.html" class="see-all">See all features</a>
									<div class="quick-add-to-cart">
										<form method="post" class="cart">
											<div class="add-to-box add-to-box2">
											<div class="add-to-cart">
												<div class="input-content">
													<label for="qty">Qty:</label>
													<input type="button" value="-" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) qty_el.value--;return false;" class="qty-decrease">
													<input type="text" name="qty" id="qty" maxlength="12" value="1" title="Qty" class="input-text qty">
													<input type="button" value="+" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty )) qty_el.value++;return false;" class="qty-increase">
												</div>
												<button class="btn" type="button"><span>Add to cart</span></button>
											</div>
										</div>
										</form>
									</div>
									<div class="quick-desc">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.
									</div>
									<div class="social-sharing">
										<div class="widget widget_socialsharing_widget">
											<h3 class="widget-title-modal">Share this product</h3>
											<ul class="social-icons">
												<li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
												<li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
												<li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
												<li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
												<li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
								</div><!-- .product-info -->
							</div><!-- .modal-product -->
						</div><!-- .modal-body -->
					</div><!-- .modal-content -->
				</div><!-- .modal-dialog -->
			</div><!-- END Modal -->
		</div><!-- END QUICKVIEW PRODUCT -->
				
		
		
		
		
		
		<!-- jquery
		============================================ -->		
        <script src="js/vendor/jquery-1.11.3.min.js"></script>
		<!-- bootstrap JS
		============================================ -->		
        <script src="js/bootstrap.min.js"></script>
		<!-- nivo slider js
		============================================ --> 
		<script src="js/jquery.nivo.slider.pack.js"></script>
		<!-- Mean Menu js
		============================================ -->         
        <script src="js/jquery.meanmenu.min.js"></script>
		<!-- wow JS
		============================================ -->		
        <script src="js/wow.min.js"></script>
		<!-- price-slider JS
		============================================ -->		
        <script src="js/jquery-price-slider.js"></script>
		<!-- Simple Lence JS
		============================================ -->
		<script type="text/javascript" src="js/jquery.simpleGallery.min.js"></script>
		<script type="text/javascript" src="js/jquery.simpleLens.min.js"></script>	
		<!-- owl.carousel JS
		============================================ -->		
        <script src="js/owl.carousel.min.js"></script>
		<!-- scrollUp JS
		============================================ -->		
        <script src="js/jquery.scrollUp.min.js"></script>
		<!-- jquery Collapse JS
		============================================ -->
        <script src="js/jquery.collapse.js"></script>
		<!-- plugins JS
		============================================ -->		
        <script src="js/plugins.js"></script>
		<!-- main JS
		============================================ -->		
        <script src="js/main.js"></script>
        <script type="text/javascript">
        	$(document).ready(function(){
        		$('.action-button .btn').on('click', function(){

        			var id = $(this).data('id')
        			console.log(id)
        			$.ajax({
        				url: '/diplom_shop/index.php',
        				type: 'POST',
        				data: {id: id},
        				dataType: 'JSON',
        				success: function(data){
        					console.log(data)
        					$('body,html').animate({scrollTop: 0}, 400)
        					$('.header-cart .badge').html( parseInt( $('.header-cart .badge').text() ) + 1 )
        				}
        			})
        		})
        	})
        </script>
    </body>
</html>
