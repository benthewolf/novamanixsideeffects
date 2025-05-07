<style>
    .banner {
        background-image: url('/images/secondary/webp/bannermb.webp'), url('/images/secondary/png/bannermb.png');
        background-repeat: no-repeat;
        background-size: 430px 919px;
        background-color: black;
        background-position: top center;
    }

    section {
        font-family: "Poppins", sans-serif;
        font-family: family/text;
        letter-spacing: -2%;
        line-height: 150%;

    }

    @media (min-width: 768px) {
        .banner {
            background-image: url('/images/secondary/webp/banner.webp'), url('/images/secondary/png/banner.png');
            background-size: 1536px 430px;
            background-position: center center;
        }
    }

    @media (min-width: 1920px) {
        .banner {
            background-image: url('/images/secondary/webp/banner.webp'), url('/images/secondary/png/banner.png');
            background-size: 1920px 577.89px;
            background-position: center center;
            height: 577.89px;
        }
    }

    @media (min-width: 1922px) {
        .banner {
            background-image: url('/images/secondary/webp/banner.webp'), url('/images/secondary/png/banner.png');
            background-size: cover;
            background-position: right top;
            height: 577.89px;
        }
    }
</style>

<section class="banner h-[430px] relative w-full" id="sec-height">
    <div class="container mx-auto pt-5 max-w-[1200px] h-full">
        <div class="relative h-full w-full">
            <h2 class="max-[390px]:text-xl text-[25px] text-white text-center border-b border-white min-w-[320px] max-w-[404px] lg:max-w-[1134px] mx-auto pb-3 lg:pb-5 lg:text-4xl">natural <span class="text-[#00AEFF] font-semibold">Novamanix</span> supplements</h2>

            <div class="absolute h-[54px] w-full bg-black opacity-80 bottom-0 py-[31px] md:hidden -z-0" id="black-op">
                <ul class="space-y-5 text-white ml-[66px] opacity-0 hidden" id="ul-list">
                    <li class="text-xl font-medium leading-[150%] hover-fx"><a href="<?= Yii::$app->homeUrl ?>#intro">Introduction</a></li>
                    <li class="text-xl font-medium leading-[150%] hover-fx"><a href="<?= Yii::$app->homeUrl ?>#fi">First Impressions</a></li>
                    <li class="text-xl font-medium leading-[150%] hover-fx"><a href="<?= Yii::$app->homeUrl ?>#ingr">Ingredients</a></li>
                    <li class="text-xl font-medium leading-[150%] hover-fx"><a href="<?= Yii::$app->homeUrl ?>#hiw">How It Works</a></li>
                    <li class="text-xl font-medium leading-[150%] hover-fx"><a href="<?= Yii::$app->homeUrl ?>#faq">FAQs</a></li>
                </ul>

                <div class="absolute top-3 right-5 w-[45px] h-[34px] bg-[#D9D9D9] rounded-[5px] opacity-100 flex items-center justify-center cursor-pointer transition-all ease-in-out duration-[2.5s]" id="burger">
                    <div class=" w-[20.62px] h-[13px] flex flex-col justify-between">
                        <div class="w-full bg-[#848484] h-[2px] rounded-full"></div>
                        <div class="w-full bg-[#848484] h-[2px] rounded-full"></div>
                        <div class="w-full bg-[#848484] h-[2px] rounded-full"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="absolute h-[54px] w-full bg-black opacity-80 bottom-0 py-[31px] hidden md:flex items-center justify-center">
        <div class="container mx-auto max-w-[1200px]">
            <ul class="text-white flex justify-around w-full">
                <li class="text-xl font-medium leading-[150%] inline-block hover-fx"><a href="<?= Yii::$app->homeUrl ?>#intro">Introduction</a></li>
                <li class="text-xl font-medium leading-[150%] inline-block hover-fx"><a href="<?= Yii::$app->homeUrl ?>#fi">First Impressions</a></li>
                <li class="text-xl font-medium leading-[150%] inline-block hover-fx"><a href="<?= Yii::$app->homeUrl ?>#ingr">Ingredients</a></li>
                <li class="text-xl font-medium leading-[150%] inline-block hover-fx"><a href="<?= Yii::$app->homeUrl ?>#hiw">How It Works</a></li>
                <li class="text-xl font-medium leading-[150%] inline-block hover-fx"><a href="<?= Yii::$app->homeUrl ?>#faq">FAQs</a></li>
            </ul>
        </div>
    </div>
</section>

<script>
    document.getElementById('burger').addEventListener('click', function handleClick() {
        // Prevent multiple loads
        if (window.jQuery) {
            runBurgerAnimation();
            return;
        }

        // Load jQuery
        const script = document.createElement('script');
        script.src = 'https://code.jquery.com/jquery-3.6.0.min.js';
        script.onload = function() {
            runBurgerAnimation();
        };
        document.head.appendChild(script);
    });

    function runBurgerAnimation() {
        const $blackop = $('#black-op');
        const $secheight = $('#sec-height');
        const $ullist = $('#ul-list');

        if ($blackop.height() > 100) {
            $ullist.addClass("hidden");
            $blackop.animate({
                height: '54px',
            }, 500);
            $secheight.animate({
                height: '430px'
            }, 500);
            $ullist.animate({
                opacity: '0%'
            }, 500);
        } else {
            $ullist.removeClass("hidden");
            $blackop.animate({
                height: '475px'
            }, 500);
            $secheight.animate({
                height: '922px'
            }, 500);
            $ullist.animate({
                opacity: '100%'
            }, 500);
        }
    }
</script>