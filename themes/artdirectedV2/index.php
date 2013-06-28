<?php get_header(); ?>

		<section class="main_content">
			
			<div id="primary_col" class="blg_primary">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<section class="blg_post">
					<h3 class="blg_post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<p class="blg_post_meta">Posted <?php the_time('F j' . ',' . ' Y'); ?> // <?php the_category(', '); ?></p>
					<a href="<?php the_permalink(); ?>">
						<?php 
						if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
							the_post_thumbnail('full', array('class' => 'blg_post_img'));
						}
						?>
					</a>
					<div class="blg_post_content">
						<?php the_excerpt(); ?>
					</div><!-- end .blg_post_content -->
					<a href="<?php the_permalink(); ?>" class="button_1">Read More &raquo;</a>

					<hr />
				</section><!-- end .blg_post -->
				<?php endwhile; endif; ?>
				
				<div class="pagination">
					<a href="#" class="pg_newer inactive"><span class="aquo">&laquo;</span> Newer</a>
					<ul>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
					</ul>
					<a href="#" class="pg_older">Older <span class="aquo">&raquo;</span></a>
				</div><!-- end .pagination -->
							
			</div><!-- end #blg_primary -->

			<aside id="secondary_col" class="blg_aside">
				<section id="ftd_psts" class="aside_module">
					<h3 class="aside_header">Featured Posts</h3>
					<div class="ftd_post_preview">
						<h4 class="ftd_post_header">Eros interdum</h4>
						<p class="date">10/30/11</p>
						<p class="description">Morbi euismod magna ac lorem rutrum elementum. Donec viverra fringilla eu...</p>
						<a href="#" class="button_1">See More &raquo;</a>
					</div>
					<div class="ftd_post_preview">
						<h4 class="ftd_post_header">Phasellus quis est sed</h4>
						<p class="date">11/6/11</p>
						<p class="description">Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posuere...</p>
						<a href="#" class="button_1">See More &raquo;</a>
					</div>
					<div class="ftd_post_preview">
						<h4 class="ftd_post_header">Proin quis tortor orci. Etiam at risus et justo dignissim.</h4>
						<p class="date">11/10/11</p>
						<p class="description">Morbi malesuada nulla nec purus convallis consequat. Vivamus id mollis quam. Morbi ac commodo nulla. In condimentum orci id nisl volutpat bibendum. Quisque commodo hendrerit lorem quis egestas. Maecenas quis tortor arcu. Vivamus rutrum nunc non neque consectetur quis placerat neque lobortis.</p>
						<a href="#" class="button_1">See More &raquo;</a>
					</div>
				</section> <!-- end #ftd_psts -->

				<section id="recent_videos" class="aside_module">
					<h3 class="aside_header">Recent Videos</h3>
					<div class="recent_video_preview group">
						<img src="<?php bloginfo('template_url'); ?>/images/temp/recent_videos_small_thumb_1.jpg" class="recent_video_preview_thumb" alt="Video Preview Thumbnail" />
						<h4 class="recent_video_preview_header">Aliquam erat volutpat mauris...</h4>
						<p class="date">11/3/11</p>
					</div>
					<div class="recent_video_preview group">
						<img src="<?php bloginfo('template_url'); ?>/images/temp/recent_videos_small_thumb_2.jpg" class="recent_video_preview_thumb" alt="Video Preview Thumbnail" />
						<h4 class="recent_video_preview_header">Lorem ipsum dolor sit amet, u consectetur...</h4>
						<p class="date">11/23/11</p>
					</div>
					<div class="recent_video_preview group">
						<img src="<?php bloginfo('template_url'); ?>/images/temp/recent_videos_small_thumb_1.jpg" class="recent_video_preview_thumb" alt="Video Preview Thumbnail" />
						<h4 class="recent_video_preview_header">Sed auctor neque eu tellus rhoncus nulla...</h4>
						<p class="date">11/29/11</p>
					</div>
					<div class="recent_video_preview group">
						<img src="<?php bloginfo('template_url'); ?>/images/temp/recent_videos_small_thumb_3.jpg" class="recent_video_preview_thumb" alt="Video Preview Thumbnail" />
						<h4 class="recent_video_preview_header">Morbi malesuada nulla nec purus convallis consequat. Vivamus id mollis quam. Morbi ac commodo nulla. In condimentum orci id nisl volutpat bibendum. Quisque commodo hendrerit lorem quis egestas. Maecenas quis tortor arcu. Vivamus rutrum nunc non neque consectetur quis placerat neque lobortis.</h4>
						<p class="date">11/29/11</p>
					</div>
					
					<a href="#" class="button_1">View All &raquo;</a>
				</section> <!-- end #recent_videos -->

				<section class="twitter_aside last aside_module">
					<h3 class="aside_header">Folow Us On Twitter</h3>
					<div class="tweet group">
						<p class="tweet_content">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia clear, Proin vel ante a <span class="hash_tag">#orci</span>.</p>
						<p class="time_stamp">23 minutes ago</p>
					</div>
					<div class="tweet group">
						<p class="tweet_content">Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum.</p>
						<p class="time_stamp">2 hours ago</p>
					</div>
					<div class="tweet group">
						<p class="tweet_content">Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum.</p>
						<p class="time_stamp">2 hours ago</p>
					</div>
					<a href="#" class="button_1">Follow Me &raquo;</a>
				</section><!-- end #twitter_aside -->

				<section id="products_aside" class="aside_module">
					<h3 class="aside_header">Products On Sale</h3>
					<div class="product_preview group">
						<img src="<?php bloginfo('template_url'); ?>/images/temp/small_thumb_placeholder.jpg" class="product_preview_thumb" alt="Product Thumbnail" />
						<h4 class="product_preview_header">Morbi malesuada nulla nec purus convallis consequat. Vivamus id mollis quam. Morbi ac commodo nulla. In condimentum orci id nisl volutpat bibendum. Quisque commodo hendrerit lorem quis egestas. Maecenas quis tortor arcu. Vivamus rutrum nunc non neque consectetur quis placerat neque lobortis....</h4>
						<p class="date">11/3/11</p>
					</div>
					<div class="product_preview group">
						<img src="<?php bloginfo('template_url'); ?>/images/temp/small_thumb_placeholder.jpg" class="product_preview_thumb" alt="Product Thumbnail" />
						<h4 class="product_preview_header">Lorem ipsum dolor sit amet, u consectetur...</h4>
						<p class="date">11/23/11</p>
					</div>
					<div class="product_preview group">
						<img src="<?php bloginfo('template_url'); ?>/images/temp/small_thumb_placeholder.jpg" class="product_preview_thumb" alt="Product Thumbnail" />
						<h4 class="product_preview_header">Sed auctor neque eu tellus rhoncus nulla...</h4>
						<p class="date">11/29/11</p>
					</div>
					<div class="product_preview group">
						<img src="<?php bloginfo('template_url'); ?>/images/temp/small_thumb_placeholder.jpg" class="product_preview_thumb" alt="Product Thumbnail" />
						<h4 class="product_preview_header">Sed auctor neque eu tellus rhoncus nulla...</h4>
						<p class="date">11/29/11</p>
					</div>
					
					<a href="#" class="button_1">View All &raquo;</a>
				</section> <!-- end #recent_videos -->
			</aside>

		</section><!-- end .main_content -->

<?php get_footer(); ?>