<?php

/** @var array $params */

?>

<!-- Starting from prodid downwards, manipulate it using widget, data is outside params -->

<input type="radio"
    name="product_id"
    autocomplete="off"
    data-pp="<?= $ppcode ?>"
    data-amount="<?= $damount ?>"
    data-name="<?= $dname ?>"
    data-sub_name="<?= $dsubname ?>"
    data-products="<?= $dproducts ?>"
    data-product_thumb="<?= $prodthumb ?>"
    data-month="<?= $dmonth ?>"
    data-month_text="<?= $dmonthintext ?>"
    data-normal_amount="<?= $normalamount ?>"
    data-save_amount="<?= $saveamount ?>"
    value="<?= $prodidvalue ?>"
    Control everthing below outside params
    id="<?= $prodid ?>">
<label class="<?= $labelclass ?>"
    for="<?= $prodid ?>">

    <!-- DEFAULT IMAGE -->
    <picture class="<?= $pictureClass ?>">
        <source srcset="<?= $src ?>" type="image/<?= $srcType ?>"
            <?= $srcMobile ? "media=\"(min-width: {$desktopSize})\"" : '' ?>>

        <?php if ($srcMobile): ?>
            <?php if ($fallback): ?>
                <source srcset="<?= $fallback ?>" type="image/<?= $fallbackType ?>"
                    media="(min-width: <?= $desktopSize ?>)">
            <?php endif; ?>

            <source srcset="<?= $srcMobile ?>" type="image/<?= $srcMobileType ?>"
                media="(max-width: <?= $mobileSize ?>)">
        <?php endif; ?>

        <img src="<?= $srcMobile ? ($fallbackMobile ?? $srcMobile) : ($fallback ?? $src) ?>"
            alt="<?= $alt ?>"
            class="<?= $imgClass ?>"
            loading="<?= $loading ? 'lazy' : 'eager' ?>">
    </picture>

    <!-- SELECTED IMAGE -->
    <picture class="<?= $selpictureClass ?>">
        <source srcset="<?= $src ?>" type="image/<?= $selsrcType ?>"
            <?= $selsrcMobile ? "media=\"(min-width: {$seldesktopSize})\"" : '' ?>>

        <?php if ($selsrcMobile): ?>
            <?php if ($selfallback): ?>
                <source srcset="<?= $selfallback ?>" type="image/<?= $selfallbackType ?>"
                    media="(min-width: <?= $seldesktopSize ?>)">
            <?php endif; ?>

            <source srcset="<?= $selsrcMobile ?>" type="image/<?= $selsrcMobileType ?>"
                media="(max-width: <?= $selmobileSize ?>)">
        <?php endif; ?>

        <img src="<?= $selsrcMobile ? ($selfallbackMobile ?? $selsrcMobile) : ($selfallback ?? $selsrc) ?>"
            alt="<?= $selalt ?>"
            class="<?= $selimgClass ?>"
            loading="<?= $selloading ? 'lazy' : 'eager' ?>">
    </picture>


</label>