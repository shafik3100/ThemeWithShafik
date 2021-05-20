<?php get_header(); ?>


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