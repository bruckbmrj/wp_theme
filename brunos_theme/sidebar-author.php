			<div id="sidebar-colunistas">
				<div id="title-colunistas">
					<span>Colunistas</span>	
				</div>
				<div class="colunistas">
					
					<ul>

						<?php $author='1'; ?>
						<li>
							<?php echo get_avatar($author,70); ?>
							<h1><a href=" <?php bloginfo('url'); ?>/?author=<?php echo $author; ?> ">
							<?php $user_info = get_userdata($author); echo ($user_info->first_name ." ". $user_info->last_name. "\n") ?>
							</a></h1>

							<div class="info-colunistas">
								<ul>
									<li>
										<a href="#"> <img src="<?php bloginfo('template_url'); ?>/images/facebook.png" title="" alt=""></a>
									</li>
									<li>
										<a href="#"> <img src="<?php bloginfo('template_url'); ?>/images/google+.png" title="" alt=""></a>
									</li>
									<li>
										<a href="#"> <img src="<?php bloginfo('template_url'); ?>/images/twitter.png" title="" alt=""></a>
									</li>
									<li>
										<a href="#"> <img src="<?php bloginfo('template_url'); ?>/images/youtube.png" title="" alt=""></a>
									</li>
								</ul>
							</div>

						</li>

							<?php $author='3'; ?>
						<li>
							<?php echo get_avatar($author,70); ?>
							<h1><a href="<?php bloginfo('url'); ?>/?author=<?php echo $author; ?>"><?php $user_info = get_userdata($author); echo ($user_info->first_name ." ". $user_info->last_name. "\n") ?>
							</a></h1>

							<div class="info-colunistas">
								<ul>
									<li>
										<a href="#"> <img src="<?php bloginfo('template_url'); ?>/images/facebook.png" title="" alt=""></a>
									</li>
									<li>
										<a href="#"> <img src="<?php bloginfo('template_url'); ?>/images/google+.png" title="" alt=""></a>
									</li>
									<li>
										<a href="#"> <img src="<?php bloginfo('template_url'); ?>/images/twitter.png" title="" alt=""></a>
									</li>
									<li>
										<a href="#"> <img src="<?php bloginfo('template_url'); ?>/images/youtube.png" title="" alt=""></a>
									</li>
								</ul>
							</div>

						</li>

					</ul>

				</div>
			</div> <!-- fim colunistas -->