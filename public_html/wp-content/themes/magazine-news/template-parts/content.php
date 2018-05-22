<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

?>

<?php if ( is_home() or is_front_page() ) : ?>

<article id="post-<?php the_ID(); ?>"  class="aniview" data-av-animation="bounceInLeft">

<?php else : ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php endif; ?>		
	<?php if ( is_home() or is_front_page() or is_category() or is_archive()) : ?>
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="img-news mn-view mn-img-effect">
				<?php the_post_thumbnail( 'custom-size' ); ?>
				<a href="<?php echo esc_url( get_permalink() ); ?>" class="info">			
					<div class="mn-mask"></div>
					<div class="h-img"></div>
				</a>
			</div>
		<?php endif; ?>
	<?php endif; ?>
	
	<div class="entry-right">
		<header class="entry-header">

			<?php

			if ( 'post' === get_post_type() ) : ?>
			
			<?php 

			if ( is_single() ) {
					the_title( '<h1 class="entry-title">', '</h1>' );
				} else {
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				}
			?>		
			
			<div class="entry-meta">
				<?php mn_magazine_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<?php if ( is_front_page() or is_home() or is_category() or is_archive() ) : ?>
	
			<div class="mn-excerpt"><?php the_excerpt(); ?></div>

		<?php else : ?>
		
		<div class="entry-content">
			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'magazine-news' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'magazine-news' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
		
		<?php endif; ?>
		
	</div>
	
	<footer class="entry-footer">
		<?php mn_magazine_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
