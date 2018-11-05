<?php 

// Déclaration des champs ACF

if( function_exists('acf_add_local_field_group') ):

/*
 Comporte:
 1) Image de couverture (menu mobile)
 2) Couverture carte google
 3) Carte Google
 4) Visite 3D
 5) images (galerie)
 6) Lien formulaire (cible bouton)
*/


	acf_add_local_field_group(array(
		'key' => 'group_5b48699c90eca',
		'title' => 'Notre espace',
		'fields' => array(
			array(
				'key' => 'field_5b58ad0cbb520',
				'label' => 'couverture',
				'name' => 'notre_espace_cover',
				'type' => 'image',
				'instructions' => 'La première image qui apparaît',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'id',
				'preview_size' => 'thumbnail',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
			array(
				'key' => 'field_5b5aff1164420',
				'label' => 'couverture carte google',
				'name' => 'carte_google_cover',
				'type' => 'image',
				'instructions' => 'La première image qui apparaît',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'id',
				'preview_size' => 'thumbnail',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
			array(
				'key' => 'field_5b4869a14f869',
				'label' => 'carte google',
				'name' => 'carte_google',
				'type' => 'textarea',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'new_lines' => '',
			),
			array(
				'key' => 'field_5b486a0c305a2',
				'label' => 'visite 3D',
				'name' => 'visite_3d',
				'type' => 'textarea',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'new_lines' => '',
			),
			array(
				'key' => 'field_5b4869f3e9665',
				'label' => 'images',
				'name' => 'notre_espace_images',
				'type' => 'gallery',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'min' => '',
				'max' => '',
				'insert' => 'append',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
			array(
				'key' => 'field_5b66907145457',
				'label' => 'Lien formulaire',
				'name' => 'notre_espace_formulaire',
				'type' => 'page_link',
				'instructions' => 'Choisir sur quelle page pointe le bouton "Visitez-nous".',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'post_type' => array(
					0 => 'page',
				),
				'taxonomy' => array(
				),
				'allow_null' => 0,
				'allow_archives' => 0,
				'multiple' => 0,
			),
		),
//		'location' => array(
//			array(
//				array(
//					'param' => 'post',
//					'operator' => '==',
//					'value' => '2064',
//				),
//			),
//		),
		'location' => array(
				array(
					array(
						'param' => 'post_taxonomy',
						'operator' => '==',
						'value' => 'bloc-type:notre-espace',
					),
				),
			),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => array(
			0 => 'the_content',
		),
		'active' => 1,
		'description' => '',
	));
	
	
	
endif;
