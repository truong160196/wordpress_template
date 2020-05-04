<?php
    $request = new WP_REST_Request( 'GET', '/product/v1/list' );

    $response = rest_do_request($request);
?>
<table class="wp-list-table widefat fixed striped posts">
    <thead>
    <tr>
        <td id="cb" class="manage-column column-cb check-column"><label class="screen-reader-text" for="cb-select-all-1">Chọn toàn bộ</label><input id="cb-select-all-1" type="checkbox"></td>
        <th scope="col" id="title" class="manage-column column-title column-primary sortable desc"><a href="http://localhost:8888/wp-admin/edit.php?orderby=title&amp;order=asc"><span>Tiêu đề</span><span class="sorting-indicator"></span></a></th>
        <th scope="col" id="author" class="manage-column column-author">Tác giả</th>
        <th scope="col" id="categories" class="manage-column column-categories">Chuyên mục</th>
        <th scope="col" id="tags" class="manage-column column-tags">Thẻ</th>
        <th scope="col" id="date" class="manage-column column-date sortable asc"><a href="http://localhost:8888/wp-admin/edit.php?orderby=date&amp;order=desc"><span>Thời gian</span><span class="sorting-indicator"></span></a></th>
    </tr>
    </thead>
    <tbody id="the-list">
    <?php
        foreach ($response->get_data() as $item) {
            ?>
        <tr id="post-1" class="iedit author-self level-0 post-1 type-post status-publish format-standard hentry category-uncategorised">
            <th scope="row" class="check-column">
                <label class="screen-reader-text" for="cb-select-1">
                    <?php $item->title ?>			</label>
                <input id="cb-select-1" type="checkbox" name="post[]" value="1">
                <div class="locked-indicator">
                    <span class="locked-indicator-icon" aria-hidden="true"></span>
                    <span class="screen-reader-text">
                        <?php $item->title ?> đã bị khóa
                    </span>
                </div>
            </th>
            <td class="title column-title has-row-actions column-primary page-title" data-colname="Tiêu đề">
                <div class="locked-info"><span class="locked-avatar"></span> <span class="locked-text"></span></div>
                <strong><a class="row-title" href="#"><?php echo $item->title ?></a></strong>
                <div class="row-actions">
                    <span class="edit">
                        <a href="#" aria-label="Sửa “Hello world!”">Chỉnh sửa</a> | </span>
                    <span class="trash">
                        <a href="#" class="submitdelete" aria-label="Bỏ “Hello world!” vào thùng rác">Thùng rác</a> | </span>
                    <span class="view"><a href="http://localhost:8888/2020/04/16/hello-world/" rel="bookmark" aria-label="Xem “Hello world!”">Xem</a></span></div>
                <button type="button" class="toggle-row">
                    <span class="screen-reader-text">Hiển thị chi tiết</span>
                </button>
            </td>
            <td class="author column-author" data-colname="Tác giả">
                <a href="edit.php?post_type=post&amp;author=1">
                    <?php echo $item->author ?>
                </a>
            </td>
            <td class="categories column-categories" data-colname="Chuyên mục">
                <a href="edit.php?category_name=uncategorised">
                    <?php echo $item->region ?>
                </a>
            </td>
            <td class="tags column-tags" data-colname="Thẻ">
                <span aria-hidden="true">—</span>
                <span class="screen-reader-text"><?php echo $item->platform ?></span>
            </td>
            <td class="date column-date" data-colname="Thời gian">Đã xuất bản<br><span title="2020/04/16 10:02:35 sáng"><?php echo $item->time_created ?></span></td>
        </tr>
    <?php
        }
    ?>
    </tbody>
    <tfoot>
    <tr>
        <td class="manage-column column-cb check-column"><label class="screen-reader-text" for="cb-select-all-2">Chọn toàn bộ</label><input id="cb-select-all-2" type="checkbox"></td>
        <th scope="col" class="manage-column column-title column-primary sortable desc"><a href="http://localhost:8888/wp-admin/edit.php?orderby=title&amp;order=asc"><span>Tiêu đề</span><span class="sorting-indicator"></span></a></th>
        <th scope="col" class="manage-column column-author">Tác giả</th>
        <th scope="col" class="manage-column column-categories">Chuyên mục</th>
        <th scope="col" class="manage-column column-tags">Thẻ</th>
        <th scope="col" class="manage-column column-date sortable asc"><a href="http://localhost:8888/wp-admin/edit.php?orderby=date&amp;order=desc"><span>Thời gian</span><span class="sorting-indicator"></span></a></th>
    </tr>
    </tfoot>
</table>