<?php /* Template Name: page-home */ ?>

<?php get_header(); ?>
<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
		<div class="leaf">  
        <div><img src="https://cdn.pixabay.com/photo/2016/01/17/09/34/nautical-star-1144619_1280.png" height="75px" width="75px"></img></div>
        </div>
        <br><br><br>
    <main>
        <section>
            <div class="image-container">
                <?php the_post_thumbnail();?>
                <h2 class="OurName">Nasze imię</h2>
            </div>
            <div class="skills">
                <span class="BOX">
                    <h2 class="box-topic">Frontendowe technologie</h2>
                    <p class="box-info">HTML5 &#9866; Struktura i semantyka strony.</p>
                    <p class="box-info">CSS3 &#9866; Stylowanie, Flexbox, Grid, animacje.</p>
                    <p class="box-info">JavaScript &#9866; Nowoczesna składnia, async/await, moduły.</p>
                    <p class="box-info">React &#9866; Komponenty, Hooki, zarządzanie stanem, React Router.</p>
                </span>
                <span class="BOX">
                    <h2 class="box-topic">Narzędzia <br>i workflow</h2>
                    <p class="box-info">Git &#9866; Kontrola wersji, branchowanie, pull requesty.</p>
                    <p class="box-info">GitHub &#9866; Hostowanie repozytoriów, rozwiązywanie problemów.</p>
                    <p class="box-info">Workflow &#9866; Praca zespołowa.</p>
                </span>
                <span class="BOX">
                    <h2 class="box-topic">Certyfikaty</h2>
                    <p class="box-info">Projekt WorkOn &#9866; Potwierdzenie umiejętności frontendowych.</p>
                </span>
            </div>
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