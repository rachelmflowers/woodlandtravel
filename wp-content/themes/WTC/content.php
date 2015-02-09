<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 */
?>
<?php
    the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'wtc' ) );
    wp_link_pages( array(
        'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'wtc' ) . '</span>',
        'after'       => '</div>',
        'link_before' => '<span>',
        'link_after'  => '</span>',
    ) );
?>
