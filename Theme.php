<?php
/**
 * Theme.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-flat-theme
 * @license MIT
 */

namespace p2made\theme\Flat;

use Yii;

class Theme extends \yii\base\Theme
{
	/**
	 * @inheritdoc
	 */
	public $pathMap = [
		'@frontend/views' => '@p2made/theme/Flat/views',
		'@frontend/modules' => '@p2made/theme/Flat/modules'
	];

	/**
	 * @inheritdoc
	 */
	public function init()
	{
		parent::init();

		Yii::$app->assetManager->bundles['yii\bootstrap\BootstrapAsset'] = [
			'sourcePath' => '@vova07/themes/site/assets',
			'css' => [
				'css/bootstrap.min.css'
			]
		];
		Yii::$app->assetManager->bundles['yii\bootstrap\BootstrapPluginAsset'] = [
			'sourcePath' => '@vova07/themes/site/assets',
			'js' => [
				'js/bootstrap.min.js'
			]
		];
	}
}
p2made/theme/Flat/
