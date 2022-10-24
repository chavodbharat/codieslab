<?php
global $post;

$header_color = (get_field('header_color',$post->ID))?get_field('header_color',$post->ID):'';
$headline_label = (get_field('headline_label',$post->ID))?get_field('headline_label',$post->ID):'';
$headline_title = (get_field('headline_title',$post->ID))?get_field('headline_title',$post->ID):'';
$headline_textarea = (get_field('headline_textarea',$post->ID))?get_field('headline_textarea',$post->ID):'';
$button_link_1 = (get_field('button_link_1',$post->ID))?get_field('button_link_1',$post->ID):'';
$button_text_1 = (get_field('button_text_1',$post->ID))?get_field('button_text_1',$post->ID):'';
$hero_image = (get_field('hero_image',$post->ID))?get_field('hero_image',$post->ID):'';
$business_text = (get_field('business_text',$post->ID))?get_field('business_text',$post->ID):'';
$partners_logo = (get_field('partners_logo',$post->ID))?get_field('partners_logo',$post->ID):'';

$homebanner_class ='';
$template_name ='';
if ( is_page_template( 'about-template.php' ) ) {
   $homebanner_class = 'bannerAddon-01 pb-130';
   $template_name = 'about';
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
                <h5><?php echo $headline_label; ?></h5>
                <h1><?php echo $headline_title; ?></h1>
                <p><?php echo $headline_textarea; ?></p>
                <div class="btnSet">
                    <a href="#" class="btn btn-getQuote">
                        <?php echo $button_text_1; ?>
                      </a>
                </div>
             </div>
          </div>
          <div class="imageSide">
             <div class="videoCard">
                <div class="innerWrap">
                    <div class="bgImg" style="background-image: url('<?php echo $hero_image_url = (isset($hero_image['url']) && !empty($hero_image['url']))? $hero_image['url'] : '#'; ?>');">
                        <div class="txtWrap">
                            <h4><?php _e('Scale your business to newb heights with robust web solutions', 'codieslab'); ?></h4>
                            <a href="#!" class="opayBtn">
                                <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/play-btn.svg" alt="" />
                            </a>
                        </div>
                    </div>
                    <p><?php echo $headline_textarea; ?></p>
                    <div class="clientSlider owl-carousel">
                        <?php 
                            if (isset($partners_logo) && !empty($partners_logo)) {
                             foreach ($partners_logo as $key_pl => $pl_val) { ?>
                                <div class="item">
                                   <img src="<?php echo $pl_val_partners_logo_image = (isset($pl_val['partners_logo_image']['url']) && !empty($pl_val['partners_logo_image']['url']))? $pl_val['partners_logo_image']['url'] : '#'; ?>" alt="client" />
                                </div>
                             <?php
                             }
                           }
                        ?>                   
                    </div>
                    <div class="btnDiv">
                        <?php if (!empty($button_link_1)): ?>
                        <a href="<?php echo $button_link_1_url = (isset($button_link_1['url']) && !empty($button_link_1['url']))? $button_link_1['url'] : '#'; ?>" class="btn btn-getQuote d-block" target="<?php echo $button_link_1_target = (isset($button_link_1['target']) && !empty($button_link_1['target']))? $button_link_1['target'] : ''; ?>"> 
                         <?php echo $button_link_1_title = (isset($button_link_1['title']) && !empty($button_link_1['title']))? $button_link_1['title'] : ''; ?>
                      </a>                            
                        <?php endif ?>
                    </div>
                </div>
             </div>
          </div>
        </div>
        </div>
    </div>
</div>
<?php endif; ?>