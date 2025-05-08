 <?php
    $imagePath = Yii::$app->urlManager->baseUrl . '/images/progen/png/';

    use app\components\widgets\Picture;
    use app\components\widgets\Products;

    ?>
 <section>
     <div class="container mx-auto max-w-[1170px] py-[50px]">

         <div class="max-w-[1110px] space-y-3 font-semibold px-5 mb-[60px]">
             <p class="text-2xl text-center font-semibold">Your life-changing experience starts here.</p>

             <h5 class="font-semibold text-3xl text-[#03AB00] text-center">GET YOUR GENUINE NOVAMANIX PILLS ASAP</h5>

             <p class="text-2xl text-center font-semibold">Place your order on our website and get NovaManix in just a week!</p>

             <h5 class="font-semibold text-3xl text-[#03AB00] text-center">100% GUARANTEED RESULTS!</h5>

         </div>

         <div class="space-y-[30px] mx-auto flex flex-col">
             <?= Products::widget([
                    'src' => $sec17['image'],
                    'fallback' => $sec17['imageFallback'],
                    'srcMobile' => $sec17['imagemb'],
                    'fallbackMobile' => $sec17['imageFallbackmb'],
                    'alt' => 'bottle',
                    'loading' => false,
                    'imgClass' => 'lg:!w-[900px] xl:w-[900px] mx-auto lg:scale-[1.4] xl:scale-none',
                    'pictureClass' => 'absolute mx-auto sm:static xl:absolute w-full lg:!w-[900px] xl:w-[900px] xl:!-top-50 xl:-left-60 -z-0'
                ]) ?>
         </div>

     </div>
 </section>