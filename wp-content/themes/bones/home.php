<?php get_header(); ?>

            <div id="content">

                <main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

                        <? phpthe_content(); ?>

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

                </main>

            </div>

<?php get_footer(); ?>
