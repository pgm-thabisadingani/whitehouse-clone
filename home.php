<?php
    get_header();
    $current_page = sanitize_post( $GLOBALS['wp_the_query']->get_queried_object() );
    // Get the page slug
    $slug = $current_page-> post_title;

?>

<div class="container">
        <?php 
            get_template_part( 'components/hero', 'hero', [
            'description' => ' ',
            'title' => $slug,
            'hasThumbnail' => false,
            'top-wrapper' => "hero-white",
            'wrapper-left' => "hero-white_top",
            'wrapper-right' => "hero-white_bottom",
            'discription-class' => 'side-content'
        ] ) ?>
    <?php 
        $args = [
            'posts_type' => 'post',
            'posts_per_page' => 9,
            'order_by' => 'title',
            'order' => 'ASC',
        ]
    ?>

    <?php 
        $loop = new WP_Query($args);
    ?>
    <!-- the other way of writting a loop -->
       <!-- $loopArray = get_post($args);
       var_dump( $loopArray) -->
        <?php get_template_part( 'components/grid-post', 'grid-post',[
            'limit' => 9,
            'order' => 'date',
            'hasThumbnail' => false,
            'isHome' => true,
            'top-wrapper' => "content-side",
            'inner-wrapper' => "content",
              'tags' => null
        ]) ?>
    </div>
<?php
get_footer();