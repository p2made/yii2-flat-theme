<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

/* @var $this \yii\web\View */
/* @var $content string */
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


----- ^ ----- ^ ----- ^ ----- ^ ----- ^ -----


<div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	<?= Html::a('P<sup>2</sup>SB Admin v2.0', Yii::$app->homeUrl, ['class' => 'navbar-brand']) ?>
	<!-- <?= Html::a(Yii::$app->name, Yii::$app->homeUrl, ['class' => 'navbar-brand']) ?> -->
</div>

<ul class="nav navbar-top-links navbar-right">
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">
			<i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
		</a>
		<ul class="dropdown-menu dropdown-messages">
			<li>
				<a href="#">
					<div>
						<strong>John Smith</strong>
						<span class="pull-right text-muted">
							<em>Yesterday</em>
						</span>
					</div>
					<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
				</a>
			</li>
			<li class="divider"></li>
			<li>
				<a href="#">
					<div>
						<strong>John Smith</strong>
						<span class="pull-right text-muted">
							<em>Yesterday</em>
						</span>
					</div>
					<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
				</a>
			</li>
			<li class="divider"></li>
			<li>
				<a href="#">
					<div>
						<strong>John Smith</strong>
						<span class="pull-right text-muted">
							<em>Yesterday</em>
						</span>
					</div>
					<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
				</a>
			</li>
			<li class="divider"></li>
			<li>
				<a class="text-center" href="#">
					<strong>Read All Messages</strong>
					<i class="fa fa-angle-right"></i>
				</a>
			</li>
		</ul><!-- /.dropdown-messages -->
	</li><!-- /.dropdown -->
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">
			<i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
		</a>
		<ul class="dropdown-menu dropdown-tasks">
			<li>
				<a href="#">
					<div>
						<p>
							<strong>Task 1</strong>
							<span class="pull-right text-muted">40% Complete</span>
						</p>
						<div class="progress progress-striped active">
							<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
								<span class="sr-only">40% Complete (success)</span>
							</div>
						</div>
					</div>
				</a>
			</li>
			<li class="divider"></li>
			<li>
				<a href="#">
					<div>
						<p>
							<strong>Task 2</strong>
							<span class="pull-right text-muted">20% Complete</span>
						</p>
						<div class="progress progress-striped active">
							<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
								<span class="sr-only">20% Complete</span>
							</div>
						</div>
					</div>
				</a>
			</li>
			<li class="divider"></li>
			<li>
				<a href="#">
					<div>
						<p>
							<strong>Task 3</strong>
							<span class="pull-right text-muted">60% Complete</span>
						</p>
						<div class="progress progress-striped active">
							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
								<span class="sr-only">60% Complete (warning)</span>
							</div>
						</div>
					</div>
				</a>
			</li>
			<li class="divider"></li>
			<li>
				<a href="#">
					<div>
						<p>
							<strong>Task 4</strong>
							<span class="pull-right text-muted">80% Complete</span>
						</p>
						<div class="progress progress-striped active">
							<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
								<span class="sr-only">80% Complete (danger)</span>
							</div>
						</div>
					</div>
				</a>
			</li>
			<li class="divider"></li>
			<li>
				<a class="text-center" href="#">
					<strong>See All Tasks</strong>
					<i class="fa fa-angle-right"></i>
				</a>
			</li>
		</ul><!-- /.dropdown-tasks -->
	</li><!-- /.dropdown -->
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">
			<i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
		</a>
		<ul class="dropdown-menu dropdown-alerts">
			<li>
				<a href="#">
					<div>
						<i class="fa fa-comment fa-fw"></i> New Comment
						<span class="pull-right text-muted small">4 minutes ago</span>
					</div>
				</a>
			</li>
			<li class="divider"></li>
			<li>
				<a href="#">
					<div>
						<i class="fa fa-twitter fa-fw"></i> 3 New Followers
						<span class="pull-right text-muted small">12 minutes ago</span>
					</div>
				</a>
			</li>
			<li class="divider"></li>
			<li>
				<a href="#">
					<div>
						<i class="fa fa-envelope fa-fw"></i> Message Sent
						<span class="pull-right text-muted small">4 minutes ago</span>
					</div>
				</a>
			</li>
			<li class="divider"></li>
			<li>
				<a href="#">
					<div>
						<i class="fa fa-tasks fa-fw"></i> New Task
						<span class="pull-right text-muted small">4 minutes ago</span>
					</div>
				</a>
			</li>
			<li class="divider"></li>
			<li>
				<a href="#">
					<div>
						<i class="fa fa-upload fa-fw"></i> Server Rebooted
						<span class="pull-right text-muted small">4 minutes ago</span>
					</div>
				</a>
			</li>
			<li class="divider"></li>
			<li>
				<a class="text-center" href="#">
					<strong>See All Alerts</strong>
					<i class="fa fa-angle-right"></i>
				</a>
			</li>
		</ul><!-- /.dropdown-alerts -->
	</li><!-- /.dropdown -->
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">
			<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
		</a>
		<ul class="dropdown-menu dropdown-user">
			<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
			</li>
			<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
			</li>
			<li class="divider"></li>
			<li>
				<?= Html::a(
					'<i class="fa fa-sign-out fa-fw"></i> Logout',
					['/site/logout'],
					['data-method' => 'post']
				) ?>
			</li>
		</ul><!-- /.dropdown-user -->
	</li><!-- /.dropdown -->
</ul>
