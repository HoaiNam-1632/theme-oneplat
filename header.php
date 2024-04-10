<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="wrapper">
                <div class="inner">
                    <div class="header-logo">
                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">  -->
                      <?php  
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                            if ( has_custom_logo() ) {
                                echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                            } else {
                            echo '<h1>' . get_bloginfo('name') . '</h1>';
                        }
                        ?>
                    </div>
                    <!-- Desktop -->
                    <div class="header-menu">
                        <div class="header-menu-top">
                            <ul>
                                <?php  
                                    $topMenus = wp_get_nav_menu_items('header-top-menu'); 
                                    echo "<li><a href ='".$topMenus[0]->url."'>".$topMenus[0]->post_title."</a></li>";
                                    echo "<li><a href ='".$topMenus[1]->url."' class='btn-header-menu-spec'>".$topMenus[1]->post_title."</a></li>";
                                    $topMenus = array_slice($topMenus, 2);
                                    foreach($topMenus as $menuItem){
                                        echo "<li><a href ='".$menuItem->url."' class='btn-header-menu''>".$menuItem->post_title."</a></li>";
                                    }
                                ?>
                            </ul>
                        </div>
                        <div class="header-menu-bottom">
                           <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'header-bottom-menu',
                                 ) )
                           ?>
                        </div>
                    </div>
                    <!-- Mobile, tablet -->
                    <div class="header-menu__mobile">
                        <div class="toggle-nav" id="icon-nav-header">
                                <span></span>
                                <span></span>
                                <span></span>
                        </div>
                        <div class="list-nav__mobile">
                            <div class="header-menu-icon">
                               <span class="icon-close" id="close-menu-header"></span>     
                            </div>
                            <div class="list-nav">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'header-bottom-menu',
                                 ) );
                            ?>
                            </div>
                            <div class="list-btn">
                            <ul>
                                <?php  
                                    $topMenus = wp_get_nav_menu_items('header-top-menu'); 
                                    echo "<li><a href ='".$topMenus[0]->url."'>".$topMenus[0]->post_title."</a></li>";
                                    echo "<li><a href ='".$topMenus[1]->url."' class='btn-header-menu-spec'>".$topMenus[1]->post_title."</a></li>";
                                    $topMenus = array_slice($topMenus, 2);
                                    foreach($topMenus as $menuItem){
                                        echo "<li><a href ='".$menuItem->url."' class='btn-header-menu''>".$menuItem->post_title."</a></li>";
                                    }
                                ?>
                            </ul>
                            </div>    
                        </div>        
                    </div>
                </div>
            </div>
        </div>

    </header>