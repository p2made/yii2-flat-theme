<?php
use yii\helpers\Html;
use p2made\theme\Flat\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

\rmrevin\yii\fontawesome\AssetBundle::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<?= $this->render('html-header.php', []) ?>
<body>
	<?php $this->beginBody() ?>
	<?= $this->render('header.php', []) ?>

	<?php if (Yii::$app->controller->action->id !== 'index') {
		$this->render('page-title.php', []);
	} ?>

	<?= Alert::widget() ?>
	<?= $content ?>

	<?= $this->render('footer.php', []) ?>
	<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
