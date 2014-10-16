<?php
/**
 * @package NORSTAR Products
 * @version 1.0
 */
/*
Plugin Name: NORSTAR Products
Plugin URI: 
Description: NORSTAR Products plugin, powered by ApplicateIT
Version: 1.0
Author URI: 
*/
	function norstar_product_admin() {
		global $wpdb;
		$norstar_errors = array();
		if (isset($_GET['action']) && "edit" == $_GET['action']) {
			if(isset($_POST['product'])) {
				$id = "";
				if(isset($_POST['product']['id'])) 
					$id = trim($_POST['product']['id']);
				$title = trim($_POST['product']['title']);
				$description = trim($_POST['product']['description']);
				$thumbnail = trim($_POST['product']['thumbnail']);
				
				if (strlen($title) == 0) {
					$norstar_errors[] = "Title of Product can not be empty";
				}
				if (strlen($thumbnail) == 0) {
					$norstar_errors[] = "Thumbnail of Product can not be empty";
				}
				if(count($norstar_errors) > 0) {
					include('norstar-product-add.php');		
					return;		
				}
				if(strlen($id) == 0) {
					$wpdb->insert( 
						'norstar_products', 
						array( 
							'title' => $title, 
							'description' => $description,
							'thumbnail' => $thumbnail  
						), 
						array( 
							'%s', 
							'%s',
							'%s',
						));
					include('norstar-product-listing.php');
					return;
				} else {
					$wpdb->update( 
						'norstar_products', 
						array( 
							'title' => $title,
							'description' => $description,
							'thumbnail' => $thumbnail 
						), 
						array( 'id' => $id ), 
						array( 
							'%s',
							'%s',
							'%s'
						), 
						array( '%d' )
					);
					include('norstar-product-listing.php');
					return;
				}
			} else {
				include('norstar-product-add.php');	
				return;			
			}
		} else if (isset($_GET['action']) && "delete" == $_GET['action']) {
			if (isset($_GET['id'])) {
				$id = trim($_GET['id']);
				if(strlen($id) > 0) {
					$wpdb->delete( 'norstar_products', array( 'id' => $id ), array( '%d' ) );					
				}
			}
			include('norstar-product-listing.php');
			return;
		} else {
			include('norstar-product-listing.php');
			return;
		}
	}

	function norstar_product_admin_actions() {
		add_options_page("Products", "Products", 1, "products", "norstar_product_admin");
	}
	add_action('admin_menu', 'norstar_product_admin_actions');


	// API LIST
	function oscimp_get_most_wanted_products() {
		global $wpdb;

		$results = $wpdb->get_results('SELECT * FROM norstar_products ORDER BY wanted LIMIT 0,10');

		if (count($results) > 0) {
			if (count($results) > 5) {
				echo "<h1>2 rows</h1>";
			} else {
				echo "<h1>1 rows</h1>";
			}
		}
	}

?>