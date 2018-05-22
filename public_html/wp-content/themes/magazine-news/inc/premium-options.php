<?php

add_action('admin_menu', 'magazine_news_admin_menu');

function magazine_news_admin_menu() {

global $magazinenews_settings_page;

   $magazinenews_settings_page = add_theme_page('Magazine News', 'Premium Theme ', 'edit_theme_options',  'my-unique-identifier', 'magazine_news_settings_page');

	add_action( 'admin_init', 'register_mysettings' );
}

function register_mysettings() {

}

function magazine_news_settings_page() {
?>
<div class="wrap">

	<form class="theme-options" method="post" action="options.php" accept-charset="ISO-8859-1">
		<?php settings_fields( 'seos-settings-group' ); ?>
		<?php do_settings_sections( 'seos-settings-group' ); ?>
		
		<div class="magazine-news">
			<a target="_blank" href="https://seosthemes.com/magazine-news/">
				<div class="btn s-red">
					 <?php _e('Buy', 'magazine-news'); ?> <img class="ss-logo" src="<?php echo get_template_directory_uri() . '/images/logo.png'; ?>"/><?php _e(' Now', 'magazine-news'); ?>
				</div>
			</a>
		</div>
		
		<div class="cb-center">	
			<img class="sb-demo" src="<?php echo get_template_directory_uri() . '/images/magazine-news.png'; ?>"/>			
		</div>
		
	</form>
	
</div>
<?php } ?>