<?php
/**
 * login.php
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

// load assets...

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
	<div class="row">
		<div class="col-lg-4 col-lg-offset-4">
			<h3 class="text-center">Please fill out the following fields to login:</h3>

			<div class="well">
				<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
					<?= $form->field($model, 'username') ?>
					<?= $form->field($model, 'password')->passwordInput() ?>
					<?= $form->field($model, 'rememberMe')->checkbox() ?>
					<div style="color:#999;margin:1em 0">
						If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
					</div>
					<div class="form-group">
						<?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
					</div>
				<?php ActiveForm::end(); ?>
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
</div>
