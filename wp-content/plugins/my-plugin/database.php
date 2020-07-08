<?php
/**
 * Created by PhpStorm.
 * User: truong.nq
 * Date: 4/20/2020
 * Time: 5:10 PM
 */

global $jal_db_version;
$jal_db_version = '1.0';

function jal_install() {
    global $wpdb;
    global $jal_db_version;

    $table_name = $wpdb->prefix . 'product';

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
		id mediumint(9) NOT NULL AUTO_INCREMENT,
		time_created datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
		title text NOT NULL,
		description text NULL,
		platform  varchar(255) NULL,
		delivery_method  varchar(255) NULL,
		seller_send_in_time  numeric (5, 2) NULL,
		seller_send_in_type  varchar(255) NULL,
		region  varchar(255) NULL,
		returns  varchar(255) NULL,
		accept_currency  varchar(255) NULL,
		protection  varchar(255) NULL,
		type_product  varchar(255) NULL,
		category  varchar(255) NULL,
		author  varchar(255) NULL,
		avatar  varchar(255) NULL,
		image_1  varchar(255) NULL,
		image_2  varchar(255) NULL,
		image_3  varchar(255) NULL,
		price  numeric (12, 5) NULL,
		fee  numeric (12, 5) NULL,
		qty  numeric (12, 2) NULL,
		status varchar(20) DEFAULT 0 NOT NULL,
		PRIMARY KEY  (id)
	) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );

    add_option( 'jal_db_version', $jal_db_version );
}

function jal_uninstall () {
    global $wpdb;
    $table_name = $wpdb->prefix . 'product';
    $sql = "DROP TABLE IF EXISTS $table_name";
    $wpdb->query($sql);
}

function jal_install_data() {
    global $wpdb;

    $data1 = array(
            'time_created' => current_time( 'mysql' ),
            'title' => 'Brightcore Card',
            'description' => '',
            'platform' => 'FORTNITE',
            'delivery_method' => 'Coordinated transfer',
            'seller_send_in_time' => 1,
            'seller_send_in_type' => 'days',
            'region' => 'Global',
            'returns' => 'No returns',
            'accept_currency' => 'USD',
            'protection' => 'You are protected under the Gameflip Guarantee.  Get the item as described or your money back.',
            'type_product' => 'Material',
            'category' => 'Game',
            'author' => 'Brightcore',
            'avatar' => 'https://www.mygiftcardbalance.co.uk/wp-content/uploads/2017/10/game_gift_card.jpg',
            'image_1' => '',
            'image_2' => '',
            'image_3' => '',
            'price' => 17.56,
            'fee' => 0.56,
            'qty' => 2,
    );

    $data2 = array(
        'time_created' => current_time( 'mysql' ),
        'title' => '$100.00 Amazon Gift Card',
        'description' => 'INSTANT Amazon Gift Card 100.00 USD$',
        'platform' => 'Amazon',
        'delivery_method' => 'Digital Code ',
        'seller_send_in_time' => 1,
        'seller_send_in_type' => 'days',
        'region' => 'Global',
        'returns' => 'No returns',
        'accept_currency' => 'USD',
        'protection' => 'You are protected under the Gameflip Guarantee.  Get the item as described or your money back.',
        'type_product' => 'Gift Cards',
        'category' => 'giftcard',
        'author' => 'Eastern T',
        'avatar' => 'https://www.mygiftcardbalance.co.uk/wp-content/uploads/2017/10/game_gift_card.jpg',
        'image_1' => '',
        'image_2' => '',
        'image_3' => '',
        'price' => 88.55,
        'fee' => 0.56,
        'qty' => 1,
    );

    $data3 = array(
        'time_created' => current_time( 'mysql' ),
        'title' => '$25.00 Amazon Gift Card',
        'description' => 'INSTANT Amazon Gift Card 100.00 USD$',
        'platform' => 'Amazon',
        'delivery_method' => 'Digital Code',
        'seller_send_in_time' => 1,
        'seller_send_in_type' => 'days',
        'region' => 'Global',
        'returns' => 'No returns',
        'accept_currency' => 'USD',
        'protection' => 'You are protected under the Gameflip Guarantee.  Get the item as described or your money back.',
        'type_product' => 'Gift Cards',
        'category' => 'giftcard',
        'author' => 'Truong.NQ',
        'avatar' => 'https://www.mygiftcardbalance.co.uk/wp-content/uploads/2017/10/game_gift_card.jpg',
        'image_1' => '',
        'image_2' => '',
        'image_3' => '',
        'price' => 88.55,
        'fee' => 0.56,
        'qty' => 1,
    );

    $table_name = $wpdb->prefix . 'product';

    $wpdb->insert(
        $table_name,
        $data1
    );

    $wpdb->insert(
        $table_name,
        $data2
    );

    $wpdb->insert(
        $table_name,
        $data3
    );
}

function myplugin_update_db_check() {
    global $jal_db_version;
    if ( get_site_option( 'jal_db_version' ) != $jal_db_version ) {
        jal_install();
    }
}


add_action( 'plugins_loaded', 'myplugin_update_db_check' );