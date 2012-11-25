<?php
/**
 * Template: Single-My_Photosets
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">
				
				<h3>single-my_photosets.php</h3>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php toolbox_content_nav( 'nav-above' ); ?>

				<?php get_template_part( 'content', 'single-my_photosets' ); ?>

				<?php toolbox_content_nav( 'nav-below' ); ?>
				
					
						<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() )
							comments_template( '', true );
						?>
							

			<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>

	<script type="text/javascript">
	Shadowbox.init();
	</script>
	
<?php get_footer(); ?>