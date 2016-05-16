<?php
/**
 * morris.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things-demo
 * @license MIT
 */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

// load assets...
p2made\assets\JqueryAsset::register($this);
p2made\assets\BootstrapAsset::register($this);
p2made\assets\BootstrapPluginAsset::register($this);
p2made\assets\FontAwesomeAsset::register($this);
p2made\assets\JuiAsset::register($this);

p2made\assets\FlotChartsAsset::register($this);
p2made\assets\MorrisAsset::register($this);
p2made\demo\assets\ThingsDemoAsset::register($this);

// DEMO ONLY _DON'T_ use this in your production copy.
p2made\demo\assets\FlotDemoData::register($this);
p2made\demo\assets\MorrisDemoData::register($this);

/* @var $this yii\web\View */

$this->title = 'Charts';
//$this->title = 'Morris.js Charts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="content-wrapper">
	<?= Breadcrumbs::widget([
		'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
	]) ?>

	<h1><?= Html::encode($this->title) ?></h1>


	<hr>


	<!-- Flot Charts -->
	<div class="row">
		<div class="col-lg-12">
			<h2 class="page-header">Flot Charts</h2>
			<p class="lead">Flot is a pure JavaScript plotting library for jQuery, with a focus on simple usage, attractive looks and interactive features. For full usage instructions and documentation for Flot Charts, visit <a href="http://www.flotcharts.org/">http://www.flotcharts.org/</a>.</p>
		</div>
	</div>
	<!-- /.row -->

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Line Graph Example with Tooltips</h3>
				</div>
				<div class="panel-body">
					<div class="flot-chart">
						<div class="flot-chart-content" id="flot-line-chart"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /.row -->

	<div class="row">
		<div class="col-lg-4">
			<div class="panel panel-green">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Pie Chart Example with Tooltips</h3>
				</div>
				<div class="panel-body">
					<div class="flot-chart">
						<div class="flot-chart-content" id="flot-pie-chart"></div>
					</div>
					<div class="text-right">
						<a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-8">
			<div class="panel panel-yellow">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Multiple Axes Line Graph Example with Tooltips and Raw Data</h3>
				</div>
				<div class="panel-body">
					<div class="flot-chart">
						<div class="flot-chart-content" id="flot-multiple-axes-chart"></div>
					</div>
					<div class="text-right">
						<a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /.row -->

	<div class="row">
		<div class="col-lg-6">
			<div class="panel panel-red">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Moving Line Chart</h3>
				</div>
				<div class="panel-body">
					<div class="flot-chart">
						<div class="flot-chart-content" id="flot-moving-line-chart"></div>
					</div>
					<div class="text-right">
						<a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Bar Graph with Tooltips</h3>
				</div>
				<div class="panel-body">
					<div class="flot-chart">
						<div class="flot-chart-content" id="flot-bar-chart"></div>
					</div>
					<div class="text-right">
						<a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /.row -->

	<!-- Morris Charts -->
	<div class="row">
		<div class="col-lg-12">
			<h2 class="page-header">Morris Charts</h2>
			<p class="lead">Morris.js is a very simple API for drawing line, bar, area and donut charts. For full usage instructions and documentation for Morris.js charts, visit <a href="http://morrisjs.github.io/morris.js/">http://morrisjs.github.io/morris.js/</a>.</p>
		</div>
	</div>
	<!-- /.row -->

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-green">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Area Line Graph Example with Tooltips</h3>
				</div>
				<div class="panel-body">
					<div id="morris-area-chart"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- /.row -->

	<div class="row">
		<div class="col-lg-4">
			<div class="panel panel-yellow">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Donut Chart Example</h3>
				</div>
				<div class="panel-body">
					<div id="morris-donut-chart"></div>
					<div class="text-right">
						<a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="panel panel-red">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Line Graph Example with Tooltips</h3>
				</div>
				<div class="panel-body">
					<div id="morris-line-chart"></div>
					<div class="text-right">
						<a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Bar Graph Example</h3>
				</div>
				<div class="panel-body">
					<div id="morris-bar-chart"></div>
					<div class="text-right">
						<a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /.row -->


	<hr>




	<div class="row">
		<div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<i class="fa fa-bar-chart-o fa-fw"></i> Area Chart Example
				</div><!-- /.panel-heading -->
				<div class="panel-body">
					<div class="caption">Quarterly Apple iOS device unit sales</div>
					<div id="morris-area-chart"></div>
				</div><!-- /.panel-body -->
			</div><!-- /.panel -->
		</div><!-- /.col-lg-6 -->
		<div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<i class="fa fa-bar-chart-o fa-fw"></i> Bar Chart Example
				</div><!-- /.panel-heading -->
				<div class="panel-body">
					<div class="caption">iPhone CPU benchmarks</div>
					<div id="morris-bar-chart"></div>
				</div><!-- /.panel-body -->
			</div><!-- /.panel -->
		</div><!-- /.col-lg-6 -->
	<div class="row">
	</div><!-- /.row -->
		<div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<i class="fa fa-bar-chart-o fa-fw"></i> Line Chart Example
				</div><!-- /.panel-heading -->
				<div class="panel-body">
					<div class="caption">Jaguar 'E' Type vehicles in the UK</div>
					<div id="morris-line-chart"></div>
				</div><!-- /.panel-body -->
			</div><!-- /.panel -->
		</div><!-- /.col-lg-6 -->
		<div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<i class="fa fa-bar-chart-o fa-fw"></i> Donut Chart Example
				</div><!-- /.panel-heading -->
				<div class="panel-body">
					<div class="caption">Donut flavours</div>
					<div id="morris-donut-chart"></div>
				</div><!-- /.panel-body -->
			</div><!-- /.panel -->
		</div><!-- /.col-lg-6 -->
	<div class="row">
	</div><!-- /.row -->
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Morris.js Usage
				</div><!-- /.panel-heading -->
				<div class="panel-body">
					<p>Morris.js is a jQuery based charting plugin created by Olly Smith. In SB Admin, we are using the most recent version of Morris.js which includes the resize function, which makes the charts fully responsive. The documentation for Morris.js is available on their website, <a target="_blank" href="http://morrisjs.github.io/morris.js/">http://morrisjs.github.io/morris.js/</a>.</p>
					<a target="_blank" class="btn btn-default btn-lg btn-block" href="http://morrisjs.github.io/morris.js/">View Morris.js Documentation</a>
				</div><!-- /.panel-body -->
			</div><!-- /.panel -->
		</div><!-- /.col-lg-6 -->
	</div><!-- /.row -->

	<br><div class="alert alert-info" role="alert"><p><code><?= __FILE__ ?></code></p></div>
</div><!-- /#content-wrapper -->
