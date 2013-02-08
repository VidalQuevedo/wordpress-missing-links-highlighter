<?php
/*
Plugin Name: Missing Links Highlighter.
Description: Highlights missing links in post/page content.
Author: Vidal Quevedo
Author URI: http://www.vidalquevedo.com
License: GPL2
Version: 0.1
*/
?>
<?php 
    wp_enqueue_script( $handle = 'missing_links_highlighter', $src = plugins_url('/lib/js/missing_links_highlighter.js', __FILE__), $deps = array('jquery'), $ver = false, $in_footer = true );
?>