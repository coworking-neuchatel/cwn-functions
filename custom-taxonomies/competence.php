<?php

/* Taxonomies
 ************

 * http://codex.wordpress.org/Function_Reference/register_taxonomy
*/

register_taxonomy( 'cwn_competence',
		array( 'cwn_fiche' ),
		array( 
 		'hierarchical' => false, 
 		'label' => 'Domaines de compétence',
 		'labels'  => array(
 			'name'                => _x( 'Domaines de compétence', 'taxonomy general name' ),
 			'singular_name'       => _x( 'Compétence', 'taxonomy singular name' ),
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
 		'singular_label' => 'Compétence') 
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
