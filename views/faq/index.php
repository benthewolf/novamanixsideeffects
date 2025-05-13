 <?php
    $imagePath = Yii::$app->urlManager->baseUrl . '/images/progen/';

    use app\components\widgets\Picture;
    use app\components\widgets\Products;

    ?>

 <section>
     <div class="container mx-auto py-[40px] max-w-[1100px] px-2.5">
         <div class="space-y-5 px-2.5 pb-[30px] border-b border-black">
             <h2 class="text-[#FF0000] font-semibold text-4xl text-center"><?= $faq['subheading'] ?></h2>

             <p class="faqp"><?= $faq['p'] ?></p>
         </div>
     </div>
 </section>

 <?php foreach ($faq['list'] as $key => $list): ?>
     <section>
         <div class="container mx-auto pb-[30px] max-w-[1100px] px-2.5">
             <div class="space-y-5 px-2.5 pb-[30px] border-b border-black">
                 <h2 class="text-[#333366] font-normal text-3xl text-center"><i><?= $list['subheading'] ?></i></h2>

                 <p class="faqp"><?= $list['p'] ?></p>
             </div>
         </div>
     </section>
 <?php endforeach; ?>

 <section>
     <div class="container mx-auto max-w-[1100px] py-[50px]">

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