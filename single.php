<?php 
    get_header(); 
    $url = $_SERVER["REQUEST_URI"];
    $isExe = strpos($url, 'executive-office');
    $isPres = strpos($url, 'president/');
?>
    <?php if(  $isExe==true): ?> 
        <?php get_template_part( 'components/hero', 'hero', [
            'description' => ' ',
            'title' => get_the_title(),
            'hasThumbnail' => false,
            'top-wrapper' => "hero-blue",
            'wrapper-left' => "hero-blue_top",
            'wrapper-right' => "hero-blue_bottom",
            'discription-class' => 'side-content'
        ] ) ?>
    <?php elseif( $isPres==true): ?> 
        <?php get_template_part( 'components/hero', 'hero', [
                'description' => get_the_excerpt(),
                'title' => get_the_title(),
                'hasThumbnail' => true,
                'top-wrapper' => "hero-grid",
                'wrapper-left' => "hero-grid_left",
                'wrapper-right' => "hero-grid_right",
                'discription-class' => 'side-content'
        ] ) ?>
    <?php else: ?> 
        <?php get_template_part( 'components/hero', 'hero', [
            'description' => '<a href="' . esc_url( get_category_link( get_the_category()[0]->term_id ) ) . '">' . esc_html( get_the_category()[0]->name ) . '</a>',
            'title' => get_the_title(),
            'hasThumbnail' => false,
            'top-wrapper' => "hero-white",
            'wrapper-left' => "hero-white_top",
            'wrapper-right' => "hero-white_bottom",
            'discription-class' => 'side-content'
        ] ) ?>
    <?php endif; ?> 
    <div class="container">
        <div class="content">
            <?php the_content(); ?>
        </div>
    <div>
<?php 
    get_footer(); 
?>