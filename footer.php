	
	<footer>
        <section>
            <h1 class="clear">Dane kontaktowe:</h1>
                <ul>
                    <li><b>email:</b> <a href="mailto:<?php the_field('email', 'user_1'); ?>"><?php the_field('email', 'user_1'); ?></a></li>
                    <li><b>telefon:</b> <p><?php the_field('telefon', 'user_1'); ?></p></li>
                </ul>
        </section>  
    </footer>
<?php wp_footer(); ?>
</body>
</html>