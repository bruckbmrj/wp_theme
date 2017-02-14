<!DOCTYPE html>
<html <?php language_attributes()?> >
<head>
	<meta charset="<?php bloginfo('charset') ?>" />
	<title><?php wp_title('-',true,'right'); bloginfo() ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/style.css" />

<?php wp_head(); ?>
</head>	
	<body>

<!-- header -->
<?php get_header(); ?>

	<div id="container">

		<div id="content">
			<div id="destaque">
				
				<div class="destaque-post">
					<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/post.jpg" rel="" title="" alt="" /></a>
					<div class="destaque-info">
						<ul>
							<li class="dest-autor">Autor</li>
							<li class="dest-views">Views</li>
							<li class="dest-coment">Coments</li>
						</ul>
					</div>
					<h1><a href="#">Titulo aleatório 1</a></h1>

					<div class="list-dest">
						<ul>
							<li>
								<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/post2.jpg" rel="" title="" alt=""/> </a>
								<h2><a href="#">Titulo aleatorio: o segundo para testes</a></h2>
							</li>

							<li>
								<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/post2.jpg" rel="" title="" alt=""> </a>
								<h2><a href="#">Titulo aleatório: o terceiro teste no tema.</a></h2>
							</li>
						</ul>
					</div>
				</div> <!-- fim destaque post -->

				<div class="destaque-post right">
					<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/post.jpg" rel="" title="" alt="" /></a>
					<div class="destaque-info">
						<ul>
							<li class="dest-autor">Autor</li>
							<li class="dest-views">Views</li>
							<li class="dest-coment">Coments</li>
						</ul>
					</div>
					<h1><a href="#">Titulo aleatório 1</a></h1>

					<div class="list-dest">
						<ul>
							<li>
								<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/post2.jpg" rel="" title="" alt=""/> </a>
								<h2><a href="#">Titulo aleatorio: o segundo para testes</a></h2>
							</li>

							<li>
								<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/post2.jpg" rel="" title="" alt=""> </a>
								<h2><a href="#">Titulo aleatório: o terceiro teste no tema.</a></h2>
							</li>
						</ul>
					</div>
				</div> <!-- fim destaque post -->


			</div> <!-- fim destaque -->

			<div id="categoria1">
				<div id="title-cat1"><span>CATEGORIA 1</span></div>
				<div class="post-1">
					
					<a href="#"><img src="<?php bloginfo('template_url') ?>/images/post.jpg" rel="" title="" alt=""></a>
					<h1><a href="#">Titulo de exemplo</a></h1>

					<div class="cat1-info">
						<ul>
							<li class="cat1-autor">autor</li>
							<li class="cat1-views">views</li>
							<li class="cat1-coment">coment</li>
						</ul>
					</div>

					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque maxime odio, ratione repudiandae nobis? </p>

				</div>

				<div class="post-1">
					
					<a href="#"><img src="<?php bloginfo('template_url') ?>/images/post.jpg" rel="" title="" alt=""></a>
					<h1><a href="#">Titulo de exemplo</a></h1>

					<div class="cat1-info">
						<ul>
							<li class="cat1-autor">autor</li>
							<li class="cat1-views">views</li>
							<li class="cat1-coment">coment</li>
						</ul>
					</div>

					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque maxime odio, ratione repudiandae nobis? </p>

				</div>

			</div>

			<div id="categoria2">
				
				<div id="title-cat2"><span>CATEGORIA 2</span></div>

				<div class="post-2">
					
					<a href="#"><img src="<?php bloginfo('template_url') ?>/images/post3.jpg" rel="" title="" alt=""></a>
					<h1><a href="#">Titulo de exemplo 2</a></h1>

					<div class="cat2-info">
						<ul>
							<li class="cat2-autor">autor</li>
							<!-- <li class="cat2-views">views</li> -->
							<li class="cat2-coment">coment</li>
						</ul>
					</div>

					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit eos eveniet possimus iusto cum magnam dolore aperiam saepe. </p>

				</div>

				<div class="post-2">
					
					<a href="#"><img src="<?php bloginfo('template_url') ?>/images/post3.jpg" rel="" title="" alt=""></a>
					<h1><a href="#">Titulo de exemplo 2</a></h1>

					<div class="cat2-info">
						<ul>
							<li class="cat2-autor">autor</li>
							
							<li class="cat2-coment">coment</li>
						</ul>
					</div>

					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit eos eveniet possimus iusto cum magnam dolore aperiam saepe. </p>

				</div>

				<div class="post-2">
					
					<a href="#"><img src="<?php bloginfo('template_url') ?>/images/post3.jpg" rel="" title="" alt=""></a>
					<h1><a href="#">Titulo de exemplo 2</a></h1>

					<div class="cat2-info">
						<ul>
							<li class="cat2-autor">autor</li>
							
							<li class="cat2-coment">coment</li>
						</ul>
					</div>

					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit eos eveniet possimus iusto cum magnam dolore aperiam saepe. </p>

				</div>

			</div>

			<div id="categoria3">
				Categoria 3
			</div>	

			<div id="categoria4">
				Categoria 4
			</div>

			<div id="categoria5">
				Categoria 5
			</div>	

			<div id="categoria6">
				Categoria 6
			</div>

			<div id="categoria7">
				Categoria 7
			</div>					
		</div> <!-- fim content -->

<!--sidebar -->
<?php get_sidebar(); ?>


	</div> <!-- fim container -->

<!-- footer -->	
<?php get_footer(); ?>
		
	<?php wp_footer(); ?>	
	</body>

</html>