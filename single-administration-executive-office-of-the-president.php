<?php 
    get_header(); 
?>
    <div class="container" >
        <?php get_template_part( 'components/hero', 'hero', [
            'description' => ' ',
            'title' => get_the_title(),
            'hasThumbnail' => false,
            'top-wrapper' => "hero-white",
            'wrapper-left' => "hero-white_top",
            'wrapper-right' => "hero-white_bottom",
            'discription-class' => 'side-content'
        ] ) ?>
        <div class="content">
            <?php the_content();?>
        </div>
        <?php get_template_part('components/cards/card_admin', 'card_admin', [
            "cards" => new WP_Query([
                'post_type' => 'executive-office', //singular
            ])
        ]); ?>
    </div>
<?php 
    get_footer(); 
?>