<?php get_header(); ?>
<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
		<?php get_template_part( 'content', 'article' ); 
		?>
	<?php endwhile; ?>
	<?php the_posts_pagination( array(
		'prev_text'          => __( '<' ),
		'next_text'          => __( '>' ),
	) );
	?>
	<?php else : get_template_part( 'content', 'none' ); ?>
<?php endif; ?>
<?php get_footer(); ?>