<?php

/**
 * Template Name: Left Sidebar Layout
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package c9
 */

get_header();
?>

<div class="wrapper cortextoo" id="page-wrapper">

	<div class="container page-left-sidebar" id="content">

		<div class="row no-gutters">

			<div class="
			<?php
			if ( is_active_sidebar( 'left-sidebar' ) ) :
?>
col-12 offset-xs-0 col-sm-10 offset-sm-2
<?php
else :
				?>
				col-12<?php endif; ?> content-area" id="primary">

				<?php get_sidebar( 'left' ); ?>

				<main class="site-main" id="main" role="main">

					<?php
					while ( have_posts() ) :
the_post();
?>

						<?php get_template_part( 'loop-templates/content', 'page' ); ?>

					<?php
					endwhile; // end of the loop.
					?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div>
		<!--end row-->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
