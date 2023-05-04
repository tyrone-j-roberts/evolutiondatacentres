<?php

/**
 * Block Template.
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$block_slug = "homepage-main-section";
include(locate_template('/acf-blocks/common/block_header.php')); ?>

<div class="homepage-main-section">
    <span class="white-top"></span>
    <div class="container">
        <div class="homepage-main-section__slider-wrapper clearfix">
            <div class="homepage-main-section__slider">
                <div class="images">
                    <?php for ($i = 1; $i <= 5; $i++): ?>
                    <div class="image-slide">
                        <div class="image">
                            <img src="https://evolutiondatacentres.com/wp-content/uploads/2023/02/slider<?= $i ?>.jpg" alt="Slide <?= $i ?>" />
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
                <div class="text">
                    <p>
                        The next generation Pan-Asian sustainable data centre platform. 
                    </p>
                </div>
            </div>
        </div>
        <div class="homepage-main-section__content">
            <h3>A different approach</h3>
            <div class="columns">
                <div class="column-1">
                    <p>
                        Evolution is designed from the ground up to be a disruptive data centre developer. By directly addressing the needs of hyperscale and wholesale clients in developing markets, we deliver scalable, sustainable and cost effective infrastructure in regions with explosive digital growth.
                    </p>
                    <p>
                        We always work with local partners, who provide on the ground support and knowledge to ensure a great outcome for our clients
                    </p>
                    <a class="button-link" href="/our-approach">Learn more</a>
                </div>
                <div class="column-2">
                    <div class="icon-text-rows">
                        
                        <div class="icon-text-row">
                            <div class="icon">
                                <img src="<?= get_stylesheet_directory_uri(); ?>/assets/images/Leadership.svg" />
                            </div>
                            <div class="text">
                                <h4>Leadership</h4>
                                <p>
                                    Our team brings a unique blend of experience of data centre financing, development and operations for hyperscale clients.
                                </p>
                            </div>
                        </div>

                        <div class="icon-text-row">
                            <div class="icon">
                                <img src="<?= get_stylesheet_directory_uri(); ?>/assets/images/Focus.svg" alt="Focus Icon" />
                            </div>
                            <div class="text">
                                <h4>Focus</h4>
                                <p>
                                    We are a new regional specialist with an innovative, agile approach to sourcing, building and operating data centres in emerging Asian economies.
                                </p>
                            </div>
                        </div>

                        <div class="icon-text-row">
                            <div class="icon">
                                <img src="<?= get_stylesheet_directory_uri(); ?>/assets/images/evolution-emblem.svg" alt="Evolution Icon" />
                            </div>
                            <div class="text">
                                <h4>Vision</h4>
                                <p>
                                    To become the next-generation leading pan-Asian data centre platform, delivering digital growth, reliably and sustainably, into high potential markets.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <span class="white-bottom"></span>
</div>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>

    jQuery(document).ready(function($){
        $('.homepage-main-section__slider .images').slick({
            slidesToShow: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            nextArrow: `
                <button type="button" class="slick-next">
                    <svg width="100%" height="100%" viewBox="0 0 241 234" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;">
                        <g transform="matrix(5.55556,0,0,5.55556,123.932,0)">
                            <path d="M0,42C11.598,42 21,32.598 21,21C21,9.402 11.598,0 0,0C-11.598,0 -21,9.402 -21,21C-21,32.598 -11.598,42 0,42" style="fill:white;fill-rule:nonzero;"/>
                        </g>
                        <g transform="matrix(5.55556,0,0,5.55556,57.2654,116.667)">
                            <path d="M0,0L20.328,0" style="fill:none;fill-rule:nonzero;stroke:rgb(101,201,154);stroke-width:5px;"/>
                        </g>
                        <g transform="matrix(5.55556,0,0,5.55556,124.049,159.574)">
                            <path d="M0,-15.447L8.307,-7.723L0,0" style="fill:none;fill-rule:nonzero;stroke:rgb(101,201,154);stroke-width:5px;"/>
                        </g>
                    </svg>
                </button>
            `,
            prevArrow: `
                <button type="button" class="slick-prev">
                    <svg width="100%" height="100%" viewBox="0 0 241 234" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;">
                        <g transform="matrix(5.55556,0,0,5.55556,116.667,0)">
                            <path d="M0,42C11.598,42 21,32.598 21,21C21,9.402 11.598,0 0,0C-11.598,0 -21,9.402 -21,21C-21,32.598 -11.598,42 0,42" style="fill:white;fill-rule:nonzero;"/>
                        </g>
                        <g transform="matrix(-5.55556,0,0,5.55556,70.4,116.667)">
                            <path d="M-20.328,0L0,0" style="fill:none;fill-rule:nonzero;stroke:rgb(101,201,154);stroke-width:5px;"/>
                        </g>
                        <g transform="matrix(5.55556,0,0,5.55556,116.55,73.7589)">
                            <path d="M0,15.447L-8.307,7.723L0,0" style="fill:none;fill-rule:nonzero;stroke:rgb(101,201,154);stroke-width:5px;"/>
                        </g>
                    </svg>
                </button>
            `
        });
    });

</script>

<?php include(locate_template('/acf-blocks/common/block_footer.php'));
