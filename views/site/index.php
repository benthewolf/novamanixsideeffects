 <?php
    $imagePath = Yii::$app->urlManager->baseUrl . '/images/progen/';

    use app\components\widgets\Picture;
    use app\components\widgets\Products;

    ?>

 <style>
     .banner {
         background-image: url('/images/progen/webp/herobannerv2.webp'), url('/images/progen/png/herobannerv2.png');
         background-repeat: no-repeat;
         background-size: cover;
         background-color: black;
         background-position: 63% top;
     }

     .sec6 {
         background-image: url('/images/progen/webp/herobannerv2.webp'), url('/images/progen/png/herobannerv2.png');
         background-size: cover;
         background-repeat: no-repeat;
         background-position: 57% 10%;
     }

     section {
         font-family: "Poppins", sans-serif;
         font-family: family/text;
         letter-spacing: -2%;
         line-height: 150%;

     }

     footer {
         display: none;
     }

     header {
         display: none;
     }

     @media (min-width: 768px) {
         .banner {
             background-position: center center;
             background-size: cover;
         }
     }

     @media (min-width: 1920px) {}

     @media (min-width: 1922px) {}
 </style>

 <!-- Hero Page -->

 <section class="banner relative w-full lg:max-h-[707px] xl:min-h-[707px]">
     <div class="container mx-auto max-w-[1170px] pb-[50px] px-2.5 md:px-5 lg:pb-0 lg:px-0">
         <div class="h-[124px] lg:h-[77px] border-b-[3px] border-white w-full max-lg:py-[30px]" id="sec-heightind">
             <div class="flex w-full justify-between px-5 lg:h-full">
                 <div class="flex">
                     <img src="<?= $imagePath ?>logo.svg" alt="" class="max-w-[111.19px] lg:max-w-[159px]">
                     <span class="text-white font-bold font-oswald text-[12.59px] md:text-lg self-center">Side Effects</span>
                 </div>

                 <div class="border-2 border-white w-[44px] h-[32px] py-[8px] px-[3px] flex flex-col justify-between items-center cursor-pointer lg:hidden self-center" id="indexburg">
                     <?php for ($x = 0; $x < 3; $x++): ?>
                         <div class="rounded-full w-[22px]  bg-white border border-white"></div>

                     <?php endfor; ?>
                 </div>

                 <ul class="text-white font-bold text-base gap-5 self-center hidden lg:flex">
                     <li class="hover:border-b-2 border-b-2 border-transparent hover:border-yellow-400"><a href="/">HOME</a></li>
                     <li class="hover:border-b-2 border-b-2 border-transparent hover:border-yellow-400"><a href="/science">SCIENCE</a></li>
                     <li class="hover:border-b-2 border-b-2 border-transparent hover:border-yellow-400"><a href="/faq">FAQ</a></li>
                     <li class="hover:border-b-2 border-b-2 border-transparent hover:border-yellow-400"><a href="/ingredients">INGREDIENTS</a></li>
                     <li class="hover:border-b-2 border-b-2 border-transparent hover:border-yellow-400"><a href="/testimonials">TESTIMONIALS</a></li>
                 </ul>
             </div>

             <div class=" h-[245px] w-full text-white py-[20px] flex-col font-roboto hidden" id="ul-listind">
                 <a href="#" class="h-[41px] w-full text-center text-lg py-[10px] flex items-center justify-center hover:bg-[#191919]">HOME</a href="#">
                 <a href="#" class="h-[41px] w-full text-center text-lg py-[10px] flex items-center justify-center hover:bg-[#191919]">SCIENCE</a href="#">
                 <a href="#" class="h-[41px] w-full text-center text-lg py-[10px] flex items-center justify-center hover:bg-[#191919]">FAQ</a href="#">
                 <a href="#" class="h-[41px] w-full text-center text-lg py-[10px] flex items-center justify-center hover:bg-[#191919]">INGREDIENTS</a href="#">
                 <a href="#" class="h-[41px] w-full text-center text-lg py-[10px] flex items-center justify-center hover:bg-[#191919]">TESTIMONIALS</a href="#">

             </div>
         </div>

         <div class="py-[30px] px-5 space-y-5 md:space-y-[30px] max-w-[690px] md:px-0">
             <h2 class="font-oswald font-bold text-white text-3xl text-center md:text-start md:text-[40px]"><?= $herolander['heading'] ?></h2>

             <?php foreach ($herolander['p'] as $key => $p): ?>

                 <p class="paragraph text-white font-pop"><?= $p ?></p>

             <?php endforeach; ?>

             <div class="mx-auto bg-[#FFAE00] max-w-[221px] md:mx-0 h-[42px]">
                 <a href="#" class="font-bold w-full h-full flex items-center justify-center">Buy Novamanix Here</a>
             </div>

         </div>
     </div>
 </section>

 <!-- Section 1 -->
 <section>
     <div class="container mx-auto max-w-[1170px] py-[40px] border-b-2 border-black px-2.5">
         <div class="space-y-[30px]">
             <h2 class="subheading"><?= $sec1['subheading'] ?></h2>

             <p class="paragraph"><?= $sec1['p'] ?></p>

             <div class="flex max-sm:justify-between items-center sm:justify-center sm:gap-5">
                 <?php foreach ($sec1['svg'] as $key => $svg): ?>
                     <div class="flex flex-col gap-3">
                         <?= Picture::widget([
                                'src' => $svg,
                                'alt' => 'icons',
                                'loading' => false,
                                'imgClass' => '',
                                'pictureClass' => 'mx-auto'
                            ]) ?>

                         <span class="max-[429px]:text-xs text-sm font-bold font-oswald"><?= $sec1['span'][$key] ?></span>
                     </div>
                 <?php endforeach; ?>
             </div>
         </div>
     </div>
 </section>

 <!-- Section 2 -->
 <section>
     <div class="container mx-auto max-w-[1170px] py-[20px] border-b-2 border-black px-2.5">
         <div class="space-y-[30px]">
             <h2 class="subheading"><?= $sec2['subheading'] ?></h2>

             <p class="paragraph"><?= $sec2['p'][0] ?></p>

             <ul class="list-disc pl-5">
                 <?php foreach ($sec2['li'] as $key => $li): ?>
                     <li class="font-bold text-base"><?= $li ?></li>
                 <?php endforeach; ?>
             </ul>

             <p class="paragraph"><?= $sec2['p'][1] ?></p>
         </div>
     </div>
 </section>

 <!-- Section 3 -->
 <section>
     <div class="container mx-auto max-w-[1170px] py-[20px] px-2.5">
         <div class="space-y-[30px]">
             <h2 class="subheading"><?= $sec3['subheading'] ?></h2>
             <?php foreach ($sec3['p'] as $key => $p): ?>
                 <p class="paragraph"><?= $p ?></p>
             <?php endforeach; ?>
             <?= Picture::widget([
                    'src' => $sec3['image'],
                    'fallback' => $sec3['fallbackImage'],
                    'srcMobile'  => $sec3['imagemb'],
                    'fallbackMobile'  => $sec3['fallbackImagemb'],
                    'alt' => 'icons',
                    'loading' => false,
                    'imgClass' => 'mx-auto',
                    'pictureClass' => 'mx-auto block'
                ]) ?>

         </div>
     </div>
 </section>

 <!-- Section 4 -->
 <section>
     <div class="container mx-auto max-w-[1170px] py-[20px] px-5">

         <div class="space-y-[30px]">
             <h2 class="subheading"><?= $sec4['subheading'] ?></h2>

             <div class="flex flex-col md:flex-row max-sm:justify-between items-center sm:justify-center gap-10">
                 <?php foreach ($sec4['svg'] as $key => $svg): ?>
                     <div class="flex flex-col gap-3 max-w-[174px]">
                         <?= Picture::widget([
                                'src' => $svg,
                                'alt' => 'icons',
                                'loading' => false,
                                'imgClass' => '',
                                'pictureClass' => 'mx-auto'
                            ]) ?>

                         <span class="max-[429px]:text-xs text-sm font-bold font-oswald"><?= $sec4['span'][$key] ?></span>
                     </div>
                 <?php endforeach; ?>
             </div>
         </div>

     </div>
 </section>

 <!-- Section 5 -->
 <section>
     <div class="container mx-auto max-w-[1170px] py-[20px] px-2.5">

         <div class="space-y-[30px]">
             <h2 class="subheading"><?= $sec5['subheading'] ?></h2>

             <p class="paragraph"><?= $sec5['p']; ?></p>

             <div class="flex flex-col gap-10 md:flex-row md:flex-wrap md:gap-0 md:gap-y-10 md:justify-between">
                 <?php foreach ($sec5['formula'] as $key => $list): ?>
                     <div class="flex flex-col gap-5 md:mx-auto md:max-w-[460px] lg:flex-row lg:gap-x-5 lg:max-w-[450px] xl:max-w-[565px]">
                         <?= Picture::widget([
                                'src' => $list['image'],
                                'fallback' => $list['fallbackImage'],
                                'alt' => 'icons',
                                'loading' => false,
                                'imgClass' => 'mx-auto',
                                'pictureClass' => 'mx-auto block grow-0 shrink-0 w-[160px] h-[160px]'
                            ]) ?>

                         <div class="space-y-2 px-5 lg:px-0 xl:min-w-[375px] xl:max-w-[375px]">
                             <h2 class="subheading underline">
                                 <?= $list['subheading'] ?>
                             </h2>

                             <p class="paragraph"><?= $list['p'] ?></p>
                         </div>
                     </div>
                 <?php endforeach; ?>

             </div>
         </div>

     </div>
 </section>

 <!-- Section 6 -->
 <section class="">
     <div class="container mx-auto max-w-[1170px] py-[50px] px-10 sec6">
         <div class="space-y-2 text-white">
             <h2 class="subheading text-[#FFAE00]"><?= $sec6['subheading'] ?></h2>

             <p class="paragraph md:max-w-[679px]"><?= $sec6['p'] ?></p>
         </div>
     </div>
 </section>

 <!-- Order Selection -->
 <section>
     <div class="container mx-auto max-w-[1170px] py-[50px]">

         <div class="max-w-[1110px] space-y-3 font-semibold px-5 mb-[60px] lg:leading-[150%]">
             <p class="text-2xl text-center font-semibold lg:text-4xl"><?= $prodsel['bsubheading'][0] ?></p>

             <h5 class="font-semibold text-3xl text-[#03AB00] text-center lg:text-5xl"><?= $prodsel['gsubheading'][0] ?></h5>

             <p class="text-2xl text-center font-semibold lg:text-4xl"><?= $prodsel['bsubheading'][1] ?></p>

             <h5 class="font-semibold text-3xl text-[#03AB00] text-center lg:text-5xl"><?= $prodsel['gsubheading'][1] ?></h5>

         </div>

         <div class="space-y-[30px] mx-auto flex flex-col">
             <?php foreach ($loopselection as $key => $products): ?>
                 <?php
                    // Build the widget options array in a variable
                    $params = [
                        'src' => $products['image'],
                        'fallback' => $products['fallbackImage'],
                        'selsrc' => $products['imageSelected'],
                        'selfallback' => $products['fallbackImageSelected'],
                        'alt' => 'Silver Package',
                        'ppcode' => $products['pp_code'],
                        'damount' => $products['amount'],
                        'dname' => $products['name'],
                        'dsubname' => $products['alt'],
                        'dproducts' => 'Novamanix',
                        'dmonth' => $products['data-month'],
                        'dmonthintext' => $products['data-month-text'],
                        'normalamount' => $products['normal-amount'],
                        'saveamount' => $products['data-month-text'],
                        'prodidvalue' => $products['save'],
                        'prodid' => $products['prod-id'],
                        'srcMobile' => $products['imagemb'],
                        'fallbackMobile' => $products['fallbackImagemb'],
                        'selsrcMobile' => $products['imageSelectedmb'],
                        'selfallbackMobile' => $products['fallbackImageSelectedmb'],
                        'labelclass' => 'block cursor-pointer my-[24px] md:mb-[40px] max-w-[640px] mx-auto w-full',
                        'pictureClass' => 'max-w-[640px]',
                        'imgClass' => 'w-full',
                        'prodthumb' => '',
                    ];

                    // Conditionally add 'selected' if key === 3
                    if ($key === 2) {
                        $params['selected'] = 'checked';
                    }
                    ?>
                 <!-- Choose which product to add limited time offer -->
                 <?php if ($products['prod-id'] === 'productname_minerals_3'): ?>
                     <div class="flex flex-col mx-auto gap-2.5">
                         <div class="flex justify-between">
                             <img src="<?= $imagePath; ?>red-star.svg" alt="red star" class="w-[24px] h-[24px]">
                             <span class="text-[#EA0000] font-bold text-2xl">LIMITED TIME OFFER</span>
                             <img src="<?= $imagePath; ?>red-star.svg" alt="red star" class="w-[24px] h-[24px]">
                         </div>
                         <p class="font-bold text-lg">Save HUGE and get the BEST results!</p>
                     </div>
                     <?= Products::widget($params) ?>
                 <?php else: ?>
                     <?= Products::widget($params) ?>
                 <?php endif; ?>

             <?php endforeach; ?>
             <button class="mx-auto w-[330px] max-w-[390px] bg-[linear-gradient(180deg,_#22C55E_0%,_#166534_100%)] rounded-[12px] sm:w-[390px]">
                 <a href="#" class="px-[32px] py-[20px] text-white font-semibold text-2xl leading-[125%] -tracking-[2%] block">Buy Now</a>
             </button>
         </div>

     </div>
 </section>

 <!-- Footer -->
 <section class="bg-[#1F1F1F]">
     <div class="container mx-auto max-w-[430px] py-[24px] px-2.5">
         <div class="max-[376px]:text-[8px] flex justify-between text-white text-sm font-semibold items-center">
             <a href="/dmca" class="hover:border-b-2 border-b-2 border-transparent hover:border-yellow-400"><span>DMCA</span></a>
             <div class="bg-[#FCD34D] w-[2px] h-[14px]"></div>
             <a href="/privacy" class="hover:border-b-2 border-b-2 border-transparent hover:border-yellow-400"><span>PRIVACY POLICY</span></a>
             <div class="bg-[#FCD34D] w-[2px] h-[14px]"></div>
             <a href="/terms" class="hover:border-b-2 border-b-2 border-transparent hover:border-yellow-400"><span>TERMS & CONDITIONS</span></a>
             <div class="bg-[#FCD34D] w-[2px] h-[14px]"></div>
             <a href=""><span>SITEMAP</span></a>
         </div>
     </div>
 </section>

 <script>
     document.getElementById('indexburg').addEventListener('click', function handleClick() {
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
         const $secheightind = $('#sec-heightind');
         const $ullistind = $('#ul-listind');

         if ($secheightind.height() > 124) {
             $ullistind.removeClass("flex");

             $secheightind.animate({
                 height: '124px'
             }, 500);

             $ullistind.animate({
                 opacity: '0%'
             }, 500, function() {
                 // After animation completes, delay 500ms before adding 'hidden'
                 setTimeout(function() {
                     $ullistind.addClass("hidden");
                 }, 500);
             });

         } else {
             $ullistind.removeClass("hidden");
             $ullistind.addClass("flex");
             $secheightind.animate({
                 height: '362.85px'
             }, 500);
             $ullistind.animate({
                 opacity: '100%'
             }, 500);
         }
     }
 </script>