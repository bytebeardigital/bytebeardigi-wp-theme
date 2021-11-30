<?php

/**
 * Footer template
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */

$footer_logo = get_field('footer_logo', 'options');
$global_phone = get_field('global_phone', 'options');
$global_email = get_field('global_email', 'options');
?>

</main>
<footer class="footer">
    <div class="spacer"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-1 col-lg-2 col-xs-12 footer__logo">
                <a class="footer__logo--link" href="<?php echo home_url(); ?>"><img width="75px"
                        src="<?php echo $footer_logo; ?>" /></a>
            </div>
            <div class="col-md-4 col-xs-12 footer__contact">
                <h5 class="footer__title">Contact</h5>
                <?php if (!empty($global_phone)) : ?> <p class="footer__link">phone: <a
                        href="tel:<?php echo $global_phone; ?>">1234567890</a></p><?php endif; ?>
                <?php if (!empty($global_email)) : ?> <p class="footer__link">email: <a
                        href="info:<?php echo $global_email; ?>"><?php echo $global_email; ?></a></p>
                <?php endif; ?>
            </div>
            <div class="col-md-3 col-xs-12 footer__menu">
                <h5 class="footer__title">Menu</h5>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'footer__menu__nav',
                    'fallback_cb' => '__return_false',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth' => 5,
                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                ));
                ?>
            </div>
            <div class="col-md-3 footer__social">
                <h5 class="footer__title">Follow me on</h5>
                <?php component('social-bar-vert'); ?>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</body>

</html>