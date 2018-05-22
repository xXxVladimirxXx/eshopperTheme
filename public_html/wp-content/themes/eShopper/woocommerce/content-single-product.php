<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Hook Woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
    echo get_the_password_form(); // WPCS: XSS ok.
    return;
}

//Получаем артикул
global $product;
$sku = $product->get_sku();
?>

	<div class="product-details"><!--product-details-->
		<div class="col-sm-5">
			<div class="view-product">
				<img src="<?php the_post_thumbnail_url('woocommerce_thumbnail');?>" alt="" />
				<h3>ZOOM</h3>
			</div>
			<div id="similar-product" class="carousel slide" data-ride="carousel">

				  <!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
						  <a href=""><img src="<?php bloginfo('template_url'); ?>/assets/images/product-details/similar1.jpg" alt=""></a>
						  <a href=""><img src="<?php bloginfo('template_url'); ?>/assets/images/product-details/similar2.jpg" alt=""></a>
						  <a href=""><img src="<?php bloginfo('template_url'); ?>/assets/images/product-details/similar3.jpg" alt=""></a>
						</div>
						<div class="item">
						  <a href=""><img src="<?php bloginfo('template_url'); ?>/assets/images/product-details/similar1.jpg" alt=""></a>
						  <a href=""><img src="<?php bloginfo('template_url'); ?>/assets/images/product-details/similar2.jpg" alt=""></a>
						  <a href=""><img src="<?php bloginfo('template_url'); ?>/assets/images/product-details/similar3.jpg" alt=""></a>
						</div>
						<div class="item">
						  <a href=""><img src="<?php bloginfo('template_url'); ?>/assets/images/product-details/similar1.jpg" alt=""></a>
						  <a href=""><img src="<?php bloginfo('template_url'); ?>/assets/images/product-details/similar2.jpg" alt=""></a>
						  <a href=""><img src="<?php bloginfo('template_url'); ?>/assets/images/product-details/similar3.jpg" alt=""></a>
						</div>
					</div>
				  <!-- Controls -->
				  <a class="left item-control" href="#similar-product" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				  </a>
				  <a class="right item-control" href="#similar-product" data-slide="next">
					<i class="fa fa-angle-right"></i>
				  </a>
			</div>
		</div>
		<div class="col-sm-7">
			<div class="product-information"><!--/product-information-->
				<h2><?php the_title(); ?></h2>
				<p>Артикул: <?php echo $sku; ?></p>
				<img src="<?php bloginfo('template_url'); ?>/assets/images/product-details/rating.png" alt="" /><br>
				<span>

                  <span>$<?php do_action( 'woocommerce_after_shop_loop_item_title' ); ?></span>
                         <?php do_action( 'woocommerce_single_product_summary' );?>

				</span>
				<p><b>Availability:</b> In Stock</p>
                <p><b>Condition:</b> New</p>
				<p><b>Brand:</b> E-SHOPPER</p>
				<a href=""><img src="<?php bloginfo('template_url'); ?>/assets/images/product-details/share.png" class="share img-responsive"  alt="" /></a>
			</div><!--/product-information-->
		</div>
	</div><!--/product-details-->

	<div class="category-tab shop-details-tab"><!--category-tab-->
		<div class="col-sm-12">
			<ul class="nav nav-tabs">
				<li><a href="#details" data-toggle="tab">Details</a></li>
				<li><a href="#companyprofile" data-toggle="tab">Company Profile</a></li>
				<li><a href="#tag" data-toggle="tab">Tag</a></li>
				<li class="active"><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>
			</ul>
		</div>
        <div class="tab-pane fade active in" id="reviews" >
            <div class="col-sm-12">
                <ul>
                    <li><a href=""><i class="fa fa-clock-o"></i><?php the_time('G:i'); ?></a></li>
                    <li><a href=""><i class="fa fa-calendar-o"></i><?php the_date('j F Y'); ?></a></li>
                </ul>
                <p><?php the_content(); ?></p>
                <p><b>Write Your Review</b></p>

                <form action="#">
                    <span>
                        <input type="text" placeholder="Your Name"/>
                        <input type="email" placeholder="Email Address"/>
                    </span>
                    <textarea name="" ></textarea>
                    <b>Rating: </b> <img src="<?php bloginfo('template_url'); ?>/assets/images/product-details/rating.png" alt="" />
                    <button type="button" class="btn btn-default pull-right">
                        Submit
                    </button>
                </form>
            </div>
        </div>
	</div>

    <div class="recommended_items"><!--recommended_items-->
        <h2 class="title text-center">recommended items</h2>

        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/home/recommend1.jpg" alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/home/recommend2.jpg" alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/home/recommend3.jpg" alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/home/recommend1.jpg" alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/home/recommend2.jpg" alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/home/recommend3.jpg" alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div><!--/recommended_items-->

	
<?php
/**
do_action( 'woocommerce_single_product_summary' );

do_action( 'woocommerce_after_single_product_summary' );

do_action( 'woocommerce_after_single_product' );
**/
?>