<?php get_header(); ?>
<?php
$query = new WP_Query([
    'post_type' => 'product',
    'meta_query' => [
        [
            'key' => 'hide',
            'value' => '0',
            'compare' => '='
        ]
    ]
]);
$products = $query->posts;
?>
<?= get_template_part('/components/banner'); ?>
<section>
    <div class="container">
        <div class="flex flex-col gap-20">
            <?php foreach ($products as $product): ?>
                <div>
                    <h2 class="section-title"><?= $product->post_title ?></h2>
                    <div class="mt-4 lg:max-w-[50%]">
                        <?= $product->post_content ?>
                    </div>
                    <div class="grid lg:grid-cols-2 max-lg:grid-cols-1 gap-5 mt-10">
                        <div class="relative">
                            <?php if (get_field('best_seller', $product->ID)): ?>
                                <div class="rounded-lg absolute top-10 xl:left-10 max-xl:left-1/2 max-xl:-translate-x-1/2 text-white bg-black py-3 px-4 font-bold uppercase">
                                    Best Seller
                                </div>
                            <?php endif; ?>
                            <?=
                            get_the_post_thumbnail(
                                $product->ID,
                                '',
                                [
                                    'class' => 'rounded-2xl'
                                ]
                            );
                            ?>
                        </div>
                        <?php if (get_field("add_on", $product->ID)): ?>
                            <div class="flex flex-col gap-5">
                                <?php foreach (get_field("add_on", $product->ID) as $add): ?>
                                    <div class="bg-[#F9F9FB] overflow-hidden relative max-lg:min-h-[200px] rounded-2xl lg:items-center flex max-lg:flex-col  gap-10 w-full max-lg:p-5 lg:p-10 lg:h-full add-on-content">
                                        <?php if ($add['info']): ?>
                                            <div>
                                                <div><?= $add['info'] ?></div>
                                                <?php if ($add['price']): ?>
                                                    <p class="text-primary font-bold"><?= $add['price'] ?></p>
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($add['info'] && $add['image']): ?>
                                            <div>
                                                <img class="mb-3" src="<?= $add['image']['sizes']['content-small'] ?>" alt="add on image">
                                            </div>
                                        <?php endif; ?>
                                        <?php if (!$add['info'] && $add['image']): ?>
                                            <img class="absolute top-0 left-0 w-full h-full object-cover" src="<?= $add['image']['url'] ?>" alt="add on image">
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>