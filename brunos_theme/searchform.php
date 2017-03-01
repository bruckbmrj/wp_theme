
		<form action=" <?php bloginfo('home'); ?>/ " method="post">
			<input type="text" name="s" id="s" placeholder="Digite sua pesquisa" value=" <?php the_search_query(); ?> ">
					<input type="submit" value="" class="btn-search" name="">
		</form>
