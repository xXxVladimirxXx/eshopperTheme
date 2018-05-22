<?php /*
Template Name: cart
Template Post Type: page
*/
get_header(); ?>

    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="<?php bloginfo('url'); ?>">Главная</a></li>
                    <li class="active">Корзина</li>
                </ol>
            </div>
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                    <tr class="cart_menu">
                        <td class="image">Информация</td>
                        <td class="description"></td>
                        <td class="price">Цена</td>
                        <td class="quantity">Количество</td>
                        <td class="total">Сумма</td>
                        <td></td>
                    </tr>
                    </thead>
                        <tbody>
                        <?php do_action( 'woocommerce_before_cart_contents' ); ?>

                        <?php
                        foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                            $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                            $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

                            if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                                $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
                                ?>
                                <tr class="product">
                                    <td class="cart_product">

                                        <?php
                                        /*
                                         * Выводим изображение
                                         */
                                        $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

                                        if ( ! $product_permalink ) {
                                            echo $thumbnail;
                                        } else {
                                            printf( '<a class="product-thumbnail" href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail );
                                        }
                                        ?>
                                    </td>

                                    <td class="cart_description">
                                        <h4>
                                        <?php
                                        /*
                                         * Выводим название товара и его артикул
                                         */
                                        if ( ! $product_permalink ) {
                                            echo apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;</h4>';
                                            echo apply_filters( 'woocommerce_cart_item_name', $_product->get_sku(), $cart_item, $cart_item_key ) . '&nbsp;';
                                        } else {
                                            echo apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a></h4>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key );
                                            echo apply_filters( 'woocommerce_cart_item_name', sprintf( '<p> Артикул: <a href="%s">%s</a> </p>', esc_url( $product_permalink ), $_product->get_sku() ), $cart_item, $cart_item_key );
                                        }

                                        // Meta data.
                                        echo wc_get_formatted_cart_item_data( $cart_item );

                                        // Backorder notification.
                                        if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
                                            echo '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>';
                                        }
                                        ?>
                                    </td>

                                    <td class="cart_price" data-title="<?php esc_attr_e( 'Price', 'woocommerce' ); ?>">
                                        <p> <?php echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); ?> </p>
                                    </td>

                                    <td class="cart_quantity" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
                                        <div class="cart_quantity_button">
                                            <?php
                                            if ( $_product->is_sold_individually() ) {
                                                $product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
                                            } else {
                                                $product_quantity = woocommerce_quantity_input( array(
                                                    'input_name'    => "cart[{$cart_item_key}][qty]",
                                                    'input_value'   => $cart_item['quantity'],
                                                    'max_value'     => $_product->get_max_purchase_quantity(),
                                                    'min_value'     => '0',
                                                    'product_name'  => $_product->get_name(),
                                                ), $_product, false );
                                            }

                                            echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item );
                                            ?>
                                        </div>
                                    </td>

                                    <td class="cart_total" data-title="<?php esc_attr_e( 'Total', 'woocommerce' ); ?>">
                                        <p style="color: #FE980F; font-size: 24px;" >
                                            <?php
                                              echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key );
                                            ?>
                                        </p>
                                    </td>
                                    <td class="cart_delete">
                                        <?php
                                        /*
                                         * Удаляем из корзины
                                         */

                                        // @codingStandardsIgnoreLine
                                        echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
                                            '<a href="%s" class="cart_quantity_delete" aria-label="%s" data-product_id="%s" data-product_sku="%s"><i class="fa fa-times"></i></a>',
                                            esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                                            __( 'Remove this item', 'woocommerce' ),
                                            esc_attr( $product_id ),
                                            esc_attr( $_product->get_sku() )
                                        ), $cart_item_key );
                                        ?>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section> <!--/#cart_items-->

    <section id="do_action">
        <div class="container">
            <div class="heading">
                <h3>What would you like to do next?</h3>
                <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="chose_area">
                        <ul class="user_option">
                            <li>
                                <input type="checkbox">
                                <label>Use Coupon Code</label>
                            </li>
                            <li>
                                <input type="checkbox">
                                <label>Use Gift Voucher</label>
                            </li>
                            <li>
                                <input type="checkbox">
                                <label>Estimate Shipping & Taxes</label>
                            </li>
                        </ul>
                        <ul class="user_info">
                            <li class="single_field">
                                <label>Country:</label>
                                <select>
                                    <option>United States</option>
                                    <option>Bangladesh</option>
                                    <option>UK</option>
                                    <option>India</option>
                                    <option>Pakistan</option>
                                    <option>Ucrane</option>
                                    <option>Canada</option>
                                    <option>Dubai</option>
                                </select>

                            </li>
                            <li class="single_field">
                                <label>Region / State:</label>
                                <select>
                                    <option>Select</option>
                                    <option>Dhaka</option>
                                    <option>London</option>
                                    <option>Dillih</option>
                                    <option>Lahore</option>
                                    <option>Alaska</option>
                                    <option>Canada</option>
                                    <option>Dubai</option>
                                </select>

                            </li>
                            <li class="single_field zip-field">
                                <label>Zip Code:</label>
                                <input type="text">
                            </li>
                        </ul>
                        <a class="btn btn-default update" href="">Get Quotes</a>
                        <a class="btn btn-default check_out" href="">Continue</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="total_area">
                        <ul>
                            <?php do_action( 'woocommerce_cart_collaterals' ); ?>
                        </ul>
                        <a class="btn btn-default update" href="">Update</a>
                        <a class="btn btn-default check_out" href="">Check Out</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#do_action-->

<?php get_footer(); ?>