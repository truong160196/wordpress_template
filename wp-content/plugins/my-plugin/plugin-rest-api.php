<?php

class Plugin_REST_API {
    const NONCE = '';

	/**
	 * Register the REST API routes.
	 */
	public static function init() {
		if ( ! function_exists( 'register_rest_route' ) ) {
			// The REST API wasn't integrated into core until 4.4, and we support 4.0+ (for now).
			return false;
		}

		register_rest_route( 'product/v1', '/list', array(
			array(
				'methods' => WP_REST_Server::READABLE,
				'permission_callback' => array( 'Plugin_REST_API', 'permission_callback' ),
				'callback' => array( 'Plugin_REST_API', 'get_list_product' ),
			)
		));
	}


    public static function permission_callback( $request ) {
        return true;
    }

	public static function get_list_product( $request ) {
        global $wpdb;

        $table_name = $wpdb->prefix . "product";

        $query = "SELECT * FROM $table_name";

        $retrieve_data = $wpdb->get_results( $query );

		return $retrieve_data;
	}

}
