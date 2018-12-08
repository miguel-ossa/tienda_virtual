<?php
//remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
//remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
//add_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 1);

// function carolinaspa_cambiar_agregar_carrito() {
//     return 'Contratar Servicio';
// }
// add_filter('woocommerce_product_add_to_cart_text', 'carolinaspa_cambiar_agregar_carrito');
// add_filter('woocommerce_product_single_add_to_cart_text', 'carolinaspa_cambiar_agregar_carrito');

function carolinaspa_admin_estilos() {
    wp_enqueue_style('admin-estilos', get_stylesheet_directory_uri() . '/login/login.css');
}
add_action('login_enqueue_scripts', 'carolinaspa_admin_estilos');

function carolinaspa_redireccionar_admin() {
    return home_url();
}
add_filter('login_headerurl', 'carolinaspa_redireccionar_admin');

// Productos por página
add_filter('loop_shop_per_page', 'carolinaspa_productos_por_pagina', 20);

function carolinaspa_productos_por_pagina( $products) {
    $products = 8;
    return $products;
}

// Columnas por página
add_filter('loop_shop_columns', 'carolinaspa_columnas', 20);
function carolinaspa_columnas($columnas) {
    return 4;
}

// Añadir los iconos de social media
add_action( 'wp_enqueue_scripts', 'storefront_social_icons_enqueue_fab' );
function storefront_social_icons_enqueue_fab() {
	wp_enqueue_style( 'font-awesome-5-brands', '//use.fontawesome.com/releases/v5.0.13/css/brands.css' );
}

// Cambiar a Pesos Mexicanos (MXN)
/*
add_filter('woocommerce_currency_symbol', 'carolinaspa_mxn', 10, 2);

function carolinaspa_mxn($simbolo, $moneda) {
    $simbolo = 'MXN $';
    return $simbolo;
}
*/

/*** Modificar los créditos del footer ***/

function carolinaspa_creditos() {
    remove_action('storefront_footer', 'storefront_credit', 20 );
    add_action('storefront_after_footer', 'carolinaspa_nuevo_footer', 20);
}
add_action('init', 'carolinaspa_creditos');

function carolinaspa_nuevo_footer() {
    echo "<div class='reservados'>";
    echo 'Derechos reservados &copy; ' . get_bloginfo('name') . " " . get_the_date('Y');
    echo "</div>";
}

/*** Agregar imagen al homepage ***/

//  function carolinaspa_descuento() {
//      $imagen = '<div class="destacada">';
//      $imagen .= '<img src="' . get_stylesheet_directory_uri() . '/img/cupon.jpg">';
//      $imagen .= '</div>';

//      echo $imagen;
//  }
//  add_action('homepage', 'carolinaspa_descuento', 9);

// Crear nueva sección en homepage

add_action('homepage', 'carolinaspa_spacasa_homepage', 30);
function carolinaspa_spacasa_homepage() {
    echo "<div class='spa-en-casa'>";
    echo "<div class='imagen-categoria'>";
    $imagen = get_woocommerce_term_meta(33, 'thumbnail_id', true);
    $imagen_categoria = wp_get_attachment_image_src($imagen, 'full');
    /*
    echo "<pre>";
    var_dump($imagen_categoria);
    echo "</pre>";
    */
    if ($imagen_categoria) {
        echo "<div class='imagen-destacada' style='background-image:url(" . $imagen_categoria[0] . ")'></div>";
        echo "<h1>Spa en casa</h1>";
        echo "</div>";
    }
    echo "<div class='productos'>";
    echo do_shortcode('[product_category columns="3" category="spa"]');
    echo "</div>";
    echo "</div>";
}

// Mostrar 5 categorias en el homepage

function carolinaspa_categorias($args) {
    $args['limit'] = 5;
    $args['columns'] = 5;
    return $args;
}
add_filter('storefront_product_categories_args', 'carolinaspa_categorias', 100);

// Cambiar texto a filtro

add_filter('woocommerce_catalog_orderby', 'carolinaspa_cambiarsort', 40);

function carolinaspa_cambiarsort($filtro) {
    $filtro['date'] = __("Nuevos productos primero", 'woocommerce');
    return $filtro;
}

