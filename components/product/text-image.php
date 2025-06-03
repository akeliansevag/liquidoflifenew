    <div>
        <div class="container">
            <div class="flex <?= $args['reverse'] ? 'flex-row-reverse' : 'flex-row' ?> max-lg:flex-col gap-10 items-center justify-between">
                <div class="lg:w-1/2 flex flex-col gap-3">
                    <?php if ($args['title']): ?>
                        <h3 class="max-lg:text-2xl lg:text-3xl font-bold"><?= $args['title'] ?></h3>
                    <?php endif; ?>
                    <?php if ($args['subtitle']): ?>
                        <h4 class="font-bold text-primary"><?= $args['subtitle']; ?></h4>
                    <?php endif; ?>
                    <?php if ($args['description']): ?>
                        <div class="text-image-description">
                            <?= $args['description'] ?>
                        </div>

                    <?php endif; ?>
                </div>
                <div class="lg:w-1/2">
                    <?php $image = $args['image'] ?>
                    <img class="rounded-xl" src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" />
                </div>
            </div>

        </div>
    </div>