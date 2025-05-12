<footer class="bg-secondary pt-16">
    <div class="container">
        <div class="flex max-lg:flex-col max-lg:text-center lg:justify-between gap-6">
            <div class="max-w-[310px] max-lg:mx-auto">
                <a href="<?= home_url() ?>">
                    <img class="max-lg:w-[200px] max-lg:mx-auto" src="<?= get_template_directory_uri() ?>/src/img/logo.webp" alt="Logo" width="282" height="65">
                </a>
                <h3 class="text-2xl mt-10">
                    Let’s reimagine the way
                    we drink water, together.
                </h3>
            </div>
            <div class="flex max-lg:flex-col max-lg:gap-6 lg:gap-14">
                <div>
                    <h3 class="font-extrabold mb-2">COMPANY</h3>
                    <?php
                    wp_nav_menu([
                        'menu' => 'main-menu',
                    ]);
                    ?>
                </div>

                <div>
                    <h3 class="font-extrabold mb-2">EXTRA LINKS</h3>
                    <?php
                    wp_nav_menu([
                        'menu' => 'extra-links',
                    ]);
                    ?>
                </div>

            </div>
        </div>
        <div class="flex max-lg:justify-center lg:justify-end max-lg:mt-6 lg:mt-4">
            <div class="flex gap-2 items-center">
                <a href="" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="38.12" height="37.386" viewBox="0 0 38.12 37.386">
                        <path class="fill-primary" id="Path_207" data-name="Path 207" d="M19.06,0A18.879,18.879,0,0,0,0,18.693,18.879,18.879,0,0,0,19.06,37.386,18.879,18.879,0,0,0,38.12,18.693,18.879,18.879,0,0,0,19.06,0m5.4,11.966H24.2c-.643,0-1.283-.015-1.924.006-.879.031-1.53.36-1.561,1.436-.022.785-.031,2.6-.031,2.6s2.064,0,2.962,0h.711c-.166,1.252-.324,2.455-.487,3.669H20.707v9.166H16.831v-9.18H13.659V16.006h3.19v-.275c0-.734-.016-1.468,0-2.2a9.38,9.38,0,0,1,.116-1.4A4.077,4.077,0,0,1,18.642,9.4a4.9,4.9,0,0,1,2.786-.844c.658-.015,1.317.017,1.974.046.358.017.716.066,1.059.1Z" fill="black" />
                    </svg>
                </a>
                <a href="" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="38.12" height="37.386" viewBox="0 0 38.12 37.386">
                        <path class="fill-primary" id="Path_204" data-name="Path 204" d="M420.381,69.645A74.275,74.275,0,0,0,410.2,69.6a3.466,3.466,0,0,0-3.276,3.05,66.593,66.593,0,0,0,0,10.234,3.348,3.348,0,0,0,2.572,2.864c1.547.424,9,.326,10.663.146a3.472,3.472,0,0,0,3.291-3.063,71.353,71.353,0,0,0,.042-9.958,3.463,3.463,0,0,0-3.117-3.233m-5.2,13.309a5.2,5.2,0,1,1,5.3-5.2,5.252,5.252,0,0,1-5.3,5.2m5.511-9.382a1.218,1.218,0,1,1,1.244-1.215,1.229,1.229,0,0,1-1.244,1.215" transform="translate(-396.129 -59.06)" fill="black" />
                        <path class="fill-primary" id="Path_205" data-name="Path 205" d="M443.777,102.456a3.363,3.363,0,1,0,3.4,3.393,3.4,3.4,0,0,0-3.4-3.393" transform="translate(-424.691 -87.128)" fill="black" />
                        <path class="fill-primary" id="Path_206" data-name="Path 206" d="M354.924,0a18.879,18.879,0,0,0-19.06,18.693,19.064,19.064,0,0,0,38.12,0A18.879,18.879,0,0,0,354.924,0m10.029,24.548a5.205,5.205,0,0,1-4.529,4.055c-1.8.286-9.815.339-11.446-.074a5.174,5.174,0,0,1-4.154-4.423c-.288-1.706-.385-9.658.107-11.383A5.183,5.183,0,0,1,349.4,8.784a76.026,76.026,0,0,1,10.227-.112,5.793,5.793,0,0,1,3.791,1.51,5.337,5.337,0,0,1,1.672,3.461c.165,1.6.331,9.134-.142,10.9" transform="translate(-335.864)" fill="black" />
                    </svg>

                </a>
                <a target="_blank" href="https://wa.me/97143607064">
                    <svg id="Group_461" data-name="Group 461" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="38" height="38.497" viewBox="0 0 38 38.497">
                        <defs>
                            <clipPath id="clip-path">
                                <rect class="fill-primary" id="Rectangle_196" data-name="Rectangle 196" width="38" height="38.497" fill="black" />
                            </clipPath>
                        </defs>
                        <g id="Group_460" data-name="Group 460" clip-path="url(#clip-path)">
                            <path class="fill-primary" id="Path_201" data-name="Path 201" d="M9.846,35.648a18.994,18.994,0,1,0-7.269-7.093L.159,38.5Zm1.009-25.527a2.162,2.162,0,0,1,1.472-.568h.579a1.817,1.817,0,0,1,1.708,1.2L15.8,14.011a.948.948,0,0,1-.149.908l-.936,1.168a1.633,1.633,0,0,0-.254,1.625c1.134,2.853,4.5,4.857,6.267,5.739a1.658,1.658,0,0,0,1.91-.3l1.035-1.035a.953.953,0,0,1,.953-.232l3.139,1a1.821,1.821,0,0,1,1.267,1.734v.8a2.206,2.206,0,0,1-.645,1.557c-3.057,3.018-8.13.8-11.417-1.211A19.11,19.11,0,0,1,11,20.078c-3.717-5.611-1.458-8.755-.142-9.956Z" fill="black" />
                        </g>
                    </svg>

                </a>
                <a target="_blank" href="https://wa.me/97143607064">
                    +97143607064
                </a>
            </div>
        </div>
    </div>
    <hr class="mt-7" />
    <div class="container">
        <div class="py-6 max-lg:text-center">
            <span class="text-[#A0A0A0]">
                Copyrights <?= date('Y') ?>. Liquid of Life
            </span>
        </div>
    </div>
</footer>

</div> <!--wrapper-->
<?php wp_footer(); ?>

</body>

</html>