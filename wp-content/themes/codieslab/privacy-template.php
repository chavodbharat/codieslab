<?php
/**
* Template name: Privacy Template
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

<div class="homeBanner withBlog">
   <?php 
      get_template_part( 'template-parts/sections/homebanner','contact');
   ?>
</div>

<!-- content start  -->
<div class="onlyContentPage">
   <div class="container">
      <div class="innerWrap">
       <?php echo get_post_field( 'post_content', $post->ID ); ?>
      </div>
   </div>
</div>
<!-- content end  -->

<!-- OUR LATEST FEEDS end -->
<?php get_footer(); ?>