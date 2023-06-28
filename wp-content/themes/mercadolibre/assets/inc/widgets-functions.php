<?php
//deshabilita widget
function widget_disable()
{
    remove_theme_support('widgets-block-editor');
}
add_action('after_setup_theme', 'widget_disable');

//widget assets
function zona_widget()
{
    register_sidebar(
        array(
            'name' => 'footer columna 1', 'id' => 'widget_uno', //le damos nombre e id al footer
            'before_widget' => '<div id="%1$s" class="col-12 col-sm-2 pt-3">', //añadimos clase e id
            'after_widget' => '</div>', // contenedor de titulo
            'before_title' => '<h5 class="titulo-menu-footer">', //añadimos contenedores
            'after_title' => '</h5>' //cerramos titulo
        )
    );
    register_sidebar(
        array(
            'name' => 'footer columna 2', 'id' => 'widget_dos', //le damos nombre e id al footer
            'before_widget' => '<div id="%1$s" class="col-12 col-sm-2 pt-3">', //añadimos clase e id
            'after_widget' => '</div>', // contenedor de titulo
            'before_title' => '<h5 class="titulo-menu-footer">', //añadimos contenedores
            'after_title' => '</h5>' //cerramos titulo
        )
    );
    register_sidebar(
        array(
            'name' => 'footer columna 3', 'id' => 'widget_tres', //le damos nombre e id al footer
            'before_widget' => '<div id="%1$s" class="col-12 col-sm-2 pt-3">', //añadimos clase e id
            'after_widget' => '</div>', // contenedor de titulo
            'before_title' => '<h5 class="titulo-menu-footer">', //añadimos contenedores
            'after_title' => '</h5>' //cerramos titulo
        )
    );
    register_sidebar(
        array(
            'name' => 'footer columna 4', 'id' => 'widget_cuatro', //le damos nombre e id al footer
            'before_widget' => '<div id="%1$s" class="col-12 col-sm-2 pt-3">', //añadimos clase e id
            'after_widget' => '</div>', // contenedor de titulo
            'before_title' => '<h5 class="titulo-menu-footer">', //añadimos contenedores
            'after_title' => '</h5>' //cerramos titulo
        )
    );
    register_sidebar(
        array(
            'name' => 'footer columna 5', 'id' => 'widget_cinco', //le damos nombre e id al footer
            'before_widget' => '<div id="%1$s" class="col-12 col-sm-2 pt-3">', //añadimos clase e id
            'after_widget' => '</div>', // contenedor de titulo
            'before_title' => '<h5 class="titulo-menu-footer">', //añadimos contenedores
            'after_title' => '</h5>' //cerramos titulo
        )
    );
    register_sidebar(
        array(
            'name' => 'footer columna 6', 'id' => 'widget_seis', //le damos nombre e id al footer
            'before_widget' => '<div id="%1$s" class="col-12 col-sm-2 pt-3">', //añadimos clase e id
            'after_widget' => '</div>', // contenedor de titulo
            'before_title' => '<h5 class="titulo-menu-footer">', //añadimos contenedores
            'after_title' => '</h5>' //cerramos titulo
        )
    );
    register_sidebar(
        array(
            'name' => 'menu_personalizado2', 'id' => 'menu_personalizado2', //le damos nombre e id al footer
            'before_widget' => '<div id="%1$s" class="col-12 col-sm-6">', //añadimos clase e id
            'after_widget' => '</div>', // contenedor de titulo
        )
    );
}


add_action('widgets_init', 'zona_widget');
//termino sidebar1