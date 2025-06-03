<?php get_header(); ?>

<?= get_template_part('components/product/banner'); ?>
<div class="flex flex-col max-lg:gap-10 lg:gap-16 lg:py-16 max-lg:py-10">

    <?php if (get_field("s1_title")): ?>
        <?=
        get_template_part('components/product/text-image', null, [
            'title' => get_field('s1_title'),
            'subtitle' => get_field('s1_subtitle'),
            'description' => get_field('s1_description'),
            'image' => get_field('s1_image'),
            'reverse' => false
        ]);
        ?>
    <?php endif; ?>

    <?php if (get_field('s2_items')): ?>

        <?= get_template_part('components/product/accordion', null, ['title' => get_field('s2_title'), 'subtitle' => get_field('s2_subtitle'), 'subsubtitle' => get_field('s2_subtitle_2'), 'items' => get_field('s2_items')]); ?>
    <?php endif; ?>


    <?php if (get_field('s3_cta')): ?>
        <?= get_template_part('components/product/cta', null, ['title' => get_field('s3_title'), 'description' => get_field('s3_description'), 'button' => get_field('s3_cta')]); ?>
    <?php endif; ?>

    <?php if (get_field('s4_image')): ?>
        <?=
        get_template_part('components/product/text-image', null, [
            'title' => get_field('s4_title'),
            'subtitle' => get_field('s4_subtitle'),
            'description' => get_field('s4_description'),
            'image' => get_field('s4_image'),
            'reverse' => true
        ]);
        ?>
    <?php endif; ?>


    <?php if (get_field('s5_title')): ?>
        <?=
        get_template_part('components/product/title-text', null, [
            'title' => get_field('s5_title'),
            'description' => get_field('s5_description'),
            'images' => get_field('s5_images'),
        ]);
        ?>
    <?php endif; ?>


    <?php if (get_field("s6_items")): ?>
        <?= get_template_part('components/product/accordion', null, ['title' => '', 'subtitle' => get_field('s6_subtitle'), 'items' => get_field('s6_items')]); ?>
    <?php endif; ?>


    <?php if (get_field('s7_cta')): ?>
        <?= get_template_part('components/product/cta', null, ['title' => get_field('s7_title'), 'description' => '', 'button' => get_field('s7_cta')]); ?>
    <?php endif; ?>

    <?php if (get_field('s8_image')): ?>
        <?= get_template_part('components/product/image', null, ['image' => get_field('s8_image')]); ?>
    <?php endif; ?>

</div>

<?php get_footer(); ?>