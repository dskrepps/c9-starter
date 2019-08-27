<?php

/**
 * Theme Customizer
 *
 * @package cortextoo
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
if (!function_exists('cortextoo_customize_register')) {
	/**
	 * Register basic customizer support.
	 *
	 * @param object $wp_customize Customizer reference.
	 */
	function cortextoo_customize_register($wp_customize)
	{
		$wp_customize->get_setting('blogname')->transport         = 'postMessage';
		$wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
		$wp_customize->get_setting('header_textcolor')->transport = 'postMessage';
	}
}
add_action('customize_register', 'cortextoo_customize_register');

if (!function_exists('cortextoo_theme_customize_register')) {
	/**
	 * Register individual settings through customizer's API.
	 *
	 * @param WP_Customize_Manager $wp_customize Customizer reference.
	 */
	function cortextoo_theme_customize_register($wp_customize)
	{

		// Theme layout settings.
		$wp_customize->add_section('cortextoo_theme_layout_options', array(
			'title'       => __('Theme Layout Settings', 'cortextoo'),
			'capability'  => 'edit_theme_options',
			'description' => __('Container width and sidebar defaults', 'cortextoo'),
			'priority'    => 160,
		));

		//select sanitization function
		function cortextoo_theme_slug_sanitize_select($input, $setting)
		{

			//input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
			$input = sanitize_key($input);

			//get the list of possible select options 
			$choices = $setting->manager->get_control($setting->id)->choices;

			//return input if valid or return default option
			return (array_key_exists($input, $choices) ? $input : $setting->default);
		}

		$wp_customize->add_setting('cortextoo_container_type', array(
			'default'           => 'container',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'cortextoo_theme_slug_sanitize_select',
			'capability'        => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'cortextoo_container_type',
				array(
					'label'       => __('Container Width', 'cortextoo'),
					'description' => __("Choose between Bootstrap's container and container-fluid", 'cortextoo'),
					'section'     => 'cortextoo_theme_layout_options',
					'settings'    => 'cortextoo_container_type',
					'type'        => 'select',
					'choices'     => array(
						'container'       => __('Fixed width container', 'cortextoo'),
						'container-fluid' => __('Full width container', 'cortextoo'),
					),
					'priority'    => '10',
				)
			)
		);

		$wp_customize->add_setting('cortextoo_sidebar_position', array(
			'default'           => 'right',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'sanitize_text_field',
			'capability'        => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'cortextoo_sidebar_position',
				array(
					'label'       => __('Sidebar Positioning', 'cortextoo'),
					'description' => __(
						"Set sidebar's default position. Can either be: right, left, both or none. Note: this can be overridden on individual pages.",
						'cortextoo'
					),
					'section'     => 'cortextoo_theme_layout_options',
					'settings'    => 'cortextoo_sidebar_position',
					'type'        => 'select',
					'sanitize_callback' => 'cortextoo_theme_slug_sanitize_select',
					'choices'     => array(
						'right' => __('Right sidebar', 'cortextoo'),
						'left'  => __('Left sidebar', 'cortextoo'),
						'none'  => __('No sidebar', 'cortextoo'),
					),
					'priority'    => '20',
				)
			)
		);
	}
} // endif function_exists( 'cortextoo_theme_customize_register' ).
add_action('customize_register', 'cortextoo_theme_customize_register');
