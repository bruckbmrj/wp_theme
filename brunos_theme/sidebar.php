		<div id="sidebar">

			<div id="sidebar-vistos">

				<div id="title-vistos"><span>Posts Mais vistos</span></div>

				<?php if (function_exists('get_most_viewed')) : ?>

				<ul>

					<li>
					
					<?php get_most_viewed('post',5); ?>
					</li>

				<?php endif; ?>

				</ul>

			</div>
			
			<!-- lista colunistas -->
			<?php include_once("sidebar-author.php"); ?>


			<div id="sidebar-publicidade">
				<div id="title-publi"><span>Publicidade</span></div>

				<ul>
					<li class="publi-maior">Publicidade Maior</li>
					<li class="publi-left">Publicidade left</li>
					<li class="publi-right">Publicidade right</li>	
				</ul>

			</div> <!-- fim publicidade -->

			<div id="sidebar-coment">

				<div id="title-coment"><span>Mais Comentados</span></div>

				<ul>
					
					<?php $result = $wpdb->get_results("SELECT comment_count,ID,post_title FROM $wpdb->posts ORDER BY comment_count DESC LIMIT 0 , 5");
						foreach($result as $post){
							setup_postdata($post);
							$postid = $post->ID;
							$title = $post->post_title;
							$commentcount = $post->comment_count;
							if($commentcount != 0) { ?> 
						 
					
					<li>
					<span class="coment-number"> <?php $i = $i; $i++; echo $i ?></span>
					<a href=" <?php the_permalink(); ?> "><?php echo $title; ?>(<?php echo $commentcount; ?>) </a>
					</li>

					<?php } ?>
					<?php } ?>

				</ul>

			</div> <!-- fim comentários -->

			<div id="sidebar-facebook">
				<div id="title-facebook"><span>Facebook</span></div>
				
				<div id="face-box">
				<div class="fb-page" data-href="https://www.facebook.com/viladosite/" data-tabs="like" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/viladosite/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/viladosite/">Vila do Site</a></blockquote></div>
				</div>

			</div>

		</div> <!-- fim da sidebar -->