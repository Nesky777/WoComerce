<?php

add_filter( 'auto_update_plugin', '__return_true' );

function remove_storefront_default_logo() {
remove_action( 'storefront_header', 'storefront_site_branding', 20 );
remove_action( 'storefront_header', 'storefront_product_search', 40 );
remove_action( 'storefront_header', 'storefront_header_cart_price', 60 );
remove_action( 'homepage', 'storefront_homepage_content', 10 );
remove_action( 'storefront_header', 'storefront_primary_navigation', 50 );
}

add_action( 'init', 'remove_storefront_default_logo' );

add_filter( 'storefront_copyright_text', 'bbloomer_edit_storefront_copyright_text' );
 
add_action( 'storefront_header', 'bbloomer_storefront_product_featured_description', 20);
function bbloomer_storefront_product_featured_description(){ 
   echo '<img src="https://cdn.pixabay.com/photo/2021/06/16/16/14/swans-6341698_1280.jpg" alt="essa" width="100">';
}

add_action( 'storefront_header', 'custom_display_links_menu', 20 );

function custom_display_links_menu() {
    echo '<nav class="custom-menu">';
    echo '<ul>';
    echo '<li><a href="' . home_url('/strona-glowna') . '">Strona Główna</a></li>';
    echo '<li><a href="' . home_url('/blog') . '">Blog</a></li>';
    echo '<li><a href="' . home_url('/kontakt') . '">Kontakt</a></li>';
    echo '<li><a href="' . home_url('/moje-konto') . '">Moje konto</a></li>';
    echo '<li><a href="' . home_url('/koszyk') . '">Koszyk</a></li>';
    echo '<li><a href="' . home_url('/sklep') . '">Sklep</a></li>';
    echo '<li><a href="' . home_url('/regulamin') . '">Regulamin</a></li>';
    echo '<li><a href="' . home_url('/zamowienie') . '">Zamówienie</a></li>';
    echo '</ul>';
    echo '</nav>';
}



add_filter( 'storefront_credit_links_output', '__return_empty_string' );

function bbloomer_edit_storefront_copyright_text() {
   $text = 'Copyright 2011-' . date( 'Y' ) . ' by Nesky777';
   return $text;
}


if ( ! function_exists( 'storefront_cart_link' ) ) {
	function storefront_cart_link() {
		if ( ! storefront_woo_cart_available() ) {
			return;
		}
		?>
			<a href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'storefront' ); ?>">
				<?php /* translators: %d: number of items in cart */ ?>
				<span class="count"><?php echo wp_kses_data( sprintf( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'storefront' ), WC()->cart->get_cart_contents_count() ) ); ?></span>
			</a>
		<?php
	}
}

add_action( 'storefront_footer', 'custom_footer_message', 20 );

function custom_footer_message() {
    if ( is_shop() || is_product_category() || is_product() ) {

        echo '<div class="custom-footer-message">';
        echo '<p>Dziękujemy za zakupy w naszym sklepie! Sprawdź nasze nowości.</p>';
        echo '</div>';
    } elseif ( is_page() ) {

        echo '<div class="custom-footer-message">';
        echo '<p>Witamy na naszej stronie! Skontaktuj się z nami w razie pytań.</p>';
        echo '</div>';
    } elseif ( is_single() && get_post_type() === 'post' ) {

        echo '<div class="custom-footer-message">';
        echo '<p>Dziękujemy za przeczytanie wpisu!.</p>';
        echo '</div>';
    }
}


remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );


add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );

add_action( 'after_setup_theme', 'remove_zoom_from_product_image', 100 );

function remove_zoom_from_product_image() {
    remove_theme_support( 'wc-product-gallery-zoom' );
}

add_action( 'woocommerce_email_before_order_table', 'custom_processing_email_message', 10, 4 );

function custom_processing_email_message( $order, $sent_to_admin, $plain_text, $email ) {
    if ( $email->id === 'customer_processing_order' ) {
        echo '<p style="font-size:16px;">Dziękujemy za złożenie zamówienia! Twoje zamówienie jest aktualnie w trakcie realizacji. Otrzymasz kolejną wiadomość, gdy zostanie wysłane.</p>';
    }
}