<?php

add_action( 'wp_enqueue_scripts', 'load_dynamic_css' ); 

function load_dynamic_css (){
	if (is_page('crit-squad')) {
		wp_enqueue_style( 'crit-squad', get_template_directory_uri().'/crit-squad.css' );
	}
}
