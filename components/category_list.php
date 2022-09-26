<div class=" categories-side categories">
<!-- drop down widget -->
    <div class="categories-side_mobile">
        <?php
            if (is_active_sidebar('category_widgets_mobile')) {
                dynamic_sidebar('category_widgets_mobile');
        } ?>
    </div>
    <div  class="categories-side_desktop" >
        <?php
            if (is_active_sidebar('category_widgets_desktop')) {
                dynamic_sidebar('category_widgets_desktop');
        } ?>
    </div>

</div>