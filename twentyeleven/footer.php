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
			
	
				<?php dynamic_sidebar( 'legal' ); ?>
				<p>
					<a href="http://jigsaw.w3.org/css-validator/check/referer">
					    <img style="border:0;width:88px;height:31px"
					        src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
					        alt="¡CSS Válido!" />
					</a>
				</p>
	
			</footer>
		</div><!-- cierra página-->
	</body>
</html>