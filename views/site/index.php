 <?php
    $imagePath = Yii::$app->urlManager->baseUrl . '/images/progen/png/';

    use app\components\widgets\Picture;
    use app\components\widgets\Products;

    ?>

 <section>
     <div class="container mx-auto max-w-[1170px] py-[50px]">
     </div>
 </section>

 <section>
     <div class="container mx-auto max-w-[1170px] py-[50px]">

         <div class="max-w-[1110px] space-y-3 font-semibold px-5 mb-[60px]">
             <p class="text-2xl text-center font-semibold">Your life-changing experience starts here.</p>

             <h5 class="font-semibold text-3xl text-[#03AB00] text-center">GET YOUR GENUINE NOVAMANIX PILLS ASAP</h5>

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
                        'selFallback' => $products['fallbackImageSelected'],
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
                        'labelclass' => 'block cursor-pointer my-[24px] md:mb-[40px]',
                        'pictureClass' => '',
                        'imgClass' => 'w-full',
                        'prodthumb' => '',
                    ];

                    // Conditionally add 'selected' if key === 3
                    if ($key === 2) {
                        $params['selected'] = 'checked';
                    }
                    ?>

                 <!-- Now pass that array to the widget -->
                 <?= Products::widget($params) ?>
             <?php endforeach; ?>
         </div>

     </div>
 </section>