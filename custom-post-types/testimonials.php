<?php

/* Custom Post Types
***********************************
 Dans ce fichier sont déclarés les types de contenus spéciaux du site Coworking Neuchâtel.

*/
 
// Témoignages

$labels = array(
		'name'               => 'Témoignages',
		'singular_name'      => 'Témoignage',
		'add_new'            => 'Nouveau témoignage',
		'add_new_item'       => 'Ajouter un témoignage',
		'new_item'           => 'Nouveau témoignage',
		'all_items'          => 'Tous les témoignages'
	);

	$args = array(
		'labels'             => $labels,
    'description'      => __( 'Témoignages de coworkers', 'edin' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'menu_icon'          => 'dashicons-testimonial',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'testimonial' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 20,
		'supports'           => array( 
			'title', 
			'editor', 
			'author', 
			'thumbnail', 
			'excerpt', 
			'custom-fields' 
		)
	);
	
	register_post_type( 'testimonials', $args );