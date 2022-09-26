 <?php if (isset($args['cards']) && $args['cards']->have_posts()) : ?>
        <ul class="card-list">
            <?php while($args['cards']->have_posts()) : $args['cards']->the_post() ?>
                <?php if(has_post_thumbnail()) : ?>
                    <a class="card-list_link" href="<?php the_permalink(); ?>">           
                        <li class="card-list_link">
                            <div class="card__image-container">
                                <?php get_template_part( 'components/thumbnail', 'thumbnail', [
                                        'size' => 'custom-image ',
                                    ] ) ?>
                            </div>
                            <div class="card__content">
                                <strong class="small-title card-list_link-item_wrapper-title">
                                    <?php the_title() ?>
                                </strong>
                            </div>
                        </li>
                    </a>
                <?php endif?>
            <?php endwhile ?>
        </ul>
    <?php endif?>
