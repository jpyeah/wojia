<?php
/**
 * Created by PhpStorm.
 * User: mc
 * Date: 2018/1/25
 * Time: 09:49
 */
?>

<nav class="nav navbar-inverse navbar-fixed-top custom-header" role="navgation">
    <div class="container">
        <div class="navbar-header">
            <a href="#" class="navbar-brand hidden-sm hidden-md">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png" >
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
            <div class="navbar-form navbar-right">
                <!-- 搜索  -->
            </div>
        </div>
    </div>
</nav>

