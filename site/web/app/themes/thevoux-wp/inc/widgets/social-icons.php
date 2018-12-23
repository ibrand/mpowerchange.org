<?php
// thb Social counter
class widget_socialicons extends WP_Widget { 

	function __construct() {
		$widget_ops = array(
			'classname'   => 'widget_socialicons',
			'description' => esc_html__('Display Social Icons','thevoux')
		);
		
		parent::__construct(
			'thb_socialicons_widget',
			esc_html__( 'Fuel Themes - Social Icons' , 'thevoux' ),
			$widget_ops
		);
				
		$this->defaults = array( 
			'title' => 'Social Icons', 
			'style' => 'style1',
			'Twitter' => false, 
			'Facebook' => false, 
			'Instagram' => false, 
			'Google' => false,
			'SnapChat' => false,
			'Tumblr' => false );
	}
	
	function widget($args, $instance) {
		extract($args);
		$title = apply_filters('widget_title', $instance['title']);
		$style = isset($instance['style']) ? $instance['style'] : 'style1';
		$twitter = $instance['Twitter'];
		$facebook = $instance['Facebook'];
		$instagram = $instance['Instagram'];
		$google = $instance['Google'];
		$snapchat = $instance['SnapChat'];
		$tumblr = $instance['Tumblr'];
		// Output
		echo $before_widget;
		
		if ($title) { echo $before_title . $title . $after_title; }
		
		$count = $style === 'style1' ? 0 : '3';
		foreach ($instance as $ins => $value) { 
			if (in_array($ins, array('Facebook', 'Twitter', 'Instagram', 'Google', 'SnapChat', 'Tumblr')) && $value ) {
				if ($style === 'style1') { 
					$count++;
				}
			}
		}
		?>
			<ul class="row thb-social-icons small-up-<?php echo esc_attr($count); ?> social-icons-<?php echo esc_attr($style); ?>">
				<?php
					foreach ($instance as $ins => $value) { 
						if (in_array($ins, array('Facebook', 'Twitter', 'Instagram', 'Google', 'SnapChat', 'Tumblr')) && $value ) {
							?>
							<li class="column"><a href="<?php echo esc_url($value); ?>" class="social <?php echo esc_attr(strtolower($ins)); ?>" target="_blank"><i class="fa fa-<?php echo esc_attr(strtolower($ins)); ?>"></i></a></li>
							<?php
						}
					}
				?>
			</ul>
		<?php
		echo $after_widget;
	}
	function update( $new_instance, $old_instance ) {  
		$instance = $old_instance; 
		
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['style'] = strip_tags( $new_instance['style'] );
		$instance['Twitter'] = strip_tags( $new_instance['Twitter'] );
		$instance['Facebook'] = strip_tags( $new_instance['Facebook'] );
		$instance['Instagram'] = strip_tags( $new_instance['Instagram'] );
		$instance['Google'] = strip_tags( $new_instance['Google'] );
		$instance['SnapChat'] = strip_tags( $new_instance['SnapChat'] );
		$instance['Tumblr'] = strip_tags( $new_instance['Tumblr'] );
		return $instance;
	}
	// Settings form
	function form($instance) {
		$defaults = array(
			'title' => '',
			'style' => 'style1',
			'Twitter' => false,
			'Facebook' => false,
			'Instagram' => false,
			'Google' => false,
			'SnapChat' => false,
			'Tumblr' => false
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); 
		?>
			<p>
			  <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php esc_html_e('Widget Title:', 'thevoux'); ?></label>
			  <input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" class="widefat" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('style1'); ?>">
				<input id="<?php echo $this->get_field_id('style1'); ?>" name="<?php echo $this->get_field_name('style'); ?>" type="radio" value="style1" <?php if($instance['style'] === 'style1' || !$instance['style']){ echo 'checked="checked"'; } ?> /> Style 1
				</label><br>
				<label for="<?php echo $this->get_field_id('style2'); ?>">
				<input id="<?php echo $this->get_field_id('style2'); ?>" name="<?php echo $this->get_field_name('style'); ?>" type="radio" value="style2" <?php if($instance['style'] === 'style2'){ echo 'checked="checked"'; } ?> /> Style 2
				</label>
			</p>
			<p>
		    <label for="<?php echo $this->get_field_id( 'Twitter' ); ?>">Twitter Link:</label>
		    <input id="<?php echo $this->get_field_id( 'Twitter' ); ?>" name="<?php echo $this->get_field_name( 'Twitter' ); ?>" value="<?php echo $instance['Twitter']; ?>" class="widefat" />
			</p>
			<p>
			  <label for="<?php echo $this->get_field_id( 'Facebook' ); ?>">Facebook Link:</label>
			  <input id="<?php echo $this->get_field_id( 'Facebook' ); ?>" name="<?php echo $this->get_field_name( 'Facebook' ); ?>" value="<?php echo $instance['Facebook']; ?>" class="widefat" />
			</p>
			<p>
			  <label for="<?php echo $this->get_field_id( 'Instagram' ); ?>">Instagram Link:</label>
			  <input id="<?php echo $this->get_field_id( 'Instagram' ); ?>" name="<?php echo $this->get_field_name( 'Instagram' ); ?>" value="<?php echo $instance['Instagram']; ?>" class="widefat" />
			</p>
			<p>
			  <label for="<?php echo $this->get_field_id( 'Google' ); ?>">Google Link:</label>
			  <input id="<?php echo $this->get_field_id( 'Google' ); ?>" name="<?php echo $this->get_field_name( 'Google' ); ?>" value="<?php echo $instance['Google']; ?>" class="widefat" />
			</p>
			<p>
			  <label for="<?php echo $this->get_field_id( 'SnapChat' ); ?>">SnapChat Link:</label>
			  <input id="<?php echo $this->get_field_id( 'SnapChat' ); ?>" name="<?php echo $this->get_field_name( 'SnapChat' ); ?>" value="<?php echo $instance['SnapChat']; ?>" class="widefat" />
			</p>
			<p>
			  <label for="<?php echo $this->get_field_id( 'Tumblr' ); ?>">Tumblr Link:</label>
			  <input id="<?php echo $this->get_field_id( 'Tumblr' ); ?>" name="<?php echo $this->get_field_name( 'Tumblr' ); ?>" value="<?php echo $instance['Tumblr']; ?>" class="widefat" />
			</p>
    <?php
	}
}
function widget_socialicons_init()
{
	register_widget('widget_socialicons');
}
add_action('widgets_init', 'widget_socialicons_init');