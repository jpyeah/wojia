<?php
/*
Template Name: about
*/


get_header();

?>


<div class="container-fluid">
    <div class="row">
        <img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/banner_2.jpg" alt="">
    </div>
</div>

<!-- 公司介绍 -->
<div class="container company-desc">
    <div class="row">
        <div class="col-md-12">
            <div class="item-title">
                <div class="title-line">
                    <h3>公司介绍</h3>
                    <small>Company introduction</small>
                </div>
                <div class="bottom-line"></div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="desc-box">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/about_img_1.png" alt="">
                <div class="desc-text">
                    <label>明心公司介绍：</label>
                    <span>
                            明心资本是中国领先的创新研究型精品投行，专注投贷联动、投资并购等投资银行服务，团队自2010年至今已经服务企业近千家，融资总额超过350亿元。在新科技、新能源、新材料、智能制造、生物医药、大消费、商业地产、电子商务等多个细分领域，都具备丰富的实践经验和成果。
                        </span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 团队顾问 -->
<div class="container team-advisor">
    <div class="row">
        <div class="col-md-12">
            <div class="item-title">
                <div class="title-line">
                    <h3>团队顾问</h3>
                    <small>Consultant team</small>
                </div>
                <div class="bottom-line"></div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="team-item">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/about_img_2.png" alt="">
                <div class="team-text">
                    <label>柯尼斯.格夫</label>
                    <span>高级顾问</span>
                    <small>具有10多年经验，专注投贷联动、投资并购等投资银行服务，联合银行、母基金、券商直投基金、 解决企业发展各生命周期的多元化资金需求。</small>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
