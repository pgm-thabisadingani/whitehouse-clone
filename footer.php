            <section class="container-footer padding-LR container"> 
                <div class="newsletter-wrapper">
                    <div class="newsletter-wrapper-logo ">
                        <img class="footer-img" alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/footer-logo.png')" />
                    </div>
                    <div class="newsletter-wrapper-form">
                        <?php
                            if (is_active_sidebar('form_widgets')) {
                                dynamic_sidebar('form_widgets');
                            }
                        ?>
                    </div>
                </div>
                <div class="navigation-wrapper">
                    <div class="footer-nav-wrapper">
                        <!-- <hr class="footer-hr"> -->
                        <?php wp_nav_menu(['theme_location' => 'primary_menu', 'li_class' => 'menu-item footer-li', 'link_class' => 'link-light text-secondary',]) ?>
                        <?php
                            if (is_active_sidebar('menu_widgets')) {
                                dynamic_sidebar('menu_widgets');
                            }
                        ?>
                    </div>
                    <div class="container-left-side">
                        <div>
                            <!-- contant menu -->
                            <?php  wp_nav_menu(['theme_location' => 'contact_menu',' menu_class' => "conctact-top"]); ?>
                        </div>
                        <div >
                            <div>
                                <!-- social_menu -->
                                <?php  wp_nav_menu(['theme_location' => 'socials_menu',' menu_class' => "social-top"]); ?>
                            </div>
                            <div>
                                <!-- adressing widget -->
                                <?php
                                if (is_active_sidebar('address_widgets')) {
                                    dynamic_sidebar('address_widgets');
                                } ?>
                            </div>
                            <div class="footer-logo">
                                <a class="mobile-text" href=<?php echo get_site_url() ?>>
                                    <span class="mobile-text-inner">WH</span>.GOV
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php wp_footer(); ?>
        </div>
    </body>
</html>