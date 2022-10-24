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
$products = (get_field('products',$post->ID))?get_field('products',$post->ID):'';

$testimonial = (get_field('testimonial','option'))?get_field('testimonial','option'):'';

$whoWeAre_class ='';
$template_name ='';
if ( is_page_template( 'about-template.php' ) ) {
   $whoWeAre_class = 'anIntegrated';
   $template_name = 'about';
}
?>
<?php if ( !empty($who_top_title) || !empty($who_title) || !empty($who_description) || !empty($who_about_link) || !empty($who_side_patro_1) || !empty($who_side_patro_2) || !empty($who_side_patro_3) || !empty($who_side_patro_4) || !empty($testimonial) ) : ?>
<div class="<?php echo $whoWeAre_class; ?>">
    <div class="container">
        <div id="" class="ui-tabs ui-corner-all ui-widget ui-widget-content">
            <div class="tbHead">
                <ul class="ui-tabs-nav ui-corner-all ui-helper-reset ui-helper-clearfix ui-widget-header">
                    <li class="ui-tabs-tab ui-corner-top ui-state-default ui-tab ui-tabs-active"><a class="ui-tabs-anchor" href="#overfiew"><?php _e('OVERVIEW','codieslab'); ?></a></li>
                    <li class="ui-tabs-tab ui-corner-top ui-state-default ui-tab ui-tabs-active"><a class="ui-tabs-anchor" href="#services"><?php _e('SERVICES','codieslab'); ?></a></li>
                    <li class="ui-tabs-tab ui-corner-top ui-state-default ui-tab ui-tabs-active"><a class="ui-tabs-anchor" href="#solutions"><?php _e('SOLUTIONS','codieslab'); ?></a></li>
                    <li class="ui-tabs-tab ui-corner-top ui-state-default ui-tab ui-tabs-active"><a class="ui-tabs-anchor" href="#case-studies"><?php _e('CASE STUDIES','codieslab'); ?></a></li>
                </ul>
            </div>
            <div class="overviewInner" id="overfiew">
                <div class="row">
                    <div class="part-md-5">
                        <div class="title">
                            <h5><?php echo $who_top_title; ?></h5>
                            <h2><?php echo $who_title; ?></h2>
                        </div>
                    </div>
                    <div class="part-md-7">
                        <p><?php echo $who_description; ?></p>
                    </div>
                </div>
            </div>
            <div class="productService">
               <div class="row">
                <?php 
                if (isset($products) && !empty($products)) {
                    foreach ($products as $key_p => $p_val) { ?>
                    <div class="item part-md-4">
                         <h5><?php echo $p_val['product_label']; ?></h5>
                         <ul>
                        <?php 
                        if (isset($p_val['product_list']) && !empty($p_val['product_list'])) {
                        foreach ( $p_val['product_list'] as $key_pl => $pl_val) { ?>
                            <li>
                               <img src="<?php echo $pl_val_icon = (isset($pl_val['icon']['url']) && !empty($pl_val['icon']['url']))? $pl_val['icon']['url'] : '#'; ?>" alt="" />
                            </li>
                            <?php 
                            }
                        }
                        ?>
                        </ul>
                    </div>
                        <?php
                    }
                }
                ?>      
               </div>
            </div>
            <div class="btnWrapMain">
              <div class="btnSet justify-center">
                <?php if (!empty($who_about_link)): ?>
                    <a href="<?php echo $who_about_link_url = (isset($who_about_link['url']) && !empty($who_about_link['url']))? $who_about_link['url'] : '#'; ?>" class="btn bthOrange"><?php echo $who_about_link['title']; ?></a>
                <?php endif; ?>
                <div class="qotSlideWrap">
                   <div class=" qotSlide owl-carousel">
                      <?php 
                      if (isset($testimonial) && !empty($testimonial)) {
                         foreach ($testimonial as $key_t => $t_val) { ?>
                            <div class="item btn bthQuote">
                               <img src="<?php echo $t_val_user_image = (isset($t_val['user_image']['url']) && !empty($t_val['user_image']['url']))? $t_val['user_image']['url'] : '#'; ?>" alt="" />
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
        </div>
    </div>
</div>
<?php endif; ?>