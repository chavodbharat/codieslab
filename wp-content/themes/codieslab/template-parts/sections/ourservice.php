<?php 
global $post;

$service_top_title = (get_field('service_top_title',$post->ID))?get_field('service_top_title',$post->ID):'';
$service_title = (get_field('service_title',$post->ID))?get_field('service_title',$post->ID):'';
$service_list = (get_field('service_list',$post->ID))?get_field('service_list',$post->ID):'';
$service_contact_us = (get_field('service_contact_us',$post->ID))?get_field('service_contact_us',$post->ID):'';

$ourService_class ='';
$template_name ='';
$cols ='';
$design_line ='';
if ( is_page_template( 'home-template.php' ) ) {
   $ourService_class = 'ourService';
   $template_name = 'home';
   $cols = 3;
} else if ( is_page_template( 'partner-template.php' ) ) {
   $ourService_class = 'ourService';
   $template_name = 'partner';
   $cols = 3;
} else if( is_page_template( 'services-template.php' ) ) {
  $ourService_class = 'ourService';
  $template_name = 'services';
  $design_line = 'design-02';
  $cols = 4;
} else if( is_singular( 'services' ) ) {
  $ourService_class = 'ourService';
  $template_name = 'services';
  $design_line = 'design-02';
  $cols = 4;
} else if( is_page_template( 'about-template.php' ) ) {
  $ourService_class = 'ourService';
  $template_name = 'about';
  $design_line = '';
  $cols = 3;
}else {
  $ourService_class = 'ourService';
  $template_name = 'defualt';
  $design_line = '';
  $cols = 4;
}
?>
<?php if ( !empty($service_top_title) || !empty($service_title) || !empty($service_list) || !empty($service_contact_us) ) : ?>
<div class="section <?php echo $ourService_class; ?>" id="services">
   <div class="container">
      <div class="title text-center">
         <h5><?php echo $service_top_title; ?></h5>
         <h2><?php echo $service_title; ?></h2>
      </div>
      <div class="row servicesDesign <?php echo $design_line; ?>">
         <?php 
         if (isset($service_list) && !empty($service_list)) {
            foreach ($service_list as $key_sl => $sl_val) { ?>
               <div class="item part-md-<?php echo $cols; ?>">
                  <div class="innerWrap">
                     <h4><span><?php echo $name = (isset($sl_val['name']) && !empty($sl_val['name']))?$sl_val['name']:''; ?></span> <?php echo $service = (isset($sl_val['service']) && !empty($sl_val['service']))?$sl_val['service']:''; ?></h4>
                        <p><?php echo $descriptions = (isset($sl_val['descriptions']) && !empty($sl_val['descriptions']))?$sl_val['descriptions']:''; ?></p>
                        <a href="<?php echo $know_more = (isset($sl_val['know_more']) && !empty($sl_val['know_more']))?$sl_val['know_more']:'#'; ?>" class="link linkBlack"><?php _e('Know More','codieslab'); ?></a>
                     </div>
                  </div>
            <?php
            }
         }         
         ?>
         <?php if ( ( $template_name === 'home' ) || ( $template_name === 'about' ) || ( $template_name === 'partner' ) ): ?>
         <div class="item">
            <div class="innerWrap">
               <h4><span><?php _e('Not finding','codieslab'); ?> </span> <?php _e('what you are looking for ?','codieslab'); ?></h4>
            </div>
         </div>
         <div class="item">
            <div class="innerWrap">
               <a href="<?php echo $service_contact_us = (isset($service_contact_us) && !empty($service_contact_us))? $service_contact_us : '#'; ?>" class="btn btn-getQuote"><?php _e('CONTACT US','codieslab'); ?></a>
            </div>
         </div>
      <?php endif; ?>
      </div>
       <?php if ( $template_name === 'services' ): ?>
         <div class="viewAllBox">
            <div class="txt"><h4><span class="orangeCol"><?php _e('Not finding','codieslab'); ?> </span> <?php _e('what you are looking for ?','codieslab'); ?></h4></div>
            <div class="btnSet">
               <a href="<?php echo $service_contact_us = (isset($service_contact_us) && !empty($service_contact_us))? $service_contact_us : '#'; ?>" class="btn btn-getQuote"><?php _e('CONTACT US','codieslab'); ?></a>
            </div>
         </div>
      <?php endif; ?>
   </div>
</div>
<?php endif; ?>