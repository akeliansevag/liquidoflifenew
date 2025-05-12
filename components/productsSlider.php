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
                            <div class="h-[350px] rounded-[45px] overflow-hidden w-full relative">
                                <?=
                                get_the_post_thumbnail(
                                    $product->ID,
                                    'featured-small',
                                    [
                                        'class' => 'absolute top-0 left-0 object-cover w-full h-full'
                                    ]
                                );
                                ?>
                            </div>
                            <div class="py-4 px-5 flex max-xl:flex-col max-xl:gap-2 max-xl:text-center xl:justify-between xl:items-center">
                                <h3 class="font-bold text-xl"><?= $product->post_title; ?></h3>
                                <?php
                                $link = get_permalink(get_page_by_path('products'));
                                $target = "_self";
                                if (get_field('external_link', $product->ID)) {
                                    $link = get_field('external_link', $product->ID);
                                    $target = "_blank";
                                }
                                ?>
                                <a target="<?= $target ?>" class="text-primary" href="<?= $link ?>">More info</a>
                            </div>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</section>
<?php wp_reset_postdata(); ?>