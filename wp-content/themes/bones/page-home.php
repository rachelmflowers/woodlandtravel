<?php
/*
 Template Name: Home Page
 *
*/
?>
<?php get_header(); ?>

<div id="content">
    <div id="hero">

        <div class="wrap">
            <h1>
                Roll with the Best and Oldest Dealer.
                <small>Airstream of Michigan.</small>
            </h1>
        </div>
        <?php
        // check if the post has a Post Thumbnail assigned to it.
        if ( has_post_thumbnail() ) {
            the_post_thumbnail('full');
        }
        ?>
    </div>

    <div id="inner-content">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php the_content(); ?>

        <?php endwhile; else : ?>

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

        <?php endif; ?>

    </div>

</div>

<?php get_footer(); ?>
