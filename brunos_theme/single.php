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

			<div class="main-single">
				
				<div id="title-single"><span> <?php the_title(); ?> </span></div>


				<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

					<p> <?php the_content(); ?> </p>

				<?php endwhile; else: ?>
				<?php endif; ?>	

			<div class="author">
				<?php if (function_exists('get_avatar') ) {
					echo get_avatar( get_the_author_email(), '80' );
				} ?>
				<div>
					<h3> <?php the_author_posts_link(); ?> </h3>
					<p> <?php the_author_description(); ?> </p>
				</div>
			</div>

			<div class="comentarios">
				<?php comments_template(); ?>
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