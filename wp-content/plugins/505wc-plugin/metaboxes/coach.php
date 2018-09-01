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
     'object_types' => array('coach'), //Post type
     'context' => 'normal',
     'priority' => 'high',
         'show_names' => true
   ));
 		$cmb->add_field( array(
 			'name' => __( 'Role', 'cmb2' ),
 			'desc' => __( 'Coaching role', 'cmb2' ),
 			'id'   => $prefix . 'role',
 			'type' => 'text'
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
  		$cmb->add_field( array(
  			'name' => __( 'Headshot', 'cmb2' ),
  			'desc' => __( 'Headshot of coach', 'cmb2' ),
  			'id'   => $prefix . 'photo',
  			'type' => 'file'
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
    			$cmb->add_group_field($group_field_id, array(
  				'name' => 'School or Club',
  				'id' => 'school',
  				'type' => 'text',
  			));
   }
 }

add_action('cmb2_admin_init', 'coach_metabox');
