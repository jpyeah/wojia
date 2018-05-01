<?php

/*
Template Name: article
*/
/**
 * Created by PhpStorm.
 * User: jpall
 * Date: 2018/4/26
 * Time: 下午4:40
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

    <!-- 内容列表 -->

    <div class="container-fluid article" style="background: #F4F3F3">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="article-list">
                        <h3>沃家新闻</h3>
                        <ul>
                            <?php $posts = get_posts( "category=3&numberposts=8" ); ?>
                            <?php if( $posts ) : ?>
                                <?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
                                    <li>
                                        <a href="<?php the_permalink() ?>">
                                            <label><?php echo the_title(); ?></label>
                                            <span><?php $d=strtotime($post->post_modified);echo date('Y/m/d h:i:s',$d);?></span>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php get_footer(); ?>