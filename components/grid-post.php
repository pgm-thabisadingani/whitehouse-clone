   <?php 
        $args2 = [
            'posts_type' => 'post',
            'posts_per_page' => $args['limit'],
            'order_by' => $args['order'],
            'order' => 'ASC',
            'tag' => $args['tags'],
        ]
    ?>

    <?php 
        $loop = new WP_Query($args2);
    ?>
    <!-- the other way of writting a loop -->
       <!-- $loopArray = get_post($args);
       var_dump( $loopArray) -->
        <div class=<?php echo $args['top-wrapper'] ?>> 
            <ul class=<?php echo $args['inner-wrapper'] ?>>
                <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    <li class="post-list-item">
                        <?php if ((!$args['hasThumbnail']) ) : ?> 
                            <a href="<?php the_permalink() ?>">
                                <h2><?php the_title() ?> </h2>
                                <div class="category-date">
                                    <p class="date-only"><?php the_date() ?></p>
                                    <div class="category-only">
                                        <?php if ( ! empty( the_category() ) ) {
                                            echo '<a href="' . esc_url( get_category_link( the_category()[0]->term_id ) ) . '">' . esc_html( the_category()[0]->name ) . '</a>';
                                        }?>
                                    </div>
                                </div>
                            </a>
                        <?php else: ?> 
                            <a href="<?php the_permalink() ?>">
                                <div class="feature-text-large">
                                    <div class="">
                                        <?php get_template_part( 'components/thumbnail', 'thumbnail', [
                                            'size' => 'custom-image ',
                                        ] ); ?>
                                    </div>
                                    <h2><?php the_title() ?> </h2>
                                </div>
                                <div class="category-date">
                                    <p class="date-only"><?php the_date() ?></p>
                                    <div class="category-only">
                                        <?php if ( ! empty( the_category() ) ) {
                                            echo '<a href="' . esc_url( get_category_link( the_category()[0]->term_id ) ) . '">' . esc_html( the_category()[0]->name ) . '</a>';
                                        }?>
                                    </div>
                                </div>
                            </a>
                        <?php endif; ?> 
                    </li> 
                <?php endwhile ?>
                <?php wp_reset_postdata(); ?>
                    <!-- when to loop twice -->
            </ul>  
                <?php if($args['isHome']) : ?> 
                    <?php get_template_part( 'components/category_list', 'category_list') ?>  
                <?php else: ?> 
                    <?php null ?>
                <?php endif; ?>   
        </div> 
        
  