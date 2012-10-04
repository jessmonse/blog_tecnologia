<?php
/**
 * Template Name: Template HOME
 * Description: A Page Template that adds a sidebar to pages
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		

				<?php //while ( have_posts() ) : the_post(); ?>

					<?php //get_template_part( 'content', 'page' ); ?>

					<?php //comments_template( '', true ); ?>

				<?php //endwhile; // end of the loop. ?>

		<div id= "contenido">
				<aside id= "menu-lateral">
				
					<?php dynamic_sidebar( 'lateral' ); ?>
									
				</aside>
				
				<section>
					<h1>NOTICIAS Recientes</h1>
					<hgroup clase="noticia-1">
						<h2>Noticia 1</h2>
						<figure id="autor">
							<!--imagen del autor -->
							<img src="">
						</figure>
						<!-- se coloca lo de comentario y like-->
						<h3>fecha </h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua.</p>
						<button id="ver">Ver mas</button>
					</hgroup>

					
					<!--falta poner la paginación -->
				</section>
		</div>

<?php get_footer(); ?>