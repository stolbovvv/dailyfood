<?php




/*
* Add title attribute to head.
*/

add_theme_support( 'title-tag' );

/*
* Params of images.
*/

add_theme_support( 'post-thumbnails' );

add_image_size( 'testimonial-thumbnail', 140, 140, true );

add_filter( 'wp_calculate_image_srcset_meta', '__return_null' );

/*
* Register menus.
*/

if( function_exists( 'add_theme_support' ) ){
	add_theme_support( 'menus' );
}

if( function_exists( 'register_nav_menus' ) ){
	register_nav_menus(
		array(
		  'header_menu' => 'Header menu',
		)
	);
}

class DailyFood_Header_Nav_Menu extends Walker_Nav_Menu {
	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0){
		global $wp_query;
		
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
 
		$class_names = $value = '';
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;
		$classes[] = 'header__item';

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = ' class="' . esc_attr( $class_names ) . '"';
 
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
		$output .= $indent . '<li' . $id . $value . $class_names .'>';
 
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
 
		$item_output = $args->before;
		$item_output .= '<a'. $attributes .' class="header__link">';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;
 
 		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

class DailyFood_Header_Mobile_Nav_Menu extends Walker_Nav_Menu {
	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0){
		global $wp_query;
		
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
 
		$class_names = $value = '';
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;
		$classes[] = 'header__item-mobile';

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = ' class="' . esc_attr( $class_names ) . '"';
 
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
		$output .= $indent . '<li' . $id . $value . $class_names .'>';
 
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
 
		$item_output = $args->before;
		$item_output .= '<a'. $attributes .' class="header__link-mobile">';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;
 
 		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

/**
 * Include customizer.
 */

require get_template_directory() . '/inc/customizer.php';

/**
 * Template tags.
 */

require get_template_directory() . '/inc/template-tags.php';

function dailyfood_remove_network_menu_data(){
	remove_submenu_page( 'sites.php', 'site-new.php' );
	
	echo '<style>
    #network_dashboard_right_now .create-site,
	.sites-php .page-title-action {
        display: none;
    }
	</style>';
}


add_filter( 'woocommerce_cart_item_permalink', '__return_null' );


// шорткод [product_price id="ID_product" old_price="no/yes"]
// id - обязательный атрибут ID товара
// old_price - "no" (по умолчанию) : не выводить старую цену, "yes" : выводить старую перечеркнутую цену
function price_shortcode_callback( $atts ) {
    $atts = shortcode_atts( array(
        'id' => null,
        'old_price' => "no"
    ), $atts, 'bartag' );

    $html = '';

    if( intval( $atts['id'] ) > 0 && function_exists( 'wc_get_product' ) ){
         $_product = wc_get_product( $atts['id'] );
         if ($atts['old_price'] == 'yes')
             $html = $_product->get_price_html();
         else
             $html = wc_price($_product->get_price());
    }
    return $html;
}
add_shortcode( 'product_price', 'price_shortcode_callback' );

