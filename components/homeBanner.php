<?php
$images = [
    0 => get_template_directory_uri() . '/src/img/home-banner-1.webp',
    1 => get_template_directory_uri() . '/src/img/home-banner-2.webp',
    2 => get_template_directory_uri() . '/src/img/home-banner-3.webp'
]
?>

<div class="container">
    <!-- Slider main container -->
    <div class="rounded-3xl swiper max-sm:aspect-square sm:aspect-[16/7]" id="home-banner">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <?php foreach ($images as $image): ?>
                <div class="swiper-slide">
                    <div class="overlay"></div>
                    <img class="absolute object-cover top-0 left-0 w-full h-full" src="<?= $image ?>" alt="Slide Image">
                </div>
            <?php endforeach; ?>
        </div>
        <div class="banner-swiper-pagination"></div>
    </div>

</div>