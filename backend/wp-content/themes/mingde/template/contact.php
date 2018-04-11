<?php
/*
Template Name: contact
*/


get_header();

?>



<div class="container-fluid">
    <div class="row">
        <img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/banner_6.jpg" alt="">
    </div>
</div>

<!--  产品及服务  -->
<div class="container callme">
    <div class="row">
        <div class="col-md-4">
            <div class="item-title">
                <div class="title-line">
                    <h3>联系我们</h3>
                    <small>Contact us</small>
                </div>
                <div class="bottom-line"></div>
            </div>
            <div class="us">
                <label>明心资本</label>
                <span>深圳市南山区蛇口如意路113号敦煌大厦A栋11号</span>
                <span>0755-853312</span>
                <span>0755-853312</span>
            </div>
        </div>
        <div class="col-md-6">
            <img style="width:500px;margin-top: 50px" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/map_img.png" alt="">
        </div>
    </div>
</div>
<?php get_footer(); ?>
