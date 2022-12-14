<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package codieslab
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php /* ?>
		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'codieslab' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'codieslab' ); ?></p>

					<?php
					//get_search_form();

					//the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'codieslab' ); ?></h2>
						<ul>
							<?php
							wp_list_categories(
								array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								)
							);
							?>
						</ul>
					</div><!-- .widget -->

					<?php
					$codieslab_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'codieslab' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$codieslab_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					?>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->
		<?php */ ?>
		<section class="error-404 not-found">			
			<div class="homeBanner ">
		        <div class="container">
		            <div class="innerWrap">
						<h1 class="page-title-defualt"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'codieslab' ); ?></h1>
		            </div>
	         	</div>
	        </div>
	         <div class="section-defualt">
	         <div class="container">
	            <div class="row">
	             	<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'codieslab' ); ?></p>
	            </div>
	         </div>
	      </div>
	  	</section>
	</main><!-- #main -->

<?php
get_footer();
