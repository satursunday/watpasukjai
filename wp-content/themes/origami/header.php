<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>
	
	<script src="wp-content/themes/origami/uikit/js/uikit.js"></script>
    <script src="wp-content/themes/origami/uikit/js/components/slideshow.min.js"></script>
    <script src="wp-content/themes/origami/uikit/js/components/lightbox.min.js"></script>
	
	<link rel="stylesheet" href="wp-content/themes/origami/uikit/css/uikit.gradient.min.css" />
    <link rel="stylesheet" href="wp-content/themes/origami/uikit/css/components/slideshow.gradient.min.css">
    <link rel="stylesheet" href="wp-content/themes/origami/uikit/css/components/dotnav.gradient.min.css">
    <link rel="stylesheet" href="wp-content/themes/origami/uikit/css/components/slidenav.gradient.min.css">
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