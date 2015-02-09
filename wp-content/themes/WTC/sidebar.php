<?php
/**
 * The Sidebar containing the main widget area
 */
?>
<div id="sidebar">
    <?php
    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('interior_sidebar') ) :
    endif; ?>
</div>