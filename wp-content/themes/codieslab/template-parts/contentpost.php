<?php 
global $post;
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
$author_id = get_post_field('post_author' , $post->ID);
$avatar_url = get_avatar_url($author_id);
$author_name = get_the_author_meta( 'display_name', $author_id );
$summary_text = get_field('summary_text',$post->ID);
$table_of_contents = get_field('table_of_contents',$post->ID);
$conclusion_text = get_field('conclusion_text',$post->ID);
$playerquote = get_field('playerquote',$post->ID);
$tags = get_the_tags( $post->ID );
?>
<div class="pageContent noBanner">
   <div class="container">
      <div class="blogDtailimagePt">
         <div class="row align-center">
            <div class="part-md-7 imgPt">
               <div class="themeImg withWhiteBg">
                  <img src="<?php echo $image[0]; ?>" alt="" />
               </div>
            </div>
            <div class="part-md-5 contPt">
               <div class="cont">
                  <div class="blogDtlTtl">
                     <h1><?php echo $post->post_title; ?></h1>
                     <div class="authDate">
                        <div class="author">
                           <div class="img">
                              <img src="<?php echo $avatar_url; ?>" alt="" />
                           </div>
                           <div class="authName">
                              <a href="#!"><?php echo $author_name; ?></a>
                           </div>
                        </div>
                        <div class="date">
                           <i class="fa-regular fa-calendar"></i>
                           <span><?php echo get_the_date( 'd M Y', $post->ID ); ?></span>
                        </div>
                        <div class="date">
                           <i class="fa-regular fa-comments"></i>
                           <span><?php echo get_comments_number($post->ID); ?></span>
                        </div>
                     </div>
                  </div>
                  <?php if (isset($summary_text) && !empty($summary_text)) { ?>
                  <div class="summery">
                     <div class="sumInner">
                        <h4><?php _e('SUMMARY','codieslab'); ?></h4>
                        <p><?php echo $summary_text; ?></p>
                     </div>
                  </div>                     
                  <?php } ?>
                  <div class="articleShare">
                     <span><?php _e('Share this Article on', 'codieslab'); ?></span>
                     <?php echo do_shortcode('[SSB align="right" title="test"]') ?>                    
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="blogContaint">
         <div class="row">
            <?php /* ?><div class="part-md-2-pointFive leftSection">
               <?php if (isset($table_of_contents) && !empty($table_of_contents)) { ?>
               <div class="innerWrap">
                  <h3><?php _e('Table of Contents','codieslab'); ?></h3>
                  <ol>
                  <?php foreach ($table_of_contents as $key => $content) { ?>
                    <li><a class="smoothJump" href="#<?php echo createidslug($content['title']); ?>"><?php echo $content['title']; ?></a></li>
                  <?php } ?>
                  </ol>
               </div>
               <?php } ?>            
            </div>
            <?php  */ ?> 
            <div class="part-md-12 middleSection">
               <div class="innerWrap">                
                  <?php if (isset($table_of_contents) && !empty($table_of_contents)) { ?>
                  <div class="innerWrap">
                     <h3><?php //_e('Table of Contents','codieslab'); ?></h3>
                     <ol>
                     <?php $i=1; foreach ($table_of_contents as $key => $content) { ?>

                        <h3 class="jumpTitle" id="<?php echo createidslug( $content['title'] ); ?>"><?php echo $i.'. '.$content['title']; ?></h3>

                        <?php echo $content['content']; ?>
                        
                        <?php    
                        $class_light = check_number($i);
                        if (isset($content['summary']) && !empty($content['summary'])) {  ?>
                           <div class="<?php echo $class_light; ?>">
                              <p><?php echo $content['summary']; ?></p>
                           </div>
                        <?php } ?>
                        

                     <?php $i++; } ?>
                     </ol>
                  </div>
               <?php } ?>        
                  
               <?php if ( isset($conclusion_text) && !empty($conclusion_text) || isset($playerquote) && !empty($playerquote)) { ?>

                  <h3 class="jumpTitle"><?php _e('Conclusion','codieslab'); ?></h3>
                  <p><i><?php echo $conclusion_text; ?></i></p>
                  <div class="playerQuote">
                     <p>“ <?php echo $playerquote; ?> “</p>
                  </div>
               <?php } ?>

                  <?php  if ( isset($tags) && !empty($tags) ) { ?>
                  <div class="tagWrap">
                     <span><?php _e('Tags','codieslab'); ?></span>
                     <ul class="tags">
                        <?php foreach ($tags as $tag) { ?>
                          <?php echo '<li><a href="'. get_tag_link( $tag->term_id ).'">'.$tag->name.'</a></li>'; ?>
                        <?php } ?>
                     </ul>
                  </div>
               <?php } ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>