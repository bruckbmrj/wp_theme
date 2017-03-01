	<div id="header">
		
		<div id="header-superior">
			<div id="header-superior-content">
				<div id="header-paginas">
					<ul>
						<li><a href="<?php bloginfo('home');?>">Home</a></li>
						<?php wp_list_pages('title_li='); ?>

					</ul>
				</div>

				<div id="header-social">
					<a href=""><img src="<?php bloginfo('template_url'); ?>/images/social.png" alt=""></a>
					<a href=""><img src="<?php bloginfo('template_url'); ?>/images/instagram-social-network-logo-of-photo-camera.png" alt=""></a>
					<a href=""><img src="<?php bloginfo('template_url'); ?>/images/twitter-logo.png" alt=""></a>
					<a href=""><img src="<?php bloginfo('template_url'); ?>/images/youtube-logo.png" alt=""></a>
				</div>

			</div>
		</div>

		<div id="header-content">
			<div id="logo">
				<a href="<?php bloginfo('home'); ?>"><img src="<?php bloginfo('template_url')?>/images/logo_custom.png" alt=""></a>
			</div>

			<div id="search">
				<?php get_search_form(); ?>
			</div>

			<div id="login">
				<ul>
					<li class="logar"><a href="http://atencil.tk/v1/wp-admin">Login</a></li>
					<li class="register"><a href="http://atencil.tk/v1/wp-login.php?action=register">Register</a></li>
				</ul>
			</div>

			
		</div>

		<div id="nav">
			<div id="nav-content">
				<ul>
					<?php wp_list_categories('title_li=&hide_empty=0&orderby&depth=2&exclude=52'); ?>
				</ul>
			</div>
		</div> 

	</div> <!-- Fim header -->