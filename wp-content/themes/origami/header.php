<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>
	
	<link rel="stylesheet" href="uikit/css/uikit.gradient.min.css" />
</head>

<body <?php body_class() ?>>

<?php do_action('origami_top'); ?>

<div class="container newClass">

	<?php do_action('origami_before_page_container') ?>

	<div id="page-container" class="newclass">

		<?php do_action('origami_top_page_container') ?>

		<?php get_template_part('parts/logo', 'top') ?>

		<?php do_action('origami_after_logo_wrapper') ?>

		<?php get_template_part('parts/menu', 'top') ?>