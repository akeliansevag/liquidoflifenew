<?php if (get_field('s5_title')): ?>
    <div>
        <div class="container text-center">
            <h2 class="lg:text-2xl max-lg:text-xl font-bold mb-5 border border-primary rounded-xl text-center p-4 inline-block"><?= $args['title'] ?></h2>
            <?= $args["description"]; ?>

            <?php if ($args['images']): ?>
                <div class="flex max-lg:flex-col gap-5 justify-center items-center mt-14">
                    <?php foreach ($args['images'] as $image): ?>
                        <img src="<?= $image['url'] ?>" class="rounded-2xl" />
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>