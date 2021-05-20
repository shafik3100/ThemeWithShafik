<!---footer--->
            <footer>
                <div class="container">
                    <div class="row">
                    

                            <?php
                                $page_id = get_option('copyright_pag_link_setting');
                                
                            ?>

                            <div class="copyright">
                                <?php echo get_option('theme_customize_setting') ?> <a href="<?php echo get_the_permalink($page_id);?>" target="_blank"> <?php echo get_option('footer_copyright_link_setting') ?> </a>
                            </div>  
                    
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
