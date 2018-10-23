/*
 * MGH Redesign Scripts
 * Version: 1.0.0
 *
 * Author: MGH
 * dev@mghus.com
 *
 * Changelog: 
 * Version: 1.0.0
 *  Init Build
 *
 */
var jobPositions = {};
$(document).ready(function() {
		
	// Menu Toggle
	$(".header .menu-btn").click(function(){
		if( $(this).hasClass("active") ){

			// Menu Button
			$(this).removeClass("active").text("MENU");
			
			// Menu UI
			$(".menu-unit ul").stop().fadeOut(function(){
				$(".menu-unit").stop().fadeOut(function(){
					$(this).removeClass("active");
				});
			});
			
			// Header UI
			$(".header").removeClass("inactive");
						
		} else {
			// Menu Button
			$(this).addClass("active").text("CLOSE");
			
			// Menu UI
			$(".menu-unit").stop().fadeIn(10, function(){
				$(this).addClass("active");
				$(".menu-unit ul").stop().delay(300).fadeIn();
			});
			
			// Header UI
			$(".header").removeClass("active");
			$(".header").addClass("inactive");
		}		
	});
	
	$(window).scroll(function(){
		if( $(window).scrollTop() > 400 && !$(".header").hasClass("inactive") ){
			$(".header").addClass("active");
		} else {
			$(".header").removeClass("active");
		}
	});
	




/*
	// Form placeholder logic
    $('input[type="text"], input[type="email"], textarea, input.sem-text').each(function(){
        $(this).attr('data-initValue', $(this).val());
    }).focus(function(){
        if( $(this).val() == $(this).attr('data-initValue') ){
            $(this).val('');
        }
    }).blur(function(){
        if( $(this).val() == '' ){
            $(this).val($(this).attr('data-initValue'));
        }
    });

	// Form Place Holder Validation
	$('form input[type="submit"]').click(function(){
		$('input[type="text"], textarea, input.sem-text').each(function(){
			if( $(this).val() == $(this).attr('data-initValue') ){
				$(this).val('');
			}
		});
		
		// Delay, then return labels
		setTimeout(function(){
			$('input[type="text"], textarea, input.sem-text').each(function(){
				if( $(this).val() == '' ){
					$(this).val($(this).attr('data-initValue'));
				}
			});
		}, 1000);
	});
*/



	$('input[type="text"], input[type="email"], textarea, input.sem-text').each(function(){
		$(this).attr('placeholder', $(this).val());
		$(this).val("");
	});

	$('select.custom-sel, .custom-sel select').selectBoxIt();

	// Fancybox
	$(".fancybox").fancybox({
		helpers:  {
			title : {
		    	type : 'inside'
		   	},
			overlay: {
				locked: true 
			}
		},
		beforeShow : function(){
	   		this.title =  $(this.element).data("caption");
	
			// Auto Init Videos
			if( $(".fancybox-inner video").size() > 0 ){
				$(".fancybox-inner .video-btn").trigger("click");
			}
	  	},
		fitToView : true,
   	 	autoSize : true,
		minWidth: 10,
		minHeight: 10
	});
	
	// Video
	$(".video-btn").click(function(){
		var video = $(this).parent().find("video")[0];
		
		if( video.paused == true ){
			// Play the video
			video.play();
			
			// Update UI
			$(this).addClass("active");
			
		} else {
			// Pause the video
			video.pause();
			
			// Update UI
			$(this).removeClass("active");
		}
	});
	
	$('video').on('ended',function(){
		$(this).parent().find(".video-btn").removeClass("active");
	});
	
	$(".category-menu").click(function(){
		$(".category-menu li").not(".disabled").slideToggle();
		$(".category-menu li").toggleClass("active");
	});
	
	// Careers Collapse
	$("ul.careers .toggle-btn, ul.careers h3").click(function(){
		if( $(this).parent().find('.toggle-btn').hasClass("active") ){
			$(this).parent().find('.toggle-btn').removeClass("active");
			$(this).parent().parent().removeClass("active");
			
		} else {
			$(this).parent().find('.toggle-btn').addClass("active");
			$(this).parent().parent().addClass("active");
		}
	});

	// Careers apply button auto url query
	$(".btn-generic[href='/careers/apply']").each(function() {
			$(this).attr("href","/careers/apply/?pos="+$(this).prevAll("h3").first().text().toLowerCase().split(" ").join("_"));
		});
	
	// careers prefill select box based on URL query
	$(".job-form select").first().find("option").each(function() { jobPositions[$(this).text().toLowerCase().split(" ").join("_")] = $(this).text(); });
	jobPositions["if_none_of_these_positions_fit_you..."] = "General Candidate";

	if ( jobSelected != "" ) { 
		if (jobPositions.hasOwnProperty(jobSelected)) {
				$(".job-form select").first().val(jobPositions[jobSelected]).change();
			}
		}

});