<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;

?>
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
			</div>

			<div class="col-md-3 col-sm-6">
				<h4>Latest Blog</h4>
				<div>
					<div class="media">
						<div class="pull-left">
							<img src="assets/images/blog/thumb1.jpg" alt="">
						</div>
						<div class="media-body">
							<span class="media-heading"><a href="#">Pellentesque habitant morbi tristique senectus</a></span>
							<small class="muted">Posted 17 May 2015</small>
						</div>
					</div>
					<div class="media">
						<div class="pull-left">
							<img src="assets/images/blog/thumb2.jpg" alt="">
						</div>
						<div class="media-body">
							<span class="media-heading"><a href="#">Pellentesque habitant morbi tristique senectus</a></span>
							<small class="muted">Posted 13 Jan 2015</small>
						</div>
					</div>
					<div class="media">
						<div class="pull-left">
							<img src="assets/images/blog/thumb3.jpg" alt="">
						</div>
						<div class="media-body">
							<span class="media-heading"><a href="#">Pellentesque habitant morbi tristique senectus</a></span>
							<small class="muted">Posted 13 Sep 2014</small>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-3 col-sm-6">
				<h4>Address</h4>
				<address>
					<strong>P<sup>2</sup>Made</strong><br>
					Somewhere Dr<br>
					Nambour, Qld 4560<br>
					<abbr title="Phone">P:</abbr> +61 7 5499 5678
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
</section><!--/#bottom-->

<footer id="footer" class="midnight-blue">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				&copy; My Company <?= date('Y') ?>. <?= Yii::powered() ?>.
			</div>
			<div class="col-sm-6">
				<?= Nav::widget([
					'encodeLabels' => false,
					'options' => ['class' => 'pull-right'],
					'items' => [
						['label' => 'Home', 'url' => ['/site/index']],
						['label' => 'About Us', 'url' => ['/site/about']],
						['label' => 'FAQ', 'url' => ['/site/page', 'view' => 'faq']],
						['label' => 'Contact Us', 'url' => ['/site/contact']],
						['label' => '<i class="icon-chevron-up"></i>',
						'linkOptions' => ['id' => 'gototop', 'class' => 'gototop']],
					],
				]) ?>
			</div>
		</div>
	</div>
</footer>
