<?php if (get_field('banner_image')): ?>
    <?php $image = get_field('banner_image'); ?>
    <div class="relative max-lg:min-h-[50vh] max-lg:pt-[100px] max-lg:pb-10 lg:min-h-[100vh] w-full flex items-center">
        <div class="overlay"></div>
        <img class="-z-10 absolute object-cover top-0 left-0 w-full h-full" src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" />
        <div class="container">
            <div class="bg-primary/90 p-6 rounded-xl lg:w-1/2 max-lg:w-full text-white flex flex-col gap-3">
                <h1 class="text-balance lg:text-4xl max-lg:text-xl font-bold"><?= get_field('banner_title') ? get_field('banner_title') : the_title(); ?></h1>
                <?php if ($subtitle = get_field('banner_subtitle')): ?>
                    <h2 class="font-bold"><?= $subtitle ?></h2>
                <?php endif; ?>
                <?php if ($description = get_field('banner_description')): ?>
                    <div><?= $description ?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>