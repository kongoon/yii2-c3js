<?php
namespace kongoon\c3js;
use yii\web\AssetBundle;

class C3JSAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/c3js-chart';
    public $css = [
        'c3.css',
    ];
    public $js = [
        'c3.js',
        'extensions/js/c3ext.js',
        'extensions/chart-bubble/bubble.js',
        'extensions/exporter/phantom-exporter.js',
    ];
    public $depends = ['yii\web\JqueryAsset'];
}
