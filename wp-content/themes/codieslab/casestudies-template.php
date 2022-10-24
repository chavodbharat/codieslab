<?php
/**
* Template name: CaseStudies Template
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

$case_args = array(
   'post_type'  => 'casestudy',
   'posts_per_page' => -1,
   'orderby'        => 'Desc',
   'post_status'    => 'publish'
   // 'tax_query' => array(
   //    array(
   //       'taxonomy' => 'casestudy_type',
   //       'field'    => 'slug',
   //       'terms'    => 'jazz'
   //    )
   // )
);
$casestudy = get_posts( $case_args );

?>
<!-- banner start  -->
<?php 
   get_template_part( 'template-parts/sections/homebanner','contact');
?>
<!-- banner end  -->

<!-- portfolio start  -->
<div class="portfolio">
   <div class="container">
      <div class="row caseDesign">
      <?php 
      if ( isset($casestudy) && !empty($casestudy) ) {
         foreach ( $casestudy as $case ) { 
            
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $case->ID ), 'single-post-thumbnail' );
            $case_study_more_link = get_field('case_study_more_link',$case->ID);
            $case_study_company_logo = get_field('case_study_company_logo',$case->ID);
            $category_detail=get_the_terms( $case->ID, 'casestudy_type' );   
            ?>
         <div class="part-md-4 item">
            <div class="innerWrap" style="background-image: url('<?php echo $image[0]; ?>');">
               <div class="textCont">
                  <?php 
                  if (isset($category_detail) && !empty($category_detail)) {
                     foreach($category_detail as $cd){
                        echo '<span class="tag">'.$cd->name.'</span> ';
                     }
                  }
                  ?>
                  <h3><?php echo $case->post_title; ?></h3>
                  <div class="hider">
                     <p><?php echo $case->post_content; ?></p>
                     <div class="itemFoot">
                        <a href="<?php echo get_permalink($case->ID); ?>" class="circleLink">&nbsp;</a>
                        <div class="img"><img src="<?php echo $case_study_company_logo; ?>" alt=""/></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>      
      <?php
         }      
      }
      ?>
      </div>
   </div>
</div>
<!-- portfolio end  -->
<?php 
   get_template_part( 'template-parts/sections/webdevelopment');
?>
<?php get_footer(); ?>