<?php

/* Custom Post Types
***********************************
 Dans ce fichier sont déclarés les types de contenus spéciaux du site Coworking Neuchâtel.
 
*/
 
	
// Fiches personnelles

$labels = array(
	'name'                => _x( 'Membres', 'Post Type General Name', 'edin' ), // NB: sera affiché dans balise Titre
	'singular_name'       => _x( 'Fiche', 'Post Type Singular Name', 'edin' ),
	'menu_name'           => __( 'Fiches', 'edin' ),
	'name_admin_bar'      => __( 'Fiche', 'edin' ),
	'parent_item_colon'   => __( 'Elément parent:', 'edin' ),
	'all_items'           => __( 'Toutes les fiches', 'edin' ),
	'add_new_item'        => __( 'Ajouter', 'edin' ),
	'add_new'             => __( 'Ajouter', 'edin' ),
	'new_item'            => __( 'Nouvelle fiche', 'edin' ),
	'edit_item'           => __( 'Modifier', 'edin' ),
	'update_item'         => __( 'Mettre à jour', 'edin' ),
	'view_item'           => __( 'Afficher', 'edin' ),
	'search_items'        => __( 'Recherche', 'edin' ),
	'not_found'           => __( 'Aucun résultat', 'edin' ),
	'not_found_in_trash'  => __( 'Aucun résultat dans la corbeille', 'edin' ),
);

$args = array(
	'label'               => __( 'Fiches', 'edin' ),
	'description'         => __( 'Les fiches personnelles', 'edin' ),
	'labels'              => $labels,
	'supports'            => array(
			'title',
			// 'editor',
			// 'excerpt',
			'custom-fields',
			'revisions',
			// 'thumbnail',
			'author',
		),
	'taxonomies'          => array( 'cwn_competence' ),
	'hierarchical'        => false,
	'public'              => true,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'menu_icon' => 'dashicons-businessman',
	'menu_position'       => 20,
	'show_in_admin_bar'   => true,
	'show_in_nav_menus'   => false,
	'can_export'          => true,
	'has_archive'         => true,
	'exclude_from_search' => false,
	'publicly_queryable'  => true,
	'query_var'          => true,
	'rewrite'            => array( 'slug' => 'membres' ),
	'capability_type'     => 'post',
);
register_post_type( 'cwn_fiche', $args );