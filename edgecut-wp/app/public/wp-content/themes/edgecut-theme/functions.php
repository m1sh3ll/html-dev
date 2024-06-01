<?php

function edgecut_files() {
  //1. jquery
  wp_enqueue_script('jquery');
  //2. Bootstrap
  wp_enqueue_style('bootstrap-css', get_theme_file_uri('/css/bootstrap.css'));
  wp_enqueue_script('bootstrap-js', get_theme_file_uri('/js/bootstrap.js'), array('jquery'), null, true);
  
  //3. Custom JS script Jquery
  wp_enqueue_script('main-edgecut-js', get_theme_file_uri('/js/custom.js'), array('jquery'), null, true);

  //4. Custom Google APIS script
  wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap', array(), null, true);


  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap');
  wp_enqueue_style('font-awesome',  get_theme_file_uri('/css/font-awesome.min.css'));
  wp_enqueue_style('edgecut_main_styles', get_theme_file_uri('/css/style.css'));
  wp_enqueue_style('edgecut_extra_styles', get_theme_file_uri('/css/responsive.css'));
}

add_action('wp_enqueue_scripts','edgecut_files');


function edgecut_features() {
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'edgecut_features');