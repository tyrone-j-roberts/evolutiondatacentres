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
                        The Philippines has a young population who are heavy users of technology. 
                        Their average daily use of social media is over four hours which is 60% higher than the rest of the world. 
                        82% of Filipinos have social media accounts, with a median age of 26.3 and 1.5% population growth annually. 
                        The Philippines has a GDP of 394 billion USD, making it an attractive region for technology investment.
                    </p>
                    <p>&nbsp;</p>
                    <p>
                        <strong>Renewable energy</strong><br/>
                        The Philippines’ energy market is liberalised with generation, distribution, and sales open to private participation, which means users are able to contract directly with renewable energy developers. 
                        Although its energy mix is dominated by coal (47%) and natural gas (22%), it has the 3rd largest geothermal resource in the world, which makes it a very good option for baseload demand. 
                        <br/><br/>
                        Together with a moratorium on new coal plants, there is a national target to increase the share of renewable energy in the primary mix to 50% by 2040, this includes the addition of new renewable capacity of 9.9GW by 2030. These factors are driving the largest renewable energy development in South East Asia.
                    </p>
                    <div class="graph">
                        <strong>Renewable energy mix</strong>
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/philippines-graph-1.png" alt="Renewable Energy Mix" />
                    </div>
                    <p>
                        <strong>Market regulations</strong><br />
                        There is a favourable regulatory climate as a result of laws like 
                        the revisions to the Foreign Investment Act, the Public Service Act, and the 
                        Retail Trade Liberalization Act.
                    </p>
                    <p>
                        <strong>Site Overview</strong><br />
                        The site is located in Gateway Business Park, General Trias, Cavite, the Philippines and occupies an area of around 40,000 sqm. We are working with Megawide Construction Corp, who is a conglomerate with substantial infrastructure and renewable power capabilities in the region. 
                        The IT load is able to support up to 69MW, split into 3 stages with a projected PUE of &lt;1.4.
                    </p>
                </div>
                <div class="location-content__media">

                
                    <div style="width: 85%; margin: 0 auto; display: block;">
                        <?= file_get_contents(get_stylesheet_directory() . "/assets/images/philippines-location.svg"); ?>
                    </div>

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
                        With a GDP of 506 billion USD, Thailand is a dynamic market in Southeast Asia. 
                        The population is very technology focused, with 85% using the internet and averaging over 2.5 hours per day on social media.
                    </p>
                    <p>&nbsp;</p>
                    <p>
                        <strong>Renewable energy</strong><br/>
                        Thailand’s power market is partially liberalised. Generation is open to private companies while distribution, transmission and sales are operated by state owned utilities. The country’s energy mix is dominated by natural gas 66% and coal 20%, biofuels and hydro account for 9% and 3% respectively while solar makes up ~3%.
                        <br/><br/>
                        The government has set a target of 30% renewable energy for power capacity in 2036; there are also targets of 15 GW (now at 3.4GW) of solar  and 3GW (now 1.5GW) of wind; 
                        They also aim to be net zero by 2065 but have not set tangible renewable energy targets.
                    </p>
                    <div class="graph">
                        <strong>Renewable energy mix</strong>
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/thailand-graph-1.png" alt="Renewable Energy Mix" />
                    </div>
                    <p>
                        <strong>Market regulations</strong><br />
                        Thailand imposes stringent requirements on the construction of data centres. 
                        A business planning on building and operating a data centre in Thailand must obtain a 
                        BOI Investment Promotion Certificate and a Telecom License. At 2022 APEC Summit 
                        Thailand made it clear that they are trying to strike a balance between performance 
                        and sustainability, prioritising recovery and growth, while keeping an eye on sustainable 
                        development that will allow the country to thrive
                    </p>
                    <p>
                        <strong>Site Overview</strong><br />
                        The site will be located at Bangan Trad Road, Bangkok and occupies an area of around 20,000 sqm. We are working with one of the largest property and development companies in Thailand. The IT load is able to support up to 34MW, split into 2 stages with a projected PUE of &lt;1.4.
                    </p>
                </div>
                <div class="location-content__media">

                    <div style="width: 75%; margin: 0 auto; display: block;">
                        <?= file_get_contents(get_stylesheet_directory() . "/assets/images/thailand-location.svg"); ?>
                    </div>
                    

                    <div class="image-cycle">
                        <div class="image-cycle__images">
                            <?php for ($i = 1; $i <= 3; $i++): ?>
                            <div class="image-slide">
                                <div class="image">
                                    <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/thailand-slide-image-<?= $i ?>.jpg" alt="Philippines Image <?= $i ?>" />
                                </div>
                            </div>
                            <?php endfor; ?>
                        </div>
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
                        Vietnam has a relatively young population with a median age of 32. 71% of 
                        the population uses the internet, with an average of 2.5 hours per day spent on social media. 
                        The country is one of the fastest-growing digital economies in 
                        Southeast Asia and on track to reach an internet economy worth $57 billion by 2025. 
                        This clearly demonstrates the growing demand for data centre infrastructure in the region.
                    </p>
                    <p>&nbsp;</p>
                    <p>
                        <strong>Renewable energy</strong><br/>
                        Vietnam’s energy market is heavily regulated with transmission, distribution and sales controlled by the state-owned Vietnam Electricity (EVN), although generation is partially liberalised. The energy mix is comprised largely of coal 53% and hydro 26%; followed by natural gas 16% and other renewables 5%; although Vietnam already accounts for the largest solar capacity in Southeast Asia.
                        <br/><br/>
                        The country has a draft Power Development Plan (Draft PDP8) targeting an increase in renewable generation to 32% by 2030, outstripping even coal which is expected to account for 27%
                    </p>
                    <div class="graph">
                        <strong>Renewable energy mix</strong>
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/vietnam-graph-1.png" alt="Renewable Energy Mix" />
                    </div>
                    <p>
                        <strong>Market regulations</strong><br />
                        Vietnam is seeking to reach carbon neutrality by 2050. The country has a favourable regulatory landscape for data centre investment, including a decision in 2020 to approve a National Digital Transformation Programme, a cybersecurity law, and a decree to force onshore online service providers to store Vietnamese users’ information inside the country.
                    </p>
                </div>
                <div class="location-content__media">
                    <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/vietnam-location.svg?t=<?= time() ?>" 
                        style="width: 75%; margin: 0 auto; display: block;"
                        alt="Vietnam" />
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
                        Indonesia has more than 210 million internet users out of a total population of 270 million, and daily social media usage is high at an average of 3.28 hours per day. It also has the highest GDP in Southeast Asia at 1.186 trillion USD, making it an important data centre investment market.
                    </p>
                    <p>&nbsp;</p>
                    <p>
                        <strong>Renewable energy</strong><br/>
                        There has been a clear transition in Indonesia away from coal to green power. Clean energy currently makes up 18% of the country’s production, with hydro 8%, bioenergy 5% and geothermal 5% being the leading forms of alternative energy generation.<br/>
                        The market is partly liberalised; private companies can participate in generation while distribution, transmission, and sales are controlled by  the state owned company PLN.<br/>
                        The government has set a target of 23% renewable energy by 2025 and 31% by 2050. They have set out a 10-year electricity procurement plan (RUPTL.2) where the government targets a 52% share of renewables in new capacity additions (21GW out of total 41GW, mainly from hydro, solar and geothermal).
                    </p>
                    <div class="graph">
                        <strong>Renewable energy mix</strong>
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/indonesia-graph-1.png" alt="Renewable Energy Mix" />
                    </div>
                    <p>
                        <strong>Market regulations</strong><br />
                        The Indonesian government mandates that new data centres must be built and operated using locally-sourced materials and power. In addition data centres serving the financial sector must abide by the banking rules and meet IT compliance standards.
                    </p>
                </div>
                <div class="location-content__media">
                    <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/indonesia-location.svg" 
                        style="width: 100%; margin: 0 auto; display: block;"
                        alt="Philippines Bankok" />

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
