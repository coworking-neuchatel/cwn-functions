<?php 

// Déclaration des champs ACF

// bloc Notre espace
include_once (plugin_dir_path(__FILE__).'acf/bloc-notre-espace.php');

// bloc Trio
include_once (plugin_dir_path(__FILE__).'acf/bloc-trio.php');

// Book Fields
include_once (plugin_dir_path(__FILE__).'acf/book-fields.php');

// 

if( function_exists('acf_add_local_field_group') ):


acf_add_local_field_group(array(
	'key' => 'group_5b668a6d58f59',
	'title' => 'Salle de réunion',
	'fields' => array(
		array(
			'key' => 'field_5b668ed694eb6',
			'label' => 'Images',
			'name' => 'salle_reunion_images',
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
			'key' => 'field_5b668fe536e38',
			'label' => 'Lien formulaire',
			'name' => 'salle_reunion_formulaire',
			'type' => 'page_link',
			'instructions' => 'Choisir sur quelle page pointe le bouton "réserver"',
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
			'key' => 'field_5b6693cd27a75',
			'label' => 'Couverture',
			'name' => 'salle_reunion_cover',
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
				'param' => 'post',
				'operator' => '==',
				'value' => '2082',
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