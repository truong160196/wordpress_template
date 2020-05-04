<?php

class Plugin_Admin {
	const NONCE = 'plugin-update-key';

	private static $initiated = false;

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
        // $main is now a slug named "toplevel_page_t5-demo"
        // built with get_plugin_page_hookname( $menu_slug, '' )
        $main = add_menu_page(
            'Product',                         // page title
            'Product',                         // menu title
            // Change the capability to make the pages visible for other users.
            // See http://codex.wordpress.org/Roles_and_Capabilities
            false,                  // capability
            'product',                         // menu slug
            array ( __CLASS__, 'render_page_all_product' ) // callback function
        );

        // $sub is now a slug named "t5-demo_page_t5-demo-sub"
        // built with get_plugin_page_hookname( $menu_slug, $parent_slug)
        $sub = add_submenu_page(
            'product',                         // parent slug
            __('All product', 'my-plugin'),                      // page title
            __('All product', 'my-plugin'),              // menu title
            'manage_options',                   // capability
            'list-product',                     // menu slug
            array ( __CLASS__, 'render_page_all_product' ) // callback function, same as above
        );


        // $text is now a slug named "t5-demo_page_t5-text-included"
        // built with get_plugin_page_hookname( $menu_slug, $parent_slug)
        $sub_menu = add_submenu_page(
            'product',                         // parent slug
            'Create Product',                     // page title
            'Create Product',                     // menu title
            'manage_options',                  // capability
            'create-product',                     // menu slug
            array ( __CLASS__, 'render_page_create_product' ) // callback function, same as above
        );

        /* See http://wordpress.stackexchange.com/a/49994/73 for the difference
         * to "'admin_enqueue_scripts', $hook_suffix"
         */
        foreach ( array ( $main, $sub, $sub_menu ) as $slug )
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
        }
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
        $file = plugin_dir_path(__FILE__ ) . 'views/list/list-product.php';

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
        $file = plugin_dir_path(__FILE__ ) . 'views/create/create-product.php';

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

        // add file css style.css
        wp_register_style(
            'bootstrap_css',
            plugins_url( 'my-plugin/css/style.css' )
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
            't5_demo_js',
            plugins_url( 'my-plugin/js/plugin.js' ),
            array(),
            FALSE,
            TRUE
        );
        wp_enqueue_script( 't5_demo_js' );
    }
}
