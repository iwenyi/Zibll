<?php
/*
 * @Author: Qinver
 * @Url: zibll.com
 * @Date: 2021-04-28 00:05:06
 * @LastEditTime: 2022-04-16 18:04:57
 */
?>
<footer class="footer">

	<?php if (function_exists('dynamic_sidebar')) {
    dynamic_sidebar('all_footer');
}?>
	<div class="container-fluid container-footer">
		<?php do_action('zib_footer_conter');?>
	</div>
</footer>
<!--底部波浪开始-->
<div class="wiiuii_layout">
<svg class="editorial"
     xmlns="http://www.w3.org/2000/svg"
     xmlns:xlink="http://www.w3.org/1999/xlink"
     viewBox="0 24 150 28"
     preserveAspectRatio="none">
 <defs>
 <path id="gentle-wave"
 d="M-160 44c30 0 
    58-18 88-18s
    58 18 88 18 
    58-18 88-18 
    58 18 88 18
    v44h-352z" />
  </defs>
  <g class="parallax">
   <use xlink:href="#gentle-wave" x="50" y="0" fill="#4579e2"/>
   <use xlink:href="#gentle-wave" x="50" y="3" fill="#3461c1"/>
   <use xlink:href="#gentle-wave" x="50" y="6" fill="#2d55aa"/>  
  </g>
</svg>
</div>
<style type='text/css'>
.parallax > use{animation: move-forever 12s linear infinite;}.parallax > use:nth-child(1){animation-delay: -2s;}.parallax > use:nth-child(2){animation-delay: -2s; animation-duration: 5s;}.parallax > use:nth-child(3){animation-delay: -4s; animation-duration: 3s;}@keyframes move-forever{0%{transform: translate(-90px, 0%);} 100%{transform: translate(85px, 0%);}}.wiiuii_layout{width: 100%;height: 40px;position: relative;overflow: hidden;z-index: 1;background: var(--footer-bg);}.editorial{display: block; width: 100%; height: 40px; margin: 0;}
</style>
<!--底部波浪结束-->
<?php
wp_footer();
?>
</body>
</html>