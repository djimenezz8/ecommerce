<?php  /*  footer */

function footer_register() {

    $labels = array(
        'name' => _x('footer', 'post type general name'),
        'singular_name' => _x('footer', 'post type singular name'),
        'add_new' => _x('Agregar footer', 'slideshow_two item'),
        'add_new_item' => __('Agregar footer'),
        'edit_item' => __('Editar footer'),
        'new_item' => __('Nueva footer'),
        'view_item' => __('Ver el footer'),
        'search_items' => __('Buscar footer'),
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
        'menu_icon'  => 'dashicons-admin-post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports'=> array( 'title','thumbnail', 'excerpt', 'editor'),
        'rewrite' => array('slug' => 'footer', 'with_front' => false)
      ); 

    register_post_type( 'footer' , $args );
}

add_action('init', 'footer_register');

 /*categorias personalizadas para footer*/
 function categoria_footer() {

	register_taxonomy(
		'categoria-footer',
		'footer',
		array(
			'label' => __( 'Categoria footer' ),
			'rewrite' => array( 'slug' => 'categoria-footer' ),
			'hierarchical' => true,
			 // Allow automatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
		)
	);
}
add_action( 'init', 'categoria_footer' );


function etiqueta_footer() {

register_taxonomy(
			'etiqueta-footer','footer',array(
			'hierarchical' => false,
			'labels' => $labels,
			'label' => __( 'Etiqueta footer' ),
			 // Allow automatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
			'update_count_callback' => '_update_post_term_count',
			'footerquery_var' => true,
			'rewrite' => array( 'slug' => 'etiqueta-footer' ),
		)
	);

 


}
add_action( 'init', 'etiqueta_footer' );
