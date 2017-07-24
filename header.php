<?php/** * The header for our theme * * This is the template that displays all of the <head> section and everything up until <div id="content"> * * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials * * @package AOI_Responsive */?><!DOCTYPE html><html <?php language_attributes(); ?>><head><meta charset="<?php bloginfo( 'charset' ); ?>"><?php if(is_tree('add spanish id here if exsist')): ?>  <meta http-equiv="content-language" content="es"/><?php else : ?>	<meta http-equiv="Content-Language" content="en"><?php endif; ?><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="profile" href="http://gmpg.org/xfn/11"><link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory');?>/images/favicons/favicon.ico"><link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('stylesheet_directory');?>/images/favicons/apple-touch-icon.png"><link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('stylesheet_directory');?>/images/favicons/favicon-32x32.png"><link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('stylesheet_directory');?>/images/favicons/favicon-16x16.png"><link rel="manifest" href="<?php bloginfo('stylesheet_directory');?>/images/favicons/manifest.json"><link rel="mask-icon" href="<?php bloginfo('stylesheet_directory');?>/images/favicons/safari-pinned-tab.svg" color="#5bbad5"><meta name="theme-color" content="#ffffff"><?php wp_head(); ?><?php $og_video_thumb = get_post_meta( get_the_ID(), 'youtube_id', true);if ($og_video_thumb !== '') { ?><meta property="og:image" content="<?php echo 'https://img.youtube.com/vi/' . $og_video_thumb . '/hqdefault.jpg'; ?>" /><meta property="og:video" content="<?php echo 'https://youtu.be/' . $og_video_thumb . ''?>" /><meta property="og:video:type" content="application/x-shockwave-flash" /><meta property="og:video:width" content="640" /><meta property="og:video:height" content="360" /><meta name="twitter:player" content="<?php echo get_post_meta( get_the_ID(), 'og_video', true) ?>" /><?php } ?><?php if ( has_post_thumbnail()) : ?><?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?><style type="text/css">.inner-banner{	background-image: url('<?php echo $image[0]; ?>') !important;	background-repeat: no-repeat;    background-size: cover;    padding: 90px 0 120px;    background-position: center;}.entry-header{  display: none;}</style><?php endif; ?></head><body <?php body_class(); ?>><?php body_begin(); ?><div id="page" class="site">	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'aoi-responsive' ); ?></a>	<header id="masthead" class="site-header" role="banner">		<div class="container">	    <div class="row">	        <div id="branding" class="col-md-6 clearfix">						<?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>              <a class="nobg" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>              <?php else : ?>	            <a href="<?php bloginfo('url'); ?>/" class="text-hide" title="Link to INSERT LAW FIRM NAME HERE Home">INSERT LAW FIRM NAME HERE</a>							<?php endif; ?>	        </div><!-- #branding -->	        <div id="tagline" class="col-md-3 col-md-push-3 clearfix">	            <div class="cta-1">Free Consultation</div><!-- .cta-1 -->	            <div class="cta-2">(555) 123-4567</div><!-- .cta-2 -->	            <div class="cta-3">Se Habla Espa&ntilde;ol</div><!-- .cta-3 -->	        </div><!-- #tagline -->	    </div><!-- .row -->	</div><!-- .container --><div class="navbar">	<div class="container">			<nav class="navbar-default" role="navigation">			<div class="container-fluid">    <!-- Collect the nav links, forms, and other content for toggling -->    <div class="" id="">      <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>    </div><!-- /.navbar-collapse -->  </div><!-- /.container-fluid -->		</nav><!-- #site-navigation -->	</div></div>	</header><!-- #masthead -->	<?php if ( has_post_thumbnail()) : ?>	<?php if ( get_post_meta( get_the_ID(), 'banner_heading', true ) ) : ?>		<div class="inner-banner text-center">			<div class="container">			<div class="heading">	    			<h1><?php $heading = get_post_custom_values('banner_heading');				foreach ( $heading as $key ) {							echo "$key";						}				 ?> </h1>			</div>			<?php if ( get_post_meta( get_the_ID(), 'banner_cta', true ) ) : ?>			<div class="cta-button visible-lg visible-md">				<!-- Button trigger modal -->		<a class="btn btn-primary btn-lrg" href="/free-case-evaluation/"><?php $cta = get_post_custom_values('banner_cta');				foreach ( $cta as $key ) {							echo "$key";						}				 ?></a>			</div>			<?php endif; ?>		</div>		</div>	  <?php else : ?>	  <div class="inner-banner text-center">			<div class="container">			<div class="heading">	      <h1><?php the_title(); ?></h1>			</div>			<?php if ( get_post_meta( get_the_ID(), 'banner_cta', true ) ) : ?>			<div class="cta-button visible-lg visible-md">				<!-- Button trigger modal -->		<a class="btn btn-primary btn-lrg" href="/free-case-evaluation/"><?php $cta = get_post_custom_values('banner_cta');				foreach ( $cta as $key ) {							echo "$key";						}				 ?></a>			</div>			<?php endif; ?>		</div>		</div>		<?php endif; ?>	  <?php endif; ?>			<div id="content" class="site-content">