<?php

$imagePath   = Yii::$app->urlManager->baseUrl . '/images/secondary/';
?>
<footer class="bg-[#1F1F1F]">
    <div class="container mx-auto px-5 py-[20px] md:py-[50px] max-w-[1200px]">
        <div class="flex flex-col gap-y-[40px] md:flex-row md:justify-between">
            <div class="max-w-[181px] mx-auto md:mx-0">
                <img src="<?= $imagePath; ?>novalogo.svg" alt="" class="min-w-[130px] mx-auto mb-3 md:min-w-[194px]">

                <div class="flex md:gap-2">
                    <img src="<?= $imagePath; ?>phone.svg" alt="" class="hidden md:block">
                    <a href="tel:1-833-391-0512" class="text-[#00AEFF] text-[24px] md:text-lg font-semibold lg:flex">
                        <u>1-833-391-0512</u>
                    </a>
                </div>
            </div>

            <ul class="flex text-[10px] md:text-[12px] md:gap-y-[12px] text-white justify-between md:flex-col md:max-w-[110px]">
                <li class="hover-fx"><a href="/privacy">Privacy Policy</a></li>
                <li class="hover-fx"><a href="/terms">Terms and Condition</a></li>
                <li class="hover-fx"><a href="#">Return Policy</a></li>
                <li class="hover-fx"><a href="/dmca">DMCA</a></li>
            </ul>
        </div>

        <div class="h-[1px] w-full bg-white my-5 md:my-10"></div>

        <p class="text-center text-[9px] text-white">© 2025 Novamanix. All Rights Reserved.</p>

    </div>
</footer>