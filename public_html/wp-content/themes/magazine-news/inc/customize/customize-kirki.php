<?php if( ! defined( 'ABSPATH' ) ) exit;
/**
 * Update Kirki Path's
 *
 * @since 1.2.0
 */
function mytheme_kirki_configuration() {
    return array( 'url_path'     => get_template_directory_uri() . '/inc/kirki/' );
}
add_filter( 'kirki/config', 'mytheme_kirki_configuration' );


Kirki::add_panel( 'magazine_news_panel', array(
    'priority'    => 1,
    'title'       => __( 'Free Options', 'magazine-news' ),
    'description' => __( 'Free Kirki Options', 'magazine-news' ),
) );

/***********************************************
Custom CSS
************************************************/

Kirki::add_section( 'magazine_news_kirki_section', array(
    'title'          => __( 'Custom CSS', 'magazine-news' ),
    'description'    => __( 'Add custom CSS here', 'magazine-news' ),
    'panel'          => 'magazine_news_panel', // Not typically needed.
    'priority'       => 1,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_config( 'mn_kirki_css', array(
	'capability'	=> 'edit_theme_options'
) );
	
Kirki::add_field( 'mn_kirki_css', array(
	'type'        => 'code',
	'settings'    => 'mn_kirki_css',
	'label'       => __( 'Code Control', 'magazine-news' ),
	'section'     => 'magazine_news_kirki_section',
	'default'     => '',
	'priority'    => 1,
	'choices'     => array(
		'language' => 'css',
		'theme'    => 'monokai',
		'height'   => 250,
	),
) );


/***********************************************
Disable All Comments
************************************************/

Kirki::add_section( 'magazine_news_kirki_section1', array(
    'title'          => __( 'Disable All Comments', 'magazine-news' ),
    'panel'          => 'magazine_news_panel', // Not typically needed.
    'priority'       => 2,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_config( 'mn_setting1', array(
	'capability'	=> 'edit_theme_options'
) );
	
Kirki::add_field( 'mn_setting1', array(
	'type'        => 'switch',
	'settings'    => 'mn_setting1',
	'label'       => __( 'Hide All Comments', 'magazine-news' ),
	'section'     => 'magazine_news_kirki_section1',
	'default'     => '',
	'priority'    => 2,
	'choices'     => array(
		'on'  => esc_attr__( 'on', 'magazine-news' ),
		'off' => esc_attr__( 'off', 'magazine-news' ),
	),
) );

Kirki::add_config( 'mn_setting2', array(
	'capability'	=> 'edit_theme_options'
) );


Kirki::add_field( 'mn_setting2', array(
	'type'        => 'switch',
	'settings'    => 'mn_setting2',
	'label'       => __( 'Hide existing comments', 'magazine-news' ),
	'section'     => 'magazine_news_kirki_section1',
	'default'     => '',
	'priority'    => 2,
	'choices'     => array(
		'on'  => esc_attr__( 'on', 'magazine-news' ),
		'off' => esc_attr__( 'off', 'magazine-news' ),
	),
) );

Kirki::add_config( 'mn_setting3', array(
	'capability'	=> 'edit_theme_options'
) );

Kirki::add_field( 'mn_setting3', array(
	'type'        => 'switch',
	'settings'    => 'mn_setting3',
	'label'       => __( 'Remove comments page from the menu', 'magazine-news' ),
	'section'     => 'magazine_news_kirki_section1',
	'default'     => '',
	'priority'    => 2,
	'choices'     => array(
		'on'  => esc_attr__( 'on', 'magazine-news' ),
		'off' => esc_attr__( 'off', 'magazine-news' ),
	),
) );



/***********************************************
Sidebar Animations
************************************************/
Kirki::add_section( 'magazine_news_kirki_section2', array(
    'title'          => __( 'Sidebar Animations', 'magazine-news' ),
    'panel'          => 'magazine_news_panel', // Not typically needed.
    'priority'       => 3,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_config( 'sidebar_animations', array(
	'capability'	=> 'edit_theme_options'
) );

Kirki::add_field( 'sidebar_animations', array(
	'type'        => 'select',
	'settings'    => 'sidebar_animations',
	'label'       => __( 'Select Animation', 'magazine-news' ),
	'section'     => 'magazine_news_kirki_section2',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
	    '1' => esc_attr__( 'None', 'magazine-news' ),
	    'fadeIn' => esc_attr__( 'fadeIn', 'magazine-news' ),
		'flipInX' => esc_attr__( 'flipInX', 'magazine-news' ),
		'bounce' => esc_attr__( 'bounce', 'magazine-news' ),
		'bounceIn' => esc_attr__( 'bounceIn', 'magazine-news' ),
		'bounceInDown' => esc_attr__( 'bounceInDown', 'magazine-news' ),
		'bounceInLeft' => esc_attr__( 'bounceInLeft', 'magazine-news' ),
		'bounceInRight' => esc_attr__( 'bounceInRight', 'magazine-news' ),
		'bounceInUp' => esc_attr__( 'bounceInUp', 'magazine-news' ),
		'fadeInDownBig' => esc_attr__( 'fadeInDownBig', 'magazine-news' ),
		'fadeInLeft' => esc_attr__( 'fadeInLeft', 'magazine-news' ),
		'fadeInLeftBig' => esc_attr__( 'fadeInLeftBig', 'magazine-news' ),
		'fadeInRight' => esc_attr__( 'fadeInRight', 'magazine-news' ),
		'fadeInRightBig' => esc_attr__( 'fadeInRightBig', 'magazine-news' ),
		'fadeInUp' => esc_attr__( 'fadeInUp', 'magazine-news' ),
		'fadeInUpBig' => esc_attr__( 'fadeInUpBig', 'magazine-news' ),
		'flash' => esc_attr__( 'flash', 'magazine-news' ),
		'flip' => esc_attr__( 'flip', 'magazine-news' ),
		'flipInY' => esc_attr__( 'flipInY', 'magazine-news' ),
		'headShake' => esc_attr__( 'headShake', 'magazine-news' ),
		'hinge' => esc_attr__( 'hinge', 'magazine-news' ),
		'jello' => esc_attr__( 'jello', 'magazine-news' ),
		'lightSpeedIn' => esc_attr__( 'lightSpeedIn', 'magazine-news' ),
		'pulse' => esc_attr__( 'pulse', 'magazine-news' ),
		'rollIn' => esc_attr__( 'rollIn', 'magazine-news' ),
		'rotateIn' => esc_attr__( 'rotateIn', 'magazine-news' ),
		'rotateInDownLeft' => esc_attr__( 'rotateInDownLeft', 'magazine-news' ),
		'rotateInDownRight' => esc_attr__( 'rotateInDownRight', 'magazine-news' ),
		'rotateInUpLeft' => esc_attr__( 'rotateInUpLeft', 'magazine-news' ),
		'rotateInUpRight' => esc_attr__( 'rotateInUpRight', 'magazine-news' ),
		'shake' => esc_attr__( 'shake', 'magazine-news' ),
		'slideInDown' => esc_attr__( 'slideInDown', 'magazine-news' ),
		'slideInLeft' => esc_attr__( 'slideInLeft', 'magazine-news' ),
		'slideInRight' => esc_attr__( 'slideInRight', 'magazine-news' ),
		'slideInUp' => esc_attr__( 'slideInUp', 'magazine-news' ),
		'swing' => esc_attr__( 'swing', 'magazine-news' ),
		'tada' => esc_attr__( 'tada', 'magazine-news' ),
		'wobble' => esc_attr__( 'wobble', 'magazine-news' ),
		'zoomIn' => esc_attr__( 'zoomIn', 'magazine-news' ),
		'zoomInDown' => esc_attr__( 'zoomInDown', 'magazine-news' ),
		'zoomInLeft' => esc_attr__( 'zoomInLeft', 'magazine-news' ),
		'zoomInRight' => esc_attr__( 'zoomInRight', 'magazine-news' ),
		'zoomInUp' => esc_attr__( 'zoomInUp', 'magazine-news' ),
	),
		'default'     => 'bounceInRight',
) );

/***********************************************
All Google Fonts
************************************************/
Kirki::add_section( 'magazine_news_kirki_section4', array(
    'title'          => __( 'All Google Fonts', 'magazine-news' ),
    'description'    => __( 'Copy and Paste the Font Name','magazine-news' ),
    'panel'          => 'magazine_news_panel', // Not typically needed.
    'priority'       => 3,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_config( 'mn_google_font_h7', array(
	'capability'	=> 'edit_theme_options'
) );

Kirki::add_field( 'mn_google_font_h7', array(
	'type'     => 'text',
	'settings' => 'mn_google_font_h7',
	'label'    => __( 'Site Title', 'magazine-news' ). ' <a target="_blank" href="https://fonts.google.com/">Copy the font name</a>',
	'section'  => 'magazine_news_kirki_section4',
	'priority' => 1,
) );


Kirki::add_config( 'mn_google_font_h1', array(
	'capability'	=> 'edit_theme_options'
) );

Kirki::add_field( 'mn_google_font_h1', array(
	'type'     => 'text',
	'settings' => 'mn_google_font_h1',
	'label'    => __( 'H1 Element', 'magazine-news' ) . ' <a target="_blank" href="https://fonts.google.com/">Copy the font name</a>',
	'section'  => 'magazine_news_kirki_section4',
	'priority' => 1,
) );

Kirki::add_config( 'mn_google_font_h2', array(
	'capability'	=> 'edit_theme_options'
) );

Kirki::add_field( 'mn_google_font_h2', array(
	'type'     => 'text',
	'settings' => 'mn_google_font_h2',
	'label'    => __( 'H2 Element', 'magazine-news' ). ' <a target="_blank" href="https://fonts.google.com/">Copy the font name</a>',
	'section'  => 'magazine_news_kirki_section4',
	'priority' => 2,
) );

Kirki::add_config( 'mn_google_font_h3', array(
	'capability'	=> 'edit_theme_options'
) );

Kirki::add_field( 'mn_google_font_h3', array(
	'type'     => 'text',
	'settings' => 'mn_google_font_h3',
	'label'    => __( 'H3 Element', 'magazine-news' ). ' <a target="_blank" href="https://fonts.google.com/">Copy the font name</a>',
	'section'  => 'magazine_news_kirki_section4',
	'priority' => 3,
) );

Kirki::add_config( 'mn_google_font_h4', array(
	'capability'	=> 'edit_theme_options'
) );

Kirki::add_field( 'mn_google_font_h4', array(
	'type'     => 'text',
	'settings' => 'mn_google_font_h4',
	'label'    => __( 'H4 Element', 'magazine-news' ). ' <a target="_blank" href="https://fonts.google.com/">Copy the font name</a>',
	'section'  => 'magazine_news_kirki_section4',
	'priority' => 4,
) );

Kirki::add_config( 'mn_google_font_h5', array(
	'capability'	=> 'edit_theme_options'
) );

Kirki::add_field( 'mn_google_font_h5', array(
	'type'     => 'text',
	'settings' => 'mn_google_font_h5',
	'label'    => __( 'H5 Element', 'magazine-news' ). ' <a target="_blank" href="https://fonts.google.com/">Copy the font name</a>',
	'section'  => 'magazine_news_kirki_section4',
	'priority' => 5,
) );

Kirki::add_config( 'mn_google_font_h6', array(
	'capability'	=> 'edit_theme_options'
) );

Kirki::add_field( 'mn_google_font_h6', array(
	'type'     => 'text',
	'settings' => 'mn_google_font_h6',
	'label'    => __( 'H6 Element', 'magazine-news' ). ' <a target="_blank" href="https://fonts.google.com/">Copy the font name</a>',
	'section'  => 'magazine_news_kirki_section4',
	'priority' => 6,
) );

/***********************************************
Mobile Call Now
************************************************/

Kirki::add_section( 'magazine_news_kirki_section5', array(
    'title'          => __( 'Mobile Call Now', 'magazine-news' ),
    'description'    => __( 'Mobile Call Now option places a Call Now button to the bottom of the screen which is only visible for your mobile visitors.', 'magazine-news' ),
    'panel'          => 'magazine_news_panel', // Not typically needed.
    'priority'       => 3,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_config( 'mn_phone_number', array(
	'capability'	=> 'edit_theme_options'
) );

Kirki::add_field( 'mn_phone_number', array(
	'type'     => 'text',
	'settings' => 'mn_phone_number',
	'label'    => __( 'Phone Number', 'magazine-news' ),
	'section'  => 'magazine_news_kirki_section5',
	'priority' => 10,
) );


/***********************************************
Read More Button Options
************************************************/

Kirki::add_section( 'magazine_news_kirki_section6', array(
    'title'          => __( 'Read More Button', 'magazine-news' ),
    'panel'          => 'magazine_news_panel', // Not typically needed.
    'priority'       => 11,
    'capability'     => 'edit_theme_options',
    'theme_supports' => ' ', // Rarely needed.
) );

Kirki::add_config( 'mn_read_more_activate', array(
	'capability'	=> 'edit_theme_options'
) );
	
Kirki::add_field( 'mn_read_more_activate', array(
	'type'        => 'switch',
	'settings'    => 'mn_read_more_activate',
	'label'       => __( 'Activate Read more Button', 'magazine-news' ),
	'section'     => 'magazine_news_kirki_section6',
	'default'     => 1,
	'priority'    => 11,
	'choices'     => array(
		'on'  => esc_attr__( 'on', 'magazine-news' ),
		'off' => esc_attr__( 'off', 'magazine-news' ),
	),
) );

Kirki::add_config( 'mn_read_more_text', array(
	'capability'	=> 'edit_theme_options'
) );

Kirki::add_field( 'mn_read_more_text', array(
	'type'     => 'text',
	'settings' => 'mn_read_more_text',
	'label'    => __( 'Read More Text', 'magazine-news' ),
	'section'  => 'magazine_news_kirki_section6',
	'default'  => esc_attr__( 'Read More', 'magazine-news' ),
	'priority' => 12,
) );

Kirki::add_config( 'mn_read_more_lenght', array(
	'capability'	=> 'edit_theme_options'
) );

Kirki::add_field( 'mn_read_more_lenght', array(
	'type'        => 'number',
	'priority'    => 13,	
	'settings'    => 'mn_read_more_lenght',
	'label'       => esc_attr__( 'Read More Length', 'magazine-news' ),
	'section'     => 'magazine_news_kirki_section6',
	'default'     => 42,
	'choices'     => array(
		'min'  => 10,
		'max'  => 500,
		'step' => 1,
	),
) );


/***********************************************************
* Just hide all comments
***********************************************************/

	if (get_theme_mod('mn_setting1')) {
		function disable_all_comments_1 () {
			echo "<style> #comments { display: none !important; }</style>";
		}
		add_action('wp_head','disable_all_comments_1');	
	}
	
/***********************************************************
* Hide existing comments
***********************************************************/


	if (get_theme_mod( 'mn_setting2' )) {
		function disable_all_comments_hide_existing_comments($comments) {
			$comments = array();
			return $comments;
		}
		add_filter('comments_array', 'disable_all_comments_hide_existing_comments', 10, 2);
    }

/***********************************************************
* Remove comments page in menu
***********************************************************/

	if (get_theme_mod( 'mn_setting3' )) {
		function disable_all_comments_admin_menu() {
			remove_menu_page('edit-comments.php');
		}
		add_action('admin_menu', 'disable_all_comments_admin_menu');
	}
	
/*********************************************************************************************************
* Aside Animations
**********************************************************************************************************/

	function mn_animation_sidebar () {
		$bounceInRight = "bounceInRight";
		if (get_theme_mod("sidebar_animations") != "" ) {
			return get_theme_mod("sidebar_animations"); 
		}
		else { 
			return $bounceInRight;
		}
	}
	
/*********************************************************************************************************
* Excerpt
**********************************************************************************************************/

		function mn_magazine_excerpt_more( $more ) {
			return ' <br /><br /><br /><a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . mn_return_read_more_text (). '</a>';
		}
			add_filter( 'excerpt_more', 'mn_magazine_excerpt_more' );

		function custom_excerpt_length( $length ) {
			 return 25;
		}
		add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
	
	
	function mn_return_read_more_text () {
			return "Read More";	
	}
	
/*********************************************************************************************************
* Custom Google Fonts
**********************************************************************************************************/
	
    if( get_theme_mod('mn_google_font_h1') ) {
	
	function custom_google_fonts_styles_method1() {
	
		wp_enqueue_style('custom_google_fonts_font1', 'https://fonts.googleapis.com/css?family=' . esc_attr(get_theme_mod( 'mn_google_font_h1')));

        wp_enqueue_style(
		
		'custom_google_fonts_style1', get_template_directory_uri() . '/css/mn-google.css');
				
        $mn_font = get_theme_mod( 'mn_google_font_h1' );
		
        $mn_custom_css = "h1 {font-family: '{$mn_font}', sans-serif !important;}";
		
        wp_add_inline_style( 'custom_google_fonts_style1', $mn_custom_css );
	}
	
	add_action( 'wp_enqueue_scripts', 'custom_google_fonts_styles_method1' );
		
 	}

	/**********************************************************************************************************/

    if( get_theme_mod('mn_google_font_h2') ) {
	
	function custom_google_fonts_styles_method2() {
	
		wp_enqueue_style('custom_google_fonts_font2', 'https://fonts.googleapis.com/css?family=' . esc_attr(get_theme_mod( 'mn_google_font_h2')));

        wp_enqueue_style(
		
		'custom_google_fonts_style2', get_template_directory_uri() . '/css/mn-google.css');
				
        $mn_font = get_theme_mod( 'mn_google_font_h2' );
		
        $mn_custom_css = "h2, h2 a {font-family: '{$mn_font}', sans-serif !important;}";
		
        wp_add_inline_style( 'custom_google_fonts_style2', $mn_custom_css );
	}
	
	add_action( 'wp_enqueue_scripts', 'custom_google_fonts_styles_method2' );
		
 	}
	
	/**********************************************************************************************************/

    if( get_theme_mod('mn_google_font_h3') ) {
	
	function custom_google_fonts_styles_method3() {
	
		wp_enqueue_style('custom_google_fonts_font3', 'https://fonts.googleapis.com/css?family=' . esc_attr(get_theme_mod( 'mn_google_font_h3')));

        wp_enqueue_style(
		
		'custom_google_fonts_style3', get_template_directory_uri() . '/css/mn-google.css');
				
        $mn_font = get_theme_mod( 'mn_google_font_h3' );
		
        $mn_custom_css = "h3, h3 a {font-family: '{$mn_font}', sans-serif !important;}";
		
        wp_add_inline_style( 'custom_google_fonts_style3', $mn_custom_css );
	}
	
	add_action( 'wp_enqueue_scripts', 'custom_google_fonts_styles_method3' );
		
 	}	
	
	/**********************************************************************************************************/

    if( get_theme_mod('mn_google_font_h4') ) {
	
	function custom_google_fonts_styles_method4() {
	
		wp_enqueue_style('custom_google_fonts_font4', 'https://fonts.googleapis.com/css?family=' . esc_attr(get_theme_mod( 'mn_google_font_h4')));

        wp_enqueue_style(
		
		'custom_google_fonts_style4', get_template_directory_uri() . '/css/mn-google.css');
				
        $mn_font = get_theme_mod( 'mn_google_font_h4' );
		
        $mn_custom_css = "h4, h4 a {font-family: '{$mn_font}', sans-serif !important;}";
		
        wp_add_inline_style( 'custom_google_fonts_style4', $mn_custom_css );
	}
	
	add_action( 'wp_enqueue_scripts', 'custom_google_fonts_styles_method4' );
		
 	}	
	
	/**********************************************************************************************************/

    if( get_theme_mod('mn_google_font_h5') ) {
	
	function custom_google_fonts_styles_method5() {
	
		wp_enqueue_style('custom_google_fonts_font5', 'https://fonts.googleapis.com/css?family=' . esc_attr(get_theme_mod( 'mn_google_font_h5')));

        wp_enqueue_style(
		
		'custom_google_fonts_style5', get_template_directory_uri() . '/css/mn-google.css');
				
        $mn_font = get_theme_mod( 'mn_google_font_h5' );
		
        $mn_custom_css = "h5, h5 a {font-family: '{$mn_font}', sans-serif !important;}";
		
        wp_add_inline_style( 'custom_google_fonts_style5', $mn_custom_css );
	}
	
	add_action( 'wp_enqueue_scripts', 'custom_google_fonts_styles_method5' );
		
 	}
	
	/**********************************************************************************************************/

    if( get_theme_mod('mn_google_font_h6') ) {
	
	function custom_google_fonts_styles_method6() {
	
		wp_enqueue_style('custom_google_fonts_font6', 'https://fonts.googleapis.com/css?family=' . esc_attr(get_theme_mod( 'mn_google_font_h6')));

        wp_enqueue_style(
		
		'custom_google_fonts_style6', get_template_directory_uri() . '/css/mn-google.css');
				
        $mn_font = get_theme_mod( 'mn_google_font_h6' );
		
        $mn_custom_css = "h6, h6 a {font-family: '{$mn_font}', sans-serif !important;}";
		
        wp_add_inline_style( 'custom_google_fonts_style6', $mn_custom_css );
	}
	
	add_action( 'wp_enqueue_scripts', 'custom_google_fonts_styles_method6' );
		
 	}	

	/**********************************************************************************************************/

    if( get_theme_mod('mn_google_font_h7') ) {
	
	function custom_google_fonts_styles_method7() {
	
		wp_enqueue_style('custom_google_fonts_font7', 'https://fonts.googleapis.com/css?family=' . esc_attr(get_theme_mod( 'mn_google_font_h7')));

        wp_enqueue_style(
		
		'custom_google_fonts_style7', get_template_directory_uri() . '/css/mn-google.css');
				
        $mn_font = get_theme_mod( 'mn_google_font_h7' );
		
        $mn_custom_css = ".site-title a {font-family: '{$mn_font}', sans-serif !important;}";
		
        wp_add_inline_style( 'custom_google_fonts_style7', $mn_custom_css );
	}
	
	add_action( 'wp_enqueue_scripts', 'custom_google_fonts_styles_method7' );
		
 	}	
	
/*****************************************************
Activation
*****************************************************/
	if (get_theme_mod( 'mn_phone_number' )) {
		function mn_mobile_calL_now_activation() {

			echo "
			<style>
		
				.mcn-footer {
						display: none;
					}
					
					@media screen and (max-width: 480px) {

					.mcn-footer {
						position: fixed;
						bottom: 0;
						text-align: center;
						margin: 0 auto;
						width: 100%;
						padding: 20px 0 20px 0;
						z-index: 999999;
						background: red;
						display: block;
						font-size: 30px;

					}

					.mcn-footer  img {
						color: #fff;
						margin: 0 auto;
						width: 50px !important;
						text-align: center;
					}
				
				}
				
			</style>";
		}

		add_action('wp_head','mn_mobile_calL_now_activation');
	}
	
/*****************************************************
Kirki Custom CSS
*****************************************************/

if (get_theme_mod('mn_kirki_css')) {
	
	function mn_kirki_custom_css () { ?>

		<style>
			<?php echo esc_attr(get_theme_mod('mn_kirki_css')); ?>
		</style>

	<?php }

	add_action('wp_head','mn_kirki_custom_css');
}
