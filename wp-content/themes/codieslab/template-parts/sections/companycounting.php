<?php
global $post;
$company_counting = (get_field('company_counting',$post->ID))?get_field('company_counting',$post->ID):'';
?>
<?php if ( !empty($company_counting)) : ?>
<div class="section successContinuing themeBg no-pad-bottom">
   <div class="container">
      <div class="row">
         <div class="part-md-6 txtSide">
            <div class="title text-center">
               <h2><?php echo $company_counting['heading']; ?></h2>
               <p><?php echo $company_counting['description']; ?></p>
            </div>
            <div class="part-md-12 developmentBox">
               <div class="boxtitle">
                  <h4><?php echo $company_counting['development_label']; ?></h4>
               </div>
               <div class="row">
                  <?php if (isset($company_counting['development_item']) && !empty($company_counting['development_item'])) :
                  foreach ($company_counting['development_item'] as $key => $value) : ?>
                  <div class="part-md-4 item">
                     
                     <div class="ico">
                        <?php
                        echo (isset($value['image']) && !empty($value['image']))? '<img src="'.$value['image']['url'].'">':'';
                        ?>
                     </div>
                     <h4><?php echo $value['title']; ?></h4>
                     
                  </div>
                  <?php endforeach;
                  endif; ?>
               </div>
            </div>
         </div>
         <div class="part-md-6 imageSide text-center" >
            <div class="img">
               <?php
               echo (isset($company_counting['right_image']) && !empty($company_counting['right_image']))? '<img src="'.$company_counting['right_image']['url'].'">':'';
               ?>
            </div>
         </div>
      </div>
   </div>
</div>
<?php endif; ?>