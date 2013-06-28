$(function() {
    
    // Main Nav Hover Action
    $('#main_nav .active').append('<span class="active_indicator"></span>');

    
    var active_page = $('.active')
    
    $('#main_nav li').hover(function() {
    
        $(active_page).children('.active_indicator').remove();
        $(this).append('<span class="active_indicator"></span>');

    },function() {
        
        $(".active_indicator").remove();
        $(active_page).append('<span class="active_indicator"></span>');
    
    });
    
    // Home content slider action
    var slider = $('.home_content_slider').bxSlider({
        controls: false,
        pager: false
    });
    
    $('.prev').click(function(){
        slider.goToPrevSlide();
        return false;
    });
    
    $('.next').click(function(){
        slider.goToNextSlide();
        return false;
    });
    
    // Home content slider hover effect
    
    function home_content_hover_effect() {

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

    }

    home_content_hover_effect();
    
    // Pro Tips slider function
    function activate_pro_tips_slider() {
    
        var pro_tips_slider_content = '<div class="home_content_slider_container" id="pro_tips_slider"> <h2>Pro Tips</h2> <a href="#" class="view_all">View All &raquo;</a> <img class="prev" src="images/prev_slide_arrow.jpg" alt="Prev" /> <div class="home_content_slider"> <div class="home_content_slide"> <div class="home_content_slide_sec"> <a href="#" class="slide_link"> <img class="slide_thumb" src="images/pro_tips_thumb_placeholder.jpg" alt=""/> <h5 class="slide_title">Winter Exercise</h5> </a> <p class="slide_caption"><strong>Exersice</strong> - Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus...</p> <a href="#" class="button_1">Read More &raquo;</a> </div><!-- end .slide_sec --> <div class="home_content_slide_sec"> <a href="#" class="slide_link"> <img class="slide_thumb" src="images/pro_tips_thumb_placeholder.jpg" alt=""/> <h5 class="slide_title">Balancing work &amp; health</h5> </a> <p class="slide_caption"><strong>Miscellaneous</strong> - Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus...</p> <a href="#" class="button_1">Read More &raquo;</a> </div><!-- end .slide_sec --> <div class="home_content_slide_sec last"> <a href="#" class="slide_link"> <img class="slide_thumb" src="images/pro_tips_thumb_placeholder.jpg" alt=""/> <h5 class="slide_title">When to change your plan!</h5> </a> <p class="slide_caption"><strong>Exersice</strong> - Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus...</p> <a href="#" class="button_1">Read More &raquo;</a> </div><!-- end .slide_sec --> </div><!-- end .home_content_slide --> </div><!-- end #home_content_slider --> <img class="next" src="images/next_slide_arrow.jpg" alt="Next" /> </div><!-- end #home_content_slider_container -->';
        
        $('.weekly_recipes_slider').replaceWith(pro_tips_slider_content);
        home_content_hover_effect();

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
        
    }
    
    $('.pro_tips_link').click(function() {
    
        activate_pro_tips_slider();
    
    });

    // This is for the secondary navigation on the about page
    var current_link = $('.secondary_nav #current')
    
    //$('.secondary_nav ul li a').hover(function () {
    //   
    //   $(current_link).removeAttr('id');
    //
    //},function() {
    //    
    //    $(current_link).attr('id', 'current');
    //
    //});

    $('.secondary_nav ul li').click(function () {

        $(this).attr('id', 'current');
        $('.secondary_nav ul li').not(this).removeAttr('id');

    });

    // Smooth Scroll Plugin
    $('a').smoothScroll();


    // Truncating Text Plugins
    $('.home_col h4').not('.home_recent_video_preview h4').shorten({
        width: 203,
        tail: '&hellip;',
        tooltip: false
    });

    $('.home_recent_video_preview h4').excerpt({
        end: '…',
        lines: 2
    });

    $('.home_col p.description').excerpt({
        end: '…',
        lines: 2
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

    $('.ftd_post_header').shorten({
        width: 186,
        tail: '&hellip;',
        tooltip: false
    });

    $('.ftd_post_preview .description').excerpt({
        end: '…',
        lines: 2
    });

    $('.cntct_aside .aside_email').shorten({
        width: 128,
        tail: '&hellip;',
        tooltip: false
    });

    $('.recent_video_preview_header').excerpt({
        end: '…',
        lines: 2
    });

    $('.product_preview_header').excerpt({
        end: '…',
        lines: 2
    });

    $('.blg_post_title a').excerpt({
        end: '…',
        lines: 2
    });

    // Cross Browser Compatibility Changes
    if($.browser.mozilla)
        {
            $('#main_nav li .active_indicator').css({"bottom" : "-19px"});
            $('#main_nav li').hover(function() {
                $('#main_nav li .active_indicator').css({"bottom" : "-19px"});
            }, function() {
                $('#main_nav li .active_indicator').css({"bottom" : "-19px"});
            });

            $('.slider_button_2_highlight').css({
                "right" : "-2px",
                "height" : "39px"
            });
        }
});