<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package codieslab
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php 
global $post;

$desktop_logo = (get_field('desktop_logo', 'option'))?get_field('desktop_logo', 'option'):'';
$mobile_logo = (get_field('mobile_logo', 'option'))?get_field('mobile_logo', 'option'):'';
$site_url = (get_field('site_url', 'option'))?get_field('site_url', 'option'):'';
$site_icon = (get_field('site_icon', 'option'))?get_field('site_icon', 'option'):'';
$sale_text = (get_field('sale_text', 'option'))?get_field('sale_text', 'option'):'';
$sales_email = (get_field('sales_email', 'option'))?get_field('sales_email', 'option'):'';
$menu_hero_image = (get_field('menu_hero_image', 'option'))?get_field('menu_hero_image', 'option'):'';
$contact_us = (get_field('contact_us', 'option'))?get_field('contact_us', 'option'):'';
$get_quote = (get_field('get_quote', 'option'))?get_field('get_quote', 'option'):'';
$description = (get_field('description', 'option'))?get_field('description', 'option'):'';

$site_url1 = ( !empty($site_url['url']) )? $site_url['url']:'#';

?>
<?php wp_body_open(); ?>
<!--start header -->
    <header class="header">
        <div class="container-fluid no-pad">
            <div class="innerHdWrap">
                <div class="logo">
                    <a href="<?php echo $site_url1; ?>">
                    <?php 
                    if (!empty($desktop_logo)) {
                        echo '<img src="'.$desktop_logo['url'].'" alt="'.$desktop_logo['alt'].'" class="desktop" />';
                    }
                    if (!empty($mobile_logo)) {
                        echo '<img src="'.$mobile_logo['url'].'" alt="'.$mobile_logo['alt'].'" class="mobile" />';
                    }
                    ?>
                    </a>
                </div>
               
            <?php if ( has_nav_menu( 'header-menu' ) ) : ?>
                <div class="navWrapDv">
                    <nav id="site-navigation-header-menu" class="mainNav">
                        <div class="innerNavWrap"> 
                    <?php

                    $theme_location_header = 'header-menu';
                    if ( ($theme_location_header) && ($locations_header = get_nav_menu_locations()) && isset($locations_header[$theme_location_header]) ) {                       

                        $menu = get_term( $locations_header[$theme_location_header], 'nav_menu' );
                        $menu_items = wp_get_nav_menu_items($menu->term_id);
                        
                        $menu_list_header = '<ul>' ."\n";
                        $bool=false;
                        foreach( $menu_items as $menu_item ) {
                            if( $menu_item->menu_item_parent == 0 ) {
                                
                                $parent = $menu_item->ID;
                                
                                $menu_array = array();
                                foreach( $menu_items as $submenu ) {
                                    if( $submenu->menu_item_parent == $parent ) {
                                        $bool = true;
                                        $menu_array[] = '<li><a href="' . $submenu->url . '"><h5>' . $submenu->title . '</h5><p>'. $submenu->description.'</p></a></li>' ."\n";
                                    }
                                }
                                if( $bool == true && count( $menu_array ) > 0 ) {
                                    
                                    $menu_list_header .= '<li>' ."\n";
                                    $menu_list_header .= '<a href="' . $menu_item->url . '">' . $menu_item->title . ' <i class="fa-solid fa-angle-down"></i></a>' ."\n";
                                    $menu_list_header .= '<div class="dowpDown">
                                                        <div class="dropCont">' ."\n";
                                                $menu_list_header .= '<ul>' ."\n";
                                            $menu_list_header .= implode( "\n", $menu_array );
                                            $menu_list_header .= '</ul>
                                                        </div>';
                                    $menu_list_header .= '<div class="dropFoot">
                                                    <p><img src="'.get_template_directory_uri().'/asserts/img/help-icon.svg" alt="" /> <strong>Not finding</strong> what you are looking for ?</p>
                                                    <a href="'.$contact_us['url'].'" class="btn btn-navContact">'.$contact_us['title'].'</a>
                                                    </div>
                                                    </div>' ."\n";
                                    
                                } else {
                                    
                                    $menu_list_header .= '<li>' ."\n";
                                    $menu_list_header .= '<a href="' . $menu_item->url . '">' . $menu_item->title . '</a>' ."\n";
                                }
                                
                            }
                            $menu_list_header .= '</li>' ."\n";
                        }                             
                        $menu_list_header .= '</ul>' ."\n";
                        } else {
                        $menu_list_header = '<!-- no menu defined in location "'.$theme_location.'" -->';
                        }
                        echo $menu_list_header;
                     ?>
                        <?php
                            // wp_nav_menu( array(
                            //     'container'     => '',
                            //     'menu_id'       => 'header-nav',
                            //     'menu_class'    => '',
                            //     'theme_location'=> 'header-menu',
                            //     'link_before'   => '',
                            //     'link_after'    => '',
                            //     'items_wrap'    => '<ul id="%s" class="%s">%s</ul>',
                            //     'walker'         => new WPSE_headermenu_Walker,
                            // ) );
                        ?>
                        </div>
                        <div class="mobileAftNv">
                            <?php 
                            if (!empty($contact_us)) {
                                echo '<a href="'.$contact_us['url'].'" class="btn btn-navContact" target="'.$contact_us['target'].'">'.$contact_us['title'].'</a>';
                            }
                            if (!empty($get_quote)) {
                                echo '<a href="'.$get_quote['url'].'" class="btn btn-getQuote" target="'.$get_quote['target'].'">'.$get_quote['title'].'</a>';
                            }
                            ?>
                            <div class="weAlways">
                                <a href="<?php echo $site_url1; ?>" class="humLogo">
                                    <?php 
                                    if (!empty($site_icon)) {
                                        echo '<img src="'.$site_icon['url'].'" alt="'.$site_icon['alt'].'">';
                                    }
                                    echo '<span>'.$sale_text.'</span>';
                                    ?>
                                </a>
                                <div class="mailUsLink">
                                    <?php 
                                    echo '<a href="mailto:'.$sales_email.'" class="bigLink">'.$sales_email.'</a>';
                                     ?>
                                </div>
                            </div>
                        </div>
                    </nav><!-- #site-navigation -->
                    <div class="navBtnWrap">
                        <?php 
                        if (!empty($contact_us)) {
                            echo '<a href="'.$contact_us['url'].'" class="btn btn-navContact" target="'.$contact_us['target'].'">'.$contact_us['title'].'</a>';
                        }
                        if (!empty($get_quote)) {
                            echo '<a href="'.$get_quote['url'].'" class="btn btn-getQuote" target="'.$get_quote['target'].'">'.$get_quote['title'].'</a>';
                        }
                        ?>
                        <a href="#!" class="btn secNavToggle">
                        <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/menu-icon.svg" alt="" />
                        </a>
                        <a href="#!" class="btn secNavToggleMobile">
                        <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/menu-icon.svg" alt="" />
                        </a>
                    </div>
                </div>
            <?php endif; ?>

            </div>
        </div>
    </header>
	  <!-- End header --->
	<!--Start Hummber Menu -->
    <?php if ( has_nav_menu( 'header-popupmenu' ) ) : ?>
    <div class="humMenuPop">
        <div class="innerWrap">
            <div id="tabs">
            <div class="leftMainMenu">
                <div class="logoPop">
                    <a href="<?php echo $site_url1; ?>" class="logoPopAnc">
                        <?php 
                        if (!empty($desktop_logo)) {
                            echo '<img src="'.$desktop_logo['url'].'" alt="'.$desktop_logo['alt'].'"/>';
                        }
                        ?>
                    </a>
                </div>
                <div class="menuPop">
                    <?php 
                    $theme_location = 'header-popupmenu';
                    if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {

                        $menu = get_term( $locations[$theme_location], 'nav_menu' );
                        $menu_items = wp_get_nav_menu_items($menu->term_id);                      
                        $menu_list = '<ul>' ."\n";
                        $i=1;
                        foreach( $menu_items as $menu_item ) {
                            if( $menu_item->menu_item_parent == 0 ) {

                                $menu_list .= '<li>' ."\n";
                                $menu_list .= '<a href="#tabs-' . $i . '">' . $menu_item->title . '</a>' ."\n";
                                $menu_list .= '</li>' ."\n";
                            $i++;
                            }
                        }
                        $menu_list .= '</ul>' ."\n";
                        echo $menu_list;
                    }
                    ?>
                </div>
                <div class="socialPop">
                    <div class="botTxt">
                        <p><?php echo $description; ?></p>
                    </div>
                    <div class="socialBtn">
                        <?php $social_media = get_field('social_media', 'option'); ?>
                        <ul>
                    <?php 
                        if (isset($social_media) && !empty($social_media)) {
                            foreach ($social_media as $key_sm => $menu_sm ) {
                            echo '<li><a href="'.$menu_sm['link'].'" target="_blank"><img src="'.$menu_sm['icon'].'"/></a></li>';
                            }
                        }
                    ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="rightSubMenu">
                <?php
                if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {

                    //$site_url1 = ( !empty($site_url['url']) )? $site_url['url']:'#';
                    $sales_email1 =(!empty($sales_email))?'<a href="mailto:'.$sales_email.'" class="bigLink">'.$sales_email.'</a>':'';
                    $menu = get_term( $locations[$theme_location], 'nav_menu' );
                    $menu_items1 = wp_get_nav_menu_items($menu->term_id);
                    $j=1;
                    $menu_list_sub ='';
                    foreach( $menu_items1 as $menu_item ) {
                        if( $menu_item->menu_item_parent == 0 ) {
                            
                            $parent = $menu_item->ID;                            
                            $menu_array = array();
                            foreach( $menu_items1 as $submenu ) {
                                if( $submenu->menu_item_parent == $parent ) {
                                    $bool = true;
                                    $menu_array[] = '<li><a href="' . $submenu->url . '">' . $submenu->title . '</a></li>' ."\n";
                                }
                            }
                            if( $bool == true && count( $menu_array ) > 0 ) {
                                
                                $menu_list_sub .= '<div id="tabs-'.$j.'">' ."\n";
                                    $menu_list_sub .= '<div class="innerWrap">' ."\n";
                                        $menu_list_sub .= '<div class="header">
                                                            <h4>Work Domains</h4>
                                                            <div class="closeIt">
                                                                <a href="#!"><img src="'.get_template_directory_uri().'/asserts/img/ico-times.svg" alt="" /></a>
                                                            </div>
                                                        </div>' ."\n";
                                        $menu_list_sub .= '<div class="contentPt">
                                                            <div class="menuSd">
                                                                <ul>' ."\n";
                                                $menu_list_sub .= implode( "\n", $menu_array );
                                                $menu_list_sub .= '</ul>
                                                            </div>' ."\n";
                                                $menu_list_sub .= '<div class="imgSd">' ."\n";
                                                if (!empty($menu_hero_image)) {
                                                    $menu_list_sub .= '<img src="'.$menu_hero_image['url'].'" alt="'.$menu_hero_image['alt'].'"/>' ."\n";
                                                }
                                                $menu_list_sub .= '</div>
                                                        </div>'."\n";

                                    $menu_list_sub .= '<div class="footerPt">
                                                            <div class="leftPt">
                                                                <a href="'.$site_url1 .'" class="humLogo">';
                                            if (!empty($site_icon)) {
                                                $menu_list_sub .= '<img src="'.$site_icon['url'].'" alt="'.$site_icon['alt'].'"/>';
                                            }
                                                                   
                                                    $menu_list_sub .= '</a>'."\n";
                                
                                                    $menu_list_sub .= '<p>'.$sale_text.' '. $sales_email1.'</p>
                                                            </div>';
                                                $menu_list_sub .= '<div class="rightPt">'."\n";
                                        if (!empty($get_quote)) {
                                            $menu_list_sub .= '<a href="'.$get_quote['url'].'" class="btn btn-getQuote size-01" target="'.$get_quote['target'].'">'.$get_quote['title'].'</a>';
                                                            } 
                                                $menu_list_sub .= '</div>                 
                                                        </div>
                                                    </div>'."\n";

                                
                            } else {
                                
                                $menu_list_sub .= '<div id="tabs-'.$j.'">' ."\n";
                                    $menu_list_sub .= '<div class="innerWrap">' ."\n";
                                        $menu_list_sub .= '<div class="header">
                                                            <h4>Work Domains</h4>
                                                            <div class="closeIt">
                                                                <a href="#!"><img src="'.get_template_directory_uri().'/asserts/img/ico-times.svg" alt="" /></a>
                                                            </div>
                                                        </div>' ."\n";
                                        $menu_list_sub .= '<div class="contentPt">
                                                            <div class="menuSd">
                                                                <ul>' ."\n";
                                                $menu_list_sub .= '</ul>
                                                            </div>' ."\n";
                                                $menu_list_sub .= '<div class="imgSd">' ."\n";
                                                if (!empty($menu_hero_image)) {
                                                    $menu_list_sub .= '<img src="'.$menu_hero_image['url'].'" alt="'.$menu_hero_image['alt'].'"/>' ."\n";
                                                }
                                                $menu_list_sub .= '</div>
                                                        </div>'."\n";

                                    $menu_list_sub .= '<div class="footerPt">
                                                            <div class="leftPt">
                                                                <a href="'.$site_url1 .'" class="humLogo">';
                                            if (!empty($site_icon)) {
                                                $menu_list_sub .= '<img src="'.$site_icon['url'].'" alt="'.$site_icon['alt'].'"/>';
                                            }
                                                                   
                                                    $menu_list_sub .= '</a>'."\n";
                                
                                                    $menu_list_sub .= '<p>'.$sale_text.' '. $sales_email1.'</p>
                                                            </div>';
                                                $menu_list_sub .= '<div class="rightPt">'."\n";
                                        if (!empty($get_quote)) {
                                            $menu_list_sub .= '<a href="'.$get_quote['url'].'" class="btn btn-getQuote size-01" target="'.$get_quote['target'].'">'.$get_quote['title'].'</a>';
                                                            } 
                                                $menu_list_sub .= '</div>                 
                                                        </div>
                                                    </div>'."\n";
                            
                            }
                            
                        $j++;
                        $menu_list_sub .= '</div>' ."\n";
                        }

                    }
                    echo $menu_list_sub;
                }

                ?>
            </div>
            </div>
        </div>
    </div>
    <?php endif; ?>  
	<!-- End popup Hummber menu --->