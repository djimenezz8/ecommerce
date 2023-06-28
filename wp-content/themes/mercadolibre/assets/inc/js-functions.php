<?php
//assets scripts//

function comercio_script()
{
    //nos aseguramos que no estamos en el area de administracion
    if (!is_admin()) {
        //nos aseguramos nuestro scripts con el nombre "mi-script" y decimos que es dependiente de jqueri para que wordpress se asegure de incluir JQuerry antes de este archivo//
        //en adicion a las dependencias podemos indicar que este archivo debe ser insertado en el footer del sitio, en el lugar donde se encuentre la funcion wp_footer


        // Register the script like this for a theme:


        wp_register_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', false, false);
        // wp_register_script('MI-ARCHIVO-JS', get_bloginfo('template_directory'), '/assets/librerias/js/MIARCHIVO.js', false, false);
        wp_register_script('carrusel-productos', get_bloginfo('template_directory') . '/assets/librerias/js/slick.js', array('jquery'), '1.0', true);
        wp_register_script('mi-archivo', get_bloginfo('template_directory') . '/assets/librerias/js/mi-archivo.js', array('jquery'), '1.0', true);

        //encolamos los js//
        wp_enqueue_script('mi-archivo', array('jquery'), true);
        wp_enqueue_script('bootstrap-js', array('jquery'), true);
        wp_enqueue_script('carrusel-productos');
        // wp_enqueue_script('MI-ARCHIVO-JS', array('jquery'), true);
    }
}

add_action("wp_enqueue_scripts", "comercio_script", 1);
