<?php
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */
?>
<section id="title" class="emerald">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h1><?php echo $this->title; ?></h1>
				<p>Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
			</div>
			<div class="col-sm-6">
				<?= Breadcrumbs::widget([
					'options' => ['class' => 'breadcrumb pull-right'],
					'links' => isset($this->params['breadcrumbs'])
					? $this->params['breadcrumbs'] : [],
				]) ?>
			</div>
		</div>
	</div>
</section>
