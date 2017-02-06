<?php
/**
 * Palisades Riviera Doc Comment
 *
 * @category	404
 * @package	PalisadesRiviera index
 * @<?php the_author(); ?>imFORZA
 * @link	http://www.palisadesriviera.com/
 */

?>
<?php get_header(); ?>
<div id="content-sidebar">
	<div id="content" class="hfeed">
		<?php get_template_part( 'content-loop' ); ?>
		<div class="navigation">
		<?php posts_nav_link(); ?>
		</div>
		<?php endif; ?>
	</div><!-- end #content -->
	<?php get_sidebar(); ?>
</div><!-- end #content-sidebar -->
<?php get_footer(); ?>
