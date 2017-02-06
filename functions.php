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
<?php


//
// Maximum allowed width of content.
//
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}
//
// Setup our Theme.
//
if ( ! function_exists( 'palisadesriviera_setup' ) ) :

	/**
	 * Palisadesriviera_setup function.
	 *
	 * @access public
	 * @return void
	 */
	function palisadesriviera_setup() {

		// Support Language Files.
		load_theme_textdomain( 'palisadesriviera', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress Manage Title Tags.
		add_theme_support( 'title-tag' );

		// Support HTML5.
		add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

		// Support Post Formats.
		// See http://codex.wordpress.org/Post_Formats
		// add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'chat', 'video'));
		// Support Post Thumbnails.
		add_theme_support( 'post-thumbnails' );

		// Add our Theme Image Sizes.
		add_image_size( 'publicize', 200, 200, true ); // 200 x 200, minimum required for Jetpack Publicize.
		add_image_size( 'google-knowledgegraph-logo', 151, 151, false ); //
		add_image_size( 'google-knowledgegraph-logo-small', 72, 72, false ); //

		// Support Custom Editor CSS.
		// add_editor_style( array('/assets/css/editor-style.css') );
		// Support WordPress Menus.
		if ( function_exists( 'register_nav_menu' ) ) {
			register_nav_menu( 'primary-menu', __( 'Primary Menu' ) ); // Primary Navigation
			register_nav_menu( 'footer-navigation', __( 'Footer Menu' ) ); // Primary Navigation
			register_nav_menu( 'featured-communities', __( 'Featured Communities' ) ); // Primary Navigation.
		}

	}
endif; // Setup palisadesriviera_setup .
add_action( 'after_setup_theme', 'palisadesriviera_setup' );

//
// Improved Jetpack Support.
//
if ( ! function_exists( 'palisadesriviera_jetpack_support' ) ) :

	/**
	 * Function palisadesriviera_jetpack_support function.
	 *
	 * @access public
	 * @return return
	 */
	function palisadesriviera_jetpack_support() {

		// Create a custom image size for Site Logo.
		add_image_size( 'palisadesriviera-logo', 512, 512 );

		// Support for Jetpack Site Logo.
		$logo_args = array(
		'header-text' => array(
		'site-title',
		'site-description',
		),
		'size' => 'palisadesriviera-logo',
		);
		add_theme_support( 'site-logo', $logo_args );

		// Support Jetpack Responsive Videos.
		add_theme_support( 'jetpack-responsive-videos' );

		// Support Jetpack Social Links.
		// See - http://jetpack.me/support/social-links/ .
		add_theme_support( 'social-links', array( 'facebook', 'twitter', 'linkedin', 'google_plus', 'tumblr' ) );

		// Support Featured Content.
		// See - http://jetpack.me/support/featured-content/ .
		add_theme_support( 'featured-content', array(
			'filter'     => 'palisadesriviera_get_featured_content',
			'max_posts'  => 20,
			'post_types' => array( 'post', 'page' ),
		) );

		/**
		 * Function palisadesriviera_get_featured_content function.
		 *
		 * @access public
		 * @return return
		 */
		function palisadesriviera_get_featured_content() {
			return apply_filters( 'palisadesriviera_get_featured_content', array() );
		}

	}
endif; // Setup palisadesriviera_setup .
add_action( 'after_setup_theme', 'palisadesriviera_jetpack_support' );



//
// Widget Areas.
//
if ( ! function_exists( 'palisadesriviera_register_sidebars' ) ) {

	// Register Sidebar.
	/**
	 * Functionpalisadesriviera_register_sidebars function.
	 *
	 * @access public
	 * @return void
	 */
	function palisadesriviera_register_sidebars() {

		if ( function_exists( 'register_sidebar' ) ) {

			register_sidebar(array(
				'name' => 'Primary Sidebar',
				'id' => 'primary-sidebar',
				'description' => '',
				'before_widget' => '<div id="%1$s" class="widget-set %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<h3 class="widget-title">',
				'after_title' => '</h3>',
			));

			register_sidebar(array(
				'name' => 'Homepage Slider',
				'id' => 'frontpage-slider',
				'description' => 'Use a widget to display a slider on your homepage.',
				'before_widget' => '<div id="%1$s" class="widget-set %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<h3 class="widget-title">',
				'after_title' => '</h3>',
			));

			register_sidebar(array(
				'name' => 'Homepage Quick Search',
				'id' => 'frontpage-quick-search',
				'description' => 'Use a widget to display a property quick search on your homepage.',
				'before_widget' => '',
				'after_widget' => '',
				'before_title' => '<h1>',
				'after_title' => '</h1>',
			));
			register_sidebar(array(
				'name' => 'Homepage Featured Properties',
				'id' => 'frontpage-featured-properties',
				'description' => 'Use a widget to display featured properties on your homepage.',
				'before_widget' => '',
				'after_widget' => '',
				'before_title' => '<h1>',
				'after_title' => '</h1>',
			));

		} // endif
	} // End palisadesriviera_register_sidebars .

	// Hook into the 'widgets_init' action.
	add_action( 'widgets_init', 'palisadesriviera_register_sidebars' );

} // endif

//
// Scripts & Styles.
//
/**
 * Function palisadesriviera_scripts function.
 *
 * @access public
 * @return void
 */
function palisadesriviera_scripts() {

	if ( ! is_admin() ) {

		/* CSS Stylesheets */

		// Google Fonts.
		wp_register_style( 'google-fonts', '//fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300%7cGreat+Vibes%7cCinzel:400,700%7cLato:300,400,700', '', null, 'all' );
		wp_enqueue_style( 'google-fonts' );

		// Font Awesome.
		wp_register_style( 'fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', '', null, 'all' );
		wp_enqueue_style( 'fontawesome' );

		// Main Stylesheet.
		wp_register_style( 'palisadesriviera', get_stylesheet_uri(), false, null, 'all' );
		wp_enqueue_style( 'palisadesriviera' );

		/* Javascript */

	    // Script jQuery.
		wp_enqueue_script( 'jquery' );

		// Script required for WordPress Comments.
		if ( is_singular() && (get_option( 'thread_comments' ) === 1) && comments_open() && have_comments() ) {
		    wp_enqueue_script( 'comment-reply' );
	    }

		// A CUSTOM JS Example.
		wp_register_script( 'palisadesriviera', get_template_directory_uri() . '/assets/js/custom.js', 'jquery', null, true );
		wp_enqueue_script( 'palisadesriviera' );

	} // endif

} // End palisadesriviera_scripts .
add_action( 'wp_enqueue_scripts', 'palisadesriviera_scripts' );

//
// Login Page.
//
// Custom Login CSS.
/**
 * Function palisadesriviera_custom_login function.
 *
 * @access public
 * @return void
 */
function palisadesriviera_custom_login() {
	wp_register_style( 'custom-login', get_template_directory_uri() . '/assets/css/custom-login.css', true, 'all' );
	wp_enqueue_style( 'custom-login' );
	remove_filter( 'wp_admin_css','wp_admin_css' );
}
add_action( 'login_head', 'palisadesriviera_custom_login' );

// Changes Login Logo URL.
/**
 * Function palisadesriviera_wp_login_url function.
 *
 * @access public
 * @return return
 */
function palisadesriviera_wp_login_url() {
	return (home_url()); // Default Site URL.
}
add_filter( 'login_headerurl', 'palisadesriviera_wp_login_url' );

// Changing the login page URL hover text.
/**
 * Function palisadesriviera_wp_login_title function.
 *
 * @access public
 * @return return
 */
function palisadesriviera_wp_login_title() {
	// Hides "Powered by WordPress".
	return (get_option( 'blogname' ));
}
add_filter( 'login_headertitle', 'palisadesriviera_wp_login_title' );



//
// Support Google SiteLink SearchBox.
//
/**
 * Function palisadesriviera_sitelink_searchbox function.
 *
 * @access public
 * @return void
 */
function palisadesriviera_sitelink_searchbox() {
	?>

<script type="application/ld+json">
{
	"@context": "http://schema.org",
	"@type": "WebSite",
	"url": "<?php echo esc_html(); ?>",
	"potentialAction": {
	 "@type": "SearchAction",
	 "target": "<?php echo esc_html(); ?>?s={search_term_string}",
	 "query-input": "required name=search_term_string"
	}
}
</script>

<?php }
add_filter( 'wp_head', 'palisadesriviera_sitelink_searchbox' );


//
// Support iOS Web App - http://blog.teamtreehouse.com/optimizing-mobile-web-apps-ios .
//
/**
 * Function palisadesriviera_ios_webapp_support function.
 *
 * @access public
 * @return void
 */
function palisadesriviera_ios_webapp_support() {
	?>
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta name="apple-mobile-web-app-title" content="<?php echo esc_html( 'name' ); ?>">
<?php }
add_filter( 'wp_head', 'palisadesriviera_ios_webapp_support', 1 );


