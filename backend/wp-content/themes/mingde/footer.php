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
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/swiper/swiper.min.js"></script>

<script>
    /**
     * 获取IE版本
     * @returns 0:非IE浏览器, 大于0，IE版本
     */
    function getIEVersion() {
        var _IE = (function () {
            var v = 3, div = document.createElement('div'), all = div.getElementsByTagName('i');
            while (div.innerHTML = '<!--[if gt IE ' + (++v) + ']><i></i><![endif]-->', all[0]);
            return v > 4 ? v : 0;
        }());
        return _IE;
    };
    if (getIEVersion() > 0 && getIEVersion() < 8) {
        alert("您使用的浏览器过于陈旧，请使用IE8以上浏览器进行浏览，能够获得更好的体验！")
    }
    $(document).ready(function () {
        $(window).scroll(function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > 0) {
                $('.scroll-top').css({
                    display: 'block'
                })
            } else {
                $('.scroll-top').css({
                    display: 'none'
                })
            }
        })
        $('.scroll-top').click(function () {
            $('html, body').animate({
                scrollTop: 0
            }, 750)
        })
    })

</script>

</body>

</html>
