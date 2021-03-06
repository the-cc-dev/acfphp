<?php
array(
	'key'               => 'FIELDKEY',
	'label'             => __( 'Group', 'textdomain' ),
	'name'              => 'group',
	'type'              => 'group',
	'instructions'      => '',
	'required'          => 0,
	'conditional_logic' => 0,
	'wrapper'           => array(
		'width' => '',
		'class' => '',
		'id'    => '',
	),
	'layout'            => 'table', // 'table', 'block', 'row'
	'sub_fields'        => array(
		array(
			'key'               => 'SUBFIELDA',
			'label'             => __( 'Basic Text Field', 'textdomain' ),
			'name'              => 'text',
			'type'              => 'text',
			'instructions'      => '',
			'required'          => 0,
			'conditional_logic' => 0,
			'wrapper'           => [
				'width' => '',
				'class' => '',
				'id'    => '',
			],
			'default_value'     => '',
			'placeholder'       => '',
			'prepend'           => '',
			'append'            => '',
			'maxlength'         => '',
		),
		array(
			'key'               => 'SUBFIELDB',
			'label'             => __( 'Basic Text Area', 'textdomain' ),
			'name'              => 'textarea',
			'type'              => 'textarea',
			'instructions'      => '',
			'required'          => 0,
			'conditional_logic' => 0,
			'wrapper'           => array(
				'width' => '',
				'class' => '',
				'id'    => '',
			),
			'default_value'     => '',
			'placeholder'       => '',
			'maxlength'         => '',
			'rows'              => '',
			'new_lines'         => '',
		),
	),
),