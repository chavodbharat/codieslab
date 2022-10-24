<?php 
global $post;
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
$category_detail=get_the_terms( $post->ID, 'casestudy_type' );   

$technology_image_hover_icon = ( get_field('technology_image_hover_icon',$post->ID ) ) ? get_field('technology_image_hover_icon',$post->ID ): '';
$project_brief = ( get_field('project_brief',$post->ID ) ) ? get_field('project_brief',$post->ID ): '';
$services_provided = ( get_field('services_provided',$post->ID ) ) ? get_field('services_provided',$post->ID ): '';
$challenges = ( get_field('challenges',$post->ID ) ) ? get_field('challenges',$post->ID ): '';
$solutions = ( get_field('solutions',$post->ID ) ) ? get_field('solutions',$post->ID ): '';
$key_benefits = ( get_field('key_benefits',$post->ID ) ) ? get_field('key_benefits',$post->ID ): '';
$result = ( get_field('result',$post->ID ) ) ? get_field('result',$post->ID ): '';
$client_testimonial = ( get_field('client_testimonial',$post->ID ) ) ? get_field('client_testimonial',$post->ID ): '';

?>
<div class="pageContent noBanner">
   <div class="container">
      <div class="workDetailBanner">
         <div class="row align-center">
            <div class="part-md-7 contPart">
               <?php 
               if (isset($category_detail) && !empty($category_detail)) {
                  foreach($category_detail as $cd){
                     echo '<span class="workTag">'.$cd->name.'</span> ';
                  }
               }
               ?>               
               <h1><?php echo $post->post_title; ?></h1>
               <p><?php echo $post->post_excerpt; ?></p>
            </div>
            <div class="part-md-5 imgPart">
               <div class="innerWrap">
                  <img src="<?php echo $image[0]; ?>" alt="" />
               </div>
               <?php 
               if (!empty($technology_image_hover_icon )) {
                  echo '<div class="technolorgyLogo">
                        <img src="'.$technology_image_hover_icon['url'].'" alt="'.$technology_image_hover_icon['alt'].'"  title="'.$technology_image_hover_icon['title'].'" />
                     </div>';
               }
               ?>               
            </div>
         </div>
      </div>
      <!-- project brief start --> 
      <?php if (!empty($project_brief) || !empty($services_provided)) : ?>
      <div class="projectBrief">
         <div class="container">
            <div class="row">
               <div class="part-md-7 proBrifPart">
                  <h2><?php echo $project_brief['label']; ?></h2>
                  <?php echo $project_brief['content']; ?>
               </div>
               <div class="part-md-5 techPart">
                  <div class="serviceSide">
                     <h3><?php echo $services_provided['label']; ?></h3>
                     <ul>
                        <?php 
                        if (isset($services_provided['services_points']) && !empty($services_provided['services_points'])) {
                           foreach ($services_provided['services_points'] as $keyp => $point) {
                              echo '<li><a href="javascript:void(0);">'.$point['point'].'</a></li>';
                           }
                        }
                        ?>
                     </ul>
                  </div>
                  <div class="techUsed">
                     <?php $tech_html ='';
                        if (isset($services_provided['technology_used']) && !empty($services_provided['technology_used'])) {
                           foreach ($services_provided['technology_used'] as $keyt => $tech) {
                              $tech_html .= '<div class="item">
                                    <h5>'.$tech['technology_name'].'</h5>';
                                    foreach ($tech['technology_icon'] as $tech_img) {
                                       $tech_html .= '<div class="img">
                                          <img src="'.$tech_img['icon']['url'].'" alt="'.$tech_img['icon']['alt'].'" title="'.$tech_img['icon']['title'].'"/>
                                       </div>';
                                    }
                                  $tech_html .= '</div>';
                           }
                        }
                        echo $tech_html;
                     ?>                     
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php endif; ?>
      <!-- project brief end  -->
   </div>
   <!-- PROJECT OVERVIEW BANNER start  -->
   <?php if (!empty($project_brief['images'])) : ?>
   <div class="proOverviewBanner">
      <div class="container">
         <div class="BnerImg">
            <img src="<?php echo $project_brief['images']['url']; ?>" alt="<?php echo $project_brief['images']['alt']; ?>" />
         </div>
      </div>
   </div>
   <?php endif; ?>
   <!-- PROJECT OVERVIEW BANNER end  -->
   <!-- Challenges start  -->
   <?php if (!empty($challenges)) : ?>
   <div class="challengeSec">
      <div class="container-sm">
         <div class="row">
            <div class="part-md-4">
               <h3 class="title-h3"><?php echo $challenges['label']; ?></h3>
            </div>
            <div class="part-md-8">
              <?php echo $challenges['content']; ?>
            </div>
         </div>
      </div>
   </div>
   <?php endif; ?>
   <!-- Challenges end  -->
   <?php if (!empty($challenges['image']['url'])) : ?>
   <div class="indipendentImg">
      <div class="container">
         <img src="<?php echo $challenges['image']['url']; ?>" alt="<?php echo $challenges['image']['alt']; ?>" />
      </div>
   </div>
   <?php endif; ?>
   <!-- The Solution start  -->
   <?php if (!empty($solutions)) : ?>
   <div class="challengeSec">
      <div class="container-sm">
         <div class="row">
            <div class="part-md-4">
               <h3 class="title-h3"><?php echo $solutions['label']; ?></h3>
            </div>
            <div class="part-md-8">
               <?php echo $solutions['content']; ?>
            </div>
         </div>
      </div>
   </div>
   <?php endif; ?>
   <!-- The Solution end  -->
   <?php if (!empty($solutions['solutions_images'])) : ?>
   <div class="indipendentImg">
      <div class="container">
         <div class="row">
            <?php 
               foreach ($solutions['solutions_images'] as $keys => $solution) {
                  $cols = ( $solution['image_cols'] == 1 ) ? 12 : 6;
                  echo '<div class="part-md-'.$cols.'">
                           <img src="'.$solution['images']['url'].'" alt="'.$solution['images']['alt'].'" title="'.$solution['images']['title'].'">
                        </div>';
               }
            ?>
         </div>
      </div>
   </div>
   <?php endif; ?>
   <?php if (!empty($key_benefits) || !empty($result) || !empty($client_testimonial)) : ?>
   <div class="section aboutClient no-pad-bottom">
      <div class="container">
         <div class="row">
            <div class="part-md-6">
               <h3 class="title-h3"><?php echo $key_benefits['label']; ?></h3>
               <?php echo $key_benefits['content']; ?>
               <br>
               <h3 class="title-h3"><?php echo $result['label']; ?></h3>
               <?php echo $result['content']; ?>
            </div>
            <div class="part-md-6">
               <div class="clientBox testimonialMain darkBg ">
                  <div class="item">
                     <div class="innerWrap">
                        <div class="head">
                           <div class="img">
                              <img src="<?php echo $client_testimonial['company_logo']['url']; ?>" alt="<?php echo $client_testimonial['company_logo']['alt']; ?>" title="<?php echo $client_testimonial['company_logo']['title']; ?>">
                           </div>
                           <div class="rating">
                              <?php 
                                $client_testimonial['rating'] = (isset($client_testimonial['rating']) && !empty($client_testimonial['rating']))? $client_testimonial['rating'] : '0';
                                 
                                 for ($i=0; $i < 5; $i++) { 
                                    if ($i < $client_testimonial['rating']) {
                                       echo '<i class="fa-solid fa-star"></i>';
                                    }else{
                                       echo '<i class="fa-regular fa-star"></i>';
                                    }

                                 }
                              ?>
                           </div>
                        </div>
                        <p><?php echo $client_testimonial['messages']; ?></p>
                        <div class="foot">
                           <div class="author">
                              <div class="txt">
                                 <h4><?php echo $client_testimonial['client_name']; ?></h4>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <?php endif; ?>
</div>