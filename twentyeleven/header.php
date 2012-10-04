<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/style.css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
	<div id="pagina">
			<header >
				<div id="cabecera">

					<div id="imagen-logo">
						<figure id = "logo"> 
							<!-- imagen del logo -->
							<img src="" alt="logo">	
						</figure>
					</div>

					<div id="inicio">
						<a href="<?php echo bloginfo('url'); ?>" title="inicio">
							<figure id = "imagen-inicio"> 
								<!-- imagen del inicio -->
								<img src="http://localhost:81/tecnologiaemprendedora.mx/wp-content/themes/blog_tecnologia/twentyeleven/images/home-icon.png" alt="Inico">	
							</figure>
						</a>
					</div>

					<div id= "menu">
						<!--<button id="internet">INTERNET</button>
						<button id="software">SOFTWARE</button>
						<button id="tutoriales">TUTORIALES</button>-->
						<?php wp_nav_menu( array( 'theme_location' => 'primary'));?>
					</div>

					<div id= "redes-sociales">
							<ul id= "redes">
								<li> 
									<a hred="#" title ="facebook">
										<figure>
											<!--imgen http://localhost:81/tecnologiaemprendedora.mx/images/facebook.png // wp-content\themes\blog_tecnologia\twentyeleven\images-->
											<img src="http://localhost:81/tecnologiaemprendedora.mx/wp-content/themes/blog_tecnologia/twentyeleven/images/facebook.png">
											<br />
											<caption> facebook </caption>
											
										</figure>
									</a>
								</li>

								<li> 
									<a hred="#" title ="tiwtter">
										<figure>
											<!--imgen -->
											<img src="http://localhost:81/tecnologiaemprendedora.mx/wp-content/themes/blog_tecnologia/twentyeleven/images/twitter_icon.png">
											<br />
											<caption> @tiwtter </caption>
											
										</figure>
									</a>
								</li>

								<li> 
									<a hred="#" title ="pinterest">
										<figure>
											<!--imgen -->
											<img src="http://localhost:81/tecnologiaemprendedora.mx/wp-content/themes/blog_tecnologia/twentyeleven/images/pinterest.png">
											<br />
											<caption> pinterest </caption>
											
										</figure>
									</a>
								</li>

								<li> 
									<a hred="#" title ="RSS">
										<figure>
											<!--imgen -->
											<img src="http://localhost:81/tecnologiaemprendedora.mx/wp-content/themes/blog_tecnologia/twentyeleven/images/rss.png">
											<br />
											<caption>RSS</caption>
											
										</figure>
									</a>
								</li>

							</ul>
					</div>

					<div id="busqueda">
						<input type="text" name="q" size="5" />
	  					<input type="submit" name="sa" value="Buscar" />
  					</div>

  				</div>
			</header>