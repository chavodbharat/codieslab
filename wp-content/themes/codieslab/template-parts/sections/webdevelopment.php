<?php 
global $post;

$web_development_label = (get_field('web_development_label',$post->ID))?get_field('web_development_label',$post->ID):'';
$web_development_title = (get_field('web_development_title',$post->ID))?get_field('web_development_title',$post->ID):'';
$web_development_description = (get_field('web_development_description',$post->ID))?get_field('web_development_description',$post->ID):'';
$background_image = (get_field('background_image',$post->ID))?get_field('background_image',$post->ID):'';

$blog_class ='';
$template_name ='';
if ( is_page_template( 'casestudies-template.php' ) ) {
   $blog_class = 'no-margin-top withPortfolio';
   $template_name = 'casestudies';
} else if( is_page_template( 'services-template.php' ) ) {
  $homebanner_class = 'withServices';
  $template_name = 'services';
} else if( is_page_template( 'contact-template.php' ) ) {
  $homebanner_class = 'withContact';
  $template_name = 'contact';
}
$style = 'style="background-image:url('.$background_image['url'].');"';

?>
<?php if ( !empty($web_development_label) || !empty($web_development_title) || !empty($web_development_description) || !empty($background_image) ) : ?>
<div class="afterBlog <?php echo $blog_class; ?>">
   <div class="container">
      <div class="afterBlogMn" <?php echo $style; ?>>
         <div class="title darkBg">
            <h5><?php echo $web_development_label; ?></h5>
            <h2><?php echo $web_development_title; ?></h2>
            <?php echo $web_development_description; ?>
         </div>
      </div>
   </div>
</div>
<?php endif; ?>