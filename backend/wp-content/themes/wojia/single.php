<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

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
                            <small>发布时间：<?php $d=strtotime($post->post_modified);echo date('Y/m/d h:i:s',$d);?></small>
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
