<?php
/**
 * Internationalization helper.
 *
 * @package     Kirki
 * @category    Core
 * @author      Aristeides Stathopoulos
 * @copyright   Copyright (c) 2016, Aristeides Stathopoulos
 * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
 * @since       1.0
 */

if ( ! class_exists( 'Kirki_l10n' ) ) {

	/**
	 * Handles translations
	 */
	class Kirki_l10n {

		/**
		 * The plugin textdomain
		 *
		 * @access protected
		 * @var string
		 */
		protected $textdomain = 'magazine-news';

		/**
		 * The class constructor.
		 * Adds actions & filters to handle the rest of the methods.
		 *
		 * @access public
		 */
		public function __construct() {

			add_action( 'plugins_loaded', array( $this, 'load_textdomain' ) );

		}

		/**
		 * Load the plugin textdomain
		 *
		 * @access public
		 */
		public function load_textdomain() {

			if ( null !== $this->get_path() ) {
				load_textdomain( $this->textdomain, $this->get_path() );
			}
			load_plugin_textdomain( $this->textdomain, false, Kirki::$path . '/languages' );

		}

		/**
		 * Gets the path to a translation file.
		 *
		 * @access protected
		 * @return string Absolute path to the translation file.
		 */
		protected function get_path() {
			$path_found = false;
			$found_path = null;
			foreach ( $this->get_paths() as $path ) {
				if ( $path_found ) {
					continue;
				}
				$path = wp_normalize_path( $path );
				if ( file_exists( $path ) ) {
					$path_found = true;
					$found_path = $path;
				}
			}

			return $found_path;

		}

		/**
		 * Returns an array of paths where translation files may be located.
		 *
		 * @access protected
		 * @return array
		 */
		protected function get_paths() {

			return array(
				WP_LANG_DIR . '/' . $this->textdomain . '-' . get_locale() . '.mo',
				Kirki::$path . '/languages/' . $this->textdomain . '-' . get_locale() . '.mo',
			);

		}

		/**
		 * Shortcut method to get the translation strings
		 *
		 * @static
		 * @access public
		 * @param string $config_id The config ID. See Kirki_Config.
		 * @return array
		 */
		public static function get_strings( $config_id = 'global' ) {

			$translation_strings = array(
				'background-color'      => esc_attr__( 'Background Color', 'magazine-news' ),
				'background-image'      => esc_attr__( 'Background Image', 'magazine-news' ),
				'no-repeat'             => esc_attr__( 'No Repeat', 'magazine-news' ),
				'repeat-all'            => esc_attr__( 'Repeat All', 'magazine-news' ),
				'repeat-x'              => esc_attr__( 'Repeat Horizontally', 'magazine-news' ),
				'repeat-y'              => esc_attr__( 'Repeat Vertically', 'magazine-news' ),
				'inherit'               => esc_attr__( 'Inherit', 'magazine-news' ),
				'background-repeat'     => esc_attr__( 'Background Repeat', 'magazine-news' ),
				'cover'                 => esc_attr__( 'Cover', 'magazine-news' ),
				'contain'               => esc_attr__( 'Contain', 'magazine-news' ),
				'background-size'       => esc_attr__( 'Background Size', 'magazine-news' ),
				'fixed'                 => esc_attr__( 'Fixed', 'magazine-news' ),
				'scroll'                => esc_attr__( 'Scroll', 'magazine-news' ),
				'background-attachment' => esc_attr__( 'Background Attachment', 'magazine-news' ),
				'left-top'              => esc_attr__( 'Left Top', 'magazine-news' ),
				'left-center'           => esc_attr__( 'Left Center', 'magazine-news' ),
				'left-bottom'           => esc_attr__( 'Left Bottom', 'magazine-news' ),
				'right-top'             => esc_attr__( 'Right Top', 'magazine-news' ),
				'right-center'          => esc_attr__( 'Right Center', 'magazine-news' ),
				'right-bottom'          => esc_attr__( 'Right Bottom', 'magazine-news' ),
				'center-top'            => esc_attr__( 'Center Top', 'magazine-news' ),
				'center-center'         => esc_attr__( 'Center Center', 'magazine-news' ),
				'center-bottom'         => esc_attr__( 'Center Bottom', 'magazine-news' ),
				'background-position'   => esc_attr__( 'Background Position', 'magazine-news' ),
				'background-opacity'    => esc_attr__( 'Background Opacity', 'magazine-news' ),
				'on'                    => esc_attr__( 'ON', 'magazine-news' ),
				'off'                   => esc_attr__( 'OFF', 'magazine-news' ),
				'all'                   => esc_attr__( 'All', 'magazine-news' ),
				'cyrillic'              => esc_attr__( 'Cyrillic', 'magazine-news' ),
				'cyrillic-ext'          => esc_attr__( 'Cyrillic Extended', 'magazine-news' ),
				'devanagari'            => esc_attr__( 'Devanagari', 'magazine-news' ),
				'greek'                 => esc_attr__( 'Greek', 'magazine-news' ),
				'greek-ext'             => esc_attr__( 'Greek Extended', 'magazine-news' ),
				'khmer'                 => esc_attr__( 'Khmer', 'magazine-news' ),
				'latin'                 => esc_attr__( 'Latin', 'magazine-news' ),
				'latin-ext'             => esc_attr__( 'Latin Extended', 'magazine-news' ),
				'vietnamese'            => esc_attr__( 'Vietnamese', 'magazine-news' ),
				'hebrew'                => esc_attr__( 'Hebrew', 'magazine-news' ),
				'arabic'                => esc_attr__( 'Arabic', 'magazine-news' ),
				'bengali'               => esc_attr__( 'Bengali', 'magazine-news' ),
				'gujarati'              => esc_attr__( 'Gujarati', 'magazine-news' ),
				'tamil'                 => esc_attr__( 'Tamil', 'magazine-news' ),
				'telugu'                => esc_attr__( 'Telugu', 'magazine-news' ),
				'thai'                  => esc_attr__( 'Thai', 'magazine-news' ),
				'serif'                 => _x( 'Serif', 'font style', 'magazine-news' ),
				'sans-serif'            => _x( 'Sans Serif', 'font style', 'magazine-news' ),
				'monospace'             => _x( 'Monospace', 'font style', 'magazine-news' ),
				'font-family'           => esc_attr__( 'Font Family', 'magazine-news' ),
				'font-size'             => esc_attr__( 'Font Size', 'magazine-news' ),
				'font-weight'           => esc_attr__( 'Font Weight', 'magazine-news' ),
				'line-height'           => esc_attr__( 'Line Height', 'magazine-news' ),
				'font-style'            => esc_attr__( 'Font Style', 'magazine-news' ),
				'letter-spacing'        => esc_attr__( 'Letter Spacing', 'magazine-news' ),
				'top'                   => esc_attr__( 'Top', 'magazine-news' ),
				'bottom'                => esc_attr__( 'Bottom', 'magazine-news' ),
				'left'                  => esc_attr__( 'Left', 'magazine-news' ),
				'right'                 => esc_attr__( 'Right', 'magazine-news' ),
				'center'                => esc_attr__( 'Center', 'magazine-news' ),
				'justify'               => esc_attr__( 'Justify', 'magazine-news' ),
				'color'                 => esc_attr__( 'Color', 'magazine-news' ),
				'add-image'             => esc_attr__( 'Add Image', 'magazine-news' ),
				'change-image'          => esc_attr__( 'Change Image', 'magazine-news' ),
				'no-image-selected'     => esc_attr__( 'No Image Selected', 'magazine-news' ),
				'add-file'              => esc_attr__( 'Add File', 'magazine-news' ),
				'change-file'           => esc_attr__( 'Change File', 'magazine-news' ),
				'no-file-selected'      => esc_attr__( 'No File Selected', 'magazine-news' ),
				'remove'                => esc_attr__( 'Remove', 'magazine-news' ),
				'select-font-family'    => esc_attr__( 'Select a font-family', 'magazine-news' ),
				'variant'               => esc_attr__( 'Variant', 'magazine-news' ),
				'subsets'               => esc_attr__( 'Subset', 'magazine-news' ),
				'size'                  => esc_attr__( 'Size', 'magazine-news' ),
				'height'                => esc_attr__( 'Height', 'magazine-news' ),
				'spacing'               => esc_attr__( 'Spacing', 'magazine-news' ),
				'ultra-light'           => esc_attr__( 'Ultra-Light 100', 'magazine-news' ),
				'ultra-light-italic'    => esc_attr__( 'Ultra-Light 100 Italic', 'magazine-news' ),
				'light'                 => esc_attr__( 'Light 200', 'magazine-news' ),
				'light-italic'          => esc_attr__( 'Light 200 Italic', 'magazine-news' ),
				'book'                  => esc_attr__( 'Book 300', 'magazine-news' ),
				'book-italic'           => esc_attr__( 'Book 300 Italic', 'magazine-news' ),
				'regular'               => esc_attr__( 'Normal 400', 'magazine-news' ),
				'italic'                => esc_attr__( 'Normal 400 Italic', 'magazine-news' ),
				'medium'                => esc_attr__( 'Medium 500', 'magazine-news' ),
				'medium-italic'         => esc_attr__( 'Medium 500 Italic', 'magazine-news' ),
				'semi-bold'             => esc_attr__( 'Semi-Bold 600', 'magazine-news' ),
				'semi-bold-italic'      => esc_attr__( 'Semi-Bold 600 Italic', 'magazine-news' ),
				'bold'                  => esc_attr__( 'Bold 700', 'magazine-news' ),
				'bold-italic'           => esc_attr__( 'Bold 700 Italic', 'magazine-news' ),
				'extra-bold'            => esc_attr__( 'Extra-Bold 800', 'magazine-news' ),
				'extra-bold-italic'     => esc_attr__( 'Extra-Bold 800 Italic', 'magazine-news' ),
				'ultra-bold'            => esc_attr__( 'Ultra-Bold 900', 'magazine-news' ),
				'ultra-bold-italic'     => esc_attr__( 'Ultra-Bold 900 Italic', 'magazine-news' ),
				'invalid-value'         => esc_attr__( 'Invalid Value', 'magazine-news' ),
				'add-new'           	=> esc_attr__( 'Add new', 'magazine-news' ),
				'row'           		=> esc_attr__( 'row', 'magazine-news' ),
				'limit-rows'            => esc_attr__( 'Limit: %s rows', 'magazine-news' ),
				'open-section'          => esc_attr__( 'Press return or enter to open this section', 'magazine-news' ),
				'back'                  => esc_attr__( 'Back', 'magazine-news' ),
				'reset-with-icon'       => sprintf( esc_attr__( '%s Reset', 'magazine-news' ), '<span class="dashicons dashicons-image-rotate"></span>' ),
				'text-align'            => esc_attr__( 'Text Align', 'magazine-news' ),
				'text-transform'        => esc_attr__( 'Text Transform', 'magazine-news' ),
				'none'                  => esc_attr__( 'None', 'magazine-news' ),
				'capitalize'            => esc_attr__( 'Capitalize', 'magazine-news' ),
				'uppercase'             => esc_attr__( 'Uppercase', 'magazine-news' ),
				'lowercase'             => esc_attr__( 'Lowercase', 'magazine-news' ),
				'initial'               => esc_attr__( 'Initial', 'magazine-news' ),
				'select-page'           => esc_attr__( 'Select a Page', 'magazine-news' ),
				'open-editor'           => esc_attr__( 'Open Editor', 'magazine-news' ),
				'close-editor'          => esc_attr__( 'Close Editor', 'magazine-news' ),
				'switch-editor'         => esc_attr__( 'Switch Editor', 'magazine-news' ),
				'hex-value'             => esc_attr__( 'Hex Value', 'magazine-news' ),
			);

			// Apply global changes from the kirki/config filter.
			// This is generally to be avoided.
			// It is ONLY provided here for backwards-compatibility reasons.
			// Please use the kirki/{$config_id}/l10n filter instead.
			$config = apply_filters( 'kirki/config', array() );
			if ( isset( $config['i18n'] ) ) {
				$translation_strings = wp_parse_args( $config['i18n'], $translation_strings );
			}

			// Apply l10n changes using the kirki/{$config_id}/l10n filter.
			return apply_filters( 'kirki/' . $config_id . '/l10n', $translation_strings );

		}
	}
}
