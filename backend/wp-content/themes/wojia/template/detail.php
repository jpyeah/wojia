<?php

/*
Template Name: detail
*/
/**
 * Created by PhpStorm.
 * User: jpall
 * Date: 2018/4/26
 * Time: 下午4:41
 */
get_header();

?>
<div class="container-fluid" style="margin-top: -180px;height: 600px;">
    <div class="row">
        <div class="banner">
            <img class="banner-bg" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/news_bg.jpg">
        </div>
    </div>
</div>

<!-- 内容 -->




<div class="container-fluid article" style="background: #F4F3F3">
    <div class="row">
        <div class="container">

<?php if (have_posts()) : while (have_posts()) : the_post();?>

    <div class="row">

                <div class="article-detail">
                    <div class="article-title">
                        <h3>    <?php the_title(); ?></h3>
                        <small>发布时间：2017-12-20 10：41</small>
                    </div>
                    <p>
                        <?php the_content(); ?>

                    </p>
                </div>
            </div>
<?php endwhile; endif; ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>