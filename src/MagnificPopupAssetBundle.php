<?php

namespace effsoft\eff\asset\magnific\popup;

use effsoft\eff\EffAssetBundle;

class MagnificPopupAssetBundle extends EffAssetBundle{

    public $sourcePath = '@bower/magnific-popup/dist';

    public function init(){
        parent::init();

    }

    public $css = [
        'magnific-popup.css',
    ];
    public $js = [
        YII_ENV_DEV ? 'jquery.magnific-popup.js':'jquery.magnific-popup.min.js',
    ];

    

}