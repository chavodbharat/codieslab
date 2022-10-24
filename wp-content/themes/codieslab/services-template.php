<?php
/**
* Template name: Services Template
* The Home page template file
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package codieslab
*/
get_header();
global $post;
$post_id = $post->ID;
?>
<!-- banner start  -->
<!-- <div class="homeBanner withServices">    -->
<?php
get_template_part( 'template-parts/sections/homebanner');
?>
<!-- </div> -->
<!-- banner end  -->
<!-- OUR SERVICES start -->
<?php
get_template_part( 'template-parts/sections/ourservice','list');
?>
<!-- OUR SERVICES end  -->
<!-- WHO ARE WE start -->
<?php
get_template_part( 'template-parts/sections/whoweare','services');
?>
<!-- WHO ARE WE start-->
<!-- CASE STUDIES start -->
<?php
get_template_part( 'template-parts/sections/whychooseus');
?>
<!-- CASE STUDIES end -->
<!-- global leader start -->
<?php
get_template_part( 'template-parts/sections/globalLeader');
?>
<!-- global leader start -->
<!-- OUR SERVICES start  -->
<?php
get_template_part( 'template-parts/sections/frequently');
?>
<!-- OUR SERVICES end  -->
<!-- OUR LATEST FEEDS start  -->
<?php
get_template_part( 'template-parts/sections/latestFeeds');
?>
<!-- OUR LATEST FEEDS end -->
<?php get_footer(); ?>