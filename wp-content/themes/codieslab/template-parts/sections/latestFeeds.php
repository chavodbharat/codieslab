<?php 
$post_args = array(
   'post_type'  => 'post',
   'posts_per_page' => 3,
   'orderby'        => 'rand',
   'post_status'    => 'publish'
   // 'tax_query' => array(
   //    array(
   //       'taxonomy' => 'casestudy_type',
   //       'field'    => 'slug',
   //       'terms'    => 'jazz'
   //    )
   // )
);
$posts_result = get_posts( $post_args );

?>
<?php if (isset($posts_result) && !empty($posts_result)): ?>
<div class="section latestFeeds">
   <div class="container">
   <div class="title withBtn">
      <div class="titleSide">
         <h5><?php _e('OUR LATEST FEEDS', 'codieslab'); ?></h5>
         <h2><?php _e('We love to write & share with the world','codieslab'); ?></h2>
      </div>
      <div class="rightBtn">
         <a href="<?php echo get_permalink( get_page_by_path( 'blog' ) ); ?>" class="btn btn-getQuote size-01"><?php _e('VIEW ALL','codieslab'); ?></a>
      </div>
   </div>
   <div class="row ltFeeds">

      <?php 
      if ( isset($posts_result) && !empty($posts_result) ) {
         foreach ( $posts_result as $post ) {
         $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
         ?>
         <div class="item part-md-4">
            <div class="innerWrap">
               <div class="img">
                  <img src="<?php echo $image[0]; ?>" alt="<?php echo $post->post_title; ?>" />
               </div>
               <div class="txt">
                  <h5><?php _e('Stories','codieslab'); ?></h5>
                  <h4><?php echo '<a href="'.get_permalink($post->ID).'">'.$post->post_title.'</a>'; ?></h4>
                  <p><?php echo get_the_date( 'd M, Y', $post->ID ); ?></p>
               </div>
            </div>
         </div>

      <?php
         }
      }
      ?>
   </div>
   </div>
</div>
<?php endif; ?>