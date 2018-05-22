<?php

function mn_magazine_slider(){ ?>

	<div class="container-slider">
		
		<div class="autoplay">

			<div>
			
				<a href="<?php echo get_theme_mod( 'slider_url1' ); ?>"><img style=" height: <?php echo get_theme_mod( 'slider_height' ); ?>px;" src="<?php if (get_theme_mod( 'slider_img1' )) {echo get_theme_mod( 'slider_img1' ); } else echo get_template_directory_uri().'/images/screenshot1.png'; ?>" alt="slider_img1"/></a>
				
				<?php if(get_theme_mod( 'slider_text1' )){ ?>
					<h3><a href="<?php echo get_theme_mod( 'slider_url1' ); ?>"><?php echo get_theme_mod( 'slider_text1' ); ?></a></h3>
				<?php } else { ?>
					<h3><a href="<?php echo get_theme_mod( 'slider_url1' ); ?>"><?php echo "Magazine News";  ?></a></h3>
				<?php } ?>
			</div>
			
		</div>

	</div>

	<script>
	$('.autoplay').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed: <?php if(get_theme_mod( 'slider_speed' )) {echo get_theme_mod( 'slider_speed' ); } else {echo "3000";} ?>,
	});
	</script>
	
<?php }?>