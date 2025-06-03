<div>
    <div class="container">
        <?php if ($args['title'] || $args['subtitle']): ?>
            <div class="flex max-lg:flex-col justify-between items-center gap-5">
            <?php endif; ?>
            <?php if ($title = $args['title']): ?>
                <h3 class="text-balance lg:text-3xl max-lg:text-xl font-bold"><?= $title ?></h3>
            <?php endif; ?>

            <?php if ($subtitle = $args['subtitle']): ?>
                <h4 class="font-bold text-xl max-lg:text-center text-primary"><?= $subtitle ?></h4>
            <?php endif; ?>
            <?php if ($args['title'] || $args['subtitle']): ?>
            </div>
        <?php endif; ?>

        <div class="flex flex-col gap-3">
            <div class="flex flex-col mt-5">
                <?php if ($items = $args['items']): ?>
                    <?php foreach ($items as $item): ?>
                        <!-- FAQ Item -->
                        <div class="bg-white border-b border-b-[#D8D8D8] overflow-hidden">
                            <button class="faq-question w-full max-lg:pr-3 lg:pr-6 max-lg:py-4 lg:py-5 text-left flex justify-between items-center">
                                <span class="text-lg font-bold"><?= $item['title'] ?></span>
                                <svg class="faq-icon shrink-0 w-5 h-5 text-gray-500 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="faq-answer">
                                <div class="pb-4 pt-2">
                                    <?= $item['description'] ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>

            </div>
        </div>

    </div>

</div>