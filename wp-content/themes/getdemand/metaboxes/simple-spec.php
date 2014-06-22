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


$case_study = new WPAlchemy_MetaBox(array
(
	'id' => 'case_study',
	'title' => 'Case Study',
	'template' => get_stylesheet_directory() . '/metaboxes/case-study-meta.php',
	'types' => array('case-studies'),
	//'include_template' => array('template-features.php'), // use an array for multiple items
	//'include_template' => 'template-case-study.php',
	'context' => 'advanced',
	'priority' => 'high',
	'autosave' => TRUE,
	'hide_editor' => TRUE,
	'lock' => WPALCHEMY_LOCK_TOP
));

/* eof */