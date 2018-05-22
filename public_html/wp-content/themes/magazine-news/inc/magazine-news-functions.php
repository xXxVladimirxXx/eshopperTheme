<?php if( ! defined( 'ABSPATH' ) ) exit;

/********************************************************************
* Magazine News functions and definitions.
/********************************************************************/

	if ( ! function_exists( 'magazine_news_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function magazine_news_setup() {
		load_theme_textdomain( 'magazine-news', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails', array( 'post', 'page') );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'status' ) );	
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'magazine-news' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'custom-background', apply_filters( 'mn_magazine_custom_background_args', array(
			'default-color' => '',
		) ) );
		
	}
	endif; // magazine_news_setup
	add_action( 'after_setup_theme', 'magazine_news_setup' );

	/**
	 * Set the content width in pixels, based on the theme's design and stylesheet.
	 *
	 * Priority 0 to make it available to lower priority callbacks.
	 *
	 * @global int $content_width
	 */
	function magazine_news_content_width() {
		$GLOBALS['content_width'] = apply_filters( 'magazine_news_content_width', 640 );
	}
	add_action( 'after_setup_theme', 'magazine_news_content_width', 0 );
	
/********************************************************************
* Register widget area.
/********************************************************************/	

	function magazine_news_widgets_init() {
		register_sidebar( array(
			'name'          => esc_html__( 'Sidebar Right', 'magazine-news' ),
			'id'            => 'sidebar-1',
			'description'   => '',
			'before_widget' => '<section id="%1$s" class="widget aniview  %2$s" data-av-animation="' . mn_animation_sidebar () . '">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );

			register_sidebar( array(
			'name'          => esc_html__( 'Footer 1', 'magazine-news' ),
			'id'            => 'footer-1',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
		
		
		register_sidebar( array(
			'name'          => esc_html__( 'Footer 2', 'magazine-news' ),
			'id'            => 'footer-2',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
		
		
		register_sidebar( array(
			'name'          => esc_html__( 'Footer 3', 'magazine-news' ),
			'id'            => 'footer-3',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
		
		
		register_sidebar( array(
			'name'          => esc_html__( 'Footer 4', 'magazine-news' ),
			'id'            => 'footer-4',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
		
	}
	add_action( 'widgets_init', 'magazine_news_widgets_init' );

/********************************************************************
* Enqueue scripts and styles.
/********************************************************************/	

	function magazine_news_scripts() {

		wp_enqueue_script('jquery');
			
		wp_enqueue_style('magazine-news_style', get_stylesheet_uri());

		wp_register_style( 'magazine-news_animate', get_template_directory_uri() . '/css/animate.css');
		wp_enqueue_style( 'magazine-news_animate');

		wp_register_script( 'magazine-news-aniview', get_template_directory_uri() . '/js/jquery.aniview.js' );
		wp_enqueue_script( 'magazine-news-aniview' );
				
		wp_enqueue_script( 'magazine-news-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

		wp_enqueue_style( 'magazine-news-fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
		
		wp_enqueue_style( 'seos-shop-genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.4.1' );		
		
		wp_enqueue_script( 'magazine-news-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
		
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
		
		//wp_register_script( 'magazine-news_custom_js', get_template_directory_uri() . '/js/jquery-3.1.1.min.js', dirname(__FILE__));
		//wp_enqueue_script( 'magazine-news_custom_js' );
		
		wp_register_script( 'magazine-news-slick', get_template_directory_uri() . '/slider/js/slick.min.js' );
		wp_enqueue_script( 'magazine-news-slick' );
		
		wp_register_style( 'magazine-news_slider-css1', get_template_directory_uri() . '/slider/slick.css');
		wp_enqueue_style( 'magazine-news_slider-css1');
		
	}
	
	add_action( 'wp_enqueue_scripts', 'magazine_news_scripts' );
	
	require get_template_directory() . '/slider/slider.php' ;	
	require get_stylesheet_directory() . '/inc/customize/slider-customize.php' ;
	
/***********************************************************************************
 * Magazine News Buy
***********************************************************************************/

		function magazine_news_support($wp_customize){
			class magazine_news_Customize extends WP_Customize_Control {
				public function render_content() { ?>
				<div class="magazine_news-info"> 



						<a href="<?php echo esc_url( 'http://seosthemes.info/magazine-news-free-wordpress-theme/' ); ?>" title="<?php esc_attr_e( 'Magazine News Demo', 'magazine-news' ); ?>" target="_blank">
						<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
							<?php _e( 'Magazine News Demo', 'magazine-news' ); ?>
						</a>
				</div>
				<?php
				}
			}
		}
		add_action('customize_register', 'magazine_news_support');

		function customize_styles_magazine_news( $input ) { ?>
			<style type="text/css">
				#customize-theme-controls #accordion-section-magazine_news_buy_section .accordion-section-title,
				#customize-theme-controls #accordion-section-magazine_news_buy_section > .accordion-section-title {
					background: #555555;
					color: #FFFFFF;
				}
				
				.magazine_news-info a {
					color: #0085ba;
					font-style: italic;
					text-decoration: none;
					font-size: 15px;
				}	
				
				.magazine_news-info a:hover {
					opacity: 0.8;
				}	
			</style>
		<?php }
		
		add_action( 'customize_controls_print_styles', 'customize_styles_magazine_news');

		if ( ! function_exists( 'magazine_news_buy' ) ) :
			function magazine_news_buy( $wp_customize ) {
			$wp_customize->add_section( 'magazine_news_buy_section', array(
				'title'			=> __('Magazine News Demo', 'magazine-news'),
				'description'	=> __('	Learn more about Magazine News. ','magazine-news'),
				'priority'		=> 3,
			));
			$wp_customize->add_setting( 'magazine_news_setting_pro', array(
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			));
			$wp_customize->add_control(
				new magazine_news_Customize(
					$wp_customize,'magazine_news_setting_pro', array(
						'label'		=> __('Magazine News Demo', 'magazine-news'),
						'section'	=> 'magazine_news_buy_section',
						'settings'	=> 'magazine_news_setting_pro',
					)
				)
			);
		}
		endif;
		 
		add_action('customize_register', 'magazine_news_buy');
		
/***********************************************************************************
 * Admin Scripts
***********************************************************************************/
	
	function magazine_news_admin_scripts() {	
		wp_enqueue_style( 'magazine-news-fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css' );	
		wp_enqueue_style('magazine-news_admin_styles', get_template_directory_uri() . '/css/admin.css');
			
	}
	add_action( 'admin_enqueue_scripts', 'magazine_news_admin_scripts' );
	
	function mn_magazine_theme_add_editor_styles() {
			add_editor_style( '/editor-style.css' );
		}		
	add_action( 'admin_init', 'mn_magazine_theme_add_editor_styles' );
	
/********************************************************************
* Include.
/********************************************************************/	
	 
	require get_template_directory() . '/inc/extras.php';
	require get_template_directory() . '/inc/customize/customizer.php';
	require get_template_directory() . '/inc/jetpack.php';
	require get_template_directory() . '/inc/customize/custom-header.php';
	require get_template_directory() . '/inc/template-tags.php';
	require get_template_directory() . '/inc/premium-options.php';
	require get_template_directory() . '/inc/kirki/kirki.php' ;
	require get_template_directory() . '/inc/customize/customize-kirki.php' ;	
	require get_template_directory() . '/inc/customize/customize-premium.php' ;	