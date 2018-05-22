<?php

/***********************************************************************************
 * Magazine News Buy
***********************************************************************************/

		function magazine_news_prmeium_customize($wp_customize){
			class magazine_news_premium_Customize extends WP_Customize_Control {
				public function render_content() { ?>
				<div class="magazine_news-info"> 
						<a class="sv-info" href="<?php echo esc_url( 'https://seosthemes.com/magazine-news/' ); ?>" title="<?php esc_attr_e( 'Magazine News Pro', 'magazine-news' ); ?>" target="_blank">
						<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
						<?php _e( 'Magazine News Pro Customizing', 'magazine-news' ); ?>
						</a>
				</div>
				<?php
				}
			}
		}
		add_action('customize_register', 'magazine_news_prmeium_customize');

		function magazine_news_customize_styles( $input ) { ?>
			<style type="text/css">
				#customize-theme-controls #accordion-section-magazine_news_buy_option_section .accordion-section-title,
				#customize-theme-controls #accordion-section-magazine_news_buy_option_section > .accordion-section-title {
					background: #555555;
					color: #FFFFFF;
				}

				.magazine_news-info a {
					color: #0085ba;
					font-style: italic;
					text-decoration: none;
					font-size: 15px;
				}	
			</style>
		<?php }
		
		add_action( 'customize_controls_print_styles', 'magazine_news_customize_styles');

		if ( ! function_exists( 'magazine_news_buy_option' ) ) :
			function magazine_news_buy_option( $wp_customize ) {
				
				$wp_customize->add_panel( 'magazine_news_buy_option_panel', array(
				'title'			=> __('Magazine News Pro Customizing', 'magazine-news'),
				'description'	=> __('	Learn more about Magazine News. ','magazine-news'),
				'priority'		=> 4,
			));
			

			
						
/***********************************************************************/

		
			$wp_customize->add_section( 'magazine_news_buy_option_section1', array(
				'title'			=> __('Magazine News Slider 🔒', 'magazine-news'),
				'panel'			=> 'magazine_news_buy_option_panel',	
				'description'	=> __('	Learn more about Magazine News. ','magazine-news'),
				'priority'		=> 3,
			));
			$wp_customize->add_setting( 'magazine_news_setting1', array(
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			));
			$wp_customize->add_control(
				new magazine_news_premium_Customize(
					$wp_customize,'magazine_news_setting1', array(
						'label'		=> __('Magazine News Slider', 'magazine-news'),
						'section'	=> 'magazine_news_buy_option_section1',
						'settings'	=> 'magazine_news_setting1',
					)
				)
			);

			
						
						
/***********************************************************************/

		
			$wp_customize->add_section( 'magazine_news_buy_option_section2', array(
				'title'			=> __('Hide All Titles 🔒', 'magazine-news'),
				'panel'			=> 'magazine_news_buy_option_panel',	
				'description'	=> __('	Learn more about Magazine News. ','magazine-news'),
				'priority'		=> 3,
			));
			$wp_customize->add_setting( 'magazine_news_setting2', array(
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			));
			$wp_customize->add_control(
				new magazine_news_premium_Customize(
					$wp_customize,'magazine_news_setting2', array(
						'label'		=> __('Hide All Titles', 'magazine-news'),
						'section'	=> 'magazine_news_buy_option_section2',
						'settings'	=> 'magazine_news_setting2',
					)
				)
			);
								
						
/***********************************************************************/

		
			$wp_customize->add_section( 'magazine_news_buy_option_section3', array(
				'title'			=> __('Read More Button 🔒', 'magazine-news'),
				'panel'			=> 'magazine_news_buy_option_panel',	
				'description'	=> __('	Learn more about Magazine News. ','magazine-news'),
				'priority'		=> 3,
			));
			$wp_customize->add_setting( 'magazine_news_setting3', array(
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			));
			$wp_customize->add_control(
				new magazine_news_premium_Customize(
					$wp_customize,'magazine_news_setting3', array(
						'label'		=> __('Read More Button', 'magazine-news'),
						'section'	=> 'magazine_news_buy_option_section3',
						'settings'	=> 'magazine_news_setting3',
					)
				)
			);
										
						
/***********************************************************************/

		
			$wp_customize->add_section( 'magazine_news_buy_option_section4', array(
				'title'			=> __('Recent News 🔒', 'magazine-news'),
				'panel'			=> 'magazine_news_buy_option_panel',	
				'description'	=> __('	Learn more about Magazine News. ','magazine-news'),
				'priority'		=> 3,
			));
			$wp_customize->add_setting( 'magazine_news_setting4', array(
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			));
			$wp_customize->add_control(
				new magazine_news_premium_Customize(
					$wp_customize,'magazine_news_setting4', array(
						'label'		=> __('Recent News', 'magazine-news'),
						'section'	=> 'magazine_news_buy_option_section4',
						'settings'	=> 'magazine_news_setting4',
					)
				)
			);
								
/***********************************************************************/

		
			$wp_customize->add_section( 'magazine_news_buy_option_section5', array(
				'title'			=> __('Header Logo 🔒', 'magazine-news'),
				'panel'			=> 'magazine_news_buy_option_panel',	
				'description'	=> __('	Learn more about Magazine News. ','magazine-news'),
				'priority'		=> 3,
			));
			$wp_customize->add_setting( 'magazine_news_setting5', array(
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			));
			$wp_customize->add_control(
				new magazine_news_premium_Customize(
					$wp_customize,'magazine_news_setting5', array(
						'label'		=> __('Header Logo', 'magazine-news'),
						'section'	=> 'magazine_news_buy_option_section5',
						'settings'	=> 'magazine_news_setting5',
					)
				)
			);
										
/***********************************************************************/

		
			$wp_customize->add_section( 'magazine_news_buy_option_section6', array(
				'title'			=> __('Custom Main Container 🔒', 'magazine-news'),
				'panel'			=> 'magazine_news_buy_option_panel',	
				'description'	=> __('	Learn more about Magazine News. ','magazine-news'),
				'priority'		=> 3,
			));
			$wp_customize->add_setting( 'magazine_news_setting6', array(
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			));
			$wp_customize->add_control(
				new magazine_news_premium_Customize(
					$wp_customize,'magazine_news_setting6', array(
						'label'		=> __('Custom Main Container', 'magazine-news'),
						'section'	=> 'magazine_news_buy_option_section6',
						'settings'	=> 'magazine_news_setting6',
					)
				)
			);
												
/***********************************************************************/

		
			$wp_customize->add_section( 'magazine_news_buy_option_section7', array(
				'title'			=> __('Social Media 🔒', 'magazine-news'),
				'panel'			=> 'magazine_news_buy_option_panel',	
				'description'	=> __('	Learn more about Magazine News. ','magazine-news'),
				'priority'		=> 3,
			));
			$wp_customize->add_setting( 'magazine_news_setting7', array(
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			));
			$wp_customize->add_control(
				new magazine_news_premium_Customize(
					$wp_customize,'magazine_news_setting7', array(
						'label'		=> __('Social Media', 'magazine-news'),
						'section'	=> 'magazine_news_buy_option_section7',
						'settings'	=> 'magazine_news_setting7',
					)
				)
			);
														
/***********************************************************************/

		
			$wp_customize->add_section( 'magazine_news_buy_option_section8', array(
				'title'			=> __('Footer Options 🔒', 'magazine-news'),
				'panel'			=> 'magazine_news_buy_option_panel',	
				'description'	=> __('	Learn more about Magazine News. ','magazine-news'),
				'priority'		=> 3,
			));
			$wp_customize->add_setting( 'magazine_news_setting8', array(
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			));
			$wp_customize->add_control(
				new magazine_news_premium_Customize(
					$wp_customize,'magazine_news_setting8', array(
						'label'		=> __('Footer Options', 'magazine-news'),
						'section'	=> 'magazine_news_buy_option_section8',
						'settings'	=> 'magazine_news_setting8',
					)
				)
			);
																
/***********************************************************************/

		
			$wp_customize->add_section( 'magazine_news_buy_option_section9', array(
				'title'			=> __('Back to Top 🔒', 'magazine-news'),
				'panel'			=> 'magazine_news_buy_option_panel',	
				'description'	=> __('	Learn more about Magazine News. ','magazine-news'),
				'priority'		=> 3,
			));
			$wp_customize->add_setting( 'magazine_news_setting9', array(
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			));
			$wp_customize->add_control(
				new magazine_news_premium_Customize(
					$wp_customize,'magazine_news_setting9', array(
						'label'		=> __('Back to Top', 'magazine-news'),
						'section'	=> 'magazine_news_buy_option_section9',
						'settings'	=> 'magazine_news_setting9',
					)
				)
			);
																		
/***********************************************************************/

		
			$wp_customize->add_section( 'magazine_news_buy_option_section10', array(
				'title'			=> __('WooCommerce Options 🔒', 'magazine-news'),
				'panel'			=> 'magazine_news_buy_option_panel',	
				'description'	=> __('	Learn more about Magazine News. ','magazine-news'),
				'priority'		=> 3,
			));
			$wp_customize->add_setting( 'magazine_news_setting10', array(
				'capability'		=> 'edit_theme_options',
				'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			));
			$wp_customize->add_control(
				new magazine_news_premium_Customize(
					$wp_customize,'magazine_news_setting10', array(
						'label'		=> __('WooCommerce Options', 'magazine-news'),
						'section'	=> 'magazine_news_buy_option_section10',
						'settings'	=> 'magazine_news_setting10',
					)
				)
			);
		
		}
		endif;
		 
		add_action('customize_register', 'magazine_news_buy_option');
		
		
