<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<?php wp_footer(); ?>

<footer id="avisos">
				<div id="supplementary" <?php twentyeleven_footer_sidebar_class(); ?>>
	
	
		<?php dynamic_sidebar( 'legal' ); ?>
	
	
			</footer>
		</div>
	</body>
</html>