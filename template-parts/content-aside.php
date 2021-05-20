<div class="col-sm-10 myE">
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
				<div class="col-sm-6">
					<h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h3>
					<?php the_content(); ?>

					<p> <?php 
						$categories = get_the_category();
						$separator = ",";
						$catoptions = '';
						foreach($categories as $category){
							$catoptions .="<a href='".get_category_link($category->term_id)."'/>".$category->cat_name."</a>".$separator;
						}
						echo trim($catoptions,$separator);
					?> </p>

				</div>
			</div>