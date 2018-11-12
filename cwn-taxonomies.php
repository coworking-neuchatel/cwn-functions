<?php

/* Taxonomies
 ************

 * http://codex.wordpress.org/Function_Reference/register_taxonomy
*/

function custom_taxonomies() 
{  	 

	// Thématique (pour les livres)
	
	include_once (plugin_dir_path(__FILE__).'custom-taxonomies/thematique.php');
	
	// Domaine de compétence (pour les fiches)
	
	include_once (plugin_dir_path(__FILE__).'custom-taxonomies/competence.php');
	
} // end custom_taxonomies()  function
add_action( 'init', 'custom_taxonomies', 0 ); 
