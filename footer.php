<footer class="footer" style = "background-color:<?php echo get_field('background_color', 'option'); ?>">
        <div class="container">
            <div class="wrapper">
                <div class="inner">
                    <div class="footer-left">
                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/logo_white.svg" alt="" srcset=""> -->
                        <img src="<?php echo get_field('logo_footer', 'option'); ?>" alt="" srcset="">
                    </div>
                    <div class="footer-right">
                        <div class="footer-right__info">
                           <!-- TOP -->
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'footer-top-menu',
                                    'menu_class' => 'footer-item',
                                 ) )
                            ?>
                            <!-- MIDDLE -->
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'footer-middle-menu',
                                    'menu_class' => 'footer-item',
                                 ) )
                            ?>
                            <!-- BOTTOM -->
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'footer-bottom-menu',
                                    'menu_class' => 'footer-item',
                                 ) )
                            ?>
                            <p class="copy_right"><?php echo get_field('copyright', 'option'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer() ?>
</body>

</html>