<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception $exception */

use yii\helpers\Html;

$this->title = $name;
?>

<div class="container mx-auto">
    <h1 class="!text-3xl font-pop font-semibold">Not Found (#404)</h1>
    <div class="flex items-center h-[55px] !bg-[#f8d7da] my-5 px-5">
        <p class="text-[#842029]">Page not found</p>
    </div>

    <p> The above error occurred while the Web server was processing your request.</p>

    <p class="my-5">Please contact us if you think this is a server error. Thank you. </p>
</div>