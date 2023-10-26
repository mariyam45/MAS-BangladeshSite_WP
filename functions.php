<?php

// 1.a 
wp_enqueue_style( 'style-css', get_stylesheet_uri());
  wp_enqueue_style( 'style-bootstrap', get_template_directory_uri().'/assets/boots/cdn.jsdelivr.net_npm_bootstrap@5.3.1_dist_css_bootstrap.min.css');

  wp_enqueue_script('script-bootstrap',get_template_directory_uri().'/assets/boots/cdn.jsdelivr.net_npm_bootstrap@5.3.1_dist_js_bootstrap.bundle.min.js',array(),'1.0.0',true); 


//   -----------2.a
add_theme_support('title-tag');
 add_theme_support('custom-logo');
add_theme_support('post-thumbnails');

// 3.a--------

register_nav_menus([
  'PrimaryMenu'=>'Primary',
  'PrimaryMenu2'=>'Primary2',
  'FooterMenu'=>'Footer'
]);

// 4.a 
register_sidebar([
  'name'=>'Banner',
  'id'=>'banner',
  'before_widget'=>'',
  'after_widget'=>''

]);
register_sidebar([
  'name'=>'SideImg',
  'id'=>'sideimg',
  'before_widget'=>'',
  'after_widget'=>''

]);
register_sidebar([
  'name'=>'SideImg2',
  'id'=>'sideimg2',
  'before_widget'=>'',
  'after_widget'=>''

]);
register_sidebar([
  'name'=>'List1',
  'id'=>'list1',
  'before_widget'=>'',
  'after_widget'=>''

]);
register_sidebar([
  'name'=>'List2',
  'id'=>'list2',
  'before_widget'=>'',
  'after_widget'=>''

]);
register_sidebar([
  'name'=>'Portal1',
  'id'=>'portal1',
  'before_widget'=>'',
  'after_widget'=>''

]);
register_sidebar([
  'name'=>'Portal2',
  'id'=>'portal2',
  'before_widget'=>'',
  'after_widget'=>''

]);
register_sidebar([
  'name'=>'Portal3',
  'id'=>'portal3',
  'before_widget'=>'',
  'after_widget'=>''

]);
register_sidebar([
  'name'=>'FooterLogo',
  'id'=>'fLogo',
  'before_widget'=>'',
  'after_widget'=>''

]);
