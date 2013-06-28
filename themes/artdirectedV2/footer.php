</div> <!-- end #container div -->
<footer>
	<div id="footer_inner">
		<h1 id="logo">Golden Health & Fitness</h1>
		
		<small id="copyright_info">Copyright &copy; 2011 Golden Health &amp; Fitness</small>
		
		<nav id="footer_links">
			<ul>
				<li class="has_seps">| <a href="about.php">About</a> |</li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
		
		<ul class="social_links">
			<li><a href="#" class="facebook_link">Facebook</a></li>
			<li><a href="#" class="twitter_link">Twitter</a></li>
			<li><a href="#" class="linkedin_link">LinkedIn</a></li>
			<li><a href="#" class="youtube_link">Youtube</a></li>
			<li><a href="#" class="skype_link">Skype</a></li>
		</ul>
	</div><!-- end #footer_inner -->
</footer>

<script src="<?php bloginfo('template_url'); ?>/js/bxslider.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.smooth-scroll.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.scrollTo.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.shorten.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.excerpt.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.jtruncate.packjs.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
<?php if($page="home") {?>
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.nivo.slider.js" type="text/javascript"></script>
	<script>
		//Nivo Slider Activation
	    $('#slider').nivoSlider({
	    
	        directionNav: false, // Next & Prev navigation
	        controlNavThumbsSearch: '../images/slide_indicator_sprite.jpg', // Replace this with...
	        captionOpacity: 1
	    
	    });
	</script>
<?php }?>

<?php if($_GET['pro_tips'] == 1) {?>

<script type="text/javascript">
	var pro_tips_slider_content = '<div class="home_content_slider_container" id="pro_tips_slider"> <h2>Pro Tips</h2> <a href="#" class="view_all">View All &raquo;</a> <img class="prev" src="images/prev_slide_arrow.jpg" alt="Prev" /> <div class="home_content_slider"> <div class="home_content_slide"> <div class="home_content_slide_sec"> <a href="#" class="slide_link"> <img class="slide_thumb" src="images/pro_tips_thumb_placeholder.jpg" alt=""/> <h5 class="slide_title">Winter Exercise</h5> </a> <p class="slide_caption"><strong>Exersice</strong> - Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus...</p> <a href="#" class="button_1">Read More &raquo;</a> </div><!-- end .slide_sec --> <div class="home_content_slide_sec"> <a href="#" class="slide_link"> <img class="slide_thumb" src="images/pro_tips_thumb_placeholder.jpg" alt=""/> <h5 class="slide_title">Balancing work &amp; health</h5> </a> <p class="slide_caption"><strong>Miscellaneous</strong> - Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus...</p> <a href="#" class="button_1">Read More &raquo;</a> </div><!-- end .slide_sec --> <div class="home_content_slide_sec last"> <a href="#" class="slide_link"> <img class="slide_thumb" src="images/pro_tips_thumb_placeholder.jpg" alt=""/> <h5 class="slide_title">When to change your plan!</h5> </a> <p class="slide_caption"><strong>Exersice</strong> - Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus...</p> <a href="#" class="button_1">Read More &raquo;</a> </div><!-- end .slide_sec --> </div><!-- end .home_content_slide --> </div><!-- end #home_content_slider --> <img class="next" src="images/next_slide_arrow.jpg" alt="Next" /> </div><!-- end #home_content_slider_container -->';
        
        $('.weekly_recipes_slider').replaceWith(pro_tips_slider_content);
        
        $('.home_content_slide a.slide_link').hover(function() {
        
            $(this).children('.slide_title').addClass('active');
        
        },function() {
        
            $(this).children('.slide_title').removeClass('active');
        
        });
        
        $('#footer_inner .social_links a').hover(function() {
            
            $('#footer_inner .social_links a').stop().fadeTo(200, .5);
            $(this).stop().fadeTo(1, 1);

        },function() {
            
            $('#footer_inner .social_links a').stop().fadeTo(200, 1);

        });

        $('.home_content_slider .slide_title').excerpt({
            end: '…',
            lines: 1
        });

        $('.home_content_slider .slide_caption').jTruncate({  
            length: 100,  
            minTrail: 0,  
            moreText: '',  
            lessText: '',  
            ellipsisText: "…"
        });

        $.scrollTo('.home_content_slider_container', {easing:'linear'});

</script>

<?php }?>
<?php wp_footer(); ?>

<!--D.(Golden)-->
</body>
</html>