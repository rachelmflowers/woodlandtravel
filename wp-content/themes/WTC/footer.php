<div id="header">
    <!-- logo -->
    <strong class="logo"><a tabindex="2" class="fn org url" href="/">Woodland Travel Center</a></strong>
    <img class="print-screen" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" width="322" height="71" alt="image description">
    <!-- header holder -->
    <div class="header-holder">
        <!-- navigation -->
        <div id="nav">
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '' ) ); ?>
        </div>
        <!-- add navigation -->
        <ul class="add-nav">
            <?php wp_nav_menu( array( 'theme_location' => 'primary-lower', 'menu_class' => 'add-nav' ) ); ?>
        </ul>
        <!-- phone -->
        <strong class="phone tel"><span class="type">Work</span>800.968.8688</strong>
    </div>
</div>
<div class="clearfix"></div>
<div id="footer">
    <!-- footer holder -->
    <div class="footer-holder">
        <!-- info block -->
        <div class="info-block">
            <img src="<?php echo get_template_directory_uri(); ?>/uploads/images/parkmodel/parkmodel_02.jpg" name="Park Model" class="alignright" alt="Park Model Lifestyle">
            <div class="holder">
                <h2>Park Model Lifestyle</h2>
                <p>Cost of gas and fuel too much to make camping affordable?&nbsp;Why tow a big heavy rig and have to go back home after just a few days?</p>
                <a href="park-model-lifestyle" class="more">LEARN MORE</a>
            </div>
        </div>
        <!-- sub block -->
        <div class="sub-block">
            <!-- contact block -->
            <div class="contact-block">
                <strong class="info">9am-5pm M-F, 9am-12pm Saturday, Closed Sunday<br>Call for an after-hours appointment.</strong>
                <p></p><p><!--Can't make it to our showroom during regular business hours? Contact us for an appointment. We'll be glad to accommodate!-->Our team is here to make your buying experience the best one possible.</p>
                <!-- Based in Grand Rapids, MI, we sell and deliver travel trailers to the United States, Canada and Internationally. Our competitive pricing and outstanding staff make Woodland Travel Center the place to buy your next ride! --><p></p>
            </div>
            <!-- social networks -->
            <div class="social-networks">
                <ul>
                    <li><a href="https://www.facebook.com/WoodlandTravelCenter" class="facebook" target="_blank">facebook</a></li>
                    <li><a href="http://www.pinterest.com/woodlandtravel/" target="_blank" class="pinterest">pinterest</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- footer holder -->
    <div class="footer-holder">
        <!-- footer info -->
        <div class="footer-info">
            <address class="adr">
                <strong class="type">Work</strong>
                <strong>Woodland Travel Center</strong>
                <strong class="street-address">5190 Plainfield Ave. NE</strong>
                <strong><span class="locality">Grand Rapids</span>, <span class="region" title="Michigan">MI</span> <span class="postal-code">49525</span></strong>
            </address>
            <ul>
                <li>800.968.8688</li>
                <li>616.363.9038</li>
                <li><span class="tel"><span class="type">Fax</span>616.363.7747</span> f</li>
            </ul>
            <!-- copyright -->
            <span class="copy">&copy; Copyright 2007-2014 Woodland Travel Center | <a href="http://woodlandtravelcenter.net/privacy-policy">Privacy Notice</a></span>
        </div>
        <!-- footer links -->
        <div class="footer-links">
            <!-- image -->
            <div class="image"><!-- generated by showtime Module start -->
                <script type="text/javascript">

                    $(document).ready(function(){
                        var lastslide=0;
                        $("#slideshow_3").css("overflow", "hidden");
                        $('ul#slides_3').cycle({
                            fx: 'fade',
                            speed:    1000,
                            timeout:  15000,

                            pagerEvent: 'mouseover',

                            random: 1,            fastOnEvent: false,
                            pauseOnPagerHover: true,
                            prev: '#prev_3',
                            next: '#next_3'
                        });

                        $("#slideshow_3").hover(function() {
                                $("ul#prevnextnav_3").fadeIn();
                            },
                            function() {
                                $("ul#prevnextnav_3").fadeOut();
                            });

                    });


                </script>

                <div id="slideshow_3" class="pics" style="overflow: hidden;">

                    <?php
                    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer_slider_area') ) :
                    endif; ?>
                    <!--<ul id="slides_3" style="position: relative;">
                        <li style="position: absolute; top: 0px; left: 0px; display: none; z-index: 5; opacity: 0; width: 127px; height: 120px;"><a href="http://woodlandtravelcenter.net/grand-rapids-scooters/" target="_self"><img width="127" height="120" style="position:absolute; left:0px; top:0px;" src="<?php echo get_template_directory_uri(); ?>/uploads/images/sc_buddy.jpg" alt="" title="sc_buddy.jpg"></a>                </li>
                        <li style="position: absolute; top: 0px; left: 0px; display: none; z-index: 5; opacity: 0; width: 127px; height: 120px;"><a href="http://woodlandtravelcenter.net/grand-rapids-scooters/" target="_self"><img width="127" height="120" style="position:absolute; left:0px; top:0px;" src="<?php echo get_template_directory_uri(); ?>/uploads/images/sc_buddy2.jpg" alt="" title="sc_buddy2.jpg"></a>                </li>
                        <li style="position: absolute; top: 0px; left: 0px; display: none; z-index: 5; opacity: 0; width: 127px; height: 120px;"><a href="http://woodlandtravelcenter.net/grand-rapids-scooters/" target="_self"><img width="127" height="120" style="position:absolute; left:0px; top:0px;" src="<?php echo get_template_directory_uri(); ?>/uploads/images/sc_rattler.jpg" alt="" title="sc_rattler.jpg"></a>                </li>
                        <li style="position: absolute; top: 0px; left: 0px; display: none; z-index: 5; opacity: 0; width: 127px; height: 120px;"><a href="http://woodlandtravelcenter.net/grand-rapids-scooters/" target="_self"><img width="127" height="120" style="position:absolute; left:0px; top:0px;" src="<?php echo get_template_directory_uri(); ?>/uploads/images/sc_roughhouse.jpg" alt="" title="sc_roughhouse.jpg"></a>                </li>
                        <li style="position: absolute; top: 0px; left: 0px; display: block; z-index: 6; opacity: 1; width: 127px; height: 120px;"><a href="http://woodlandtravelcenter.net/grand-rapids-scooters/" target="_self"><img width="127" height="120" style="position:absolute; left:0px; top:0px;" src="<?php echo get_template_directory_uri(); ?>/uploads/images/sc_stella.jpg" alt="" title="sc_stella.jpg"></a>                </li>
                    </ul>-->
                </div>
            </div>
            <ul>
                <li><a href="http://woodlandtravelcenter.net/inventory">Inventory</a></li>
                <li><a href="http://woodlandtravelcenter.net/parts-service/parts/">Parts</a></li>
                <li><a href="http://woodlandtravelcenter.net/parts-service/service-department/">Service</a></li>
                <li><a href="http://woodlandtravelcenter.net/restorations/">Restorations</a></li>
                <li><a href="http://woodlandtravelcenter.net/park-model-lifestyle/">Destination Camping</a></li>
                <li><a href="http://woodlandtravelcenter.net/park-model-lifestyle/">Park Model Lifestyle</a></li>
                <li><a href="http://woodlandtravelcenter.net/contact/">Contact Us</a></li>
                <li><a href="http://woodlandtravelcenter.net/history/">History/About</a></li>
                <li><a href="http://woodlandtravelcenter.net/testimonials">Testimonials</a></li>
                <li><a href="http://woodlandtravelcenter.net/literature-videos/">Literature/Demo Videos</a></li>
                <li><a href="https://www.facebook.com/WoodlandTravelCenter" target="_blank">Find us on Facebook</a></li>
                <li><a href="http://woodlandtravelcenter.net/gas-saver-tips/">Gas Saver Tips</a></li>
            </ul>
            <ul>
                <li><a href="http://woodlandtravelcenter.net/inventory">Airstream New Inventory</a></li>
                <li><a href="http://woodlandtravelcenter.net/inventory">Airstream Used Inventory</a></li>
                <li><a href="http://woodlandtravelcenter.net/parts-service/parts/">Airstream Parts</a></li>
                <li><a href="http://woodlandtravelcenter.net/parts-service/service-department/">Airstream Service</a></li>
                <li><a href="http://woodlandtravelcenter.net/restorations/">Airstream Restorations</a></li>
                <li><a href="http://woodlandtravelcenter.net/history/airstream/">Airstream History</a></li>
                <li><a href="http://woodlandtravelcenter.net/mopeds-scooters-grand-rapids/">Grand Rapids Scooters and Moped Sales</a></li>
            </ul>
        </div>
    </div>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->