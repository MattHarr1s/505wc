<?php
/**
 * Hook in and add a metabox that only appears on the 'About' template
 */
if(!function_exists('page_metabox')) {
	function page_metabox() {
		$prefix = '_page_';
    	$cmb = new_cmb2_box(array(
			'id' => $prefix . '_metabox',
			'title' => 'Custom Fields',
			'object_types' => array('page'), //Post type
			'context' => 'normal',
			'priority' => 'high',
      		'show_names' => true
		));
		$cmb->add_field( array(
			'name' => __( 'Subheader', 'cmb2' ),
			'desc' => __( 'Optional Subheader', 'cmb2' ),
			'id'   => $prefix . 'subheader',
			'type' => 'text'
		));
		$cmb->add_field( array(
			'name' => __( 'Subheader Button Text', 'cmb2' ),
			'desc' => __( 'Optional Subheader Button Text', 'cmb2' ),
			'id'   => $prefix . 'subheader_button_text',
			'type' => 'text'
		));
		$cmb->add_field( array(
			'name' => __( 'Subheader Button Link', 'cmb2' ),
			'desc' => __( 'Optional Subheader Button Link', 'cmb2' ),
			'id'   => $prefix . 'subheader_button_link',
			'type' => 'text'
		));
		$group_field_id = $cmb->add_field(array(
			'id' => $prefix . 'sections',
			'type' => 'group',
			'description' => __('Sections', 'cmb2'),
			'options' => array(
				'group_title' => __('Sections', 'cmb2'),
				'add_button' => __('Add Another Section', 'cmb2'),
				'remove_button' => __('Remove Section', 'cmb2'),
				'sortable' => false,
				'repeatable' => false,
			),
		));
		$cmb->add_group_field($group_field_id, array(
			'name' => 'Section title',
			'id' => 'title',
			'type' => 'text',
		));
		$cmb->add_group_field($group_field_id, array(
			'name' => 'Content',
			'id' => 'content',
			'type' => 'wysiwyg',
		));
  	}
}
add_action('cmb2_admin_init', 'page_metabox');
