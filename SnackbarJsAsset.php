<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace romdim\snackbarjs;

use yii\web\AssetBundle;

/**
 * Asset bundle for the SnackbarJs css and js files.
 *
 * @author Romanos Tsouroplis <rom-dim@hotmail.com>
 */
class SnackbarJsAsset extends AssetBundle
{
	public $sourcePath = '@bower/snackbarjs/dist';
	public $css = [
		'snackbar.min.css'
	];
	public $js = [
		'snackbar.min.js',
	];
	public $depends = [
		'yii\web\JqueryAsset',
		'romdim\bootstrap\material\BootMaterialCssAsset'
	];
}
