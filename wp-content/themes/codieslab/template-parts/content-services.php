<?php
/**
 * Template part for displaying results in services pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package codieslab
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- banner start  -->
   <?php 
      get_template_part( 'template-parts/sections/homebanner');
   ?>
   <!-- banner end  -->

<!-- OUR SERVICES start -->
<?php 
   get_template_part( 'template-parts/sections/ourservice');
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
</article><!-- #post-<?php the_ID(); ?> -->
