 <?php
    $imagePath = Yii::$app->urlManager->baseUrl . '/images/progen/';

    use app\components\widgets\Picture;
    use app\components\widgets\Products;

    ?>

 <section>
     <div class="container mx-auto max-w-[1170px] px-5 pt-[54px]">
         <div class="space-y-[34px] border-b border-black pb-[54px]">
             <h2 class="subheading text-[#005CE6] max-[430px]:text-2xl text-center font-oswald"><?= $scisec1['subheading']; ?></h2>
             <?php foreach ($scisec1['p'] as $key => $p): ?>
                 <p class="paragraph text-center md:text-start"><?= $p ?></p>
             <?php endforeach; ?>
         </div>
     </div>
 </section>

 <section>
     <div class="container mx-auto max-w-[1170px] px-2.5 py-[54px]">
         <div class="space-y-[34px] w-full">
             <h2 class="subheading text-[#005CE6] max-[430px]:text-2xl text-center font-oswald"><?= $scisec2['subheading']; ?></h2>

             <p class="paragraph text-center md:text-start"><?= $scisec2['p'][0]; ?></p>

             <ul class="ml-16 max-w-[255px] list-disc block lg:space-y-3">
                 <?php foreach ($scisec2['li'] as $key => $li): ?>
                     <li class="font-bold lg:text-lg"><?= $li ?></li>
                 <?php endforeach; ?>
             </ul>
         </div>
     </div>
 </section>

 <section class="text-white max-lg:bg-[#1F1F1F] lg:bg-white">
     <div class="container mx-auto max-w-[1170px] px-2.5 py-[54px]">
         <div class="space-y-[32px] lg:flex lg:bg-[#1F1F1F] lg:max-h-[689px] lg:min-h-[689px] lg:space-y-0">
             <div class="lg:max-w-[585px] lg:flex flex-col items-center justify-center lg:px-5">
                 <h2 class="subheading text-[#00AEFF] max-[430px]:text-2xl text-center font-oswald lg:mb-8"><?= $scisec3['subheading']; ?></h2>
                 <div class="space-y-8">
                     <?php foreach ($scisec3['p'] as $key => $p): ?>
                         <p class="paragraph text-center"><?= $p ?></p>
                     <?php endforeach; ?>
                 </div>
             </div>

             <?= Picture::widget([
                    'src' => $scisec3['image'],
                    'fallback' => $scisec3['fallbackImage'],
                    'alt' => 'a man with two women',
                    'loading' => false,
                    'imgClass' => 'w-full h-full',
                    'pictureClass' => 'hidden lg:block lg:min-h-[689px]'
                ]) ?>

         </div>
     </div>
 </section>

 <section>
     <div class="container mx-auto max-w-[1170px] px-5 py-[54px]">
         <div class="space-y-[54px]">
             <div>
                 <h2 class="text-[24px] lg:text-4xl font-bold text-[#00AEFF] max-[430px]:text-2xl text-center font-oswald bg-black p-[14px]"><?= $scisec4['subheading'][0]; ?></h2>
                 <div class="md:flex md:flex-wrap xl:flex-nowrap mx-auto lg:justify-center">
                     <?php foreach ($scisec4['list'] as $key => $list): ?>
                         <div class="mx-auto lg:mx-0 max-w-[300px] h-[370px] lg:h-[466px] bg-[#FCD34D] relative py-[54px] px-6">

                             <h2 class="font-semibold text-2xl lg:text-4xl mb-4"><?= $list['subheading'] ?></h2>

                             <p class="paragraph md"><?= $list['p'] ?></p>

                             <div class="absolute bottom-0 right-0 w-0 h-0 border-l-[300px] border-b-[34px] border-l-transparent border-b-white"></div>
                         </div>
                     <?php endforeach; ?>
                 </div>
             </div>

             <div class="space-y-8">
                 <h2 class="text-[24px] lg:text-4xl font-bold text-[#00AEFF] max-[430px]:text-2xl font-oswald text-center sm:text-start"><?= $scisec4['subheading'][1]; ?></h2>
                 <p class="paragraph text-center md:text-start"><?= $scisec4['p'] ?></p>
             </div>
         </div>
     </div>
 </section>

 <section class="text-white max-lg:bg-[linear-gradient(90deg,_#171717_0%,_#404040_100%)] lg:bg-white">
     <div class="container mx-auto max-w-[1170px] px-2.5 py-[54px]">
         <div class="flex flex-col lg:flex-row lg:bg-[linear-gradient(90deg,_#171717_0%,_#404040_100%)] gap-8 lg:py-8 lg:px-5">
             <div class="space-y-8">
                 <h2 class="text-[24px] lg:text-4xl font-bold text-[#00AEFF] max-[430px]:text-2xl font-oswald text-center sm:text-start"><?= $scisec5['subheading']; ?></h2>
                 <?php foreach ($scisec5['p'] as $key => $list): ?>
                     <p class="paragraph text-center md:text-start"><?= $list ?></p>

                 <?php endforeach; ?>
             </div>

             <?= Picture::widget([
                    'src' => $scisec5['image'],
                    'fallback' => $scisec5['fallbackImage'],
                    'alt' => 'a man with two women',
                    'loading' => false,
                    'imgClass' => 'max-w-[300px] mx-auto lg:mx-0',
                    'pictureClass' => ''
                ]) ?>
         </div>
     </div>
 </section>

 <section>
     <div class="container mx-auto max-w-[1170px] px-5 py-[54px]">
         <div class="space-y-8">
             <h2 class="text-[24px] lg:text-4xl font-bold text-[#00AEFF] max-[430px]:text-2xl font-oswald text-center sm:text-start"><?= $scisec6['subheading']; ?></h2>

             <?php foreach ($scisec6['p'] as $key => $list): ?>
                 <p class="paragraph text-center md:text-start"><?= $list ?></p>
             <?php endforeach; ?>
         </div>
     </div>
 </section>

 <!-- Order Selection -->
 <section>
     <div class="container mx-auto max-w-[1170px] py-[50px]">

         <div class="max-w-[1110px] space-y-3 font-semibold px-5 mb-[60px]">
             <p class="text-2xl text-center font-semibold"><?= $prodsel['bsubheading'][0] ?></p>

             <h5 class="font-semibold text-3xl text-[#03AB00] text-center"><?= $prodsel['gsubheading'][0] ?></h5>

             <p class="text-2xl text-center font-semibold">Place your order on our website and get NovaManix in just a week!</p>

             <h5 class="font-semibold text-3xl text-[#03AB00] text-center">100% GUARANTEED RESULTS!</h5>

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