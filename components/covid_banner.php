<div class="padding-LR container covid-container">
    <div class="covid-banner " style="background-image: url('<?php if($args['image']) echo $args['image'] ?>')">
        <div class="covid-banner_overlay">
            <div class="covid-banner_sub">
                <?php echo_args($args, 'sub-title', 'p', 'title large'); ?>
            </div>
            <div class="content covid-banner_info">
                <div class="covid-banner_content">
                    <div class="title-back">
                        <?php echo_args($args, 'title', 'h2', 'h1large'); ?>
                    </div>
                    <hr>
                    <a class="secondary" href="<?php echo $args['link']?>">
                        <?php echo $args['link-text'] ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>