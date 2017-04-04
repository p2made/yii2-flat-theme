<?php
/**
 * navigation.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things-demo
 * @license MIT
 */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use p2m\widgets\FA;
use p2m\demo\Things\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

?>
<?php
	NavBar::begin([
		'brandLabel' => '<img src="/images/flat/logo.png" alt="Flat Theme">',
		'brandUrl' => Yii::$app->homeUrl,
		'options' => [
			'tag' => 'header',
			'class' => 'navbar navbar-inverse navbar-fixed-top wet-asphalt',
			'role' => 'banner',
		],
		//'containerOptions' => ['header'],
	]);

	$menuItems = [
		['label' => 'Home', 'url' => ['/site/index']],
		['label' => 'About Us', 'url' => ['/site/about-us']],
		['label' => 'Services', 'url' => ['/site/services']],
		['label' => 'Portfolio', 'url' => ['/site/portfolio']],

		['label' => 'Pages', 'items' => [
			['label' => 'Career', 'url' => ['/site/career']],
			['label' => 'Blog Single', 'url' => ['/site/blog-item']],
			['label' => 'Pricing', 'url' => ['/site/pricing']],
			['label' => '404', 'url' => ['/site/404']],
			['label' => 'Registration', 'url' => ['/site/registration']],
			'<li role="presentation" class="divider"></li>',
			['label' => 'Privacy Policy', 'url' => ['/site/privacy']],
			['label' => 'Terms of Use', 'url' => ['/site/terms']],
		//	['label' => 'SweetAlert', 'url' => ['/site/page', 'view' => 'sweetalert']],
		]],

		['label' => 'Blog', 'url' => ['/site/blog']],
		['label' => 'Contact', 'url' => ['/site/contact-us']],



	];
	$userMenuItems = [];
	if (Yii::$app->user->isGuest) {
		$userMenuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
		$userMenuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
	} else {
		$userMenuItems[] = [
			'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
			'url' => ['/site/logout'],
			'linkOptions' => ['data-method' => 'post']
		];
	}
	$menuItems[] = [
		'label' => 'User',
		'items' => $userMenuItems,
		'options' => ['class' => 'dropdown']
	];
	echo Nav::widget([
		'options' => ['class' => 'navbar-nav navbar-right'],
		'items' => $menuItems,
	]);
	NavBar::end();
?>




