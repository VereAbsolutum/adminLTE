<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class PluginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'custom-assets/plugins/fontawesome-free/css/all.min.css',
        'custom-assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
        'custom-assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
        'custom-assets/plugins/jqvmap/jqvmap.min.css',
        'custom-assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
        'custom-assets/plugins/daterangepicker/daterangepicker.css',
        'custom-assets/plugins/summernote/summernote-bs4.min.css',
    ];
    public $js = [
        // 'custom-assets/plugins/jquery/jquery.min.js',
        'custom-assets/plugins/jquery-ui/jquery-ui.min.js',
        'custom-assets/plugins/bootstrap/js/bootstrap.bundle.min.js',
        'custom-assets/plugins/chart.js/Chart.min.js',
        // 'custom-assets/plugins/sparklines/sparklines.min.js',
        // 'custom-assets/plugins/jqvmap/jquery.vmap.usa.js',
        // 'custom-assets/plugins/jqvmap/maps/jquery.vmap.usa.js',
        'custom-assets/plugins/jquery-knob/jquery.knob.min.js',
        'custom-assets/plugins/moment/moment.min.js',
        'custom-assets/plugins/daterangepicker/daterangepicker.js',
        'custom-assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
        'custom-assets/plugins/summernote/summernote-bs4.min.js',
        'custom-assets/plugins/daterangepicker/daterangepicker.js',
        'custom-assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
        'custom-assets/plugins/daterangepicker/daterangepicker.js',

    ];
    // public $depends = [
    //     'yii\web\YiiAsset',
    //     'yii\bootstrap5\BootstrapAsset'
    // ];
}
