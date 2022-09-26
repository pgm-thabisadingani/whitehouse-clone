<?php
    function register_custom_menus(){
        register_nav_menus([
            'primary_menu' => 'Hoofdmenu', 
            'secondary_menu' => 'Secondarymenu', 
            'contact_menu' => 'contactmenu', 
            'socials_menu' => 'Social Media Menu',
            'area51_menu' => 'Area 51 Menu',
        ]);
    }

    add_action('init', 'register_custom_menus')
?>