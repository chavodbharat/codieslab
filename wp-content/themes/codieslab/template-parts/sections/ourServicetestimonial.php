<?php 
global $post;

$service_testimonial_top_title = (get_field('service_testimonial_top_title',$post->ID))?get_field('service_testimonial_top_title',$post->ID):'';
$service_testimonial_title = (get_field('service_testimonial_title',$post->ID))?get_field('service_testimonial_title',$post->ID):'';
$clients_list = (get_field('clients_list',$post->ID))?get_field('clients_list',$post->ID):'';
$view_all = (get_field('view_all',$post->ID))?get_field('view_all',$post->ID):'';

$testimonial = (get_field('testimonial','option'))?get_field('testimonial','option'):'';

$ourService_class ='';
$template_name ='';
if ( is_page_template( 'home-template.php' ) ) {
   $ourService_class = 'ourService-2 rb-art';
   $template_name = 'home';
} else if( is_page_template( 'services-template.php' ) ) {
  $ourService_class = 'ourService-2 rb-art';
  $template_name = 'services';
}

?>
<?php if ( !empty($service_testimonial_top_title) || !empty($service_testimonial_title) || !empty($clients_list) || !empty($view_all) || !empty($testimonial) ) : ?>
<div class="section <?php echo $ourService_class; ?>">
   <div class="container">
   <div class="title text-center">
      <h5><?php echo $service_testimonial_top_title; ?></h5>
      <h2><?php echo $service_testimonial_title; ?></h2>
   </div>
   <div class="ourServiceDsn">
      <div class="row">
         <div class="part-md-6 clientLogoBox">
            <div class="innerWrap">
               <?php 
               if (isset($clients_list) && !empty($clients_list)) {
                  foreach ($clients_list as $key_cl => $cl_val) { ?>
                     <div class="item"><img src="<?php echo $cl_val_company_icon = (isset($cl_val['company_icon']['url']) && !empty($cl_val['company_icon']['url']))?$cl_val['company_icon']['url']:'#'; ?>" alt="company icon"></div>                     
                  <?php
                  }
               }
               ?>
            </div>
            <?php  if (!empty($view_all['more_text']) || !empty($view_all['more_link'])):?>
            <div class="btnBox">
               <p><?php echo $view_all['more_text']; ?></p>
               <div class="btnDv">
                  <a href="<?php echo $view_all_more_link = (isset($view_all['more_link']) && !empty($view_all['more_link']))? $view_all['more_link'] : '#'; ?>" class="btn btn-getQuote"><?php _e('VIEW ALL','codieslab'); ?></a>
               </div>
            </div>
         <?php endif; ?>
         </div>
         <div class="part-md-6">
            <div class="testimonialMain testimonialMain-owl owl-carousel owl-theme">
               <?php 
               if (isset($testimonial) && !empty($testimonial)) {
                  foreach ($testimonial as $key_t => $t_val) { ?>

                     <div class="item">
                        <div class="innerWrap">
                           <div class="head">
                              <div class="img">
                                 <img src="<?php echo $t_val_company_logo = (isset($t_val['company_logo']['url']) && !empty($t_val['company_logo']['url']))? $t_val['company_logo']['url'] : '#'; ?>" alt="client" />
                              </div>
                              <div class="rating">
                                 <?php                                  
                                 $t_val['rating'] = (isset($t_val['rating']) && !empty($t_val['rating']))? $t_val['rating'] : '0';
                                 for ($i=0; $i < 5; $i++) { 
                                    if ($i < $t_val['rating']) {
                                       echo '<i class="fa-solid fa-star"></i>';
                                    }else{
                                       echo '<i class="fa-regular fa-star"></i>';
                                    }

                                 } ?>
                              </div>
                           </div>
                           <p><?php echo $t_val['message']; ?></p>
                           <div class="foot">
                              <div class="author">
                                 <div class="img">
                                    <img src="<?php echo $t_val_user_image = (isset($t_val['user_image']['url']) && !empty($t_val['user_image']['url']))? $t_val['user_image']['url'] : '#'; ?>" alt="author" />
                                 </div>
                                 <div class="txt">
                                    <h4><?php echo $t_val['user_name']; ?></h4>
                                    <p><?php echo $t_val['company_name']; ?></p>
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
   </div>
   </div>
</div>
<?php endif; ?>