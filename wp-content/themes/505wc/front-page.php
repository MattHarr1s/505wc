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
      <h1><?php echo get_post_meta(get_the_ID(), '_wc_front_page_metabox_practice_heading', true );?></h1>
      <p><?php echo get_post_meta(get_the_ID(), '_wc_front_page_metabox_practice_text', true );?>
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
            $days = get_post_meta(get_the_id(), '_practice_days', true );
            $startTime = get_post_meta(get_the_id(), '_practice_start_time', true );
            $endTime = get_post_meta(get_the_id(), '_practice_end_time', true );
            $ageRange = get_post_meta(get_the_id(), '_practice_age_range', true );
            $monthlyFee = get_post_meta(get_the_id(), '_practice_monthly_fee', true );
            $partTimeFee = get_post_meta(get_the_id(), '_practice_part_time_price', true );

            $dailyFee = get_post_meta(get_the_id(), '_practice_single_class_price', true );

            echo '<div class="widget-2-practice '. $class. '">';
            if($title != '') {
              echo '<h1>'. $title .'</h1>';
            }
            echo '<div class="practice-details">';
            if($ageRange != '') {
              echo '<p>Age Range: &nbsp; ' . $ageRange .'</p>';
            }

            if($days != '') {
              echo '<p>Days: &nbsp; ' . $days .'</p>';
            }
            if($startTime != '') {
              echo '<p>Start Time: &nbsp; ' . $startTime .'</p>';
            }

            if($endTime != '') {
              echo '<p>End Time: &nbsp; ' . $endTime .'</p>';
            }
            if($monthlyFee != '') {
              echo '<p>Full Time(Four Days a Week): &nbsp; ' . $monthlyFee .'</p>';

            }
            if($partTimeFee != '') {
              echo '<p>Part Time(Two Days a Week): &nbsp; ' . $partTimeFee .'</p>';
            }

            if($dailyFee != '') {
              echo '<p>Daily: &nbsp; ' . $dailyFee .'</p>';
            }

            echo '</div>';
            echo '</div>';
        }
        echo '</div>';
      ?>
    </br>
      <div class="payment">
          <h2>Register</h2>
          <form id="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
              <input type="hidden" name="cmd" value="_s-xclick">
              <input type="hidden" name="hosted_button_id" value="VHM86NE5JNTHY">
              <table class="paypal-form">
                  <tr><td><input type="hidden" name="on0" value="Frequency">Frequency</td></tr><tr><td><select name="os0">
                  <option value="Full time">Full time : $100.00 USD - monthly</option>
                  <option value="Part time">Part time : $85.00 USD - monthly</option>
              </select> </td></tr>
                  <tr><td><input type="hidden" name="on1" value="Wrestler's Name">Wrestler's Name</td></tr><tr><td><input type="text" name="os1" maxlength="200"></td></tr>
              </table>
              <input type="hidden" name="currency_code" value="USD">
              <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
              <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
          </form>
      </div>
    </div>
  </div>
  <?php
  genesis_widget_area( 'home-widget-3', array(
		'before' => '<div id="home-widget-3" class="home-widget-3 widget-area"><div class="wrap">',
		'after'  => '</div></div>',
  ) );
  genesis_widget_area( 'home-widget-4', array(
		'before' => '<div id="home-widget-4" class="home-widget-4 widget-area"><div class="wrap">',
		'after'  => '</div></div>',
  ) );
  }
}

genesis();
?>
