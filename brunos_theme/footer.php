<div id="footer">
		
		<div id="footer-content">

			<div id="title-footer">
			<span><img src="<?php bloginfo('template_url'); ?>/images/logo-footer.png " title="" alt=""></span>
			</div>

			<div id="footer-bio">

				<?php query_posts('page_id=97'); ?>
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			
				<div id="title-bio">
					<span><?php the_title(); ?></span>
				</div>

				<p><?php the_excerpt(); ?> <a href="<?php the_Permalink(); ?>"> Leia Mais...</a> </p>

				<?php endwhile; else: ?>
				<?php endif; ?>

			</div>

			<div id="footer-pages">
				<div id="title-page">
					<span>Paginas</span>
				</div>

				<ul>
					<li><a href="<?php bloginfo('home'); ?>">Home</a></li>
					<?php wp_list_pages('title_li=') ?>

				</ul>
			</div>

			<div id="footer-posts">
				<div id="title-posts">
					<span>Posts Recentes</span>
				</div>
				
				<ul>

				<?php query_posts('showposts=5'); ?>
				<?php if (have_posts()) : while(have_posts()) : the_post(); ?>

					<li><a href="<?php the_Permalink(); ?>"><?php the_title(); ?></a></li>

				<?php endwhile; else: ?>
				<?php endif; ?>

			</div>

		</div> <!-- fim footer -->

		<div id="footer-info">
			
			<div id="info-content">
				<span>Lorem ipsum dolor sit amet. 2017</span>
				<span class="info-right">Desenvolvido por <b>Bruno Braga</b> </span>
			</div>

		</div><!-- fim footer info -->
	</div> <!--fim footer -->