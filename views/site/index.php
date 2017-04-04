<?php
/**
 * index.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things-demo
 * @license MIT
 */

use yii\bootstrap\Html;
use yii\widgets\Breadcrumbs;

use p2m\helpers\FA;

// load assets...

// DEMO ONLY _DON'T_ use this in your production copy.

/* @var $this yii\web\View */

$this->title = 'P2Y2Things';
?>
	<header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><i class="fa fa-heart"></i> Flat Theme</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="about-us.php">About Us</a></li>
					<li><a href="services.php">Services</a></li>
					<li><a href="portfolio.php">Portfolio</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="career.php">Career</a></li>
							<li><a href="blog-item.php">Blog Single</a></li>
							<li><a href="pricing.php">Pricing</a></li>
							<li><a href="404.php">404</a></li>
							<li class="divider"></li>
							<li><a href="privacy.php">Privacy Policy</a></li>
							<li><a href="terms.php">Terms of Use</a></li>
						</ul>
					</li>
					<li><a href="blog.php">Blog</a></li>
					<li><a href="contact-us.php">Contact</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Log In <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="login.php">Log In</a></li>
							<li><a href="signup.php">Sign Up</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</header>

	<!-- Page Content Block -->
		<section id="main-slider" class="no-margin">
			<div class="carousel slide wet-asphalt">
				<ol class="carousel-indicators">
					<li data-target="#main-slider" data-slide-to="0" class="active"></li>
					<li data-target="#main-slider" data-slide-to="1"></li>
					<li data-target="#main-slider" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active" style="background-image: url(assets/images/slider/bg1.jpg)">
						<div class="container">
							<div class="row">
								<div class="col-sm-12">
									<div class="carousel-content centered">
										<h2 class="animation animated-item-1">Powerful and Responsive Web Design</h2>
										<p class="animation animated-item-2">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
									</div>
								</div>
							</div>
						</div>
					</div><!--/.item-->
					<div class="item" style="background-image: url(assets/images/slider/bg2.jpg)">
						<div class="container">
							<div class="row">
								<div class="col-sm-12">
									<div class="carousel-content center centered">
										<h2 class="boxed animation animated-item-1">Clean, Crisp, Powerful and Responsive Web Design</h2>
										<p class="boxed animation animated-item-2">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
										<br>
										<a class="btn btn-md animation animated-item-3" href="#">Learn More</a>
									</div>
								</div>
							</div>
						</div>
					</div><!--/.item-->
					<div class="item" style="background-image: url(assets/images/slider/bg3.jpg)">
						<div class="container">
							<div class="row">
								<div class="col-sm-6">
									<div class="carousel-content centered">
										<h2 class="animation animated-item-1">Powerful and Responsive Web Design Theme</h2>
										<p class="animation animated-item-2">Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
										<a class="btn btn-md animation animated-item-3" href="#">Learn More</a>
									</div>
								</div>
								<div class="col-sm-6 hidden-xs animation animated-item-4">
									<div class="centered">
										<div class="embed-container">
											<iframe src="//player.vimeo.com/video/69421653?title=0&amp;byline=0&amp;portrait=0&amp;color=a22c2f" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!--/.item-->
				</div><!--/.carousel-inner-->
			</div><!--/.carousel-->
			<a class="prev hidden-xs" href="#main-slider" data-slide="prev">
				<i class="icon-angle-left"></i>
			</a>
			<a class="next hidden-xs" href="#main-slider" data-slide="next">
				<i class="icon-angle-right"></i>
			</a>
		</section><!--/#main-slider-->

		<section id="services" class="emerald">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="media">
							<div class="pull-left">
								<i class="fa fa-twitter icon-md"></i>
							</div>
							<div class="media-body">
								<h3 class="media-heading">Twitter Marketing</h3>
								<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
							</div>
						</div>
					</div><!--/.col-md-4-->
					<div class="col-md-4 col-sm-6">
						<div class="media">
							<div class="pull-left">
								<i class="fa fa-facebook icon-md"></i>
							</div>
							<div class="media-body">
								<h3 class="media-heading">Facebook Marketing</h3>
								<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
							</div>
						</div>
					</div><!--/.col-md-4-->
					<div class="col-md-4 col-sm-6">
						<div class="media">
							<div class="pull-left">
								<i class="fa fa-google-plus icon-md"></i>
							</div>
							<div class="media-body">
								<h3 class="media-heading">Google Plus Marketing</h3>
								<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
							</div>
						</div>
					</div><!--/.col-md-4-->
				</div>
			</div>
		</section><!--/#services-->


		<section id="recent-works">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<h3>Our Latest Project</h3>
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
						<div class="btn-group">
							<a class="btn btn-danger" href="#scroller" data-slide="prev"><i class="icon-angle-left"></i></a>
							<a class="btn btn-danger" href="#scroller" data-slide="next"><i class="icon-angle-right"></i></a>
						</div>
						<p class="gap"></p>
					</div>
					<div class="col-md-9">
						<div id="scroller" class="carousel slide">
							<div class="carousel-inner">
								<div class="item active">
									<div class="row">
										<div class="col-xs-4">
											<div class="portfolio-item">
												<div class="item-inner">
													<img class="img-responsive" src="assets/images/portfolio/recent/item1.png" alt="">
													<h5>
														Nova - Corporate site template
													</h5>
													<div class="overlay">
														<a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="assets/images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-4">
											<div class="portfolio-item">
												<div class="item-inner">
													<img class="img-responsive" src="assets/images/portfolio/recent/item3.png" alt="">
													<h5>
														Fornax - Apps site template
													</h5>
													<div class="overlay">
														<a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="assets/images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-4">
											<div class="portfolio-item">
												<div class="item-inner">
													<img class="img-responsive" src="assets/images/portfolio/recent/item2.png" alt="">
													<h5>
														Flat Theme - Business Theme
													</h5>
													<div class="overlay">
														<a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="assets/images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div><!--/.row-->
								</div><!--/.item-->
								<div class="item">
									<div class="row">
										<div class="col-xs-4">
											<div class="portfolio-item">
												<div class="item-inner">
													<img class="img-responsive" src="assets/images/portfolio/recent/item2.png" alt="">
													<h5>
														Flat Theme - Business Theme
													</h5>
													<div class="overlay">
														<a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="assets/images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-4">
											<div class="portfolio-item">
												<div class="item-inner">
													<img class="img-responsive" src="assets/images/portfolio/recent/item1.png" alt="">
													<h5>
														Nova - Corporate site template
													</h5>
													<div class="overlay">
														<a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="assets/images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-4">
											<div class="portfolio-item">
												<div class="item-inner">
													<img class="img-responsive" src="assets/images/portfolio/recent/item3.png" alt="">
													<h5>
														Fornax - Apps site template
													</h5>
													<div class="overlay">
														<a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="assets/images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!--/.item-->
							</div>
						</div>
					</div>
				</div><!--/.row-->
			</div>
		</section><!--/#recent-works-->


		<section id="testimonial" class="alizarin">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="center">
							<h2>What our clients say</h2>
							<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
						</div>
						<div class="gap"></div>
						<div class="row">
							<div class="col-md-6">
								<blockquote>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
									<small>Someone famous in <cite title="Source Title">Source Title</cite></small>
								</blockquote>
								<blockquote>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
									<small>Someone famous in <cite title="Source Title">Source Title</cite></small>
								</blockquote>
							</div>
							<div class="col-md-6">
								<blockquote>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
									<small>Someone famous in <cite title="Source Title">Source Title</cite></small>
								</blockquote>
								<blockquote>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
									<small>Someone famous in <cite title="Source Title">Source Title</cite></small>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!--/#testimonial-->
	<!-- / Page Content Block -->

	<!-- Footer Block -->
		<section id="bottom" class="wet-asphalt">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<h4>About Us</h4>
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
						<p>Pellentesque habitant morbi tristique senectus.</p>
					</div>

					<div class="col-md-3 col-sm-6">
						<h4>Company</h4>
						<div>
						<ul class="arrow">
							<li><a href="about-us.php">Company Overview</a></li>
							<li><a href="#">Meet The Team</a></li>
							<li><a href="#">Our Awesome Partners</a></li>
							<li><a href="services.php">Our Services</a></li>
							<li><a href="faq.php">Frequently Asked Questions</a></li>
							<li><a href="contact-us.php">Contact Us</a></li>
							<li><a href="privacy.php">Privacy Policy</a></li>
							<li><a href="terms.php">Terms of Use</a></li>
							<li><a href="#">Copyright</a></li>
						</ul>
					</div>
					</div>

					<div class="col-md-3 col-sm-6">
						<h4>Latest Blog</h4>
						<div>
							<div class="media">
								<div class="pull-left">
								<img src="assets/images/blog/thumb1.jpg" alt="">
							</div>
								<div class="media-body">
									<span class="media-heading">
										<a href="#">Pellentesque habitant morbi tristique senectus</a>
									</span>
									<small class="muted">Posted 17 Aug 2013</small>
								</div>
							</div>
							<div class="media">
								<div class="pull-left">
								<img src="assets/images/blog/thumb2.jpg" alt="">
							</div>
								<div class="media-body">
									<span class="media-heading">
										<a href="#">Pellentesque habitant morbi tristique senectus</a>
									</span>
									<small class="muted">Posted 13 Sep 2013</small>
								</div>
							</div>
							<div class="media">
								<div class="pull-left">
									<img src="assets/images/blog/thumb3.jpg" alt="">
								</div>
								<div class="media-body">
									<span class="media-heading">
										<a href="#">Pellentesque habitant morbi tristique senectus</a>
									</span>
									<small class="muted">Posted 11 Jul 2013</small>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3 col-sm-6">
						<h4>Address</h4>
						<address>
							<strong>p2made</strong><br>
							Downtown<br>
							Nambour Qld 4560 AU<br>
							<abbr title="Phone">P:</abbr> (+61) 7 9876 5432
						</address>
						<h4>Newsletter</h4>
						<form role="form">
							<div class="input-group">
								<input type="text" class="form-control" autocomplete="off" placeholder="Enter your email">
								<span class="input-group-btn">
									<button class="btn btn-danger" type="button">Go!</button>
								</span>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>

		<footer id="footer" class="midnight-blue">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						Crafted with <i class="fa fa-heart"></i> by Pedro fp, on the
						<a href="https://en.wikipedia.org/wiki/Sunshine_Coast,_Queensland" target="_blank">
						Sunshine Coast <i class="fa fa-external-link"></i>
					</a> of
						<a href="https://en.wikipedia.org/wiki/Queensland" target="_blank">
						Queensland <i class="fa fa-external-link"></i>
					</a>,
						<a href="https://en.wikipedia.org/wiki/Australia" target="_blank">
						Australia <i class="fa fa-external-link"></i>
					</a>
						<br>
						<i class="fa fa-copyright"></i> 2016
						 &bull; Powered by <a href="http://www.yiiframework.com/" rel="external">Yii Framework</a> <i class="fa fa-external-link"></i>
					</div>
					<div class="col-sm-6">
						<ul class="pull-right">
							<li><a href="index.php">Home</a></li>
							<li><a href="about-us.php">About Us</a></li>
							<li><a href="faq.php">Faq</a></li>
							<li><a href="contact-us.php">Contact Us</a></li>
							<li><a id="gototop" class="gototop" href="#"><i class="fa fa-chevron-up"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
