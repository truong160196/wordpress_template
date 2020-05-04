<div class="wrap">
    <?php
    global $title;
    ?>
    <h1 class='wp-heading-inline'><?php echo $title ?></h1>
    <hr class="wp-header-end">
    <form id="product-created" method="post">
        <div class="header-form">
            <div class="button-group-right">
                <button type="button" class="btn btn-secondary btn-draft">View Demo</button>
                <button type="button" class="btn btn-info btn-submit">Publish</button>
            </div>
        </div>
        <div class="row">
            <div class="left-form-product col-sm-12 col-lg-8">
                <?php
                $file = plugin_dir_path(__FILE__ ) . 'left-form.php';
                if ( file_exists( $file ) )
                    require $file;
                ?>
            </div>
            <div class="right-form-product col-sm-12 col-lg-4">
                <?php
                $file = plugin_dir_path(__FILE__ ) . 'right-form.php';
                if ( file_exists( $file ) )
                    require $file;
                ?>
            </div>
        </div>
    </form>
</div>
