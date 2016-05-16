<?php
/**
 * index.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things-demo
 * @license MIT
 */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use yii\bootstrap\ActiveForm;

// load assets...

//p2made\assets\TimelineAsset::register($this);
//p2made\assets\MorrisAsset::register($this);
//p2made\demo\assets\ThingsDemoAsset::register($this);

// DEMO ONLY _DON'T_ use this in your production copy.
//p2made\demo\assets\MorrisDemoData::register($this);

/* @var $this yii\web\View */
$this->title = 'P2Y2Things';
?>
<div id="site-index">


	<div class="alert alert-info" role="alert"><p><code><?= __FILE__ ?></code></p></div>
</div><!-- /#content-wrapper -->
