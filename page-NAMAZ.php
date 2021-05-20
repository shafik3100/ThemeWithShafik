<?php get_header("moga") ?>



            <div class="col-sm-4" style="float:right">
                <div class="my_style">
                <?php get_sidebar("NAMAZ") ;?>
                </div>
            </div>


<section class="">
    <div class="container">
        <div class="row ">
            <div class="col-sm-8 myE ">
                <div class="col-sm-4">
                    <h1> <?php the_title(); ?> </h1>
                </div>
                <div class="col-sm-4">                
                <?php the_content(); ?></div>
            </div>
        </div>
    </div>
</section>











<?php get_footer("namaz") ?>
