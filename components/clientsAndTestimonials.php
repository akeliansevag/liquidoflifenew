<section>
    <div class="container">
        <div>
            <h2 class="section-title">CLIENTS TESTIMONIALS</h2>
            <div class="max-lg:mt-10 lg:mt-14 bg-primary relative rounded-xl px-10 max-lg:py-10 lg:py-16">

                <div class="swiper lg:w-2/3" id="testimonials-slider">
                    <div class="swiper-wrapper">
                        <?php foreach (get_field('testimonials') as $testimonial): ?>
                            <div class="swiper-slide">
                                <div class="text-white">
                                    <h3 class="text-xl mb-5 font-bold"><?= $testimonial['name'] ?></h3>
                                    <div>
                                        <?= $testimonial['description'] ?>
                                    </div>

                                </div>
                            </div>
                        <?php endforeach; ?>


                    </div>
                </div>

                <div class="max-lg:flex max-lg:items-center max-lg:justify-center max-lg:gap-3">
                    <div id="testimonial-prev" class="lg:absolute lg:top-1/2 lg:-translate-y-1/2 left-14">
                        <button class="hover:opacity-80 previous-nav w-[40px] h-[40px] rounded-full flex items-center justify-center bg-white rotate-180">
                            <svg class="stroke-primary" width="28px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path class="fill-primary" fill-rule="evenodd" clip-rule="evenodd" d="M8.29289 4.29289C8.68342 3.90237 9.31658 3.90237 9.70711 4.29289L16.7071 11.2929C17.0976 11.6834 17.0976 12.3166 16.7071 12.7071L9.70711 19.7071C9.31658 20.0976 8.68342 20.0976 8.29289 19.7071C7.90237 19.3166 7.90237 18.6834 8.29289 18.2929L14.5858 12L8.29289 5.70711C7.90237 5.31658 7.90237 4.68342 8.29289 4.29289Z" fill="#ffffff"></path>
                                </g>
                            </svg>
                        </button>
                    </div>
                    <div id="testimonial-next" class="lg:absolute lg:top-1/2 lg:-translate-y-1/2 right-14">
                        <button class="hover:opacity-80 next-nav w-[40px] h-[40px] rounded-full flex items-center justify-center bg-white">
                            <svg class="stroke-primary" width="28px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="stroke">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path class="fill-primary" fill-rule="evenodd" clip-rule="evenodd" d="M8.29289 4.29289C8.68342 3.90237 9.31658 3.90237 9.70711 4.29289L16.7071 11.2929C17.0976 11.6834 17.0976 12.3166 16.7071 12.7071L9.70711 19.7071C9.31658 20.0976 8.68342 20.0976 8.29289 19.7071C7.90237 19.3166 7.90237 18.6834 8.29289 18.2929L14.5858 12L8.29289 5.70711C7.90237 5.31658 7.90237 4.68342 8.29289 4.29289Z" fill="#ffffff"></path>
                                </g>
                            </svg>
                        </button>
                    </div>
                </div>

            </div>


        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="flex items-center justify-center gap-12 flex-wrap">
            <?php foreach (get_field('clients') as $client): ?>
                <div class="max-lg:w-[100px] lg:w-[150px]">
                    <img class="w-full" src="<?= $client['url'] ?>" alt="<?= $client['alt'] ?>" />
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>