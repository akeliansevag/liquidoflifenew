<?php get_header(); ?>
<?= get_template_part('/components/smallBanner'); ?>
<section>
    <div class="container">
        <h1 class="section-title"><?= get_the_title(); ?></h1>
        <div class="mt-10">
            <?= the_content(); ?>
        </div>
    </div>

</section>
<?php get_footer(); ?>