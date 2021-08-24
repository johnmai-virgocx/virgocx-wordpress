<?php
/**
 * Virgocx Theme Customizer
 *
 * @package Virgocx
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function virgocx_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'virgocx_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'virgocx_customize_partial_blogdescription',
			)
		);
	}

$wp_customize->add_section('virgocx', array(
	'title' => __('VirgoCX'),
	'priority' => 100,
));
	
	$wp_customize->add_setting(
      'virgocx_announcement_text', //give it an ID
      array(
          'default' => '', // Give it a default
      )
  );
  $wp_customize->add_control(
		 'virgocx_control_announcement_text', //give it an ID
		 array(
				 'label'      => __( 'Announcement Banner Text', 'virgocx' ), //set the label to appear in the Customizer
				 'section'    => 'static_front_page', //select the section for it to appear under  
				 'settings'   => 'virgocx_announcement_text' //pick the setting it applies to
		 )
  );

	$wp_customize->add_setting(
      'virgocx_announcement_link', //give it an ID
      array(
          'default' => '', // Give it a default
      )
  );
  $wp_customize->add_control(
		 'virgocx_control_announcement_link', //give it an ID
		 array(
				 'label'      => __( 'Announcement Banner link', 'virgocx' ), //set the label to appear in the Customizer
				 'section'    => 'static_front_page', //select the section for it to appear under  
				 'settings'   => 'virgocx_announcement_link' //pick the setting it applies to
		 )
  );


$wp_customize->add_setting('virgocx_html_head_content', array(
  'capability' => 'edit_theme_options',
  'default' => '',
  //'sanitize_callback' => 'sanitize_textarea_field',
));

$wp_customize->add_control('virgocx_html_head_content', array(
  'type' => 'textarea',
  'section' => 'virgocx', // // Add a default or your own section
  'label' => __('HTML head content'),
  'description' => __('The content in here will insert just before close of </head>'),
));

}
add_action( 'customize_register', 'virgocx_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function virgocx_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function virgocx_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function virgocx_customize_preview_js() {
	wp_enqueue_script( 'virgocx-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'virgocx_customize_preview_js' );
