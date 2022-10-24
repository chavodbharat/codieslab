<?php 
global $post;

$header_color = (get_field('header_color',$post->ID))?get_field('header_color',$post->ID):'';
$headline_label = (get_field('headline_label',$post->ID))?get_field('headline_label',$post->ID):'';
$headline_title = (get_field('headline_title',$post->ID))?get_field('headline_title',$post->ID):'';
$headline_textarea = (get_field('headline_textarea',$post->ID))?get_field('headline_textarea',$post->ID):'';
$button_link_1 = (get_field('button_link_1',$post->ID))?get_field('button_link_1',$post->ID):'';
$button_text_1 = (get_field('button_text_1',$post->ID))?get_field('button_text_1',$post->ID):'';
$hero_image = (get_field('hero_image',$post->ID))?get_field('hero_image',$post->ID):'';
$business_text = (get_field('business_text',$post->ID))?get_field('business_text',$post->ID):'';
$partners_logo = (get_field('partners_logo',$post->ID))?get_field('partners_logo',$post->ID):'';
$social_media = (get_field('social_media','option'))?get_field('social_media','option'):'';

$homebanner_class ='';
$template_name = $btn_class = '';
if ( is_page_template( 'home-template.php' ) ) {
   $homebanner_class = 'withSideScroll';
   $template_name = 'home';
} else if( is_page_template( 'services-template.php' ) ) {
  $homebanner_class = 'withServices';
  $template_name = 'services';
} else if( is_page_template( 'partner-template.php' ) ) {
  $homebanner_class = 'withServiceSub';
  $template_name = 'partner';
  $btn_class = 'btnYellow';
}
$style = 'style="background-color:'.$header_color.';"';

?>
<?php if ( !empty($headline_label) || !empty($headline_title) || !empty($headline_textarea) || !empty($buttion_link_1) || !empty($button_text_1) || !empty($hero_image) || !empty($button_text_1) || !empty($business_text) || !empty($partners_logo) ) : ?>
<div class="homeBanner <?php echo $homebanner_class; ?>" <?php echo $style; ?>>   
   <div class="container">
      <div class="innerWrap">
         <div class="mnCntBanner">
            <div class="textSide">
               <div class="txtWrap">
                  <h5><?php echo $headline_label; ?></h5>
                  <h1><?php echo $headline_title; ?></h1>
                  <p><?php echo $headline_textarea; ?></p>
                  <div class="btnSet">
                     <a href="<?php echo $button_link_1url = (!empty($button_link_1['url']))? $button_link_1['url'] : '#'; ?>" class="btn btn-getQuote <?php echo $btn_class; ?>" target="<?php echo $button_link_target = (!empty($button_link_1['target']))? $button_link_1['target'] : ''; ?>"> 
                        <?php echo $button_link_1 = (!empty($button_link_1['title']))? $button_link_1['title'] : ''; ?>
                     </a>
                     <?php if ( get_field('watch_video', $post->ID) ) { ?>
                     <a href="#!" class="btn btn-watch" data-popup-open="popup-1">
                        <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/icon-play-home-banner.svg" alt="" /><?php _e('WATCH VIDEO','codieslab'); ?>
                     </a>                     
                     <?php } ?>
                  </div>
               </div>
            </div>
            <?php 
            if (!empty($hero_image['url'])) {
               echo '<div class="imageSide">
                     <img src="'.$hero_image['url'].'" alt="'.$hero_image['alt'].'" title="'.$hero_image['title'].'"/>
                  </div>';
            }
            ?>
         </div>
         <?php if ( $template_name === 'home' || $template_name === 'services' ) : ?>
         <div class="businessTrust">
            <div class="btWrap">
               <div class="txt">
                  <p><?php echo $business_text; ?></p>
               </div>
               <div class="bannerClientSlider owl-carousel">
                   <?php 
                     if (isset($partners_logo) && !empty($partners_logo)) {
                        foreach ($partners_logo as $key_pl => $pl_val) { ?>
                           <div class="item">
                              <img src="<?php echo $pl_val_url = (!empty($pl_val['partners_logo_image']['url']))? $pl_val['partners_logo_image']['url'] : '#'; ?>" alt="partners logo image" title="partners logo image"/>
                           </div>
                        <?php
                        }
                     }
                     ?>
               </div>
            </div>
         </div>
      <?php endif; ?>
         <?php if ( $template_name === 'partner' ) : ?>
         <div class="businessTrust withTrustedBy">
            <div class="innerWrap">
               <h4><?php echo $business_text; ?></h4>
               <div class="btWrap">
               <?php 
                  if (isset($partners_logo) && !empty($partners_logo)) {
                     foreach ($partners_logo as $key_pl => $pl_val) { ?>
                        <div class="item">
                           <img src="<?php echo $pl_val_url = (!empty($pl_val['partners_logo_image']['url']))? $pl_val['partners_logo_image']['url'] : '#'; ?>" alt="partners logo image" title="partners logo image"/>
                        </div>
                     <?php
                     }
                  }
                  ?>
               </div>
            </div>
         </div>
         <?php endif; ?>
         <?php if ( $template_name === 'home' ) { ?>
         <div class="sideSocial">
            <div class="scrollWrap">
               <div class="socialIco">
                <?php 
                  if (isset($social_media) && !empty($social_media)) {
                     foreach ($social_media as $key_sm => $menu_sm ) {
                        echo '<a href="'.$menu_sm['link'].'" target="_blank"><img src="'.$menu_sm['icon'].'"/></a>';
                     }
                  }
               ?>
               </div>
               <div class="scroller">
                  <span><?php _e('Scroll','codieslab'); ?></span>
               </div>
            </div>
         </div>
         <?php } ?>
      </div>
   </div>
</div>
<?php endif; ?>
<?php 

if ( is_page() && $post->post_parent > 0 ) { 
   // echo "This is a child page";
}

 ?>
<!-- Popup start  -->
<div class="popup" data-popup="popup-1">
   <div class="popup-inner">
      <?php echo $watch_video = get_field('watch_video', $post->ID); ?>      
      <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
   </div>
</div>
<!-- Popup end  -->  