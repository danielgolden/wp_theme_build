<?php

add_theme_support( 'post-thumbnails' ); 

// Changing excerpt length
function new_excerpt_length($length) {
return 200;
}
add_filter('excerpt_length', 'new_excerpt_length');

// Changing excerpt more
function new_excerpt_more($more) {
return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

?>