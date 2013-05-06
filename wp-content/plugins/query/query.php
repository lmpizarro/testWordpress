<?php
/**
 * @package Hello_Query
 * @version 0.1 
 */
/*
Plugin Name: Hello Query
Plugin URI: http://localhost:8008/
Description: A simple query demo
Author: lmpizarro 
Version: 0.1 
Author URI: 
*/

function hello_query_get_results() {
     	global $wpdb;
     	$myrows = $wpdb->get_results( "SELECT user_login, user_email FROM wp_users" );
	return $myrows; 
}

function query_permalink (){
     	global $wpdb;
        $id = substr((parse_url(get_permalink())['query']),8);
        $query = "SELECT post_title FROM wp_posts WHERE ID = $id";
	$page = $wpdb->get_results($query);
	return $page[0]->post_title;
}

function hello_query() {
	$myrows = hello_query_get_results();
  	foreach ($myrows as $row){
        	printf ("<h1>%s %s </h1>", $row->user_email,  $row->user_login);
  	}
}

// Now we set that function up to execute when the admin_notices action is called
add_action( 'admin_notices', 'hello_query' );


?>
