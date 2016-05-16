<?php
/**
 * FlatAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-flat-theme
 *
 */

namespace p2made\theme\Flat\assets;

class FlatAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/p2made/yii2-flat-theme/assets/lib';

	public $css = [
		'css/flat.css',
	];

	public $js = [
		'js/flat.js'
	];

	public $depends = [
		'p2made\assets\BootstrapAsset',
		'p2made\assets\FontAwesomeAsset',
		'p2made\assets\PrettyPhotoAsset',
		'p2made\assets\AnimateAsset',
	];
}
