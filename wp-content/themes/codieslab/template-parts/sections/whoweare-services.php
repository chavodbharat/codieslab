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
$service_products = (get_field('service_products',$post->ID))?get_field('service_products',$post->ID):'';

$testimonial = (get_field('testimonial','option'))?get_field('testimonial','option'):'';

$whoWeAre_class ='';
$template_name ='';
if ( is_page_template( 'services-template.php' ) ) {
   $whoWeAre_class = 'whoWeAre top-bottom-10';
   $template_name = 'services';
}
?>
<?php if ( !empty($who_top_title) || !empty($who_title) || !empty($who_description) || !empty($who_about_link) || !empty($who_side_patro_1) || !empty($who_side_patro_2) || !empty($who_side_patro_3) || !empty($who_side_patro_4) ||  !empty($service_products) ) : ?>
<div class="section <?php echo $whoWeAre_class; ?>">
    <div class="container">
        <div class="row gap40">
           <div class="part-md-6">
                <div class="title">
                <h5><?php echo $who_top_title; ?></h5>
                <h2><?php echo $who_title; ?></h2>
                </div>
                <p><?php echo $who_description; ?></p>
                <div class="btnSet">
                    <div class="qotSlideWrap">
                       <div class=" qotSlide owl-carousel">
                        <?php 
                            if (isset($testimonial) && !empty($testimonial)) {
                                foreach ($testimonial as $key_t => $t_val) { ?>
                                <div class="item btn bthQuote">
                                   <img src="<?php echo $t_val_user_image = (isset($t_val['user_image']['url']) && !empty($t_val['user_image']['url']))? $t_val['user_image']['url'] : '#'; ?>" alt="<?php echo $t_val['user_image']['alt'] ?>" />
                                   <span>“<?php echo $t_val['message'] = (isset($t_val['message']) && !empty($t_val['message']))? $t_val['message'] : ''; ?>“</span>
                                </div>
                             <?php
                                }
                            }
                        ?>                   
                       </div>
                    </div>
                    <?php if (!empty($who_about_link)): ?>
                    <a href="<?php echo $who_about_link_url = (isset($who_about_link['url']) && !empty($who_about_link['url']))? $who_about_link['url'] : '#'; ?>" class="btn bthOrange"><?php echo $who_about_link['title']; ?></a>
                <?php endif; ?>
                </div>
           </div>
           <div class="part-md-6">
              <div class="whyWpItems">
                 <div class="innerWrap">
                <?php 
                if (isset($service_products) && !empty($service_products)) {
                    foreach ($service_products as $key_sp => $sp_val) { ?>
                    <div class="item">
                        <div class="icn">
                            <img src="<?php echo $sp_val_icon = (isset($sp_val['icon']['url']) && !empty($sp_val['icon']['url']))? $sp_val['icon']['url'] : ''; ?>" alt="$sp_val['icon']['alt']" />
                        </div>
                        <div class="cont">
                            <h3><?php echo $sp_val_name = (isset($sp_val['name']) && !empty($sp_val['name']))? $sp_val['name'] : ''; ?></h3>
                            <p><?php echo $sp_val_description = (isset($sp_val['description']) && !empty($sp_val['description']))? $sp_val['description'] : ''; ?></p>
                        </div>
                    </div>
                     <?php
                        }
                    }
                ?> 
                </div>
              </div>
           </div>
        </div>
    </div>
</div>
<?php endif; ?>