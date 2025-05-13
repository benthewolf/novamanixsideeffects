<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <?php $this->registerCssFile('@web/css/tailwind-output.css'); ?>
    <?php $this->registerCssFile('@web/css/fonts.css'); ?>
    <link rel="preload" href="/images/progen/webp/bannermb.webp" as="image">
    <link rel="preload" href="/images/progen/webp/banner.webp" as="image">
    <!-- Google Tag Manager -->
    <script>
        let gtmLoaded = false;

        function loadGTM() {
            if (gtmLoaded) return;
            gtmLoaded = true;

            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-P32XG38');
        }

        window.addEventListener('scroll', loadGTM, {
            once: true
        });
        window.addEventListener('click', loadGTM, {
            once: true
        });
    </script>

    <!-- End Google Tag Manager -->
    <title>Novamanix</title>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>

    <?php $this->head(); ?>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P32XG38"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php echo $this->render('navbar'); ?>


    <div class="page-wrapper" style="min-height: 70vh">
        <?= $content ?>
    </div>

    <?php echo $this->render('footer'); ?>

    <?php
    unset($_GET['url']);
    $thisGet = json_encode($_GET);
    ?>
    <script>
        var str;
        var urlArray = <?= $thisGet ?>;
        var links = document.querySelectorAll("a:not([role='tab'])");
        var forms = document.querySelectorAll("form");

        function queryParams(source) {
            var array = [];
            for (var key in source) {
                array.push(encodeURIComponent(key) + "=" + encodeURIComponent(source[key]));
            }
            return array.join("&");
        }


        if (urlArray.length === 0) {
            str = '';
        } else {
            str = '?' + queryParams(urlArray);
        }
        links.forEach(function(item) {
            item.setAttribute("href", item.href += str);
        });

        forms.forEach(function(item) {
            item.setAttribute("action", item.action += str);
        });
    </script>
</body>

</html>
<?php $this->endPage() ?>