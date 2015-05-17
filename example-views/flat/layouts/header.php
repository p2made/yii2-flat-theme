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
			<?php
				$menuItems = [
					['label' => 'Home', 'url' => ['/site/index']],
					['label' => 'About Us', 'url' => ['/site/about']],
					['label' => 'Services', 'url' => ['/site/page', 'view' => 'services']],
					['label' => 'Portfolio', 'url' => ['/site/page', 'view' => 'portfolio']],
					['label' => 'Pages <i class="icon-angle-down"></i>',
					'options' => ['class' => 'dropdown'],
					'linkOptions' => ['class' => 'dropdown-toggle', 'data-toggle' => 'dropdown'],
					'items' => [
						['label' => 'Career', 'url' => ['/site/page', 'view' => 'career']],
						['label' => 'Blog Item', 'url' => ['/site/page', 'view' => 'blog-item']],
						['label' => 'Pricing', 'url' => ['/site/page', 'view' => 'pricing']],
						['label' => 'Privacy Policy', 'url' => ['/site/page', 'view' => 'privacy']],
						['label' => '', 'options' => ['class' => 'divider']],
						['label' => '404', 'url' => ['/site/page', 'view' => '404']],
						['label' => 'Login', 'url' => ['/site/login']],
						['label' => 'Signup', 'url' => ['/site/signup']],
					]],
					['label' => 'Blog', 'url' => ['/site/page', 'view' => 'blog']],
					['label' => 'Contact Us', 'url' => ['/site/contact']],
				];
				if (Yii::$app->user->isGuest) {
					$menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
					$menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
				} else {
					$menuItems[] = [
						'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
						'url' => ['/site/logout'],
						'linkOptions' => ['data-method' => 'post']
					];
				}
				echo Nav::widget([
					'options' => ['class' => 'nav navbar-nav navbar-right'],
					'items' => $menuItems,
				]);
			?>
		</div>
	</div>
</header>