// Eliminar tabs de la página de producto
/*
add_filter('woocommerce_product_tabs', 'carolinaspa_eliminar_tabs', 11, 1);

function carolinaspa_eliminar_tabs($tabs) {
    unset($tabs['description']);
    return $tabs;
}
*/

/*** Mostrar AddThis! ***/

function carolinaspa_mostrar_botones_compartir() { ?>
<div class="addthis_inline_share_toolbox"></div>
<?php
}
add_action('woocommerce_after_add_to_cart_form', 'carolinaspa_mostrar_botones_compartir');

function carolinaspa_incluir_script_addthis() { ?>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5bffb88c93e29c90"></script>
<?php
}
add_action('wp_footer', 'carolinaspa_incluir_script_addthis');

// Mostrar ahorro para el producto

add_filter('woocommerce_get_price_html', 'carolinaspa_ahorro', 10, 2);
function carolinaspa_ahorro($precio, $producto) {
    /*
    echo "<pre>";
    var_dump('Precio Normal: ' . $producto->regular_price);
    var_dump('Precio Descuento: ' . $producto->sale_price);
    echo "</pre>";
    */
    $precio_regular = $producto->get_regular_price();
    $precio_venta = $producto->get_sale_price();
    if ($producto->sale_price) {
        if ($precio_regular > 99) {
            $ahorro = wc_price($precio_regular - $precio_venta);
            return $precio . sprintf( __('</br><span class="ahorro"> Ahorro: %s </span>', 'woocommerce'), $ahorro );
        }
        else {
            $ahorro = round( ( ( $precio_regular - $precio_venta) / $precio_regular) * 100);
            return $precio . sprintf( __('</br><span class="ahorro"> Ahorro: %s&#37 </span>', 'woocommerce'), $ahorro);
        }
    }

    return $precio;
}

// Mostrar imagen cuando no haya imagen destacada

add_filter('woocommerce_placeholder_img_src', 'carolinaspa_no_imagen_destacada');
function carolinaspa_no_imagen_destacada($image_url) {
    $image_url = get_stylesheet_directory_uri() . '/img/no-image.png';
    return $image_url;
}

// Cambiar el tab descripción por el título del Producto

/*
add_filter('woocommerce_product_tabs', 'carolinaspa_titulo_tab_descripcion', 10, 1);

function carolinaspa_titulo_tab_descripcion($tabs) {
    global $post;
    if(isset($tabs['description']['title'])) {
        $tabs['description']['title'] = $post->post_title;
    }
    return $tabs;
}
*/
add_filter('woocommerce_product_description_heading', 'carolinaspa_titulo_contenido_tab', 10, 1);

function carolinaspa_titulo_contenido_tab($titulo) {
    global $post;
    return $post->post_title;
}

// Imprimir subtítulo con ACF

add_action('woocommerce_single_product_summary', 'carolinaspa_imprimir_subtitulo', 6);
function carolinaspa_imprimir_subtitulo() {
    global $post;
    echo "<p class='subtitulo'>" . get_field('subtitulo', $post->ID) . "</p>";
}

// Nuevo Tab para video con ACF

add_filter('woocommerce_product_tabs', 'carolinaspa_agregar_tab_video', 11, 1);
function carolinaspa_agregar_tab_video($tabs) {
    $tabs['video'] = array(
        'title' => 'Video',
        'priority' => 25,
        'callback' => 'carolinaspa_video'
    );
    return $tabs;
}

function carolinaspa_video() {
    global $post;
    $video = get_field('video', $post->ID);
    if($video) {
        echo "<video controls autoplay loop>";
        echo "<source src='" . $video . "'>";
        echo "</video>";
    }
    else {
        echo "No hay video disponible";
    }
}

// Botón para vaciar el carrito

add_action('woocommerce_cart_actions', 'carolinaspa_limpiar_carrito');
function carolinaspa_limpiar_carrito() {
    echo '<a class="button" href="?vaciar-carrito=true">' . __('Vaciar Carrito', 'woocommerce') . '</a>';
}

// Vaciar el carrito

add_action('init', 'carolinaspa_vaciar_carrito');
function carolinaspa_vaciar_carrito() {
    if(isset($_GET['vaciar-carrito'])) {
        global $woocommerce;
        $woocommerce->cart->empty_cart();
    }
}

