 <?php
    $imagePath = Yii::$app->urlManager->baseUrl . '/images/progen/';

    use app\components\widgets\Picture;
    use app\components\widgets\Products;

    ?>
 <style>
     .banner {
         background-image: url('/images/progen/webp/herobanner.webp'), url('/images/progen/png/herobanner.png');
         background-repeat: no-repeat;
         background-size: cover;
         background-color: black;
         background-position: 61% top;
     }

     @media (min-width: 768px) {
         .banner {
             background-position: 70% top;
         }
     }
 </style>

 <header class="banner relative w-full font-pop">
     <div class="container mx-auto max-w-[1170px] pt-[30px] lg:pt-0">
         <div class="h-[94px] lg:h-[77px] w-full" id="sec-height">
             <div class="flex w-full justify-between px-5 h-[94px] lg:h-[77px]">
                 <div class="flex">
                     <img src="<?= $imagePath ?>logo.svg" alt="" class="max-w-[111.19px] lg:max-w-[159px]">
                     <a href="#" class="self-center hover:border-b-2 border-b-2 border-transparent hover:border-yellow-400">
                         <span class="text-white font-bold font-oswald text-[12.59px] md:text-lg">Side Effects</span>
                     </a>
                 </div>

                 <div class="border-2 border-white w-[44px] h-[32px] py-[8px] px-[3px] flex flex-col justify-between items-center cursor-pointer self-center lg:hidden" id="burger">
                     <?php for ($x = 0; $x < 3; $x++): ?>
                         <div class="rounded-full w-[22px]  bg-white border border-white"></div>

                     <?php endfor; ?>
                 </div>

                 <ul class="text-white font-bold text-base gap-5 self-center hidden lg:flex">
                     <li class="hover:border-b-2 border-b-2 border-transparent hover:border-yellow-400"><a href="">HOME</a></li>
                     <li class="hover:border-b-2 border-b-2 border-transparent hover:border-yellow-400"><a href="">SCIENCE</a></li>
                     <li class="hover:border-b-2 border-b-2 border-transparent hover:border-yellow-400"><a href="">FAQ</a></li>
                     <li class="hover:border-b-2 border-b-2 border-transparent hover:border-yellow-400"><a href="">INGREDIENTS</a></li>
                     <li class="hover:border-b-2 border-b-2 border-transparent hover:border-yellow-400"><a href="">TESTIMONIALS</a></li>
                 </ul>
             </div>

             <div class=" h-[245px] w-full text-white py-[20px] flex-col font-roboto hidden" id="ul-list">
                 <a href="#" class="h-[41px] w-full text-center text-lg py-[10px] flex items-center justify-center hover:bg-[#191919]">HOME</a href="#">
                 <a href="#" class="h-[41px] w-full text-center text-lg py-[10px] flex items-center justify-center hover:bg-[#191919]">SCIENCE</a href="#">
                 <a href="#" class="h-[41px] w-full text-center text-lg py-[10px] flex items-center justify-center hover:bg-[#191919]">FAQ</a href="#">
                 <a href="#" class="h-[41px] w-full text-center text-lg py-[10px] flex items-center justify-center hover:bg-[#191919]">INGREDIENTS</a href="#">
                 <a href="#" class="h-[41px] w-full text-center text-lg py-[10px] flex items-center justify-center hover:bg-[#191919]">TESTIMONIALS</a href="#">

             </div>
         </div>

     </div>
 </header>

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
         const $secheight = $('#sec-height');
         const $ullist = $('#ul-list');

         if ($secheight.height() > 124) {
             $ullist.removeClass("flex");

             $secheight.animate({
                 height: '124px'
             }, 500);

             $ullist.animate({
                 opacity: '0%'
             }, 500, function() {
                 // After animation completes, delay 500ms before adding 'hidden'
                 setTimeout(function() {
                     $ullist.addClass("hidden");
                 }, 500);
             });
         } else {
             $ullist.removeClass("hidden");
             $ullist.addClass("flex");
             $secheight.animate({
                 height: '362.85px'
             }, 500);
             $ullist.animate({
                 opacity: '100%'
             }, 500);
         }
     }
 </script>