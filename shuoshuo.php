<?php

/**
 * Template name: WIIUII-说说页面
 * Description:   WIIUII-shuoshuo
 */

// 获取链接列表
get_header();
$header_style = zib_get_page_header_style();
?>
<main class="container">
    <div class="content-wrap">
        <div class="content-layout">
            <?php while (have_posts()) : the_post(); ?>
                <?php if ($header_style != 1) {
                    echo zib_get_page_header();
                } ?>
                <?php endwhile;  ?>
                <div class="box-body theme-box radius8 main-bg main-shadow">
                    <?php if ($header_style == 1) {
                        echo zib_get_page_header();
                    } ?>
                <!--说说主体开始www.wiiuii.cn-->
                <style type="text/css">
                #wiiuii-bt h1,#wiiuii-bt h2,#wiiuii-bt h3,#wiiuii-bt h4,#wiiuii-bt h5 #wiiuii-bt h1{font-weight: bold;background-color: #f6f6f6;margin: 20px 0;border-bottom: 0px solid red;padding: 5px 12px;border-left: 5px solid red;margin: 12px 0px;border-radius: 0.4rem;}#wiiuii-bt h2{font-weight: bold;background-color: #f6f6f6;margin: 20px 0;border-bottom: 0px solid #FF1493;padding: 5px 12px;border-left: 5px solid #FF1493;border-radius: 0.4rem;margin: 12px 0px;}#wiiuii-bt h3{font-weight: bold;background-color: #f6f6f6;margin: 20px 0;border-bottom: 0px solid #4169E1;padding: 5px 12px;border-left: 5px solid #4169E1;margin: 12px 0px;border-radius: 0.4rem;}#wiiuii-bt h4{font-weight: bold;background-color: #f6f6f6;margin: 20px 0;border-bottom: 0px solid #3CB371;padding: 5px 12px;border-left: 5px solid #3CB371;margin: 12px 0px;border-radius: 0.4rem;}#wiiuii-bt h5{font-weight: bold;background-color: #f6f6f6;margin: 20px 0;border-bottom: 0px solid #FFC0CB;padding: 5px 12px;border-left: 5px solid #FFC0CB;margin: 12px 0px;border-radius: 0.4rem;}/*www.wiiuii.cn*/#article{color: #444; font-family: microsoft yahei;}#article ul{padding-left:0px!important;}#article li{padding:5px!important;color: var(--main-color);}#article img{border-radius: 5px;} #article p{color:var(--main-color);}#article video{border-radius: 5px;}.typebox{box-shadow:0px 1px 6px 0.01px #9999993d;padding:10px;margin-bottom:20px;border-radius:8px;}.typeafter{margin-right:-15px;margin-left:-15px;margin-top:-20px;}.wiiuii-avatar img{border-radius: 50%;width:50px;height:50px;}.wiiuii-avatar{float:left;position:relative;min-height:1px;padding: 0px 15px 10px 15px;}.wiiuii-hr{border-top: 2px dashed rgba(255,78,106,.85);margin: 0 0 0;}.wiiuii-content{positiON: relative;}.wiiuii-content .shuoshuo-icon{position: absolute;right: 1px;display: block;width: 40px;height: 40px;line-height: 20px;background-image: url(https://img.wiiuii.cn/img/%E8%AF%B4.svg);transform-origin: 0% 0%;}/*www.wiiuii.cn*/#wiiuii-content{background-color: rgba(255,78,106,.15); color: #ff4e6a; border-radius: 5px!important;padding: 2px 5px;display: inline-block; }#wiiuii-content1{background-color: rgb(41, 151, 247, .15); color: #2997f7; border-radius: 5px!important;padding: 2px 5px;display: inline-block; }/*www.wiiuii.cn*/.gd{font-weight:700;margin: 30px 0 10px 10px;}.wiiuii-fenye{box-shadow: 0px 1px 6px 0.01px #9999993d;border-radius: 8px;}.wiiuii-h2 h2{display: block; font-size: 1.5em; margin-block-start: 0.83em; margin-block-end: 0.83em; margin-inline-start: 0px; margin-inline-end: 0px; font-weight: bold;}.wiiuii-h2 h2::before{content:"# ";color:#f04494;font-weight:bold;}.button{padding: 5px 25px; font-size: 16px; margin: 4px 2px; -webkit-transition-duration: 0.4s; transition-duration: 0.4s; cursor: pointer; border-radius: 10px!important;} .button1{background-color: var(--main-bg-color); color:#2997f7; border: 2px solid #2997f7;} .button1:hover{background-color: #2997f7; color: white;}.aligncenter {clear: both;display: block;margin: 0 auto;}.alignright{display: block;margin-left: auto;}.wiiuii_frame{padding: 0 10px 0 10px;}
                /*图片背景*//*.wiiuii_bj{background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url(https://img.wiiuii.cn/img/%E7%8C%9B%E7%94%B7%E7%B2%89.jpg);background-size: cover; background-repeat: no-repeat; background-position: center center; border-radius: 5px; cursor: pointer;}*/
                 .post-like{text-align:center;padding:10px} .post-like a{background-color: #2997f7; border-radius: 10px; color: #FFFFFF; font-size: 15px; padding: 8px 10px; text-decoration: none; outline: none;}.post-like a.done, .post-like a:hover{background-color: #F44336; color: #ffffff;} .post-like a.done{cursor:not-allowed}
                </style>
                 <!--点赞功能js-->
                 <script type="text/javascript">
                    $.fn.postLike=function(){if($(this).hasClass('done')){return false}else{$(this).addClass('done');var id=$(this).data("id"),action=$(this).data('action'),rateHolder=$(this).children('.count');var ajax_data={action:"bigfa_like",um_id:id,um_action:action};$.post("/wp-admin/admin-ajax.php",ajax_data,function(data){$(rateHolder).html(data)});return false}};$(document).on("click",".favorite",function(){$(this).postLike()});
                </script>
                </head>
                <body>
                <h1 class="wp-block-zibllblock-biaoti title-theme"><strong>说说列表:</strong></h1>
                <h1 class="wp-block-zibllblock-biaoti title-theme"><strong>目前总计发表 <span style="color: #ff0000;"><?php $count_posts = wp_count_posts('shuoshuo'); echo $published_posts = $count_posts->publish;?></span> 个说说，更新于 <span style="color: #ff0000;"><?php $last = $wpdb->get_results("SELECT MAX(post_modified) AS MAX_m FROM $wpdb->posts WHERE (post_type = 'shuoshuo')");$last = date('Y年n月j日', strtotime($last[0]->MAX_m));echo $last; ?></span>。<strong></h1>
                </br>
                <div class="wiiuii-content">
                <ul>
                    <?php $limit = get_option('posts_per_page');$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;  
                    query_posts('post_type=shuoshuo&post_status=publish&showposts=' . $limit=6 . '&paged=' . $paged);if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <li> 
                            <div class="typebox wiiuii_bj">
                                <a class="shuoshuo-icon"></a>
                            <div class="typeafter">
                            <div class="wiiuii-avatar">
                                <a href="<?php bloginfo('url'); ?>"><?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?></a>
                            </div>
                            <div class="gd">
                                <p id="wiiuii-content"><i class="fa fa-user" aria-hidden="true"></i> <?php the_author(); ?>の碎碎念</p></br>
                                <p id="wiiuii-content1"><i class="fa fa-calendar" aria-hidden="true"></i> <?php the_time('Y年n月j日 G:i D'); ?></p>
                            </div>
                            </div>
                             <hr class="wiiuii-hr" >
                            <div class="wiiuii_frame">
                                <div class="wiiuii-h2">
                                    <h2><?php the_title();?></h2>
                                </div>
                                <div id="article" class="wp-posts-content">
                                    <div id="wiiuii-bt">
                                    <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                            <!--点赞功能开始-->
                            <div class="post-like">
                                <a href="javascript:;" data-action="ding" data-id="<?php the_ID(); ?>" class="favorite<?php if(isset($_COOKIE['bigfa_ding_'.$post->ID])) echo ' done';?>"><i class="fa fa-heart" aria-hidden="true"></i> 喜欢(<span class="count"><?php if( get_post_meta($post->ID,'bigfa_ding',true) ){ echo get_post_meta($post->ID,'bigfa_ding',true);} else { echo '0';}?></span>)
                                </a>
                                </div>
                            </div>
                            <!---->
                        <?php endwhile;endif; ?>
                    </li>
                </ul>
                <!--分页功能-->
                <div class="wiiuii-fenye" style="text-align:center;font-weight:700;">
                <?php if (function_exists('wp_pagenavi')) wp_pagenavi();else { ?><div style="padding: 8px;"><?php previous_posts_link('<button class="button button1"><i class="fa fa-caret-left" aria-hidden="true"></i> 上一页</button>') ?>  <?php next_posts_link('<button class="button button1">下一页 <i class="fa fa-caret-right" aria-hidden="true"></i></button>') ?></div><?php } ?>
                </div>
                </div>
                <!--说说主体结束www.wiiuii.cn-->
                </div>
                <!---->
                <!---->
                <?php comments_template('/template/comments.php', true); ?>
        </div>
    </div>
    <?php get_sidebar(); ?>
</main>
<?php
get_footer();