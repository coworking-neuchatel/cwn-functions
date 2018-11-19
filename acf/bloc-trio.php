<?php 

// Déclaration des champs ACF

if( function_exists('acf_add_local_field_group') ):
	
	acf_add_local_field_group(array(
		'key' => 'group_5b76eb8d6c820',
		'title' => 'Bloc Trio',
		'fields' => array(
			array(
				'key' => 'field_5b76eb8d72f3d',
				'label' => 'Images',
				'name' => 'bloc_galerie',
				'type' => 'gallery',
				'instructions' => 'La première image sera affichée en grand.',
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
						'key' => 'field_5be07429c8e71',
						'label' => 'Titre du bouton',
						'name' => 'bloc_formulaire_titre',
						'type' => 'text',
						'instructions' => 'Titre du bouton d’action.',
						'required' => 1,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => 'Réserver',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
			array(
				'key' => 'field_5b76eb8d72f70',
				'label' => 'Lien formulaire',
				'name' => 'bloc_formulaire',
				'type' => 'page_link',
				'instructions' => 'Choisir sur quelle page pointe le bouton d’action.',
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
			array(
				'key' => 'field_5b76eb8d72f9c',
				'label' => 'Couverture',
				'name' => 'bloc_cover',
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
		),
		'location' => array(
			array(
				array(
					'param' => 'post_taxonomy',
					'operator' => '==',
					'value' => 'bloc-type:trio',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));
	
endif;
