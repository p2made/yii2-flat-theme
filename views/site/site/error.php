<?php
/**
 * error.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things-demo
 * @license MIT
 */

use yii\bootstrap\Html;
use yii\widgets\Breadcrumbs;

// load assets...

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
?>
<div class="site-error">

	<h1><?= Html::encode($this->title) ?></h1>
	<?= Breadcrumbs::widget([
		'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
	]) ?>

	<div class="alert alert-danger">
		<?= nl2br(Html::encode($message)) ?>
	</div>

	<p>
		The above error occurred while the Web server was processing your request.
	</p>
	<p>
		Please contact us if you think this is a server error. Thank you.
	</p>

</div>
