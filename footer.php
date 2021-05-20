<!---footer--->
<footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12 width-set-50">
                            <div class="footer-details">
                                <h4><?php echo get_option('get_touch_setting') ?></h4>
                                <ul class="list-unstyled footer-contact-list">
                                    <li>
                                        <i class="fa fa-map-marker fa-lg"></i>
                                        <p>701 Old York Drive Richmond USA.</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-phone fa-lg"></i>
                                        <p><a href="tel:+1-202-555-0100"> +1-202-555-0100</a></p>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o fa-lg"></i>
                                        <p><a href="mailto:demo@info.com"> demo@info.com</a></p>
                                    </li>
                                </ul>
                                <div class="footer-social-icon">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>                           
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </div>
                                <div class="input-group" id="subscribe">
                                    <input type="text" class="form-control subscribe-box" value="" name="subscribe" placeholder="EMAIL ID">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn subscribe-button"><i class="fa fa-paper-plane fa-lg"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 width-50 width-set-50">
                            <div class="footer-details">
                                <h4>explore</h4>
                                <ul class="list-unstyled footer-links">
                                    <li class="active"><a>Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="rooms.html">Rooms</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="#">Dinning</a></li>
                                    <li> <a href="news.html">News</a></li>
                                    <li> <a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="footer-details">
                                <h4><?php echo get_option('on_gelary')?></h4>
                                <div class="row">
                                    <div class="instagram-images">
                                        <div id="instafeed col-sm-6">
                                            <img src="<?php echo get_option('sk_theme_image') ?>" style="width: 150px;" alt="">
                                            <img src="<?php echo get_option('sk_theme_image') ?>" style="width: 150px;" alt="">
                                            <img src="<?php echo get_option('sk_theme_image') ?>" style="width: 150px;" alt="">
                                            <img src="<?php echo get_option('sk_theme_image') ?>" style="width: 150px;" alt="">

                                            <img src="<?php echo get_option('sk_theme_image') ?>" style="width: 150px;" alt="">
                                            <img src="<?php echo get_option('sk_theme_image') ?>" style="width: 150px;" alt="">
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                            <?php
                                $page_id = get_option('copyright_pag_link_setting');
                                
                            ?>

                    <div class="copyright">
                         <?php echo get_option('theme_customize_setting') ?> <a href="<?php echo get_the_permalink($page_id);?>" target="_blank"> <?php echo get_option('footer_copyright_link_setting') ?> </a>
                    </div>

                </div>
            </footer>

            <!--back to top--->
            <a style="display: none;" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
                <span><i aria-hidden="true" class="fa fa-angle-up fa-lg"></i></span>
                <span>Top</span>
            </a>

        </div>
        <?php wp_footer();  ?>
    </body>
</html>
