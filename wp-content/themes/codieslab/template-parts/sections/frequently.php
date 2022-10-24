<?php 
global $post;

$frequently_label = (get_field('frequently_label',$post->ID))?get_field('frequently_label',$post->ID):'';
$frequently_title = (get_field('frequently_title',$post->ID))?get_field('frequently_title',$post->ID):'';
$frequently_questions = (get_field('frequently_questions',$post->ID))?get_field('frequently_questions',$post->ID):'';
?>
<?php if ( !empty($frequently_label) || !empty($frequently_title) || !empty($frequently_questions) ) : ?>
<div class="section ourService-2 rb-art">
   <div class="container">
     <div class="title text-center">
        <h5><?php echo $frequently_label; ?></h5>
        <h2><?php echo $frequently_title; ?></h2>
     </div>
     <div class="collapseMain">
        <div class="collapseItems">
            <?php 
             if (isset($frequently_questions) && !empty($frequently_questions)) {
                 foreach ($frequently_questions as $key_fq => $fq_val) { ?>

                 <h3><?php echo $fq_val_question = (isset($fq_val['question']) && !empty($fq_val['question']))? $fq_val['question'] : ''; ?></h3>
                 
                 <div>
                   <?php echo $fq_val_answer = (isset($fq_val['answer']) && !empty($fq_val['answer']))? $fq_val['answer'] : ''; ?>
                 </div>
              <?php
                 }
             }
             ?>
        </div>
     </div>
     <div class="viewAllBox">
        <div class="txt"><h4><span class="orangeCol"><?php _e('Not finding','codieslab'); ?></span> <?php _e('what you are looking for ?','codieslab'); ?></h4></div>
        <div class="btnSet">
           <a href="#!" class="btn btn-getQuote"><?php _e('CONNECT US','codieslab'); ?></a>
        </div>
     </div>
   </div>
</div>
<?php endif; ?>