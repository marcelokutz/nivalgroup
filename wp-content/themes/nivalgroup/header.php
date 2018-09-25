<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Total WordPress Theme
 * @subpackage Templates
 * @version 4.5.4
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?><!DOCTYPE html>
<html <?php language_attributes(); ?><?php wpex_schema_markup( 'html' ); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrap" >
	<div <?php body_class(); ?>>

	<?php wpex_outer_wrap_before(); ?>

	<div id="outer-wrap" class="clr">

		<?php wpex_hook_wrap_before(); ?>

		<span class="loading-nival"></span>

			<?php wpex_hook_wrap_top(); ?>

			<?php wpex_hook_main_before(); ?>

			<main id="main" class="site-main clr"<?php wpex_schema_markup( 'main' ); ?><?php wpex_aria_landmark( 'main' ); ?>>

				<?php wpex_hook_main_top(); ?>