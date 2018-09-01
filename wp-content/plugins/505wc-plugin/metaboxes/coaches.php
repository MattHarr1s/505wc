<?php
/**
 * Hook in and add a metabox that only appears on the 'Coaches' template
 */

 if(!function_exists('coach_metabox')){
   function coach_metabox(){
     $prefix = '_coach_';
     $cmb = new_cmb2_box(array(
     'id' => $prefix . '_metabox',
     'title' => 'Custom Fields',
     'object_types' => array('page'), //Post type
     'show_on' => array( 'key' => 'page-template', 'value' => 'coach.php' ),
     'context' => 'normal',
     'priority' => 'high',
         'show_names' => true
   ));
   		$cmb->add_field( array(
   			'name' => __( 'Phone number', 'cmb2' ),
   			'desc' => __( 'Phone number', 'cmb2' ),
   			'id'   => $prefix . 'phone',
   			'type' => 'text'
   		));
      $cmb->add_field( array(
   			'name' => __( 'Email', 'cmb2' ),
   			'desc' => __( 'Email', 'cmb2' ),
   			'id'   => $prefix . 'email',
   			'type' => 'text_email'
   		));
    	$group_field_id = $cmb->add_field(array(
  				'id' => $prefix . 'Accomplishments',
  				'type' => 'group',
  				'description' => __('Accomplishments for coaches', 'cmb2'),
  				'options' => array(
  					'group_title' => __('Accomplishments{#}', 'cmb2'),
  					'add_button' => __('Add Another Section', 'cmb2'),
  					'remove_button' => __('Remove Section', 'cmb2'),
  					'sortable' => true,
  					'repeatable' => true,
  				),
  			));
  			$cmb->add_group_field($group_field_id, array(
  				'name' => 'Accomplishment',
  				'id' => 'accomplishment',
  				'type' => 'text',
  			));



   }
 }
