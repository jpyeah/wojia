<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1"/>
    <meta http-equiv="X-UA-Compatible" content="IE=9"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>首页</title>
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！-->

    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/js/swiper/swiper.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/mobile.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 6]>
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap/css/bootstrap-ie6.css">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap/css/ie.css">
    <![endif]-->

    <!--[if lt IE 6]>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap/js/bootstrap-ie.js"></script>
    <![endif]-->


    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap/js/html5shiv.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap/js/respond.min.js"></script>
    <![endif]-->
</head>


<body>
<div class="base-header">
    <div class="container-fluid" style="border-bottom: 1px solid #B2B2B2;">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="logo-bar">
                        <div class="logo-left">
                            <span>城市公寓品牌运营商</span>
                        </div>
                        <div class="logo">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png">
                        </div>
                        <div class="logo-right">
                            <span>联系热线：0755-888888</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">

            <?php get_template_part( 'template-parts/navigation/navigation', 'main' ); ?>


        </div>
    </div>
</div>





