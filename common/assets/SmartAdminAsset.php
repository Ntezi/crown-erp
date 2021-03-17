<?php


namespace common\assets;


use yii\web\AssetBundle;

class SmartAdminAsset extends AssetBundle
{
    public $sourcePath = '@common/assets/smart-admin-v.4/smartadmin-html-full/dist/';

    public $css = [
        'css/vendors.bundle.css',
        'css/app.bundle.css',
//        'css/miscellaneous/reactions/reactions.css',
//        'css/miscellaneous/fullcalendar/fullcalendar.bundle.css',
//        'css/miscellaneous/jqvmap/jqvmap.bundle.css',
        'css/page-login.css',
        'css/fa-brands.css',
        'css/formplugins/bootstrap-datepicker/bootstrap-datepicker.css',
//        'css/themes/cust-theme-1.css',
//        'css/themes/cust-theme-2.css',
//        'css/themes/cust-theme-3.css',
//        'css/themes/cust-theme-4.css',
        'css/themes/cust-theme-5.css',
//        'css/themes/cust-theme-6.css',
//        'css/themes/cust-theme-7.css',
//        'css/themes/cust-theme-8.css',
//        'css/themes/cust-theme-9.css',
//        'css/themes/cust-theme-10.css',
//        'css/themes/cust-theme-12.css',
//        'css/themes/cust-theme-13.css'
        'css/datagrid/datatables/datatables.bundle.css',
        'css/page-invoice.css',
    ];
    public $js = [
        'js/vendors.bundle.js',
        'js/app.bundle.js',
        'js/dependency/moment/moment.js',
//        'js/miscellaneous/fullcalendar/fullcalendar.bundle.js',
//        'js/statistics/sparkline/sparkline.bundle.js',
        'js/statistics/easypiechart/easypiechart.bundle.js',
//        'js/statistics/flot/flot.bundle.js',
//        'js/miscellaneous/jqvmap/jqvmap.bundle.js',
        'js/datagrid/datatables/datatables.bundle.js',
        'js/formplugins/bootstrap-datepicker/bootstrap-datepicker.js',
    ];
    public $jsOptions = [
//        'async' => 'async',
//        'defer' => 'defer',
    ];
    public $depends = [
//        'yii\bootstrap\BootstrapAsset',
//        'yii\bootstrap\BootstrapPluginAsset'
    ];

}