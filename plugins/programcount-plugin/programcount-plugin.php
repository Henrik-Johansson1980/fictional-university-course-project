<?php
/*
  Plugin Name: Program Counter
  Description: Counts the number of available programs of the unuversity and displays it with a shortcode.
*/

function countPrograms(){
  $getPrograms = new WP_Query(array(
    'post_type' => 'program'
  ));
  
  return isset($getPrograms->found_posts) ? $getPrograms->found_posts : '0';
}

add_shortcode( 'programCount', 'countPrograms' );

?>