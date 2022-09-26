<!-- theme support -->

<?php 
function mytheme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'custom-image', 2000, true);
    add_post_type_support('page', 'excerpt');
    
    // set_post_thumbnail_size(356, 245);
    add_theme_support('custom-logo', [
        'height' => 200,
        'width' => 200,
        'flex-width' => true,
		'flex-height' => true,
        'header-text', ['site-title', 'site-description'],
    ]);
    
    // Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );    // Customize sizes
}

add_action('after_setup_theme', 'mytheme_setup');