<?php 
global $post;

$header_color = (get_field('header_color',$post->ID))?get_field('header_color',$post->ID):'';
$headline_label = (get_field('headline_label',$post->ID))?get_field('headline_label',$post->ID):'';
$headline_title = (get_field('headline_title',$post->ID))?get_field('headline_title',$post->ID):'';
$hero_image = (get_field('hero_image',$post->ID))?get_field('hero_image',$post->ID):'';

$homebanner_class ='';
$template_name ='';
if ( is_page_template( 'casestudies-template.php' ) ) {
   $homebanner_class = 'withBlog';
   $template_name = 'casestudies';
}else if ( is_page_template( 'blog-template.php' ) ) {
   $homebanner_class = 'withBlog';
   $template_name = 'blog';
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
                  <h5><?php echo $headline_label = (isset($headline_label) && !empty($headline_label))? $headline_label : ''; ?></h5>
                  <h1><?php echo $headline_title = (isset($headline_title) && !empty($headline_title))? $headline_title : ''; ?></h1>
               </div>
            </div>
            <?php if (!empty($hero_image)): ?>            
            <div class="imageSide">
               <img src="<?php echo $hero_image_url = (isset($hero_image['url']) && !empty($hero_image['url']))? $hero_image['url'] : '#'; ?>" alt="<?php $hero_image['alt'] ?>" />
            </div>
            <?php endif; ?>
         </div>  
      </div>
   </div>
</div>
<?php endif; ?>