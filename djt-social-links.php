<?php 

/*
Plugin Name: DaveJToews Social Links
Version: 1.0
Author: Dave J Toews
Author URI: http://davejtoews.com
Description: Creates shortcodes for social media links.
*/

$plugin_root = plugins_url() . "/djt-social-links/";

add_shortcode('social_link', 'social_link');

function social_link($atts, $content = null) {
	$a = shortcode_atts( array(
	    'service' => null,
	    'url' => null,
	    'color' => 'ffffff'
	), $atts );

	$icon_file = array(
		"facebook" => "facebook2.svg",
		"instagram" => "instagram.svg",
		"twitter" => "twitter.svg",
		"linkedin" => "linkedin2.svg"
	);

	$src = $icon_file[$a["service"]] . "?color=" . $a['color'];

	$output .= "<a href='".$a["url"]."' target='_blank'><img class='djt-social-logo' src='".plugins_url( $src, __FILE__ )."' alt='".$a["service"]." logo'></a>";
	return $output;
}


 ?>