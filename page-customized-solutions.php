<?php get_header(); ?>
<?php
$query = new WP_Query([
    'post_type' => 'solution',
]);
$solutions = $query->posts;
?>
<?= get_template_part('/components/banner'); ?>
<section>
    <div class="container">
        <div class="columns-1 md:columns-2 gap-4 space-y-4">
            <?php foreach ($solutions as $key => $solution): ?>
                <div class="relative">
                    <div class="overlay rounded-2xl"></div>
                    <?=
                    get_the_post_thumbnail(
                        $solution->ID,
                        '',
                        [
                            'class' => 'rounded-2xl'
                        ]
                    );
                    ?>
                    <div class="absolute z-10 bottom-6 w-full px-6 flex max-lg:flex-col items-center justify-between">
                        <h4 class="lg:w-2/3 max-lg:text-center max-lg:mb-4 font-bold text-white text-3xl"><?= $solution->post_title ?></h4>
                        <div class="lg:w-1/3 flex justify-end">
                            <div data-target-id="solution-<?= $solution->ID ?>" class="solution-open-popup bg-white hover:opacity-80 rounded-full cursor-pointer w-[40px] h-[40px] flex items-center justify-center" href="<?= $link ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.529" height="14.529" viewBox="0 0 14.529 14.529">
                                    <line id="Line_8" data-name="Line 8" y2="13.529" transform="translate(7.621 0.5)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1" />
                                    <line id="Line_9" data-name="Line 9" x2="13.529" transform="translate(0.5 7.621)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1" />
                                </svg>

                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<div id="popup">
    <div class="popup-overlay"></div>
    <div class="popup-box">
        <div id="popup-close">
            <svg class="w-[12px]" xmlns="http://www.w3.org/2000/svg" width="19.008" height="19.008" viewBox="0 0 19.008 19.008">
                <g id="Group_563" data-name="Group 563" transform="translate(1.414 1.414)">
                    <line id="Line_12" data-name="Line 12" x2="16.18" y2="16.18" transform="translate(0 0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2" />
                    <line id="Line_13" data-name="Line 13" x1="16.18" y2="16.18" transform="translate(0 0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2" />
                </g>
            </svg>
        </div>


        <div class="popup-content">
            <?php foreach ($solutions as $sol): ?>
                <div id="solution-<?= $sol->ID ?>" class="hidden solution-popup-content">
                    <h4 class="text-xl font-bold mb-5"><?= $sol->post_title ?></h4>
                    <?= $sol->post_content; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>