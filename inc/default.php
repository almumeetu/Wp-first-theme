<?php

// Theme Title
add_theme_support('title-tag');

// Thumbnil Image Area
add_theme_support('post_thumbnails', array('page', 'post') );
add_image_size('post_thumbnails', 966, 350, true);

// Except to 40 Word

function saikat_excerpt_more($more){
    return '<br> <br> <a class="redmore" href="'.get_permalink() . '">' . 'Read More' . '</a>';
  }
  add_filter('excerpt_more', 'saikat_excerpt_more');
  
  function saikat_excerpt_lenght($length){
    return 40;
  }
  add_filter('excerpt_length', 'saikat_excerpt_lenght', 999);