<?php
// Register and load the widget
function wpb_load_widget() {
	register_widget( 'g7_mobile_navigation' );
}
add_action( 'widgets_init', 'wpb_load_widget' );

// Creating the widget 
class g7_mobile_navigation extends WP_Widget {

	function __construct() {
		parent::__construct(

		// Base ID of your widget
		'g7_mobile_navigation', 

		// Widget name will appear in UI
		__('G7 Mobile Navigation', 'g7_mobile_navigation_domain'), 

		// Widget description
		array( 'description' => __( 'Custom widget to add content to mobile navigation menu' ), ) 
		);
	}

	// Creating widget front-end
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );

		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		if ( ! empty( $title ) )
		echo $args['before_title'] . $title . $args['after_title'];

		// This is where you run the code and display the output
		// echo __( 'Hello, World!', 'g7_mobile_navigation_domain' );
		echo '<hr><div class="pr-3 pl-3 pt-4 pb-4"><h5>Contact us</h5><br><p>(615) 988-3422</p><p>info@g7marketing.com</p><br><p>801 18th Ave S</p><p> Nashville, TN 37203</p></div><hr><div class="pr-3 pl-3 pt-4 pb-4"><h5 class="mb-4">Sign up to our newsletter</h4><a href="#" class="d-block icon-arrow grey-scale"></a></div>';
		echo $args['after_widget'];
	}
			
	// Widget Backend 
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( '', 'g7_mobile_navigation_domain' );
		}
		// Widget admin form
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<?php 
	}
		
	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
}
