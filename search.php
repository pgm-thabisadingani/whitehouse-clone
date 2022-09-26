<?php 
    get_header();

    get_template_part('/components/banner', 'banner', [
    'title' => 'Search results',
    'subtitle' => "&quot;" . get_search_query() . "&quot;",
    'breadcrumbs' => false
])
?>

    <div class="container ">
        <ul class="content">
        <?php
            global $wp_query;
        ?>
            <?php if( have_posts()) :  ?>
                <?php while (have_posts()) : the_post(); ?>
                    <li class='search-page-list'>
                        <a href=<?php the_permalink() ?>>
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_excerpt()?></p>
                        </a>
                    </li>
                <?php endwhile ?>
            <?php else : 
                echo "<div class='d-flex flex-column justify-content-center align-items-center py-5'>";
                echo "<strong class='fs-5 d-block mb-4'>Er zijn geen resultaten voor je zoekopdracht.</strong>";
                echo get_search_form();
                echo "</div>";?>
        <?php endif; ?>
            </ul>
</div>

<?php 
    get_footer();
?>
