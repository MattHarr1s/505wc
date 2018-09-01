<?php
/**
 * Hook in and add a metabox that only appears on the 'camps' template
 */

 if(!function_exists('camp_metabox')){
   function camp_metabox(){
     $prefix = '_camp_';
     $cmb = new_cmb2_box(array(
     'id' => $prefix . '_metabox',
     'title' => 'Custom Fields',
     'object_types' => array('camp'), //Post type
     'context' => 'normal',
     'priority' => 'high',
         'show_names' => true
   ));
   		$cmb->add_field( array(
   			'name' => __( 'First Day', 'cmb2' ),
   			'desc' => __( 'First Day', 'cmb2' ),
   			'id'   => $prefix . 'first_date',
   			'type' => 'text_date'
   		));
      $cmb->add_field( array(
   			'name' => __( 'Second Day', 'cmb2' ),
   			'desc' => __( 'Second Day', 'cmb2' ),
   			'id'   => $prefix . 'second_date',
   			'type' => 'text_date'
   		));
      $cmb->add_field( array(
   			'name' => __( 'Start Time', 'cmb2' ),
   			'desc' => __( 'Start Time', 'cmb2' ),
   			'id'   => $prefix . 'start_time',
   			'type' => 'text_time'
   		));
      $cmb->add_field( array(
   			'name' => __( 'End Time', 'cmb2' ),
   			'desc' => __( 'End Time', 'cmb2' ),
   			'id'   => $prefix . 'end_time',
   			'type' => 'text_time'
   		));
      $cmb->add_field( array(
   			'name' => __( 'Age range', 'cmb2' ),
   			'desc' => __( 'Age Range', 'cmb2' ),
   			'id'   => $prefix . 'age_range',
   			'type' => 'text_medium'
   		));
      $cmb->add_field( array(
   			'name' => __( 'Cost For Members', 'cmb2' ),
   			'desc' => __( 'Cost For Members', 'cmb2' ),
   			'id'   => $prefix . 'members_cost',
   			'type' => 'text_medium'
   		));
      $cmb->add_field( array(
   			'name' => __( 'Cost For Non-Members', 'cmb2' ),
   			'desc' => __( 'Cost For Non-Members', 'cmb2' ),
   			'id'   => $prefix . 'non_members_cost',
   			'type' => 'text_medium'
   		));
      $cmb->add_field( array(
   			'name' => __( 'Flyer', 'cmb2' ),
   			'desc' => __( 'Flyer', 'cmb2' ),
   			'id'   => $prefix . 'flyer',
   			'type' => 'file'
   		));
      $cmb->add_field( array(
   			'name' => __( 'Techniques Covered', 'cmb2' ),
   			'desc' => __( 'Techniques Covered', 'cmb2' ),
   			'id'   => $prefix . 'technique',
   			'type' => 'text_medium',
        'repeatable' => true
   		));
   }
 }

 add_action('cmb2_admin_init', 'camp_metabox');