// Imprimir banncer de ACF en el Carrito

add_action('woocommerce_check_cart_items', 'carolinaspa_imprimir_banner_carrito', 10);
function carolinaspa_imprimir_banner_carrito() {
    global $post;
    $imagen = get_field('imagen', $post->ID);
    if(isset($imagen)) {
        echo "<div class='cupon-carrito'>";
        echo "<img src='" . $imagen . "'>";
        echo "</div>";
    }
}

// Eliminar un campo del checkout

add_filter('woocommerce_checkout_fields', 'carolinaspa_remover_telefono_checkout', 20, 1);
function carolinaspa_remover_telefono_checkout($campos) {
    unset($campos['billing']['billing_phone']);
    $campos['billing']['billing_postcode']['class'] = array('form-row-first');
    $campos['billing']['billing_city']['class'] = array('form-row-last');
    return $campos;
}


// Agregar campos en checkout
add_filter('woocommerce_checkout_fields', 'carolinaspa_rfc', 40);
function carolinaspa_rfc($campos) {
    $campos['billing']['factura'] = array(
        'class' => array('form-row-wide'),
        'label' => '¿Requiere factura?',
        'type' => 'checkbox',
        'id' => 'factura'
    );
    $campos['billing']['billing_rfc'] = array (
        'class' => array('form-row-wide'),
        'label' => 'RFC'
    );
    $campos['order']['escuchaste_nosotros'] = array (
        'type' => 'select',
        'class' => array('form-row-wide'),
        'label' => '¿Cómo te enteraste de nosotros?',
        'options' => array (
            'default' => 'Seleccione...',
            'tv' => 'TV',
            'radio' => 'Radio',
            'periodico' => 'Periódico',
            'internet' => 'Internet',
            'facebook' => 'Facebook'
        ),
    );
    return $campos;
}

/*** Ocultar/mostrar el RFC */

function carolinaspa_mostrar_rfc() {
    if(is_checkout()) { ?>
        <script>
            jQuery(document).ready(function() {
                jQuery('input[type="checkbox"]#factura').on('change', function() {
                    jQuery('#billing_rfc_field').slideToggle();
                });
            })
        </script>
    <?php }
}
add_action('wp_footer', 'carolinaspa_mostrar_rfc');

// Insertar campos personalizados en base de datos

add_action('woocommerce_checkout_update_order_meta', 'carolinaspa_insertar_campos_checkout_en_bd');
function carolinaspa_insertar_campos_checkout_en_bd($pedido_id) {
    if(! empty($_POST['billing_rfc'])) {
        update_post_meta($pedido_id, 'billing_rfc', sanitize_text_field($_POST['billing_rfc']));
    }
    if(! empty($_POST['factura'])) {
        update_post_meta($pedido_id, 'factura', sanitize_text_field($_POST['factura']));
    }
    if(! empty($_POST['escuchaste_nosotros'])) {
        update_post_meta($pedido_id, 'escuchaste_nosotros', sanitize_text_field($_POST['escuchaste_nosotros']));
    }
}

/*** Agregar columnas personalizadas a los pedidos ***/

add_filter('manage_edit-shop_order_columns', 'carolinaspa_columnas_pedidos');
function carolinaspa_columnas_pedidos($cols) {
    $cols['billing_rfc'] = __('RFC', 'woocommerce');
    $cols['factura'] = __('Factura', 'woocommerce');
    $cols['escuchaste_nosotros'] = __('Escuchaste Nosotros', 'woocommerce');
    return $cols;
}

/*** Mostrar contenido dentro de las columnas ***/

add_action('manage_shop_order_posts_custom_column', 'carolinaspa_columnas_informacion');
function carolinaspa_columnas_informacion($cols) {
    global $post, $woocommerce, $order;


    // Obtener los valores del pedido
    if(empty($order) || $order->id != $post->ID) {
        $order = new WC_Order($post->ID);

    }

    if($cols == 'factura') {
        $factura = get_post_meta($order->ID, 'factura', true);
        if ($factura) {
            echo "Sí";
        }
    }
    if($cols == 'billing_rfc') {
        $rfc = get_post_meta($order->ID, 'billing_rfc', true);
        if ($rfc) {
            echo $rfc;
        }
    }
    if($cols == 'escuchaste_nosotros') {
        $escuchaste = get_post_meta($order->ID, 'escuchaste_nosotros', true);
        if ($escuchaste) {
            echo $escuchaste;
        }
    }
}

