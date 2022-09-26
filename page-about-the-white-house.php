<?php
    get_header();
?>
    <div class="about-white-house">
    <div class="containerSearch">
        <form class="search-bar" action="<?php echo esc_url(site_url('/')) ?>" method="get" autocomplete="off">
        <input   name="s"  type="search"    class="form-control"  id="autocomplete-search"  aria-label="Search" placeholder="input some text here..." required></input>
        <button class="closetn">Send</button>
        <div class="search-icon input-group-text"></div>
        </form>
        <ul id="autocomplete-results" class="search-list"></ul>
    </div>
        <?php
            get_template_part( 'components/thumbnail', 'thumbnail', [
            'size' => 'custom-image ',
            ] );
        ?>
        <h1><?php the_title() ?></h1>
    </div>

    <div class="container">
        <div class="content">
            <?php the_content(); ?>
        </div>
    </div>
    <?php
    // get the ID of the current (parent) page
    $current_page_id = get_the_ID();

    // get all the children of the current page
    $child_pages = get_pages( array( 
            'child_of' => $current_page_id,  
        ));
    
     if ($child_pages) {

            // if we have some children, display a list wrapper
            echo '<ul class="card-list">';

            // loop trough each childpage 
            foreach ($child_pages as $child_page) {
                $page_id    = $child_page->ID; // get the ID of the childpage
                $page_link  = get_permalink( $page_id ); // returns the link to childpage
                $page_img   = get_the_post_thumbnail( $page_id, 'medium' ); // returns the featured image <img> element
                $page_title = $child_page->post_title; // returns the title of the child page
                ?>
                <a class="card-list_link" href="<?php echo $page_link; ?>">
                    <li class="card-list_link<?php echo $page_id; ?>">
                        <div class="card__image-container">
                            <?php echo $page_img; //display featured image ?>
                        </div>
                        <div class="card__content">
                            <strong><?php echo $page_title; ?></strong>
                        </div>
                    </li>
                </a>
                <?php
            }//END foreach ($child_pages as $child_page)
            echo '</ul>';
        }//END if ($child_pages) ?>

<?php
    get_footer();

