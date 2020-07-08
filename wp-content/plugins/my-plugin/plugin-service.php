<?php
/**
 * Created by PhpStorm.
 * User: truong.nq
 * Date: 5/5/2020
 * Time: 1:46 PM
 */

if ( ! class_exists( 'WP_List_Table' ) ) {
    require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}

class Plugin_Service extends WP_List_Table {

    /** Class constructor */
    public function __construct() {

        parent::__construct( [
            'singular' => __( 'Product', 'sp' ), //singular name of the listed records
            'plural'   => __( 'Products', 'sp' ), //plural name of the listed records
            'ajax'     => false //does this table support ajax?
        ] );

    }


    /**
     * Retrieve product data from the database
     *
     * @param int $per_page
     * @param int $page_number
     *
     * @return mixed
     */
    public static function get_product( $per_page = 5, $page_number = 1, $search = '' ) {

        global $wpdb;

        $table_name = $wpdb->prefix . "product";

        $sql = "SELECT * FROM {$table_name}";

        if(!empty($search)){
            $sql .= " WHERE (title LIKE '%$search%')";
        }

        if ( ! empty( $_REQUEST['orderby'] ) ) {
            $sql .= ' ORDER BY ' . esc_sql( $_REQUEST['orderby'] );
            $sql .= ! empty( $_REQUEST['order'] ) ? ' ' . esc_sql( $_REQUEST['order'] ) : ' ASC';
        }

        $sql .= " LIMIT $per_page";
        $sql .= ' OFFSET ' . ( $page_number - 1 ) * $per_page;

        $result = $wpdb->get_results( $sql, 'ARRAY_A' );

        return $result;
    }


    /**
     * Delete a product record.
     *
     * @param int $id product id
     */
    public static function delete_product( $id ) {
        global $wpdb;

        $table_name = $wpdb->prefix . "product";

        $wpdb->delete(
            "{$table_name}",
            [ 'id' => $id ],
            [ '%d' ]
        );
    }

    /**
     * Edit a product record.
     *
     * @param int $id product id
     */
    public static function edit_product( $id ) {
        $url = admin_url("admin.php?page=products&type=edit&id=$id");

        wp_redirect($url);
        exit;
    }


    /**
     * Returns the count of records in the database.
     *
     * @return null|string
     */
    public static function record_count() {
        global $wpdb;

        $table_name = $wpdb->prefix . "product";

        $sql = "SELECT COUNT(*) FROM {$table_name}";

        return $wpdb->get_var( $sql );
    }


    /** Text displayed when no product data is available */
    public function no_items() {
        _e( 'No product avaliable.', 'sp' );
    }


    /**
     * Render a column when no column specific method exist.
     *
     * @param array $item
     * @param string $column_name
     *
     * @return mixed
     */
    public function column_default( $item, $column_name ) {
        switch ( $column_name ) {
            case 'title':
            default:
                return $item[ $column_name ];
        }
    }

    /**
     * Render the bulk edit checkbox
     *
     * @param array $item
     *
     * @return string
     */
    function column_cb( $item ) {
        return sprintf(
            '<input type="checkbox" name="bulk-delete[]" value="%s" />', $item['id']
        );
    }


    /**
     * Method for name column
     *
     * @param array $item an array of DB data
     *
     * @return string
     */
    function column_name( $item ) {

        $delete_nonce = wp_create_nonce( 'sp_delete_product' );
        $edit_nonce = wp_create_nonce( 'sp_edit_customer' );

        $title = '<strong>' . $item['name'] . '</strong>';

        $actions = [
            'delete' => sprintf( '<a href="?page=%s&action=%s&product=%s&_wpnonce=%s">Delete</a>', esc_attr( $_REQUEST['page'] ), 'delete', absint( $item['id'] ), $delete_nonce ),
            'edit' =>sprintf( '<a href="?page=%s&action=%s&product=%s&_wpnonce=%s">Edit</a>', esc_attr( $_REQUEST['page'] ), 'edit', absint( $item['id'] ), $edit_nonce )
        ];

        return $title . $this->row_actions( $actions );
    }


    /**
     *  Associative array of columns
     *
     * @return array
     */
    function get_columns() {
        $columns = [
            'cb'      => '<input type="checkbox" />',
            'title'    => __( 'Title', 'sp' ),
            'platform' => __( 'Platform', 'sp' ),
            'time_created' => __( 'Time create', 'sp' ),
        ];

        return $columns;
    }


    /**
     * Columns to make sortable.
     *
     * @return array
     */
    public function get_sortable_columns() {
        $sortable_columns = array(
            'title' => array( 'title', true ),
            'platform' => array( 'platform', false )
        );

        return $sortable_columns;
    }

    /**
     * Returns an associative array containing the bulk action
     *
     * @return array
     */
    public function get_bulk_actions() {
        $actions = [
            'bulk-edit' => 'Edit',
            'bulk-delete' => 'Trash'
        ];

        return $actions;
    }

    public function get_views() {
        $status_links = array(
            "all"       => __("<a href='#'>All</a>",'my-plugin-slug'),
            "published" => __("<a href='#'>Published</a>",'my-plugin-slug'),
            "trashed"   => __("<a href='#'>Trashed</a>",'my-plugin-slug')
        );
        return $status_links;
    }

    /**
     * Handles data query and filter, sorting, and pagination.
     */
    public function prepare_items($search ='') {
        $this->_column_headers = $this->get_column_info();

        /** Process bulk action */
        $this->process_bulk_action();

        $per_page     = $this->get_items_per_page( 'product_per_page', 5 );
        $current_page = $this->get_pagenum();
        $total_items  = self::record_count();

        $this->set_pagination_args( [
            'total_items' => $total_items, //WE have to calculate the total number of items
            'per_page'    => $per_page //WE have to determine how many items to show on a page
        ] );

        $this->items = self::get_product( $per_page, $current_page, $search );
    }

    public function process_bulk_action() {

        //Detect when a bulk action is being triggered...
        if ( 'delete' === $this->current_action() ) {

            // In our file that handles the request, verify the nonce.
            $nonce = esc_attr( $_REQUEST['_wpnonce'] );

            if ( ! wp_verify_nonce( $nonce, 'sp_delete_product' ) ) {
                die( 'Go get a life script kiddies' );
            }
            else {
                self::delete_product( absint( $_GET['product'] ) );
            }

        }

        // If the delete bulk action is triggered
        if ( ( isset( $_POST['action'] ) && $_POST['action'] == 'bulk-delete' )
            || ( isset( $_POST['action2'] ) && $_POST['action2'] == 'bulk-delete' )
        ) {

            $delete_ids = esc_sql( $_POST['bulk-delete'] );

            // loop over the array of record ids and delete them
            foreach ( $delete_ids as $id ) {
                self::delete_product( $id );

            }
        }

        if ( ( isset( $_POST['action'] ) && $_POST['action'] == 'bulk-edit' )
            || ( isset( $_POST['action2'] ) && $_POST['action2'] == 'bulk-edit' )
        ) {

            $product_id = esc_sql( $_POST['bulk-delete'] );

            self::edit_product($product_id[0]);
        }
    }

}
