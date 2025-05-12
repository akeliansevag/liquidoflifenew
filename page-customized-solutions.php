<?php get_header(); ?>
<?php
$query = new WP_Query([
    'post_type' => 'solution',
]);
$solutions = $query->posts;
?>
<section>
    <div class="container">
        <h1 class="section-title uppercase mb-10"><?= get_the_title(); ?></h1>
        <div class="flex flex-col gap-20">
            <?php foreach ($solutions as $solution): ?>
                <?php
                $one_column = get_field('one_column', $solution->ID);
                $column_classes = 'grid max-lg:grid-cols-1 lg:grid-cols-2 gap-4';
                $image_classes = 'absolute top-0 left-0 object-cover w-full h-full';
                $image_size = 'featured-large';
                $image_wrap_classes = 'relative min-h-[350px] rounded-[65px] overflow-hidden';
                if ($one_column) {
                    $column_classes = 'grid grid-cols-1 gap-4';
                    $image_classes = 'w-full';
                    $image_size = 'content-full';
                    $image_wrap_classes = 'relative overflow-hidden';
                }
                ?>

                <div>
                    <?php if (!$one_column): ?>
                        <h2 class="lg:pl-10 mb-6 text-3xl font-bold"><?= $solution->post_title; ?></h2>
                    <?php endif; ?>
                    <div class="<?= $column_classes; ?>">
                        <div class="<?= $image_wrap_classes; ?>">
                            <?=
                            get_the_post_thumbnail(
                                $solution->ID,
                                $image_size,
                                [
                                    'class' => $image_classes
                                ]
                            );
                            ?>
                        </div>
                        <div class="bg-secondary rounded-[65px] max-lg:p-8 lg:p-12">
                            <?php if ($one_column): ?>
                                <h2 class="mb-6 text-3xl font-bold"><?= $solution->post_title; ?></h2>
                            <?php endif; ?>
                            <div>
                                <?= $solution->post_content; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>