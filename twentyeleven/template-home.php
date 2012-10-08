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
			<!--<div id= "home">-->
				<aside id= "menu-lateral">
				
					<?php dynamic_sidebar( 'lateral' ); ?>
									
				</aside>
				<section id="inicio">
						<h1> <?php echo single_cat_title("", false); ?></h1>
					<?php while ( have_posts() ) : the_post(); ?>
						
							
							<hgroup clase="noticia-1">
								<h2><?php the_title();?></h2>
								<figure id="autor">
									<!--imagen del autor -->
									<?php twentyeleven_posted_on();?>
									
									<img src="">
								</figure>
								<!-- se coloca lo de comentario y like-->
								<!--<h3><?php getdate();?> </h3>-->
								<p><?php the_excerpt();?></p>
								<!--<a href="<?php echo get_permalink(); ?>"  id="ver">
									 ver más 
								</a>-->
							</hgroup>
						
					<?php endwhile; // end of the loop. ?>
				</section>
			<!--</div>-->
		</div>

<?php get_footer(); ?>