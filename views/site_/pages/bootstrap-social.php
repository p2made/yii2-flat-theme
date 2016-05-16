<?php
/**
 * bootstrap-social.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things-demo
 * @license MIT
 */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use p2made\helpers\BootstrapSocial;

// load assets...
p2made\assets\JqueryAsset::register($this);
p2made\assets\BootstrapAsset::register($this);
p2made\assets\BootstrapPluginAsset::register($this);
p2made\assets\FontAwesomeAsset::register($this);
p2made\assets\JuiAsset::register($this);

p2made\assets\BootstrapSocialAsset::register($this);
p2made\demo\assets\ThingsDemoAsset::register($this);

/* @var $this yii\web\View */

$this->title = 'Bootstrap Social';
$this->params['breadcrumbs'][] = $this->title;

$_icons = [
	['name' => 'App.net', 'code' => 'adn', 'icon' => 'adn', 'hex' => '#D87A68'],
	['name' => 'Bitbucket', 'code' => 'bitbucket', 'icon' => 'bitbucket', 'hex' => '#205081'],
	['name' => 'Dropbox', 'code' => 'dropbox', 'icon' => 'dropbox', 'hex' => '#1087DD'],
	['name' => 'Facebook', 'code' => 'facebook', 'icon' => 'facebook', 'hex' => '#3B5998'],
	['name' => 'Flickr', 'code' => 'flickr', 'icon' => 'flickr', 'hex' => '#2BA9E1'],
	['name' => 'Foursquare', 'code' => 'foursquare', 'icon' => 'foursquare', 'hex' => '#f94877'],
	['name' => 'GitHub', 'code' => 'github', 'icon' => 'github', 'hex' => '#444444'],
	['name' => 'Google', 'code' => 'google', 'icon' => 'google', 'hex' => '#DD4B39'],
	['name' => 'Instagram', 'code' => 'instagram', 'icon' => 'instagram', 'hex' => '#3F729B'],
	['name' => 'LinkedIn', 'code' => 'linkedin', 'icon' => 'linkedin', 'hex' => '#007BB6'],
	['name' => 'Microsoft', 'code' => 'microsoft', 'icon' => 'windows', 'hex' => '#2672EC'],
	['name' => 'Odnoklassniki', 'code' => 'odnoklassniki', 'icon' => 'odnoklassniki', 'hex' => '#F4731C'],
	['name' => 'OpenID', 'code' => 'openid', 'icon' => 'openid', 'hex' => '#F7931E'],
	['name' => 'Pinterest', 'code' => 'pinterest', 'icon' => 'pinterest', 'hex' => '#CB2027'],
	['name' => 'Reddit', 'code' => 'reddit', 'icon' => 'reddit', 'hex' => '#EFF7FF'],
	['name' => 'SoundCloud', 'code' => 'soundcloud', 'icon' => 'soundcloud', 'hex' => '#FF5500'],
	['name' => 'Tumblr', 'code' => 'tumblr', 'icon' => 'tumblr', 'hex' => '#CB2027'],
	['name' => 'Twitter', 'code' => 'twitter', 'icon' => 'twitter', 'hex' => '#55ACEE'],
	['name' => 'Vimeo', 'code' => 'vimeo', 'icon' => 'vimeo-square', 'hex' => '#1AB7EA'],
	['name' => 'VK', 'code' => 'vk', 'icon' => 'vk', 'hex' => '#587EA3'],
	['name' => 'Yahoo!', 'code' => 'yahoo', 'icon' => 'yahoo', 'hex' => '#720E9E'],
];

