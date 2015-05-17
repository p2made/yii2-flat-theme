<?php
namespace p2made\theme\Flat\web;

/**
 * SB Admin 2 AssetBundle
 * @since 0.1
 */
class SBAdmin2Asset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/p2made/yii2-flat-theme/assets';

	public $css = [
		'css/flat.min.css',
	];

	public $js = [
		'js/flat.min.js'
	];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapPluginAsset',
		'\rmrevin\yii\fontawesome\AssetBundle',
	];
}
