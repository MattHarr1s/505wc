<?php
/**
 * This file adds the Home Page to the Owner Direct Theme.
 *
 */

add_action( 'genesis_meta', 'starter_theme_home_genesis_meta' );
function starter_theme_home_genesis_meta(){

}

//* Remove the default Genesis loop (don't do the posts)
remove_action( 'genesis_loop', 'genesis_do_loop' );

//* Force full width content layout
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

add_action('genesis_after_header', 'add_home_page_widgets');
function add_home_page_widgets() {
  genesis_widget_area( 'home-widget-1', array(
		'before' => '<div id="home-widget-1" class="home-widget-1 widget-area"><div class="wrap">',
		'after'  => '</div></div>',
  ) );
  ?>
  <div id="home-widget-2" class="home-widget-2 widget-area">
    <div class="wrap">
      <h1>Practices</h1>
      <?php
        $args = array(
        'post_type' => 'practice',
        'no_paging' => true,
        );
        $the_query = new WP_Query($args);
				echo '<div class="practices-box">';
        // jordan's conditionals for front page widget 3 differing book amounts
        if($the_query->have_posts()){
          $count = 0;
          $post_count = $the_query->post_count;
          while($the_query->have_posts()){
            $the_query->the_post();
            $count ++;
            if($post_count == 4) {
              $class='one-fourth';
              if($count % 4 == 1){
                $class='one-fourth first';
              }
            }
            else if($post_count == 3) {
              $class='one-third';
              if($count % 3 == 1){
                $class='one-third first';
              }
            }
            else if($post_count == 2) {
              $class='one-half';
              if($count % 2 == 1){
                $class='one-half first';
              }
            }
            else if($post_count == 5) {
              $class='one-fifth';
              if($count % 5 == 1){
                $class='one-fifth first';
              }
            }
            else if($post_count == 1) {
              $class='full-width';
              if($count == 1){
                $class='full-width';
              }
            }
            $title = get_the_title();
            $days = get_post_meta(get_the_id(), '_practice_metabox_days', true );
            $startTime = get_post_meta(get_the_id(), '_practice_metabox_start_time', true );
            $endTime = get_post_meta(get_the_id(), '_practice_metabox_end_time', true );
            $ageRange = get_post_meta(get_the_id(), '_practice_metabox_age_range', true );
            $monthlyFee = get_post_meta(get_the_id(), '_practice_metabox_monthly_fee', true );
            $dailyFee = get_post_meta(get_the_id(), '_practice_metabox_single_class_price', true );

            echo '<div class=" widget-2-practice '. $class. '">';
            echo '<h1>'. $title .'</h1>';
            echo '<div class="practice-details">';
            echo '<p>';
            if($ageRange != '') {
              echo $ageRange;
            }
            echo '</p>';

            echo '</div>';
            echo '</div>';




        }
        echo '</div>';







      ?>

    </div>
  <?php
  }
}

genesis();
?>
