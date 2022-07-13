<?php
/*
 * @Author        : Qinver
 * @Url           : zibll.com
 * @Date          : 2020-09-29 13:18:36
 * @LastEditTime: 2022-04-28 21:25:40
 * @Email         : 770349780@qq.com
 * @Project       : Zibll子比主题
 * @Description   : 一款极其优雅的Wordpress主题
 * @Read me       : 感谢您使用子比主题，主题源码有详细的注释，支持二次开发。
 * @Remind        : 使用盗版主题会存在各种未知风险。支持正版，从我做起！
 */

if (
    strlen($_SERVER['REQUEST_URI']) > 384 ||
    strpos($_SERVER['REQUEST_URI'], "eval(") ||
    strpos($_SERVER['REQUEST_URI'], "base64")
) {
    @header("HTTP/1.1 414 Request-URI Too Long");
    @header("Status: 414 Request-URI Too Long");
    @header("Connection: Close");
    @exit;
}
//通过QUERY_STRING取得完整的传入数据，然后取得url=之后的所有值，兼容性更好

@session_start();
$t_url = !empty($_SESSION['GOLINK']) ? $_SESSION['GOLINK'] : preg_replace('/^url=(.*)$/i', '$1', $_SERVER["QUERY_STRING"]);
//数据处理
if (!empty($t_url)) {
    //判断取值是否加密
    if ($t_url == base64_encode(base64_decode($t_url))) {
        $t_url = base64_decode($t_url);
    }
    //防止xss
    $t_url = htmlspecialchars($t_url);

    //对取值进行网址校验和判断
    preg_match('/^(http|https|thunder|qqdl|ed2k|Flashget|qbrowser):\/\//i', $t_url, $matches);
    if ($matches) {
        $url   = $t_url;
        $title = '页面加载中,请稍候...';
    } else {
        preg_match('/\./i', $t_url, $matche);
        if ($matche) {
            $url   = 'http://' . $t_url;
            $title = '页面加载中,请稍候...';
        } else {
            $url   = 'http://' . $_SERVER['HTTP_HOST'];
            $title = '参数错误，正在返回首页...';
        }
    }
} else {
    $title = '参数缺失，正在返回首页...';
    $url   = 'http://' . $_SERVER['HTTP_HOST'];
}

$url = str_replace('&amp;', '&', $url);
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="robots" content="noindex, nofollow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <noscript>
        <meta http-equiv="refresh" content="1;url='<?php echo $url; ?>';">
    </noscript>
    <script>
        function link_jump() {
            //禁止其他网站使用我们的跳转页面
            var MyHOST = new RegExp("<?php echo $_SERVER['HTTP_HOST']; ?>");
            if (!MyHOST.test(document.referrer)) {
                location.href = "http://" + MyHOST;
            }
            location.href = "<?php echo $url; ?>";
        }
        //延时1S跳转，可自行修改延时时间
        setTimeout(link_jump, 1500);
        //延时50S关闭跳转页面，用于文件下载后不会关闭跳转页的问题
        setTimeout(function() {
            window.opener = null;
            window.close();
        }, 50000);
</script>
<title><?php echo $title;?></title>
<style>html, body { width: 100%; height: 100%; margin: 0; background: #270F34; overflow: hidden; display: flex; align-items: center; justify-content: center } css-doodle { --color: @p(#51eaea, #fffde1, #ff9d76, #FB3569); --rule: ( :doodle { @grid: 30x1 / 18vmin; --deg: @p(-180deg, 180deg); } :container { perspective: 30vmin; } :after, :before { content: ''; background: var(--color); @place-cell: @r(100%) @r(100%); @size: @r(6px); @shape: heart; } @place-cell: center; @size: 100%; box-shadow: @m(2, (0 0 50px var(--color))); background: @m(100, (radial-gradient(var(--color) 50%, transparent 0) @r(-20%, 120%) @r(-20%, 100%) / 1px 1px no-repeat)); will-change: transform, opacity; animation: scale-up 12s linear infinite; animation-delay: calc(-12s / @size() * @i()); @keyframes scale-up { 0%, 95.01%, 100% { transform: translateZ(0) rotate(0); opacity: 0; } 10% { opacity: 1; } 95% { transform: translateZ(35vmin) rotateZ(@var(--deg)); } } ) }</style></head>
  <body>
    <css-doodle use="var(--rule)"></css-doodle>
    <script src='https://www.wiiuii.cn/cdn/js/go-min.js'></script>
  </body>
</html>