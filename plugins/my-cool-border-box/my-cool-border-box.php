<?php
/**
 * Plugin Name: My Cool Border Box
 * Author: Henrik Johansson
 * Version: 1.0.0
 */

 function loadBlockFiles(){
   wp_enqueue_script(
     'cool_border_box',
     plugin_dir_url( __FILE__ ) . 'block.js',
     array(
       'wp-blocks',
       'wp-i18n',
       'wp-editor'
     ),
     true
   );
 }

 add_action('enqueue_block_editor_assets', 'loadBlockFiles' );