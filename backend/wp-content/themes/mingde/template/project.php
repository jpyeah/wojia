<?php
/*
Template Name: project
*/


get_header();

?>


<div class="container-fluid">
    <div class="row">
        <img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/banner_3.jpg" alt="">
    </div>
</div>

<!--  产品及服务  -->
<div class="container project">
    <div class="row">
        <div class="col-md-12">
            <div class="item-title">
                <div class="title-line">
                    <h3>产品及服务</h3>
                    <small>Products and services</small>
                    <span>more</span>
                </div>
                <div class="bottom-line"></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="pro-item">
                <div class="cover">
                    <img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home_img_1.png" alt="">
                </div>
                <span>企业投贷联动咨询及服务</span>
                <small>联合母基金</small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="pro-item">
                <div class="cover">
                    <img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home_img_2.png" alt="">
                </div>
                <span>PE/并购夹层基金和服务</span>
                <small>实现优质投资</small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="pro-item">
                <div class="cover">
                    <img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home_img_3.png" alt="">
                </div>
                <span>企业投资并购咨询及服务</span>
                <small>提供投资并购合作</small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="pro-item">
                <div class="cover">
                    <img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home_img_1.png" alt="">
                </div>
                <span>企业投贷联动咨询及服务</span>
                <small>联合母基金</small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="pro-item">
                <div class="cover">
                    <img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home_img_2.png" alt="">
                </div>
                <span>PE/并购夹层基金和服务</span>
                <small>实现优质投资</small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="pro-item">
                <div class="cover">
                    <img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/home_img_3.png" alt="">
                </div>
                <span>企业投资并购咨询及服务</span>
                <small>提供投资并购合作</small>
            </div>
        </div>
    </div>
</div>

<!-- 产品及服务类型 -->
<div class="container-fluid project-type">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="item-title">
                    <div class="title-line">
                        <h3>产品及服务类型</h3>
                        <small>Product and service type</small>
                    </div>
                    <div class="bottom-line"></div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="type-item">
                    <div class="type-img">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/pro_img_7.png" alt="">
                    </div>
                    <div class="type-item-text">
                        <label>1、企业投贷联动咨询及服务</label>
                        <span>为企业各阶段资本运作提供投贷联动咨询和服务，联合母基金、券商直投基金VC/PE、银行 资管计划、信托、上市公司等综合结构多层次资本，以“银行+VC/PE”为基础模型，研究 设计与企业核心商业模式、现金流结构和财务模型、供应链、市场扩张规划等相匹配且可持 续发展的资金运作方案，赋能企业资金链和资金使用效能。</span>
                    </div>
                </div>
                <div class="type-item">
                    <div class="type-img">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/pro_img_8.png" alt="">
                    </div>
                    <div class="type-item-text">
                        <label>2、PE/并购夹层基金咨询和服务</label>
                        <span>为优质投资机构提供针对优质项目标的或产业整体相关业务的PE/并购夹层基金设立研究与 服务，联动非银金融机构，实现优质投资机构对优质项目标投资和产业整合的资金快速到 位。</span>
                    </div>
                </div>
                <div class="type-item">
                    <div class="type-img">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/pro_img_9.png" alt="">
                    </div>
                    <div class="type-item-text">
                        <label>3、企业投资并购咨询及服务</label>
                        <span>为优质企业（被并购方/卖方）提供投资并购合作的咨询及服务，帮忙投资机构及企业股 东增加股权投资变现机会。</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
