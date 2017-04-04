<?php
/**
 * footer.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-flat-theme
 * @license MIT
 */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use p2m\widgets\FA;

/* @var $this \yii\web\View */
?>
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
						<img src="images/blog/thumb1.jpg" alt="">
					</div>
					<div class="media-body">
						<span class="media-heading"><a href="#">Pellentesque habitant morbi tristique senectus</a></span>
						<small class="muted">Posted 17 Aug 2013</small>
					</div>
				</div>
				<div class="media">
					<div class="pull-left">
						<img src="images/blog/thumb2.jpg" alt="">
					</div>
					<div class="media-body">
						<span class="media-heading"><a href="#">Pellentesque habitant morbi tristique senectus</a></span>
						<small class="muted">Posted 13 Sep 2013</small>
					</div>
				</div>
				<div class="media">
					<div class="pull-left">
						<img src="images/blog/thumb3.jpg" alt="">
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
</section>
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
</footer>
