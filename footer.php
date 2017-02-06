<?php
/**
 * Palisades Riviera Doc Comment
 *
 * @category	404
 * @package	PalisadesRiviera footer
 * @<?php the_author(); ?>imFORZA
 * @link	http://www.palisadesriviera.com/
 */

?>
<div id="footer">

	<p><span class="cal">Cal BRE# 00419651</span></p>

	<?php wp_nav_menu( array( 'menu' => 'footer-navigation', 'depth' => 1, 'theme_location' => 'footer-navigation' ) ); ?>

	<p>Copyright © <?php echo esc_html( 'Y' ); ?> the k.c soll group palisadesriviera.com. All Rights Reserved. | <a href="/sitemap/">Sitemap</a> | <a href="//www.imforza.com" target="_blank">Real Estate Marketing by imFORZA</a>
</p>
<p>This Web site is not the official Web site of Sotheby's International Realty, Inc. Sotheby's International Realty, Inc. does not make any representation or warranty regarding any information, including without limitation its accuracy or completeness, contained on this Web site</p>
<p><img src="<?php bloginfo( 'stylesheet_directory' );?>/img/icons.png" /></p>
<p>
	
<?php
// // Can be used in any (template) file, will do the same as shortcode [wpseo_address]
if ( function_exists( 'wpseo_local_show_address' ) ) {
	$params = array(
		'echo' => true,
		'id' => 237,
		'show_state' => true,
		'show_country' => true,
		'show_phone' => true,
		'oneline' => false,
	);
	wpseo_local_show_address( $params );
}
?>
	
	<a href="//www.sothebyshomes.com" target="_blank">
		<img src="<?php bloginfo( 'stylesheet_directory' );?>/img/sothebys_footer.png" style="padding: 4px;" alt="Sotheby's International Realty" title="Luxury Homes and Real Estate" width="138" height="59" />
	</a>
</p>



</div>
</div>

<?php wp_footer(); ?>
</body>
</html>
