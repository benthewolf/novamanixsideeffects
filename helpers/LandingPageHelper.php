<?php

namespace app\helpers;

use Yii;

class LandingPageHelper
{
    public static function landingpng($filename)
    {
        return Yii::$app->urlManager->baseUrl . '/images/secondary/png/' . $filename;
    }

    public static function landingwebp($filename)
    {
        return Yii::$app->urlManager->baseUrl . '/images/secondary/webp/' . $filename;
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

    public static function getSection2()
    {

        return (
            [
                'cta' => 'Order Now',
                'ctaimg' => self::landingwebp('btn-bg.webp'),
                'ctaimgFallbackImage' => self::landingpng('btn-bg.png'),
                'subheading' => 'Novamanix first impressions',
                'p' => [
                    'Anyone who has had experience dealing with supplements would know that Novamanix isn’t your typical male enhancement supplement. Right off the bat, it screams premium. Four pills make up a single dose. Each bottle has 120 capsules, which is good enough for a full month’s supply. The bottle and capsule quality look top-notch. There isn’t a single thing that would tell you that Novamanix is a cheap product. It’s a premium supplement, and they certainly want to make it look that way.',
                    'Novamanix’s website offers a lot of useful information about the product. The science, the ingredients, and the experts who have vetted the product. If it also helps, the website also includes links to the actual scientific studies that are related to Novamanix. It definitely gives you an idea about what you can achieve with Novamanix, and how you are going to do it. Novamanix does not tread lightly on its claims, and it even covers the product with a satisfaction guarantee. Guarantees typically go against the product if they exaggerate the benefits of the product. In Novamanix’s case, they went all in.'
                ],
                'image' => self::landingwebp('sec2img.webp'),
                'fallbackImage' => self::landingpng('sec2img.png'),
            ]
        );
    }

    public static function getSection3()
    {

        return (
            [
                'subheading' => 'What customers think about Novamanix',
                'p' => [
                    'Novamanix may be the first male enhancement supplement that I’ve ever covered that had actual customers openly sharing the benefits of the product. Mind you, these aren’t paid actors who claim to have used Novamanix - these are real, actual people who were so impressed with the product that they had to let others know. Novamanix customers are among the most satisfied in the industry, and that’s always a good thing.',
                    'If you would do a quick Google search about Novamanix, you’ll read plenty of customer testimonials about Novamanix, with most of them discussing their experience with the product and how different it was from the other male enhancement pills that they have tried. As of writing, we have yet to see a negative review about Novamanix.',
                    'Novamanix also has the most percentage of customers who bought the product more than once. This only suggests that Novamanix customers are so satisfied with the product that they had to continue taking the product for at least another month. It’s important to note that Novamanix’s best results are observed between the 8th-12th month, but any customer would stop buying a product if they do not see a significant improvement after using up an entire bottle of supplements.'
                ]
            ]
        );
    }

    public static function getSection4()
    {

        return (
            [
                'subheading' => 'What experts think about Novamanix',
                'p' => [
                    'Critics on any industry rarely agree on one thing. You see sports analysts having two polar opposite views on a single game, and that’s expected – critics thrive for supplements that do not work as intended. That’s our job –to criticize. We spend our days looking for the smallest things in supplement products that we could focus on and make a case that a product isn’t as good as the customers would expect it to be.',
                    'With Novamanix, again, the complete opposite happened. Critics appear to have one opinion about Novamanix. Critics have openly praised Novamanix for its cutting-edge formula and ingredient content. Not only was it able to surpass the industry greats such as Trexapro and Erectogenix, but Novamanix was also able to take it up a notch and actually be the unanimous #1 male enhancement supplement in all top supplement lists.',
                    'A quick Google search about Novamanix will show you a list of critics who have made articles like mine about Novamanix, and everyone is saying the same thing - Novamanix is the best male enhancement the world has ever seen, and it will take years to make a product better than Novamanix.'
                ]
            ]
        );
    }

    public static function getSection5()
    {

        return (
            [
                'subheading' => 'What’s in Novamanix?',
                'p' => [
                    'One of the things that critics absolutely loved about Novamanix is its ingredients. Supplement ingredients are typically made up of powdered ingredients, mixed together to produce a certain result. After all, supplements are essentially food items that were dehydrated and crushed down to its powder form and stuffed in capsules to make it easier to take. About 98% of all supplements use only powders to deliver the ingredients to the body.',
                    'Novamanix takes it a few levels higher. The formula uses standardized ingredients, which are far more concentrated and more potent than ingredient powders. To create a standardized ingredient, it must first go through the process of extraction. Herbs go through several levels of processing to yield a liquid extract that contains the active components of the herb. After which, the liquid extract goes through a special filtration process where it isolates the active component, which would be purified into powder form. This makes the ingredient content much more impactful. It is estimated that it takes roughly 1500-1800 grams of raw herbs just to create a single gram of standardized content. Compare that to dehydrated herbs that were ground into powder form. Standardized ingredients are definitely more potent and concentrated.',
                    'Because of the standardized ingredients that Novamanix uses, the product is definitely more effective and more impactful than any other supplement in the same category.'
                ],
                'bsubheading' => [
                    'Here are some of the ingredients that Novamanix uses:',
                    'CYTOPURE Technology'
                ],
                'ingredients1' => [
                    [
                        'subheading' => 'KSM-66',
                        'p' => 'KSM-66 is a supplement product made from standardized Ashwagandha. KSM-66 had undergone through various clinical trials to prove its effectiveness as a testosterone booster, mood enhancer, and as a stress buster. KSM-66 can be purchased as a standalone supplement and is now being used as a core ingredient of Novamanix.'
                    ],
                    [
                        'subheading' => 'Fenugreek',
                        'p' => 'Fenugreek is one of the rare FDA-compliant herbs that are used to boost testosterone levels. Aside from its natural testosterone-boosting component, Fenugreek also helps reduce the metabolism of testosterone into DHT. Although DHT is a powerful androgen, it also causes the prostate to enlarge, which could be dangerous and painful for men. Novamanix’s Fenugreek contains a standardized 50% fenuside content, making it one of the purest Fenugreek ingredients available today.'
                    ],
                    [
                        'subheading' => 'Longjack',
                        'p' => 'Longjack is a popular herb in Southeast Asia because of its highly-potent aphrodisiac and erectogenic benefits. Also known as Tongkat Ali and Eurycoma Longifolia, Longjack is one of the first herbal supplements that competed against the blue pill as the #1 cure for impotence and erectile dysfunction. Novamanix’s Longjack contains a standardized 9-hydroxycanthin-6-one component, the compound responsible for Longjack’s androgenic benefits.'
                    ],
                    [
                        'subheading' => 'ZMA',
                        'p' => 'ZMA, or Zinc and Magnesium Aspartate with Vitamin B6, is one of the key reasons why Novamanix’s testosterone-boosting complex is one of the best in the world. Zinc and Magnesium are essential to the production of testosterone, and with high levels of ZMA, the body can sustain high levels of testosterone longer.'
                    ],
                ],
                'ingredients2' => [
                    [
                        'subheading' => 'L-Arginine',
                        'p' => 'L-Arginine is a vasodilator ingredient, designed to improve blood flow to the penis. L-Arginine is a semi-essential amino acid that helps regulate blood pressure, and in the right amounts, it can help improve erection size and hardness.'
                    ],
                    [
                        'subheading' => 'Tribulus Terrestris',
                        'p' => 'Tribulus Terrestris is a key herb in the formula as it helps sustain high levels of testosterone while preventing anti-androgenic compounds from ruining the formula. Tribulus Terrestris can help prevent the metabolism of testosterone into estrogen, an anti-androgen. In the process, Tribulus Terrestris also helps build up free testosterone, which contributes to your sexual performance.'
                    ],
                    [
                        'subheading' => 'Maca Root',
                        'p' => 'Maca is one of the most in-demand ingredients in male enhancement. Typically sold in powder form in South America, Maca is used as an aphrodisiac and endurance booster. Maca helps men bounce back faster after having an orgasm and allows men to enjoy more frequent and intense erections.'
                    ],
                    [
                        'subheading' => 'Muira Puama',
                        'p' => 'Muira Puama literally means Potency Wood and has been used in South America for centuries as a tonic for sexual performance. Muira Puama has strong aphrodisiac properties as well as pro-erectile components that contribute to the formula.'
                    ],
                ],
                'cta' => 'Order Now',
                'ctaimg' => self::landingwebp('btn-bg.webp'),
                'ctaimgFallbackImage' => self::landingpng('btn-bg.png'),
                'image' => self::landingwebp('sec5img.webp'),
                'fallbackImage' => self::landingpng('sec5img.png'),
            ]
        );
    }

    public static function getSection6()
    {
        return ([
            'image' => self::landingwebp('sec6img.webp'),
            'fallbackImage' => self::landingpng('sec6img.png'),
            'subheading' => 'How Novamanix WORKS',
            'pheading' => [
                'PENIS ENLARGEMENT',
                'PEAK ERECTION SIZE'
            ],
            'p' => [
                'You may have noticed that Novamanix doesn’t claim to increase penis size. Rather, Novamanix promises to increase erection size. One might think that increasing penis size and erection size are one and the same, but both are very different from each other.',
                'One of the main reasons why critics openly praise Novamanix is because of the fact that it openly called penis enlargement as a myth – throwing shade at other male enhancement brands that claim to increase penis size. After all, penis enlargement is a lie told by manufacturers to sell their products. There’s no way it’s going to happen.',
                'Science clearly states that penis enlargement is not possible, and penis growth usually stops during your teen years. There’s no way to make your penis grow again, no matter how much exercise, suction, or weight you put into it, it will never increase its mass. The penis is not a skeletal muscle that you can grow by progressive overload. The penis is made up of smooth muscles and chambers that hold blood to make it erect when you are aroused.',
                'While the penis is not a muscle that you can grow, it certainly can expand. The penis is made up of elastic tissue that can stretch whenever you get an erection – but you don’t get a fully-stretched erection every single time. According to studies, there are different stages to each erection. That means that not every man experiences their peak erection size.',
                'Men know for a fact that their erection isn’t always the same. Sometimes you get a full-on rigid and erect, sometimes it’s just barely erect and not even hard enough for penetration. Men lose erection size if the penis isn’t hard enough. Two factors contribute to erection hardness – libido and blood flow. What Novamanix does is that it focuses blood flow to the penis with the help of vasodilators and testosterone boosters to allow men to get their peak erection size, every single time.'
            ]
        ]
        );
    }

    public static function getSection7()
    {
        return ([
            'pheading' => [
                'The Technology Behind Novamanix',
                'Rapid Expansion Technology',
                'Vaso-Expansion Technology'
            ],
            'p' => [
                'KSM-66 is a supplement product made from standardized Ashwagandha. KSM-66 had undergone through various clinical trials to prove its effectiveness as a testosterone booster, mood enhancer, and as a stress buster. KSM-66 can be purchased as a standalone supplement and is now being used as a core ingredient of Novamanix.',
                'STEM is the testosterone-boosting component of the formula. It does more than just to boost testosterone, it helps sustain testosterone over a long period of time to allow the body to prepare for sexual activity. High testosterone isn’t always good, but the STEM technology makes it work. Testosterone is naturally metabolized into estrogen and DHT, and by inhibiting the enzymes that metabolize testosterone into these hormones, STEM effectively builds up free testosterone without the dangerous side effects. That means that you won’t get man boobs or an enlarged prostate because of Novamanix. Due to the safe and effective testosterone boost, Novamanix is able to reach the next level of libido enhancement – a strong, aggressive libido boost that brings out your best sexual performance.',
                'VI-PEX is the perfect pair to STEM. VI-PEX stands for Vasodilator Ingredients with Penile Expansion. As the name implies, its main objective is to expand the elastic penile tissue to create a significant increase in erection size. VI-PEX contains nitric oxide boosters that allow blood vessels to dilate. Wider blood vessels mean better blood flow to the penis. This is further enhanced by PDE-5 inhibitors that extend the effect of vasodilators. Novamanix’s VI-PEX complex alone is enough to boost erection size. With the help of STEM, men can experience their peak erection size every single time they get an erection.'
            ]
        ]
        );
    }

    public static function getSection8()
    {
        return ([
            'subheading' => 'HOW Novamanix CHANGED THE HEALTH INDUSTRY',
            'p' => 'Male enhancement is one of the industry’s least trusted segments, but Novamanix shows the industry how it’s done. Instead of fooling customers with overinflated claims, Novamanix proves that a safe and effective formula can be both realistic and consistent. Instead of playing safe with the formula, Novamanix shows the industry that it can deliver the results that the customer wants without hiding behind the fine print. If Novamanix was able to reach this level in a segment that many dismiss as a novelty, then supplement companies would have to step up their game, because Novamanix is killing it right now. There’s no excuse but to give customers what they want, and they have to find a way to do it, just like Novamanix did.'
        ]
        );
    }

    public static function getSection9()
    {
        return ([
            'heading' => 'Novamanix FAQ',
            'subheading' => [
                'Do you need a prescription to buy Novamanix?',
                'How do you order Novamanix?',
                'How does Novamanix’s free membership program work?',
                'Is Novamanix effective?',
                'How long does it take to get my Novamanix order?',
                'Is Novamanix safe?',
                'How does Novamanix’s guarantee work?'
            ],
            'p' => [
                'No. Novamanix is 100% made from natural ingredients and is not considered as a drug. It is not meant to treat any illness. You can buy Novamanix directly from the website without any problem.',
                'Simply head over to Novamanix.com, go to the ORDER page, and go through the checkout process. While you’re at it, you might want to sign up for Novamanix’s FREE membership program. Members get 50% off on all purchases. That’s a lot of savings!',
                'Novamanix’s FREE membership program allows you to get the exclusive discount offered only to members. Membership is 100% free with zero commitments, and you can cancel anytime without any penalty. With the membership, you also get a bottle ordered and shipped automatically every month so you won’t have to go through the tedious process of ordering every month.',
                'The science says it is. Novamanix proves beyond doubt that its formula 100% works. Even critics and customers agree that Novamanix works. The best test would be to try the product out yourself. After all, with a 90-day money-back guarantee, it’s virtually risk-free.',
                'Novamanix normally ships through USPS standard shipping. You should get your order within 2 weeks. If you don’t, contact their customer service hotline and ask them to track your package.',
                'We have examined Novamanix and found it to be one of the safest and most effective products in male enhancement. It’s absolutely safe for healthy men to take Novamanix. However, if you are undergoing treatment, or if you take maintenance meds, it’s best to talk to your doctor before taking Novamanix.',
                'Basically, you have up to 90 days to try the product out. If you’re not happy with it, just call in and request for a refund. They will give you a return address where you can send your remaining pills to. Once they get your package, they will issue a full refund. It’s that simple. Members can also cancel their membership at any time without any penalty, but really – why would you let go of such a good deal?'
            ]
        ]
        );
    }

    public static function getSection10()
    {
        return ([
            'heading' => 'VERDICT',
            'p' => 'Novamanix is as awesome as everybody says it is. I was skeptical at first, but after a deep review of Novamanix, it’s easy to understand why critics and customers say that it’s the best product in the business. As a supplement critic, I haven’t seen anything made at this level. It’s time for supplement manufacturers to step up their game because a new male enhancement pill is showing the industry how it’s supposed to be done.',
            'image' => self::landingwebp('sec10img.webp'),
            'fallbackImage' => self::landingpng('sec10img.png'),
            'image2' => self::landingwebp('sec10seal.webp'),
            'fallbackImage2' => self::landingpng('sec10seal.png'),
            'cta' => 'Order Now',
            'ctaimg' => self::landingwebp('btn-bg.webp'),
            'ctaimgFallbackImage' => self::landingpng('btn-bg.png')
        ]
        );
    }

    public static function getSection11()
    {
        return ([
            'p' => [
                'Francis is the lead supplement expert for some of the top supplement review sites. He loves to write about fitness, men’s health, and sports. Francis has been in the supplement industry for 19 years. He was a former supplement analyst for various health companies before working full-time as a supplement review expert.',
                'FTC Disclosure: The information contained within this site is not intended as a substitute for professional medical advice. If you have, expect to have, or suspect you may have any medical condition, you are urged to consult with a health care provider. These statements have not been evaluated by the Food and Drug Administration. These products are not intended to diagnose, treat, cure or prevent any diseases or medical conditions. naturalNovamanixsupplements.com is an affiliate branch of Novamanix and its subsidiaries. Links contained in this review to Novamanix.com and other affiliated subsidiaries and any subsequent sales thereafter generate revenue for the collective enterprise.',
            ],
            'image' => self::landingwebp('sec11symbol.webp'),
            'fallbackImage' => self::landingpng('sec11symbol.png'),
        ]
        );
    }
}
