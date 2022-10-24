<?php
/**
* Template name: About Template
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
?>
<!-- banner start  -->
<?php 
   get_template_part( 'template-parts/sections/homebanner','about');
?>
<!-- banner end  -->
<!-- An Integrated start  -->
<?php 
   get_template_part( 'template-parts/sections/whoweare','about');
?>       
<!-- An Integrated end  -->

<!-- OUR SERVICES start -->
<?php 
   get_template_part( 'template-parts/sections/ourservice');
?>
<!-- OUR SERVICES end  -->
<!-- CASE STUDIES start -->
<?php 
   get_template_part( 'template-parts/sections/solutionitem');
?>
<!-- CASE STUDIES end -->
<!-- global leader start -->
<?php 
   get_template_part( 'template-parts/sections/globalLeader');
?>
<!-- global leader start -->
<!-- OUR SERVICES start  -->
<div class="section ourService-2 rb-art" id="case-studies">
   <div class="container">
      <div class="title text-center">
         <h5>CASE STUDIES</h5>
         <h2>Trusted by top companies around the globe</h2>
      </div>
      <div class="dataVisual">
         <div class="item">
            <div class="textPt">
               <h3>DATA VISUALIZATION AND <br>
                  ANALYTICS USING POWER BI</h3>
               <p>In today’s tech era it is imperative for a business to have an online presence. Web applications have evolved as well as planned strategies for growth by playing a pivotal role in market penetration.</p>   
            </div>
            <div class="imgPt">
               <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/data-visual-01.png" alt="" />
            </div>
         </div>
         <div class="item">
            <div class="textPt">
               <h3>DATA VISUALIZATION AND <br>
                  ANALYTICS USING POWER BI</h3>
               <p>In today’s tech era it is imperative for a business to have an online presence. Web applications have evolved as well as planned strategies for growth by playing a pivotal role in market penetration.</p>   
            </div>
            <div class="imgPt">
               <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/data-visual-01.png" alt="" />
            </div>
         </div>
         <div class="viewAllBtnWrap text-center">
            <a href="#!" class="btn btn-getQuote">VIEW ALL</a>
         </div>
         
      </div>
   </div>
</div>
<!-- OUR SERVICES end  -->
<!-- OUR LATEST FEEDS start  -->
<?php 
   get_template_part( 'template-parts/sections/latestFeeds');
?>
<!-- OUR LATEST FEEDS end -->
<?php get_footer(); ?>