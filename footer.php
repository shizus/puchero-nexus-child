		<?php get_sidebar( 'footer' ); ?>


		<div id="footer-bottom">
		<?php
			$menu_class = 'bottom-nav';
			$footerNav = '';

			$footerNav = wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menu_class, 'echo' => false, 'depth' => '1' ) );

			if ( '' === $footerNav )
				show_page_menu( $menu_class );
			else
				echo( $footerNav );
		?>
		</div> <!-- #footer-bottom -->
	</div> <!-- .page-wrap -->


	<div id="footer-info" class="container">
		<div id="copyright">Diseñado con &hearts; por <a href="http://www.latorregabriel.com" title="Gabriel La Torre">Gabo LaTo</a></div>
	<div id="license">
		<div id="licence-img">
		<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /></a><br />
		</div>
		<div id="licence-text">
		<span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">Puchero News</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="pucheronews.com" property="cc:attributionName" rel="cc:attributionURL">pucheronews.com</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License</a>.</div>
		</div>
	</div>
<a class="back-to-top" href="#">
	<!-- Begin MailChimp Signup Form -->
	<link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
		/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
		   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
	</style>
	<div id="mc_embed_signup">
	<form action="//pucheronews.us11.list-manage.com/subscribe/post?u=5f46ae4a11eff39ab08c4ddfd&amp;id=cd8a31b1e3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	    <div id="mc_embed_signup_scroll">
		<label for="mce-EMAIL">¡Suscribite a nuestra lista!</label>
		<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Tu e-mail" required>
	    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
	    <div style="position: absolute; left: -5000px;"><input type="text" name="b_5f46ae4a11eff39ab08c4ddfd_cd8a31b1e3" tabindex="-1" value=""></div>
	    <div class="clear"><input type="submit" value="¡Suscribirme!" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
	    </div>
	</form>
	</div>

	<!--End mc_embed_signup-->
</a>

	<?php wp_footer(); ?>
</body>
</html>
