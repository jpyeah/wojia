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
    <div class="container-fluid">
        <div class="row">
            <div class="footer-link">
                <a href="#">沃家公寓</a> |
                <a href="#">新闻资讯</a> |
                <a href="#">团队介绍</a> |
                <a href="#">加盟沃家</a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-3">
                    <label>深圳市沃家公寓</label>
                    <label>深圳市福田区新天世纪商务中心C座26楼</label>
                    <span><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/tell_ico.jpg">0755-82821335</span>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/wechat.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background: #38383E">
        <div class="row">
            <div class="copyright">
                <a>© 版权归深圳市沃家公寓所有</a>
            </div>
        </div>
    </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
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
            while (div.innerHTML = '<!--[if gt IE ' + (++v) + ']><i></i><![endif]-->', all[0]) ;
            return v > 4 ? v : 0;
        }());
        return _IE;
    };
    if (getIEVersion() > 0 && getIEVersion() < 8) {
        alert("您使用的浏览器过于陈旧，请使用IE8以上浏览器进行浏览，能够获得更好的体验！")
    }
    $(function () {
        var anchorList = $('.anchor').find('li');
        $(window).scroll(function () {
            var wst = $(window).scrollTop();

            for (var i = 1; i < anchorList.length; i++) {
                if ($('#m' + i).offset().top <= wst) {
                    $("#m" + (i + 1) + (i + 1)).find('div').eq(0).addClass('active');
                } else {
                    $("#m" + (i + 1) + (i + 1)).find('div').eq(0).removeClass('active');
                }
            }
        })
    })
    $(document).ready(function () {
        // 返回顶部
        // $(window).scroll(function () {
        // var scrollTop = $(window).scrollTop();
        // if (scrollTop > 0) {
        // 	$('.scroll-top').css({
        // 		display: 'block'
        // 	})
        // } else {
        // 	$('.scroll-top').css({
        // 		display: 'none'
        // 	})
        // }
        // })
        // $('.scroll-top').click(function () {
        // $('html, body').animate({
        // 	scrollTop: 0
        // }, 750)
        // })
    })

</script>

<script>
    new Swiper('.swiper-banner', {
        loop: true,

        // 如果需要分页器
        pagination: {
            el: '.swiper-pagination',
        },
    });

    // 公寓
    const galleryTop1 = new Swiper('.gallery-top-1', {
        spaceBetween: 10,
        loop: true,
        loopedSlides: 5, //looped slides should be the same
        navigation: {
            nextEl: '.swiper-button-next-1',
            prevEl: '.swiper-button-prev-1',
        },
    });
    const galleryThumbs1 = new Swiper('.gallery-thumbs-1', {
        spaceBetween: 10,
        slidesPerView: 4,
        touchRatio: 0.2,
        loop: true,
        loopedSlides: 5, //looped slides should be the same
        slideToClickedSlide: true,

    });
    galleryTop1.controller.control = galleryThumbs1;
    galleryThumbs1.controller.control = galleryTop1;

    // 别墅
    const galleryTop2 = new Swiper('.gallery-top-2', {
        spaceBetween: 10,
        loop: true,
        loopedSlides: 5, //looped slides should be the same
        navigation: {
            nextEl: '.swiper-button-next-2',
            prevEl: '.swiper-button-prev-2',
        },
    });
    const galleryThumbs2 = new Swiper('.gallery-thumbs-2', {
        spaceBetween: 10,
        slidesPerView: 4,
        touchRatio: 0.2,
        loop: true,
        loopedSlides: 5, //looped slides should be the same
        slideToClickedSlide: true,

    });
    galleryTop2.controller.control = galleryThumbs2;
    galleryThumbs2.controller.control = galleryTop2;

</script>
</body>

</html>

