<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Property Color
 *
 * @version 1.0.0
 */

class Papi_Property_Color extends Papi_Property {

	/**
	 * Get default settings.
	 *
	 * @since 1.0.0
	 *
	 * @return array
	 */

	public function get_default_settings() {
		return array(
			'palettes' => array()
		);
	}

	/**
	 * Generate the HTML for the property.
	 *
	 * @since 1.0.0
	 */

	public function html() {
		$options  = $this->get_options();
		$settings = $this->get_settings();
		$value    = $this->get_value();

		?>
			<input type="hidden" value="<?php echo $value; ?>" data-palettes='<?php echo json_encode( $settings->palettes ); ?>'
				name="<?php echo $options->slug; ?>" class="papi-color-picker" />
		<?php
	}
}
