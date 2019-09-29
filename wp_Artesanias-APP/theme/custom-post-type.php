<?php
// Registrando Custom Post Type

function post_type_artesanos() {
	$label_artesanos = array(
		'name'                  => _x( 'artesanos', 'Post Type General Name' ),
		'singular_name'         => _x( 'artesanos', 'Post Type Singular Name'),
		'menu_name'             => __( 'artesanos'),
		'name_admin_bar'        => __( 'artesanos'),
		'all_items'             => __( 'Todos los artesanos'),
		'add_new_item'          => __( 'Agregar nuevo artesano' ),
		'add_new'               => __( 'Agregar nuevo', 'artesano' ),
		'new_item'              => __( 'Nuevo artesano'),
		'edit_item'             => __( 'Editar artesano'),
		'update_item'           => __( 'Actualizar artesano'),
		'view_item'             => __( 'Ver artesano'),
		'view_items'            => __( 'Ver artesanos'),
		'search_items' 			=> __( 'Buscar artesanos' ),
        'not_found' 			=>  __( 'No se han encontrado artesanos' ),
        'not_found_in_trash' 	=> __( 'No se han encontrado artesanos en la papelera' ),
        'parent_item_colon' 	=> ''
	);
	$args_artesanos = array( 'labels' => $label_artesanos,
		'public'			=> true,
		'publicly_queryable'=> true,
		'show_ui'			=> true,
		'show_in_menu'		=> true,
		'query_var'			=> true,
		'rewrite'			=> array('slug' =>'artesanos'),
		'capability_type'	=> 'page',
		'has_archive'		=> true,
		'hierarchical'		=> false,
		'menu_position' => 2,
		'supports' => array( 'title','thumbnail')
	);
	register_post_type('artesanos',$args_artesanos);
}


?>
