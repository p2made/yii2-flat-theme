<?php
/**
 * FlatAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-flat-theme
 *
 */

namespace p2made\theme\Flat\web;

class FlatAsset extends \yii\web\AssetBundle
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
		'p2made\assets\FontAwesomeAsset',
	];
}
