<?php

/* Custom Post Types
***********************************
 Dans ce fichier sont déclarés les types de contenus spéciaux du site Coworking Neuchâtel.
 
*/

// Register Custom Post Type
function cwn_custom_post_type() {
	
	// Blocs 
	
	include_once (plugin_dir_path(__FILE__).'custom-post-types/bloc.php');
	
	// Livres

	include_once (plugin_dir_path(__FILE__).'custom-post-types/book.php');
	
	// Témoignages
	
	include_once (plugin_dir_path(__FILE__).'custom-post-types/testimonials.php');
		
	// Fiches personnelles
	
	include_once (plugin_dir_path(__FILE__).'custom-post-types/fiche.php');
	
}

add_action( 'init', 'cwn_custom_post_type', 0 );
