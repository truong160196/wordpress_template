<?php
require_once( 'plugin-service.php' );

class Plugin_Admin {
	const NONCE = 'plugin-update-key';

	private static $initiated = false;

    public static $products;

	public static function init() {
		if ( ! self::$initiated ) {
			self::init_hooks();
		}
	}

	public static function init_hooks() {
		self::$initiated = true;

		add_action( 'admin_menu', array( 'Plugin_Admin', 'admin_menu' ), 5 );
    }

	public static function admin_menu() {
		if ( class_exists( 'Jetpack' ) )
			add_action( 'jetpack_admin_menu', array( 'Plugin_Admin', 'load_menu' ) );
		else
			self::load_menu();
	}

	public static function load_menu() {
        $main = add_menu_page(
            'Product',
            'Product',
            false,
            'product',
            array ( __CLASS__, 'render_page_all_product' )
        );

        $list_product = add_submenu_page(
            'product',
            __('All product', 'my-plugin'),
            __('All product', 'my-plugin'),
            'manage_options',
            'list-product',
            array ( __CLASS__, 'render_page_all_product' )
        );

        $create_product = add_submenu_page(
            'product',
            'Product',
            'Create Product',
            'manage_options',
            'products',
            array ( __CLASS__, 'render_page_create_product' )
        );

        $lst_router = array (
            $main,
            $list_product,
            $create_product,
        );
        /* See http://wordpress.stackexchange.com/a/49994/73 for the difference
         * to "'admin_enqueue_scripts', $hook_suffix"
         */
        foreach ($lst_router as $slug )
        {
            // make sure the style callback is used on our page only
            add_action(
                "admin_print_styles-$slug",
                array ( __CLASS__, 'enqueue_style' )
            );
            // make sure the script callback is used on our page only
            add_action(
                "admin_print_scripts-$slug",
                array ( __CLASS__, 'enqueue_script' )
            );
            //
            add_action( "load-$slug", [ __CLASS__, 'screen_option' ] );

        }
	}

    public static function screen_option() {

        $option = 'per_page';
        $args   = [
            'label'   => 'Customers',
            'default' => 5,
            'option'  => 'customers_per_page'
        ];

        add_screen_option( $option, $args );

        self::$products = new Plugin_Service();
    }

    /**
     * Print page output.
     *
     * @wp-hook toplevel_page_t5-demo In wp-admin/admin.php do_action($page_hook).
     * @wp-hook t5-demo_page_t5-demo-sub
     * @return  void
     */
    public static function render_page_all_product()
    {
        $file = plugin_dir_path(__FILE__ ) . 'views/list/index.php';

        if ( file_exists( $file ) )
            require $file;
    }

    /**
     * Print included HTML file.
     *
     * @wp-hook t5-demo_page_t5-text-included
     * @return  void
     */
    public static function render_page_create_product()
    {
        $file = plugin_dir_path(__FILE__ ) . 'views/create/index.php';

        if ( file_exists( $file ) )
            require $file;
    }

    /**
     * Load stylesheet on our admin page only.
     *
     * @return void
     */
    public static function enqueue_style()
    {
        // add file css plugin.css
        wp_register_style(
            'plugin_css',
            plugins_url( 'my-plugin/css/plugin.css' )
        );

        wp_enqueue_style( 'plugin_css' );

        // add css notification
        wp_register_style(
            'notification_css',
            plugins_url( 'my-plugin/css/notification.css' )
        );

        wp_enqueue_style( 'notification_css' );

        // add file css style.css
        wp_register_style(
            'bootstrap_css',
            plugins_url( 'my-plugin/css/bootstrap.css' )
        );

        wp_enqueue_style( 'bootstrap_css' );
    }

    /**
     * Load JavaScript on our admin page only.
     *
     * @return void
     */
    public static function enqueue_script()
    {
        wp_register_script(
            'jquery_js',
            plugins_url( 'my-plugin/js/jquery.js' ),
            array(),
            FALSE,
            TRUE
        );
        wp_enqueue_script( 'jquery_js' );

        wp_register_script(
            'bootstrap_notification',
            plugins_url( 'my-plugin/js/bootstrap-notify.js' ),
            array(),
            FALSE,
            TRUE
        );
        wp_enqueue_script( 'bootstrap_notification' );

        wp_register_script(
            'plugin_js',
            plugins_url( 'my-plugin/js/plugin.js' ),
            array(),
            FALSE,
            TRUE
        );
        wp_enqueue_script( 'plugin_js' );

        wp_register_script(
            'main_js',
            plugins_url( 'my-plugin/js/main.js' ),
            array(),
            FALSE,
            TRUE
        );
        wp_enqueue_script( 'main_js' );
    }
}
