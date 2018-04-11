<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<?php wp_footer(); ?>

<footer>
    <div class="container">
<!--        <div class="footer-link">-->

            <?php
            if ( has_nav_menu( 'header_menu' ) ) {
                wp_nav_menu( array(
                    'theme_location' => 'buttom-menu',
                    'menu'              => 'buttom-menu',
                    'depth'             => 0,
                    'container'         => '',
                    'container_class'   => '',
                    'menu_class'        => 'nav navbar-nav',
                    'items_wrap'        => '<div class="footer-link">%3$s</div>',
                    'walker' => new Buttom_Walker_Nav_Menu()
                ) );
            }
            ?>
<!--            <a href="#">首页</a> |-->
<!--            <a href="#">关于明心</a> |-->
<!--            <a href="#">产品及服务</a> |-->
<!--            <a href="#">客户案例</a> |-->
<!--            <a href="#">明心观点</a> |-->
<!--            <a href="#">合作伙伴</a> |-->
<!--            <a href="#">联系我们</a> |-->
<!--            <a href="#">加入我们</a>-->
<!--        </div>-->
        <div class="copyright">
            <a>Copyright © 2018 - 2030 明心资本 版权所有</a>
        </div>
    </div>
</footer>
<div class="scroll-top">
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/scroll_top.png" alt="">
</div> <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap/js/jquery-1.12.4.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap/js/bootstrap-hover-dropdown.min.js"></script>

<!--[if lt IE 10]>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/PIE-2.0/PIE_IE678.js"></script>
<![endif]-->


<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/fancybox/lib/jquery.mousewheel.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/js/fancybox/source/jquery.fancybox.css?v=2.1.7" type="text/css" media="screen"/>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/fancybox/source/jquery.fancybox.pack.js?v=2.1.7"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/js/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css"
      media="screen"/>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/js/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css"
      media="screen"/>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

<script>
    /**
     * 获取IE版本
     * @returns 0:非IE浏览器, 大于0，IE版本
     */
    function getIEVersion() {
        var _IE = (function () {
            var v = 3, div = document.createElement('div'), all = div.getElementsByTagName('i');
            while (div.innerHTML = '<!--[if gt IE ' + (++v) + ']><i></i><![endif]-->', all[0]) ;
            return v > 4 ? v : 0;
        }());
        return _IE;
    };
    if (getIEVersion() > 0 && getIEVersion() < 8) {
        alert("您使用的浏览器过于陈旧，请使用IE8以上浏览器进行浏览，能够获得更好的体验！")
    }

</script>

</body>

</html>