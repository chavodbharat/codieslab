<?php
/**
* The template for displaying archive services pages
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package codieslab
*/
get_header();
?>
<main id="primary" class="site-main">
	<?php if ( have_posts() ) : ?>
	<div class="homeBanner withBlog">
		<div class="container">
			<div class="innerWrap">
				<?php
					the_archive_title( '<h1 class="page-title-defualt entry-title">', '</h1>' );
					the_archive_description( '<div class="archive-description" >', '</div>' );
				?>
			</div>
		</div>
	</div>
	<!-- portfolio start  -->
	<div class="portfolio">
		<div class="container">
			<div class="row caseDesign">
				<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
				$case_study_more_link = get_field('case_study_more_link',get_the_ID());
				$case_study_company_logo = get_field('case_study_company_logo',get_the_ID());
				$category_detail=get_the_terms( get_the_ID(), 'casestudy_type' );
				
				?>
				<div class="part-md-4 item">
					<div class="innerWrap" style="background-image: url('<?php echo $image[0]; ?>');">
						<div class="textCont">
							<?php
							if (isset($category_detail) && !empty($category_detail)) {
							foreach($category_detail as $cd){
							echo '<span class="tag">'.$cd->name.'</span> ';
							}
							}
							?>
							<h3><?php the_title(); ?></h3>
							<div class="hider">
								<p><?php the_content(); ?></p>
								<div class="itemFoot">
									<a href="<?php echo the_permalink(); ?>" class="circleLink">&nbsp;</a>
									<div class="img"><img src="<?php echo $case_study_company_logo; ?>" alt=""/></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
						endwhile;
				?>
			</div>
		</div>
	</div>
	<!-- portfolio end  -->

	<?php
	the_posts_navigation();
	else :
	get_template_part( 'template-parts/content', 'none' );
	endif;
	?>
	</main><!-- #main -->
	<?php
	get_footer();