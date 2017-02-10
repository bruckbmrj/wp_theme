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
		
	<?php wp_footer(); ?>	
	</body>

</html>