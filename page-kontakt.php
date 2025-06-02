<?php /* Template Name: page-kontakt */ ?>

<?php get_header(); ?>
<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
		<main>
        <section class="formularz">
            <h1 style="text-align: center; font-size: 40px;">
                Formularz kontaktowy 
            </h1>
            <br>
            <?php echo do_shortcode( '[contact-form-7 id="bbfcf3b" title="Contact form 1"]' )?>
            </form>
        </section>
    </main>
	<?php endwhile; ?>
	<?php the_posts_pagination( array(
		'prev_text'          => __( '<' ),
		'next_text'          => __( '>' ),
	) );
	?>
	<?php else : get_template_part( 'content', 'none' ); ?>
<?php endif; ?>
<?php get_footer(); ?>