?>
<div class="site-index">
	<?= Breadcrumbs::widget([
		'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
	]) ?>

	<div class="jumbotron">
		<h1>Social Buttons for Bootstrap <em>&amp; Yii2</em></h1>
	</div>

	<div class="body-content">

		<div class="row">
			<div class="col-md-4">
				<h3 class="text-center">The Buttons</h3>
				<a class="btn btn-block btn-social btn-adn">
					<span class="fa fa-adn"></span> Sign in with App.net
				</a>
				<a class="btn btn-block btn-social btn-bitbucket">
					<span class="fa fa-bitbucket"></span> Sign in with Bitbucket
				</a>
				<a class="btn btn-block btn-social btn-dropbox">
					<span class="fa fa-dropbox"></span> Sign in with Dropbox
				</a>
				<a class="btn btn-block btn-social btn-facebook">
					<span class="fa fa-facebook"></span> Sign in with Facebook
				</a>
				<a class="btn btn-block btn-social btn-flickr">
					<span class="fa fa-flickr"></span> Sign in with Flickr
				</a>
				<a class="btn btn-block btn-social btn-foursquare">
					<span class="fa fa-foursquare"></span> Sign in with Foursquare
				</a>
				<a class="btn btn-block btn-social btn-github">
					<span class="fa fa-github"></span> Sign in with GitHub
				</a>
				<a class="btn btn-block btn-social btn-google">
					<span class="fa fa-google"></span> Sign in with Google
				</a>
				<a class="btn btn-block btn-social btn-instagram">
					<span class="fa fa-instagram"></span> Sign in with Instagram
				</a>
				<a class="btn btn-block btn-social btn-linkedin">
					<span class="fa fa-linkedin"></span> Sign in with LinkedIn
				</a>
				<a class="btn btn-block btn-social btn-microsoft">
					<span class="fa fa-windows"></span> Sign in with Microsoft
				</a>
				<a class="btn btn-block btn-social btn-odnoklassniki">
					<span class="fa fa-odnoklassniki"></span> Sign in with Odnoklassniki
				</a>
				<a class="btn btn-block btn-social btn-openid">
					<span class="fa fa-openid"></span> Sign in with OpenID
				</a>
				<a class="btn btn-block btn-social btn-pinterest">
					<span class="fa fa-pinterest"></span> Sign in with Pinterest
				</a>
				<a class="btn btn-block btn-social btn-reddit">
					<span class="fa fa-reddit"></span> Sign in with Reddit
				</a>
				<a class="btn btn-block btn-social btn-soundcloud">
					<span class="fa fa-soundcloud"></span> Sign in with SoundCloud
				</a>
				<a class="btn btn-block btn-social btn-tumblr">
					<span class="fa fa-tumblr"></span> Sign in with Tumblr
				</a>
				<a class="btn btn-block btn-social btn-twitter">
					<span class="fa fa-twitter"></span> Sign in with Twitter
				</a>
				<a class="btn btn-block btn-social btn-vimeo">
					<span class="fa fa-vimeo-square"></span> Sign in with Vimeo
				</a>
				<a class="btn btn-block btn-social btn-vk">
					<span class="fa fa-vk"></span> Sign in with VK
				</a>
				<a class="btn btn-block btn-social btn-yahoo">
					<span class="fa fa-yahoo"></span> Sign in with Yahoo!
				</a>

				<hr>

				<div class="text-center">
					<a class="btn btn-social-icon btn-adn"><span class="fa fa-adn"></span></a>
					<a class="btn btn-social-icon btn-bitbucket"><span class="fa fa-bitbucket"></span></a>
					<a class="btn btn-social-icon btn-dropbox"><span class="fa fa-dropbox"></span></a>
					<a class="btn btn-social-icon btn-facebook"><span class="fa fa-facebook"></span></a>
					<a class="btn btn-social-icon btn-flickr"><span class="fa fa-flickr"></span></a>
					<a class="btn btn-social-icon btn-foursquare"><span class="fa fa-foursquare"></span></a>
					<a class="btn btn-social-icon btn-github"><span class="fa fa-github"></span></a>
					<a class="btn btn-social-icon btn-google"><span class="fa fa-google-plus"></span></a>
					<a class="btn btn-social-icon btn-instagram"><span class="fa fa-instagram"></span></a>
					<a class="btn btn-social-icon btn-linkedin"><span class="fa fa-linkedin"></span></a>
					<a class="btn btn-social-icon btn-microsoft"><span class="fa fa-windows"></span></a>
					<a class="btn btn-social-icon btn-odnoklassniki"><span class="fa fa-odnoklassniki"></span></a>
					<a class="btn btn-social-icon btn-openid"><span class="fa fa-openid"></span></a>
					<a class="btn btn-social-icon btn-pinterest"><span class="fa fa-pinterest"></span></a>
					<a class="btn btn-social-icon btn-reddit"><span class="fa fa-reddit"></span></a>
					<a class="btn btn-social-icon btn-soundcloud"><span class="fa fa-soundcloud"></span></a>
					<a class="btn btn-social-icon btn-tumblr"><span class="fa fa-tumblr"></span></a>
					<a class="btn btn-social-icon btn-twitter"><span class="fa fa-twitter"></span></a>
					<a class="btn btn-social-icon btn-vimeo"><span class="fa fa-vimeo-square"></span></a>
					<a class="btn btn-social-icon btn-vk"><span class="fa fa-vk"></span></a>
					<a class="btn btn-social-icon btn-yahoo"><span class="fa fa-yahoo"></span></a>
				</div>
			</div>
			<div class="col-md-4">
				<h3 class="text-center">Available Classes</h3>
				<ul class="social-class list-unstyled">
					<li data-code="adn" data-name="App.net"><code>btn-adn</code> <span class="social-hex">#D87A68</span></li>
					<li data-code="bitbucket" data-name="Bitbucket"><code>btn-bitbucket</code> <span class="social-hex">#205081</span></li>
					<li data-code="dropbox" data-name="Dropbox"><code>btn-dropbox</code> <span class="social-hex">#1087DD</span></li>
					<li data-code="facebook" data-name="Facebook"><code>btn-facebook</code> <span class="social-hex">#3B5998</span></li>
					<li data-code="flickr" data-name="Flickr"><code>btn-flickr</code> <span class="social-hex">#2BA9E1</span></li>
					<li data-code="foursquare" data-name="Foursquare"><code>btn-foursquare</code> <span class="social-hex">#f94877</span></li>
					<li data-code="github" data-name="GitHub"><code>btn-github</code> <span class="social-hex">#444444</span></li>
					<li data-code="google" data-name="Google"><code>btn-google</code> <span class="social-hex">#DD4B39</span></li>
					<li data-code="instagram" data-name="Instagram"><code>btn-instagram</code> <span class="social-hex">#3F729B</span></li>
					<li data-code="linkedin" data-name="LinkedIn"><code>btn-linkedin</code> <span class="social-hex">#007BB6</span></li>
					<li data-code="microsoft" data-icon="windows" data-name="Microsoft"><code>btn-microsoft</code> <span class="social-hex">#2672EC</span></li>
					<li data-code="odnoklassniki" data-name="Odnoklassniki"><code>btn-odnoklassniki</code> <span class="social-hex">#F4731C</span></li>
					<li data-code="openid" data-name="OpenID"><code>btn-openid</code> <span class="social-hex">#F7931E</span></li>
					<li data-code="pinterest" data-name="Pinterest"><code>btn-pinterest</code> <span class="social-hex">#CB2027</span></li>
					<li data-code="reddit" data-name="Reddit"><code>btn-reddit</code> <span class="social-hex">#EFF7FF</span></li>
					<li data-code="soundcloud" data-name="SoundCloud"><code>btn-soundcloud</code> <span class="social-hex">#FF5500</span></li>
					<li data-code="tumblr" data-name="Tumblr"><code>btn-tumblr</code> <span class="social-hex">#CB2027</span></li>
					<li data-code="twitter" data-name="Twitter"><code>btn-twitter</code> <span class="social-hex">#55ACEE</span></li>
					<li data-code="vimeo" data-icon="vimeo-square" data-name="Vimeo"><code>btn-vimeo</code> <span class="social-hex">#1AB7EA</span></li>
					<li data-code="vk" data-name="VK"><code>btn-vk</code> <span class="social-hex">#587EA3</span></li>
					<li data-code="yahoo" data-name="Yahoo!"><code>btn-yahoo</code> <span class="social-hex">#720E9E</span></li>
				</ul>
			</div>
			<div class="col-md-4">
				<div class="social-sizes">
					<h3 class="text-center">Different Sizes</h3>
					<a class="btn btn-block btn-social btn-lg btn-google">
						<span class="fa fa-google-plus"></span>
						Sign in with Google
					</a>
					<a class="btn btn-block btn-social btn-google">
						<span class="fa fa-google-plus"></span>
						Sign in with Google
					</a>
					<a class="btn btn-block btn-social btn-sm btn-google">
						<span class="fa fa-google-plus"></span>
						Sign in with Google
					</a>
					<a class="btn btn-block btn-social btn-xs btn-google">
						<span class="fa fa-google-plus"></span>
						Sign in with Google
					</a>
					<hr>
					<div class="text-center">
						<a class="btn btn-social-icon btn-lg btn-google"><span class="fa fa-google-plus"></span></a>
						<a class="btn btn-social-icon btn-google"><span class="fa fa-google-plus"></span></a>
						<a class="btn btn-social-icon btn-sm btn-google"><span class="fa fa-google-plus"></span></a>
						<a class="btn btn-social-icon btn-xs btn-google"><span class="fa fa-google-plus"></span></a>
					</div>
				</div>
				<hr>
			</div>
		</div>

	</div>

<script>
</script>

	<br><div class="alert alert-info" role="alert"><p><code><?= __FILE__ ?></code></p></div>
</div><!-- /#site-index -->
