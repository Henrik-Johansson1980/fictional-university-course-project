<?php
/*
 Plugin Name: My First Amazing Plugin
 Description: It is awesome!!! Adds the line 'All your base are belong to us!' wherever the_content() is called
*/

function amazingContentEdits($content) {
  $content = $content . '<p>All your base are belong to us!</p>';
  return $content;
}
  add_filter('the_content', 'amazingContentEdits');


?>