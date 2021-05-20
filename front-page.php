<?php get_header(); ?>

			<div class="col-sm-2" style="background: ; padding-left: 30px; float:right;">
				<?php get_sidebar() ;?>
				<img src="<?php echo get_option('sk_theme_image'); ?>" style="height: 200px; width: 200px; margin-top: 30px;" />

			</div>
			
			
   
<div class="section">
	<div class="container">
		
			<!---  post type area -->
			<?php $wpb_all_query = new WP_Query (array ('post_type'=>'post', 'post_status'=>'publish') ); ?>
			<?php if( $wpb_all_query -> have_posts() ): ?>

			<?php 
				while($wpb_all_query->have_posts() ) : $wpb_all_query -> the_post();
			
					get_template_part("template-parts/content",get_post_format() );

				endwhile;
			?>

			<?php else : ?>
			<p> <?php _e('sory , no have post')	?> </p>
			<?php endif; ?>
			<!---  post type area -->


		
	</div>
</div>




<div class="container">
	<div class="row" style="">
		<div class="col-sm-6" style=" margin-left: 150px; margin-top: 20px; text-align:center; background:black; color:blanchedalmond;padding:20px;">
			<h2 > <?php echo get_option('theme_customize_setting') ?> </h2>
		</div>
	</div>
</div>



<!---  post type area -->
<div class="section  ">
	<div class="container">
		<div class="row">

		<?php $wpb_all_query = new WP_Query (array ('post_type'=>'custom', 'post_status'=>'publish') ); ?>
		<?php if( $wpb_all_query -> have_posts() ): ?>
		
		<?php 
			while($wpb_all_query->have_posts() ) : $wpb_all_query -> the_post();
		?>

			<div class="col-md-10 myE">
				<div class="col-md-5">
					<?php the_post_thumbnail("big-size"); ?>
				</div>
				<div class="col-md-5">
					<h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h3>
					<?php the_content(); ?>
					<b> <?php the_time('F j, Y g:i a') ?> | <a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ); ?>"> <?php the_author(); ?> </a>  <?php 
						
						$categories = get_the_category();
						$separator = ", ";
						$catoptions = '';
						foreach($categories as $category){
							$catoptions .="<a href='".get_category_link($category->term_id)."'/>".$category->cat_name."</a>".$separator;
						}

						echo trim($catoptions,$separator);
							
					?> </b>
				</div>
			</div>

			
		<?php 
			endwhile;
		?>

		<?php else : ?>
			<p> <?php _e('sory , no have post')	?> </p>
		<?php endif; ?>


		</div>
	</div>
</div>
	<!---  post type area --->



<?php $wpb_all_query = new WP_Query (array ('post_type'=>'custom', 'post_status'=>'publish') ); ?>
<?php if( $wpb_all_query -> have_posts() ): ?>

	<?php 
		while($wpb_all_query->have_posts() ) : $wpb_all_query -> the_post();
	?>

		<?php the_post_thumbnail(); ?>
		<h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h3>
		<?php the_content(); ?>

	<?php 
		endwhile;
	?>

<?php else : ?>
<p> <?php _e('sory , no have post')	?> </p>
<?php endif; ?>

	


	






<?php get_footer(); ?>


<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
              <p><?php the_time('F j, Y g:i a') ?> |<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | <?php 
                
                  $categories = get_the_category();
                  $separator = ", ";
                  $catoptions = '';
                  foreach($categories as $category){
                      $catoptions .= "<a href='".get_category_link($category->term_id)."'/>".$category->cat_name."</a>".$separator;
                  }
echo trim($catoptions,$separator);
               ?></p>
              <p><?php the_content() ?></p>