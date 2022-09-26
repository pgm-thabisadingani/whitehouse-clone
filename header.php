<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

</head>
<body class=" <?php body_class(); ?>">
<div class="wrapper">
    <header class="header-container">
        <nav class="navbar-container">
            <div class="logo-text">
                <a class="desktop-text" href=<?php echo get_site_url() ?>>The White House</a>
                <a class="mobile-text" href=<?php echo get_site_url() ?>>
                    <span class="mobile-text-inner">WH</span>.GOV
                </a>
            </div>
            <div class="container-logo">
                <?php
                    if(has_custom_logo()){
                        the_custom_logo();
                    }
                
                ?>
            </div>
            <div  class="container-top-nav">
                <div class=" top-navigation">
                    <?php  wp_nav_menu(['theme_location' => 'secondary_menu',' menu_class' => "menu-top"]);
                            if (is_active_sidebar('menu_widgets')) {
                                dynamic_sidebar('menu_widgets');
                            }
                    ?>
                </div>
                <!-- <div class="containerSearch">
                    <form class="search-bar" action="<?php echo esc_url(site_url('/')) ?>" method="get" autocomplete="off">
                    <input   name="s"  type="search"    class="form-control"  id="autocomplete-search"  aria-label="Search" placeholder="input some text here..." required></input>
                    <button class="closetn">Send</button>
                    <div class="search-icon input-group-text"></div>
                    </form>
                    <ul id="autocomplete-results" class="search-list"></ul>
                </div> -->
                <div class="open-mobile">
                        <span class=" open-line menu-top"></span>
                        <span class=" open-line menu-bottom"></span>    
                        <span class=" open-text">Menu</span>
                        <span class=" open-line menu-top"></span>
                        <span class=" open-line menu-bottom"></span>  
                </div>
            </div>
        </nav>
        <div class="menu-mobile">
            <div class="menu-mobile-top">
                <div>
                    <?php
                        if(has_custom_logo()){
                            the_custom_logo();
                        }
                    ?>
                </div>
                <div class="close-mobile">
                    <span class="close-text">Close</span>
                    <p class="close-right">X</p>
                </div>
            </div>
            <div class="container-burger-menu">
                <div class="container-top-primary">
                    <?php  wp_nav_menu(['theme_location' => 'secondary_menu',' menu_class' => "menu-top"]);
                        if (is_active_sidebar('menu_widgets')) {
                                dynamic_sidebar('menu_widgets');
                            }
                        if ( is_user_logged_in() ) {
                            wp_nav_menu(['theme_location' => 'area51_menu',' menu_class' => "menu-area51"]);
                        } else {
                            echo ' ';
                        }
                    ?>
                </div>
                <div class="container-side-primary">
                    <div>
                        <!-- contant menu -->
                        <?php  wp_nav_menu(['theme_location' => 'contact_menu',' menu_class' => "conctact-top"]); ?>
                     </div>
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
                </div>
            </div>
            
        </div>
    </header> 
    <div class="open-mobile-side specialBtn">
        <p class="open-mobile-side">menu</p>
    </div>
           

