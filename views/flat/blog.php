<?php
	$title = 'Blog';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?php echo $title; ?> | Flat Theme</title>

	<!-- Assets -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="//cdnjs.cloudflare.com/ajax/libs/prettyPhoto/3.1.6/css/prettyPhoto.min.css" rel="stylesheet" type="text/css">
	<link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css" rel="stylesheet" type="text/css">

	<link href="assets/css/flat-theme.css" rel="stylesheet">
	<link href="assets/images/favicon.ico" rel="shortcut icon">
	<!-- / Assets -->
</head>
<body>

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=144716315690681";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

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
					<li><a href="index.php">Home</a></li>
					<li><a href="about-us.php">About Us</a></li>
					<li><a href="services.php">Services</a></li>
					<li><a href="portfolio.php">Portfolio</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="career.php">Career</a></li>
							<li><a href="blog-item.php">Blog Single</a></li>
							<li><a href="faq.php">FAQ</a></li>
							<li><a href="pricing.php">Pricing</a></li>
							<li><a href="404.php">404</a></li>
							<li class="divider"></li>
							<li><a href="privacy.php">Privacy Policy</a></li>
							<li><a href="terms.php">Terms of Use</a></li>
						</ul>
					</li>
					<li class="active"><a href="blog.php">Blog</a></li>
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

	<section id="title" class="emerald">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<h1><?= $title; ?></h1>
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
				</div>
				<div class="col-sm-6">
					<ul class="breadcrumb pull-right">
						<li><a href="index.php">Home</a></li>
						<li class="active"><?= $title; ?></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<!-- Page Content Block -->
		<section id="blog" class="container">
			<div class="row">
				<aside class="col-sm-4 col-sm-push-8">
					<div class="widget search">
						<form role="form">
							<div class="input-group">
								<input type="text" class="form-control" autocomplete="off" placeholder="Search">
								<span class="input-group-btn">
									<button class="btn btn-danger" type="button"><i class="icon-search"></i></button>
								</span>
							</div>
						</form>
					</div><!--/.search-->

					<div class="widget ads">
						<div class="row">
							<div class="col-xs-6">
								<a href="#"><img class="img-responsive img-rounded" src="assets/images/ads/ad1.png" alt=""></a>
							</div>

							<div class="col-xs-6">
								<a href="#"><img class="img-responsive img-rounded" src="assets/images/ads/ad2.png" alt=""></a>
							</div>
						</div>
						<p> </p>
						<div class="row">
							<div class="col-xs-6">
								<a href="#"><img class="img-responsive img-rounded" src="assets/images/ads/ad3.png" alt=""></a>
							</div>

							<div class="col-xs-6">
								<a href="#"><img class="img-responsive img-rounded" src="assets/images/ads/ad4.png" alt=""></a>
							</div>
						</div>
					</div><!--/.ads-->

					<div class="widget categories">
						<h3>Blog Categories</h3>
						<div class="row">
							<div class="col-sm-6">
								<ul class="arrow">
									<li><a href="#">Development</a></li>
									<li><a href="#">Design</a></li>
									<li><a href="#">Updates</a></li>
									<li><a href="#">Tutorial</a></li>
									<li><a href="#">News</a></li>
								</ul>
							</div>
							<div class="col-sm-6">
								<ul class="arrow">
									<li><a href="#">Joomla</a></li>
									<li><a href="#">Wordpress</a></li>
									<li><a href="#">Drupal</a></li>
									<li><a href="#">Magento</a></li>
									<li><a href="#">Bootstrap</a></li>
								</ul>
							</div>
						</div>
					</div><!--/.categories-->
					<div class="widget tags">
						<h3>Tag Cloud</h3>
						<ul class="tag-cloud">
							<li><a class="btn btn-xs btn-primary" href="#">CSS3</a></li>
							<li><a class="btn btn-xs btn-primary" href="#">HTML5</a></li>
							<li><a class="btn btn-xs btn-primary" href="#">WordPress</a></li>
							<li><a class="btn btn-xs btn-primary" href="#">Joomla</a></li>
							<li><a class="btn btn-xs btn-primary" href="#">Drupal</a></li>
							<li><a class="btn btn-xs btn-primary" href="#">Bootstrap</a></li>
							<li><a class="btn btn-xs btn-primary" href="#">jQuery</a></li>
							<li><a class="btn btn-xs btn-primary" href="#">Tutorial</a></li>
							<li><a class="btn btn-xs btn-primary" href="#">Update</a></li>
						</ul>
					</div><!--/.tags-->

					<div class="widget facebook-fanpage">
						<h3>Facebook Fanpage</h3>
						<div class="widget-content">
							<div class="fb-like-box" data-href="https://www.facebook.com/shapebootstrap" data-width="292" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
						</div>
					</div>
				</aside>
				<div class="col-sm-8 col-sm-pull-4">
					<div class="blog">
						<div class="blog-item">
							<img class="img-responsive img-blog" src="assets/images/blog/blog1.jpg" width="100%" alt="" />
							<div class="blog-content">
								<a href="blog-item.php"><h3>Duis sed odio sit amet nibh vulputate cursus</h3></a>
								<div class="entry-meta">
									<span><i class="icon-user"></i> <a href="#">John</a></span>
									<span><i class="icon-folder-close"></i> <a href="#">Bootstrap</a></span>
									<span><i class="icon-calendar"></i> Sept 16th, 2012</span>
									<span><i class="icon-comment"></i> <a href="blog-item.html#comments">3 Comments</a></span>
								</div>
								<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
								<a class="btn btn-default" href="blog-item.php">Read More <i class="icon-angle-right"></i></a>
							</div>
						</div><!--/.blog-item-->
						<div class="blog-item">
							<img class="img-responsive img-blog" src="assets/images/blog/blog2.jpg" width="100%" alt="" />
							<div class="blog-content">
								<a href="blog-item.php"><h3>Conubia nostra per inceptos himenaeos</h3></a>
								<div class="entry-meta">
									<span><i class="icon-user"></i> <a href="#">John</a></span>
									<span><i class="icon-folder-close"></i> <a href="#">Bootstrap</a></span>
									<span><i class="icon-calendar"></i> Sept 16th, 2012</span>
									<span><i class="icon-comment"></i> <a href="blog-item.html#comments">0 Comment</a></span>
								</div>
								<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
								<a class="btn btn-default" href="blog-item.php">Read More <i class="icon-angle-right"></i></a>
							</div>
						</div><!--/.blog-item-->
						<ul class="pagination pagination-lg">
							<li><a href="#"><i class="icon-angle-left"></i></a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#"><i class="icon-angle-right"></i></a></li>
						</ul><!--/.pagination-->
					</div>
				</div><!--/.col-md-8-->
			</div><!--/.row-->
		</section><!--/#blog-->
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

	<script src="//code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/prettyPhoto/3.1.6/js/jquery.prettyPhoto.min.js" type="text/javascript"></script>
	<script src="assets/js/flat-theme.js"></script>
	<!-- / Footer Block -->

</body>
</html>
