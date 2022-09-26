<?php
/**
 * Register a 'genre' taxonomy for post type 'book', with a rewrite to match book CPT slug.
 *
 * @see register_post_type for registering post types.
 */
function wpdocs_create_administration_tax_rewrite() {
    register_taxonomy( 'administration', 'administration', array(
        'rewrite'      => array( 'slug' => 'administration' )
    ) );
}
add_action( 'init', 'wpdocs_create_administration_tax_rewrite', 0 );