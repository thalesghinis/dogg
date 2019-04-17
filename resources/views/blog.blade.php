<!DOCTYPE HTML>
<html>
	<head>
	@include('layouts.head')


	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
	@include('layouts.header')
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/img_bg_5.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner slider-text-inner2 text-center">
				   					<h2>Read the latest events</h2>
				   					<h1>Our Blog</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div id="colorlib-blog">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<article class="animate-box">
							<div class="blog-img" style="background-image: url(images/blog-1.jpg);"></div>
							<div class="desc">
								<div class="meta">
									<p>
										<span>August 24, 2017 </span>
										<span>admin </span>
										<span><a href="#">2 Comments</a></span>
									</p>
								</div>
								<h2><a href="#">A Definitive Guide to the Best Dining</a></h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, qui quod ipsum harum id, minima nesciunt! Saepe soluta, vitae quas expedita voluptatem voluptates placeat numquam provident quis, atque nisi iure?</p>
							</div>
						</article>
						<article class="animate-box">
							<div class="blog-img" style="background-image: url(images/blog-2.jpg);"></div>
							<div class="desc">
								<div class="meta">
									<p>
										<span>August 24, 2017 </span>
										<span>admin </span>
										<span><a href="#">1 Comments</a></span>
									</p>
								</div>
								<h2><a href="#">How These 5 People Found The Path to Their Dream Trip</a></h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, qui quod ipsum harum id, minima nesciunt! Saepe soluta, vitae quas expedita voluptatem voluptates placeat numquam provident quis, atque nisi iure?</p>
							</div>
						</article>
						<article class="animate-box">
							<div class="blog-img" style="background-image: url(images/blog-3.jpg);"></div>
							<div class="desc">
								<div class="meta">
									<p>
										<span>August 24, 2017 </span>
										<span>admin </span>
										<span><a href="#">0 Comments</a></span>
									</p>
								</div>
								<h2><a href="#">Our Secret Island Boat Tour Is just for You</a></h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, qui quod ipsum harum id, minima nesciunt! Saepe soluta, vitae quas expedita voluptatem voluptates placeat numquam provident quis, atque nisi iure?</p>
							</div>
						</article>
					</div>

					<div class="col-md-4 col-md-pull-7">
						<div class="aside animate-box">
							<h3>Search Room</h3>
							<form method="post" class="colorlib-form">
			              	<div class="row">
			                <div class="col-md-12">
			                  <div class="form-group">
			                    <label for="date">Check-in:</label>
			                    <div class="form-field">
			                      <i class="icon icon-calendar2"></i>
			                      <input type="text" id="date" class="form-control date" placeholder="Check-in date">
			                    </div>
			                  </div>
			                </div>
			                <div class="col-md-12">
			                  <div class="form-group">
			                    <label for="date">Check-out:</label>
			                    <div class="form-field">
			                      <i class="icon icon-calendar2"></i>
			                      <input type="text" id="date" class="form-control date" placeholder="Check-out date">
			                    </div>
			                  </div>
			                </div>
			                <div class="col-md-6">
			                  <div class="form-group">
			                    <label for="adults">Adults</label>
			                    <div class="form-field">
			                      <i class="icon icon-arrow-down3"></i>
			                      <select name="people" id="people" class="form-control">
			                        <option value="#">1</option>
			                        <option value="#">2</option>
			                        <option value="#">3</option>
			                        <option value="#">4</option>
			                        <option value="#">5+</option>
			                      </select>
			                    </div>
			                  </div>
			                </div>
			                <div class="col-md-6">
			                  <div class="form-group">
			                    <label for="children">Children</label>
			                    <div class="form-field">
			                      <i class="icon icon-arrow-down3"></i>
			                      <select name="people" id="people" class="form-control">
			                        <option value="#">1</option>
			                        <option value="#">2</option>
			                        <option value="#">3</option>
			                        <option value="#">4</option>
			                        <option value="#">5+</option>
			                      </select>
			                    </div>
			                  </div>
			                </div>
			                <div class="col-md-12">
			                  <input type="submit" name="submit" id="submit" value="Search" class="btn btn-primary btn-block">
			                </div>
			              </div>
			            </form>
						</div>
						<div class="aside animate-box">
							<h3>Recent Post</h3>
							<div class="blog-entry-side">
								<a href="blog.html" class="blog-post">
									<span class="img" style="background-image: url(images/blog-3.jpg);"></span>
									<div class="desc">
										<span class="date">January 14, 2018</span>
										<h3>Our Secret Island Boat Tour Is just for You</h3>
										<span class="cat">Activities</span>
									</div>
								</a>
							</div>
							<div class="blog-entry-side">
								<a href="blog.html" class="blog-post">
									<span class="img" style="background-image: url(images/blog-2.jpg);"></span>
									<div class="desc">
										<span class="date">January 14, 2018</span>
										<h3>How These 5 People Found The Path to Their Dream Trip</h3>
										<span class="cat">Activities</span>
									</div>
								</a>
							</div>
							<div class="blog-entry-side">
								<a href="blog.html" class="blog-post">
									<span class="img" style="background-image: url(images/blog-3.jpg);"></span>
									<div class="desc">
										<span class="date">January 14, 2018</span>
										<h3>Our Secret Island Boat Tour Is just for You</h3>
										<span class="cat">Activities</span>
									</div>
								</a>
							</div>
						</div>
						<div class="aside animate-box">
							<h3>Category</h3>
							<ul class="category">
								<li><a href="#"><i class="icon-check"></i> Activities<span>(3)</span></a></li>
								<li><a href="#"><i class="icon-check"></i> Hotel<span>(5)</span></a></li>
								<li><a href="#"><i class="icon-check"></i> Tour<span>(2)</span></a></li>
								<li><a href="#"><i class="icon-check"></i> Travel<span>(3)</span></a></li>
								<li><a href="#"><i class="icon-check"></i> Night<span>(2)</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<div id="colorlib-subscribe" style="background-image: url(images/img_bg_2.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
						<h2>Sign Up for a Newsletter</h2>
						<p>Get A 50% Discounts in every Rooms, Book now!</p>
						<form class="form-inline qbstp-header-subscribe">
							<div class="row">
								<div class="col-md-12 col-md-offset-0">
									<div class="form-group">
										<input type="text" class="form-control" id="email" placeholder="Enter your email">
										<button type="submit" class="btn btn-primary">Subscribe</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	@include('layouts.foot')
	</body>
</html>

