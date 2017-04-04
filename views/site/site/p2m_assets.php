<?php
/**
 * index.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things-demo
 * @license MIT
 */

// `register` lines for all assets...

p2m\assets\AnimateAsset::register($this);
p2m\assets\BootstrapAsset::register($this);
p2m\assets\BootstrapPluginAsset::register($this);
p2m\assets\BootstrapSocialAsset::register($this);
p2m\assets\BootstrapSweetalertAsset::register($this);
p2m\assets\BootstrapSwitchAsset::register($this);
p2m\assets\CircleButtonsAsset::register($this);
p2m\assets\ColorHelpersAsset::register($this);
p2m\assets\DataTablesAsset::register($this);
p2m\assets\DataTablesAutoFillAsset::register($this);
p2m\assets\DataTablesBundleAsset::register($this);
p2m\assets\DataTablesButtonsAsset::register($this);
p2m\assets\DataTablesColReorderAsset::register($this);
p2m\assets\DataTablesFiles::register($this);
p2m\assets\DataTablesFixedColumnsAsset::register($this);
p2m\assets\DataTablesFixedHeaderAsset::register($this);
p2m\assets\DataTablesKeyTableAsset::register($this);
p2m\assets\DataTablesResponsiveAsset::register($this);
p2m\assets\DataTablesRowReorderAsset::register($this);
p2m\assets\DataTablesScrollerAsset::register($this);
p2m\assets\DataTablesSelectAsset::register($this);
p2m\assets\EkkoLightboxAsset::register($this);
p2m\assets\FitvidsAsset::register($this);
p2m\assets\FlagIconCssAsset::register($this);
p2m\assets\FlotAsset::register($this);
p2m\assets\FlotBundleAsset::register($this);
p2m\assets\FlotCanvasAsset::register($this);
p2m\assets\FlotCategoriesAsset::register($this);
p2m\assets\FlotChartsAsset::register($this);
p2m\assets\FlotCrosshairAsset::register($this);
p2m\assets\FlotErrorbarsAsset::register($this);
p2m\assets\FlotFillbetweenAsset::register($this);
p2m\assets\FlotImageAsset::register($this);
p2m\assets\FlotNavigateAsset::register($this);
p2m\assets\FlotPieAsset::register($this);
p2m\assets\FlotResizeAsset::register($this);
p2m\assets\FlotSelectionAsset::register($this);
p2m\assets\FlotStackAsset::register($this);
p2m\assets\FlotSymbolAsset::register($this);
p2m\assets\FlotThresholdAsset::register($this);
p2m\assets\FlotTimeAsset::register($this);
p2m\assets\FlotTooltipAsset::register($this);
p2m\assets\FontAwesomeAsset::register($this);
p2m\assets\FullCalendarAsset::register($this);
p2m\assets\FullCalendarPrintAsset::register($this);
p2m\assets\GMapsApiAsset::register($this);
p2m\assets\GMapsAsset::register($this);
p2m\assets\HolderAsset::register($this);
p2m\assets\IsotopeAsset::register($this);
p2m\assets\JqueryAsset::register($this);
p2m\assets\JqueryCountToAsset::register($this);
p2m\assets\JqueryMigrateAsset::register($this);
p2m\assets\JuiAsset::register($this);
p2m\assets\Lightbox2Asset::register($this);
p2m\assets\MasonryAsset::register($this);
p2m\assets\MetisMenuAsset::register($this);
p2m\assets\MomentAsset::register($this);
p2m\assets\MomentTimezoneAsset::register($this);
p2m\assets\MorrisAsset::register($this);
p2m\assets\P2AssetBundle::register($this);
p2m\assets\PrettyPhotoAsset::register($this);
p2m\assets\QunitAsset::register($this);
p2m\assets\RaphaelAsset::register($this);
p2m\assets\SweetAlertAsset::register($this);
p2m\assets\TimelineAsset::register($this);
p2m\assets\TimelineCssAsset::register($this);
p2m\assets\WowAsset::register($this);

