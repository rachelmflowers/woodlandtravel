            <footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

                <div id="inner-footer" class="wrap cf">

                    <nav id="footer-nav" role="navigation">
                        <?php wp_nav_menu(array(
                        'container' => '',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
                        'container_class' => '',         // class of container (should you choose to use it)
                        'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
                        'menu_class' => 'nav footer-nav',            // adding custom nav class
                        'theme_location' => 'footer-links',             // where it's located in the theme
                        'before' => '',                                 // before the menu
                        'after' => '',                                  // after the menu
                        'link_before' => '',                            // before each link
                        'link_after' => '',                             // after each link
                        'depth' => 0,                                   // limit the depth of the nav
                        'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
                        )); ?>
                    </nav>

                    <div id="contact-info">
                        <p><strong>Contact Us</strong></p>
                        <address>
                            5190 Plainfield Ave. NE<br />
                            Grand Rapids, MI 49525
                        </address>
                        <h3>800.968.8688</h3>
                        <p>
                            616.363.9038<br />
                            616.363.7747 (fax)
                        </p>
                    </div>

                    <div id="social">
                        <i class="fa fa-facebook-square"></i>
                        <i class="fa fa-pinterest-square"></i>
                        <i class="fa fa-instagram"></i>
                        <i class="fa fa-youtube-square"></i>
                        <div class="hours">
                        	<p>
                            	<strong>Summer Hours</strong>
                                <small>Memorial Day - Labor Day</small>
                            </p>
                            <p>
                            	Mon - Fri 9:00am - 6:00pm<br />
                            	Saturday  9:00am - 1:00pm<br />
                                Closed Sunday
                            </p>
                            <hr />
                            <p>
                            	<strong>Winter Hours</strong>
                                <small>Labor Day - Memorial Day</small>
                            </p>
                            <p>
                            	Mon - Fri 9:00am - 5:00pm<br />
                                Saturday  9:00am - Noon<br />
                                Closed Sunday
                            </p>
                        </div>
                    </div>
                    
                    <p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. All Rights Reserved</p>

                </div>

            </footer>

        </div>

        <?php // all js scripts are loaded in library/bones.php ?>
        <?php wp_footer(); ?>

    </body>

</html> <!-- end of site. what a ride! -->
