<?php
/**
 * Customizer
 *
 * @package WordPress
 * @subpackage Shop Isle
 */

/**
 * Register settings and controls for customize
 *
 * @since  1.0.0
 */
function shop_isle_customize_register( $wp_customize ) {

	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';

	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->get_setting( 'background_color' )->default = '';

	$wp_customize->remove_control( 'display_header_text' );

	/* Sections Customizing */

	$wp_customize->add_panel(
		'shop_isle_front_page_sections', array(
			'priority' => 42,
			'title'    => esc_html__( 'Frontpage sections', 'shop-isle' ),
		));
  /*JM Development */      
    
    $wp_customize->add_panel(
		'shop_isle_extra_sections', array(
			'priority' => 52,
			'title'    => esc_html__( 'Extra', 'shop-isle' ),
		));
    
    
   $wp_customize->add_section(
		'shop_isle_about_section', array(
			'title'    => __( 'About ', 'shop-isle' ),
			'priority' => 14,
			'panel'    => 'shop_isle_extra_sections',
		)
	);

	/* Hide big title section */
	$wp_customize->add_setting(
		'shop_isle_about', array(
			'sanitize_callback' => 'shop_isle_sanitize_text',
			'transport'         => 'postMessage',
		)
	);

	$wp_customize->add_control(
		'shop_isle_about',
		array(
			 'label' => __( 'Default Text Control' ),
      'description' => esc_html__( 'Text controls Type can be either text, email, url, number, hidden, or date' ),
      'section' => 'shop_isle_about_section',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'text', // Can be either text, email, url, number, hidden, or date
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => 'my-custom-class',
         'style' => 'border: 1px solid rebeccapurple',
         'placeholder' => __( 'Enter name...' ),
		))
	);
    

    
    
    
    
    
  
    
    
	
}
/**
 * Repeater Sanitization function
 *
 * @param string $input Input.
 * @return mixed|string|void
 */
function shop_isle_sanitize_repeater( $input ) {

	$input_decoded = json_decode( $input, true );
	$allowed_html  = array(
		'br'     => array(),
		'em'     => array(),
		'strong' => array(),
		'a'      => array(
			'href'   => array(),
			'class'  => array(),
			'id'     => array(),
			'target' => array(),
		),
		'button' => array(
			'class' => array(),
			'id'    => array(),
		),
	);

	if ( ! empty( $input_decoded ) ) {
		foreach ( $input_decoded as $boxk => $box ) {
			foreach ( $box as $key => $value ) {
				if ( $key == 'text' ) {
					$value                          = html_entity_decode( $value );
					$input_decoded[ $boxk ][ $key ] = wp_kses( $value, $allowed_html );
				} else {
					$input_decoded[ $boxk ][ $key ] = wp_kses_post( force_balance_tags( $value ) );
				}
			}
		}

		return json_encode( $input_decoded );
	}

	return $input;
}

/**
 * Sanitize checkbox output.
 */
function shop_isle_sanitize_checkbox( $input ) {
	return ( isset( $input ) && true === (bool) $input ? true : false );
}

/**
 * Enqueue customize preview script.
 */
function shop_isle_wp_themeisle_customize_preview_js() {
	wp_enqueue_script( 'wp_themeisle_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'shop_isle_wp_themeisle_customize_preview_js' );
