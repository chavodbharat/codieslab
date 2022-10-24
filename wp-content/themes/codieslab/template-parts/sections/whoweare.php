<?php 
global $post;

$who_top_title = (get_field('who_top_title',$post->ID))?get_field('who_top_title',$post->ID):'';
$who_title = (get_field('who_title',$post->ID))?get_field('who_title',$post->ID):'';
$who_description = (get_field('who_description',$post->ID))?get_field('who_description',$post->ID):'';
$who_about_link = (get_field('who_about_link',$post->ID))?get_field('who_about_link',$post->ID):'';
$who_side_patro_1 = (get_field('who_side_patro_1',$post->ID))?get_field('who_side_patro_1',$post->ID):'';
$who_side_patro_2 = (get_field('who_side_patro_2',$post->ID))?get_field('who_side_patro_2',$post->ID):'';
$who_side_patro_3 = (get_field('who_side_patro_3',$post->ID))?get_field('who_side_patro_3',$post->ID):'';
$who_side_patro_4 = (get_field('who_side_patro_4',$post->ID))?get_field('who_side_patro_4',$post->ID):'';
$testimonial = (get_field('testimonial','option'))?get_field('testimonial','option'):'';

$whoWeAre_class ='';
$template_name ='';
if ( is_page_template( 'home-template.php' ) ) {
   $whoWeAre_class = 'whoWeAre top-bottom-10';
   $template_name = 'home';
} else if( is_page_template( 'services-template.php' ) ) {
  $whoWeAre_class = 'withServices';
  $template_name = 'services';
}
?>
<?php if ( !empty($who_top_title) || !empty($who_title) || !empty($who_description) || !empty($who_about_link) || !empty($who_side_patro_1) || !empty($who_side_patro_2) || !empty($who_side_patro_3) || !empty($who_side_patro_4) ) : ?>
<div class="section  <?php echo $whoWeAre_class; ?>">
   <div class="container">
      <div class="row gap40">
         <div class="part-md-6">
            <div class="title">
               <h5><?php echo $who_top_title; ?></h5>
               <h2><?php echo $who_title; ?></h2>
            </div>
            <p><?php echo $who_description; ?></p>
            <div class="btnSet">
                <?php if (!empty($who_about_link)): ?>
                    <a href="<?php echo $who_about_link_url = (isset($who_about_link['url']) && !empty($who_about_link['url']))? $who_about_link['url'] : '#'; ?>" class="btn bthOrange"><?php echo $who_about_link['title']; ?></a>
                <?php endif; ?>
               <div class="qotSlideWrap">
                  <div class=" qotSlide owl-carousel">
                     <?php 
                     if (isset($testimonial) && !empty($testimonial)) {
                        foreach ($testimonial as $key_t => $t_val) { ?>
                           <div class="item btn bthQuote">
                              <img src="<?php echo $t_val_user_image = (isset($t_val['user_image']) && !empty($t_val['user_image']))? $t_val['user_image']['url'] : '#'; ?>" alt="<?php echo $t_val['user_image']['alt']; ?>" />
                              <span>“<?php echo $t_val_message = (isset($t_val['message']) && !empty($t_val['message']))? $t_val['message'] : ''; ?>“</span>
                           </div>
                        <?php
                        }
                     }
                     ?>                   
                  </div>
               </div>
            </div>
         </div>
         <div class="part-md-6">
            <div class="sidePatro">
               <span><img src="<?php echo get_template_directory_uri(); ?>/asserts/img/waw-floral.svg" alt="" /> </span>
               <div class="item part-md-6 trangle-bottom-right patro-border-right patro-border-bottom">
                  <div class="img">
                     <img src="<?php echo $who_side_patro_1_icon = (isset($who_side_patro_1['icon']['url']) && !empty($who_side_patro_1['icon']['url']))? $who_side_patro_1['icon']['url'] : '#'; ?>" alt="<?php echo $who_side_patro_1['icon']['alt'] ?>" />
                  </div>
                  <h4><?php echo $who_side_patro_1_name = (isset($who_side_patro_1['name']) && !empty($who_side_patro_1['name']))? $who_side_patro_1['name'] : ''; ?></h4>
               </div>
               <div class="item part-md-6 patro-border-bottom bg-light-yellow">
                  <div class="img">
                     <img src="<?php echo $who_side_patro_2_icon = (isset($who_side_patro_2['icon']['url']) && !empty($who_side_patro_2['icon']['url']))? $who_side_patro_2['icon']['url'] : '#'; ?>" alt="<?php echo $who_side_patro_2['icon']['alt']; ?>" />
                  </div>
                  <h4><?php echo $who_side_patro_2_name = (isset($who_side_patro_2['name']) && !empty($who_side_patro_2['name']))? $who_side_patro_2['name'] : ''; ?></h4>
               </div>
               <div class="item part-md-6 patro-border-right bg-light-yellow">
                  <div class="img">
                     <img src="<?php echo $who_side_patro_3_icon = (isset($who_side_patro_3['icon']['url']) && !empty($who_side_patro_3['icon']['url']))? $who_side_patro_3['icon']['url'] : ''; ?>" alt="<?php echo $who_side_patro_3['icon']['alt']; ?>" />
                  </div>
                  <h4><?php echo $who_side_patro_3_name = (isset($who_side_patro_3['name']) && !empty($who_side_patro_3['name']))? $who_side_patro_3['name'] : ''; ?></h4>
               </div>
               <div class="item part-md-6 trangle-bottom-left">
                  <div class="img">
                     <img src="<?php echo $who_side_patro_4_icon = (isset($who_side_patro_4['icon']['url']) && !empty($who_side_patro_4['icon']['url']))? $who_side_patro_4['icon']['url'] : ''; ?>" alt="<?php echo $who_side_patro_4['icon']['alt']; ?>" />
                  </div>
                  <h4><?php echo $who_side_patro_4_name = (isset($who_side_patro_4['name']) && !empty($who_side_patro_4['name']))? $who_side_patro_4['name'] : ''; ?></h4>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php endif; ?>