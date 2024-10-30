<?php
/*
Plugin Name: Best HTML Sitemap
Plugin URI: http://www.mobilephonefinder.com.au/plugins/best-html-sitemap/
Description: Best HTML Sitemap gives you the ability to generate an HTML sitemap of the pages on your blog.  30 second installation.
Version: 1.0
Author: Mobile Phone Finder
Author URI: http://www.mobilephonefinder.com.au/
Change Log: See readme.txt for change log
Contributors: Mobile Phone Finder
Copyright 2011 Mobile Phone Finder - Find the Best Mobile Phone (www.mobilephonefinder.com.au)
License: GPL (http://www.gnu.org/licenses/old-licenses/gpl-2.0.txt)
*/

/*
	Return the sitemap for pages.
	@param $args - arguments or attributes for wp_list_pages function.
	@return a formatted HTML list
*/
function best_html_sitemap_pages_handler($args) {

	$args["title_li"] = FALSE; // turn off the "Categories" top level <LI>
	$args["echo"] = FALSE; 	// turn off echo - we want to return

	$o = "";
	$o .= "<ul>\n";
	$o .= wp_list_pages($args);
	$o .= "</ul>\n";

	return $o;

}

add_shortcode('best-html-sitemap-pages', 'best_html_sitemap_pages_handler');

?>