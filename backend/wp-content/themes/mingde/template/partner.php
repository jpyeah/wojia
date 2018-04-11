<?php
/*
Template Name: partner
*/


get_header();

?>



<!--  产品及服务  -->
<div class="container partner">
    <div class="row">
        <div class="col-md-12">
            <div class="item-title">
                <div class="title-line">
                    <h3>合作伙伴</h3>
                    <small>Cooperative partner</small>
                </div>
                <div class="bottom-line"></div>
            </div>
        </div>
        <div class="col-md-12">
            <div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">银行机构</a>
                    </li>
                    <li role="presentation">
                        <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">券商</a>
                    </li>
                    <li role="presentation">
                        <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">母基金</a>
                    </li>
                    <li role="presentation">
                        <a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">投资机构</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="tab1">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="logo-item">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo_img_1.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="logo-item">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo_img_2.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="logo-item">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo_img_3.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="logo-item">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo_img_4.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="logo-item">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo_img_4.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab2">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="logo-item">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo_img_1.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="logo-item">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo_img_2.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="logo-item">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo_img_3.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="logo-item">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo_img_4.png" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab3">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
