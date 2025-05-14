<?php get_header(); ?>
<?php
$faq_categories = get_terms([
    'taxonomy'   => 'faq_category',
    'hide_empty' => true, // Set to false if you want to include empty categories
]);
?>
<?= get_template_part('/components/smallBanner'); ?>
<section>
    <div class="container">
        <h1 class="section-title"><?= the_title(); ?></h1>
        <div class="flex flex-col gap-3 my-10">
            <?php foreach ($faq_categories as $c): ?>
                <div class="max-lg:p-4 lg:p-8" id="<?= $c->slug ?>">
                    <h2 class="text-3xl font-bold"><?= $c->name ?></h2>
                    <div class="flex flex-col mt-5">
                        <?php
                        $faq_query = new WP_Query([
                            'post_type'      => 'faq',        // Custom post type
                            'posts_per_page' => -1,           // Retrieve all matching posts
                            'tax_query'      => [
                                [
                                    'taxonomy' => 'faq_category', // Taxonomy name
                                    'field'    => 'term_id',         // Can be 'slug', 'name', or 'term_id'
                                    'terms'    => $c->term_id,    // The term you want to filter by
                                ],
                            ],
                        ]);
                        $questions = $faq_query->posts;
                        ?>
                        <?php foreach ($questions as $q): ?>
                            <!-- FAQ Item -->
                            <div class="bg-white border-b border-b-[#D8D8D8] overflow-hidden">
                                <button class="faq-question w-full max-lg:pr-3 lg:pr-6 max-lg:py-4 lg:py-5 text-left flex justify-between items-center">
                                    <span class="text-lg font-bold"><?= $q->post_title ?></span>
                                    <svg class="faq-icon shrink-0 w-5 h-5 text-gray-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="faq-answer">
                                    <div class="pb-4 pt-2">
                                        <?= $q->post_content ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>



                    </div>
                </div>
                <?php wp_reset_postdata(); ?>
            <?php endforeach; ?>

        </div>

    </div>

</section>
<?php get_footer(); ?>