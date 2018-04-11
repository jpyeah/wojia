<?php
/**
 * Created by PhpStorm.
 * User: mc
 * Date: 2018/1/24
 * Time: 14:34
 */

add_filter('show_admin_bar', '__return_false');


//主键key调用nav时使用，值value为后台菜单显示名称
if (function_exists('register_nav_menus')){
    register_nav_menus(array( 'primary' => 'home','header_menu'=>'头部菜单', 'center-menu'=>'首页中部菜单','buttom-menu'=>'底部菜单' ));
}

class Primary_Walker_Nav_Menu extends Walker_Nav_Menu {

    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        if (array_search('menu-item-has-children', $item->classes)) {
            $output .= sprintf("\n<li class='dropdown %s'><a href='%s' class=\"dropdown-toggle left\"  data-hover=\"dropdown\" data-delay=\"10\" data-close-others=\"true\" aria-expanded=\"true\" data-toggle=\"dropdown\" >%s<span class=\"caret\"></span></a>\n", join(' ', $item->classes ), $item->url, $item->title
            );

        } else {
            $output .= sprintf("\n<li class='%s'><a href='%s'>%s</a>\n", join(' ', $item->classes ), $item->url, $item->title
            );
        }
    }

    function start_lvl(&$output,$depth = 0, $args = array()) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dropdown-menu\" role=\"menu\">\n";
    }



}


class Center_Walker_Nav_Menu extends Walker_Nav_Menu {


    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        if (array_search('menu-item-has-children', $item->classes)) {
            $output .= sprintf("\n<li class='dropdown %s'><a href='%s' class=\"dropdown-toggle left\"  data-hover=\"dropdown\" data-delay=\"10\" data-close-others=\"true\" aria-expanded=\"true\" data-toggle=\"dropdown\" >%s<span class=\"caret\"></span></a>\n", join(' ', $item->classes ), $item->url, $item->title
            );
        } else {
            $output .= sprintf("\n<li ><a href='%s'>%s</a>\n",  $item->url, $item->title
            );
        }
    }

    function start_lvl(&$output,$depth = 0, $args = array()) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dropdown-menu\" role=\"menu\">\n";
    }

}


class Buttom_Walker_Nav_Menu extends Walker_Nav_Menu {
    
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $output .= sprintf("\n<a href='%s'>%s\n"."  |",  $item->url, $item->title
            );

    }
    function start_lvl(&$output,$depth = 0, $args = array()) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dropdown-menu\" role=\"menu\">\n";
    }

}




add_action('template_include', 'load_single_template');
function load_single_template($template) {
    $new_template = '';
    // single post template
    if( is_single() ) {
        global $post;
        // 'wordpress' is category slugs
        if( has_term('cn', 'category', $post) ) {
            // use template file single-wordpress.php
            $new_template = locate_template(array('single-cn.php' ));
        }
    }
    return ('' != $new_template) ? $new_template : $template;
}



//include_once 'templates/about-cn.php';
//include_once 'templates/about-en.php';

function custom_loginlogo() {
    echo '<style type="text/css">
h1 a {background-image: url('.get_bloginfo('template_directory').'/img/logo.png) !important; }
</style>';
}
add_action('login_head', 'custom_loginlogo');


function theme_slug_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'theme_slug_setup' );

?>
