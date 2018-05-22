<?php 
/*
Template Name: about
Template Post Type: page
*/
get_header(); ?>

<!-- header -->
    <div class="page-heading-area" data-parallax="scroll" data-image-src="<?php bloginfo( 'template_url' ); ?>/img/about-construction-breadcrumb.jpg">
        <div class="container">
            <div class="row">
					<h3 class="text-center"><?php the_title(); ?></h3>
            </div>
        </div>
    </div>
    
    <div class="content-block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>История появления</h2>
                   <?php while (have_posts()): the_post(); ?>
					<p><?php the_content(); ?></p>
				   <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
    
	<div class="container">
		<div class="row">
			<h3 class="text-center">Репортаж</h3><br><br>
				<iframe class="embed-responsive-item" src="<?php echo get_field('видео_(ссылка)'); ?>" width="1280" height="720"></iframe>
		</div>
	</div><br>
    
<!--footer-->

<?php get_footer(); ?>