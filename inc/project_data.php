<?php

	$project_id = 3; // same for all languages
	$project_lang =  'en';

	$project_name = $projects[$project_id][$project_lang]['title']; // case sensitive for <title> and <h1> tag
	$project_dir = 'projects/'.$projects[$project_id][$project_lang]['slug'].'/';

	$project_subdomain = get_subdomain($projects[$project_id][$project_lang]['slug']);

	$project_desc_title = 'Get your GPS Coordinates like a charm'; // goes into a <h2> element
	$project_desc = 'Unique description optimized for SEO. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'; // goes into a <p> element, no html

	$project_referrals = [1,2,4];

	// keywords for this project
	$project_keywords = array(
		'coordinates',
		'maps',
		'latitude',
		'longitude',
		'position',
		array(
			'key' => 'gps',
			'url' => 'https://en.wikipedia.org/wiki/Global_Positioning_System'
		)
	);

	// scripts for this project, the order matters
	$project_scripts = array(
		'js/vendors/jquery.min.js',			// jquery root dir
		'js/magic.min.js', 							// javascript project dir
	);

?>
