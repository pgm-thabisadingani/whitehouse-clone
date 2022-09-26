<div>
    <ul class="repeater-feature container">
        <?php if (have_rows('front_page_repeater')) : ?>
            <?php while (have_rows('front_page_repeater')) : the_row(); ?>
                <?php 
                    $sub_img = get_sub_field('image');
                    $sub_title = get_sub_field('title');
                    $sub_subTitle = get_sub_field('sub_title');
                    $sub_intro = get_sub_field('intro');
                    $sub_isLeft = get_sub_field('is_left');
                    $sub_repeater = get_sub_field('link_repeater');
                ?>
                <li>
                     <?php if ($sub_isLeft) : ?>
                        <div class="feature-left">
                            <div class="feature-image">
                                <div class="feature-image_inner" >
                                    <!-- echo wp_get_attachment_image( $sub_img, 'medium' ); -->
                                    <img class src="<?php echo $sub_img ; ?>" alt="" />
                                </div>
                            </div>
                            <div class="feature-content">

                                <div class="feature-content_text">
                                    <p><?php echo $sub_subTitle ?></p>
                                    <h2 class="h1small"><?php echo $sub_title ?></h2>
                                    <hr>
                                    <p><?php echo $sub_intro ?><p>
                                    <ul class="repeater-link">
                                        <?php if (have_rows('link_repeater')) : ?>
                                            <?php while (have_rows('link_repeater')) : the_row(); ?>
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
                        </div>
                     <?php else : ?>
                        <div class="feature-right">
                            <div class="feature-image">
                                <div class="feature-image_inner" >
                                    <img class src="<?php echo $sub_img ; ?>" alt="" />
                                </div>
                            </div>
                            <div class="feature-content">

                                <div class="feature-content_text">
                                    <p><?php echo $sub_subTitle ?></p>
                                    <h2 class="h1small"><?php echo $sub_title ?></h2>
                                    <hr>
                                    <p><?php echo $sub_intro ?><p>
                                    <ul class="repeater-link">
                                        <?php if (have_rows('link_repeater')) : ?>
                                            <?php while (have_rows('link_repeater')) : the_row(); ?>
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
                        </div>
                     <?php endif ?>
                </li>
            <?php endwhile; ?>
        <?php endif ?>
    </ul>
</div>