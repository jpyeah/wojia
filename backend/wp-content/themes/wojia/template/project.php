<?php

/*
Template Name: project
*/
/**
 * Created by PhpStorm.
 * User: jpall
 * Date: 2018/4/26
 * Time: 下午4:41
 */
get_header();


?>


<div class="container-fluid" style="margin-top: -180px;height: 644px;">
    <div class="row">
        <div class="banner">
            <img class="banner-bg" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/pro_top_bg.jpg">
        </div>
    </div>
</div>

<!-- 项目展示 -->
<div class="container pro-desc">
    <div class="row">
        <div class="content">
            <h3>项目展示</h3>
            <span>我们聚集了一个专业的公寓运营管理团队，目前已经扎根深圳、广州、东莞、惠州、河源、汕头、重庆等7个城市，一共拥有和管理着10000多套公寓，同时也是途家斯维登公寓品牌的全国最大合作伙伴。</span>
        </div>
    </div>
</div>

<!-- 项目列表 -->
<div class="container pro-list">

    <?php $posts = get_posts( "category=4&numberposts=10" ); ?>
    <?php if($posts):?>
        <div class="row">

        <?php foreach( $posts as $post) : setup_postdata( $post );  ?>
            <div class="col-md-4">
                <div class="pro-item">
                    <?php the_post_thumbnail() ?>
                    <div class="mask">
                        <label><?php the_title()?></label>
                    </div>
                    <span><?php the_title()?></span>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    <?php endif; ?>

</div>


<?php get_footer(); ?>
