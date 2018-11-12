<?php

/* Custom Post Types
***********************************
 Dans ce fichier sont déclarés les types de contenus spéciaux du site Coworking Neuchâtel.
 
*/
 
	
	$labels = array(
				'name'               => 'Blocs',
				'singular_name'      => 'Bloc',
				'add_new'            => 'Nouveau bloc',
				'add_new_item'       => 'Ajouter un bloc',
				'new_item'           => 'Nouveau bloc',
				'all_items'          => 'Tous les blocs'
			);
		
			$args = array(
				'labels'             => $labels,
		    'description'      => __( 'Blocs de contenu', 'edin' ),
				'public'             => false,
				'publicly_queryable' => false,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'menu_icon'          => 'dashicons-screenoptions',
				'query_var'          => true,
				'rewrite'            => array( 'slug' => 'bloc' ),
				'capability_type'    => 'page',
				'has_archive'        => false,
				'hierarchical'       => false,
				'menu_position'      => 20,
				'supports'           => array( 
					'title', 
					'editor', 
					// 'author', 
				)
			);
	
		register_post_type( 'cwn_bloc', $args );
	

