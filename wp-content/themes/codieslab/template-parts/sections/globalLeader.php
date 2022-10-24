<?php 
global $post;
$post_id = $post->ID;
$global_leader_label = get_field('global_leader_label', 'option');
$global_leader_title = get_field('global_leader_title', 'option');
$global_leader_records = get_field('global_leader_records', 'option');
 ?>
<div class="globalLeader">
   <div class="container">
      <div class="innerWrap">
         <div class="txt">
            <h2><?php echo $global_leader_label = (isset($global_leader_label) && !empty($global_leader_label))? $global_leader_label : ''; ?><span><?php echo $global_leader_title = (isset($global_leader_title) && !empty($global_leader_title))? $global_leader_title : ''; ?></span></h2>
         </div>
         <div class="counterBox">
            <?php 
            if (isset($global_leader_records) && !empty($global_leader_records)) {
               foreach ($global_leader_records as $key_gl => $gl_val) { ?>
                   <div class="item">
                     <span class="counterNum"><?php echo $gl_val['total_record'] = (isset($gl_val['total_record']) && !empty($gl_val['total_record']))?$gl_val['total_record']:'#'; ?></span>
                     <p><?php echo $gl_val['text_record'] = (isset($gl_val['text_record']) && !empty($gl_val['text_record']))?$gl_val['text_record']:''; ?></p>
                  </div>                     
               <?php
               }
            } ?>
         </div>
      </div>
   </div>
</div>