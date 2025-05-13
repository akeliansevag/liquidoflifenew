<?php if (get_field('banner_image')): ?>
    <?php $image = get_field('banner_image'); ?>
    <div class="relative max-lg:min-h-[50vh] lg:min-h-[100vh] w-full flex items-center">
        <div class="overlay"></div>
        <img class="-z-10 absolute object-cover top-0 left-0 w-full h-full" src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" />
        <?php if (get_field('banner_title')): ?>
            <div class="container">
                <h1 class="font-bold max-lg:text-3xl lg:text-7xl <?= get_field('white_font') ? 'text-white' : 'text-black' ?>"><?= nl2br(get_field('banner_title')) ?></h1>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>