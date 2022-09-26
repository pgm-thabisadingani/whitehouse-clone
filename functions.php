<?php
    require get_theme_file_path('/functions/custom.php');
    require get_theme_file_path('/functions/files.php');
    require get_theme_file_path('/functions/support.php');
    require get_theme_file_path('/functions/widgets.php');
    require get_theme_file_path('/functions/menu.php');
    require get_theme_file_path('/functions/languages.php');
    require get_theme_file_path('/functions/login.php');
    require get_theme_file_path('/functions/users.php');
    require get_theme_file_path('/functions/prefix.php');

    require get_theme_file_path('/functions/autocomplete.php');
 



add_filter('use_block_editor_for_post', '__return_false');
add_filter('acf/settings/remove_wp_meta_box', '__return_false');
    
ob_get_clean();

