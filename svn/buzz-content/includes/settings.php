<?php
/*
 * This document stores settings for each semantic element, and instantiates the dynamic object
 */
 
// Global, reusable HTML primatives

$mode = new the_doctype();
$name = new the_title();
$page = new the_page(location);

$header = new the_header();
$nav = new the_nav();
$article = new the_article();
$sidebar = new the_sidebar();
$section = new the_section();
$footer = new the_footer();


// Templated objects for pages

$tab_box_1 = new the_article('tab-box-1');
$tab_box_1->_class('tabs');

$tab_box_2 = new the_article('tab-box-2');
$tab_box_2->_class('tabs');

$tab_box_3 = new the_article('tab-box-3');
$tab_box_3->_class('tabs');

$tab_container = new the_section('tab-container');
$tab_container->_class('tabs');

$header_main = new the_section('header');
$header_main->_class('container_16 curved clearfix');

$footer_main = new the_section('footer');
$footer_main->_class('container_16 curved clearfix');

$main = new the_section('container'); 
$main->_class('container_16 curved clearfix');

$top_header = new the_header();
$top_header->_class('grid_16');

$logo = new the_section('logo');
$logo->_class('grid_2 alpha');

$navigation_links = new the_nav('links');
$navigation_links->_class('prefix_3 grid_11 omega');

$wrapper = new the_section();
$wrapper->_class('grid_16 alpha omega wrapper');

$contact_wrapper = new the_section('contact-layout');
$contact_wrapper->_class('alpha prefix_3 grid_10 suffix_3 omega');

// Generic three column setup
$outer_alpha = new the_section();
$outer_alpha->_class('alpha grid_5');

$large_omega = new the_section();
$large_omega->_class('grid_11 omega');

$outer_omega = new the_section();
$outer_omega->_class('grid_5 omega');

$column_main = new the_section();
$column_main->_class('grid_5');
// Templated objects for page->home

$center_content = new the_section('content');
$center_content->_class('grid_16');

$left_content = new the_section('porthole');
$left_content->_class('grid_10 alpha');

$right_content = new the_section('info');
$right_content->_class('grid_6 omega');
?>