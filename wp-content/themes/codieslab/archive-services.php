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
<main id="primary" class="site-main tess">
	<?php if ( have_posts() ) : ?>
	<div class="homeBanner ">
		<div class="container">
			<div class="innerWrap">
				<?php
							the_archive_title( '<h1 class="page-title-defualt entry-title">', '</h1>' );
							the_archive_description( '<div class="archive-description" >', '</div>' );
				?>
			</div>
		</div>
	</div>
	<!-- OUR SERVICES start -->
	<div class="section ourService">
		<div class="container">
			<div class="title text-center">
				<h5>Our Services</h5>
				<h2>High performing WordPress websites <br>
				that add value to your business</h2>
			</div>
			<div class="row servicesDesign design-02">
				
				<!-- OUR SERVICES end  -->
				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();
				?>
				<div class="item part-md-4">
					<div class="innerWrap">
						<h4>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?>
						</a>
						</h4>
						<p>Seamlessly migrate any business website to WordPress in quick response time with no downtime and no data loss.</p>
						<a href="<?php the_permalink(); ?>" class="link linkBlack">Know More</a>
					</div>
				</div>
				<?php
						endwhile;
				?>
			</div>
		</div>
	</div>
	<?php
	the_posts_navigation();
	else :
	get_template_part( 'template-parts/content', 'none' );
	endif;
	?>
	</main><!-- #main -->
	<?php
	get_footer();