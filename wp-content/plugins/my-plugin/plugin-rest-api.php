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

        register_rest_route( 'product/v1', '/search?(?P<key>[a-zA-Z0-9-]+)', array(
            array(
                'methods' => WP_REST_Server::READABLE,
                'permission_callback' => array( 'Plugin_REST_API', 'permission_callback' ),
                'callback' => array( 'Plugin_REST_API', 'search_product' ),
                'args' => [
                    'key'
                ],
            )
        ));

        register_rest_route( 'product/v1', '/detail?(?P<id>[a-zA-Z0-9-]+)', array(
            array(
                'methods' => WP_REST_Server::READABLE,
                'permission_callback' => array( 'Plugin_REST_API', 'permission_callback' ),
                'callback' => array( 'Plugin_REST_API', 'get_detail_product' ),
                'args' => [
                    'id'
                ],
            )
        ));

        register_rest_route( 'product/v1', '/create', array(
            array(
                'methods' => WP_REST_Server::CREATABLE,
                'permission_callback' => array( 'Plugin_REST_API', 'permission_callback' ),
                'callback' => array( 'Plugin_REST_API', 'Create_Update_Product' ),
            )
        ));
	}


    public static function permission_callback( $request ) {
        return true;
    }

	public static function get_list_product($request) {
        global $wpdb;

        $table_name = $wpdb->prefix . "product";

        $query = "SELECT * FROM $table_name";

        $retrieve_data = $wpdb->get_results( $query );

		return $retrieve_data;
	}

    public static function get_detail_product($request) {
        global $wpdb;

        $table_name = $wpdb->prefix . "product";

        $id = $request['id'];

        $response = array(
            'title' => 'Get detail product',
            'time_post' => current_time( 'mysql' ),
        );

        if (!$id) {
            $response['errors'] = 'Can not get product!!!';

            return new WP_REST_Response($response, 404);
        }

        $query = "SELECT * FROM {$table_name} WHERE id = {$id}";

        $retrieve_data = $wpdb->get_results( $query );

        if (count($retrieve_data) === 0) {
            $response['errors'] = 'Can not get product!!!';

            return new WP_REST_Response($response, 404);
        }

        return new WP_REST_Response($retrieve_data[0], 200);;
    }

    public static function search_product($request) {
        global $wpdb;

        $table_name = $wpdb->prefix . "product";

        $query = "SELECT * FROM $table_name";

        $retrieve_data = $wpdb->get_results( $query );

        return $retrieve_data;
    }

    public static function Create_Update_Product( $request ) {
	    try {
            global $wpdb;

            $wpdb->hide_errors();

            // begin transaction
            $wpdb->query('START TRANSACTION');

            $table_name = $wpdb->prefix . "product";

            $data = array(
                'time_created' => current_time( 'mysql' ),
                'title' => $request['title'],
                'description' => $request['description'],
                'platform' => $request['platform'],
                'delivery_method' => $request['delivery_method'],
                'seller_send_in_time' => $request['seller_send_in_time'],
                'seller_send_in_type' => $request['seller_send_in_type'],
                'region' => $request['region'],
                'returns' => $request['returns'],
                'accept_currency' => $request['accept_currency'],
                'protection' => $request['protection'],
                'type_product' => $request['type_product'],
                'category' => $request['category'],
                'author' => $request['author'],
                'avatar' => $request['avatar'],
                'image_1' => $request['image_1'],
                'image_2' => $request['image_2'],
                'image_3' => $request['image_3'],
                'price' => $request['price'],
                'fee' => $request['fee'],
                'qty' => $request['qty'],
                'status' => 1,
            );

            $response = array(
                'title' => 'Create new product',
                'time_post' => current_time( 'mysql' ),
            );

            $id = $request['id'];
            $actions = $request['actions'];

            if ($id && $actions === 'edit') {
                $wpdb->update(
                    $table_name,
                    $data,
                    [ 'id' => $id ]
                );

                $response['message'] = 'Update product successfully!';
            }

            if ($actions === 'new') {
                $wpdb->insert($table_name, $data);

                $response['message'] = 'Create new product successfully!';
            }

            if ($wpdb->last_error) {
                $response['message'] = 'Can not save product!';
                $response['errors'] = $wpdb->last_error;

                $wpdb->query('ROLLBACK');

                return new WP_REST_Response($response, 404);;
            }

            $wpdb->query('COMMIT');

            return $response;
        } catch (Exception $e) {
	        //
        }
    }

}
