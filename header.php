<!DOCTYPE html>
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
	<title><?php elegant_titles(); ?></title>
	<?php elegant_description(); ?>
<?php if (have_posts()):while(have_posts()):the_post(); endwhile; endif;?>
<!-- Facebook Open Graph -->
<meta property="fb:app_id" content="354010131459035" />
<!--<meta property="fb:admins" content="your_fb_admin_id" />-->
 
<!-- if page is content page -->
<?php if (is_single()) { ?>
<meta property="og:url" content="<?php the_permalink() ?>"/>
<meta property="og:title" content="<?php single_post_title(''); ?>" />
<meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
<meta property="og:type" content="article" />
<meta property="og:image" content="<?php if (function_exists('wp_get_attachment_thumb_url')) {echo wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID)); }?>" />
 
<!-- if page is others -->
<?php } else { ?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<meta property="og:description" content="<?php bloginfo('description'); ?>" />
<meta property="og:type" content="website" />
<meta property="og:image" content="http://www.pucheronews.com/wp-content/uploads/2015/06/Puchero-logo2.jpg" /> <?php } ?>
<!-- Facebook Open Graph END -->

	<?php //do_action( 'et_head_meta' ); ?>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link href='http://fonts.googleapis.com/css?family=Lato:400,300italic,900,900italic,300,100' rel='stylesheet' type='text/css'>
	<?php $template_directory_uri = get_template_directory_uri(); ?>
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( $template_directory_uri . '/js/html5.js"' ); ?>" type="text/javascript"></script>
	<![endif]-->

	<script type="text/javascript">
		document.documentElement.className = 'js';
	</script>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '354010131459035',
      xfbml      : true,
      version    : 'v2.3'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
	<header id="main-header">
		<div class="container">
			<div id="top-info" class="clearfix">
			<?php
				$logo = ( $user_logo = et_get_option( 'nexus_logo' ) ) && '' != $user_logo
					? $user_logo
					: $template_directory_uri . '/images/logo.png';
			?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php echo esc_attr( $logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" id="logo" />
				</a>
                <?php if ( is_active_sidebar( 'top_sidebar' ) ) : ?>					<div id="top-header-widget">						<?php dynamic_sidebar( 'top_sidebar' ); ?>
                </div> <!-- end #sidebar -->
                <?php endif; ?>
                <?php if ( 'on' === et_get_option( 'nexus_header_banner', 'false' ) ) : ?>
                    <div class="header-banner">
                        <?php
                        printf( '<a href="%s"><img src="%s" alt="%s" /></a>',
                            esc_url( et_get_option( 'nexus_header_banner_url', '#' ) ),
                            esc_attr( et_get_option( 'nexus_header_banner_image' ) ),
                            esc_attr( et_get_option( 'nexus_header_banner_description' ) )
                        );
                        ?>
                    </div> <!-- .header-banner -->
                <?php endif; ?>
			</div>


			<div id="top-navigation" class="clearfix">
				<?php do_action( 'et_header_top' ); ?>

				<nav>
				<?php
					$menuClass = 'nav';
					if ( 'on' == et_get_option( 'nexus_disable_toptier' ) ) $menuClass .= ' et_disable_top_tier';
					$primaryNav = '';

					$primaryNav = wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'menu_id' => 'top-menu', 'echo' => false ) );

					if ( '' == $primaryNav ) :
				?>
					<ul id="top-menu" class="<?php echo esc_attr( $menuClass ); ?>">
						<?php if ( 'on' == et_get_option( 'nexus_home_link' ) ) { ?>
							<li <?php if ( is_home() ) echo( 'class="current_page_item"' ); ?>><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home','Nexus' ); ?></a></li>
						<?php }; ?>

						<?php show_page_menu( $menuClass, false, false ); ?>
						<?php show_categories_menu( $menuClass, false ); ?>
					</ul>
				<?php
					else :
						echo( $primaryNav );
					endif;
				?>
				</nav>

				<ul id="et-social-icons">
					<?php if ( 'on' === et_get_option( 'nexus_show_twitter_icon', 'on' ) ) : ?>
					<li class="twitter">
						<a target="_blank" href="<?php echo esc_url( et_get_option( 'nexus_twitter_url', '#' ) ); ?>">
							<span class="et-social-normal"><?php esc_html_e( 'Follow us on Twitter', 'Nexus' ); ?></span>
							<span class="et-social-hover"></span>
						</a>
					</li>
					<?php endif; ?>

					<?php if ( 'on' === et_get_option( 'nexus_show_facebook_icon', 'on' ) ) : ?>
					<li class="facebook">
						<a target="_blank" href="<?php echo esc_url( et_get_option( 'nexus_facebook_url', '#' ) ); ?>">
							<span class="et-social-normal"><?php esc_html_e( 'Follow us on Facebook', 'Nexus' ); ?></span>
							<span class="et-social-hover"></span>
						</a>
					</li>
					<?php endif; ?>

					

					<?php if ( 'on' === et_get_option( 'nexus_show_google_icon', 'on' ) ) : ?>
					<li class="google">
						<a target="_blank" href="<?php echo esc_url( et_get_option( 'nexus_google_url', '#' ) ); ?>">
							<span class="et-social-normal"><?php esc_html_e( 'Follow Us On Google+', 'Nexus' ); ?></span>
							<span class="et-social-hover"></span>
						</a>
					</li>
					<?php endif; ?>

					<?php if ( 'on' === et_get_option( 'nexus_show_rss_icon', 'on' ) ) : ?>
					<li class="rss">
						<?php $et_rss_url = '' !== et_get_option( 'nexus_rss_url' ) ? et_get_option( 'nexus_rss_url' ) : get_bloginfo( 'rss2_url' ); ?>
						<a target="_blank" href="<?php echo esc_url( $et_rss_url ); ?>">
							<span class="et-social-normal"><?php esc_html_e( 'Subscribe To Rss Feed', 'Nexus' ); ?></span>
							<span class="et-social-hover"></span>
						</a>
					</li>
					<?php endif; ?>
				</ul>
			</div> <!-- #top-navigation -->
		</div> <!-- .container -->
	</header> <!-- #main-header -->
