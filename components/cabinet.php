<div>
    <ul class="repeater-cabinet">
        <?php if (have_rows('repeater_cabinet')) : ?>
            <?php while (have_rows('repeater_cabinet')) : the_row(); ?>
                <?php 
                    $sub_title = get_sub_field('title');
                    $sub_position = get_sub_field('position');
                    $sub_img = get_sub_field('image');
                ?>
                <li class="repeater-cabinet_item">
                    <div class="repeater-cabinet_item-left">
                        <img src="<?php echo $sub_img ; ?>" alt="" />
                    </div>
                    <div class="repeater-cabinet_item-right">
                        <h3><?php echo $sub_title ?></h3>
                        <h4><?php echo $sub_position ?></h4>
                     </div>
                </li>
            <?php endwhile; ?>
            <?php else: ?>
                <?php null; ?>
        <?php endif ?>
    </ul>
</div>