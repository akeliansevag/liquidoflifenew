<?php
$clients = [
    'aldar.webp',
    'crank.webp',
    'dess.webp',
    'dosc.webp',
    'dubai-chamber-of-commerce.webp',
    'keolis.webp',
    'masdar.webp',
    'pacific-prime.webp',
    'unnamed.webp'
];
?>
<section class="bg-secondary lg:rounded-[96px] lg:mx-10">
    <div class="container">
        <div>
            <h2 class="section-title text-center">OUR CLIENTS</h2>
            <div class="swiper mt-8" id="clients-slider">
                <div class="swiper-wrapper items-center">
                    <?php foreach ($clients as $client): ?>
                        <div class="swiper-slide">
                            <div class="flex justify-center items-center">
                                <img class="max-lg:w-1/2" src="<?= get_template_directory_uri() ?>/src/img/clients/<?= $client ?>" alt="Client Logo" />
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
            <div id="clients-slider-nav" class="flex justify-center my-10">
                <?= get_template_part('components/swiperNav'); ?>
            </div>
        </div>


        <div>
            <h2 class="section-title text-center pt-12">CLIENTS TESTIMONIALS</h2>
            <div class="swiper mt-14" id="testimonials-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial">
                            <h3>Adrienne Doolan</h3>
                            <div class="text-lg">
                                <p>
                                    Working with Liquid of Life for nearly a decade has been an incredible journey of sustainability and innovation.
                                    As a long-standing corporate partner, I’ve witnessed their unwavering commitment to providing sustainable, high-quality water solutions that aligned with our environment goals.
                                </p>
                                <p>
                                    On a personal level, I’ve also have the privilege of experiencing
                                    the benefits of their filtered water solutions at home. Having access to clean, safe and great tasting water has been a game changer
                                    for my family and me. It’s reassuring to know that we’re contributing to a healthier planet by reducing our reliance on single-use plastics while enjoying superior water quality.
                                </p>
                                <p>
                                    Liquid of Life truly exemplifies what it means to combine sustainability with practicality. Their expertise and passion for what they do are evident in every interaction, making them a trusted partner and solution provider.
                                </p>
                                <p class="text-primary !mb-0">
                                    Founder of Sustain Global SME Impact Platform, CEO Green Touches, Board Member of UN Global Compact Local Network UAE
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial">
                            <div class="flex max-lg:flex-col gap-1">
                                <h3>Beverley Wylie <span> - </span> <span class="text-xl text-primary uppercase">Founder of Wellness We Need</span></h3>


                            </div>

                            <div class="text-lg">
                                <p>
                                    As a lifestyle and wellness professional, health and sustainability are at the heart of everything I do, both personally and professionally. That’s why working with Liquid of Life has been such a rewarding experience over the years. Their filtered water solutions perfectly align with my commitment to promoting well-being and eco-conscious living.

                                </p>
                                <p>
                                    At home, having access to clean, pure, and great-tasting water has been a game changer. It’s not just about hydration—it’s about feeling confident in the quality of what we’re consuming and knowing we’re making a positive choice for the environment.

                                </p>
                                <p class="!mb-0">
                                    Liquid of Life goes beyond providing a product; they deliver
                                    a way of life that empowers individuals and businesses
                                    to embrace sustainability without compromising on quality
                                    or convenience. Their passion and expertise have been
                                    a constant source of inspiration, and I wholeheartedly recommend their solutions to anyone looking to enhance their health and environmental impact.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

                <div id="testimonials-swiper-navigation" class="swiper-pagination !relative mt-10"></div>
            </div>
        </div>
    </div>
</section>