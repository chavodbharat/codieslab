<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package codieslab
 */

global $post;

$location = get_field('location', 'option');
$site_details = (get_field('site_details', 'option'))?get_field('site_details', 'option'):'';

$social_media = get_field('social_media', 'option');

$copy_write_text = (get_field('copy_write_text', 'option'))?get_field('copy_write_text', 'option'):'';

?>
         <footer>
            <!-- global leader start -->
            <div class="globalLeader">
               <div class="container">
                  <div class="innerWrap">
                     <?php echo do_shortcode('[email-subscribers-form id="1"]'); ?>
                  </div>
               </div>
            </div>
            <div class="footerTop">
               <div class="container">
                  <div class="location row">
                     <?php
                     if  (isset($location) && !empty($location)) {
                        foreach ($location as $key_loc => $loc) { ?>
                           <div class="item part-md-4">
                              <div class="innerWrap">
                                 <div class="img">
                                    <img src="<?php echo (isset($loc['location_name']) && $loc['location_name'] !='' )? $loc['location_image']['url']: '#'; ?>" alt="<?php echo $loc['location_name']; ?>" />
                                 </div>
                                 <div class="txt">
                                    <?php 
                                      if(isset($loc['location_name']) && $loc['location_name'] !='' ){
                                       echo '<h4>'.$loc['location_name'].'</h4>';
                                      }
                                      if(isset($loc['location_address']) && $loc['location_address'] !='' ){
                                       echo '<p>'.$loc['location_address'].'</p>';
                                      }
                                      if( (isset($loc['location_phone']) && $loc['location_phone'] !=='' ) && (isset($loc['location_email_id']) && $loc['location_email_id'] !='' )){
                                       echo '<ul class="contactDtl">
                                                <li class="phone"><a href="tel:'.$loc['location_phone'].'">'.$loc['location_phone'].'</a></li>
                                                <li class="phone"><a href="mail:'.$loc['location_email_id'].'">'.$loc['location_email_id'].'</a></li>
                                             </ul>';
                                      }  ?>                             
                                 </div>
                              </div>
                           </div>    
                     <?php }
                     } ?>                  
                  </div>
                  <div class="footElement row">
                     <div class="part-md-5">
                        <div class="footLogo">
                           <a href="<?php echo (isset($site_details['url']['url']) && $site_details['url']['url'] !='' )? $site_details['url']['url']: '#'; ?>">
                              <img src="<?php echo (isset($site_details['logo']['url']) && $site_details['logo']['url'] !='' ) ? $site_details['logo']['url']: '#'; ?>" alt="" />
                           </a>
                        </div>
                        <?php 
                           if(isset($site_details['description']) && $site_details['description'] !='' ){
                              echo '<p>'.$site_details['description'].'</p>';
                           }
                        ?>
                        <div class="connect">
                           <?php 
                              if(isset($site_details['label']) && $site_details['label'] !='' ){
                                 echo '<p>'.$site_details['label'].'</p>';
                              }
                           
                           if(isset($site_details['email']) && $site_details['email'] !='' ){
                              echo '<p><a href="mail:'.$site_details['email'].'" class="mail">'.$site_details['email'].'</a></p>';
                           }
                           ?>
                           <div class="socialBtn">
                              <ul>
                              <?php 
                                 if (isset($social_media) && !empty($social_media)) {
                                    foreach ($social_media as $key_sm => $menu_sm ) {
                                       echo '<li><a href="'.$menu_sm['link'].'" target="_blank"><img src="'.$menu_sm['icon'].'"/></a></li>';
                                    }
                                 }
                              ?>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="part-md-7">
                        <?php if ( has_nav_menu( 'footer-menu' ) ) : ?>
                        <div class="quickLinksFoot">                  
                           <?php 
                           wp_nav_menu( 
                              array(
                                    'container'     => '',
                                    'menu_id'       => 'footer-menu',
                                    'menu_class'    => '',
                                    'theme_location'=> 'footer-menu',
                                    'link_before'   => '',
                                    'link_after'    => '',
                                    'items_wrap'    => '<div id="%s" class="%s row">%s</div>',
                                    'walker'         => new WPSE_footer_Walker
                                ) 
                           );
                          ?>
                        </div>
                     <?php endif; ?>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footerBottom">
               <div class="container">
                  <div class="innerWrap">
                     <div class="copyWrite">
                        <p><?php echo '© '.date("Y").' '. $copy_write_text; ?></p>
                     </div>
                     <?php if ( has_nav_menu( 'footer-bottom-menu' ) ) : ?>
                     <div class="footNav">                     
                     <?php
                        $menuParameters = array(
                          'theme_location'=> 'footer-bottom-menu',
                          'container'     => false,
                          'echo'          => false,
                          'link_before'   => '',
                          'link_after'    => '',
                          'before'        => '',
                          'after'         => '|',
                          'items_wrap'    => '%3$s',
                          'depth'         => 0,
                        );
                        echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' ); 
                       ?>
                     </div>
                     <?php endif; ?>
                  </div>
               </div>
            </div>
         </footer>

      </div><!-- #page -->
   <?php wp_footer(); ?>
   </body>
</html>
