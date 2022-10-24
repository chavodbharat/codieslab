<?php 
global $post;

$why_choose_us_label = (get_field('why_choose_us_label','option'))?get_field('why_choose_us_label','option'):'';
$why_choose_us_title = (get_field('why_choose_us_title','option'))?get_field('why_choose_us_title','option'):'';
$why_choose_us_description = (get_field('why_choose_us_description','option'))?get_field('why_choose_us_description','option'):'';
$why_choose_us_list = (get_field('why_choose_us_list','option'))?get_field('why_choose_us_list','option'):'';
?>
<?php if ( !empty($why_choose_us_label) || !empty($why_choose_us_title) || !empty($why_choose_us_description) || !empty($why_choose_us_list) ) : ?>
<div class="section caseStudies withWhyChoose">
   <div class="container">
      <div class="title darkBg text-center">
         <h5><?php echo $why_choose_us_label; ?></h5>
         <h2><?php echo $why_choose_us_title; ?></h2>
         <p><?php echo $why_choose_us_description; ?></p>
      </div>
      <div class="row whyChooseBox">
         <?php 
         if (isset($why_choose_us_list) && !empty($why_choose_us_list)) {
            foreach ($why_choose_us_list as $key_wy => $wy_val) { ?>
            <div class="part-md-4 item">
               <div class="innerWrap" >
                  <div class="img">
                     <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/why-choose-check.svg" alt="" />
                  </div>
                  <h5><?php echo $wy_val['label'] = (isset($wy_val['label']) && !empty($wy_val['label']))? $wy_val['label'] : ''; ?></h5>

                  <?php echo $wy_val['description'] = (isset($wy_val['description']) && !empty($wy_val['description']))? $wy_val['description'] : ''; ?>
               </div>
            </div>
           <?php
            }
         }
         ?>
      </div>
      <div class="viewAllBox">
         <div class="txt"><?php _e('We have worked with many prominent Brands','codieslab'); ?></div>
         <div class="btnSet">
            <a href="#!" class="btn btn-getQuote"><?php _e('VIEW ALL','codieslab'); ?></a>
            <a href="#!" class="btn btn-navContact"><?php _e('CONNECT WITH US','codieslab'); ?></a>
         </div>
      </div>
   </div>
</div>
<?php endif; ?>