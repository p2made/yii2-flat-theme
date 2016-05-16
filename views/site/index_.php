<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Home | Flat Theme</title>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/css/prettyPhoto.css" rel="stylesheet">
	<link href="assets/css/animate.css" rel="stylesheet">
	<link href="assets/css/flat.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	<link rel="shortcut icon" href="assets/images/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="assets/images/ico/apple-touch-icon-57-precomposed.png">
</head>
<body>
	<header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" alt="logo"></a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="about-us.php">About Us</a></li>
					<li><a href="services.php">Services</a></li>
					<li><a href="portfolio.php">Portfolio</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="icon-angle-down"></i></a>
						<ul class="dropdown-menu">
							<li><a href="career.php">Career</a></li>
							<li><a href="blog-item.php">Blog Single</a></li>
							<li><a href="pricing.php">Pricing</a></li>
							<li><a href="404.php">404</a></li>
							<li><a href="registration.php">Registration</a></li>
							<li class="divider"></li>
							<li><a href="privacy.php">Privacy Policy</a></li>
							<li><a href="terms.php">Terms of Use</a></li>
						</ul>
					</li>
					<li><a href="blog.php">Blog</a></li>
					<li><a href="contact-us.php">Contact</a></li>
					<li><a href="login.php">Login</a></li>
				</ul>
			</div>
		</div>
	</header><!--/header-->


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
							<i class="icon-twitter icon-md"></i>
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
							<i class="icon-facebook icon-md"></i>
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
							<i class="icon-google-plus icon-md"></i>
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

	<section id="bottom" class="wet-asphalt">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<h4>About Us</h4>
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
					<p>Pellentesque habitant morbi tristique senectus.</p>
				</div><!--/.col-md-3-->

				<div class="col-md-3 col-sm-6">
					<h4>Company</h4>
					<div>
						<ul class="arrow">
							<li><a href="#">Company Overview</a></li>
							<li><a href="#">Meet The Team</a></li>
							<li><a href="#">Our Awesome Partners</a></li>
							<li><a href="#">Our Services</a></li>
							<li><a href="#">Frequently Asked Questions</a></li>
							<li><a href="#">Conatct Us</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Terms of Use</a></li>
							<li><a href="#">Copyright</a></li>
						</ul>
					</div>
				</div><!--/.col-md-3-->

				<div class="col-md-3 col-sm-6">
					<h4>Latest Blog</h4>
					<div>
						<div class="media">
							<div class="pull-left">
								<img src="assets/images/blog/thumb1.jpg" alt="">
							</div>
							<div class="media-body">
								<span class="media-heading"><a href="#">Pellentesque habitant morbi tristique senectus</a></span>
								<small class="muted">Posted 17 Aug 2013</small>
							</div>
						</div>
						<div class="media">
							<div class="pull-left">
								<img src="assets/images/blog/thumb2.jpg" alt="">
							</div>
							<div class="media-body">
								<span class="media-heading"><a href="#">Pellentesque habitant morbi tristique senectus</a></span>
								<small class="muted">Posted 13 Sep 2013</small>
							</div>
						</div>
						<div class="media">
							<div class="pull-left">
								<img src="assets/images/blog/thumb3.jpg" alt="">
							</div>
							<div class="media-body">
								<span class="media-heading"><a href="#">Pellentesque habitant morbi tristique senectus</a></span>
								<small class="muted">Posted 11 Jul 2013</small>
							</div>
						</div>
					</div>
				</div><!--/.col-md-3-->

				<div class="col-md-3 col-sm-6">
					<h4>Address</h4>
					<address>
						<strong>Twitter, Inc.</strong><br>
						795 Folsom Ave, Suite 600<br>
						San Francisco, CA 94107<br>
						<abbr title="Phone">P:</abbr> (123) 456-7890
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
				</div> <!--/.col-md-3-->
			</div>
		</div>
	</section><!--/#bottom-->

	<footer id="footer" class="midnight-blue">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					&copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
				</div>
				<div class="col-sm-6">
					<ul class="pull-right">
						<li><a href="#">Home</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Faq</a></li>
						<li><a href="#">Contact Us</a></li>
						<li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
					</ul>
				</div>
			</div>
		</div>
	</footer><!--/#footer-->

	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.prettyPhoto.js"></script>
	<script src="assets/js/flat.js"></script>
