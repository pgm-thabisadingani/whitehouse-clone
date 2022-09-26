<?php
function THEME_SLUG_posts_add_rewrite_rules( $wp_rewrite )
{
    $new_rules = [
        'briefing-room/page/([0-9]{1,})/?$' => 'index.php?post_type=post&paged='. $wp_rewrite->preg_index(1),
        'briefing-room//(.+?)/?$' => 'index.php?post_type=post&name='. $wp_rewrite->preg_index(1),
    ];
    $wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
    return $wp_rewrite->rules;
}
add_action('generate_rewrite_rules', 'THEME_SLUG_posts_add_rewrite_rules');

function THEME_SLUG_posts_change_blog_links($post_link, $id=0){
    $post = get_post($id);
    // if( is_object($post) && $post->post_type == 'post'){
    //     return home_url('/briefing-room/'. $post->post_name.'/');
    // }
    return $post_link;
}
add_filter('post_link', 'THEME_SLUG_posts_change_blog_links', 1, 3);