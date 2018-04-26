<?php

/*
Template Name: info
*/
/**
 * Created by PhpStorm.
 * User: jpall
 * Date: 2018/4/26
 * Time: 下午4:41
 */
get_header();

?>



<div class="container-fluid" style="margin-top: -180px;height: 1000px;">
    <div class="row">
        <div class="banner">
            <img class="banner-bg" src="img/comp_bg.jpg">
        </div>
    </div>
</div>

<!-- 简介 -->
<div class="container info-desc" id="m1">
    <div class="row">
        <div class="content">
            <span>
                沃家成立于2017年，是国内最专业的公寓品牌运营商，提供酒店公寓、长租公寓、别墅等公寓服务。公司拥有一个具有10多年公寓运营经验的团队，以“不断提高客户的满意度和舒适度”为目标，通过专业的管理，细致、贴心的服务，致力于为身在异乡的您提供一个温馨、舒适的家
目前沃家已在深圳、广州、东莞、惠州、河源、汕头、重庆等7个城市拥有和管理10000多套公寓，同时也是途家斯维登公寓品牌的全国最大合作伙伴。沃家既为旅行者提供了优质的旅行的新体验，又为业主提供了灵活的闲置资产托管增值服务。
            </span>

        </div>
    </div>
</div>

<!-- 沃家的产品 -->
<div class="container-fluid comp-pro" id="m2">
    <div class="row">
        <div class="col-md-12">
            <h3>沃家的产品</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="pro-item">
                        <img src="img/home_img_1.jpg" alt="">
                        <span>酒店公寓</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pro-item">
                        <img src="img/home_img_2.jpg" alt="">
                        <span>别墅</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pro-item">
                        <img src="img/home_img_3.jpg" alt="">
                        <span>长租公寓</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 里程碑 -->
<div class="container-fluid milestone" id="m3">
    <div class="row">
        <div class="col-md-12">
            <h3>沃家里程碑</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="col-md-6">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" style="background-image:url('img/cover_1.png')"></div>
                            <div class="swiper-slide" style="background-image:url('img/cover_1.png')"></div>
                            <div class="swiper-slide" style="background-image:url('img/cover_1.png')"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <img src="img/milestone.jpg" alt="" style="width: 100%;padding: 20px 0">
    </div>
</div>

<div class="anchor">
    <ul>
        <li>
            <a href="#m1" id="m11">
                <span>沃家简介</span>
                <div class="circle-1 active">
                    <div class="circle-2"></div>
                </div>
            </a>
        </li>
        <li>
            <a href="#m2" id="m22">
                <span>沃家产品</span>
                <div class="circle-1">
                    <div class="circle-2"></div>
                </div>
            </a>
        </li>
        <li>
            <a href="#m3" id="m33">
                <span>里程碑</span>
                <div class="circle-1">
                    <div class="circle-2"></div>
                </div>
            </a>
        </li>
    </ul>
</div>

<?php get_footer(); ?>