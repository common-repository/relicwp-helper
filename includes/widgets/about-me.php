<?php
/**
 * About Me Widget.
 *
 * @package PdWP WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Start class
if ( ! class_exists( 'RelicWP_Helper_About_Me_Widget' ) ) {
	class RelicWP_Helper_About_Me_Widget extends WP_Widget {

		/**
		 * Register widget with WordPress.
		 *
		 * @since 1.0.0
		 */
		public function __construct() {

			// Declare social services array
			$this->social_services_array = apply_filters( 'pdvs_about_me_widget_profiles', array(
				'facebook'		=> array(
					'name'		=> 'Facebook',
					'url'		=> ''
				),
				'google-plus'	=> array(
					'name'		=> 'GooglePlus',
					'url'		=> ''
				),
				'instagram'		=> array(
					'name'		=> 'Instagram',
					'url'		=> ''
				),
				'linkedin' 		=> array(
					'name'		=> 'LinkedIn',
					'url'		=> ''
				),
				'pinterest' 	=> array(
					'name'		=> 'Pinterest',
					'url'		=> ''
				),
				'twitter' 		=> array(
					'name'		=> 'Twitter',
					'url'		=> ''
				),
				'youtube' 		=> array(
					'name'		=> 'Youtube',
					'url'		=> ''
				),
			) );

			// Start up widget
			parent::__construct(
				'pdvs_about_me',
				esc_html__( '&raquo; About Me', 'relicwp-helper' ),
				array(
					'classname'   => 'widget-pdwp-about-me about-me-widget',
					'description' => esc_html__( 'Adds a about me widget.', 'relicwp-helper' ),
					'customize_selective_refresh' => true,
				)
			);
			add_action( 'load-widgets.php', array( $this, 'scripts' ), 100 );

			// Since 1.3.8
			add_action( 'admin_head-widgets.php', array( $this, 'social_widget_style' ) );
			add_action( 'admin_footer-widgets.php', array( $this, 'print_scripts' ) );
		}

		/**
		 * Enqueue media scripts
		 *
		 * @since 1.0.0
		 */
		public function scripts() {
			// If is not customizer to avoid conflct
			if ( is_customize_preview() ) {
				return;
			}

			wp_enqueue_media();
		}

		/**
		 * Custom widget style
		 *
		 * @since  1.0.0
		 *
		 * @param string $hook_suffix
		 */
		public function social_widget_style() { ?>
			<style>
				.pdwp-about-me-widget-services-list { padding-top: 10px; }
				.pdwp-about-me-widget-services-list li { cursor: move; background: #fafafa; padding: 10px; border: 1px solid #e5e5e5; margin-bottom: 10px; }
				.pdwp-about-me-widget-services-list li p { margin: 0 }
				.pdwp-about-me-widget-services-list li label { margin-bottom: 3px; display: block; color: #222; }
				.pdwp-about-me-widget-services-list li label span.fab { margin-right: 10px }
				.pdwp-about-me-widget-services-list .placeholder { border: 1px dashed #e3e3e3 }
				.pdwp-widget-select { width: 100% }
			</style>
		<?php
		}

		/**
		 * Print scripts.
		 *
		 * @since  1.0.0
		 */
		public function print_scripts() {
			// If is not customizer to avoid conflct
			if ( is_customize_preview() ) {
				return;
			} ?>

			<script>
				( function( $ ){
					$(document).ajaxSuccess(function(e, xhr, settings) {
						var widget_id_base = 'pdvs_about_me';
						if ( settings.data.search( 'action=save-widget' ) != -1 && settings.data.search( 'id_base=' + widget_id_base) != -1 ) {
							pdwpSortServices();
						}
					} );

					function pdwpSortServices() {
						$( '.pdwp-about-me-widget-services-list' ).each( function() {
							var id = $(this).attr( 'id' );
							$( '#'+ id ).sortable( {
								placeholder : "placeholder",
								opacity     : 0.6
							} );
						} );
					}

					pdwpSortServices();
				}( jQuery ) );
			</script>
		<?php
		}

		/**
		 * Front-end display of widget.
		 *
		 * @see WP_Widget::widget()
		 * @since 1.0.0
		 *
		 * @param array $args     Widget arguments.
		 * @param array $instance Saved values from database.
		 */
		public function widget( $args, $instance ) {

			// Get social services and
			$social_services = isset( $instance['social_services'] ) ? $instance['social_services'] : '';

			// Return if no services defined
			if ( ! $social_services ) {
				return;
			}

			// Define vars
			$title       		= isset( $instance['title'] ) ? apply_filters( 'widget_title', $instance['title'] ) : '';
			$avatar 			= isset( $instance['avatar'] ) ? $instance['avatar'] : '';
			$name 				= isset( $instance['name'] ) ? $instance['name'] : '';
			$text 				= isset( $instance['text'] ) ? $instance['text'] : '';
			$social_style 		= isset( $instance['social_style'] ) ? $instance['social_style'] : '';
			$target 			= isset( $instance['target'] ) ? $instance['target'] : '';

			// Before widget WP hook
			echo $args['before_widget'];

				// Show widget title
				if ( $title ) {
					echo $args['before_title'] . esc_html( $title ) . $args['after_title'];
				} ?>

				<div class="pdwp-about-me">

					<div class="pdwp-about-me-avatar clr">

						<?php
						// Display the avatar
						if ( $avatar ) : ?>
							<img src="<?php echo esc_url( $avatar ); ?>" alt="<?php echo esc_html( $title ); ?>" />
						<?php endif;

						// Display the name
						if ( $name ) :?>
							<h3 class="pdwp-about-me-name"><?php echo esc_html( $name ); ?></h3>
						<?php endif; ?>

					</div><!-- .pdwp-about-me-avatar -->

					<?php
					// Display the text
					if ( $text ) : ?>
						<div class="pdwp-about-me-text clr"><?php echo do_shortcode( $text ); ?></div>
					<?php endif;

					// Display the social
					if ( $social_services ) : ?>

						<ul class="pdwp-about-me-social style-<?php echo esc_attr( $social_style ); ?>">
							<?php
							// Original Array
							$social_services_array = $this->social_services_array;

							// Loop through each item in the array
							foreach( $social_services as $key => $val ) {
								$link     = ! empty( $social_services[$key]['url'] ) ? $social_services[$key]['url'] : null;
								$name     = $social_services_array[$key]['name'];
								$nofollow = isset( $social_services_array[$key]['nofollow'] ) ? ' rel="nofollow"' : '';
								if ( $link ) {
									$icon = 'youtube' == $key ? 'youtube' : $key;
									$icon = 'pinterest' == $key ? 'pinterest-p' : $icon;
									echo '<li class="'. esc_attr( $key ) .'"><a href="'. esc_url( $link ) .'" title="'. esc_html( $name ) .'"  target="_'.esc_attr( $target ).'""><i class="fab fa-'. esc_attr( $icon ) .'"></i></a></li>';
								}
							} ?>

						</ul>

					<?php endif; ?>

				</div>

			<?php
			// After widget WP hook
			echo $args['after_widget'];

		}

		/**
		 * Sanitize widget form values as they are saved.
		 *
		 * @see WP_Widget::update()
		 * @since 1.0.0
		 *
		 * @param array $new_instance Values just sent to be saved.
		 * @param array $old_instance Previously saved values from database.
		 *
		 * @return array Updated safe values to be saved.
		 */
		public function update( $new_instance, $old_instance ) {
			$instance                		= $old_instance;
			$instance['title']       		= strip_tags( $new_instance['title'] );
			$instance['avatar']       		= strip_tags( $new_instance['avatar'] );
			$instance['name']   			= strip_tags( $new_instance['name'] );
			$instance['text']   			= $new_instance['text'];
			$instance['social_style']   	= strip_tags( $new_instance['social_style'] );
			$instance['target']   			= strip_tags( $new_instance['target'] );
			$instance['social_services'] 	= $new_instance['social_services'];
			return $instance;
		}

		/**
		 * Back-end widget form.
		 *
		 * @see WP_Widget::form()
		 * @since 1.0.0
		 *
		 * @param array $instance Previously saved values from database.
		 */
		public function form( $instance ) {
			$instance = wp_parse_args( ( array ) $instance, array(
				'title'       		=> esc_html__( 'About Me', 'relicwp-helper' ),
				'avatar' 			=> RTHP_URL .'assets/img/about-avatar.png',
				'name'  			=> esc_html__( 'John Doe', 'relicwp-helper' ),
				'text' 				=> 'Lorem ipsum ex vix illud nonummy novumtatio et his. At vix patrioque scribentur at fugitertissi ext scriptaset verterem molestiae.',
				'social_style' 		=> 'color',
				'target' 			=> 'blank',
				'social_services' 	=> $this->social_services_array
			) ); ?>

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title', 'relicwp-helper' ); ?>:</label>
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['title'] ); ?>" />
			</p>

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'avatar' ) ); ?>"><?php esc_html_e( 'Image URL', 'relicwp-helper' ); ?>:</label>
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'avatar' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'avatar' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['avatar'] ); ?>" style="margin-bottom:10px;" />
				<input class="pdwp-widget-upload-button button button-secondary" type="button" value="<?php esc_html_e( 'Upload Image', 'relicwp-helper' ); ?>" />
			</p>

			<p>
			    <label for="<?php echo esc_attr( $this->get_field_id( 'name' ) ); ?>"><?php esc_html_e('Name:', 'relicwp-helper') ?></label>
			    <input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'name' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'name' ) ); ?>" value="<?php echo esc_attr( $instance['name'] ); ?>" />
			</p>

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>"><?php esc_html_e( 'Description:','relicwp-helper' ); ?></label>
				<textarea rows="15" id="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>" class="widefat" style="height: 100px;"><?php if( !empty( $instance['text'] ) ) { echo esc_textarea( $instance['text'] ); } ?></textarea>
			</p>

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id('social_style') ); ?>"><?php esc_html_e('Social Style:', 'relicwp-helper'); ?></label>
				<br />
				<select class='widget-select widefat' name="<?php echo esc_attr( $this->get_field_name('social_style') ); ?>" id="<?php echo esc_attr( $this->get_field_id('social_style') ); ?>">
					<option value="color" <?php selected( $instance['social_style'], 'color' ) ?>><?php esc_html_e( 'Color', 'relicwp-helper' ); ?></option>
					<option value="light" <?php selected( $instance['social_style'], 'light' ) ?>><?php esc_html_e( 'Light', 'relicwp-helper' ); ?></option>
					<option value="dark" <?php selected( $instance['social_style'], 'dark' ) ?>><?php esc_html_e( 'Dark', 'relicwp-helper' ); ?></option>
				</select>
			</p>

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id('target') ); ?>"><?php esc_html_e( 'Social Link Target:', 'relicwp-helper' ); ?></label>
				<br />
				<select class='widget-select widefat' name="<?php echo esc_attr( $this->get_field_name('target') ); ?>" id="<?php echo esc_attr( $this->get_field_id('target') ); ?>">
					<option value="blank" <?php selected( $instance['target'], 'blank' ) ?>><?php esc_html_e( 'Blank', 'relicwp-helper' ); ?></option>
					<option value="self" <?php selected( $instance['target'], 'self' ) ?>><?php esc_html_e( 'Self', 'relicwp-helper' ); ?></option>
				</select>
			</p>

			<?php
			$field_id_services   = $this->get_field_id( 'social_services' );
			$field_name_services = $this->get_field_name( 'social_services' ); ?>
			<h3 style="margin-top:20px;margin-bottom:0;"><?php esc_html_e( 'Social Links','relicwp-helper' ); ?></h3>
			<ul id="<?php echo esc_attr( $field_id_services ); ?>" class="pdwp-about-me-widget-services-list">
				<input type="hidden" id="<?php echo esc_attr( $field_name_services ); ?>" value="<?php echo esc_attr( $field_name_services ); ?>">
				<input type="hidden" id="<?php echo esc_attr( wp_create_nonce( 'pdwp_fontawesome_social_widget_nonce' ) ); ?>">
				<?php
				// Social array
				$social_services_array = $this->social_services_array;
				// Get current services display
				$display_services = isset ( $instance['social_services'] ) ? $instance['social_services']: '';
				// Loop through social services to display inputs
				foreach( $display_services as $key => $val ) {
					$url  = ! empty( $display_services[$key]['url'] ) ? esc_url( $display_services[$key]['url'] ) : null;
					$name = $social_services_array[$key]['name']; ?>
					<li id="<?php echo esc_attr( $field_id_services ); ?>_0<?php echo esc_attr( $key ); ?>">
						<p>
							<label for="<?php echo esc_attr( $field_id_services ); ?>-<?php echo esc_attr( $key ); ?>-name"><?php echo esc_html( strip_tags( $name ) ); ?>:</label>
							<input type="hidden" id="<?php echo esc_attr( $field_id_services ); ?>-<?php echo esc_attr( $key ); ?>-url" name="<?php echo esc_attr( $field_name_services .'['.$key.'][name]' ); ?>" value="<?php echo esc_attr( $name ); ?>">
							<input type="text" class="widefat" id="<?php echo esc_attr( $field_id_services ); ?>-<?php echo esc_attr( $key ); ?>-url" name="<?php echo esc_attr( $field_name_services .'['.$key.'][url]' ); ?>" value="<?php echo esc_attr( $url ); ?>" />
						</p>
					</li>
				<?php } ?>
			</ul>

			<script type="text/javascript">
				(function($) {
					"use strict";
					$( document ).ready( function() {
						var _custom_media = true,
							_orig_send_attachment = wp.media.editor.send.attachment;
						$( '.pdwp-widget-upload-button' ).click(function(e) {
							var send_attachment_bkp	= wp.media.editor.send.attachment,
								button = $(this),
								id = button.prev();
								_custom_media = true;
							wp.media.editor.send.attachment = function( props, attachment ) {
								if ( _custom_media ) {
									$( id ).val( attachment.url );
								} else {
									return _orig_send_attachment.apply( this, [props, attachment] );
								};
							}
							wp.media.editor.open( button );
							$('input').trigger('change');
							return false;
						} );
						$( '.add_media').on('click', function() {
							_custom_media = false;
						} );
					} );
				} ) ( jQuery );
			</script>

		<?php

		}

	}
}
register_widget( 'RelicWP_Helper_About_Me_Widget' );