/*** Mostrar los campos personalizados en la pantalla de pedidos ***/

add_action('woocommerce_admin_order_data_after_order_details', 'carolinaspa_mostrar_informacion_pedido');
function carolinaspa_mostrar_informacion_pedido($pedido) {

    $factura = get_post_meta($pedido->ID, 'factura', true);
    $rfc = get_post_meta($pedido->ID, 'billing_rfc', true);
    $escuchaste = get_post_meta($pedido->ID, 'escuchaste_nosotros', true);
    echo '<p>&nbsp;</p>';
    if ($factura) {
        echo '<p><strong>' . __('Factura', 'woocommerce') . ':</strong> Sí </p>';
        if ($rfc) {
            echo '<p><strong>' . __('RFC', 'woocommerce') . ':</strong> ' . $rfc . '</p>';
        }
    }
    if ($escuchaste) {
        echo '<p><strong>' . __('Escuchaste Nosotros', 'woocommerce') . ':</strong> '
                . $escuchaste . '</p>';
    }
}

/*** Mostrar iconos de características de la tienda ***/

function carolinaspa_mostrar_iconos() { ?>
            </main>
        </div> <!--primary-->
    </div> <!--col-full-->

    <div class="iconos-inicio">
        <div class="col-full">
        <div class="columns-4">
                <?php the_field('icono_1'); ?>
                <p><?php the_field('descripcion_icono_1'); ?></p>
            </div>
            <div class="columns-4">
                <?php the_field('icono_2'); ?>
                <p><?php the_field('descripcion_icono_2'); ?></p>
            </div>
            <div class="columns-4">
                <?php the_field('icono_3'); ?>
                <p><?php the_field('descripcion_icono_3'); ?></p>
            </div>
        </div>
    </div>

    <div class="col-full">
        <div class="content-area">
            <div class="site-main">
<?php
}
add_action('homepage', 'carolinaspa_mostrar_iconos', 15);

/***  Mostrar entradas de blog en el inicio ***/

function carolinaspa_entradas_blog() {
    $args = array(
        'post_type' => 'post',
        'post_per_page' => 3,
        'order_by' => 'date',
        'order' => 'DESC'
    );
    $entradas = new WP_Query($args); ?>
    <div class="entradas-blog">
        <h2 class="section-title">Últimas entradas del blog</h2>
        <ul>
            <?php while($entradas->have_posts()): $entradas->the_post(); ?>
                <li>
                    <?php the_post_thumbnail('shop_catalog'); ?>
                    <?php the_title('<h3>', '</h3>'); ?>
                    <div class="contenido-entrada">
                        <header class="encabezado-entrada">
                            <p>Por: <?php the_author(); ?> | <?php the_time(get_option('date_format')); ?>
                        </header>
                        <?php
                            $contenido = wp_trim_words(get_the_content(), 15);
                            echo $contenido;
                        ?>
                        <footer class="footer-entrada">
                            <a href="<?php the_permalink(); ?>" class="enlace-entrada button">Ver más &raquo;</a>
                        </footer>
                        </p>
                    </div>
                </li>
            <?php endwhile; wp_reset_postdata(); ?>
        </ul>
    </div>
<?php
}
add_action('homepage', 'carolinaspa_entradas_blog', 80);

/*** Productos relacionados ***/

function carolinaspa_productos_relacionados() {
    global $post;
    $productos_relacionados = get_field('productos_relacionados', $post->ID);

    if($productos_relacionados) { ?>
        <div class="productos_relacionados">
            <h2 class="section-title">Productos Relacionados</h2>
            <?php
                $ids = join($productos_relacionados, ', ');
                echo do_shortcode('[products ids="' . $ids . '" columns="4"]');
            ?>
        </div>
    <?php }
}
add_action('storefront_post_content_after','carolinaspa_productos_relacionados');

// Muestra shortcode con slider

 function carolinaspa_slider() {
     echo do_shortcode('[wcslider]');
 }
 add_action('homepage', 'carolinaspa_slider', 9);
