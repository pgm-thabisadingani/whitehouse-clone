<?php 
    get_header(); 
    $url = $_SERVER["REQUEST_URI"];
    $isItVice = strpos($url, 'vice-president-harris');
    $isItPresi = strpos($url, 'president-biden');
    $iscabinet = strpos($url, 'the-cabinet');
?>

<?php if ($isItVice==false && $isItPresi==false): ?>
    <div class="container">
        <?php if($iscabinet==true): ?>  
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
                    <?php the_content(); ?>
                    <?php get_template_part( 'components/cabinet', 'cabinet'); ?>
                     
                </div>
            </div>
        <?php else: ?>  
            <?php if (has_excerpt()) {
                get_template_part( 'components/hero', 'hero', [
                'description' => get_the_excerpt(),
                'title' => get_the_title(),
                'hasThumbnail' => true,
                'top-wrapper' => "hero",
                'wrapper-left' => "hero_top",
                'wrapper-right' => "hero_bottom",
                'discription-class' => 'content'
                ]);}
            ?>
            <div class="content">
                <?php the_content(); ?>
            </div>
        <?php endif; ?>     
   </div>
    <?php else: ?>  
            <?php get_template_part( 'components/hero', 'hero', [
                'description' => get_the_excerpt(),
                'title' => get_the_title(),
                'hasThumbnail' => true,
                'top-wrapper' => "hero-grid",
                'wrapper-left' => "hero-grid_left",
                'wrapper-right' => "hero-grid_right",
                'discription-class' => 'side-content'
            ] ) ?>
            <div class="container" >
                <!-- side bar -->
                <div class="content">
                    <?php the_content(); ?>

                </div>
            </div>
  <?php endif; ?>  

<?php 
    get_footer(); 
?>