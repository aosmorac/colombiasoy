<?php
/*-----------------------------------------------------------------------------------*/
/*  elicit Lite Customizer Controls
/*-----------------------------------------------------------------------------------*/

class elicit_Lite_Misc_Control extends WP_Customize_Control {


	public $settings = 'blogname';
	public $description = '';
	public $group = '';

	/**
	 * Render the description and title for the sections
	 */
	public function render_content() {
		switch ( $this->type ) {
			default:

			case 'heading':
				echo '<span class="customize-control-title">' . $this->title . '</span>';
				break;

			case 'custom_message' :
				echo '<p class="description">' . $this->description . '</p>';
				break;

			case 'hr' :
				echo '<hr />';
				break;
		}
	}
}


class elicit_Lite_Theme_Support extends WP_Customize_Control {
	public function render_content() {
		echo __( 'UPGRADE TO<a href="#">PRO</a>', 'elicit' );
	}
}


class elicit_Customize_upgrade extends WP_Customize_Control {
		public function render_content() { ?>
			<a title="<?php esc_html_e( 'Review elicit', 'elicit' ); ?>" href="<?php echo esc_url( 'https://wordpress.org/support/theme/elicit/reviews/?filter=5' ); ?>" target="_blank" id="about_elicit">
			<?php esc_html_e( 'Review elicit', 'elicit' ); ?>
			</a><br/>
			<a href="<?php echo esc_url( 'http://mizmizi.com/elicit/docs/' ); ?>" title="<?php esc_html_e( 'Theme Instructions', 'elicit' ); ?>" target="_blank" id="about_elicit">
			<?php esc_html_e( 'Theme Instructions', 'elicit' ); ?>
			</a><br/>
		<?php
		}
	}
	$wp_customize->add_section('elicit_upgrade_links', array(
		'title'					=> __('Elicit Documentation', 'elicit'),
		'priority'				=> 1,
	));
	$wp_customize->add_setting( 'elicit_upgrade_links', array(
		'default'				=> false,
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new elicit_Customize_upgrade(
		$wp_customize,
		'elicit_upgrade_links',
			array(
				'section'				=> 'elicit_upgrade_links',
				'settings'				=> 'elicit_upgrade_links',
			)
		)
	);
	


