<?php
/**
* Template name: Contact Template
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
$contact_us_fields = (get_field('contact_us_fields',$post->ID))?get_field('contact_us_fields',$post->ID):'';

?>
<!-- banner start  -->
<?php 
   get_template_part( 'template-parts/sections/homebanner','contact');
?>
<div class="afterBlog contactForm bgYellow">
   <div class="container">
      <div class="formSelf">  
         <?php echo do_shortcode('[contact-form-7 id="623" title="Contact form 1"]'); ?>
      </div>
      <?php if (!empty($contact_us_fields)): ?>
      <div class="contMailPhone">
         <div class="item">
            <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/asserts/img/contact-icon-phone.svg" alt="" /></div>
            <div class="txt">
               <h3><?php _e('Call us','codieslab'); ?></h3>
               <a href="<?php echo "tel:".$contact_us_fields['contact_number']; ?>">+<?php echo $contact_us_fields['contact_number']; ?></a>
            </div>
         </div>
         <div class="item">
            <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/asserts/img/contact-icon-mail.svg" alt="" /></div>
            <div class="txt">
               <h3><?php _e('Email us','codieslab'); ?></h3>
               <a href="<?php echo "mail:".$contact_us_fields['contact_email']; ?> "><?php echo $contact_us_fields['contact_email']; ?></a>
            </div>
         </div>
      </div>
   <?php endif; ?>
   </div>
</div>
<!-- banner end  -->
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