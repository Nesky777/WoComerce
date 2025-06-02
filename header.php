<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php wp_title(''); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
      <a href="<?php echo home_url(); ?>" class="logo"><img src="<?php echo get_bloginfo('template_directory'); ?>" alt=""></a>
      <br>
        
        <?php wp_nav_menu( array('menu'=> 'page-home.php', 'container'=> '', 'menu_class'=> '') ); ?>
    </header>   <br><br><br><br><br><br>