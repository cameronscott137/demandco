<?php


$home = new WPAlchemy_MetaBox(array
(
	'id' => 'home_page',
	'title' => 'Home',
	'template' => get_stylesheet_directory() . '/metaboxes/home-meta.php',
	'types' => array('page'),
	//'include_template' => array('template-features.php'), // use an array for multiple items
	'include_template' => 'template-home.php',
	'context' => 'advanced',
	'priority' => 'high',
	'autosave' => TRUE,
	'hide_editor' => TRUE,
	'lock' => WPALCHEMY_LOCK_TOP
));


$features = new WPAlchemy_MetaBox(array
(
	'id' => 'features_breakdown',
	'title' => 'Features',
	'template' => get_stylesheet_directory() . '/metaboxes/features-meta.php',
	'types' => array('page'),
	//'include_template' => array('template-features.php'), // use an array for multiple items
	'include_template' => 'template-feature.php',
	'context' => 'advanced',
	'priority' => 'high',
	'autosave' => TRUE
));


$archetypes = new WPAlchemy_MetaBox(array
(
	'id' => 'archetype_features',
	'title' => 'Archetype Features',
	'template' => get_stylesheet_directory() . '/metaboxes/archetype-meta.php',
	'types' => array('page'),
	'include_template' => array('template-archetype.php'), // use an array for multiple items
	'context' => 'advanced',
	'priority' => 'high',
	'autosave' => TRUE
));

$pricing = new WPAlchemy_MetaBox(array
(
	'id' => 'pricing',
	'title' => 'Pricing',
	'template' => get_stylesheet_directory() . '/metaboxes/pricing-meta.php',
	'types' => array('page'),
	'include_template' => array('template-pricing.php'), // use an array for multiple items
	'context' => 'advanced',
	'priority' => 'high',
	'autosave' => TRUE
));

$landing = new WPAlchemy_MetaBox(array
(
	'id' => 'landing',
	'title' => 'Landing Page',
	'template' => get_stylesheet_directory() . '/metaboxes/landing-meta.php',
	'types' => array('page'),
	'include_template' => array('template-landing.php'), // use an array for multiple items
	'context' => 'advanced',
	'priority' => 'high',
	'autosave' => TRUE
));

$single_blog = new WPAlchemy_MetaBox(array
(
	'id' => 'landing',
	'title' => 'Landing Page',
	'template' => get_stylesheet_directory() . '/metaboxes/blog-meta.php',
	'types' => array('post'),
	//'include_template' => array('single.php'), // use an array for multiple items
	'context' => 'advanced',
	'priority' => 'high',
	'autosave' => TRUE
));


/* eof */