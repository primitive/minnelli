<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap-child
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="theme-color" content="#000000" />
	<link rel="profile" href="http://gmpg.org/xfn/11">

    <title>New Website Under Construction - Primitive Digital</title>

</head>

<body <?php body_class(); ?>> 
<?php do_action( 'wp_body_open' ); ?>

<div class="site" id="page">
