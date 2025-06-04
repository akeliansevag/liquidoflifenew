<div class="container">
    <div class="w-full rounded-xl bg-primary text-white py-10 px-10 max-lg:text-center">
        <div class="flex max-lg:flex-col gap-5 justify-between items-center">
            <div>
                <?php if ($args['title']): ?>
                    <h3 class="font-bold"><?= $args['title'] ?></h3>
                <?php endif; ?>
                <?php if ($args['description']): ?>
                    <h3><?= $args['description'] ?></h3>
                <?php endif; ?>
            </div>
            <div>
                <a class="bg-white rounded-lg px-3 py-3 font-bold text-primary text-center whitespace-nowrap max-lg:text-sm" href="<?= $args['button']['url'] ?>" target="<?= $args['button']['target'] ?>"><?= $args['button']['title'] ?></a>
            </div>
        </div>

    </div>
</div>