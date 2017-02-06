<?php
/**
 * Palisades Riviera Doc Comment
 *
 * @category	404
 * @package	PalisadesRiviera sidebar
 * @<?php the_author(); ?>imFORZA
 * @link	http://www.palisadesriviera.com/
 */

?>
<div class="sidebar">
<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'Primary Sidebar' ) ) : ?>
<?php endif; ?>
<div class="clear"></div>
</div><!-- end .sidebar -->
