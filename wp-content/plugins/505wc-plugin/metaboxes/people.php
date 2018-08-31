<?php
/**
 * Hook in and add a metabox that only appears on the 'About' template
 */
if(!function_exists('people_metabox')) {
	function people_metabox() {
		$prefix = '_people_';
    	$cmb = new_cmb2_box(array(
			'id' => $prefix . '_metabox',
			'title' => 'Custom Fields',
			'object_types' => array('people'), //Post type
			'context' => 'normal',
			'priority' => 'high',
      		'show_names' => true
		));
		$cmb->add_field( array(
			'name' => __( 'Position', 'cmb2' ),
			'desc' => __( 'Position in organization', 'cmb2' ),
			'id'   => $prefix . 'position',
			'type' => 'text'
		));
		$cmb->add_field( array(
			'name' => __( 'Affiliation', 'cmb2' ),
			'desc' => __( 'Organization Affiliation', 'cmb2' ),
			'id'   => $prefix . 'affiliation',
			'type' => 'text'
		));
		$cmb->add_field( array(
			'name' => __( 'Photo', 'cmb2' ),
			'desc' => __( 'Photo of Person', 'cmb2' ),
			'id'   => $prefix . 'photo',
			'type' => 'file'
		));
		$cmb->add_field( array(
			'name' => __( 'Email', 'cmb2' ),
			'desc' => __( 'Email', 'cmb2' ),
			'id'   => $prefix . 'email',
			'type' => 'text_email'
		));
		$cmb->add_field( array(
			'name' => __( 'Phone', 'cmb2' ),
			'desc' => __( 'Phone', 'cmb2' ),
			'id'   => $prefix . 'phone',
			'type' => 'text'
		));
		$cmb->add_field( array(
			'name' => __( 'Address', 'cmb2' ),
			'desc' => __( 'Address', 'cmb2' ),
			'id'   => $prefix . 'address',
			'type' => 'wysiwyg'
		));
	}
}
add_action('cmb2_admin_init', 'people_metabox');