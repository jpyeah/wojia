<?php
/**
 * Created by PhpStorm.
 * User: mc
 * Date: 2018/1/25
 * Time: 09:49
 */
?>

<nav class="nav navbar-inverse custom-header" role="navgation">
    <div class="container">
        <div class="navbar-header">
            <a href="#" class="navbar-brand visible-xs">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png">
            </a>

            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse nav-text">

            <?php
            if ( has_nav_menu( 'header_menu' ) ) {
                wp_nav_menu( array(
                    'theme_location' => 'header_menu',
                    'menu'              => 'header_menu',
                    'depth'             => 0,
                    'container'         => '',
                    'container_class'   => '',
                    'menu_class'        => 'nav navbar-nav',
                    'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'walker' => new Primary_Walker_Nav_Menu()
                ) );
            }
            ?>
<!--            <ul class="navbar-nav nav">-->
<!--                <li class="active"><a href="index.html">首页</a></li>-->
<!--                <li><a href="project.html">沃家项目</a></li>-->
<!--                <li><a href="info.html">公司简介</a></li>-->
<!--                <li><a href="article.html">新闻资讯</a></li>-->
<!--                <li><a href="join.html">加入我们</a></li>-->
<!--            </ul>-->
        </div>
    </div>
</nav>



