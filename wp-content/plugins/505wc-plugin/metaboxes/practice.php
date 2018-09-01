<?php
/**
 * Hook in and add a metabox that only appears on the 'practicees' template
 */

 if(!function_exists('practice_metabox')){
   function practice_metabox(){
     $prefix = '_practice_';
     $cmb = new_cmb2_box(array(
     'id' => $prefix . '_metabox',
     'title' => 'Custom Fields',
     'object_types' => array('practice'), //Post type
     'context' => 'normal',
     'priority' => 'high',
         'show_names' => true
   ));
   		$cmb->add_field( array(
   			'name' => __( 'Days of the week', 'cmb2' ),
   			'desc' => __( 'Days of the week', 'cmb2' ),
   			'id'   => $prefix . 'days',
   			'type' => 'textarea'
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
   			'name' => __( 'Cost Per Month', 'cmb2' ),
   			'desc' => __( 'Cost Per Month', 'cmb2' ),
   			'id'   => $prefix . 'monthly_fee',
   			'type' => 'text_medium'
   		));
      $cmb->add_field( array(
   			'name' => __( 'Single Class Price', 'cmb2' ),
   			'desc' => __( 'Single Class Price', 'cmb2' ),
   			'id'   => $prefix . 'single_class_price',
   			'type' => 'text_medium'
   		));
   }
 }

 add_action('cmb2_admin_init', 'practice_metabox');
