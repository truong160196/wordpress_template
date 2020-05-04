<div class="wrap">
    <?php
    global $title;
    ?>
    <h1 class='wp-heading-inline'><?php echo $title ?></h1>
    <a href="<?php echo admin_url('admin.php?page=create-product') ?>" class="page-title-action">Viết bài mới</a>
    <hr class="wp-header-end">
    <h2 class="screen-reader-text">Lọc danh sách bài đăng</h2>
    <ul class="subsubsub">
        <li class="all"><a href="#" class="current" aria-current="page">Tất cả <span class="count">(1)</span></a> |</li>
        <li class="publish"><a href="#">Đã xuất bản <span class="count">(1)</span></a></li>
    </ul>
    <?php
        $file = plugin_dir_path(__FILE__ ) . 'filter-product.php';
        if ( file_exists( $file ) )
            require $file;
    ?>

    <?php
        $file = plugin_dir_path(__FILE__ ) . 'table-product.php';
        if ( file_exists( $file ) )
            require $file;
    ?>
</div>
