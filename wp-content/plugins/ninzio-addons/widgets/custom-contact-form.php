<?php 
	
	add_action('widgets_init', 'ninzio_addons_register_fast_contact_widget');
	function ninzio_addons_register_fast_contact_widget(){
		register_widget( 'Ninzio_Addons_WP_Widget_Fast_Contact' );
	} 

	class Ninzio_Addons_WP_Widget_Fast_Contact extends WP_Widget {

		public function __construct() {
			parent::__construct(
				'fast_contact_widget',
				esc_html__('* Fast Contact Form', 'ninzio-addons'),
				array( 'description' => esc_html__('Fast Contact Form widget', 'ninzio-addons'))
			);
		}

		public function widget( $args, $instance ) {

			extract($args);

			$title 	      = apply_filters( 'widget_title', $instance['title'] );
			$submit_text  = isset($instance['submit_text']) ? esc_attr($instance['submit_text']) : esc_html__('Send', 'ninzio-addons');

			echo $before_widget;

				if ( ! empty( $title ) ){echo $before_title . $title . $after_title;}

	            ?>

				<div class="montserrat-contact-form">
					<form name="montserrat-contact-form" class="myform" method="POST">

						<div>
							<input type="text" name="montserrat_contact_form_name" class="montserrat-contact-form-name" placeholder="<?php echo esc_html__('Your Name', 'ninzio-addons'); ?>" value=""/>
							<span class="alert montserrat-contact-form-name-valid alert"><?php echo esc_html__('Please enter your name.', 'ninzio-addons'); ?></span>
						</div>

						<div>
							<input type="text" name="montserrat_contact_form_email" class="montserrat-contact-form-email" placeholder="<?php echo esc_html__('Your Email', 'ninzio-addons'); ?>" value=""/> 
							<span class="alert montserrat-contact-form-email-valid alert"><?php echo esc_html__('Invalid or empty email.', 'ninzio-addons'); ?></span>
						</div>

						<div>
							<textarea name="montserrat_contact_form_mgs" class="montserrat-contact-form-mgs" placeholder="<?php echo esc_html__('Write your message.', 'ninzio-addons'); ?>"></textarea>
							<span class="alert montserrat-contact-form-msg-valid alert"><?php echo esc_html__('Please enter your message.', 'ninzio-addons'); ?></span>
						</div>

						<div class="montserrat-contact-form-submit-div">
							<a href="#" class="button button-normal default full-false small square icon-false animate-false anim-type-ghost hover-fill montserrat-contact-form-submit">
								<span class="txt"><?php echo $submit_text; ?></span>
							</a>
							<div class="sending" ></div>
						</div>
		            	<div class="montserrat-contact-form-submit-success alert"><?php echo esc_html__('Your message successfully sent.', 'ninzio-addons'); ?></div>
		            	<div class="montserrat-contact-form-submit-error alert"><?php echo esc_html__('Something went wrong. Your message was not send.', 'ninzio-addons'); ?></div>
		            </form>
        		</div>

			<?php echo $after_widget;
		}

	 	public function form( $instance ) {

	 		$defaults = array(
	 			'title'       => esc_html__('Fast contact', 'ninzio-addons'),
	 			'submit_text' => esc_html__('Send', 'ninzio-addons'),
	 		);

	 		$instance = wp_parse_args((array) $instance, $defaults);

			?>
			<p>
				<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php echo esc_html__( 'Title:', 'ninzio-addons' ); ?></label> 
				<input class="widefat" class="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $instance['title'] ); ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('submit_text'); ?>"><?php echo esc_html__( 'Submit button text:', 'ninzio-addons' ); ?></label>
				<input class="widefat" class="<?php echo $this->get_field_id('submit_text'); ?>" name="<?php echo $this->get_field_name('submit_text'); ?>" type="text" value="<?php echo $instance['submit_text']; ?>" />
			</p>
			<?php
		}

		public function update( $new_instance, $old_instance ) {
			$instance = $old_instance;
			$instance['title']       = strip_tags( $new_instance['title'] );
			$instance['submit_text'] = strip_tags($new_instance['submit_text']);
			return $instance;
		}
	}
?>