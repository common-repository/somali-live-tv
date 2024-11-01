<?php
/**
 * Somali TV Widget class.
 *
 * @class 		Somali_TV_Widget
 * @version     1.0
 * @package 	Somali_TV/Classes
 * @author 		OmarTeacher
 * @category 	Widgets
 */
class Somali_TV_Widget extends WP_Widget {

	function __construct() {
		$widget_ops = array( 'classname' => 'widget_somali_tv', 'description' => __( 'Somali TV widget.', 'somali_tv' ) );
		parent::__construct( 'somali_tv', __( 'Somali TV', 'somali-tv' ), $widget_ops );
	}

  function widget($args, $instance) {
    // PART 1: Extracting the arguments + getting the values
    extract($args, EXTR_SKIP);
    $title = empty($instance['title']) ? ' ' : apply_filters('widget_title', $instance['title']);
    $text = empty($instance['text']) ? '' : $instance['text'];
   
    // Before widget code, if any
    echo (isset($before_widget)?$before_widget:'');
   
    // PART 2: The title and the text output
    if (!empty($title))
      echo $before_title . $title . $after_title;;
    if (!empty($text))
      echo $text;
   
    // After widget code, if any  
    echo (isset($after_widget)?$after_widget:'');
  }
  public function form( $instance ) {
   
     // PART 1: Extract the data from the instance variable
     $instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
     $title = $instance['title'];
     $text = $instance['text'];   
   
     // PART 2-3: Display the fields
     ?>
     <!-- PART 2: Widget Title field START -->
     <p>
      <label for="<?php echo $this->get_field_id('title'); ?>">Magaca Barnaamijka: 
        <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" 
               name="<?php echo $this->get_field_name('title'); ?>" type="text" 
               value="Live TV" />
      </label>
      </p>
      <!-- Widget Title field END -->
   
      <!-- PART 3: Widget Text field START -->
     <p>
      <label for="<?php echo $this->get_field_id('text'); ?>">Barnaamijka TV yada live ka taabo save oo kaliya walaal. 
        <textarea style="display:none;" class="widefat" id="<?php echo $this->get_field_id('text'); ?>" 
               name="<?php echo $this->get_field_name('text'); ?>" type="text" 
               /><iframe width="100%" height="500" class="tvwidget"  src="<?php echo get_site_url(); ?>/wp-content/plugins/somali-live-tv/wwidgetopen.php" scrolling="no" name="livetv" border="0" frameborder="0"></iframe></textarea>
      </label>
      </p>
      <!-- Widget Text field END -->
     <?php
   
  }
 
  function update($new_instance, $old_instance) {
    $instance = $old_instance;
    $instance['title'] = $new_instance['title'];
    $instance['text'] = $new_instance['text'];
    return $instance;
  }
  
}

register_widget( 'Somali_TV_Widget' );