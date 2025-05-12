<?php
$certs = [
    'ansi_logo.svg',
    'british_logo.svg',
    'ce_logo.svg',
    'glass_logo.svg',
    'nsf_logo.svg',
    'riba_logo.svg',
    'ul_logo.svg',
    'wras_logo.svg',
];
?>
<section>
    <div class="container">
        <h2 class="section-title uppercase text-center">Certifications & Accreditations</h2>
        <div class="mt-12 grid grid-cols-4 gap-10 overflow-x-auto max-w-[950px] mx-auto">
            <?php foreach ($certs as $cert): ?>
                <div class="flex items-center justify-center">
                    <img src="<?= get_template_directory_uri() ?>/src/img/certifications/<?= $cert ?>" alt="Certication">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>