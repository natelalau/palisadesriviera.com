<?php
/**
 * Palisades Riviera Doc Comment
 *
 * @category	404
 * @package	PalisadesRiviera front page
 * @<?php the_author(); ?>imFORZA
 * @link	http://www.palisadesriviera.com/
 */

?>
<?php get_header(); ?>

<div id="headwrapper">
	<div id="quicksearch">
		<?php dynamic_sidebar( 'frontpage-quick-search' );?>
	</div>
</div>
<div id="slider">
	<?php dynamic_sidebar( 'frontpage-slider' );?>
</div>



<!-- <div id="featuredprop">
	<div id="wrapper">
		<?php dynamic_sidebar( 'frontpage-featured-properties' );?>
	</div>
</div> -->

<div class="featured-properties">
	<div class="container">
		<?php dynamic_sidebar( 'frontpage-featured-properties' );?>
	</div>
</div>


</div>
<div id="middle">
	<div id="mainwrap">
		
	 <div id="welcome">

		<?php if ( have_posts() ) : ?><?php while ( have_posts() ) : the_post(); ?>

			<div class="entry">
			<?php the_content(); ?>
			</div>

		</div>

	<?php endwhile; ?>

	<?php endif; ?>
		  </div>
	</div>

</div>
</div>
<div id="clear"></div>
</div>
<div id="maincontent">
	<div id="fc">
		
		<h1>Featured Communities</h1>
		
		<div id="wrap">
			<?php wp_nav_menu( array( 'menu' => 'featured-communities', 'theme_location' => 'featured-communities', 'depth' => 1 ) ); ?>
		</div>
	</div>
<div id="wrap">
	<div id="cta2">
		<div class="findahome"><a href="/find-a-home/"><h2>FIND A HOME <i class="fa fa-home fa-lg fa-fw" style="color:#8A3F3D;"></i></h2></a></div>
<div class="homevalue">
		<a href="/my-home-value-is/"><h2>What’s My Home Worth? <i class="fa fa-calculator fa-lg fa-fw" style="color:#8A3F3D;"></i></h2></a>
</div>

	</div>
	   <div id="clear"></div>
</div>
<?php get_footer(); ?>
