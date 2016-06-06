<?php
/**
 * contact.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things-demo
 * @license MIT
 */

use yii\bootstrap\Html;
use yii\widgets\Breadcrumbs;
use yii\bootstrap\ActiveForm;
use p2made\helpers\FA;
//use yii\captcha\Captcha;

// load assets...

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="content-wrapper">
	<?= Breadcrumbs::widget([
		'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
	]) ?>

	<div class="jumbotron">
		<h1><?= Html::encode($this->title) ?></h1>
	</div>

	<div class="body-content">

		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
					</div>
					<div class="panel-body">

						<?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
							<?= $form->field($model, 'name') ?>
							<?= $form->field($model, 'email') ?>
							<?= $form->field($model, 'subject') ?>
							<?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>
							<!--< ?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
								'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
							]) ?>-->
							<div class="form-group">
								<?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
							</div>
						<?php ActiveForm::end(); ?>

					</div>
				</div>
			</div>
		</div>

	</div>

	<!-- this goes on every site file in p2made demos -->
	<br><div class="alert alert-success" role="alert">
		<ul class="fa-ul">
			<li>
				<?= FA::fw(FA::_CODE)->li()->size(FA::SIZE_LARGE) ?> <code><?= __FILE__ ?></code>
			</li>
		</ul>
	</div>
</div><!-- /#content-wrapper -->
