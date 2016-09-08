<?php
/*
Plugin Name: Relatively Speaking
Plugin URI: http://github.com/rohjay
Description: This plugin replaces all references for your domain with / in case you choose to change domains.
Version: 0.1
Author: rohjay
Author URI: http://rohjay.wpengine.com
Text Domain: relative-paths
*/

function rs_make_paths_relative($content)
{
    $current_site = get_site_url(); // "http://wp.dev"
    $the_new_content = str_replace(
        $current_site,
        "",
        $content
    );
    return $the_new_content;
}
add_filter('the_content', 'rs_make_paths_relative');


