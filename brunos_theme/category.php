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

			<div class="main-category">
				
				<div id="title-category"><span> <?php single_cat_title(); ?> </span></div>
			
				<ul>
					<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
					<li>
						<a href="<?php the_Permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
						<span> Visualizações <?php if(function_exists('the_views')) {the_views();} ?> | Comentários <?php comments_number('0','1','%'); ?> </span>
						<h1> <a href=" <?php the_Permalink(); ?> "> <?php the_title(); ?> </a> </h1>
						<p> <?php the_excerpt_rereloaded(25,"Veja Mais"); ?> </p>
					</li>
					<?php endwhile; else: ?>
					<?php endif; ?>	
				</ul>

				<div class="list-post">
					<?php wp_pagenavi(); ?>
				</div>

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