<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo ('charset');?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/icons/favicon.png"/>
        <title><?php echo get_bloginfo('name'); ?>  |  <?php echo get_bloginfo('description'); ?></title>
        
        <style>
            body {
                padding: 0px !important;
                
            }
            .myE {
                border: solid #b98325 1px;
                margin-top: 20px;
                display: block;
            }
        </style>

        <?php wp_head();  ?>
    </head>
    <body <?php body_class();  ?> >
        <div id="page">
            <!---header top---->

            <!--header--->
            <header class="header-container">
                <div class="container">
                    <div class="top-row">
                        <div class="row">
                            <div class="col-md-2 col-sm-6 col-xs-6">
                                <div id="logo">
                                    <!--<a href="index.html"><img src="images/logo.png" alt="logo"></a>-->
                                    <a href="index.html"><span>vacay</span>home</a>
                                </div>                       
                            </div>
                            <div class="col-sm-6 visible-sm">
                                <div class="text-right"><button type="button" class="book-now-btn" style="background: <?php echo get_option('sk_theme_colorpicker') ?>;">Book Now</button></div>
                            </div>
                            <div class="col-md-8 col-sm-12 col-xs-12 remove-padd">
                                <nav class="navbar navbar-default">
                                    <div class="navbar-header page-scroll">
                                        <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>

                                    </div>
                                    <div class="collapse navigation navbar-collapse navbar-ex1-collapse remove-space">
                                    <!---    <ul class="list-unstyled nav1 cl-effect-10">
                                            <li><a  data-hover="Home" class="active"><span>Home</span></a></li>
                                            <li><a data-hover="About"  href="about.html"><span>About</span></a></li>
                                            <li><a data-hover="Rooms"  href="rooms.html"><span>Rooms</span></a></li>
                                            <li><a data-hover="Gallery"  href="gallery.html"><span>Gallery</span></a></li>
                                            <li><a data-hover="Dinning" href="dinning.html"><span>Dinning</span></a></li>
                                            <li><a data-hover="News" href="news.html"><span>News</span></a></li>
                                            <li><a data-hover="Contact Us" href="contact.html"><span>contact Us</span></a></li>
                                        </ul>---->
                                        <?php
	$locationDetails = get_nav_menu_locations();
	$menuId = $locationDetails['primary'];
	$pryMenuItem = wp_get_nav_menu_items($menuId);
?>

<ul class="list-unstyled nav1 cl-effect-10">
                           
<?php 
	foreach($pryMenuItem as $key=>$value){
?>
                           
   <li><a data-hover="<?php echo $value->title  ?>" class="toss" href="<?php echo $value->url ?>"><span><?php echo $value->title ?></span></a></li>

<?php 
	}
?>

</ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="col-md-2  col-sm-4 col-xs-12 hidden-sm">
                                <div class="text-right"><button type="button" class="book-now-btn boss" style="background: <?php echo get_option('sk_theme_colorpicker') ?>; ">Book Now</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>


        <div class="row">
            <div class="col-4">
				<form method="get" action=" <?php  home_url('/');  ?> ">
					<label for="search for">search for</label>
					<input type="text" placeholder="search for here" name="s" />
					<button type="submit">search </button>
				</form>
            </div>
        </div> 