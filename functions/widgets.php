<?php

function add_widgets(){
        register_sidebar( array(
        'name' => ' language',
        'id' => 'menu_widgets',
        'before_widget' => '<div class=" widgets-list " >',
        'after_widget' => '</div>',
    ) );
        register_sidebar( array(
        'name' => ' form',
        'id' => 'form_widgets',
        'before_widget' => '<div class=" form " >',
        'after_widget' => '</div>',
    ) );
        register_sidebar( array(
        'name' => 'address',
        'id' => 'address_widgets',
        'before_widget' => '<div class="address" >',
        'after_widget' => '</div>',
    ) );
        register_sidebar( array(
        'name' => 'category-mobile',
        'id' => 'category_widgets_mobile',
        'before_widget' => '<div class="category-mobile" >',
        'after_widget' => '</div>',
    ) );
        register_sidebar( array(
        'name' => 'category-desktop',
        'id' => 'category_widgets_desktop',
        'before_widget' => '<div class="category-desktop" >',
        'after_widget' => '</div>',
    ) );
}

add_action( 'widgets_init', 'add_widgets');