<div class="wrap">
    <?php
        global $title;
        static $param = array();
    ?>
    <h1 class='wp-heading-inline'><?php echo $title ?></h1>
    <a href="<?php echo admin_url('admin.php?page=products&type=new') ?>" class="page-title-action">Viết bài mới</a>
    <hr class="wp-header-end">
    <div id="post-body" class="metabox-holder columns-2">
        <div id="post-body-content">
            <div class="meta-box-sortables ui-sortable">
                <form method="post">
                    <input type="hidden" name="page" value="kv_subscriptions">
                    <?php
                    if( isset($_POST['s']) ){
                        self::$products->prepare_items($_POST['s']);
                    } else {
                        self::$products->prepare_items();
                    }
                    self::$products->search_box('Search', 'search');
                    self::$products ->display();
                    ?>
                </form>
            </div>
        </div>
    </div>
    <br class="clear">
</div>
