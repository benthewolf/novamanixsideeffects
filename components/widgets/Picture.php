<?php

namespace app\components\widgets;

use yii\base\Widget;

class Picture extends Widget
{
    public $src = null;
    public $srcType = 'webp';
    public $fallback = null;
    public $fallbackType = 'png';
    public $srcMobile = null;
    public $srcMobileType = 'webp';
    public $fallbackMobile = null;
    public $fallbackMobileType = 'png';
    public $pictureClass = null;
    public $imgClass = null;
    public $alt = null;
    public $loading = true;
    public $desktopSize = '1024px';
    public $mobileSize = '1023px';

    public function run()
    {
        return $this->render('picture', [
            'src' => $this->src,
            'srcType' => $this->srcType,
            'fallback' => $this->fallback,
            'fallbackType' => $this->fallbackType,
            'srcMobile' => $this->srcMobile,
            'srcMobileType' => $this->srcMobileType,
            'fallbackMobile' => $this->fallbackMobile,
            'fallbackMobileType' => $this->fallbackMobileType,
            'pictureClass' => $this->pictureClass,
            'imgClass' => $this->imgClass,
            'alt' => $this->alt,
            'loading' => $this->loading,
            'desktopSize' => $this->desktopSize,
            'mobileSize' => $this->mobileSize,
        ]);
    }
}
