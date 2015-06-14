<?php get_header(); ?>
        
<?php
if (have_posts()) : 
    while (have_posts()) : the_post(); ?>
    <style>
        .breadcrumbs { display: none; }
    </style>
    
    <header id="page-header">
        <?php
        if ( has_post_thumbnail() ) {
        	the_post_thumbnail('full');
        }
        ?>
    </header>

    <div id="content">
        
        <div id="inner-content" class="wrap cf">
            
            <div class="main">
                <?php if ( function_exists('yoast_breadcrumb') ) yoast_breadcrumb('<p id="breadcrumbs">','</p>'); ?>
                <?php the_content(); ?>
            </div>
            
            <?php get_sidebar(); ?>
        </div>
        
    </div>
        
    <?php
    endwhile; 
else : ?>
            
<div id="content">
    
    <div id="inner-content" class="wrap">
        <article id="post-not-found" class="hentry cf">
            <header class="article-header">
                <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
            </header>

            <section class="entry-content">
                <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
            </section>

            <footer class="article-footer">
                <p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
            </footer>
        </article>
        
        <?php get_sidebar(); ?>
    </div>
    
</div>
<?php endif; ?>

<?php get_footer(); ?>

