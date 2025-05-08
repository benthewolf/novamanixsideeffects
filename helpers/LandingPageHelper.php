<?php

namespace app\helpers;

use Yii;

class LandingPageHelper
{
    public static function landingpng($filename)
    {
        return Yii::$app->urlManager->baseUrl . '/images/progen/png/' . $filename;
    }

    public static function landingwebp($filename)
    {
        return Yii::$app->urlManager->baseUrl . '/images/progen/webp/' . $filename;
    }

    public static function getSection1()
    {

        return (
            [
                'heading' => 'How Novamanix is Changing the Health Market',
                'subheading' => 'That all changed when I got the chance to review Novamanix.',
                'author' => 'Written By: Francis',
                'p' => [
                    'Is there anything really worth calling a “breakthrough” in the supplement market?',
                    'I’ve been covering supplements for the last 8 years, and I must say before I reviewed Novamanix, I didn’t think there was a product good enough to be called cutting-edge. After all, supplements are just supplements. It’s meant to fill in for the nutritional gaps that you can’t get with your diet. How big of a breakthrough can a product be?',
                    'I got an e-mail asking me if I want to review a brand-new male enhancement product. To be honest, at that point in time, I really had no interest in reviewing male enhancement pills. I get plenty of requests every month from male enhancement brands asking me to endorse or write a favorable review of their product. The male enhancement market wasn’t really the most trusted in the industry. Although many customers are looking for reviews, I had no interest in putting my brand to endorse a product that I thought would not work.',
                    'For the sake of giving each product a fair shake, I did my own research about Novamanix before completely dismissing it. That’s when Novamanix got my attention. Novamanix simply doesn’t fit the usual male enhancement stereotype. It doesn’t claim to increase penis size, it uses standardized ingredients, it focuses on technology and science, and it is backed by legitimate scientific facts. This was more than I could ever ask for in a supplement, and I knew then that it was high time for me to review the supplement.'
                ],
                'image' => self::landingwebp('sec1img.webp'),
                'fallbackImage' => self::landingpng('sec1img.png')
            ]
        );
    }
}
