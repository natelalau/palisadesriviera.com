<!DOCTYPE HTML>
<?php
/**
 * Palisades Riviera Doc Comment
 *
 * @category	404
 * @package	PalisadesRiviera
 * @<?php the_author(); ?>imFORZA
 * @link	http://www.palisadesriviera.com/
 */

?>
<html class="no-js" <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="header">
	<div id="headwrapper">
		<div id="logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/logo.png"  width="267" height="93" alt="K.C. SOLL - Luxury Homes" />
				</a>
				<br />
				
				<i class="fa fa-bars mobile-nav-btn btnShow"></i>
				
				<p style="font-size:10px;">Direct:<a href="tel:3104541525" style="font-size:10px;">310.454.1525</a> | Cell:<a href="tel:3102456161" style="font-size:10px;">310.245.6161</a></p>
			</a>
		</div>
		<div id="navigation">
			<?php wp_nav_menu( array( 'menu' => 'primary-menu', 'theme_location' => 'primary-menu' ) ); ?>
		</div>
		
		<div class="mobile-nav hidden">
			<?php wp_nav_menu( array( 'menu' => 'primary-menu', 'theme_location' => 'primary-menu' ) ); ?>
		</div>
		
		<div id="sotheby">
			<a href="//www.sothebyshomes.com" target="_blank">
				<img src="<?php bloginfo( 'stylesheet_directory' );?>/img/sothebys_header.png" style="padding:4px;" alt="Sotheby's International Realty" title="Luxury Homes and Real Estate" width="138" height="59" />
			</a>
		</div>
	</div>
</div>


<div id="content-sidebar" class="breadcrumbs">
	<?php get_template_part( 'breadcrumbs' ); ?>
</div>












