<?php
/**
 * Plugin Name: GTH Simple Shortcodes
 * Plugin URI: http://www.greentiehosting.com/simple-shortcodes
 * Description: A extremely lightweight plugin that gives you a massive amount of shortcodes at the ready.
 * Version: 1.0.0.3
 * Author: Green Tie Hosting
 * Author URI: http://www.greentiehosting.com
 * Text Domain: gthss
 * License: GPL2
 */
 // Kill script if accessed directly.
defined('ABSPATH') or die("No script kiddies please!");
 
 /** Website Information **/
 // Add Website Name shortcode [gthss_site_name]
function gthss_sitename(){
   return get_bloginfo();
}
add_shortcode( 'gthss_site_name', 'gthss_sitename' );
 // Add Website tagline shortcode [gthss_site_tagline]
function gthss_sitetagline(){
   return get_bloginfo('description');
}
add_shortcode( 'gthss_site_tagline', 'gthss_sitetagline' );
  // Add Website URL shortcode [gthss_root_url]
function gthss_root_url() {
	return site_url();
}
add_shortcode( 'gthss_root_url', 'gthss_root_url');
  // Add Website Admin URL shortcode [gthss_admin_url]
function gthss_admin_url() {
	return site_url();
}
add_shortcode( 'gthss_admin_url', 'gthss_admin_url');

 /** Page/Post Information **/
 // Add Page_title shortcode [gthss_page_title]
function gthss_pagetitle(){
   return get_the_title();
}
add_shortcode( 'gthss_page_title', 'gthss_pagetitle' );
// Add Page permalink shortcode [gthss_permalink]
function gthss_permalink() {
	return get_permalink();
}
add_shortcode( 'gthss_permalink', 'gthss_permalink');

/** User Information **/
// Add current username shortcode [gthss_username]
function gthss_username() {
	if(!is_user_logged_in()) {
		return 'Guest';
	}
	else{
		global $current_user;
		get_currentuserinfo();
		return $current_user->user_login;
	}
}
add_shortcode( 'gthss_username', 'gthss_username');
// Add current display name shortcode [gthss_displayname]
function gthss_displayname() {
	if(!is_user_logged_in()) {
		return 'Guest';
	}
	else{
		global $user_identity;
		get_currentuserinfo();
		return $user_identity;
	}
}
add_shortcode( 'gthss_displayname', 'gthss_displayname');

 /** General Wordpress Extras **/
 // Add Search Form shortcode [gthss_search]
 function gthss_search() {
	return get_search_form();
 }
add_shortcode( 'gthss_search', 'gthss_search');

 /** General PHP extras **/
 // Add current month shortcode [gthss_curr_month]
function gthss_currentmonth() {
	return date('M');
}
add_shortcode( 'gthss_curr_month', 'gthss_currentmonth');
 // Add current year shortcode [gthss_curr_year]
function gthss_currentyear() {
	return date('Y');
}
add_shortcode( 'gthss_curr_year', 'gthss_currentyear');