<form id="posts-filter" method="get">
    <p class="search-box">
        <label class="screen-reader-text" for="post-search-input">Tìm các bài viết:</label>
        <input type="search" id="post-search-input" name="s" value="">
        <input type="submit" id="search-submit" class="button" value="Tìm các bài viết">
    </p>
    <input type="hidden" name="post_status" class="post_status_page" value="all">
    <input type="hidden" name="post_type" class="post_type_page" value="post">
    <input type="hidden" id="_wpnonce" name="_wpnonce" value="d114a919c5"><input type="hidden" name="_wp_http_referer" value="/wp-admin/edit.php">
    <div class="tablenav top">
        <div class="alignleft actions bulkactions">
            <label for="bulk-action-selector-top" class="screen-reader-text">Lựa chọn thao tác hàng loạt</label>
            <select name="action" id="bulk-action-selector-top">
                <option value="-1">Tác vụ</option>
                <option value="edit" class="hide-if-no-js">Chỉnh sửa</option>
                <option value="trash">Bỏ vào thùng rác</option>
            </select>
            <input type="submit" id="doaction" class="button action" value="Áp dụng">
        </div>
        <div class="alignleft actions">
            <label for="filter-by-date" class="screen-reader-text">Lọc theo ngày</label>
            <select name="m" id="filter-by-date">
                <option selected="selected" value="0">Tất cả các ngày</option>
                <option value="202004">Tháng Tư 2020</option>
            </select>
            <label class="screen-reader-text" for="cat">Lọc theo danh mục</label>
            <select name="cat" id="cat" class="postform">
                <option value="0">Tất cả chuyên mục</option>
                <option class="level-0" value="1">Uncategorised</option>
            </select>
            <input type="submit" name="filter_action" id="post-query-submit" class="button" value="Lọc">
        </div>
        <div class="tablenav-pages one-page"><span class="displaying-num">1 mục</span>
            <span class="pagination-links"><span class="tablenav-pages-navspan button disabled" aria-hidden="true">«</span>
         <span class="tablenav-pages-navspan button disabled" aria-hidden="true">‹</span>
         <span class="paging-input"><label for="current-page-selector" class="screen-reader-text">Trang hiện tại</label><input class="current-page" id="current-page-selector" type="text" name="paged" value="1" size="1" aria-describedby="table-paging"><span class="tablenav-paging-text"> trên <span class="total-pages">1</span></span></span>
         <span class="tablenav-pages-navspan button disabled" aria-hidden="true">›</span>
         <span class="tablenav-pages-navspan button disabled" aria-hidden="true">»</span></span>
        </div>
        <br class="clear">
    </div>
</form>