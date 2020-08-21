<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'css/site.css',
  
        'app-assets/css/core/menu/menu-types/vertical-menu.css',
        'app-assets/css/core/colors/palette-gradient.css',
        'app-assets/vendors/css/vendors.min.css',
        'app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css',
        'app-assets/vendors/css/weather-icons/climacons.min.css',
        'app-assets/fonts/meteocons/style.css',
        'app-assets/vendors/css/charts/morris.css',
        'app-assets/vendors/css/charts/chartist.css',
        'app-assets/vendors/css/charts/chartist-plugin-tooltip.css',

        'app-assets/css/bootstrap.css',
        'app-assets/css/bootstrap-extended.css',
        'app-assets/css/colors.css',
        'app-assets/css/components.css',
        
        'app-assets/css/core/menu/menu-types/vertical-compact-menu.css',
        'app-assets/css/core/colors/palette-gradient.css',
        'app-assets/fonts/mobiriseicons/24px/mobirise/style.css',
        // 'app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css',
        'app-assets/fonts/simple-line-icons/style.css',
        'app-assets/css/core/colors/palette-gradient.css',
        'app-assets/css/pages/timeline.css',
        'app-assets/css/pages/dashboard-travel.css',

        'assets/css/style.css',
    ];
    public $js = [
       'app-assets/vendors/js/vendors.min.js',
    //    'app-assets/js/scripts/pages/hospital-payment-reports.js',
        // 'app-assets/vendors/js/charts/chart.min.js',
        // 'app-assets/vendors/js/charts/raphael-min.js',
        // 'app-assets/vendors/js/charts/morris.min.js',
        // 'app-assets/vendors/js/charts/jquery.sparkline.min.js',
        // 'app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js',
        // 'app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js',
        // 'app-assets/data/jvector/visitor-data.js',

        'app-assets/js/core/app-menu.js',
        'app-assets/js/core/app.js',
        // 'app-assets/js/scripts/pages/dashboard-travel.js',

    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