</body>
</html>





<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-param" content="_csrf">
    <meta name="csrf-token" content="eG8uUy5VdDINJwMBQDAjfis7XD5vYU18QDlBPmQ/MEccO2M1XGwGYg==">
	<title>P2Y2Things | P2Y2Things</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
<link href="//cdnjs.cloudflare.com/ajax/libs/prettyPhoto/3.1.6/css/prettyPhoto.min.css" rel="stylesheet">
<link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css" rel="stylesheet">
<link href="/assets/feab8ebb/css/flat.css" rel="stylesheet"></head>
<body>





	<div class="wrap">

		<div class="container">
<div id="site-index">


	<div class="alert alert-info" role="alert"><p><code>/WWW/yii.development/vendor/p2made/yii2-flat-theme/views/site/index.php</code></p></div>
</div><!-- /#content-wrapper -->
		</div>
	</div>

	<footer class="footer">
		<div class="container">

			<p class="pull-left">
				Crafted with <i class="fa fa-heart"></i> by Pedro fp, on the
				<a href="https://en.wikipedia.org/wiki/Sunshine_Coast,_Queensland" target="_blank">
					Sunshine Coast <i class="fa fa-external-link"></i>				</a> of
				<a href="https://en.wikipedia.org/wiki/Queensland" target="_blank">
					Queensland <i class="fa fa-external-link"></i>				</a>,
				<a href="https://en.wikipedia.org/wiki/Australia" target="_blank">
					Australia <i class="fa fa-external-link"></i>				</a>
				<i class="fa fa-copyright"></i> 2016			</p>

			<p class="pull-right">Powered by <a href="http://www.yiiframework.com/" rel="external">Yii Framework</a></p>
		</div>
	</footer>

<div id="yii-debug-toolbar" data-url="/debug/default/toolbar.p2m?tag=56ee2f0d333af" style="display:none" class="yii-debug-toolbar-bottom"></div><style>
#yii-debug-toolbar-logo {
    position: fixed;
    right: 31px;
    bottom: 4px;
}

.yii-debug-toolbar {
    font: 11px Verdana, Arial, sans-serif;
    text-align: left;
    width: 96px;
    height: 42px;
    transition: width .3s ease;
    z-index: 1000000;
}

.yii-debug-toolbar_active {
    width: 100%;
    height: auto;
}

.yii-debug-toolbar_position_top {
    margin: 0 0 20px 0;
    width: 100%;
}

.yii-debug-toolbar_position_bottom {
    position: fixed;
    right: 0;
    bottom: 0;
    margin: 0;
}

