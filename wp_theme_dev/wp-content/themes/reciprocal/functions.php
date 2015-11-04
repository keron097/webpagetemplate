<?php

	function reciprocal_essential_functions()
	{
		// for dynamic title	
			add_theme_support( 'title-tag' );
		
		// for customize Header Image
			$els_header_img = array(
				'default-image' => get_template_directory_uri().'/images/custom-header-bg.jpg'
			);
			add_theme_support( 'custom-header', $els_header_img );
		//---------------------------  

		// for customize background color
			add_theme_support('custom-background');
		//---------------------------  

		// for add featured image
			add_theme_support('post-thumbnails');
		//---------------------------

		// theme textdomain
			load_theme_textdomain('reciprocal', get_template_directory_uri().'/languages');
		//---------------------------

		// for menu register--------
		if(function_exists('register_nav_menus'))
		{
			register_nav_menus(array(
				'prodhanmenu' => __('Main Menu', 'reciprocal'),
				'nichermenu' => __('Footer Menu', 'reciprocal'),
			));
		}
		//--------------------------- 

		function short_description($limit)
		{
			$content = explode(' ', get_the_content());
			$less_content = array_slice($content, 0, $limit);
			echo implode(' ',$less_content);
		}
		
	}
	add_action('after_setup_theme','reciprocal_essential_functions');

	function els_sidebar()
	{
		register_sidebar(array(
			'name'			=> __('Right Sidebar', 'reciprocal'),	// ('reciprocal' = textdomain er nam)
			'description'	=> 'You may add right sidebar widget from here.',
			'id'			=> 'rightsidebar',
			'before_widget'	=> '<div class="">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h3>',
			'after_title'	=> '</h3>'
		));
		
	}
	add_action('widgets_init','els_sidebar');


