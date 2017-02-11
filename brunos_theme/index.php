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
				Destaque
			</div>

			<div id="categoria1">
				Categoria 1
			</div>

			<div id="categoria2">
				Categoria 2
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

	<!-- footer -->	
	<?php get_footer(); ?>

	
	<?php wp_footer(); ?>

	</div> <!-- fim container -->
	</body>

</html>