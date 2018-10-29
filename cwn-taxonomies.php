<?php

/* Taxonomies
 ************
 
 - cwn_thematique - pour les livres.
 
 
 * http://codex.wordpress.org/Function_Reference/register_taxonomy
*/


function custom_taxonomies() 
{  	 

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
	
	// Domaine de compétence
	
	register_taxonomy( 'cwn_competence',
			array( 'cwn_fiche' ),
			array( 
	 		'hierarchical' => false, 
	 		'label' => 'Domaines de compétence',
	 		'labels'  => array(
	 			'name'                => _x( 'Domaines de compétence', 'taxonomy general name' ),
	 			'singular_name'       => _x( 'Domaine de compétence', 'taxonomy singular name' ),
	 			'search_items'        => __( 'Chercher parmi les domaines' ),
	 			'popular_items'              => __( 'Les plus utilisés' ),
	 					'all_items'                  => __( 'Tous les domaines' ),
	 					'parent_item'                => null,
	 					'parent_item_colon'          => null,
	 					'edit_item'                  => __( 'Modifier le domaine' ),
	 					'update_item'                => __( 'Mettre à jour le domaine' ),
	 					'add_new_item'               => __( 'Nouveau domaine de compétence' ),
	 					'new_item_name'              => __( 'Nouveau domaine de compétence' ),
	 					'separate_items_with_commas' => __( 'Séparez les domaines par des virgules' ),
	 					'add_or_remove_items'        => __( 'Ajouter ou supprimer des domaines' ),
	 					'choose_from_most_used'      => __( 'Choisir parmi les domaines les plus utilisés' ),
	 					'not_found'                  => __( 'Aucun domaine trouvé.' ),
	 			'menu_name'           => __( 'Domaines de compétence' )
	 		),
	 		'show_ui' => true,
	 		'query_var' => true,
	 		'rewrite' => array('slug' => 'competence'),
	 		'singular_label' => 'Domaine de compétence') 
	);
	
	register_taxonomy(
    'bloc-type',
    'cwn_bloc',
    array(
        'label' => __( 'Type de bloc' ),
        'public' => true,
        'query_var' => true,
        'rewrite' => false,
        'hierarchical' => true,
    )
  );

} // end custom_taxonomies()  function
add_action( 'init', 'custom_taxonomies', 0 ); 
