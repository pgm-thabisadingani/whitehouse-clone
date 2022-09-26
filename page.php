<?php
    get_header();
    $url = $_SERVER["REQUEST_URI"];
    $covidP = strpos($url, 'covidplan');
    $ourGV = strpos($url, 'our-government');
    $ourGRD = strpos($url, 'the-grounds');
    $area51 = strpos($url, 'area-51');
?>
    <?php if( $covidP==true): ?>  
        <?php get_template_part( 'components/hero', 'hero', [
            'description' => '',
            'title' => get_field('title'),
            'hasThumbnail' => false,
            'top-wrapper' => "hero-blue",
            'wrapper-left' => "hero-blue_top",
            'wrapper-right' => "hero-blue_bottom",
            'discription-class' => 'side-content'
        ] ) ?>
    <?php elseif( $ourGV==true): ?> 
        <?php get_template_part( 'components/hero', 'hero', [
            'description' => get_the_excerpt(),
            'title' => get_the_title(),
            'hasThumbnail' => true,
            'top-wrapper' => "hero-grid",
            'wrapper-left' => "hero-grid_left",
            'wrapper-right' => "hero-grid_right",
            'discription-class' => 'side-content'
        ] ) ?>
    <?php elseif( $ourGRD==true): ?> 
        <?php get_template_part( 'components/hero', 'hero', [
            'description' => get_the_excerpt(),
            'title' => get_the_title(),
            'hasThumbnail' => true,
            'top-wrapper' => "hero-overlay",
            'wrapper-left' => "hero-overlay_top",
            'wrapper-right' => "hero-overlay_bottom",
            'discription-class' => 'side-content'
        ] ) ?>
    <?php else: ?> 
        <?php get_template_part( 'components/hero', 'hero', [
            'description' => ' ',
            'title' => get_the_title(),
            'hasThumbnail' => false,
            'top-wrapper' => "hero-white",
            'wrapper-left' => "hero-white_top",
            'wrapper-right' => "hero-white_bottom",
            'discription-class' => 'side-content'
        ] ) ?>
    <?php endif; ?> 
    <div class="container">
         
            <?php if( $area51==true): ?> 
                <div class="content">
                    <?php the_excerpt(); ?>
                    <form enctype="multipart/form-data" action="/upload/image" method="post">
                        <input id="image-file" type="file" />
                    </form>
                </div>
            <?php elseif( $covidP==true): ?> 
                <div class="content"> 
                    <?php if(get_field('intro') ) echo get_field('intro') ?>
                </div>
                 <?php get_template_part( 'components/covid_repeater', 'covid_repeater') ?>
                <div class="content"> 
                    <?php the_content(); ?>
                </div>
                <?php get_template_part( 'components/covid_banner', 'codiv_banner',[
                    'title' => get_field('covid_title'),
                    'sub-title' => get_field('covid_sub_title'),
                    'image' => get_field('covid_img'),
                    'link' => get_field('covid_link'),
                    'link-text' => get_field('covid_link_text'),
                ]) ?>
            <?php else: ?>
                <div class="content">
                    <?php the_content(); ?>
                </div>
            <?php endif; ?> 
        
    </div>
<?php
    get_footer();