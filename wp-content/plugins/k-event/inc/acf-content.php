<?php 
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_55acb8d5c8b5f',
	'title' => 'Event settings',
	'fields' => array (
		array(
			'key'               => 'field_53df40c5593d3',
			'label'             => __('Event Layout', 'k2t-event'),
			'name'              => '',
			'prefix'            => '',
			'type'              => 'tab',
			'instructions'      => '',
			'required'          => 0,
			'conditional_logic' => 0,
			'placement' 		=> 'left',
		),
		array(
			'key'               => 'field_53df40dd593c9',
			'label'             => __('Event layout', 'k2t-event'),
			'name'              => 'event_layout',
			'prefix'            => '',
			'type'              => 'select',
			'instructions'      => '',
			'required'          => 0,
			'conditional_logic' => 0,
			'choices' => array(
				'default'       => __('Default', 'k2t-event'),
				'right_sidebar' => __('Right Sidebar', 'k2t-event'),
				'left_sidebar'  => __('Left Sidebar', 'k2t-event'),
				'no_sidebar'    => __('No Sidebar', 'k2t-event'),
			),
			'default_value' => array(),
			'allow_null'    => 0,
			'multiple'      => 0,
			'ui'            => 0,
			'ajax'          => 0,
			'placeholder'   => '',
			'disabled'      => 0,
			'readonly'      => 0,
		),
		array(
			'key'               => 'field_53df4176c938d',
			'label'             => __('Custom sidebar name', 'k2t-event'),
			'name'              => 'event_custom_sidebar',
			'prefix'            => '',
			'type'              => 'text',
			'instructions'      => '',
			'required'          => 0,
			'conditional_logic' => 0,
			'default_value'     => '',
			'placeholder'       => '',
			'prepend'           => '',
			'prepend'           => '',
			'maxlength'         => '',
			'readonly'          => 0,
			'disabled'          => 0,
		),
		array (
			'key' 				=> 'field_55adb06131de9',
			'label' 			=> __('Event Information', 'k2t-event'),
			'name' 				=> '',
			'type' 				=> 'tab',
			'instructions' 		=> '',
			'required' 			=> 0,
			'conditional_logic' => 0,
			'wrapper' 			=> array (
				'width' 			=> '',
				'class' 			=> '',
				'id' 				=> '',
			),
			'placement' 		=> 'top',
			'endpoint' 			=> 0,
			'placement' 		=> 'left',
		),
		array (
			'key' => 'field_55adb09979437',
			'label' => __('Start Date', 'k2t-event'),
			'name' => 'event_start_date',
			'type' => 'date_time_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'show_date' => 'true',
			'date_format' => 'm/d/y',
			'time_format' => 'H:mm',
			'show_week_number' => 'false',
			'picker' => 'slider',
			'save_as_timestamp' => 'true',
			'get_as_timestamp' => 'false',
		),
		array (
			'key' => 'field_55adb0b979438',
			'label' => __('End Date', 'k2t-event'),
			'name' => 'event_end_date',
			'type' => 'date_time_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'show_date' => 'true',
			'date_format' => 'm/d/y',
			'time_format' => 'H:mm',
			'show_week_number' => 'false',
			'picker' => 'slider',
			'save_as_timestamp' => 'true',
			'get_as_timestamp' => 'false',
		),

		array (
			'key' => 'field_55c0240f4f6e801',
			'label' => __('Formatting Date and Time', 'k2t-event'),
			'name' => 'event_format_date_time',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'F d, Y' => __('F d, Y', 'k2t-event'),
				'd F, Y' => __('d F, Y', 'k2t-event'),
				'm/d/Y'  => __('m/d/Y', 'k2t-event'),
				'd/m/Y'  => __('d/m/Y', 'k2t-event'),
				'Y/m/d'  => __('Y/m/d', 'k2t-event'),
			),
			'default_value' => array (
				'' => '',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
			'disabled' => 0,
			'readonly' => 0,
		),

		array (
			'key' => 'field_55c0240f4f6e81',
			'label' => __('Show/Hide Number Of Tickets?', 'k2t-event'),
			'name' => 'event_show_hide_number_tickets',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'hide' => __('hide', 'k2t-event'),
				'show' => __('show', 'k2t-event'),
			),
			'default_value' => array (
				'' => '',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
			'disabled' => 0,
			'readonly' => 0,
		),
		array(
			'key' => 'field_57ds3adb24099794401',
			'label' => __('Show/Hide Countdown', 'k2t-event'),
			'name' => 'event_show_hide_countdown',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'show'  => __('show','k2t-event'),
				'hide' => __('hide','k2t-event'),
			),
			'default_value' => array(),
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55c0240f4f6e831',
			'label' => __('Show/Hide Button Join', 'k2t-event'),
			'name' => 'event_show_hide_button_join',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'show' => __('show', 'k2t-event'),
				'hide' => __('hide', 'k2t-event'),
			),
			'default_value' => array (
				'' => '',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
			'disabled' => 0,
			'readonly' => 0,
		),
		array (
			'key' => 'field_55adb3f81090a',
			'label' => __('Event ID', 'k2t-event'),
			'name' => 'event_event_id',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55b8a51de1691',
			'label' => __('Color', 'k2t-event'),
			'name' => 'event_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#3f51b5',
		),
		array (
			'key' => 'field_55adb4101090b',
			'label' => __('Product', 'k2t-event'),
			'name' => 'event_product',
			'type' => 'post_object',
			'instructions' => __('Select a WooCommerce product to sell this event ', 'k2t-event'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array (
				0 => 'product',
			),
			'taxonomy' => array (
			),
			'allow_null' => 0,
			'multiple' => 0,
			'return_format' => 'object',
			'ui' => 1,
		),
		array (
			'key' => 'field_55c0240f4f6e8',
			'label' => __('Who is speakers?', 'k2t-event'),
			'name' => 'event_who_is_speakers',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'teacher' => __('Teacher', 'k2t-event'),
				'out_school' => __('Out School', 'k2t-event'),
			),
			'default_value' => array (
				'' => '',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
			'disabled' => 0,
			'readonly' => 0,
		),
		array (
			'key' => 'field_55c0245a4f6e9',
			'label' => __('Teacher', 'k2t-event'),
			'name' => 'event_teacher',
			'type' => 'post_object',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_55c0240f4f6e8',
						'operator' => '==',
						'value' => 'teacher',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array (
				0 => 'post-k-teacher',
			),
			'taxonomy' => array (
			),
			'allow_null' => 0,
			'multiple' => 1,
			'return_format' => 'object',
			'ui' => 1,
		),
		array (
			'key' => 'field_55adb523b333b',
			'label' => __('Speakers', 'k2t-event'),
			'name' => 'event_speakers',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_55c0240f4f6e8',
						'operator' => '==',
						'value' => 'out_school',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => '',
			'max' => '',
			'layout' => 'table',
			'button_label' => __('Add Row', 'k2t-event'),
			'sub_fields' => array (
				array (
					'key' => 'field_55adb5a8b333d',
					'label' => __('Avatar', 'k2t-event'),
					'name' => 'event_speaker_avatar',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'url',
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
				array (
					'key' => 'field_55adb5f2b333e',
					'label' => __('Name', 'k2t-event'),
					'name' => 'event_speaker_name',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_55adb5fdb333f',
					'label' => __('Role', 'k2t-event'),
					'name' => 'event_speaker_role',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
			),
		),
		array (
			'key' => 'field_55adb776ef5d2',
			'label' => __('Subscribe URL', 'k2t-event'),
			'name' => 'event_subscribe_url',
			'type' => 'text',
			'instructions' => __('Link to a subscribe form. Only work if no product is set. ', 'k2t-event'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55adb785ef5d3',
			'label' => __('Subscribe Button Text', 'k2t-event'),
			'name' => 'event_subscribe_button_text',
			'type' => 'text',
			'instructions' => __('Text that appears on the subscribe button.', 'k2t-event'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' 				=> 'field_55adbcffef5d4',
			'label' 			=> __('Event location', 'k2t-event'),
			'name' 				=> '',
			'type' 				=> 'tab',
			'instructions' 		=> '',
			'required' 			=> 0,
			'conditional_logic' => 0,
			'wrapper' 			=> array (
				'width' 			=> '',
				'class' 			=> '',
				'id' 				=> '',
			),
			'placement' 		=> 'top',
			'endpoint' 			=> 0,
			'placement' 		=> 'left',
		),
		array (
			'key' => 'field_55adbd36ef5d5',
			'label' => __('Address', 'k2t-event'),
			'name' => 'event_address',
			'type' => 'text',
			'instructions' => __('Location Address of event ', 'k2t-event'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55adbd54ef5d6',
			'label' => __('Phone', 'k2t-event'),
			'name' => 'event_phone',
			'type' => 'text',
			'instructions' => __('Contact Number of event ', 'k2t-event'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55adbd6aef5d7',
			'label' => __('Website', 'k2t-event'),
			'name' => 'event_website',
			'type' => 'text',
			'instructions' => __('Website URL of event', 'k2t-event'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55adbe86ef5d8',
			'label' => __('Email', 'k2t-event'),
			'name' => 'event_email',
			'type' => 'text',
			'instructions' => __('Email Contact of event', 'k2t-event'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array(
			'key'               => 'field_53fee96493014',
			'label'             => __('Event Titlebar', 'k2t-event'),
			'name'              => '',
			'prefix'            => '',
			'type'              => 'tab',
			'instructions'      => '',
			'required'          => 0,
			'conditional_logic' => 0,
			'placement' 		=> 'left',
		),
		array(
			'key'               => 'field_53fd4b60938t9',
			'label'             => __('Show/Hide Title Bar', 'k2t-event'),
			'name'              => 'event_display_titlebar',
			'prefix'            => '',
			'type'              => 'select',
			'instructions'      => '',
			'required'          => 0,
			'conditional_logic' => 0,
			'choices' => array(
				'show'  => 'Show',
				'hided' => 'Hide',
			),
			'default_value' => 'show',
			'allow_null'    => 0,
			'multiple'      => 0,
			'ui'            => 0,
			'ajax'          => 0,
			'placeholder'   => '',
			'disabled'      => 0,
			'readonly'      => 0,
		),

		array(
			'key' => 'field_57adb2409979441',
			'label' => __('Show/Hide Date', 'k2t-event'),
			'name' => 'show_hide_date',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'yes'  => __('Yes','k2t-event'),
				'no' => __('No','k2t-event'),
				),
			'default_value' => array(),
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),

		array(
			'key' => 'field_57ds3adb2409979441',
			'label' => __('Show/Hide Author', 'k2t-event'),
			'name' => 'show_hide_author',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'yes'  => __('Yes','k2t-event'),
				'no' => __('No','k2t-event'),
			),
			'default_value' => array(),
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),

		array(
			'key'               => 'field_542e57d793109',
			'label'             => __('Event titlebar font size', 'k2t-event'),
			'name'              => 'event_titlebar_font_size',
			'prefix'            => '',
			'type'              => 'text',
			'instructions'      => '',
			'required'          => 0,
			'conditional_logic' => array(
				array(
					array(
						'field'    => 'field_53fd4b60938t9',
						'operator' => '==',
						'value'    => 'show',
					),
				),
			),
			'default_value'     => '',
			'placeholder'       => '',
			'prepend'           => '',
			'prepend'           => '',
			'maxlength'         => '',
			'readonly'          => 0,
			'disabled'          => 0,
		),
		array(
			'key'               => 'field_53fftww6930a9',
			'label'             => __('Event title bar color', 'k2t-event'),
			'name'              => 'event_titlebar_color',
			'prefix'            => '',
			'type'              => 'color_picker',
			'instructions'      => '',
			'required'          => 0,
			'conditional_logic' => array(
				array(
					array(
						'field'    => 'field_53fd4b60938t9',
						'operator' => '==',
						'value'    => 'show',
					),
				),
			),
			'default_value'     => '',
		),
		array(
			'key'               => 'field_53feec3f930a6',
			'label'             => __('Padding top', 'k2t-event'),
			'name'              => 'event_pading_top',
			'prefix'            => '',
			'type'              => 'text',
			'instructions'      => __('Unit: px (Ex: 10px)', 'k2t-event'),
			'required'          => 0,
			'conditional_logic' => array(
				array(
					array(
						'field'    => 'field_53fd4b60938t9',
						'operator' => '==',
						'value'    => 'show',
					),
				)
			),
			'default_value'     => '',
			'placeholder'       => '',
			'prepend'           => '',
			'prepend'           => '',
			'maxlength'         => '',
			'readonly'          => 0,
			'disabled'          => 0,
		),
		array(
			'key'               => 'field_53feec3f931a7',
			'label'             => __('Padding bottom', 'k2t-event'),
			'name'              => 'event_pading_bottom',
			'prefix'            => '',
			'type'              => 'text',
			'instructions'      => __('Unit: px (Ex: 10px)', 'k2t-event'),
			'required'          => 0,
			'conditional_logic' => array(
				array(
					array(
						'field'    => 'field_53fd4b60938t9',
						'operator' => '==',
						'value'    => 'show',
					),
				)
			),
			'default_value'     => '',
			'placeholder'       => '',
			'prepend'           => '',
			'prepend'           => '',
			'maxlength'         => '',
			'readonly'          => 0,
			'disabled'          => 0,
		),
		array(
			'key'               => 'field_53feeceaa3019',
			'label'             => __('Background color', 'k2t-event'),
			'name'              => 'event_background_color',
			'prefix'            => '',
			'type'              => 'color_picker',
			'instructions'      => '',
			'required'          => 0,
			'conditional_logic' => array(
				array(
					array(
						'field'    => 'field_53fd4b60938t9',
						'operator' => '==',
						'value'    => 'show',
					),
				),
			),
			'default_value'     => '',
		),
		array(
			'key'               => 'field_53feecb293a18',
			'label'             => __('Background image', 'k2t-event'),
			'name'              => 'event_background_image',
			'prefix'            => '',
			'type'              => 'image',
			'instructions'      => '',
			'required'          => 0,
			'conditional_logic' => array(
				array(
					array(
						'field'    => 'field_53fd4b60938t9',
						'operator' => '==',
						'value'    => 'show',
					),
				),
			),
			'return_format' 	=> 'url',
			'preview_size'      => 'thumbnail',
			'library'           => 'all',
		),
		array(
			'key'               => 'field_53feeda093a1b',
			'label'             => __('Background position', 'k2t-event'),
			'name'              => 'event_background_position',
			'prefix'            => '',
			'type'              => 'select',
			'instructions'      => '',
			'required'          => 0,
			'conditional_logic' => array(
				array(
					array(
						'field'    => 'field_53fd4b60938t9',
						'operator' => '==',
						'value'    => 'show',
					),
				),
			),
			'choices' => array(
				''      		=> __('None', 'k2t-event'),
				'left top'      => __('Left Top', 'k2t-event'),
				'left center'   => __('Left Center', 'k2t-event'),
				'left bottom'   => __('Left Bottom', 'k2t-event'),
				'right top'     => __('Right Top', 'k2t-event'),
				'right center'  => __('Right Center', 'k2t-event'),
				'right bottom'  => __('Right Bottom', 'k2t-event'),
				'center top'    => __('Center top', 'k2t-event'),
				'center center' => __('Center Center', 'k2t-event'),
				'center bottom' => __('Center Bottom', 'k2t-event'),
			),
			'default_value' => array(),
			'allow_null'    => 0,
			'multiple'      => 0,
			'ui'            => 0,
			'ajax'          => 0,
			'placeholder'   => '',
			'disabled'      => 0,
			'readonly'      => 0,
		),
		array(
			'key'               => 'field_53fuida0936ab',
			'label'             => __('Background size', 'k2t-event'),
			'name'              => 'event_background_size',
			'prefix'            => '',
			'type'              => 'select',
			'instructions'      => '',
			'required'          => 0,
			'conditional_logic' => array(
				array(
					array(
						'field'    => 'field_53fd4b60938t9',
						'operator' => '==',
						'value'    => 'show',
					),
				),
			),
			'choices' => array(
				''		  => 'None',
				'inherit' => 'Inherit',
				'cover'   => 'Cover',
				'contain' => 'Contain',
				'full'    => '100%',
			),
			'default_value' => array(),
			'allow_null'    => 0,
			'multiple'      => 0,
			'ui'            => 0,
			'ajax'          => 0,
			'placeholder'   => '',
			'disabled'      => 0,
			'readonly'      => 0,
		),
		array(
			'key'               => 'field_52rguda0a301b',
			'label'             => __('Background repeat', 'k2t-event'),
			'name'              => 'event_background_repeat',
			'prefix'            => '',
			'type'              => 'select',
			'instructions'      => '',
			'required'          => 0,
			'conditional_logic' => array(
				array(
					array(
						'field'    => 'field_53fd4b60938t9',
						'operator' => '==',
						'value'    => 'show',
					),
				),
			),
			'choices' => array(
				''		  	=> __('None', 'k2t-event'),
				'no-repeat' => __('No Repeat', 'k2t-event'),
				'repeat'    => __('Repeat', 'k2t-event'),
				'repeat-x'  => __('Repeat X', 'k2t-event'),
				'repeat-y'  => __('Repeat Y', 'k2t-event'),
			),
			'default_value' => 'repeat',
			'allow_null'    => 0,
			'multiple'      => 0,
			'ui'            => 0,
			'ajax'          => 0,
			'placeholder'   => '',
			'disabled'      => 0,
			'readonly'      => 0,
		),
		array(
			'key'               => 'field_54336341939a7',
			'label'             => __('Background parallax', 'k2t-event'),
			'name'              => 'event_background_parallax',
			'prefix'            => '',
			'type'              => 'select',
			'instructions'      => '',
			'required'          => 0,
			'conditional_logic' => array(
				array(
					array(
						'field'    => 'field_53fd4b60938t9',
						'operator' => '==',
						'value'    => 'show',
					),
				),
			),
			'choices' => array(
				'1' => 'True',
				'0' => 'False',
			),
			'default_value' => array(),
			'allow_null'    => 0,
			'multiple'      => 0,
			'ui'            => 0,
			'ajax'          => 0,
			'placeholder'   => '',
			'disabled'      => 0,
			'readonly'      => 0,
		),
		array(
			'key'               => 'field_53fef06093a20',
			'label'             => __('Titlebar overlay opacity', 'k2t-event'),
			'name'              => 'event_titlebar_overlay_opacity',
			'prefix'            => '',
			'type'              => 'select',
			'instructions'      => __('Set your overlay opacity in titlebar', 'k2t-event'),
			'required'          => 0,
			'conditional_logic' => array(
				array(
					array(
						'field'    => 'field_53fd4b60938t9',
						'operator' => '==',
						'value'    => 'show',
					),
				),
			),
			'choices' => array(
				0   => 0,
				1 	=> 1,
				2 	=> 2,
				3 	=> 3,
				4 	=> 4,
				5 	=> 5,
				6 	=> 6,
				7 	=> 7,
				8 	=> 8,
				9 	=> 9,
				10  => 10,
			),
			'default_value' => array(),
			'allow_null'    => 0,
			'multiple'      => 0,
			'ui'            => 0,
			'ajax'          => 0,
			'placeholder'   => '',
			'disabled'      => 0,
			'readonly'      => 0,
		),
		array(
			'key'               => 'field_53fef07c93029',
			'label'             => __('Titlebar clipmask opacity', 'k2t-event'),
			'name'              => 'event_titlebar_clipmask_opacity',
			'prefix'            => '',
			'type'              => 'select',
			'instructions'      => __('Set your clipmask opacity in titlebar', 'k2t-event'),
			'required'          => 0,
			'conditional_logic' => array(
				array(
					array(
						'field'    => 'field_53fd4b60938t9',
						'operator' => '==',
						'value'    => 'show',
					),
				),
			),
			'choices' => array(
				0   => 0,
				1 	=> 1,
				2 	=> 2,
				3 	=> 3,
				4 	=> 4,
				5 	=> 5,
				6 	=> 6,
				7 	=> 7,
				8 	=> 8,
				9 	=> 9,
				10  => 10,
			),
			'default_value' => array(),
			'allow_null'    => 0,
			'multiple'      => 0,
			'ui'            => 0,
			'ajax'          => 0,
			'placeholder'   => '',
			'disabled'      => 0,
			'readonly'      => 0,
		),
		array(
			'key'               => 'field_53fef0eb93a23',
			'label'             => __('Custom titlebar content', 'k2t-event'),
			'name'              => 'event_titlebar_custom_content',
			'prefix'            => '',
			'type'              => 'wysiwyg',
			'instructions'      => '',
			'required'          => 0,
			'conditional_logic' => array(
				array(
					array(
						'field'    => 'field_53fd4b60938t9',
						'operator' => '==',
						'value'    => 'show',
					),
				),
			),
			'default_value'     => '',
			'tabs'              => 'all',
			'toolbar'           => 'full',
			'media_upload'      => 1,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post-k-event',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
));

endif;