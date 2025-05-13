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

    public static function svg($filename)
    {
        return Yii::$app->urlManager->baseUrl . '/images/progen/' . $filename;
    }

    public static function getLanderHero()
    {

        return (
            [
                'heading' => 'Novamanix Enhancement Supplements',
                'p' => [
                    'Novamanix is the FIRST and ONLY male enhancement supplement that is guaranteed to increase penis size. With its cutting-edge SYNER-BOOST technology it gives you the most comprehensive male enhancement formula that helps improve penis size libido and sexual endurance without the nasty side effects. Novamanix’s balanced formula ensures that you get the best results without compromising your health.',
                    'Novamanix is specially formulated to maintain a balanced formula that keeps a safe, potent dosage without increasing the risk for side effects. In studies that we have conducted, over 99% reported no Novamanix side effects.',
                    'No other male enhancement pill can deliver the benefits that Novamanix offers, and now it’s within your reach. With a few clicks of the button, you can get yourself the most advanced penis enlargement pill ever. Guaranteed to be effective and safe, Novamanix is the ultimate pill that will change the course of your sex life for good.'
                ],
                'cta' => 'Buy Novamanix Here'
            ]
        );
    }

    public static function getLanderSec1()
    {

        return (
            [
                'subheading' => 'What are the Novamanix Side Effects?',
                'p' => 'Novamanix is specially engineered to have a balanced formula to avoid side effects.The intended purpose of <u class="cursor-pointer">Novamanix</u> is to help men reach the nutritional requirements to produce penis enlargement results. You may consider having an increased sexual appetite and a sturdy erection as good ‘side effects’ as the formula produces these benefits as well for the user. With negative side effects, however, we are proud to say that the balanced formula of Novamanix has virtually nullified the risks of developing side effects in healthy individuals.',
                'svg' => [
                    self::svg('sec1svg1.svg'),
                    self::svg('sec1svg2.svg'),
                    self::svg('sec1svg3.svg')
                ],
                'span' => [
                    'ENHANCED SEX DRIVE',
                    'INCREASE SIZE',
                    'MAXIMUM SEXUAL STAMINA'
                ]
            ]
        );
    }

    public static function getLanderSec2()
    {

        return (
            [
                'subheading' => 'Novamanix Side Effect WARNING',
                'p' => [
                    'As we have developed Novamanix to be completely safe to the user, be extremely concerned if you experience any side effects when using Novamanix. The brand has gained popularity over the past few months, and several fake Novamanix has been sold online. To be sure that you get authentic Novamanix pills, buy only direct from the official website at www.Novamanix.com. Symptoms of fake Novamanix products include:',
                    'Avoid these fake Novamanix side effects and buy direct from the official website only. Get the best deals and the best value for your money only at <b>www.Novamanix.com</b>.'
                ],
                'li' => [
                    'Lightheadedness',
                    'Nausea',
                    'Vomiting',
                    'Sharp drop in blood pressure',
                    'Increased heart rate'

                ]
            ]
        );
    }

    public static function getLanderSec3()
    {

        return (
            [
                'subheading' => 'NOVAMANIX SIDE EFFECTS ARE UNCOMMON',
                'p' => [
                    'If you experience side effects or any discomfort when using Novamanix, you might have a fake Novamanix. Authentic Novamanix pills are only distributed through the official website. Novamanix does not have any official business with sellers on Amazon or eBay, and buying Novamanix pills on these websites may put you at risk for buying fake Novamanix pills.',
                    'Only the best quality pills are offered on Novamanix’s official website. Novamanix pills purchased on the official website are covered by the 90-day money back guarantee of Novamanix. Make sure that you only purchase direct to avail of Novamanix’s money-back guarantee! See the best value deals on www.Novamanix.com. Novamanix offers massive discounts on 3-month and 6-month packs! See which Novamanix package works best for you. Visit <b>www.Novamanix.com</b> now!.'
                ],
                'image' => self::landingwebp('sec3img.webp'),
                'fallbackImage' => self::landingpng('sec3img.png'),
                'imagemb' => self::landingwebp('sec3imgmb.webp'),
                'fallbackImagemb' => self::landingpng('sec3imgmb.png'),

            ]
        );
    }

    public static function getLanderSec4()
    {

        return (
            [
                'subheading' => 'Here’s what you can expect with Novamanix',
                'span' => [
                    'Increased length and girth',
                    'Improved erectile quality',
                    'Decreased sexual downtime',
                    'Increased sexual performance'
                ],
                'svg' => [
                    self::svg('sec4svg1.svg'),
                    self::svg('sec4svg2.svg'),
                    self::svg('sec4svg3.svg'),
                    self::svg('sec4svg4.svg')
                ],

            ]
        );
    }

    public static function getLanderSec5()
    {

        return (
            [
                'subheading' => 'SAFE AND EFFECTIVE NOVAMANIX FORMULA',
                'p' => 'The diverse and balanced ingredient lineup is one of the main reasons why Novamanix side effects are unheard of. See the full list of Novamanix ingredients below:',
                'formula' => [
                    [
                        'subheading' => 'Increased length and girth',
                        'p' => 'Men who frequently visit the gym are familiar with what L-Arginine can do for the body. It’s one of the handful of ingredients that has an effect on vascularity. In male enhancement, however, its effect is even more crucial. L-Arginine makes it possible for Novamanix to have penis enlargement effects. By improving the blood flow to the penis, L-Arginine is able to force blood vessels to expand, creating a much bigger erection. L-Arginine works best with PDE-5 inhibitors and aphrodisiacs, which are abundant in Novamanix’s formula.',
                        'image' => self::landingwebp('sec5img1.webp'),
                        'fallbackImage' => self::landingpng('sec5img1.png')
                    ],

                    [
                        'subheading' => 'Tongkat Ali',
                        'p' => 'Tongkat Ali is regarded as the Asian Viagra because it mimics the effect of the popular erectile dysfunction medicine. We think that Tongkat Ali is even more effective than most erectile dysfunction medicine because it does more than just improve erections; it helps by maximizing libido and reducing the effect of free calcium ions which make the penis flaccid. Tongkat Ali in Novamanix has one of the most innovative formula additions as it synergizes perfectly with the other ingredients to reduce Novamanix side effects.',
                        'image' => self::landingwebp('sec5img2.webp'),
                        'fallbackImage' => self::landingpng('sec5img2.png'),
                    ],

                    [
                        'subheading' => 'Tribulus Terrestris',
                        'p' => 'We’ve always said that Tribulus Terrestris is one of our top 5 male enhancement ingredients, and its inclusion in Novamanix only solidifies our belief. In fact, we believe that having Tribulus Terrestris made all the difference in Novamanix. Despite having loads of testosterone boosters, the formula was able to reduce Novamanix side effects because Tribulus terrestris helps control testosterone. It inhibits the enzyme responsible for converting testosterone into estrogen, and by doing so it prolongs the effect of testosterone while reducing the negative impact of estrogen in a man’s libido.',
                        'image' => self::landingwebp('sec5img3.webp'),
                        'fallbackImage' => self::landingpng('sec5img3.png'),
                    ],

                    [
                        'subheading' => 'Maca Root',
                        'p' => 'There aren’t many ingredients out there that can do what Maca root does. Maca root has a one of a kind benefit that helps men bounce back from having an orgasm. Normally men take 30 minutes or more after having an orgasm to feel aroused again, but with Maca Root, the refractory period, as it is called, gets reduced. Maca root helps inhibit oxytocin and prolactin, which are responsible for prolonging the refractory period.',
                        'image' => self::landingwebp('sec5img4.webp'),
                        'fallbackImage' => self::landingpng('sec5img4.png'),
                    ],

                    [
                        'subheading' => 'Muira Puama',
                        'p' => 'There are only a few supplements that can make the claim that it works fast, and Novamanix is able to because it has Muira Puama. Muira puama is one of the few ingredients that can work within minutes. Just take Novamanix and it works in as fast as 30 minutes after your first dose, thanks to Muira Puama.',
                        'image' => self::landingwebp('sec5img5.webp'),
                        'fallbackImage' => self::landingpng('sec5img5.png'),
                    ],

                    [
                        'subheading' => 'Damiana Root',
                        'p' => 'Damiana Root is a strong aphrodisiac that both affects libido and cognitive abilities. Damiana not only enhances testosterone production, it also enhances the user’s sensitivity to sexual stimulus. As a result, the user experiences better sexual satisfaction.',
                        'image' => self::landingwebp('sec5img6.webp'),
                        'fallbackImage' => self::landingpng('sec5img6.png'),
                    ],

                    [
                        'subheading' => 'Xanthoparmelia Scabrosa',
                        'p' => 'Xanthoparmelia scabrosa is added to the formula to accentuate the PDE-5 inhibitor effects of Tongkat Ali and Horny Goat Weed. As a PDE-5 inhibitor, it helps prolong the effects of cGMP as a vasodilator. As a result, the effectiveness of cGMP is exponentially increased, which greatly speeds up the penis enlargement progress.',
                        'image' => self::landingwebp('sec5img7.webp'),
                        'fallbackImage' => self::landingpng('sec5img7.png'),
                    ],

                    [
                        'subheading' => 'Butea Superba',
                        'p' => 'Butea Superba acts as a secondary testosterone booster, and is included in the formula to boost the other testosterone-enhancing ingredients in the formula. Butea Superba is observed to potentiate and prolong erections.',
                        'image' => self::landingwebp('sec5img8.webp'),
                        'fallbackImage' => self::landingpng('sec5img8.png'),
                    ],
                ]

            ]
        );
    }

    public static function getLanderSec6()
    {

        return (
            [
                'subheading' => 'How to take Novamanix',
                'p' => 'To make the most out of your Novamanix supplementation, we advise our customers to take two pills of Novamanix in the morning preferably on an empty stomach. Taking Novamanix on an empty stomach will allow for a quick absorption of the nutrients, and allow a delayed-release mechanism to make the formula active and ready for the rest of the day. If you want an additional kick to your sexual performance, you can simply take another pill of Novamanix about an hour before having sex to improve hardness, libido, and sexual endurance. '

            ]
        );
    }

    public static function getScienceSec1()
    {

        return (
            [
                'subheading' => 'The SCIENCE behind NovaManix',
                'p' => [
                    'NovaManix is the world’s best penis enlargement pill for a reason; NovaManix does not cause side effects, and its effectiveness is not sacrificed for safety. Hundreds of male enhancement products have been introduced in the last 5 decades, and none have been able to prove beyond doubt that penis enlargement is possible with an oral supplement until NovaManix.',
                    'It has long been established by experts that the only way to increase penis size is by pumping more blood to the penis. Vasodilation is the most effective method of getting blood to the penis, but to actually make penis enlargement happen through vasodilation alone would require a serious amount of vasodilators, which could cause blood pressure levels to drop dangerously. This has been a problem for male sexual health brands as altering blood flow is the only way to achieve penis enlargement.',
                    'NovaManix presented a revolutionary approach to penis enlargement that combines vasodilation, aphrodisiacs, and hormone stabilizers to create the perfect conditions for penis enlargement, which is now known as the SYNER-BOOST FORMULA.',
                    'The formula focuses on ingredient synergy, unlike other brands that aim to overload the pill with aphrodisiacs and vasodilators, which could increase the risk of side effects. With NovaManix, you do not need to be concerned about NovaManix side effects as there is virtually no side effects for healthy individuals.'
                ]
            ]
        );
    }

    public static function getScienceSec2()
    {

        return (
            [
                'subheading' => 'NOVAMANIX SIDE EFFECTS',
                'p' => [
                    'As we have developed NovaManix to be completely safe to the user, be extremely concerned if you experience any side effects when using NovaManix. The brand has gained popularity over the past few months, and several fake NovaManix has been sold online. To be sure that you get authentic NovaManix pills, buy only direct from the official website at www.Novamanix.com. Symptoms of fake NovaManix products include:',
                    'To avoid these dangerous side effects, all you have to do is choose authentic NovaManix pills which are available on www.Novamanix.com.'
                ],
                'li' => [
                    'Lightheadedness',
                    'Nausea',
                    'Vomiting',
                    'Sharp drop in blood pressure',
                    'Increased heart rate'
                ],
            ]
        );
    }

    public static function getScienceSec3()
    {

        return (
            [
                'subheading' => 'Why is NovaManix BETTER than other male enhancement pills?',
                'p' => [
                    'NovaManix’s focus on ingredient synergy makes it possible to have an enhanced effectiveness on all of the ingredients included in the formula. While other brands simply overload a pill with testosterone boosters and aphrodisiacs, NovaManix actually combines the right aphrodisiacs and testosterone boosters to amplify its effectiveness on the body.',
                    'NovaManix also uses both fast-acting and delayed-release ingredients to give you the freedom to use NovaManix the way you want to. You can take NovaManix as a fast-acting supplement. Just take two NovaManix capsules an hour before having sex, and you’re good to go.',
                    'If you want a bigger penis with a consistent boost to your sex drive, you can take two pills of NovaManix every morning on an empty stomach. In just a few weeks, you can expect to have a bigger penis, with a reinforced sex drive and stamina.'
                ],
                'image' => self::landingwebp('scisec3.webp'),
                'fallbackImage' => self::landingpng('scisec3.png'),
            ]
        );
    }

    public static function getScienceSec4()
    {

        return (
            [
                'subheading' => [
                    'How NovaManix works:',
                    'NOVAMANIX SAFETY REMINDER'
                ],
                'list' => [
                    [
                        'subheading' => 'STAGE 1',
                        'p' => 'Fast-acting aphrodisiacs and PDE-5 inhibitors are absorbed by the body in just 30 minutes after taking the first dose. The effects of aphrodisiacs and PDE-5 inhibitors supercharge the user’s libido and enhances the intensity and hardness of the user’s erections.'
                    ],
                    [
                        'subheading' => 'STAGE 2',
                        'p' => 'Delayed-release aphrodisiacs and PDE-5 inhibitors remain active to ready the body for sexual activities for 24 hours. Vasodilator ingredients increase the flow of blood to the penis, setting the conditions for continuous penis enlargement.'
                    ],
                    [
                        'subheading' => 'STAGE 3',
                        'p' => 'While the user experiences an erection, the PDE-5 inhibitor ingredients enhance the effects of the vasodilators to maximize the amount of blood supplied to the cavernous spaces in the penis, which would trigger an expansion of penile tissue permanently.'
                    ],
                    [
                        'subheading' => 'STAGE 4',
                        'p' => 'Hormone stabilization allows the body to increase the instances of erections by minimizing the effects of the refractory period in the body to prolong and maximize the penis enlarging effects of the formula.'
                    ],
                ],
                'p' => 'NovaManix is generally safe to take, with minimal side effects due to outside factors such as medicine, and other health conditions that may affect the interaction of the formula. Based on our own research, 99% of our customers show no signs of side effects, and none of our customers have had any serious interactions with NovaManix. However, certain safety precautions must be exercised to ensure your health and well-being. NovaManix works on the body’s circulatory system and hormones. If you have been diagnosed with a chronic health condition related to the circulatory system such as hypertension, diabetes, or high cholesterol, you should seek the advice of a health professional before taking NovaManix or any other supplement.'
            ]
        );
    }

    public static function getScienceSec5()
    {

        return (
            [
                'subheading' => 'NovaManix MONEY BACK GUARANTEE',
                'p' => [
                    'NovaManix offers a 90-day money-back guarantee on purchases made on our official website. We are fully confident that NovaManix will meet and exceed your expectations, which is why we have prepared a guarantee to show you how much we believe in our brand.',
                    'We have poured countless man hours into developing NovaManix, and it would be a pleasure to share the experience with our customers. However, if you feel that NovaManix failed to live up to your expectations, simply give us a call, and our customer care staff will help you process your refund right away.'
                ],
                'image' => self::landingwebp('satisfaction.webp'),
                'fallbackImage' => self::landingpng('satisfaction.png'),
            ]
        );
    }

    public static function getScienceSec6()
    {

        return (
            [
                'subheading' => 'BEWARE OF SCAMS and FAKE NOVAMANIX',
                'p' => [
                    'NovaManix was developed through years of hard work from our experts and staff, and we are very much invested in the product itself. We believe that the reputation of the brand we have worked so hard to establish is more important than getting easy money off of scams. You can count on us to have a trustworthy, transparent, and honest professional approach to the people we do business with.',
                    'BE wary of shady supplement scams and fake products. Always dig deeper to find out the truth about the product that you are planning to buy. Scams and fake products have been around for decades. You can count on us to be vigilant in spotting scams and fake products.'
                ]
            ]
        );
    }

    public static function getFaq()
    {
        return ([
            'subheading' => 'Novamanix Side Effects FAQ',
            'p' => 'Do you have questions for us? See the most frequently asked questions of our customers and our answers in our FAQ page. If you do not see the answer to your question on the list below, feel free to contact us and we’ll get back to you as soon as possible.',
            'list' => [
                [
                    'subheading' => 'What are the Novamanix Side Effects?',
                    'p' => 'Novamanix is specially engineered to have a balanced formula to avoid side effects. The intended purposNovamanix Advantage is to help men reach the nutritional requirements to produce penis enlargement results. You may consider having an increased sexual appetite and a sturdy erection as good ‘side effects’ as the formula produces these benefits as well for the user. With negative side effects, however, we are proud to say that the balanced fNovamanix Novamanix has virtually nullified the risks of developing side effects in healthy individuals.'
                ],
                [
                    'subheading' => 'Is Novamanix safe to take?',
                    'p' => 'Novamanix is generally safe to take, with minimal side effects due to outside factors such as medicine, and other health conditions that may affect the interaction of the formNovamanix Advantage works on the body’s circulatory system and hormones. If you have been diagnosed with a chronic health condition related to the circulatory system such as hypertension, diabetes, or high cholesterol, you should seek the advice of a health professional befoNovamanix Novamanix or any other supplement.'
                ],
                [
                    'subheading' => 'How big can I get with Novamanix?',
                    'p' => 'The increase in penis size varies depending on a lot of factors. But you can be sure that by taking Novamanix, you can increase your penis size. Based on the studies we have conducteNovamanix Advantage, the average size increase is about 2 inches after taking the product regularly for 8 weeks. The biggest increase we have recorded so far is a 4.5 inch improvement from a starting point of 5.3 inches erect penis. Based on our research, our customers experience a significant increase in penis size aftNovamanix Novamanix regularly for at least 14 days.'
                ],
                [
                    'subheading' => 'What’s the best way to take Novamanix?',
                    'p' => 'To make the most out of your Novamanix supplementation, we advise our customers to take two pillNovamanix Advantage in the morning preferably on an empty stomacNovamanix Novamanix on an empty stomach will allow for a quick absorption of the nutrients, and allow a delayed-release mechanism to make the formula active and ready for the rest of the day. If you want an additional kick to your sexual performance, you can simply take aNovamanixll of Novamanix about an hour before having sex to improve hardness, libido, and sexual endurance.'
                ],
                [
                    'subheading' => 'Is Novamanix a scam?',
                    'p' => 'No. Novamanix was developed through years of hard work from our experts and staff, and we are very much invested in the product itself. We believe that the reputation of the brand we have worked so hard to establish is more important than getting easy money off of scams. You can count on us to have a trustworthy, transparent, and honest professional approach to the people we do business with.'
                ],
                [
                    'subheading' => 'Is Novamanix offered outside of the United States?',
                    'p' => 'Currently, Novamanix is offered also in the United Kingdom and in Canada. We have yet to establish shipping in countries outside of our current scope, but given the rising popularitNovamanix Advantage, we are now receiving offers to dNovamanix Novamanix in other locations. Check with your local supplement providerNovamanixoffer Novamanix. If not, you can refer them to our website so we can workNovamanixl to bring Novamanix closer to you.'
                ],
                [
                    'subheading' => 'Does Novamanix offer money-back guarantees?',
                    'p' => 'Absolutely. We are fully confident that Novamanix will be able to meet and exceed your expectations. That’s why we have placed a guarantee on your purchase Novamanix Advantage. If you Novamanix Novamanix is unsatisfactory to your standards, you can simply give us a call, and our customer care staff will help you process your refund. It’s that easy!'
                ],
            ],
        ]);
    }

    public static function getTestimonials()
    {
        return ([
            'heading' => 'Novamanix Side Effects Testimonials',
            'testimonials' => [
                [
                    'subheading' => 'Novamanix is my first choice.',
                    'p' => 'Given that this is my first time to buy male enhancement supplements, I did my research and found that Novamanix really has everything in order, from the science and dosage, everything lines up perfectly. I’m a bit cautious to what I put into my body, and I’m proud to say that I have not experiencedNovamanix Advantage side effects whatsoever. Even more impressive is that it really does what it says on the website. I got bigger, and I got betteNovamanix Novamanix is the real deal!',
                    'name' => 'Bernard S.',
                    'loc' => 'El Paso, TX'
                ],
                [
                    'subheading' => 'Novamanix made me a stud.',
                    'p' => 'I’m a nerdy college guy, not the kind of guy that’s really popular with women in the University. I ordered Novamanix online about a month ago, and it changed everything for me. I gained two inches on my penis, and my libido is at an all-time high. I just can’t believe it. My confidence grew each day, and I was able to pick up women and have hot, sweaty sex all night. The best part is, I now have the reputation for being hung – and every girl in the University is curious. All that for a pill. What a time to be alive!',
                    'name' => 'Luke I.',
                    'loc' => 'Los Angeles, CA'
                ],
                [
                    'subheading' => 'I just ordered 6 months’ worth of Novamanix.',
                    'p' => 'I work in a cruise ship, and most of the time, the opportunity is there to cozy up with one of the drunk guests. But because of my average penis, I feel like I can’t live up to their expectations and ruin the experience for them. I had a time once with a young woman, and she laughed at the underwhelming size of my penis. Thanks to Novamanix, that’s all done and over. I gained 2.5 inches longer after taking it for 3 months. Now, I’m bringing a whole pack with me to the cruise to make the most out of the experience.',
                    'name' => 'Pete T.',
                    'loc' => 'Tampa, FL'
                ],
                [
                    'subheading' => 'Novamanix made my penis BIG!',
                    'p' => 'Taking Novamanix is really an entirely new experience for me. I’ve taken loads of male enhancers before, but none ever came closNovamanix Advantage. I mean, you can literally feel the rush of blood flowing to your penis. On the first day, my penis was so engorged with blood. It was so red, but it felt nice and intense. I’m pretty sure that iNovamanix Novamanix side effect, and my partner seeing my penis so angry and red even made her hornier. A few weeks is all it took to gain an inch bigger. WOW. Just, WOW!',
                    'name' => 'Bernie A.',
                    'loc' => 'Norfolk, VA'
                ],
                [
                    'subheading' => 'I ditched Viagra when I got Novamanix.',
                    'p' => 'My doctor gave me a prescription for Viagra, and I’ve been satisfied with that for the longest time. At times I feel a bit woozy and lightheaded, but the label said that it’s what I should expect after taking Viagra. An old friend from high school recommended that I take Novamanix and ditch Viagra, and so I did. After I took the first pill, I felt the difference right away. It was an intense sex drive and my erections did not give me the headache and lightheadedness I usually feel with Viagra. I guess I’m sticking Novamanix Advantage now for good!',
                    'name' => 'Ralph D.',
                    'loc' => 'Corpus Christi, TX'
                ],
                [
                    'subheading' => 'I knew he was taking penis enlargement pills!',
                    'p' => 'I recently hooked up with an ex-boyfriend from college. We were together then for a year, and I can vividly remember every inch of his “anatomy”. While having sex with him, I noticed that his penis was really bigger than before. I mean, really big! Like it was blown up or something. I asked him about it and showed me his half-spent bottle of Novamanix. It was a nice mix of shock and pleasure for me. Wow, this stuff really works, doesn’t it? I just bought him a pack of 3’s as a gift and maybe he’ll want to see me again.',
                    'name' => 'Amanda A.',
                    'loc' => 'Oakland, CA'
                ],
                [
                    'subheading' => 'Novamanix works for me.',
                    'p' => 'I’ve tried a bunch of other male enhancers, but I found out quickly that I am quite sensitive to side effects. I easily get the flushes, I get sluggish, and there was this one time when I passed out after taking a Chinese ‘penis enlargement’ pill. Novamanix was really different. You can tell that it comes in a bit strong after the first pill, but it didn’t cause any of the nasty side effects I usually experience with other pills. If anything, I doubt if I experiencedNovamanix Advantage side effects at all. I’ve beNovamanix Novamanix now for the 8th week, and I’ve gotten about 2 inches longer, and an incNovamanix with Novamanix. Safe, effective, and affordable. What more can you ask for?',
                    'name' => 'Randall P.',
                    'loc' => 'Seattle, WA'
                ],
                [
                    'subheading' => 'I’m buying more pills today!',
                    'p' => 'I just ran out of Novamanix pills. I ordered a one-month pack and by the time I was halfway through, I realized that I should have taken your 3-pack or 6-pack pills to save. I mean, this stuff is really worth it. I can tell that I gained some size. I just don’t know how much, but I’m sure I got bigger. I’m now returning to the website to order more pills!',
                    'name' => 'Will A.',
                    'loc' => 'Austin, TX'
                ],
            ]
        ]);
    }

    public static function productSelection()
    {
        return ([
            'bsubheading' => [
                'Your life-changing experience starts here.',
                'Place your order on our website and get NovaManix in just a week!'
            ],
            'gsubheading' => [
                'GET YOUR GENUINE NOVAMANIX PILLS ASAP',
                '100% GUARANTEED RESULTS!'
            ],
            'products' => [
                'product1' => [
                    'image' => self::landingwebp('silver.webp'),
                    'imageSelected' => self::landingwebp('silver_selected.webp'),
                    'fallbackImage' => self::landingpng('silver.png'),
                    'fallbackImageSelected' => self::landingpng('silver_selected.png'),
                    'imagemb' => self::landingwebp('silvermb.webp'),
                    'imageSelectedmb' => self::landingwebp('silver_selectedmb.webp'),
                    'fallbackImagemb' => self::landingpng('silvermb.png'),
                    'fallbackImageSelectedmb' => self::landingpng('silver_selectedmb.png'),
                ],
                'product2' => [
                    'image' => self::landingwebp('gold.webp'),
                    'imageSelected' => self::landingwebp('gold_selected.webp'),
                    'fallbackImage' => self::landingpng('gold.png'),
                    'fallbackImageSelected' => self::landingpng('gold_selected.png'),
                    'imagemb' => self::landingwebp('goldmb.webp'),
                    'imageSelectedmb' => self::landingwebp('gold_selectedmb.webp'),
                    'fallbackImagemb' => self::landingpng('goldmb.png'),
                    'fallbackImageSelectedmb' => self::landingpng('gold_selectedmb.png'),
                ],
                'product3' => [
                    'image' => self::landingwebp('platinum.webp'),
                    'imageSelected' => self::landingwebp('platinum_selected.webp'),
                    'fallbackImage' => self::landingpng('platinum.png'),
                    'fallbackImageSelected' => self::landingpng('platinum_selected.png'),
                    'imagemb' => self::landingwebp('platinummb.webp'),
                    'imageSelectedmb' => self::landingwebp('platinum_selectedmb.webp'),
                    'fallbackImagemb' => self::landingpng('platinummb.png'),
                    'fallbackImageSelectedmb' => self::landingpng('platinum_selectedmb.png'),
                ],
            ]
        ]);
    }
}
