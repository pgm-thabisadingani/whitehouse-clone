<?php
/*
Template Name: Full-width grid cards layout
Template Post Type: post, page, event
*/
get_header();
?>
<?php if( is_page($page = 'administration')  || is_page($page = 'la-administracion-biden-harris')) : ?>
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
                'post_type' => 'administration', //singular
            ])
        ]); ?>
    </div>
<?php endif; ?>

<?php if( is_page($page = 'about-the-white-house/presidents') ) : ?>
    <div class="containers" >
        <div class="presidents">
            <?php get_template_part( 'components/hero', 'hero', [
                'description' => get_the_excerpt(),
                'title' => get_the_title(),
                'hasThumbnail' => false,
                'top-wrapper' => "hero-white",
                'wrapper-left' => "hero-white_top",
                'wrapper-right' => "hero-white_bottom",
                'discription-class' => 'side-content'
            ] ) ?>
        </div>
        <?php get_template_part('components/cards/card_admin', 'card_admin', [
            "cards" => new WP_Query([
                'post_type' => 'president', //singular
                'posts_per_page' => -1 ,
            ])
        ]); ?>
    </div>
<?php endif; ?>


<a><?php the_field('header_title')?></a>
<a><?php the_field('main_title')?></a>
<a><?php the_field('header_sub_title')?></a>
<a><?php the_field('header_description')?></a>

<?php
get_footer();?>