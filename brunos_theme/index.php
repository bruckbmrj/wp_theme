<!DOCTYPE html>
<html <?php language_attributes()?> >
<head>
	<meta charset="<?php bloginfo('charset') ?>" />
	<title><?php wp_title('-',true,'right'); bloginfo() ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/style.css" />

<?php wp_head(); ?>
</head>	
	<body>

	<div id="header">
		
		<div id="header-superior">
			<div id="header-superior-content">
				<div id="header-paginas">
					Header Paginas
				</div>

				<div id="header-social">
					Header Social
				</div>

			</div>
		</div>

		<div id="header-contet">
			<div id="logo">
				Logo
			</div>

			<div id="login">
				Login
			</div>

			<div id="search">
				Search
			</div>
		</div>

		<div id="nav">
			<div id="nav-content">
				Barra de navegação
			</div>
		</div> 

	</div> <!-- Fim header -->

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

		<div id="sidebar">
			<div id="sidebar-vistos">
				mais vistos
			</div>
			
			<div id="sidebar-categoria1">
				categoria 1
			</div>

			<div id="sidebar-publicidade">
				Publicidade
			</div>

			<div id="sidebar-categoria2">
				categoria 2
			</div>

			<div id="sidebar-facebook">
				Facebook
			</div>

		</div> <!-- fim da sidebar -->


	</div> <!-- fim container -->

	<div id="footer">
		
		<div id="footer-content">
			<div id="footer-bio">
			Sobre nós
			</div>

			<div id="footer-pages">
			Paginas
			</div>

			<div id="footer-posts">
			Posts Recentes
			</div>

			<div id="footer-social">
			Social
			</div>
		</div> <!-- fim footer -->

		<div id="footer-info">
			Copyright
		</div><!-- fim footer info -->
	</div>
		
	<?php wp_footer(); ?>	
	</body>

</html>