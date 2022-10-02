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
<?php wp_body_open(); ?>
<!--start header -->
    <header class="header">
        <div class="container-fluid no-pad">
        <div class="innerHdWrap">
            <div class="logo">
                <a href="./index.html">
                    <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/logo-codielslab.svg" alt="" class="desktop" />
                    <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/logo-codielslab.svg" alt="" class="mobile" />
                    <!-- <img src="./asserts/img/logo-footer.svg" alt="" class="mobile" /> -->
                </a>
            </div>
            <div class="navWrapDv">
                <nav class="mainNav">
                    <div class="innerNavWrap">
                    <ul>
                        <li><a href="/about.html">ABOUT</a> </li>
                        <li>
                            <a href="#!">SERVICES <i class="fa-solid fa-angle-down"></i> </a> 
                            <div class="dowpDown">
                                <div class="dropCont">
                                <ul>
                                    <li>
                                        <a href="#!" class="active">
                                            <h5>Web Development</h5>
                                            <p>Fast, scalable & secure application experience.</p>
                                        </a>   
                                    </li>
                                    <li>
                                        <a href="#!">
                                            <h5>E-Commerce Solution</h5>
                                            <p>Fast, scalable & secure application experience.</p>
                                        </a>   
                                    </li>
                                    <li>
                                        <a href="#!">
                                            <h5>Saas Solutions</h5>
                                            <p>Fast, scalable & secure application experience.</p>
                                        </a>   
                                    </li>
                                    <li>
                                        <a href="#!">
                                            <h5>UX/UI Design</h5>
                                            <p>Fast, scalable & secure application experience.</p>
                                        </a>   
                                    </li>
                                    <li>
                                        <a href="#!">
                                            <h5>Mobile App Development</h5>
                                            <p>Fast, scalable & secure application experience.</p>
                                        </a>   
                                    </li>
                                </ul>
                                </div>
                                <div class="dropFoot">
                                <p><img src="<?php echo get_template_directory_uri(); ?>/asserts/img/help-icon.svg" alt="" /> <strong>Not finding</strong> what you are looking for ?</p>
                                <a href="./contact.html" class="btn btn-navContact">Contact us</a>
                                </div>
                            </div>
                        </li>
                        <li><a href="/our-work.html">OUR WORK</a> </li>
                        <li><a href="/blog.html">BLOG</a> </li>
                    </ul>
                    </div>
                    <div class="mobileAftNv">
                    <a href="./contact.html" class="btn btn-navContact">CONTACT</a>
                    <a href="#!" class="btn btn-getQuote">GET QUOTE</a>
                    <div class="weAlways">
                        <a href="#!" class="humLogo">
                                <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/humburder-site-logo.svg" alt="">
                                <span> We’re Always happy to Help </span>
                        </a>
                        <div class="mailUsLink"><a href="mailto:sales@codieslab.com" class="bigLink">sales@codieslab.com</a></p></div>
                    </div>
                    </div>
                </nav>
                <div class="navBtnWrap">
                    <a href="./contact.html" class="btn btn-navContact">CONTACT</a>
                    <a href="#!" class="btn btn-getQuote">GET QUOTE</a>
                    <a href="#!" class="btn secNavToggle">
                    <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/menu-icon.svg" alt="" />
                    </a>
                    <a href="#!" class="btn secNavToggleMobile">
                    <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/menu-icon.svg" alt="" />
                    </a>
                </div>
            </div>
        </div>
        </div>
    </header>
	  <!-- End header --->
	<!--Start Hummber Menu -->
    <div class="humMenuPop">
        <div class="innerWrap">
            <div id="tabs">
            <div class="leftMainMenu">
                <div class="logoPop">
                    <a href="#!" class="logoPopAnc">
                        <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/logo-codielslab.svg" alt="">
                    </a>
                </div>
                <div class="menuPop">
                <ul>
                    <li><a href="#tabs-1">OUR SERVICES</a></li>
                    <li><a href="#tabs-2">QUICK LINKS</a></li>
                    <li><a href="#tabs-3">HIRE DEVELOPERS</a></li>
                    <li><a href="#tabs-3">OTHER LINKS</a></li>
                </ul>
                </div>
                <div class="socialPop">
                    <div class="botTxt">
                        <p>Agency provides a full service range including technical skills, design, business understanding.</p>
                    </div>
                    <div class="socialBtn">
                        <ul>
                        <li><a href="#!"><img src="<?php echo get_template_directory_uri(); ?>/asserts/img/social-insta.svg" alt="" /> </a> </li>
                        <li><a href="#!"><img src="<?php echo get_template_directory_uri(); ?>/asserts/img/social-fb.svg" alt="" /> </a> </li>
                        <li><a href="#!"><img src="<?php echo get_template_directory_uri(); ?>/asserts/img/social-twitter.svg" alt="" /> </a> </li>
                        <li><a href="#!"><img src="<?php echo get_template_directory_uri(); ?>/asserts/img/social-youtube.svg" alt="" /> </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="rightSubMenu">
                <div id="tabs-1">
                    <div class="innerWrap">
                        <div class="header">
                            <h4>Work Domains</h4>
                            <div class="closeIt">
                                <a href="#!"><img src="<?php echo get_template_directory_uri(); ?>/asserts/img/ico-times.svg" alt="" /></a>
                            </div>
                        </div>
                        <div class="contentPt">
                            <div class="menuSd">
                                <ul>
                                    <li><a href="#!">Web Development</a></li>
                                    <li><a href="#!">E-com Solution</a></li>
                                    <li><a href="#!">Salesforce</a></li>
                                    <li><a href="#!">Saas</a></li>
                                </ul>
                            </div>
                            <div class="imgSd">
                                <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/hum-menu-01.png" alt="" />
                            </div>
                        </div>
                        <div class="footerPt">
                            <div class="leftPt">
                                <a href="#!" class="humLogo">
                                    <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/humburder-site-logo.svg" alt="" />
                                </a>
                                <p>We’re Always happy to Help <a href="mailto:sales@codieslab.com" class="bigLink">sales@codieslab.com</a></p>
                            </div>
                            <div class="rightPt">
                                <a href="#!" class="btn btn-getQuote size-01">GET QUOTE</a>
                            </div>
                            
                        </div>
                    </div>    
                </div>
                <div id="tabs-2">
                    <div class="innerWrap">
                        <div class="header">
                            <h4>Work Domains</h4>
                            <div class="closeIt">
                                <a href="#!"><img src="<?php echo get_template_directory_uri(); ?>/asserts/img/ico-times.svg" alt="" /></a>
                            </div>
                        </div>
                        <div class="contentPt">
                            <div class="menuSd">
                                <ul>
                                    <li><a href="#!">Web Development</a></li>
                                    <li><a href="#!">E-com Solution</a></li>
                                    <li><a href="#!">Salesforce</a></li>
                                    <li><a href="#!">Saas</a></li>
                                </ul>
                            </div>
                            <div class="imgSd">
                                <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/hum-menu-01.png" alt="" />
                            </div>
                        </div>
                        <div class="footerPt">
                            <div class="leftPt">
                                <a href="#!" class="humLogo">
                                    <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/humburder-site-logo.svg" alt="" />
                                </a>
                                <p>We’re Always happy to Help <a href="mailto:sales@codieslab.com" class="bigLink">sales@codieslab.com</a></p>
                            </div>
                            <div class="rightPt">
                                <a href="" class="btn btn-getQuote size-01">GET QUOTE</a>
                            </div>
                            
                        </div>
                    </div>    
                </div>
                <div id="tabs-3">
                    <div class="innerWrap">
                        <div class="header">
                            <h4>Work Domains</h4>
                            <div class="closeIt">
                                <a href="#!"><img src="<?php echo get_template_directory_uri(); ?>/asserts/img/ico-times.svg" alt="" /></a>
                            </div>
                        </div>
                        <div class="contentPt">
                            <div class="menuSd">
                                <ul>
                                    <li><a href="#!">Web Development</a></li>
                                    <li><a href="#!">E-com Solution</a></li>
                                    <li><a href="#!">Salesforce</a></li>
                                    <li><a href="#!">Saas</a></li>
                                </ul>
                            </div>
                            <div class="imgSd">
                                <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/hum-menu-01.png" alt="" />
                            </div>
                        </div>
                        <div class="footerPt">
                            <div class="leftPt">
                                <a href="#!" class="humLogo">
                                    <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/humburder-site-logo.svg" alt="" />
                                </a>
                                <p>We’re Always happy to Help <a href="mailto:sales@codieslab.com" class="bigLink">sales@codieslab.com</a></p>
                            </div>
                            <div class="rightPt">
                                <a href="" class="btn btn-getQuote size-01">GET QUOTE</a>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            </div>
        </div>
    </div>
	<!-- End popup Hummber menu --->

