<article id="post-<?php the_ID(); ?>">
	<? if(!is_page() && !is_single()) { ?>
		<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?=the_title()?></a></h3>
		<p><?=get_the_date()?></p>
		<p><? the_excerpt()?></p>
	<? } else { ?>
    <h2><?php the_title(); ?></h2>
    <?php the_content() ?>
	<? } ?>
</article>
