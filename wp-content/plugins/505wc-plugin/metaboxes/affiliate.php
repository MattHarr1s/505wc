<?php
/**
 * Hook in and add a metabox that only appears on the 'Affiliate' template
 */
if(!function_exists('affiliate_metabox')) {
	function affiliate_metabox() {
		$prefix = '_affiliate_';
    	$cmb = new_cmb2_box(array(
			'id' => $prefix . '_metabox',
			'title' => 'Custom Fields',
			'object_types' => array('affiliate'), //Post type
			'context' => 'normal',
			'priority' => 'high',
      		'show_names' => true
		));
		$cmb->add_field( array(
			'name' => __( 'Sponsor', 'cmb2' ),
			'desc' => __( 'Is this affiliate a sponsor', 'cmb2' ),
			'id'   => $prefix . 'sponsor',
			'type' => 'select',
			'options' => array(
				'1' => 'Yes',
				'0' => 'No'
			)
		));
		$cmb->add_field( array(
			'name' => __( 'Type of business', 'cmb2' ),
			'desc' => __( 'Type of business of this affiliate', 'cmb2' ),
			'id'   => $prefix . 'business_type',
			'type' => 'select',
			'options' => array(
				'8' => 'Bank',
				'9' => 'Title Company',
				'10' => 'Attorney',
				'15' => 'Environmental',
				'16' => 'Engineering',
				'17' => 'Financial Services',
				'18' => 'Inspections',
				'19' => 'Office Furniture',
				'20' => 'Economic Development',
				'21' => 'Publications',
				'22' => 'Insurance',
				'23' => 'State Association',
				'24' => 'Construction',
				'25' => 'Communications',
				'27' => 'Restoration',
				'28' => 'Marketing',
				'30' => 'Technology'
			)
		));

		$cmb->add_field( array(
			'name' => __( 'Organization', 'cmb2' ),
			'desc' => __( 'Organization', 'cmb2' ),
			'id'   => $prefix . 'organization',
			'type' => 'text'
		));
		$cmb->add_field( array(
			'name' => __( 'Organization Logo', 'cmb2' ),
			'desc' => __( 'Logo for Affiliate Organization', 'cmb2' ),
			'id'   => $prefix . 'org-logo',
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
add_action('cmb2_admin_init', 'affiliate_metabox');
