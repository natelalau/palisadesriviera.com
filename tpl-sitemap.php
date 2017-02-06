<?php
/**
 * Palisades Riviera Doc Comment
 *
 * @category	404
 * @package	PalisadesRiviera
 * @<?php the_author(); ?>imFORZA
 * @link	http://www.palisadesriviera.com/
 */

get_header(); ?>

<div id="content-sidebar">
	<div id="content" class="hfeed">
		<?php if ( have_posts() ) : ?><?php while ( have_posts() ) : the_post(); ?>
		
		<div class="post">
		<h1 class="entry-title"><?php the_title(); ?></h1>


			<div class="entry">
			
			<?php wp_nav_menu( array( 'menu' => 'primary-menu', 'theme_location' => 'primary-menu' ) ); ?>
			
			</div>

		</div>
		
	<?php endwhile; ?>
	
	<?php endif; ?>
	</div><!-- end #content -->
	
	<?php get_sidebar(); ?>	
</div><!-- end #content-sidebar -->

<?php get_footer(); ?>
