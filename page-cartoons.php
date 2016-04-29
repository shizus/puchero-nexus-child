<?php
/*
Template Name: Cartoon Page
*/
?>
<?php get_header(); ?>

<?php
$featured_image = false;

if ( '' != get_the_post_thumbnail() ) :
	$featured_image = true;
?>
<div class="post-thumbnail">
	<div class="container">
		<h1 class="post-heading"><?php the_title(); ?></h1>
	</div> <!-- .container -->
</div> <!-- .post-thumbnail -->
<?php endif; ?>

<div class="page-wrap container fullwidth">
	<div id="main-content">
		<div class="main-content-wrap clearfix">
			<div id="content">
				<?php get_template_part( 'includes/breadcrumbs', 'index' ); ?>

				<div id="left-area">

				<?php while ( have_posts() ) : the_post(); ?>

					<article class="entry-content clearfix">
					<?php if ( ! $featured_image ) : ?>
						<h1 class="main-title"><?php the_title(); ?></h1>
					<?php endif; ?>
					<?php
						the_content();

                    $queryObject = new WP_Query( 'post_type=cartoon&posts_per_page=50&order=desc' );
                    // The Loop!
                    if ($queryObject->have_posts()) {
                        ?>
                        <div class="list-cartoon-thumbnails-container">

                            <?php
                            while ($queryObject->have_posts()) {
                                $queryObject->the_post();
                                $tn_cartoon_stored_meta = get_post_meta( get_the_ID());
                                ?>

                                <div class="cartoon-thumbnails-widget">
                                    <a class="fancybox" rel="gallery" href="<?php echo $tn_cartoon_stored_meta['tn-cartoon-image'][0]; ?>">
                                        <div class="cartoon-box-thumbnail">
                                            <?php

                                            if (isset ($tn_cartoon_stored_meta['tn-cartoon-image'])) {                                                ?>
                                                <div class="cartoon-container">
                                                    <img height="160" width="160" src="<?php echo $tn_cartoon_stored_meta['tn-cartoon-image'][0]; ?>"
                                                         alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    <?php
                    }

						wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'Nexus' ), 'after' => '</div>' ) );
					?>
					</article> <!-- .entry -->

                    <div id="et-box-author">
                        <div id="et-bio-author">
                            <div class="author-avatar">
                                <?php echo get_avatar( get_the_author_meta( 'ID' )); ?>
                            </div> <!-- end #author-avatar -->
                            <?php
                            $author_link = get_the_author_link();
                            //inserto target=_blank en el link
                            if (strpos($author_link,'<a') !== false){
                                $author_link = substr_replace($author_link, " target='_blank' ", 2, 0);
                            }
                            ?>
                            <p id="author-info">
                                <strong>Autor/a<?php /*esc_html_e( 'Author', 'Nexus' );*/ ?>:</strong> <?php echo $author_link ?>
                            </p> <!-- end #author-info -->

                            <p><?php the_author_meta( 'description' ); ?></p>
                        </div>

                        <div id="et-post-share" class="clearfix">
                            <span>¡Compartir!<?php //esc_html_e( 'Share This Post On', 'Nexus' ); ?></span>
                            <ul id="et-share-icons">
                                <?php
                                $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'thumbnail' );
                                $title_attribute = the_title_attribute( 'echo=0' );
                                $post_permalink  = get_permalink();

                                printf( '<li class="google-share"><a href="https://plus.google.com/share?url=%s" target="_blank" class="et-share-button et-share-google">%s</a></li>',
                                    esc_url( $post_permalink ),
                                    esc_html__( 'Google', 'Nexus' )
                                );

                                printf( '<li class="facebook-share"><a href="http://www.facebook.com/sharer/sharer.php?s=100&amp;p[url]=%1$s&amp;p[images][0]=%2$s&amp;p[title]=%3$s" target="_blank" class="et-share-button et-share-facebook">%4$s</a></li>',
                                    esc_url( $post_permalink ),
                                    esc_attr( $thumbnail[0] ),
                                    $title_attribute,
                                    esc_html__( 'Facebook', 'Nexus' )
                                );

                                printf( '<li class="twitter-share"><a href="https://twitter.com/intent/tweet?url=%1$s&amp;text=%2$s" target="_blank" class="et-share-button et-share-twitter">%3$s</a></li>',
                                    esc_url( $post_permalink ),
                                    $title_attribute,
                                    esc_html__( 'Twitter', 'Nexus' )
                                );
                                ?>
                                <li class="whatsapp-share">
                                    <a class="whatsapp" href="whatsapp://send?text=<?php rawurlencode(get_the_title() . " - " . the_permalink()); ?>" data-action="share/whatsapp/share">WhatsApp</a>
                                </li>
                            </ul>
                        </div>
                    </div>

					<?php
						if ( comments_open() )
							comments_template( '', true );
					?>

				<?php endwhile; ?>

				</div> 	<!-- end #left-area -->
			</div> <!-- #content -->
		</div> <!-- .main-content-wrap -->

		<?php get_template_part( 'includes/footer-banner', 'page' ); ?>
	</div> <!-- #main-content -->

<?php get_footer(); ?>