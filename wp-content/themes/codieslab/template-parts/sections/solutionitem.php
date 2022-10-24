<?php 
global $post;

$solutions = (get_field('solutions',$post->ID))?get_field('solutions',$post->ID):'';

?>
<div class="section caseStudies" id="solutions">
   <div class="container">
      <div class="title darkBg">
         <h5><?php echo ($solutions['label'])?$solutions['label']:''; ?></h5>
         <h2><?php echo ($solutions['title'])?$solutions['title']:''; ?></h2>
      </div>
      <div class="row solutionItem">
         <?php if (isset($solutions['list']) && !empty($solutions['list'])) {
            foreach ($solutions['list'] as $key => $list) { ?>
               <div class="part-md-4 item">
                  <div class="innerWrap">
                     <h3><?php echo $list['name']; ?></h3>
                  </div>
               </div>
         <?php
            }
         } ?>
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