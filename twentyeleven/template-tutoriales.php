<?php
/**
 * Template Name: Template Home
 * Description: A Page Template that adds a sidebar to pages
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<div id= "contenido">
				<aside id= "menu-lateral">
				
					<?php dynamic_sidebar( 'lateral' ); ?>
									
				</aside>
				<section>
					<h1> <?php echo single_cat_title("", false); ?></h1>
				<?php while ( have_posts() ) : the_post(); ?>
					
						
						<hgroup clase="noticia-1">
							<h2><?php the_title();?></h2>
							<figure id="autor">
								<!--imagen del autor -->
								<?php twentyeleven_posted_on();?>
								<?php get_the_post_thumbnail(pag-ID," ");?>
								<img src="">
							</figure>
							<!-- se coloca lo de comentario y like-->
							<!--<h3><?php getdate();?> </h3>-->
							<p><?php the_excerpt();?></p>
							<a href="<?php echo get_permalink(); ?>"  id="ver">
								 ver más 
							</a>
						</hgroup>

						
						
					
				<?php endwhile; // end of the loop. ?>
			</section>
		</div>

<?php get_footer(); ?>