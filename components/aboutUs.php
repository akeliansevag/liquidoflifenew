<section id="about-us">
    <div class="container">
        <div class="flex flex-col gap-5">
            <div>
                <h2 class='section-title'>ABOUT US</h2>
            </div>
            <div class="lg:w-2/3 lg:text-xl">
                <?= get_field('about_us_description'); ?>

                <div class="flex max-lg:flex-col max-lg:gap-10 lg:gap-12 mt-10">
                    <?php foreach (get_field('about_us_numbers') as $number): ?>
                        <div class="flex items-center gap-5">
                            <div class=" bg-gray-200 rounded-xl shadow-lg w-[60px] h-[60px] flex items-center justify-center aspect-square about-us-icon">
                                <?= $number['icon'] ?>
                            </div>
                            <div>
                                <h3 class="font-bold text-primary text-3xl"><?= $number['text']; ?></h3>
                                <h4><?= $number['description']; ?></h4>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>