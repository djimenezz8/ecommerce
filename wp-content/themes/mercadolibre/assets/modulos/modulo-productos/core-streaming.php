<?php  /*  streaming */

function streaming_register() {

    $labels = array(
        'name' => _x('streaming', 'post type general name'),
        'singular_name' => _x('streaming', 'post type singular name'),
        'add_new' => _x('Agregar streaming', 'slideshow_two item'),
        'add_new_item' => __('Agregar streaming'),
        'edit_item' => __('Editar streaming'),
        'new_item' => __('Nueva streaming'),
        'view_item' => __('Ver el streaming'),
        'search_items' => __('Buscar streaming'),
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
        'rewrite' => array('slug' => 'streaming', 'with_front' => false)
      ); 

    register_post_type( 'streaming' , $args );
}

add_action('init', 'streaming_register');

 /*categorias personalizadas para streaming*/
 function categoria_streaming() {

	register_taxonomy(
		'categoria-streaming',
		'streaming',
		array(
			'label' => __( 'Categoria streaming' ),
			'rewrite' => array( 'slug' => 'categoria-streaming' ),
			'hierarchical' => true,
			 // Allow automatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
		)
	);
}
add_action( 'init', 'categoria_streaming' );


function etiqueta_streaming() {

register_taxonomy(
			'etiqueta-streaming','streaming',array(
			'hierarchical' => false,
			'labels' => $labels,
			'label' => __( 'Etiqueta streaming' ),
			 // Allow automatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
			'update_count_callback' => '_update_post_term_count',
			'streamingquery_var' => true,
			'rewrite' => array( 'slug' => 'etiqueta-streaming' ),
		)
	);

 


}
add_action( 'init', 'etiqueta_streaming' );
