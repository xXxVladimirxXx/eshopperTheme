<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	
		<div class="footer-center">
		
			<?php if (  is_active_sidebar('footer-1') ) : ?>
				<div class="footer-widgets">
					<?php dynamic_sidebar( 'footer-1' ); ?>
				</div>
			<?php endif; ?>
			
			<?php if (  is_active_sidebar('footer-2') ) : ?>
				<div class="footer-widgets">
					<?php dynamic_sidebar( 'footer-2' ); ?>
				</div>
			<?php endif; ?>
			
			<?php if (  is_active_sidebar('footer-3') ) : ?>
				<div class="footer-widgets">
					<?php dynamic_sidebar( 'footer-3' ); ?>
				</div>
			<?php endif; ?>
			
			<?php if (  is_active_sidebar('footer-4') ) : ?>
				<div class="footer-widgets">
					<?php dynamic_sidebar( 'footer-4' ); ?>
				</div>
			<?php endif; ?>
			
		</div>	
	
		<div class="site-info">
		
				<?php _e('All rights reserved', 'magazine-news'); ?>  &copy; <?php bloginfo('name'); ?>
				
				<a href="http://wordpress.org/" title="<?php esc_attr_e( 'WordPress', 'magazine-news' ); ?>"><?php printf( __( 'Powered by %s', 'magazine-news' ), 'WordPress' ); ?></a>
							
				<a title="<?php _e('Wordpress theme', 'magazine-news'); ?>" href="<?php echo esc_url(__('https://seosthemes.com/', 'magazine-news')); ?>" target="_blank"><?php _e('Theme by SEOS', 'magazine-news'); ?></a>	
				
		</div><!-- .site-info -->
		
	</footer><!-- #colophon -->
	
		<?php if (get_theme_mod( 'mn_phone_number' )) { ?>
			<div class="mcn-footer">
				<a href="tel:[<?php echo esc_attr(get_theme_mod('mn_phone_number')); ?>]">
					<img src="<?php echo get_template_directory_uri() . '/images/phone9.png'; ?>">
				</a>
			</div>
		<?php } ?>
		
</div><!-- #page -->
	
<?php wp_footer(); ?>

</body>
</html>
