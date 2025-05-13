<?php get_header(); ?>

<?= get_template_part('/components/smallBanner'); ?>
<section>
    <div class="container">
        <h1 class="section-title"><?= the_title(); ?></h1>
        <div class="mt-5">
            <?= the_content(); ?>
        </div>


        <div class="flex flex-col gap-3 my-10">

            <?php foreach (get_field('items') as $q): ?>
                <!-- FAQ Item -->
                <div class="bg-white border-b border-b-[#D8D8D8] overflow-hidden">
                    <button class="faq-question w-full max-lg:pr-3 lg:pr-6 max-lg:py-4 lg:py-5 text-left flex justify-between items-center">
                        <span class="text-lg font-bold"><?= $q['title'] ?></span>
                        <svg class="faq-icon shrink-0 w-5 h-5 text-gray-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer">
                        <div class="pb-4 pt-2">
                            <?= $q['description'] ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>


    </div>

    </div>

</section>
<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>