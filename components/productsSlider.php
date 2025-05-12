<?php
$query = new WP_Query([
    'post_type' => 'product',
    'posts_per_page' => 6,
]);
$products = $query->posts;
?>
<section>
    <div class="container">
        <div class="flex items-center justify-between">
            <h2 class="section-title">PRODUCTS</h2>
            <div id="products-slider-nav">
                <?= get_template_part('components/swiperNav'); ?>
            </div>
        </div>
        <div class="swiper mt-8" id="products-slider">
            <div class="swiper-wrapper">
                <?php foreach ($products as $product): ?>
                    <div class="swiper-slide">
                        <div>
                            <div class="h-[350px] py-6 px-7 rounded-2xl overflow-hidden w-full relative flex items-end">
                                <?=
                                get_the_post_thumbnail(
                                    $product->ID,
                                    'featured-small',
                                    [
                                        'class' => 'absolute top-0 left-0 -z-10 object-cover w-full h-full'
                                    ]
                                );
                                ?>
                                <?php if (get_field("best_seller", $product->ID)): ?>
                                    <div class="rounded-lg absolute top-6 xl:left-7 max-xl:left-1/2 max-xl:-translate-x-1/2 text-white bg-black py-1 px-3 uppercase">
                                        Best Seller
                                    </div>
                                <?php endif; ?>
                                <div class="flex max-xl:flex-col max-xl:gap-2 max-xl:text-center xl:justify-between items-center w-full">

                                    <h3 class="text-lg text-white bg-primary rounded-lg py-1 px-3"><?= $product->post_title; ?></h3>
                                    <?php
                                    $link = get_permalink(get_page_by_path('products'));
                                    $target = "_self";
                                    if (get_field('external_link', $product->ID)) {
                                        $link = get_field('external_link', $product->ID);
                                        $target = "_blank";
                                    }
                                    ?>
                                    <a target="<?= $target ?>" class="bg-white hover:opacity-80 rounded-full w-[40px] h-[40px] flex items-center justify-center" href="<?= $link ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14.529" height="14.529" viewBox="0 0 14.529 14.529">
                                            <line id="Line_8" data-name="Line 8" y2="13.529" transform="translate(7.621 0.5)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1" />
                                            <line id="Line_9" data-name="Line 9" x2="13.529" transform="translate(0.5 7.621)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1" />
                                        </svg>

                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</section>
<?php wp_reset_postdata(); ?>