<?php get_header(); ?>
<?php
$terms = get_terms([
    'taxonomy'   => 'product-category',
    'hide_empty' => true,         // Only categories that have products.
]);
?>
<?= get_template_part('/components/banner'); ?>
<section>
    <div class="container">
        <?php foreach ($terms as $key => $term): ?>
            <?php $products = get_posts([
                'post_type'      => 'product',
                'posts_per_page' => -1,
                'tax_query'      => [
                    [
                        'taxonomy' => 'product-category',
                        'field'    => 'term_id',
                        'terms'    => $term->term_id,
                    ],
                ],
            ]);
            ?>

            <div id="<?= $term->slug; ?>" class="flex max-lg:flex-col gap-5 mb-5 <?= ($key + 1) % 2 != 0 ? 'lg:flex-row-reverse' : 'lg:flex-row' ?>">
                <div class="w-full flex flex-col gap-y-5">
                    <div>
                        <h2 class="bg-primary rounded-2xl text-center text-white font-bold lg:text-5xl max-lg:text-2xl px-3 py-10">
                            <?= $term->name; ?>
                        </h2>
                    </div>
                    <div class="rounded-2xl overflow-hidden">
                        <?php foreach ($products as $key2 => $product): ?>
                            <?php if ($key2 == 0) continue; ?>
                            <div class="relative">
                                <?php if (get_field("best_seller", $product->ID)): ?>
                                    <div class="rounded-lg absolute top-6 xl:right-7 max-xl:right-1/2 max-xl:translate-x-1/2 text-white bg-black py-1 px-3 uppercase">
                                        Best Seller
                                    </div>
                                <?php endif; ?>
                                <?= get_the_post_thumbnail($product->ID); ?>
                                <div class="absolute bottom-8 px-10 z-10 flex max-xl:flex-col max-xl:gap-2 max-xl:text-center xl:justify-between items-center w-full">

                                    <h3 class="text-lg text-white bg-primary rounded-lg py-1 px-3">
                                        <?php
                                        if ($product->post_name == 'premium-dispensers' && $term->slug == 'corporate') {
                                            echo get_field("banner_title", $product->ID);
                                        } else {
                                            echo $product->post_title;
                                        }

                                        ?>

                                    </h3>
                                    <?php

                                    $target = "_self";
                                    if (get_field('external_link', $product->ID)) {
                                        $link = get_field('external_link', $product->ID);
                                        $target = "_blank";
                                    }
                                    ?>
                                    <a target="<?= $target ?>" class="bg-white hover:opacity-80 rounded-full w-[40px] h-[40px] flex items-center justify-center" href="<?= get_permalink($product->ID); ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14.529" height="14.529" viewBox="0 0 14.529 14.529">
                                            <line id="Line_8" data-name="Line 8" y2="13.529" transform="translate(7.621 0.5)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1" />
                                            <line id="Line_9" data-name="Line 9" x2="13.529" transform="translate(0.5 7.621)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1" />
                                        </svg>

                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="bg-[#F5F5F5] rounded-2xl flex-grow"></div>
                </div>
                <div class="w-full flex flex-col gap-y-5">
                    <div class="rounded-2xl overflow-hidden relative">
                        <?php if (get_field("best_seller", $products[0]->ID)): ?>
                            <div class="rounded-lg absolute top-6 xl:right-7 max-xl:right-1/2 max-xl:translate-x-1/2 text-white bg-black py-1 px-3 uppercase">
                                Best Seller
                            </div>
                        <?php endif; ?>
                        <?=
                        get_the_post_thumbnail($products[0]->ID);
                        ?>
                        <div class="absolute bottom-8 px-10 z-10 flex max-xl:flex-col max-xl:gap-2 max-xl:text-center xl:justify-between items-center w-full">

                            <h3 class="text-lg text-white bg-primary rounded-lg py-1 px-3">
                                <?php

                                if ($products[0]->post_name == 'premium-dispensers' && $term->slug == 'corporate') {
                                    echo get_field("banner_title", $products[0]->ID);
                                } else {
                                    echo $products[0]->post_title;
                                }

                                ?>
                            </h3>
                            <?php

                            $target = "_self";
                            if (get_field('external_link', $products[0]->ID)) {
                                $link = get_field('external_link', $products[0]->ID);
                                $target = "_blank";
                            }
                            ?>
                            <a target="<?= $target ?>" class="bg-white hover:opacity-80 rounded-full w-[40px] h-[40px] flex items-center justify-center" href="<?= get_permalink($products[0]->ID); ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.529" height="14.529" viewBox="0 0 14.529 14.529">
                                    <line id="Line_8" data-name="Line 8" y2="13.529" transform="translate(7.621 0.5)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1" />
                                    <line id="Line_9" data-name="Line 9" x2="13.529" transform="translate(0.5 7.621)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1" />
                                </svg>

                            </a>
                        </div>
                    </div>

                    <div class="bg-[#F5F5F5] rounded-2xl flex-grow"></div>
                </div>

            </div>

        <?php endforeach; ?>
    </div>
</section>
<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>