<!DOCTYPE html>
<html <?php language_attributes()?> >
<head>
	<meta charset="<?php bloginfo('charset') ?>" />
	<title><?php wp_title('-',true,'right'); bloginfo() ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css" />

<?php wp_head(); ?>
</head>	
	<body>

<!-- header -->
<?php get_header(); ?>

	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<div id="container">

		<div id="content">
			<div id="destaque">
				
				<div class="destaque-post">

					<?php query_posts('category_name=destaques&offset=0&showposts=1'); ?>

					<?php if (have_posts()) : while(have_posts()) : the_post(); ?>

					<a href="<?php the_Permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
					<div class="destaque-info">
						<ul>
							<li class="dest-autor"> <?php the_author(); ?> </li>
							<li class="dest-views"> <?php if(function_exists('the_views')) {the_views();} ?> </li>
							<li class="dest-coment"> <?php comments_number('0','1','%'); ?> </li>
						</ul>
					</div>
					<h1><a href=" <?php the_Permalink(); ?> "><?php the_title(); ?></a></h1>
					<?php endwhile; else: ?>
					<?php endif; ?>	

					<div class="list-dest">
						<ul>

							<?php query_posts('category_name=destaques&offset=2&showposts=2'); ?>
							<?php if (have_posts()) : while(have_posts()) : the_post(); ?>	

							<li>
								<a href="<?php the_Permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
								<h2><a href=" <?php the_Permalink(); ?> "><?php the_title(); ?></a></h2>
							</li>

							<?php endwhile; else: ?>
							<?php endif; ?>	

						</ul>
					</div>
				</div> <!-- fim destaque post -->

				<div class="destaque-post right">
					<?php query_posts('category_name=destaques&offset=1&showposts=1'); ?>

					<?php if (have_posts()) : while(have_posts()) : the_post(); ?>

					<a href="<?php the_Permalink(); ?>"> <?php the_post_thumbnail(); ?>
					<div class="destaque-info">
						<ul>
							<li class="dest-autor"> <?php the_author(); ?> </li>
							<li class="dest-views"> <?php if(function_exists('the_views')) {the_views();} ?> </li>
							<li class="dest-coment"> <?php comments_number('0','1','%'); ?> </li>
						</ul>
					</div>
					<h1><a href=" <?php the_Permalink(); ?> "><?php the_title(); ?></a></h1>
					<?php endwhile; else: ?>
					<?php endif; ?>	

					<div class="list-dest">
						<ul>

							<?php query_posts('category_name=destaques&offset=4&showposts=2'); ?>
							<?php if (have_posts()) : while(have_posts()) : the_post(); ?>	

							<li>
								<a href="<?php the_Permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
								<h2><a href=" <?php the_Permalink(); ?> "><?php the_title(); ?></a></h2>
							</li>

							<?php endwhile; else: ?>
							<?php endif; ?>	

						</ul>
					</div>
				</div> <!-- fim destaque post -->


			</div> <!-- fim destaque -->

			<div id="categoria1"> 

				<div id="title-cat1"><span>CATEGORIA 1</span></div>

				<?php query_posts('category_name=tecnologia&offset=0&showposts=2'); ?>
				<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
				
				<div class="post-1">
					
					<a href="<?php the_Permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
					<h1><a href="<?php the_Permalink(); ?>"><?php the_title(); ?></a></h1>

					<div class="cat1-info">
						<ul>
							<li class="cat1-autor"><?php the_author(); ?></li>
							<li class="cat1-views"><?php if(function_exists('the_views')) {the_views();} ?> </li></li>
							<li class="cat1-coment"><?php comments_number('0','1','%'); ?></li>
						</ul>
					</div>

					<p> <?php the_excerpt_rereloaded(25,"Veja Mais"); ?> </p>

				</div>

				<?php endwhile; else: ?>
				<?php endif; ?>	

			</div>

			<div id="categoria2">
				
				<div id="title-cat2"><span>CATEGORIA 2</span></div>

				<?php query_posts('category_name=entretenimento&offset=0&showposts=3'); ?>
				<?php if (have_posts()) : while(have_posts()) : the_post(); ?>

				<div class="post-2">
					
					<a href="<?php the_Permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
					<h1><a href="<?php the_Permalink(); ?>"><?php the_title(); ?></a></h1>

					<div class="cat2-info">
						<ul>
							<li class="cat2-autor"><?php the_author(); ?></li>
							<!-- <li class="cat2-views">views</li> -->
							<li class="cat2-coment"><?php comments_number('0','1','%'); ?></li>
						</ul>
					</div>

					<p> <?php the_excerpt_rereloaded(22,"Veja Mais"); ?> </p>

				</div>

				<?php endwhile; else: ?>
				<?php endif; ?>	

			</div>


			<div id="bloco-cat3-4">
			
				<div id="categoria3">
					
					<div id="title-cat3"><span>Categoria 3</span></div>


				<?php query_posts('category_name=esportes&offset=0&showposts=1'); ?>
				<?php if (have_posts()) : while(have_posts()) : the_post(); ?>

						<a href="<?php the_Permalink(); ?>"> <?php the_post_thumbnail(); ?></a>

							<div class="cat3-info">
								<ul>
									<li class="cat3-autor"> <?php the_author(); ?> </li>
									<li class="cat3-views"> <?php if(function_exists('the_views')) {the_views();} ?> </li>
									<li class="cat3-coment"> <?php comments_number('0','1','%'); ?> </li>
								</ul>
							</div>
							<h1><a href=" <?php the_Permalink(); ?> "> <?php the_title(); ?></a></h1>

				<?php endwhile; else: ?>
				<?php endif; ?>	

							<div id="cat3-list">
								
								<ul>

									<?php query_posts('category_name=esportes&offset=1&showposts=1'); ?>
									<?php if (have_posts()) : while(have_posts()) : the_post(); ?>

									<li>
										<a href="<?php the_Permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
										<h2><a href=" <?php the_Permalink(); ?> "> <?php the_title(); ?> </a></h2>
									</li>
									
									<?php endwhile; else: ?>
									<?php endif; ?>	

								</ul>

							</div>
				</div>	

				<div id="categoria4">
					
					<div id="title-cat4"><span>Categoria 4</span></div>


					<?php query_posts('category_name=saude&offset=0&showposts=1'); ?>
					<?php if (have_posts()) : while(have_posts()) : the_post(); ?>

						<a href="<?php the_Permalink(); ?>"> <?php the_post_thumbnail(); ?></a>

							<div class="cat4-info">
								<ul>
									<li class="cat4-autor"> <?php the_author(); ?> </li>
									<li class="cat4-views"> <?php if(function_exists('the_views')) {the_views();} ?> </li>
									<li class="cat4-coment"> <?php comments_number('0','1','%'); ?> </li>
								</ul>
							</div>
							<h1><a href=" <?php the_Permalink(); ?> "> <?php the_title(); ?></a></h1>

					<?php endwhile; else: ?>
					<?php endif; ?>	

							<div id="cat4-list">
								
								<ul>

									<?php query_posts('category_name=saude&offset=1&showposts=1'); ?>
									<?php if (have_posts()) : while(have_posts()) : the_post(); ?>

									<li>
										<a href="<?php the_Permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
										<h2><a href=" <?php the_Permalink(); ?> "> <?php the_title(); ?> </a></h2>
									</li>

									<?php endwhile; else: ?>
									<?php endif; ?>	
									
								</ul>

							</div>

				</div>

			</div> <!-- fim bloco -->

			
			<div id="bloco-cat5-6">
			
				<div id="categoria5">
					
					<div id="title-cat5"><span>Categoria 5</span></div>

					<?php query_posts('category_name=politica&offset=0&showposts=1'); ?>
					<?php if (have_posts()) : while(have_posts()) : the_post(); ?>

						<a href="<?php the_Permalink(); ?>"> <?php the_post_thumbnail(); ?></a>

							<div class="cat5-info">
								<ul>
									<li class="cat5-autor">  <?php the_author(); ?> </li>
									<li class="cat5-views"> <?php if(function_exists('the_views')) {the_views();} ?> </li>
									<li class="cat5-coment"> <?php comments_number('0','1','%'); ?> </li>
								</ul>
							</div>
							<h1><a href=" <?php the_Permalink(); ?> "> <?php the_title(); ?> </a></h1>

						<?php endwhile; else: ?>
						<?php endif; ?>	

							<div id="cat5-list">
								
								<ul>
				
									<?php query_posts('category_name=politica&offset=1&showposts=1'); ?>
									<?php if (have_posts()) : while(have_posts()) : the_post(); ?>

									<li>
										<a href="<?php the_Permalink(); ?>"> <?php the_post_thumbnail(); ?></a>

										<h2><a href=" <?php the_Permalink(); ?> "> <?php the_title(); ?> </a></h2>
									</li>

									<?php endwhile; else: ?>
									<?php endif; ?>	
									
								</ul>

							</div>
				</div>	

				<div id="categoria6">
					
					<div id="title-cat6"><span>Categoria 6</span></div>

						<?php query_posts('category_name=games&offset=0&showposts=1'); ?>
						<?php if (have_posts()) : while(have_posts()) : the_post(); ?>

						<a href="<?php the_Permalink(); ?>"> <?php the_post_thumbnail(); ?></a>

							<div class="cat6-info">
								<ul>
									<li class="cat6-autor"> <?php the_author(); ?> </li>
									<li class="cat6-views"> <?php if(function_exists('the_views')) {the_views();} ?> </li>
									<li class="cat6-coment"> <?php comments_number('0','1','%'); ?> </li>
								</ul>
							</div>
							<h1><a href=" <?php the_Permalink(); ?> "> <?php the_title(); ?> </a></h1>

						<?php endwhile; else: ?>
						<?php endif; ?>	

							<div id="cat6-list">
								
								<ul>
									
									<?php query_posts('category_name=games&offset=1&showposts=1'); ?>
									<?php if (have_posts()) : while(have_posts()) : the_post(); ?>

									<li>
										<a href="<?php the_Permalink(); ?>"> <?php the_post_thumbnail(); ?></a>

										<h2><a href=" <?php the_Permalink(); ?> "> <?php the_title(); ?> </a></h2>
									</li>
									
									<?php endwhile; else: ?>
									<?php endif; ?>	

								</ul>

							</div>

				</div>

			</div> <!-- fim bloco -->

				
		</div> <!-- fim content -->

<!--sidebar -->
<?php get_sidebar(); ?>


	</div> <!-- fim container -->

<!-- footer -->	
<?php get_footer(); ?>
		
	<?php wp_footer(); ?>	
	</body>

</html>