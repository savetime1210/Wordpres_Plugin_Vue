<?php
/*
Plugin Name: Vue Admin Plugin
Description: A plugin in to manage admin template with vuetify
Author: Acer
Version: 1.0
*/
	register_activation_hook(__FILE__, 'vue_admin_install');
	register_deactivation_hook(__FILE__,'vue_admin_uninstall');
	global $jal_db_version;
	$jal_db_version = "1.0";
	
	function vue_admin_install()
	{
		global $wpdb;
		global $jal_db_version;
		require_once(ABSPATH.'wp-admin/includes/upgrade.php');
		add_option("jal_db_version", $jal_db_version);
		
	}

	add_action('admin_menu', 'vue_admin_menu');
	function vue_admin_menu()
	{

		add_menu_page('Vue Admin Page', 'Vue Admin', 'manage_options', 
		'vue-admin/vue-admin-page.php','','dashicons-welcome-widgets-menus',90);
		//add front end page
	}
	//register ajax : team manage
	//wp_enqueue_script( 'team_script', WP_PLUGIN_URL.'/report/js/team.js', array( 'jquery' ) );
	//wp_localize_script('team_script', 'teamAjax',  array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));

	//handlers : get team list
	add_action( 'wp_ajax_vue_admin_test', 'vue_admin_test' );
	add_action( 'wp_ajax_nopriv_vue_admin_test', 'vue_admin_test' ); 

	//get team list
	function vue_admin_test()
	{
		global $wpdb;
		$team = $wpdb->prefix . "team";
		$rows = $wpdb->get_results("SELECT * from $team");
		echo json_encode($rows);
		die();
	}
	//uninstall plugin
	function vue_admin_uninstall(){
		
	}

?>