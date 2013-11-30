<?php
// 分页函数
if (!function_exists("flight_page_nav")) {
    function flight_page_nav() {
        global $wp_query, $wp_rewrite;
        $wp_query->query_vars["paged"] > 1 ? $current = $wp_query->query_vars["paged"] : $current = 1; // 判断当前页面

        $pagination = array(
            "base" => @add_query_arg('paged','%#%'),
            "format" => "",
            "total" => $wp_query->max_num_pages,
            "current" => $current,
            "show_all" => false,
            "end_size" => 0,
            "mid_size" => 4,
            "prev_text" => "上一页",
            "next_text" => "下一页"
        );

        if( $wp_rewrite->using_permalinks() )
            $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg('s', get_pagenum_link(1) ) ) . 'page/%#%/', 'paged');
        if( !empty($wp_query->query_vars['s']) )
            $pagination['add_args'] = array('s'=>get_query_var('s'));
        echo paginate_links($pagination);
    }
}
?>