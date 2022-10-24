<?php
/**
* Template name: Blog Template
* The Home page template file
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package codieslab
*/
get_header();

global $post;
$post_id = $post->ID;

$blog_args = array(
   'post_type'  => 'post',
   'posts_per_page' => -1,
   'orderby'        => 'Desc',
   'post_status'    => 'publish'
   // 'tax_query' => array(
   //    array(
   //       'taxonomy' => 'casestudy_type',
   //       'field'    => 'slug',
   //       'terms'    => 'jazz'
   //    )
   // )
);
$blogs = get_posts( $blog_args );

$popularpost  = new WP_Query(array(
      'post_type'  => 'post',
      'post_status'    => 'publish',
      'posts_per_page' => 2,
     // 'meta_key' => 'wpb_post_views_count',
    //  'orderby' => 'meta_value_num',
      'order' => 'DESC'
));

$categories = get_categories( array(
   'orderby' => 'name',
   'parent'  => 0,
   'hide_empty'      => false,
) );

$tags = get_tags(array(
  'hide_empty' => false
));


?>
<!-- banner start  -->
<?php 
   get_template_part( 'template-parts/sections/homebanner','contact');
?>
<?php 
   get_template_part( 'template-parts/sections/webdevelopment');
?>
<!-- banner end  -->
<!-- blog content area start  -->
<div class="blogMainContainer">
   <div class="container">
      <div class="row">
         <div class="part-md-8 leftPrt">
            <div class="blogItems">
            <?php 
            if ( isset($blogs) && !empty($blogs) ) {
               foreach ( $blogs as $blog ) {                      
                  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $blog->ID ), 'single-post-thumbnail' ); ?>
               <div class="item part-md-6">
                  <div class="innerWrap">
                     <div class="img">
                        <img src="<?php echo $image[0]; ?>" alt="" />
                     </div>
                     <h6><?php _e('Stories','codieslab'); ?></h6>
                     <?php 
                     printf( '<h3><a href="%1$s">%2$s</a></h3>',
                        esc_url( get_permalink( $blog->ID ) ),
                        esc_html( $blog->post_title )
                     );
                     ?>
                     <p><?php echo get_the_date( 'd M, Y', $blog->ID ); ?></p>
                  </div>
               </div>
            <?php
               }      
            }
            ?>
            </div>
         </div>
         <div class="part-md-4 rightPrt">
            <div class="search subSection">
               <form>
                  <input type="text" placeholder="Enter a technology name or a keyword" class=""/>
               </form>
            </div>
            <div class="category subSection">
               <h3 class="subTitle">CATEGORIES</h3>

               <ul class="categoryItems">
                  <?php 
                  if (isset($categories) && !empty($categories)) {
                     foreach ( $categories as $category ) { 
                        printf( '<li><a href="%1$s">%2$s<span>(%3$s)</span></a></li>',
                           esc_url( get_category_link( $category->term_id ) ),
                           esc_html( $category->name ),
                           esc_html( $category->count )
                        );
                     }
                  }
                  ?>
               </ul>
            </div>
            <div class="subSection">
               <h3 class="subTitle">POPULAR POSTS</h3>

               <div class="blogItems">
                  <?php 
                  if ( $popularpost->have_posts() ) : 
                     while ( $popularpost->have_posts() ) : $popularpost->the_post(); 
                        $imagepost = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
                        ?>
                     <div class="item part-md-12">
                        <div class="innerWrap">
                           <div class="img">
                              <img src="<?php echo $imagepost[0]; ?>" alt="" />
                           </div>
                           <h6>Stories</h6>
                           <?php 
                             the_title( '<h3><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
                           ?>
                           <p><?php echo get_the_date( 'd M, Y', get_the_ID() ); ?></p>
                        </div>
                     </div> 
                  <?php 
                     endwhile;
                     wp_reset_postdata();
                  endif;
                  ?>
               </div>
            </div>
            <div class="subSection">
               <h3 class="subTitle">Tags</h3>
               <ul class="tags">
                  <?php 
                  if (isset($tags) && !empty($tags)) {
                     foreach ( $tags as $tag ) {

                        printf( '<li><a href="%1$s">%2$s</a></li>',
                           esc_url( get_tag_link( $tag->term_id ) ),
                           esc_html( $tag->name )
                        );
                     }
                     
                  }
                  ?>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- blog content area end  -->

<?php get_footer(); ?>