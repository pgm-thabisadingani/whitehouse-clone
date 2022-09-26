<?php
    get_header();
    // Get the queried object and sanitize it
    $current_page = sanitize_post( $GLOBALS['wp_the_query']->get_queried_object() );
    // Get the page slug
    $slug = $current_page->name;
?>
<div class="container">
    <?php 
    get_template_part( 'components/hero', 'hero', [
    'description' => ' ',
    'title' => $slug ,
    'hasThumbnail' => false,
    'top-wrapper' => "hero-white",
    'wrapper-left' => "hero-white_top",
    'wrapper-right' => "hero-white_bottom",
    'discription-class' => 'side-content'
] ) ?>
    <div class="content-side"> 
        <div class="content ">
            <?php
                $categories = get_the_category();
                if ($categories) {
                    foreach ($categories as $category) {
                    // echo "<pre>"; var_dump($category); echo "</pre>";
                    $cat = $category->cat_ID;
                    $args=array(
                        'cat' => $cat,   
                        'post__not_in' => array($post->ID),
                        'posts_per_page'=>10,
                        'ignore_sticky_posts'=>1
                    );
                    $my_query = null;
                    $my_query = new WP_Query($args);
                        if( $my_query->have_posts() ) {
                            while ($my_query->have_posts()) : $my_query->the_post(); ?>
                            <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                            <?php if ( ! empty( the_category() ) ) {
                                echo '<a href="' . esc_url( get_category_link( the_category()[0]->term_id ) ) . '">' . esc_html( the_category()[0]->name ) . '</a>';
                            }?>
                            <?php
                            
                            endwhile;
                        } //if ($my_query)
                    } //foreach ($categories
                }  //if ($categories)
                wp_reset_query();  // Restore global post data stomped by the_post().
            ?> 
            </div> 
        <?php get_template_part( 'components/category_list', 'category_list') ?>    
    </div>    
</div>
<?php
    get_footer();
?>