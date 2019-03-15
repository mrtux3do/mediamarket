<!-- Slide home page -->

<div class="owl-carousel owl-theme slide-home">
	<img class="item" src="<?php echo $this->webroot ?>img/slide1.jpg">
	<img class="item" src="<?php echo $this->webroot ?>img/slide2.jpg">
</div>

<!-- Login popup -->
<div class="login-popup">
	<div class="pop-up-content">
		<label id="btn-close"></label>
		<form method="POST" action="/website/Auth/login">
			<div class="form-group" style="margin-bottom: 50px">
				<label>Email</label>
				<input type="email" name="data[User][email]" id="email" required placeholder="email">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="data[User][password]" id="password" required placeholder="password">
			</div>
			<button type="submit" id="btn-login">Log in</button>
		</form>
	</div>
</div>




<div class="wrapper">
	<div class="container">

		<div class="static_cms">
			<div class="row">
				<div class="col-ms col-lg-3">
					<div class="box_cms">
						<img src="<?php echo $this->webroot ?>img/cms1.png">
						<div class="text_cms">
							<h2>Free Delivery</h2>
							<p>Free shipping on all order</p>
						</div>
					</div>
				</div>

				<div class="col-ms col-lg-3">
					<div class="box_cms">
						<img src="<?php echo $this->webroot ?>img/cms2.png">
						<div class="text_cms">
							<h2>Support 24/7</h2>
							<p>Online 24 hours a day order</p>
						</div>
					</div>
				</div>

				<div class="col-ms col-lg-3">
					<div class="box_cms">
						<img src="<?php echo $this->webroot ?>img/cms3.png">
						<div class="text_cms">
							<h2>Money Return</h2>
							<p>Back guarantee under 7 days</p>
						</div>
					</div>
				</div>

				<div class="col-ms col-lg-3">
					<div class="box_cms">
						<img src="<?php echo $this->webroot ?>img/cms4.png">
						<div class="text_cms">
							<h2>Member Discount</h2>
							<p>Onevery order over $130.00</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="sub-banner">
			<ul>
				<li class="banner">
					<img src="<?php echo $this->webroot ?>img/Sub-Banner-1.jpg">
					<div class="sub-banner-content">
						<div class="sub-title"> smart watch</div>
						<div class="sub-btn">
							<a href="#">view more</a>
						</div>
					</div>
				</li>
				<li class="banner">
					<img src="<?php echo $this->webroot ?>img/Sub-Banner-2.jpg">
					<div class="sub-banner-content">
						<div class="sub-title"> smart remotes</div>
						<div class="sub-btn">
							<a href="#">view more</a>
						</div>
					</div>
				</li>
				<li class="banner">
					<img src="<?php echo $this->webroot ?>img/Sub-Banner-3.jpg">
					<div class="sub-banner-content">
						<div class="sub-title"> smart gearbox</div>
						<div class="sub-btn">
							<a href="#">view more</a>
						</div>
					</div>
				</li>
			</ul>
		</div>

		<div class="row">
			<div class="col-lg-9">
				<div class="hot-deal">
					<div class="title-deal">
						<h2> hot deals</h2>
					</div>
					<div class="deal-slide owl-carousel owl-theme owl-loaded">
						<div class="product-deal">
							<div class="img-product-deal">
								<a href="#">
									<img src="<?php echo $this->webroot ?>img/headphone.jpg">
								</a>
								<div class="product-flag">
									<div class="discount-percent-tag"> 20% </div>
									<div class="new-tag">New</div>
								</div>
							</div>
							<div class="product-desc">
								<h1 class="product-deal-name">
									<a href="#">Mrashmallow HeadPhones</a>
								</h1>

								<div class="rate-product">
									<div class="star star-on"></div>
									<div class="star star-on"></div>
									<div class="star star-on"></div>
									<div class="star star-on"></div>
									<div class="star star-on"></div>
								</div>

								<div class="product-price">
									<span class="old-price">$35.90</span>
									<span class="sale-price">$31.20</span>
								</div>

								<div class="product-deal-detail">
									<p>The ATH-S700BT offers clear, full-bodied audio reproduction with Bluetooth® wireless operation. The headphones are equipped with a mic, and ...</p>
								</div>
								<div class="box-countdown">
									<div class="title-countdown">
										<h1>Harry up!</h1>
										<p>Offer end in:</p>
									</div>
									<div id="count-down"></div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>

						<div class="product-deal">
							<div class="img-product-deal">
								<a href="#">
									<img src="<?php echo $this->webroot ?>img/headphone.jpg">
								</a>
								<div class="product-flag">
									<div class="discount-percent-tag"> 20% </div>
									<div class="new-tag">New</div>
								</div>
							</div>
							<div class="product-desc">
								<h1 class="product-deal-name">
									<a href="#">Mrashmallow HeadPhones</a>
								</h1>

								<div class="rate-product">
									<div class="star star-on"></div>
									<div class="star star-on"></div>
									<div class="star star-on"></div>
									<div class="star star-on"></div>
									<div class="star star-on"></div>
								</div>

								<div class="product-price">
									<span class="old-price">$35.90</span>
									<span class="sale-price">$31.20</span>
								</div>

								<div class="product-deal-detail">
									<p>The ATH-S700BT offers clear, full-bodied audio reproduction with Bluetooth® wireless operation. The headphones are equipped with a mic, and ...</p>
								</div>
								<div class="box-countdown">
									<div class="title-countdown">
										<h1>Harry up!</h1>
										<p>Offer end in:</p>
									</div>
									<div id="count-down"></div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<div class="extra-product owl-carousel owl-theme owl-loaded owl-stage">
						<div class="item-product">
							<div class="img-item-product">
								<a href="#">
									<img src="<?php echo $this->webroot; ?>img/ear-headphones.jpg">
								</a>
								<div class="product-flag">
									<div class="discount-percent-tag"> 20% </div>
								</div>
							</div>
							<div class="desc-item-product">
								<h1>
									<a href="#">wireless over-ear headphone</a>
								</h1>
								<div class="rate-product">
									<div class="star star-on"></div>
									<div class="star star-on"></div>
									<div class="star star-on"></div>
									<div class="star star-on"></div>
									<div class="star star-on"></div>
								</div>
								<div class="product-price">
									<span class="old-price">$35.90</span>
									<span class="sale-price">$31.20</span>
								</div>
							</div>
						</div>
						<div class="item-product">
							<div class="img-item-product">
								<a href="#">
									<img src="<?php echo $this->webroot; ?>img/headphone.jpg">
								</a>
								<div class="product-flag">
									<div class="discount-percent-tag"> 20% </div>
								</div>
							</div>
							<div class="desc-item-product">
								<h1>
									<a href="#">wireless over-ear headphone</a>
								</h1>
								<div class="rate-product">
									<div class="star star-on"></div>
									<div class="star star-on"></div>
									<div class="star star-on"></div>
									<div class="star star-on"></div>
									<div class="star star-on"></div>
								</div>
								<div class="product-price">
									<span class="old-price">$35.90</span>
									<span class="sale-price">$31.20</span>
								</div>
							</div>
						</div>
						<div class="item-product">
							<div class="img-item-product">
								<a href="#">
									<img src="<?php echo $this->webroot; ?>img/playstation.jpg">
								</a>
								<div class="product-flag">
									<div class="discount-percent-tag"> 20% </div>
								</div>
							</div>
							<div class="desc-item-product">
								<h1>
									<a href="#">wireless over-ear headphone</a>
								</h1>
								<div class="rate-product">
									<div class="star star-on"></div>
									<div class="star star-on"></div>
									<div class="star star-on"></div>
									<div class="star star-on"></div>
									<div class="star star-on"></div>
								</div>
								<div class="product-price">
									<span class="old-price">$35.90</span>
									<span class="sale-price">$31.20</span>
								</div>
							</div>
						</div>
						<div class="item-product">
							<div class="img-item-product">
								<a href="#">
									<img src="<?php echo $this->webroot; ?>img/tv-smart.jpg">
								</a>
								<div class="product-flag">
									<div class="discount-percent-tag"> 20% </div>
								</div>
							</div>
							<div class="desc-item-product">
								<h1>
									<a href="#">wireless over-ear headphone</a>
								</h1>
								<div class="rate-product">
									<div class="star star-on"></div>
									<div class="star star-on"></div>
									<div class="star star-on"></div>
									<div class="star star-on"></div>
									<div class="star star-on"></div>
								</div>
								<div class="product-price">
									<span class="old-price">$35.90</span>
									<span class="sale-price">$31.20</span>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="banner-ads-deal">
					<a href="#">
						<img src="<?php echo $this->webroot ?>img/banner-ads-1.jpg">
					</a>
				</div>

				<div class="trending-product">
					<div class="title-trending-product">
						<h2>Trending product</h2>
						<div class="tab-trending">
							<div class="tab-name">
								<ul class="nav my-tabs" role="tablist">
									<li role="presentation" class="active"><a href="#camera" role="tab" data-toggle="tab"> Camera </a></li>
									<li role="presentation"><a href="#laptop" role="tab" data-toggle="tab"> Laptop </a></li>
									<li role="presentation" ><a href="#smart-phone" role="tab" data-toggle="tab"> Smart phone </a></li>
									<li role="presentation" ><a href="#tv-video" role="tab" data-toggle="tab"> TV & Video </a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="content-trending-product">
						<div class="tab-content">
							<div role="tabpanel" class="slide-trend-product tab-pane active owl-carousel owl-theme owl-loaded owl-stage" id="camera">
								<div class="item-trend-product">
									<div class="img-trend-product">
										<a href="#">
											<img src="<?php echo $this->webroot ?>img/ear-headphones.jpg">
										</a>
										<div class="product-flag">
											<div class="discount-percent-tag"> 20% </div>
											<div class="new-tag">New</div>
										</div>
									</div>
									<div class="desc-item-product">
										<h1>
											<a href="#">wireless over-ear headphone</a>
										</h1>
										<div class="rate-product">
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
										</div>
										<div class="product-price">
											<span class="old-price">$35.90</span>
											<span class="sale-price">$31.20</span>
										</div>
									</div>
									<ul class="add-to-links">
										<li class="cart">
											<div class="add-to-cart">
												<button class="btn-add-to-cart"> Add to cart</button>
											</div>
										</li>
										<li class="quick-view">
											<a href="#"></a>
										</li>
										<li class="wish-list">
											<a href="#"></a>
										</li>
									</ul>
								</div>

								<div class="item-trend-product">
									<div class="img-trend-product">
										<a href="#">
											<img src="<?php echo $this->webroot ?>img/tv-smart.jpg">
										</a>
										<div class="product-flag">
											<div class="discount-percent-tag"> 20% </div>
											<div class="new-tag">New</div>
										</div>
									</div>
									<div class="desc-item-product">
										<h1>
											<a href="#">wireless over-ear headphone</a>
										</h1>
										<div class="rate-product">
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
										</div>
										<div class="product-price">
											<span class="old-price">$35.90</span>
											<span class="sale-price">$31.20</span>
										</div>
									</div>
									<ul class="add-to-links">
										<li class="cart">
											<div class="add-to-cart">
												<button class="btn-add-to-cart"> Add to cart</button>
											</div>
										</li>
										<li class="quick-view">
											<a href="#"></a>
										</li>
										<li class="wish-list">
											<a href="#"></a>
										</li>
									</ul>									
								</div>

								<div class="item-trend-product">
									<div class="img-trend-product">
										<a href="#">
											<img src="<?php echo $this->webroot ?>img/playstation.jpg">
										</a>
										<div class="product-flag">
											<div class="discount-percent-tag"> 20% </div>
											<div class="new-tag">New</div>
										</div>
									</div>
									<div class="desc-item-product">
										<h1>
											<a href="#">wireless over-ear headphone</a>
										</h1>
										<div class="rate-product">
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
										</div>
										<div class="product-price">
											<span class="old-price">$35.90</span>
											<span class="sale-price">$31.20</span>
										</div>
									</div>
									<ul class="add-to-links">
										<li class="cart">
											<div class="add-to-cart">
												<button class="btn-add-to-cart"> Add to cart</button>
											</div>
										</li>
										<li class="quick-view">
											<a href="#"></a>
										</li>
										<li class="wish-list">
											<a href="#"></a>
										</li>
									</ul>									
								</div>

								<div class="item-trend-product">
									<div class="img-trend-product">
										<a href="#">
											<img src="<?php echo $this->webroot ?>img/headphone.jpg">
										</a>
										<div class="product-flag">
											<div class="discount-percent-tag"> 20% </div>
											<div class="new-tag">New</div>
										</div>
									</div>
									<div class="desc-item-product">
										<h1>
											<a href="#">wireless over-ear headphone</a>
										</h1>
										<div class="rate-product">
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
										</div>
										<div class="product-price">
											<span class="old-price">$35.90</span>
											<span class="sale-price">$31.20</span>
										</div>
									</div>
									<ul class="add-to-links">
										<li class="cart">
											<div class="add-to-cart">
												<button class="btn-add-to-cart"> Add to cart</button>
											</div>
										</li>
										<li class="quick-view">
											<a href="#"></a>
										</li>
										<li class="wish-list">
											<a href="#"></a>
										</li>
									</ul>									
								</div>

								<div class="item-trend-product">
									<div class="img-trend-product">
										<a href="#">
											<img src="<?php echo $this->webroot ?>img/headphone.jpg">
										</a>
										<div class="product-flag">
											<div class="discount-percent-tag"> 20% </div>
											<div class="new-tag">New</div>
										</div>
									</div>
									<div class="desc-item-product">
										<h1>
											<a href="#">wireless over-ear headphone</a>
										</h1>
										<div class="rate-product">
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
										</div>
										<div class="product-price">
											<span class="old-price">$35.90</span>
											<span class="sale-price">$31.20</span>
										</div>
									</div>
									<ul class="add-to-links">
										<li class="cart">
											<div class="add-to-cart">
												<button class="btn-add-to-cart"> Add to cart</button>
											</div>
										</li>
										<li class="quick-view">
											<a href="#"></a>
										</li>
										<li class="wish-list">
											<a href="#"></a>
										</li>
									</ul>									
								</div>																
							</div>

							<div role="tabpanel" class="tab-pane slide-trend-product owl-carousel owl-theme owl-loaded owl-stage" id="laptop">
								<div class="item-trend-product">
									<div class="img-trend-product">
										<a href="#">
											<img src="<?php echo $this->webroot ?>img/ear-headphones.jpg">
										</a>
										<div class="product-flag">
											<div class="discount-percent-tag"> 20% </div>
											<div class="new-tag">New</div>
										</div>
									</div>
									<div class="desc-item-product">
										<h1>
											<a href="#">wireless over-ear headphone</a>
										</h1>
										<div class="rate-product">
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
										</div>
										<div class="product-price">
											<span class="old-price">$35.90</span>
											<span class="sale-price">$31.20</span>
										</div>
									</div>
									<ul class="add-to-links">
										<li class="cart">
											<div class="add-to-cart">
												<button class="btn-add-to-cart"> Add to cart</button>
											</div>
										</li>
										<li class="quick-view">
											<a href="#"></a>
										</li>
										<li class="wish-list">
											<a href="#"></a>
										</li>
									</ul>									
								</div>

								<div class="item-trend-product">
									<div class="img-trend-product">
										<a href="#">
											<img src="<?php echo $this->webroot ?>img/tv-smart.jpg">
										</a>
										<div class="product-flag">
											<div class="discount-percent-tag"> 20% </div>
											<div class="new-tag">New</div>
										</div>
									</div>
									<div class="desc-item-product">
										<h1>
											<a href="#">wireless over-ear headphone</a>
										</h1>
										<div class="rate-product">
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
										</div>
										<div class="product-price">
											<span class="old-price">$35.90</span>
											<span class="sale-price">$31.20</span>
										</div>
									</div>
									<ul class="add-to-links">
										<li class="cart">
											<div class="add-to-cart">
												<button class="btn-add-to-cart"> Add to cart</button>
											</div>
										</li>
										<li class="quick-view">
											<a href="#"></a>
										</li>
										<li class="wish-list">
											<a href="#"></a>
										</li>
									</ul>									
								</div>

								<div class="item-trend-product">
									<div class="img-trend-product">
										<a href="#">
											<img src="<?php echo $this->webroot ?>img/playstation.jpg">
										</a>
										<div class="product-flag">
											<div class="discount-percent-tag"> 20% </div>
											<div class="new-tag">New</div>
										</div>
									</div>
									<div class="desc-item-product">
										<h1>
											<a href="#">wireless over-ear headphone</a>
										</h1>
										<div class="rate-product">
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
										</div>
										<div class="product-price">
											<span class="old-price">$35.90</span>
											<span class="sale-price">$31.20</span>
										</div>
									</div>
									<ul class="add-to-links">
										<li class="cart">
											<div class="add-to-cart">
												<button class="btn-add-to-cart"> Add to cart</button>
											</div>
										</li>
										<li class="quick-view">
											<a href="#"></a>
										</li>
										<li class="wish-list">
											<a href="#"></a>
										</li>
									</ul>									
								</div>

								<div class="item-trend-product">
									<div class="img-trend-product">
										<a href="#">
											<img src="<?php echo $this->webroot ?>img/headphone.jpg">
										</a>
										<div class="product-flag">
											<div class="discount-percent-tag"> 20% </div>
											<div class="new-tag">New</div>
										</div>
									</div>
									<div class="desc-item-product">
										<h1>
											<a href="#">wireless over-ear headphone</a>
										</h1>
										<div class="rate-product">
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
										</div>
										<div class="product-price">
											<span class="old-price">$35.90</span>
											<span class="sale-price">$31.20</span>
										</div>
									</div>
									<ul class="add-to-links">
										<li class="cart">
											<div class="add-to-cart">
												<button class="btn-add-to-cart"> Add to cart</button>
											</div>
										</li>
										<li class="quick-view">
											<a href="#"></a>
										</li>
										<li class="wish-list">
											<a href="#"></a>
										</li>
									</ul>									
								</div>

								<div class="item-trend-product">
									<div class="img-trend-product">
										<a href="#">
											<img src="<?php echo $this->webroot ?>img/headphone.jpg">
										</a>
										<div class="product-flag">
											<div class="discount-percent-tag"> 20% </div>
											<div class="new-tag">New</div>
										</div>
									</div>
									<div class="desc-item-product">
										<h1>
											<a href="#">wireless over-ear headphone</a>
										</h1>
										<div class="rate-product">
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
										</div>
										<div class="product-price">
											<span class="old-price">$35.90</span>
											<span class="sale-price">$31.20</span>
										</div>
									</div>
									<ul class="add-to-links">
										<li class="cart">
											<div class="add-to-cart">
												<button class="btn-add-to-cart"> Add to cart</button>
											</div>
										</li>
										<li class="quick-view">
											<a href="#"></a>
										</li>
										<li class="wish-list">
											<a href="#"></a>
										</li>
									</ul>									
								</div>	
							</div>

							<div role="tabpanel" class="tab-pane slide-trend-product owl-carousel owl-theme owl-loaded owl-stage" id="smart-phone">
								<div class="item-trend-product">
									<div class="img-trend-product">
										<a href="#">
											<img src="<?php echo $this->webroot ?>img/ear-headphones.jpg">
										</a>
										<div class="product-flag">
											<div class="discount-percent-tag"> 20% </div>
											<div class="new-tag">New</div>
										</div>
									</div>
									<div class="desc-item-product">
										<h1>
											<a href="#">wireless over-ear headphone</a>
										</h1>
										<div class="rate-product">
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
										</div>
										<div class="product-price">
											<span class="old-price">$35.90</span>
											<span class="sale-price">$31.20</span>
										</div>
									</div>
									<ul class="add-to-links">
										<li class="cart">
											<div class="add-to-cart">
												<button class="btn-add-to-cart"> Add to cart</button>
											</div>
										</li>
										<li class="quick-view">
											<a href="#"></a>
										</li>
										<li class="wish-list">
											<a href="#"></a>
										</li>
									</ul>									
								</div>

								<div class="item-trend-product">
									<div class="img-trend-product">
										<a href="#">
											<img src="<?php echo $this->webroot ?>img/tv-smart.jpg">
										</a>
										<div class="product-flag">
											<div class="discount-percent-tag"> 20% </div>
											<div class="new-tag">New</div>
										</div>
									</div>
									<div class="desc-item-product">
										<h1>
											<a href="#">wireless over-ear headphone</a>
										</h1>
										<div class="rate-product">
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
										</div>
										<div class="product-price">
											<span class="old-price">$35.90</span>
											<span class="sale-price">$31.20</span>
										</div>
									</div>
									<ul class="add-to-links">
										<li class="cart">
											<div class="add-to-cart">
												<button class="btn-add-to-cart"> Add to cart</button>
											</div>
										</li>
										<li class="quick-view">
											<a href="#"></a>
										</li>
										<li class="wish-list">
											<a href="#"></a>
										</li>
									</ul>									
								</div>

								<div class="item-trend-product">
									<div class="img-trend-product">
										<a href="#">
											<img src="<?php echo $this->webroot ?>img/playstation.jpg">
										</a>
										<div class="product-flag">
											<div class="discount-percent-tag"> 20% </div>
											<div class="new-tag">New</div>
										</div>
									</div>
									<div class="desc-item-product">
										<h1>
											<a href="#">wireless over-ear headphone</a>
										</h1>
										<div class="rate-product">
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
										</div>
										<div class="product-price">
											<span class="old-price">$35.90</span>
											<span class="sale-price">$31.20</span>
										</div>
									</div>
									<ul class="add-to-links">
										<li class="cart">
											<div class="add-to-cart">
												<button class="btn-add-to-cart"> Add to cart</button>
											</div>
										</li>
										<li class="quick-view">
											<a href="#"></a>
										</li>
										<li class="wish-list">
											<a href="#"></a>
										</li>
									</ul>									
								</div>

								<div class="item-trend-product">
									<div class="img-trend-product">
										<a href="#">
											<img src="<?php echo $this->webroot ?>img/headphone.jpg">
										</a>
										<div class="product-flag">
											<div class="discount-percent-tag"> 20% </div>
											<div class="new-tag">New</div>
										</div>
									</div>
									<div class="desc-item-product">
										<h1>
											<a href="#">wireless over-ear headphone</a>
										</h1>
										<div class="rate-product">
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
										</div>
										<div class="product-price">
											<span class="old-price">$35.90</span>
											<span class="sale-price">$31.20</span>
										</div>
									</div>
									<ul class="add-to-links">
										<li class="cart">
											<div class="add-to-cart">
												<button class="btn-add-to-cart"> Add to cart</button>
											</div>
										</li>
										<li class="quick-view">
											<a href="#"></a>
										</li>
										<li class="wish-list">
											<a href="#"></a>
										</li>
									</ul>									
								</div>

								<div class="item-trend-product">
									<div class="img-trend-product">
										<a href="#">
											<img src="<?php echo $this->webroot ?>img/headphone.jpg">
										</a>
										<div class="product-flag">
											<div class="discount-percent-tag"> 20% </div>
											<div class="new-tag">New</div>
										</div>
									</div>
									<div class="desc-item-product">
										<h1>
											<a href="#">wireless over-ear headphone</a>
										</h1>
										<div class="rate-product">
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
										</div>
										<div class="product-price">
											<span class="old-price">$35.90</span>
											<span class="sale-price">$31.20</span>
										</div>
									</div>
									<ul class="add-to-links">
										<li class="cart">
											<div class="add-to-cart">
												<button class="btn-add-to-cart"> Add to cart</button>
											</div>
										</li>
										<li class="quick-view">
											<a href="#"></a>
										</li>
										<li class="wish-list">
											<a href="#"></a>
										</li>
									</ul>									
								</div>	
							</div>

							<div role="tabpanel" class="tab-pane slide-trend-product owl-carousel owl-theme owl-loaded owl-stage" id="tv-video">
								<div class="item-trend-product">
									<div class="img-trend-product">
										<a href="#">
											<img src="<?php echo $this->webroot ?>img/ear-headphones.jpg">
										</a>
										<div class="product-flag">
											<div class="discount-percent-tag"> 20% </div>
											<div class="new-tag">New</div>
										</div>
									</div>
									<div class="desc-item-product">
										<h1>
											<a href="#">wireless over-ear headphone</a>
										</h1>
										<div class="rate-product">
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
										</div>
										<div class="product-price">
											<span class="old-price">$35.90</span>
											<span class="sale-price">$31.20</span>
										</div>
									</div>
									<ul class="add-to-links">
										<li class="cart">
											<div class="add-to-cart">
												<button class="btn-add-to-cart"> Add to cart</button>
											</div>
										</li>
										<li class="quick-view">
											<a href="#"></a>
										</li>
										<li class="wish-list">
											<a href="#"></a>
										</li>
									</ul>									
								</div>

								<div class="item-trend-product">
									<div class="img-trend-product">
										<a href="#">
											<img src="<?php echo $this->webroot ?>img/tv-smart.jpg">
										</a>
										<div class="product-flag">
											<div class="discount-percent-tag"> 20% </div>
											<div class="new-tag">New</div>
										</div>
									</div>
									<div class="desc-item-product">
										<h1>
											<a href="#">wireless over-ear headphone</a>
										</h1>
										<div class="rate-product">
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
										</div>
										<div class="product-price">
											<span class="old-price">$35.90</span>
											<span class="sale-price">$31.20</span>
										</div>
									</div>
									<ul class="add-to-links">
										<li class="cart">
											<div class="add-to-cart">
												<button class="btn-add-to-cart"> Add to cart</button>
											</div>
										</li>
										<li class="quick-view">
											<a href="#"></a>
										</li>
										<li class="wish-list">
											<a href="#"></a>
										</li>
									</ul>									
								</div>

								<div class="item-trend-product">
									<div class="img-trend-product">
										<a href="#">
											<img src="<?php echo $this->webroot ?>img/playstation.jpg">
										</a>
										<div class="product-flag">
											<div class="discount-percent-tag"> 20% </div>
											<div class="new-tag">New</div>
										</div>
									</div>
									<div class="desc-item-product">
										<h1>
											<a href="#">wireless over-ear headphone</a>
										</h1>
										<div class="rate-product">
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
										</div>
										<div class="product-price">
											<span class="old-price">$35.90</span>
											<span class="sale-price">$31.20</span>
										</div>
									</div>
									<ul class="add-to-links">
										<li class="cart">
											<div class="add-to-cart">
												<button class="btn-add-to-cart"> Add to cart</button>
											</div>
										</li>
										<li class="quick-view">
											<a href="#"></a>
										</li>
										<li class="wish-list">
											<a href="#"></a>
										</li>
									</ul>									
								</div>

								<div class="item-trend-product">
									<div class="img-trend-product">
										<a href="#">
											<img src="<?php echo $this->webroot ?>img/headphone.jpg">
										</a>
										<div class="product-flag">
											<div class="discount-percent-tag"> 20% </div>
											<div class="new-tag">New</div>
										</div>
									</div>
									<div class="desc-item-product">
										<h1>
											<a href="#">wireless over-ear headphone</a>
										</h1>
										<div class="rate-product">
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
										</div>
										<div class="product-price">
											<span class="old-price">$35.90</span>
											<span class="sale-price">$31.20</span>
										</div>
									</div>
									<ul class="add-to-links">
										<li class="cart">
											<div class="add-to-cart">
												<button class="btn-add-to-cart"> Add to cart</button>
											</div>
										</li>
										<li class="quick-view">
											<a href="#"></a>
										</li>
										<li class="wish-list">
											<a href="#"></a>
										</li>
									</ul>									
								</div>

								<div class="item-trend-product">
									<div class="img-trend-product">
										<a href="#">
											<img src="<?php echo $this->webroot ?>img/headphone.jpg">
										</a>
										<div class="product-flag">
											<div class="discount-percent-tag"> 20% </div>
											<div class="new-tag">New</div>
										</div>
									</div>
									<div class="desc-item-product">
										<h1>
											<a href="#">wireless over-ear headphone</a>
										</h1>
										<div class="rate-product">
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
											<div class="star star-on"></div>
										</div>
										<div class="product-price">
											<span class="old-price">$35.90</span>
											<span class="sale-price">$31.20</span>
										</div>
									</div>
									<ul class="add-to-links">
										<li class="cart">
											<div class="add-to-cart">
												<button class="btn-add-to-cart"> Add to cart</button>
											</div>
										</li>
										<li class="quick-view">
											<a href="#"></a>
										</li>
										<li class="wish-list">
											<a href="#"></a>
										</li>
									</ul>									
								</div>	
							</div>
						</div>																		
					</div>
				</div>

				<div class="banner-ads-deal">
					<a href="#">
						<img src="<?php echo $this->webroot ?>img/banner-ads-2.jpg">
					</a>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="new-product">12</div>
			</div>
		</div>
	</div>
</div>