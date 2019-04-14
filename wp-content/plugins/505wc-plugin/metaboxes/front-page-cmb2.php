<?php
/**
 * Hook in and add a metabox that only appears on the 'Front' page
 */
if(!function_exists('wc_register_front_page_metabox')) {
	function wc_register_front_page_metabox() {
		$prefix = '_wc_front_page_metabox_';
    $cmb = new_cmb2_box(array(
			'id' => $prefix . 'metabox',
			'title' => 'FrontPage',
			'object_types' => array('page'), //Post type
			'show_on' => array('key' => 'page', 'value' => 'home'), //Find real post/page number later
			'show_names' => true, //show field names on the left
			'context' => 'normal',
			'priority' => 'high',
		));
		$cmb->add_field( array(
			'name' => __( 'Practice heading', 'cmb2' ),
			'desc' => __( 'Heading above practice section', 'cmb2' ),
			'id'   => $prefix . 'practice_heading',
			'type' => 'text'
		));
		$cmb->add_field( array(
			'name' => __( 'Practice Descriptions', 'cmb2' ),
			'desc' => __( 'Text above the practices on the front page', 'cmb2' ),
			'id'   => $prefix . 'practice_text',
			'type' => 'textarea'
		));
  }
}
add_action('cmb2_admin_init', 'wc_register_front_page_metabox');
