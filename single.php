<?php get_header(); ?>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 myE">
				<div class="col-sm-4">
					<?php 
						if( has_post_thumbnail() ){
							the_post_thumbnail("small-size"); 

						}else{
					?>
						<img src="<?php echo get_template_directory_uri().'/images/loading.gif' ?>" style="wight:100px; height:80px;">
					<?php
						};
					?>


				</div>
				<div class="col-sm-8">
					<h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h3>
					<?php the_content(); ?>

					

				</div>
			</div>
        </div>
    </div>
</div>

<?php get_footer(); ?>