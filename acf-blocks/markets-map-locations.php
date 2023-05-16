<?php

/**
 * Block Template.
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$block_slug = "markets-map-locations";
include(locate_template('/acf-blocks/common/block_header.php')); ?>

<div class="markets-map-locations">
    
    <div class="markets-map-locations__map">
        <div class="container">
            <h3>Target Regions and Market Drivers</h3>
            <div class="map-wrapper">
                <?php include get_template_directory() . '/template-parts/map-locations-overview.php' ?>
                <?php include get_template_directory() . '/template-parts/evo-map.svg.php' ?>
            </div>
        </div>
    </div>

    <!-- Philippines -->
    <div class="markets-map-locations__location" id="LocationSection_Philippines">
        <div class="container">
            <div class="location-content">
                <div class="location-content__text">
                    <h3>Philippines</h3>
                    <p>
                        <strong>Population dynamics</strong><br/>
                        The Philippines has a young population who are heavy users of technology. Their
                        average daily use of social media is over four hours which is 60% higher than the rest of
                        the world. 82% of Filipinos have social media accounts, with a median age of 26.3 and
                        1.5% population growth annually. The Philippines has a GDP of 394 billion USD, making it
                        an attractive region for technology investment.
                    </p>
                    <p>
                        <strong>Renewable energy</strong><br/>
                        The energy mix in the Philippines is currently made up of 23% clean energy, including a
                        large natural geothermal energy resource. The government has recently announced a
                        moratorium on coal power generation and has set a target of 100% green electricity by
                        2040.
                    </p>
                    <p>
                        <strong>Geographic challenges</strong><br />
                        The Philippines is affected by an average of 20 typhoons per year, and is exposed to a
                        risk of flooding. It is susceptible to earthquakes and volcanic eruptions.
                    </p>
                    <p>
                        <strong>Market regulations</strong><br />
                        There is a favourable regulatory climate as a result of laws like the revisions to the
                        Foreign Investment Act, the Public Service Act, and the Retail Trade Liberalization Act.
                    </p>

                    <div class="image-cycle">
                        <div class="image-cycle__images">
                            <?php for ($i = 1; $i <= 3; $i++): ?>
                            <div class="image-slide">
                                <div class="image">
                                    <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/philippines-slide-image-<?= $i ?>.jpg" alt="Philippines Image <?= $i ?>" />
                                </div>
                            </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
                <div class="location-content__media">
                    <div style="width: 85%; margin: 0 auto; display: block;">
                        <?= file_get_contents(get_stylesheet_directory_uri() . "/assets/images/philippines-location.svg"); ?>
                    </div>
                    
                    <div class="pie-chart">
                        <h4>Renewable Energy Mix</h4>
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/philippines-pie-1.png" alt="Renewable Energy Mix" />
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /Philippines -->

    <!-- Thailand -->
    <div class="markets-map-locations__location markets-map-locations__location--alt" id="LocationSection_Thailand">
        <div class="container">
            <div class="location-content">
                <div class="location-content__text">
                    <h3>Thailand</h3>
                    <p>
                        <strong>Population dynamics</strong><br/>
                        With a GDP of 506 billion USD, Thailand is a dynamic market in Southeast Asia. The
                        population is very technology focused, with 85% using the internet and averaging over 2.5
                        hours per day on social media.
                    </p>
                    <p>
                        <strong>Renewable energy</strong><br/>
                        In 2022, 15% of Thailand’s energy production was comprised of clean energy. The main
                        source of renewable energy produced is bioenergy, with an increase in wind and solar in
                        recent years.
                    </p>
                    <p>
                        <strong>Geographic challenges</strong><br />
                        The main geographic challenges faced in Thailand are risk of flooding, landslides, fires and
                        wind damage.
                    </p>
                    <p>
                        <strong>Market regulations</strong><br />
                            Thailand imposes stringent requirements on the construction of data centres. A business
                            planning on building and operating a data centre in Thailand must obtain a BOI Investment
                            Promotion Certificate and a Telecom License. At 2022 APEC Summit Thailand made it clear
                            that they are trying to strike a balance between performance and sustainability, prioritising
                            recovery and growth, while keeping an eye on sustainable development that will allow the
                            country to thrive
                    </p>
                </div>
                <div class="location-content__media">

                    <div style="width: 85%; margin: 0 auto; display: block;">
                        <?= file_get_contents(get_stylesheet_directory_uri() . "/assets/images/thailand-location.svg"); ?>
                    </div>
                    

                    <div class="pie-chart">
                        <h4>Renewable Energy Mix</h4>
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/thailand-pie-1.png" alt="Renewable Energy Mix" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Thailand -->

    <!-- Vietnam -->
    <div class="markets-map-locations__location" id="LocationSection_Vietnam">
        <div class="container">
            <div class="location-content">
                <div class="location-content__text">
                    <h3>Vietnam</h3>
                    <p>
                        <strong>Population dynamics</strong><br/>
                        Vietnam has a relatively young population with a median age of 32. 71% of the population
                        uses the internet, with an average of 2.5 hours per day spent on social media. The
                        country is one of the fastest-growing digital economies in Southeast Asia and on track to
                        reach an internet economy worth $57 billion by 2025. This clearly demonstrates the
                        growing demand for data centre infrastructure in the region.
                    </p>
                    <p>
                        <strong>Renewable energy</strong><br/>
                        Energy production in Vietnam is currently 51% renewable. The main green energy source in
                        Vietnam is hydro, however, there is an aim to increase solar capabilities to help reduce
                        reliance on generation from coal.
                    </p>
                    <p>
                        <strong>Geographic challenges</strong><br />
                        The biggest geographical challenges facing Vietnam are the exposure to
                        hydro-meteorological hazards such as severe storms, typhoons and floods. It is vulnerable
                        to earthquakes and tsunamis.
                    </p>
                    <p>
                        <strong>Market regulations</strong><br />
                        Vietnam is seeking to reach carbon neutrality by 2050. The country has a favourable
                        regulatory landscape for data centre investment, including a decision in 2020 to approve a
                        National Digital Transformation Programme, a cybersecurity law, and a decree to force
                        onshore online service providers to store Vietnamese users’ information inside the country.
                    </p>
                </div>
                <div class="location-content__media">
                    <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/vietnam-location.svg" 
                        style="width: 75%; margin: 0 auto; display: block;"
                        alt="Vietnam" />
                    <div class="pie-chart">
                        <h4>Renewable Energy Mix</h4>
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/vietnam-pie-1.png" 
                            style="width: 75%; margin: 0 auto; display: block;"
                              alt="Renewable Energy Mix" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Vietnam -->

    <div class="markets-map-locations__location markets-map-locations__location--alt" id="LocationSection_Indonesia">
        <div class="container">
            <div class="location-content">
                <div class="location-content__text">
                    <h3>Indonesia</h3>
                    <p>
                        <strong>Population dynamics</strong><br/>
                        Indonesia has more than 210 million internet users out of a total population of 270 million,
                        and daily social media usage is high at an average of 3.28 hours per day. It also has the
                        highest GDP in Southeast Asia at 1.186 trillion USD, making it an important data centre
                        investment market.
                    </p>
                    <p>
                        <strong>Renewable energy</strong><br/>
                        There has been a clear transition in Indonesia to shift away from coal to green power. Clean
                        energy currently makes up 18% of the country’s energy production, with hydro, geothermal,
                        and bioenergy being the leading forms of alternative energy generation.
                    </p>
                    <p>
                        <strong>Geographic challenges</strong><br />
                        Indonesia faces a variety of geographic challenges that include landslides, tsunamis, fires,
                        floods and earthquakes.
                    </p>
                    <p>
                        <strong>Market regulations</strong><br />
                        The Indonesian government mandates that new data centres must be built and operated
                        using locally-sourced materials and power. In addition data centres serving the financial
                        sector must abide by the banking rules and meet IT compliance standards.
                    </p>
                </div>
                <div class="location-content__media">
                    <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/indonesia-location.svg" 
                        style="width: 100%; margin: 0 auto; display: block;"
                        alt="Philippines Bankok" />

                    <div class="pie-chart">
                        <h4>Renewable Energy Mix</h4>
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/indonesia-pie-1.png" alt="Renewable Energy Mix" />
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
    (function() {
        var mapWrapperEl = document.querySelector('.map-wrapper');

        if (!mapWrapperEl) return;

        var mapLocations = mapWrapperEl.querySelectorAll('.map-location');

        var activeLocation = null;

        for (let i = 0; i < mapLocations.length; i++) {
            mapLocations[i].addEventListener('mouseenter', function(e) {
                var locationName = e.currentTarget.dataset.location;
                var locationOverviewElement = document.getElementById('LocationOverview_' + locationName);
                locationOverviewElement.classList.add('active')
                mapWrapperEl.dataset.locationTooltipText = locationName;
            });

            mapLocations[i].addEventListener('click', function(e) {
                var locationName = e.currentTarget.dataset.location;
                var locationElement = document.getElementById('LocationSection_' + locationName);
                
                if (!locationElement) return;
                
                var offset = 10;

                var solidHeader = document.querySelector('header.solid-header');
                
                if (solidHeader) {
                    offset = solidHeader.clientHeight;
                }

                window.scrollTo({top: (locationElement.getBoundingClientRect().top + window.pageYOffset) - offset , behavior: 'smooth'});
            });

            mapLocations[i].addEventListener('mouseleave', function(e) {
                var locationName = e.currentTarget.dataset.location;
                var locationOverviewElement = document.getElementById('LocationOverview_' + locationName);
                locationOverviewElement.classList.remove('active')
            });
        }

    }());
</script>

<script>

    jQuery(document).ready(function($){
        $('.image-cycle__images').slick({
            slidesToShow: 1,
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
