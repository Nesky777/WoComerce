<?php /* Template Name: page-blog */ ?>

<?php get_header(); ?>
<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
		
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h2 class="entry-title"><?php the_title(); ?></h2>
    <div class="entry-meta">
        <span class="posted-on">Opublikowano: <?php the_date(); ?></span> |
        <span class="byline">Autor: <?php the_author(); ?></span>
    </div>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
    <div class="entry-footer">
        <span class="categories">Kategorie: <?php the_category(', '); ?></span> |
        <span class="tags">Tagi: <?php the_tags('', ', ', ''); ?></span>
    </div>
    </article>
    
	<?php endwhile; ?>
	<?php the_posts_pagination( array(
		'prev_text'          => __( '<' ),
		'next_text'          => __( '>' ),
	) );
	?>
	<?php else : get_template_part( 'content', 'none' ); ?>
<?php endif; ?>
<?php get_footer(); ?>