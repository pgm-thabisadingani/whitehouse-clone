
    <div class="containerSearch">
        <form class="search-bar" action="<?php echo esc_url(site_url('/')) ?>" method="get" autocomplete="off">
        <input   name="s"  type="search"    class="form-control"  id="autocomplete-search"  aria-label="Search" placeholder="input some text here..." required></input>
        <button class="closetn">Send</button>
        <div class="search-icon input-group-text"></div>
        </form>
        <ul id="autocomplete-results" class="search-list"></ul>
    </div>
    
    <section class=<?php echo $args['top-wrapper'] ?>>
        <?php if( is_front_page()): ?> 
            <div class=<?php echo $args['wrapper-right'] ?>>
                <div class=<?php echo $args['discription-class'] ?>>
                    <?php echo $args['description']; ?>
                </div>
                <div class="title-repeater">
                    <div class="title-back">
                        <?php echo_args($args, 'title', 'h1', 'title large'); ?>
                    </div>
                    <ul class="repeater-link">
                        <?php if (have_rows('hero_links')) : ?>
                            <?php while (have_rows('hero_links')) : the_row(); ?>
                                <?php 
                                    $sub_title = get_sub_field('link_title');
                                    $sub_url = get_sub_field('link_url');
            
                                ?>
                                <li>
                                    <a href="<?php echo $sub_url ?>">
                                        <?php echo $sub_title ?>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                        <?php endif ?>
                    </ul>
                </div>
            </div>
        <?php else: ?>
            <div class=<?php echo $args['wrapper-right'] ?>>
                <div class="title-back">
                    <?php echo_args($args, 'title', 'h1', 'title large'); ?>
                </div>
                <div class=<?php echo $args['discription-class'] ?>>
                    <?php echo $args['description']; ?>
                </div>
            </div> 
        <?php endif; ?>
        <?php if ($args['hasThumbnail']) : ?> 
            <div class=<?php echo $args['wrapper-left'] ?>>
                <?php get_template_part( 'components/thumbnail', 'thumbnail', [
                    'size' => 'custom-image ',
                ] ); ?>
            </div>
        <?php endif; ?>  
    </section>




