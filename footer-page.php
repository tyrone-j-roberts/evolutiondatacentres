<?php
// Get Man Nav
$menu_left_args = array(
    'theme_location'  => 'menu_footer_left',
    'container'       => '',
    'menu_class'      => '',
    'echo'            => true,
    'items_wrap'      => '<ul id="%1$s" >%3$s</ul>',
    'add_li_class'  => '',
    'add_a_class' => '',
    'item_spacing'    => 'preserve',
    'depth'           => 0,
);

// Get Man Nav
$menu_right_args = array(

    'theme_location'  => 'menu_footer_right',
    'container'       => '',
    'menu_class'      => '',
    'echo'            => true,
    'items_wrap'      => '<ul id="%1$s" >%3$s</ul>',
    'add_li_class'  => '',
    'add_a_class' => '',
    'item_spacing'    => 'preserve',
    'depth'           => 0,
);



?>

<div class="gridContainerFooter footerBgnd clearfix footer footer-page">
    <div class="centreWrapper">

        <div class="blockLeftFooter2">
            <div class="footerLogo"><img src="/wp-content/themes/evolution-data-centres/assets/images/evolution_logo.svg" alt="Evolution"></div>
        </div>

        <div class="blockRightFooter2">

            <div class="subBlockFooter1">
                <?php wp_nav_menu($menu_left_args) ?>
            </div>

            <div class="subBlockFooter2">
                <?php wp_nav_menu($menu_right_args) ?>
            </div>

        </div>

        <div class="blockFullFooter2">
            <div class="footerFrame2">
                <table width="28" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="28" align="left" valign="middle"><a href="https://www.linkedin.com/company/evolution-data-centres/about/" class="footerLinkIcon" target="_blank"><img src="/wp-content/themes/evolution-data-centres/assets/images/linkedin.svg" alt="Evolution"></a></td>
                    </tr>
                </table>
            </div>
            <div class="footerFrame3">
                <a href="mailto:info@evolutiondatacentres.com" class="footerLinkSmall2">info@evolutiondatacentres.com</a>&nbsp;&nbsp; |&nbsp;&nbsp;<a href="privacy-policy.php" class="footerLinkSmall2">Privacy Policy</a>
            </div>
        </div>

    </div>
</div>


<?php wp_footer() ?>

<!----------ANIMATION TRIGGERS---------------------->
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery().orion({
            speed: 500
        });
    });
</script>

<script>
    jQuery('.back-to-top').css({
        "display": "none"
    });
    jQuery(document).ready(function() {
        var offset = 250;
        var duration = 300;
        jQuery(window).scroll(function() {
            if (jQuery(this).scrollTop() > offset) {
                jQuery('.back-to-top').fadeIn(duration);
            } else {
                jQuery('.back-to-top').fadeOut(duration);
            }

        });
        jQuery('.back-to-top').click(function(event) {
            event.preventDefault();
            jQuery('html, body').animate({
                scrollTop: 0
            }, duration);
            return false;
        })
    });
</script>

<!-----BACK TO TOP BUTTON--------->
<a href="#" class="back-to-top">
    <img src="/wp-content/themes/evolution-data-centres/assets/images/up-chevron.png"></a>

<!----------VIDEO OVERLAY END------------------->
</div>


</body>

</html>