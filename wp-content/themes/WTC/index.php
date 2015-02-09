<?php get_header(); ?>
<div id="main">
    <!-- main holder -->
    <div class="main-holder">
        <?php
        if ( is_front_page() == true) {
        // If this is the front page, use home layout
        ?>
            <!-- section -->
            <div class="section">
                <!-- info box -->
                <div class="info-box">
                    <?php if(get_field('homepage_right')){ //if the field is not empty
                        echo get_field('homepage_right'); //display it
                    } ?>
                </div>
                <!-- add section -->
                <div class="add-section">
                    <?php if(get_field('homepage_left')){ //if the field is not empty
                        echo get_field('homepage_left'); //display it
                    } ?>
                </div>
            </div>
        <?php
        }
        else
        {
        ?>
            <!-- twocolumns -->
            <div id="twocolumns">
                <div id="content-nonwp">
                    <!-- content -->
                    <?php
                    if ( have_posts() ) :
                        // Start the Loop.
                        while ( have_posts() ) : the_post();
                            the_content();
                        endwhile;
                    endif;
                    ?>
                </div>
                <div id="sidebar-nonwp">
                    <div class="sidebar-holder">
                        <?php if(get_field('page_sidebar_content')){ //if the field is not empty
                            echo get_field('page_sidebar_content'); //display it
                        } ?>
                        <?php get_sidebar('interior_sidebar'); ?>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<?php get_footer(); ?>
