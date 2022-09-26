<?php
    if (has_post_thumbnail()) {
        the_post_thumbnail($args['size']);
    } else {
        echo "<img src='' />";
    }