<?php
/**
 * Hook in and add a metabox that only appears on the 'About' template
 */
if(!function_exists('about_metabox')) {
	function about_metabox() {
		$prefix = '_about_';
    	$cmb = new_cmb2_box(array(
			'id' => $prefix . '_metabox',
			'title' => 'Custom Fields',
			'object_types' => array('page'), //Post type
			'show_on' => array( 'key' => 'page-template', 'value' => 'about.php' ),
			'context' => 'normal',
			'priority' => 'high',
      		'show_names' => true
		));
		$group_field_id = $cmb->add_field(array(
			'id' => $prefix . 'subheading',
			'type' => 'group',
			'description' => __('Text under heading', 'cmb2'),
			'options' => array(
				'group_title' => __('Subheading', 'cmb2'),
				'add_button' => __('Add Another Section', 'cmb2'),
				'remove_button' => __('Remove Section', 'cmb2'),
				'sortable' => false,
				'repeatable' => false,
			),
		));
		$cmb->add_group_field($group_field_id, array(
			'name' => 'Subheading',
			'id' => 'subheading',
			'type' => 'text',
		));
		$cmb->add_group_field($group_field_id, array(
			'name' => 'Button text',
			'id' => 'button-text',
			'type' => 'text',
		));
		//$group_field_id is the field id string, so in this case: $prefix. 'demo'
		$group_field_id = $cmb->add_field(array(
			'id' => $prefix . 'columns',
			'type' => 'group',
			'description' => __('Content for three columns under featured image.', 'cmb2'),
			'options' => array(
				'group_title' => __('Column{#}', 'cmb2'),
				'add_button' => __('Add Another Section', 'cmb2'),
				'remove_button' => __('Remove Section', 'cmb2'),
				'sortable' => true,
				'repeatable' => true,
			),
		));
		$cmb->add_group_field($group_field_id, array(
			'name' => 'Heading',
			'id' => 'heading',
			'type' => 'text_medium',
		));
		$cmb->add_group_field($group_field_id, array(
			'name' => 'Column description',
			'id' => 'column-description',
			'type' => 'textarea',
		));
		//$group_field_id is the field id string, so in this case: $prefix. 'demo'
		$group_field_id = $cmb->add_field(array(
			'id' => $prefix . 'image_box',
			'type' => 'group',
			'description' => __('Content for big image box under three columns.', 'cmb2'),
			'options' => array(
				'group_title' => __('Image Box', 'cmb2'),
				'add_button' => __('Add Another Section', 'cmb2'),
				'remove_button' => __('Remove Section', 'cmb2'),
				'sortable' => false,
				'repeatable' => false,
			),
		));
		$cmb->add_group_field($group_field_id, array(
			'name' => 'Background image',
			'id' => 'background-image',
			'type' => 'file',
		));
		$cmb->add_group_field($group_field_id, array(
			'name' => 'Heading 1',
			'id' => 'heading-one',
			'type' => 'text_small',
		));
		$cmb->add_group_field($group_field_id, array(
			'name' => 'Heading 2',
			'id' => 'heading-two',
			'type' => 'text_medium',
		));
		$cmb->add_group_field($group_field_id, array(
			'name' => 'Subheading',
			'id' => 'subheading',
			'type' => 'text',
		));
		$cmb->add_group_field($group_field_id, array(
			'name' => 'Button text',
			'id' => 'button-text',
			'type' => 'text',
		));
			//$group_field_id is the field id string, so in this case: $prefix. 'demo'
		$group_field_id = $cmb->add_field(array(
				'id' => $prefix . 'join',
				'type' => 'group',
				'description' => __('Content for two join columns under the image box.', 'cmb2'),
				'options' => array(
					'group_title' => __('Join{#}', 'cmb2'),
					'add_button' => __('Add Another Section', 'cmb2'),
					'remove_button' => __('Remove Section', 'cmb2'),
					'sortable' => true,
					'repeatable' => true,
				),
			));
			$cmb->add_group_field($group_field_id, array(
				'name' => 'Join as one',
				'id' => 'join_as_one',
				'type' => 'text_small',
			));
			$cmb->add_group_field($group_field_id, array(
				'name' => 'Join as two',
				'id' => 'join_as_two',
				'type' => 'text_small',
			));
			$cmb->add_group_field($group_field_id, array(
				'name' => 'Join description',
				'id' => 'join-description',
				'type' => 'textarea',
			));
			$cmb->add_group_field($group_field_id, array(
				'name' => 'Join button',
				'id' => 'join-button',
				'type' => 'text',
			));
		$cmb->add_field( array(
			'name' => __( 'Why Join', 'cmb2' ),
			'desc' => __( 'Why Join Text', 'cmb2' ),
			'id'   => $prefix . 'why_join',
			'type' => 'text'
		));
		$group_field_id = $cmb->add_field(array(
				'id' => $prefix . 'reasons_to_join',
				'type' => 'group',
				'description' => __('Content for why join boxes.', 'cmb2'),
				'options' => array(
					'group_title' => __('Why Join{#}', 'cmb2'),
					'add_button' => __('Add Another Section', 'cmb2'),
					'remove_button' => __('Remove Section', 'cmb2'),
					'sortable' => true,
					'repeatable' => true,
				),
			));
			$cmb->add_group_field($group_field_id, array(
				'name' => 'Why join icon',
				'id' => 'why_join_icon',
				'type' => 'file',
			));
			$cmb->add_group_field($group_field_id, array(
				'name' => 'Why join heading',
				'id' => 'why_join_heading',
				'type' => 'text_small',
			));
			$cmb->add_group_field($group_field_id, array(
				'name' => 'Why join description',
				'id' => 'join_description',
				'type' => 'wysiwyg',
			));
			$cmb->add_group_field($group_field_id, array(
				'name' => 'Why join button URL',
				'id' => 'join_button_url',
				'type' => 'text_url',
			));
			$cmb->add_group_field($group_field_id, array(
				'name' => 'Why join button',
				'id' => 'join_button',
				'type' => 'text',
			));
		$cmb->add_field( array(
			'name' => __( 'Our Members say', 'cmb2' ),
			'desc' => __( 'Our Members say text', 'cmb2' ),
			'id'   => $prefix . 'members_say',
			'type' => 'text'
		));
		$group_field_id = $cmb->add_field(array(
				'id' => $prefix . 'testimonials',
				'type' => 'group',
				'description' => __('Content for our members say box.', 'cmb2'),
				'options' => array(
					'group_title' => __('Testimonial{#}', 'cmb2'),
					'add_button' => __('Add Another Section', 'cmb2'),
					'remove_button' => __('Remove Section', 'cmb2'),
					'sortable' => true,
					'repeatable' => true,
				),
			));
			$cmb->add_group_field($group_field_id, array(
				'name' => 'Testimonial Heading',
				'id' => 'testimonial_heading',
				'type' => 'text_small',
			));
			$cmb->add_group_field($group_field_id, array(
				'name' => 'Testimonial Text',
				'id' => 'testimonial_text',
				'type' => 'textarea',
			));
		$cmb->add_field( array(
			'name' => __( 'Carousel Speed', 'cmb2' ),
			'desc' => __( 'Interval that slides change in ms.', 'cmb2' ),
			'id'   => $prefix . 'carousel_speed',
			'type' => 'text'
		));

			$group_field_id = $cmb->add_field(array(
				'id' => $prefix . 'quotes',
				'type' => 'group',
				'description' => __('Content for quote slider .', 'cmb2'),
				'options' => array(
					'group_title' => __('Quotes{#}', 'cmb2'),
					'add_button' => __('Add Another Section', 'cmb2'),
					'remove_button' => __('Remove Section', 'cmb2'),
					'sortable' => true,
					'repeatable' => true,
				),
			));
			$cmb->add_group_field($group_field_id, array(
				'name' => 'Quote',
				'id' => 'quote',
				'type' => 'textarea',
			));
			$cmb->add_group_field($group_field_id, array(
				'name' => 'Name',
				'id' => 'quoter-name',
				'type' => 'text_medium',
			));
			$cmb->add_group_field($group_field_id, array(
				'name' => 'Title',
				'id' => 'quoter-title',
				'type' => 'text_small',
			));
			$cmb->add_group_field($group_field_id, array(
				'name' => 'Company',
				'id' => 'quoter-company',
				'type' => 'text_small',
			));
  }
}
add_action('cmb2_admin_init', 'about_metabox');
