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
        <div class="homepage-main-section__slider clearfix">
            <div class="cycle-slideshow-outer">
                <button class="slider-prev" data-cycle-cmd="prev" data-cycle-context="#hompage-main-cycle-<?= $block['id'] ?>"></button>
                <div id="hompage-main-cycle-<?= $block['id'] ?>" class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-speed="500" data-cycle-pause-on-hover="true" data-cycle-timeout="5000" data-cycle-slides="section">

                        <section>
                        
                            <div class="homepage-main-section__slide">
                                <div class="image">
                                    <img src="https://placehold.co/1150x990.png" alt="Placeholder" />
                                </div>
                                <div class="text">
                                    <p>
                                        The next generation Pan-Asian sustainable data centre platform. 
                                    </p>
                                </div>
                            </div>

                        </section>
                        <section>
                            <div class="homepage-main-section__slide">
                                <div class="image">
                                    <img src="https://placehold.co/1150x990.png" alt="Placeholder" />
                                </div>
                                <div class="text">
                                    <p>
                                       Lorem ipsum dolor sit amet consectur dolec in
                                    </p>
                                </div>
                            </div>
                        </section>
                    
                </div>
                <button class="slider-next" data-cycle-cmd="next" data-cycle-context="#hompage-main-cycle-<?= $block['id'] ?>"></button>
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
                    <a class="button-link" href="#test">Learn more</a>
                </div>
                <div class="column-2">
                    <div class="icon-text-rows">
                        
                        <div class="icon-text-row">
                            <div class="icon">
                                <img src="" />
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
                                <img src="" />
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
                                <img src="" />
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

<?php include(locate_template('/acf-blocks/common/block_footer.php'));
