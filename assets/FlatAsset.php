<?php
/**
 * FlatAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-flat-theme
 *
 */

namespace p2m\theme\Flat\assets;

class FlatAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/p2made/yii2-flat-theme/assets/lib';

	public $css = [
		'css/flat-theme.css',
	];

	public $js = [
		'js/flat-theme.js'
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
		'p2m\assets\PrettyPhotoAsset',
		'p2m\assets\AnimateAsset',
	];
}