.yii-debug-toolbar__bar {
    position: relative;
    padding: 0;
    font: 11px Verdana, Arial, sans-serif;
    text-align: left;
    height: 40px;
    overflow: hidden;

    background: rgb(255, 255, 255);
    background: -moz-linear-gradient(top, rgb(255, 255, 255) 0%, rgb(247, 247, 247) 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(top, rgb(255, 255, 255) 0%, rgb(247, 247, 247) 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to bottom, rgb(255, 255, 255) 0%, rgb(247, 247, 247) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f7f7f7', GradientType=0); /* IE6-9 */

    border: 1px solid rgba(0, 0, 0, 0.11);

    /* ensure debug toolbar text is displayed ltr even on rtl pages */
    direction: ltr;
}

.yii-debug-toolbar__bar:after {
    content: '';
    display: table;
    clear: both;
}

.yii-debug-toolbar__view {
    height: 0;
    overflow: hidden;
    background: white;
    transition: height .3s ease;
}

.yii-debug-toolbar__view iframe {
    margin: 0;
    padding: 0;
    padding-top: 10px;
    height: 100%;
    width: 100%;
    border: 0;
}

.yii-debug-toolbar_iframe_active .yii-debug-toolbar__view {
    height: 100%;
}

.yii-debug-toolbar__block {
    float: left;
    margin: 0;
    border-right: 1px solid rgba(0, 0, 0, 0.11);
    padding: 4px 8px;
    line-height: 32px;
    white-space: nowrap;
}

.yii-debug-toolbar__block_active {
    background: rgb(247, 247, 247); /* Old browsers */
    background: -moz-linear-gradient(top, rgb(247, 247, 247) 0%, rgb(224, 224, 224) 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(top, rgb(247, 247, 247) 0%, rgb(224, 224, 224) 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to bottom, rgb(247, 247, 247) 0%, rgb(224, 224, 224) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f7f7f7', endColorstr='#e0e0e0', GradientType=0); /* IE6-9 */
}

.yii-debug-toolbar__block a {
    display: inline-block;
    text-decoration: none;
    color: black;
}

.yii-debug-toolbar__block img {
    vertical-align: middle;
}

.yii-debug-toolbar__label {
    display: inline-block;
    padding: 2px 4px;
    font-size: 12px;
    font-weight: normal;
    line-height: 14px;
    white-space: nowrap;
    vertical-align: baseline;
    color: #ffffff;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
    background-color: #999999;
    -webkit-border-radius: 3px;
       -moz-border-radius: 3px;
            border-radius: 3px;
}

.yii-debug-toolbar__label:empty {
    display: none;
}

a.yii-debug-toolbar__label:hover,
a.yii-debug-toolbar__label:focus {
    color: #ffffff;
    text-decoration: none;
    cursor: pointer;
}

.yii-debug-toolbar__label_important {
    background-color: #b94a48;
}

.yii-debug-toolbar__label_important[href] {
    background-color: #953b39;
}

.yii-debug-toolbar__label_warning,
.yii-debug-toolbar__badge_warning {
    background-color: #f89406;
}

.yii-debug-toolbar__label_warning[href] {
    background-color: #c67605;
}

.yii-debug-toolbar__label_success {
    background-color: #468847;
}

.yii-debug-toolbar__label_success[href] {
    background-color: #356635;
}

.yii-debug-toolbar__label_info {
    background-color: #3a87ad;
}

.yii-debug-toolbar__label_info[href] {
    background-color: #2d6987;
}

.yii-debug-toolbar__label_inverse,
.yii-debug-toolbar__badge_inverse {
    background-color: #333333;
}

.yii-debug-toolbar__label_inverse[href],
.yii-debug-toolbar__badge_inverse[href] {
    background-color: #1a1a1a;
}

.yii-debug-toolbar__title {
    background: rgb(247, 247, 247); /* Old browsers */
    background: -moz-linear-gradient(top, rgb(247, 247, 247) 0%, rgb(224, 224, 224) 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(top, rgb(247, 247, 247) 0%, rgb(224, 224, 224) 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to bottom, rgb(247, 247, 247) 0%, rgb(224, 224, 224) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f7f7f7', endColorstr='#e0e0e0', GradientType=0); /* IE6-9 */
}

.yii-debug-toolbar__toggle,
.yii-debug-toolbar__external {
    cursor: pointer;
    position: absolute;

    width: 30px;
    height: 30px;
    font-size: 25px;
    font-weight: 100;
    line-height: 28px;
    color: #ffffff;
    text-align: center;

    opacity: 0.5;
    filter: alpha(opacity=50);

    transition: opacity .3s ease;
}

.yii-debug-toolbar__toggle:hover,
.yii-debug-toolbar__toggle:focus,
.yii-debug-toolbar__external:hover,
.yii-debug-toolbar__external:focus {
    color: #ffffff;
    text-decoration: none;
    opacity: 0.9;
    filter: alpha(opacity=90);
}

.yii-debug-toolbar__toggle-icon,
.yii-debug-toolbar__external-icon {
    display: inline-block;

    background-position: 50% 50%;
    background-repeat: no-repeat;
}

.yii-debug-toolbar__toggle {
    right: 10px;
    top: 4px;
}

.yii-debug-toolbar__toggle-icon {
    padding: 7px 0;
    width: 10px;
    height: 16px;
    background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNSIgaGVpZ2h0PSIxNSIgdmlld0JveD0iMCAwIDUwIDUwIj48cGF0aCBmaWxsPSIjNDQ0IiBkPSJNMTUuNTYzIDQwLjgzNmEuOTk3Ljk5NyAwIDAgMCAxLjQxNCAwbDE1LTE1YTEgMSAwIDAgMCAwLTEuNDE0bC0xNS0xNWExIDEgMCAwIDAtMS40MTQgMS40MTRMMjkuODU2IDI1LjEzIDE1LjU2MyAzOS40MmExIDEgMCAwIDAgMCAxLjQxNHoiLz48L3N2Zz4=');
    transition: -webkit-transform .3s ease-out;
    transition: transform .3s ease-out;
}

.yii-debug-toolbar_active .yii-debug-toolbar__toggle-icon {
    -webkit-transform: rotate(180deg);
    transform: rotate(180deg);
}

.yii-debug-toolbar_iframe_active .yii-debug-toolbar__toggle-icon {
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
}

.yii-debug-toolbar__external {
    display: none;
    right: 50px;
    top: 4px;
}

.yii-debug-toolbar_iframe_active .yii-debug-toolbar__external {
    display: block;
}

.yii-debug-toolbar__external-icon {
    padding: 8px 0;
    width: 14px;
    height: 14px;
    background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNSIgaGVpZ2h0PSIxNSIgdmlld0JveD0iMCAwIDUwIDUwIj48cGF0aCBmaWxsPSIjNDQ0IiBkPSJNMzkuNjQyIDkuNzIyYTEuMDEgMS4wMSAwIDAgMC0uMzgyLS4wNzdIMjguMTAzYTEgMSAwIDAgMCAwIDJoOC43NDNMMjEuNyAyNi43OWExIDEgMCAwIDAgMS40MTQgMS40MTVMMzguMjYgMTMuMDZ2OC43NDNhMSAxIDAgMCAwIDIgMFYxMC42NDZhMS4wMDUgMS4wMDUgMCAwIDAtLjYxOC0uOTI0eiIvPjxwYXRoIGQ9Ik0zOS4yNiAyNy45ODVhMSAxIDAgMCAwLTEgMXYxMC42NmgtMjh2LTI4aDEwLjY4M2ExIDEgMCAwIDAgMC0ySDkuMjZhMSAxIDAgMCAwLTEgMXYzMGExIDEgMCAwIDAgMSAxaDMwYTEgMSAwIDAgMCAxLTF2LTExLjY2YTEgMSAwIDAgMC0xLTF6Ii8+PC9zdmc+');
}
</style><script>(function () {
    'use strict';

    var findToolbar = function () {
            return document.querySelector('#yii-debug-toolbar');
        },
        ajax = function (url, settings) {
            var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            settings = settings || {};
            xhr.open(settings.method || 'GET', url, true);
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            xhr.setRequestHeader('Accept', 'text/html');
            xhr.onreadystatechange = function (state) {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200 && settings.success) {
                        settings.success(xhr);
                    } else if (xhr.status != 200 && settings.error) {
                        settings.error(xhr);
                    }
                }
            };
            xhr.send(settings.data || '');
        },
        url,
        div,
        toolbarEl = findToolbar(),
        barSelector = '.yii-debug-toolbar__bar',
        viewSelector = '.yii-debug-toolbar__view',
        blockSelector = '.yii-debug-toolbar__block',
        toggleSelector = '.yii-debug-toolbar__toggle',
        externalSelector = '.yii-debug-toolbar__external',

        CACHE_KEY = 'yii-debug-toolbar',
        ACTIVE_STATE = 'active',

        activeClass = 'yii-debug-toolbar_active',
        iframeActiveClass = 'yii-debug-toolbar_iframe_active',
        titleClass = 'yii-debug-toolbar__title',
        blockClass = 'yii-debug-toolbar__block',
        blockActiveClass = 'yii-debug-toolbar__block_active';

    if (toolbarEl) {
        url = toolbarEl.getAttribute('data-url');

        ajax(url, {
            success: function (xhr) {
                div = document.createElement('div');
                div.innerHTML = xhr.responseText;

                toolbarEl.parentNode.replaceChild(div, toolbarEl);

                showToolbar(findToolbar());
            },
            error: function (xhr) {
                toolbarEl.innerHTML = xhr.responseText;
            }
        });
    }

    function showToolbar(toolbarEl) {
        var barEl = toolbarEl.querySelector(barSelector),
            viewEl = toolbarEl.querySelector(viewSelector),
            toggleEl = toolbarEl.querySelector(toggleSelector),
            externalEl = toolbarEl.querySelector(externalSelector),
            blockEls = barEl.querySelectorAll(blockSelector),
            iframeEl = viewEl.querySelector('iframe'),
            iframeHeight = function () {
                return (window.innerHeight * 0.7) + 'px';
            },
            isIframeActive = function () {
                return toolbarEl.classList.contains(iframeActiveClass);
            },
            showIframe = function (href) {
                toolbarEl.classList.add(iframeActiveClass);

                iframeEl.src = externalEl.href = href;
                viewEl.style.height = iframeHeight();
            },
            hideIframe = function () {
                toolbarEl.classList.remove(iframeActiveClass);
                removeActiveBlocksCls();

                externalEl.href = '#';
                viewEl.style.height = '';
            },
            removeActiveBlocksCls = function () {
                [].forEach.call(blockEls, function (el) {
                    el.classList.remove(blockActiveClass);
                });
            },
            toggleToolbarClass = function (className) {
                if (toolbarEl.classList.contains(className)) {
                    toolbarEl.classList.remove(className);
                } else {
                    toolbarEl.classList.add(className);
                }
            },
            toggleStorageState = function (key, value) {
                if (window.localStorage) {
                    var item = localStorage.getItem(key);

                    if (item) {
                        localStorage.removeItem(key);
                    } else {
                        localStorage.setItem(key, value);
                    }
                }
            },
            restoreStorageState = function (key) {
                if (window.localStorage) {
                    return localStorage.getItem(key);
                }
            },
            togglePosition = function () {
                if (isIframeActive()) {
                    hideIframe();
                } else {
                    toggleToolbarClass(activeClass);
                    toggleStorageState(CACHE_KEY, ACTIVE_STATE);
                }
            };

        toolbarEl.style.display = 'block';

        if (restoreStorageState(CACHE_KEY) == ACTIVE_STATE) {
            toolbarEl.classList.add(activeClass);
        }

        window.onresize = function () {
            if (toolbarEl.classList.contains(iframeActiveClass)) {
                viewEl.style.height = iframeHeight();
            }
        };

        barEl.onclick = function (e) {
            var target = e.target,
                block = findAncestor(target, blockClass);

            if (block && !block.classList.contains(titleClass)) {
                while (target !== this) {
                    if (target.href) {
                        removeActiveBlocksCls();
                        block.classList.add(blockActiveClass);
                        showIframe(target.href);
                    }
                    target = target.parentNode;
                }

                e.preventDefault();
            }
        };

        toggleEl.onclick = togglePosition;
    }

    function findAncestor(el, cls) {
        while ((el = el.parentElement) && !el.classList.contains(cls));
        return el;
    }
})();
</script><script src="/assets/26e3cae6/yii.js"></script>
<script src="//code.jquery.com/jquery-2.2.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/prettyPhoto/3.1.6/js/jquery.prettyPhoto.min.js"></script>
<script src="/assets/feab8ebb/js/flat.js"></script></body>
</html>

