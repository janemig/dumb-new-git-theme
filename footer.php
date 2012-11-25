<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">
		
		<!-- Copyright -->
		<p>
			&copy; <?php echo date("Y"); ?> Copyright <?php bloginfo('name'); ?>
		</p>
		<!-- /Copyright -->
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>