<?php
add_post_type_support('page', 'excerpt');

include get_template_directory() . '/assets/inc/css-functions.php';
include get_template_directory() . '/assets/inc/js-functions.php';
include get_template_directory() . '/assets/inc/modulos-functions.php';
include get_template_directory() . '/assets/inc/funciones-woocommerce(1).php';

//widgets
include get_template_directory() . '/assets/inc/widgets-functions.php';

// function add_custom_mime_types( $mimes ) {
//     $mimes['mp3'] = 'audio/mp3';
//     return $mimes;
// }
// add_filter( 'upload_mimes', 'add_custom_mime_types' );
