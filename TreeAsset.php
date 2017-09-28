<?php

namespace app\components;

use yii\web\AssetBundle;

class TreeAsset extends AssetBundle
{
    public $sourcePath = "@app/components/treeasset";
    public $css = [
        'css/style.css'
    ];
    public $js = [
        'js/script.js'
    ];
}