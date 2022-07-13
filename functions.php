<?php
/*
 * @Author        : Qinver
 * @Url           : zibll.com
 * @Date          : 2020-09-29 13:18:36
 * @LastEditTime: 2022-06-25 16:21:30
 * @Email         : 770349780@qq.com
 * @Project       : Zibll子比主题
 * @Description   : 一款极其优雅的Wordpress主题
 * @Read me       : 感谢您使用子比主题，主题源码有详细的注释，支持二次开发。
 * @Remind        : 使用盗版主题会存在各种未知风险。支持正版，从我做起！
 */

require_once get_theme_file_path('/inc/inc.php');

/**
 * 如果您需要添加一些自定义的PHP代码
 * 您可以在当前目录下新建一个 func.php 的文件，写入你的php代码
 * 主题会自动判断文件进行引入
 * 使用此方式在线更新主题的时候，func.php文件的内容将不会被覆盖（手动更新仍然会覆盖）
 * 当然需要注意php的代码规范，错误代码将会引起网站严重错误！
 */
if (file_exists(get_theme_file_path('/func.php'))) {
    require_once get_theme_file_path('/func.php');
}

/**
 * 您也可以将您的临时自定义php代码写在下方
 * 主题更新请自行备份您的自定义代码
 */

//说说
add_action('init', 'my_custom_init'); function my_custom_init() { $labels = array( 'name' => '说说', 'singular_name' => 'singularname', 'add_new' => '发表说说', 'add_new_item' => '发表说说', 'edit_item' => '编辑说说', 'new_item' => '新说说', 'view_item' => '查看说说', 'search_items' => '搜索说说', 'not_found' => '暂无说说', 'not_found_in_trash' => '没有已遗弃的说说', 'parent_item_colon' => '', 'menu_name' => '说说' ); $args = array( 'labels' => $labels, 'public' => true, 'publicly_queryable' => true, 'show_ui' => true, 'show_in_menu' => true, 'query_var' => true, 'rewrite' => true, 'capability_type' => 'post', 'has_archive' => true, 'hierarchical' => false, 'menu_position' => null, 'supports' => array('title','editor','author','custom-fields','comments') ); register_post_type('shuoshuo',$args); }
 //指定说说文章模板
add_filter( 'template_include', 'include_template_function', 1 );
function include_template_function( $template_path ) {
    if ( get_post_type() == 'shuoshuo' ) {
        if ( is_single() ) {
            if ( $theme_file = locate_template( array ( 'shuoshuo.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/pages/shuoshuo.php';//自己修改文件路径
            }
        }
    }
    return $template_path;
}
/*说说点赞功能*/
add_action('wp_ajax_nopriv_bigfa_like', 'bigfa_like');
add_action('wp_ajax_bigfa_like', 'bigfa_like');
function bigfa_like(){
    global $wpdb,$post;
    $id = $_POST["um_id"];
    $action = $_POST["um_action"];
    if ( $action == 'ding'){
    $bigfa_raters = get_post_meta($id,'bigfa_ding',true);
    $expire = time() + 99999999;
    $domain = ($_SERVER['HTTP_HOST'] != 'localhost') ? $_SERVER['HTTP_HOST'] : false; // make cookies work with localhost
    setcookie('bigfa_ding_'.$id,$id,$expire,'/',$domain,false);
    if (!$bigfa_raters || !is_numeric($bigfa_raters)) {
        update_post_meta($id, 'bigfa_ding', 1);
    } 
    else {
            update_post_meta($id, 'bigfa_ding', ($bigfa_raters + 1));
        }
    echo get_post_meta($id,'bigfa_ding',true);
    } 
    die;
}