p2m\assets\Html5shivAsset::register($this);
p2m\assets\PrintShivAsset::register($this);
p2m\assets\RespondAsset::register($this);


// dependency lines for all assets...

	'p2m\assets\AnimateAsset',
	'p2m\assets\BootstrapAsset',
	'p2m\assets\BootstrapPluginAsset',
	'p2m\assets\BootstrapSocialAsset',
	'p2m\assets\BootstrapSweetalertAsset',
	'p2m\assets\BootstrapSwitchAsset',
	'p2m\assets\CircleButtonsAsset',
	'p2m\assets\ColorHelpersAsset',
	'p2m\assets\DataTablesAsset',
	'p2m\assets\DataTablesAutoFillAsset',
	'p2m\assets\DataTablesBundleAsset',
	'p2m\assets\DataTablesButtonsAsset',
	'p2m\assets\DataTablesColReorderAsset',
	'p2m\assets\DataTablesFiles',
	'p2m\assets\DataTablesFixedColumnsAsset',
	'p2m\assets\DataTablesFixedHeaderAsset',
	'p2m\assets\DataTablesKeyTableAsset',
	'p2m\assets\DataTablesResponsiveAsset',
	'p2m\assets\DataTablesRowReorderAsset',
	'p2m\assets\DataTablesScrollerAsset',
	'p2m\assets\DataTablesSelectAsset',
	'p2m\assets\EkkoLightboxAsset',
	'p2m\assets\FitvidsAsset',
	'p2m\assets\FlagIconCssAsset',
	'p2m\assets\FlotAsset',
	'p2m\assets\FlotBundleAsset',
	'p2m\assets\FlotCanvasAsset',
	'p2m\assets\FlotCategoriesAsset',
	'p2m\assets\FlotChartsAsset',
	'p2m\assets\FlotCrosshairAsset',
	'p2m\assets\FlotErrorbarsAsset',
	'p2m\assets\FlotFillbetweenAsset',
	'p2m\assets\FlotImageAsset',
	'p2m\assets\FlotNavigateAsset',
	'p2m\assets\FlotPieAsset',
	'p2m\assets\FlotResizeAsset',
	'p2m\assets\FlotSelectionAsset',
	'p2m\assets\FlotStackAsset',
	'p2m\assets\FlotSymbolAsset',
	'p2m\assets\FlotThresholdAsset',
	'p2m\assets\FlotTimeAsset',
	'p2m\assets\FlotTooltipAsset',
	'p2m\assets\FontAwesomeAsset',
	'p2m\assets\FullCalendarAsset',
	'p2m\assets\FullCalendarPrintAsset',
	'p2m\assets\GMapsApiAsset',
	'p2m\assets\GMapsAsset',
	'p2m\assets\HolderAsset',
	'p2m\assets\IsotopeAsset',
	'p2m\assets\JqueryAsset',
	'p2m\assets\JqueryCountToAsset',
	'p2m\assets\JqueryMigrateAsset',
	'p2m\assets\JuiAsset',
	'p2m\assets\Lightbox2Asset',
	'p2m\assets\MasonryAsset',
	'p2m\assets\MetisMenuAsset',
	'p2m\assets\MomentAsset',
	'p2m\assets\MomentTimezoneAsset',
	'p2m\assets\MorrisAsset',
	'p2m\assets\P2AssetBundle',
	'p2m\assets\PrettyPhotoAsset',
	'p2m\assets\QunitAsset',
	'p2m\assets\RaphaelAsset',
	'p2m\assets\SweetAlertAsset',
	'p2m\assets\TimelineAsset',
	'p2m\assets\TimelineCssAsset',
	'p2m\assets\WowAsset',

	'p2m\assets\Html5shivAsset',
	'p2m\assets\PrintShivAsset',
	'p2m\assets\RespondAsset',


