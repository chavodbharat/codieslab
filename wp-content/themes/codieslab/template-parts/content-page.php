<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package codieslab
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<section class="pages">			
		<div class="homeBanner ">
	        <div class="container">
	            <div class="innerWrap">
	            	<?php the_title( '<h1 class="page-title-defualt entry-title">', '</h1>' ); ?>
	            </div>
         	</div>
        </div>
         <div class="section-defualt entry-content">
         <div class="container">
            <div class="row">
             	<?php
				the_content();

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'codieslab' ),
						'after'  => '</div>',
					)
				);
				?>
            </div>
         </div>
      </div>
	</section>
	<?php /* ?>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php codieslab_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'codieslab' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						__( 'Edit <span class="screen-reader-text">%s</span>', 'codieslab' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif;  ?>
	<?php */ ?>
</article><!-- #post-<?php the_ID(); ?> -->
