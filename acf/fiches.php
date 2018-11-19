<?php 

// Déclaration des champs ACF

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5b9a8e5caa9fa',
	'title' => 'Fiches des membres',
	'fields' => array(
		array(
			'key' => 'field_5b9a8e9a21444',
			'label' => 'Photo de profil',
			'name' => 'fiche_photo',
			'type' => 'image',
			'instructions' => '',
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
			'key' => 'field_5be3d88fa6af4',
			'label' => 'Date d\'anniversaire',
			'name' => 'fiche_anniv',
			'type' => 'date_picker',
			'instructions' => 'Seuls le jour et le mois seront visibles',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'Y-m-d',
			'return_format' => 'j F',
			'first_day' => 1,
		),
		array(
			'key' => 'field_5be3da86e9774',
			'label' => 'J\'accepte que les réponses données aux questions entourées de "~" soient publiées sur le site web du Coworking Neuchâtel en accès public',
			'name' => 'fiche_acceptation',
			// 'type' => 'select',
			// 'type' => 'true_false',
			'type' => 'radio',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'oui' => 'Oui',
				'non' => 'Non',
			),
			'default_value' => '',
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_5be3d8ea32f8f',
			'label' => '~ Profession',
			'name' => 'fiche_profession',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_5be3d98f5fe02',
			'label' => '~ Entreprise',
			'name' => 'fiche_entreprise',
			'type' => 'text',
			'instructions' => '(si non indépendant)',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5be3d95f1999d',
			'label' => '~ Domaine de compétence particulier',
			'name' => 'fiche_domaine',
			'type' => 'taxonomy',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'taxonomy' => 'cwn_competence',
			'field_type' => 'multi_select',
			'allow_null' => 0,
			'add_term' => 1,
			'save_terms' => 1,
			'load_terms' => 1,
			'return_format' => 'id',
			'multiple' => 0,
		),
		array(
			'key' => 'field_5be3d9c55fe03',
			'label' => '~ Lien du site web',
			'name' => 'fiche_url',
			'type' => 'url',
			'instructions' => '(De l\'entreprise ou d\'une éventuelle page personnelle)',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5be3d9f25fe04',
			'label' => '~ Logo de l\'entreprise',
			'name' => 'fiche_logo',
			'type' => 'image',
			'instructions' => '',
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
			'key' => 'field_5be3da1c5fe05',
			'label' => '~ E-mail professionnel',
			'name' => 'fiche_email',
			'type' => 'email',
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
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_5be3da335fe06',
			'label' => 'Numéro de téléphone',
			'name' => 'fiche_tel',
			'type' => 'text',
			'instructions' => 'Format: 076 123 45 67',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5be3da485fe07',
			'label' => 'Raison du choix d\'adhésion au Coworking Neuchâtel',
			'name' => 'fiche_raison',
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
	), // Fin des Fields
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'cwn_fiche',
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

// Infos Complémentaires

acf_add_local_field_group(array(
	'key' => 'group_5be3e1bef3343',
	'title' => 'Informations complémentaires pour créer ta "story"',
	'fields' => array(
		array(
			'key' => 'field_5be3e2246899c',
			'label' => 'Depuis combien de temps exerces-tu ton activité ?',
			'name' => 'fiche_combien',
			'type' => 'text',
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
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5be3e1bf0871f',
			'label' => 'Pourquoi exercer ce métier ?',
			'name' => 'fiche_pourquoi',
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
			'key' => 'field_5be3e1bf0874a',
			'label' => 'Que retires-tu de ton expérience professionnelle jusqu\'à aujourd\'hui ?',
			'name' => 'fiche_experience',
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
			'key' => 'field_5be3e1bf08775',
			'label' => 'As-tu une citation ou une phrase qui te résume ou qui résume ton expérience ?',
			'name' => 'fiche_citation',
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
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'cwn_fiche',
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