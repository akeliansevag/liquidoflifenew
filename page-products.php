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
<section>
    <div class="container">
        <h1 class="section-title uppercase mb-10"><?= get_the_title(); ?></h1>
        <div class="flex flex-col gap-20">
            <?php foreach ($products as $product): ?>
                <div>
                    <div class="grid max-lg:grid-cols-1 lg:grid-cols-2 gap-4">
                        <div class="relative min-h-[350px] rounded-[65px] overflow-hidden">
                            <?=
                            get_the_post_thumbnail(
                                $product->ID,
                                'featured-medium',
                                [
                                    'class' => 'absolute top-0 left-0 object-cover w-full h-full'
                                ]
                            );
                            ?>
                        </div>
                        <div class="bg-secondary rounded-[65px] max-lg:p-8 lg:p-12">
                            <h2 class="mb-3 text-2xl font-bold"><?= $product->post_title; ?></h2>
                            <div>
                                <?= $product->post_content; ?>
                            </div>
                        </div>
                    </div>

                    <?php if (get_field('additional_info', $product->ID) || get_field('add_on', $product->ID)): ?>
                        <div class="flex gap-4 max-lg:flex-col mt-4">
                            <?php if (get_field('additional_info', $product->ID)): ?>
                                <div class="bg-secondary rounded-[65px] max-lg:p-8 lg:p-12 lg:w-1/3">
                                    <?= get_field('additional_info', $product->ID); ?>
                                </div>
                            <?php endif; ?>

                            <?php if (get_field('add_on', $product->ID)): ?>
                                <div class="bg-secondary rounded-[65px] max-lg:p-8 lg:p-12 flex max-lg:flex-col max-lg:gap-8 lg:gap-24 lg:w-2/3">
                                    <h4 class="font-bold">Add On</h4>
                                    <?php $add_ons = get_field("add_on", $product->ID); ?>
                                    <?php foreach ($add_ons as $addon): ?>
                                        <div>
                                            <img class="mb-3" src="<?= $addon['image']['sizes']['content-small'] ?>" alt="add on image">
                                            <?= $addon['info']; ?>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>