<?php
    get_header();
    
?>
    <?php get_template_part( 'components/hero', 'hero', [
        'description' => '',
        'title' => get_the_title(),
        'hasThumbnail' => false,
        'top-wrapper' => "hero-white",
        'wrapper-left' => "hero-white_top",
        'wrapper-right' => "hero-white_bottom",
        'discription-class' => 'side-content'
    ] ) ?>
     <div class="container ">
        <div class="content contact-page">
            <?php the_content(); ?>
        </div>
    <div>
<?php
    get_footer();