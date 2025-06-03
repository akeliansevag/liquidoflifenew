<div id="form-popup">
    <div class="form-popup-overlay"></div>
    <div class="form-popup-box">
        <div class="z-10" id="form-popup-close">
            <svg class="w-[12px]" xmlns="http://www.w3.org/2000/svg" width="19.008" height="19.008" viewBox="0 0 19.008 19.008">
                <g id="Group_563" data-name="Group 563" transform="translate(1.414 1.414)">
                    <line id="Line_12" data-name="Line 12" x2="16.18" y2="16.18" transform="translate(0 0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2" />
                    <line id="Line_13" data-name="Line 13" x1="16.18" y2="16.18" transform="translate(0 0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2" />
                </g>
            </svg>
        </div>


        <div class="form-popup-content">
            <div class="flex max-lg:flex-col">
                <div class="lg:p-20 lg:pb-7 max-lg:py-14 max-lg:px-5 lg:w-2/3">
                    <h2 class="font-bold mb-5 max-lg:text-xl lg:text-2xl">Got a question or ready to make the switch to filtered water? Drop us a message – we’re here to help!</h2>
                    <div class="flex gap-4 mb-5 max-lg:flex-col">
                        <div id="form-residential" class="w-full active lol-button">
                            Residential
                        </div>
                        <div id="form-corporate" class="w-full lol-button">
                            Corporate
                        </div>
                    </div>
                    <div>
                        <div id="popup-residential-form">
                            <?= do_shortcode('[contact-form-7 id="5ab76dc" title="Popup residential" html_class="contact-form"]'); ?>
                        </div>
                        <div id="popup-corporate-form" class="hidden">
                            <?= do_shortcode('[contact-form-7 id="8f93817" title="Popup corporate" html_class="contact-form"]'); ?>
                        </div>

                    </div>
                </div>
                <div class="max-lg:hidden relative lg:w-1/3">
                    <img class="absolute top-0 right-0 h-full w-full object-cover" src="<?= get_template_directory_uri() ?>/src/img/girl-drinking-water.webp" alt="Girl Drinking Water" />
                </div>
            </div>


        </div>
    </div>
</div>