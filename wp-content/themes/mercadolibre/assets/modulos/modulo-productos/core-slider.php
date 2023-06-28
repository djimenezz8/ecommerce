<?php  /*  slider */

function slider_register() {

    $labels = array(
        'name' => _x('Slider', 'post type general name'),
        'singular_name' => _x('slider', 'post type singular name'),
        'add_new' => _x('Agregar slider', 'slideshow_two item'),
        'add_new_item' => __('Agregar slider'),
        'edit_item' => __('Editar slider'),
        'new_item' => __('Nueva slider'),
        'view_item' => __('Ver el slider'),
        'search_items' => __('Buscar slider'),
        'not_found' =>  __('No se encontraron'),
        'not_found_in_trash' => __('No se encontraron en la basura'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable'    => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
		'exclude_from_search'   => false,
        'capability_type' => 'post',
        'menu_icon'  => 'dashicons-images-alt',
        'hierarchical' => false,
        'menu_position' => null,
        'supports'=> array( 'title','thumbnail', 'excerpt', 'editor'),
        'rewrite' => array('slug' => 'slider', 'with_front' => false)
      ); 

    register_post_type( 'slider' , $args );
}

add_action('init', 'slider_register');

 /*categorias personalizadas para slider*/
 function categoria_slider() {

	register_taxonomy(
		'categoria-slider',
		'slider',
		array(
			'label' => __( 'Categoria slider' ),
			'rewrite' => array( 'slug' => 'categoria-slider' ),
			'hierarchical' => true,
			 // Allow automatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
		)
	);
}
add_action( 'init', 'categoria_slider' );


function etiqueta_slider() {

register_taxonomy(
			'etiqueta-slider','slider',array(
			'hierarchical' => false,
			'labels' => $labels,
			'label' => __( 'Etiqueta slider' ),
			 // Allow automatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
			'update_count_callback' => '_update_post_term_count',
			'sliderquery_var' => true,
			'rewrite' => array( 'slug' => 'etiqueta-slider' ),
		)
	);

 


}
add_action( 'init', 'etiqueta_slider' );
