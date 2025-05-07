<?php

/** @var array $params */

?>

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