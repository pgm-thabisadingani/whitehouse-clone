<?php 
    get_header();
    global $post; 
?>
<div>
    <?php get_template_part( 'components/hero', 'hero', [
        'description' => get_the_excerpt(),
        'title' => get_field('title'),
        'hasThumbnail' => true,
        'top-wrapper' => "hero-front",
        'wrapper-left' => "hero-front_left",
        'wrapper-right' => "hero-front_right",
        'discription-class' => 'side-content'
    ] ) ?>

    <div class="container container-posts-front padding-LR ">
        <?php get_template_part( 'components/grid-post', 'grid-post',[
            'limit' => -1,
            'order' => 'date',
            'hasThumbnail' => true,
            'isHome' => false,
            'top-wrapper' => "feature-posts",
            'inner-wrapper' => " feature-content",
            'tags' => "feature"
        ]) ?>
        <?php get_template_part( 'components/grid-post', 'grid-post',[
            'limit' => 6,
            'order' => 'date',
            'hasThumbnail' => false,
            'isHome' => false,
            'top-wrapper' => "middle-posts",
            'inner-wrapper' => "middle-content",
            'tags' => null
        ]) ?>
        <?php get_template_part( 'components/grid-post', 'grid-post',[
            'limit' => 4,
            'order' => 'title',
            'hasThumbnail' => false,
            'isHome' => false,
            'top-wrapper' => "end-posts",
            'inner-wrapper' => "end-content",
            'tags' => null
        ]) ?>
    
    </div>

    <?php get_template_part( 'components/feature_banner', 'feature_banner') ?>
    <?php get_template_part( 'components/covid_banner', 'codiv_banner',[
        'title' => get_field('covid_title'),
        'sub-title' => get_field('covid_sub_title'),
        'image' => get_field('covid_img'),
        'link' => get_field('covid_link'),
        'link-text' => get_field('covid_link_text'),

    ]) ?>
</div>
  
<?php 
    get_footer(); 
?>
