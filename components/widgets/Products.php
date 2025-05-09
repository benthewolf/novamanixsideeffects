<?php

namespace app\components\widgets;

use yii\base\Widget;

class Products extends Widget
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

    // Selected
    public $selsrc = null;
    public $selsrcMobile = null;
    public $selFallback = null;
    public $selfallbackMobile = null;

    //Data attributes
    public $ppcode = null;
    public $damount = null;
    public $dname = null;
    public $dsubname = null;
    public $dproducts = null;
    public $prodthumb = null;
    public $dmonth = null;
    public $dmonthintext = null;
    public $normalamount = null;
    public $saveamount = null;
    public $prodidvalue = null;
    public $prodid = null;
    public $labelclass = null;
    public $selected = null;


    public function run()
    {
        return $this->render('products', [
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

            // Data
            'ppcode' => $this->ppcode,
            'damount' => $this->damount,
            'dname' => $this->dname,
            'dsubname' => $this->dsubname,
            'dproducts' => $this->dproducts,
            'prodthumb' => $this->prodthumb,
            'dmonth' => $this->dmonth,
            'dmonthintext' => $this->dmonthintext,
            'normalamount' => $this->normalamount,
            'saveamount' => $this->saveamount,
            'prodidvalue' => $this->prodidvalue,
            'prodid' => $this->prodid,
            'labelclass' => $this->labelclass,

            // Selected State
            'selsrc' => $this->selsrc,
            'selsrcMobile' => $this->selsrcMobile,
            'selFallback' => $this->selFallback,
            'selfallbackMobile' => $this->selfallbackMobile,
            'selected' => $this->selected,
        ]);
    }
}
