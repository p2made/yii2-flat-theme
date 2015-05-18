<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Home';

// being really pedantic about asset order...
p2made\assets\FontAwesomeAsset::register($this);
p2made\assets\PrettyPhotoAsset::register($this);
p2made\assets\AnimateAsset::register($this);
p2made\theme\Flat\web\FlatAsset::register($this);
//p2made\assets\cdn\Html5shivAsset::register($this);

/* pub
p2made\theme\Flat\web\FlatAsset::register($this);

p2made\assets\AnimateAsset::register($this);
p2made\assets\BootstrapSocialAsset::register($this);
p2made\assets\DataTablesAsset::register($this);
p2made\assets\ExcanvasAsset::register($this);
p2made\assets\FlotChartsAsset::register($this);
p2made\assets\FlotTooltipAsset::register($this);
p2made\assets\FontAwesomeAsset::register($this);
p2made\assets\FullCalendarAsset::register($this);
p2made\assets\HolderAsset::register($this);
p2made\assets\IsotopeAsset::register($this);
p2made\assets\MetisMenuAsset::register($this);
p2made\assets\MomentAsset::register($this);
p2made\assets\MomentTimezoneAsset::register($this);
p2made\assets\MorrisAsset::register($this);
p2made\assets\PrettyPhotoAsset::register($this);
p2made\assets\PrettySociableAsset::register($this);
p2made\assets\RaphaelAsset::register($this);
p2made\assets\SweetAlertAsset::register($this);
p2made\assets\Html5shivAsset::register($this);

		'p2made\assets\AnimateAsset',
		'p2made\assets\BootstrapSocialAsset',
		'p2made\assets\DataTablesAsset',
		'p2made\assets\ExcanvasAsset',
		'p2made\assets\FlotChartsAsset',
		'p2made\assets\FlotTooltipAsset',
		'p2made\assets\FontAwesomeAsset',
		'p2made\assets\FullCalendarAsset',
		'p2made\assets\HolderAsset',
		'p2made\assets\IsotopeAsset',
		'p2made\assets\MetisMenuAsset',
		'p2made\assets\MomentAsset',
		'p2made\assets\MomentTimezoneAsset',
		'p2made\assets\MorrisAsset',
		'p2made\assets\PrettyPhotoAsset',
		'p2made\assets\PrettySociableAsset',
		'p2made\assets\RaphaelAsset',
		'p2made\assets\SweetAlertAsset',
		'p2made\assets\Html5shivAsset',
 */
?>
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
