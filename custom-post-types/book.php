<?php

/* Custom Post Types
***********************************
 Dans ce fichier sont déclarés les types de contenus spéciaux du site Coworking Neuchâtel.
 
*/
 
$labels = array(
	'name'                => _x( 'Livres', 'Post Type General Name', 'edin' ),
	'singular_name'       => _x( 'Livre', 'Post Type Singular Name', 'edin' ),
	'menu_name'           => __( 'Livres', 'edin' ),
	'name_admin_bar'      => __( 'Livre', 'edin' ),
	'parent_item_colon'   => __( 'Elément parent:', 'edin' ),
	'all_items'           => __( 'Tous les livres', 'edin' ),
	'add_new_item'        => __( 'Ajouter', 'edin' ),
	'add_new'             => __( 'Ajouter', 'edin' ),
	'new_item'            => __( 'Nouveau livre', 'edin' ),
	'edit_item'           => __( 'Modifier', 'edin' ),
	'update_item'         => __( 'Mettre à jour', 'edin' ),
	'view_item'           => __( 'Afficher', 'edin' ),
	'search_items'        => __( 'Recherche', 'edin' ),
	'not_found'           => __( 'Aucun résultat', 'edin' ),
	'not_found_in_trash'  => __( 'Aucun résultat dans la corbeille', 'edin' ),
);

$args = array(
	'label'               => __( 'Livres', 'edin' ),
	'description'         => __( 'Les livres de la bibliothèque coworking', 'edin' ),
	'labels'              => $labels,
	'supports'            => array(
			'title',
			'editor',
			'excerpt',
			'custom-fields',
			'comments',
			'revisions',
			'thumbnail',
			'author',
			'publicize',
		),
	'taxonomies'          => array( 'cwn_thematique' ),
	'hierarchical'        => false,
	'public'              => true,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'menu_icon' => 'dashicons-book',
	'menu_position'       => 20,
	'show_in_admin_bar'   => true,
	'show_in_nav_menus'   => false,
	'can_export'          => true,
	'has_archive'         => true,
	'exclude_from_search' => false,
	'publicly_queryable'  => true,
	'query_var'          => true,
	'rewrite'            => array( 'slug' => 'book' ),
	'capability_type'     => 'post',
);
register_post_type( 'cwn_book', $args );

