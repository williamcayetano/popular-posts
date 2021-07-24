<?php
/*
   Plugin Name: William Cayetano
   Plugin URI: https://github.com/williamcayetano/popular-posts.git
   Description: A plugin that displays the authors name on every post
   Version: 1.0
   Author: William Cayetano
   Author URI: https://williamcayetano.com
   License: GPL2
*/

	/* Show the number of post views */
	
function wc_show_author() {
   global $post;
   echo "This plugin was made by William Cayetano";

}

add_action( "wp_head", "wc_show_author"  );

