<?php

class UserInformation extends WP_Widget
{
   function __construct()
   { 

      parent::__construct('user-information-widget', 'user information');              
   }
   
   function widget($arge, $instance)
   { 
      $user = wp_current_user();

      echo $args['before_widget'];
      echo $args['before_title'];
      echo $instance['title'];
      echo $args['after_title'];

      echo $user->display_name;
       ?>
   <a herf="<?php echo home_url(). '/profile'; ?>">تکمیل اطلاعات پروفایل</a>  
   <?php
      echo $args['after_widget'];

    }

   function form($instance)
   {
      $title = !empty($instance['title']) ? $instance['title'] : 'New title';
      ?>
      <label for="<?php echo esc_attr($this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
   <?php
   }
   function update($new_instance, $old_instance)
   {
       $instance = [];
       $instance = ['title'] = !empty($new_instance['title']) ? sanitize_text_field($new_instance['title']) :'';
       return $instance;      
      }
} 
function register_custom_widget()
{
    register_widget('UserInformation');                
}

add_action('widget_init','register_custom_widget');