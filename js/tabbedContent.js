//tab effects

var TabbedContent = {

	init: function() {
		var x = new Boolean(true);
		jQuery(".tab_item").mouseover(function() {

			if (x==true)
			  {
			  jQuery('.slide_content').slideToggle('slow')
			  jQuery('.tabs .moving_bg').fadeIn(1000)
			  jQuery('.tabs .moving_bg').animate({ opacity: 1}, 1000)
			  x = false;
			  }

			var background = jQuery(this).parent().find(".moving_bg");

			jQuery(background).stop().animate({
				left: jQuery(this).position()['left']
			}, {
				duration: 300
			});

			TabbedContent.slideContent(jQuery(this));

		});

		jQuery("#contenido-pelicula-player").mouseover(function() {

			if (x==false)
			  {
			  jQuery('.slide_content').slideToggle('slow')
			  jQuery('.tabs .moving_bg').fadeOut(1000)
			  jQuery('.tabs .moving_bg').animate({ opacity: 0}, 1000)
			  x = true;
			  }

		});

		jQuery("#salida").mouseover(function() {

			if (x==false)
			  {
			  jQuery('.slide_content').slideToggle('slow')
			  jQuery('.tabs .moving_bg').fadeOut(1000)
			  jQuery('.tabs .moving_bg').animate({ opacity: 0}, 1000)
			  x = true;
			  }

		});

	},

	slideContent: function(obj) {

		var margin = jQuery(obj).parent().parent().find(".slide_content").width();
		margin = margin * (jQuery(obj).prevAll().size() - 1);
		margin = margin * -1;

		jQuery(obj).parent().parent().find(".tabslider").stop().animate({
			marginLeft: margin + "px"
		}, {
			duration: 300
		});
	}
}

jQuery(document).ready(function($){
	TabbedContent.init();
});
