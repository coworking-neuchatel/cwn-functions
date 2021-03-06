<?php

/* Taxonomies
 ************

 * http://codex.wordpress.org/Function_Reference/register_taxonomy
*/

register_taxonomy( 'cwn_thematique',
		array( 'cwn_book' ),
		array( 
 		'hierarchical' => false, 
 		'label' => 'Thématiques',
 		'labels'  => array(
 			'name'                => _x( 'Thématiques', 'taxonomy general name' ),
 			'singular_name'       => _x( 'Thématique', 'taxonomy singular name' ),
 			'search_items'        => __( 'Chercher parmi les thématiques' ),
 			'popular_items'              => __( 'Les plus utilisées' ),
 					'all_items'                  => __( 'Toutes les thématiques' ),
 					'parent_item'                => null,
 					'parent_item_colon'          => null,
 					'edit_item'                  => __( 'Modifier la thématique' ),
 					'update_item'                => __( 'Mettre à jour la thématique' ),
 					'add_new_item'               => __( 'Nouvelle thématique' ),
 					'new_item_name'              => __( 'Nouvelle thématique' ),
 					'separate_items_with_commas' => __( 'Séparez les thématiques par des virgules' ),
 					'add_or_remove_items'        => __( 'Ajouter ou supprimer des thématiques' ),
 					'choose_from_most_used'      => __( 'Choisir parmi les thématiques les plus utilisés' ),
 					'not_found'                  => __( 'Aucune thématique trouvée.' ),
 			'menu_name'           => __( 'Thématiques' )
 		),
 		'show_ui' => true,
 		'query_var' => true,
 		'rewrite' => array('slug' => 'thematique'),
 		'singular_label' => 'Thématique') 
);