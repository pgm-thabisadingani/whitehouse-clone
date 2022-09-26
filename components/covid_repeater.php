<div>
    <ul class="repeater-covid">
        <?php if (have_rows('covid_icons')) : ?>
            <?php while (have_rows('covid_icons')) : the_row(); ?>
                <?php 
                    $sub_title = get_sub_field('title');
                    $sub_id = get_sub_field('id');
                    $sub_img = get_sub_field('icon');
                ?>
                <li>
                    <a href="<?php echo $sub_id ?>" class="repeater-covid_links">
                        <img src="<?php echo $sub_img ; ?>" alt="" />
                        <p><?php echo $sub_title ?></p>
                    </a>
                </li>
            <?php endwhile; ?>
        <?php endif ?>
    </ul>
</div>