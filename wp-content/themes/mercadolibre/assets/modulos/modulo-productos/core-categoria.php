<?php  /*  categoria */

function categoria_register() {

    $labels = array(
        'name' => _x('categoria', 'post type general name'),
        'singular_name' => _x('categoria', 'post type singular name'),
        'add_new' => _x('Agregar categoria', 'slideshow_two item'),
        'add_new_item' => __('Agregar categoria'),
        'edit_item' => __('Editar categoria'),
        'new_item' => __('Nueva categoria'),
        'view_item' => __('Ver el categoria'),
        'search_items' => __('Buscar categoria'),
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
        'menu_icon'  => 'dashicons-grid-view',
        'hierarchical' => false,
        'menu_position' => null,
        'supports'=> array( 'title','thumbnail', 'excerpt', 'editor'),
        'rewrite' => array('slug' => 'categoria', 'with_front' => false)
      ); 

    register_post_type( 'categoria' , $args );
}

add_action('init', 'categoria_register');

 /*categorias personalizadas para categoria*/
 function categoria_categoria() {

	register_taxonomy(
		'categoria-categoria',
		'categoria',
		array(
			'label' => __( 'Categoria categoria' ),
			'rewrite' => array( 'slug' => 'categoria-categoria' ),
			'hierarchical' => true,
			 // Allow automatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
		)
	);
}
add_action( 'init', 'categoria_categoria' );


function etiqueta_categoria() {

register_taxonomy(
			'etiqueta-categoria','categoria',array(
			'hierarchical' => false,
			'labels' => $labels,
			'label' => __( 'Etiqueta categoria' ),
			 // Allow automatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
			'update_count_callback' => '_update_post_term_count',
			'categoriaquery_var' => true,
			'rewrite' => array( 'slug' => 'etiqueta-categoria' ),
		)
	);

 


}
add_action( 'init', 'etiqueta_categoria' );
