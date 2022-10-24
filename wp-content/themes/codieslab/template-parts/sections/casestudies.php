<?php
$case_args = array(
   'post_type'  => 'casestudy',
   'posts_per_page' => 3,
   'orderby'        => 'rand',
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
<?php if ( isset($casestudy) && !empty($casestudy) ) : ?>
<div class="section caseStudies">
   <div class="container">
      <div class="title darkBg">
         <h5><?php _e('CASE STUDIES', 'codieslab'); ?></h5>
         <h2><?php _e('Reasons why we are the best', 'codieslab'); ?></h2>
      </div>
      <div class="row caseDesign">
         <?php 
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
                           <?php if ($case_study_company_logo['url']){
                              echo '<div class="img">
                                       <img src="'.$case_study_company_logo['url'].'" alt="'.$case_study_company_logo['alt'].'"/>
                                    </div>';
                           }?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         
         <?php } ?>
      </div>
      <div class="viewAllBox">
         <div class="txt"><?php _e('We have worked with many prominent Brands', 'codieslab'); ?></div>
         <div class="btnSet">
            <a href="<?php echo get_permalink( get_page_by_path( 'case-study' ) ); ?>" class="btn btn-getQuote"><?php _e('VIEW ALL', 'codieslab'); ?></a>
            <a href="<?php echo get_permalink( get_page_by_path( 'contact-us' ) ); ?>" class="btn btn-navContact"><?php _e('CONNECT WITH US', 'codieslab'); ?></a>
         </div>
      </div>
   </div>
</div>
<?php endif; ?>