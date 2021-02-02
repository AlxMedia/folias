/*
	scripts.js
	
	License: GNU General Public License v3.0
	License URI: http://www.gnu.org/licenses/gpl-3.0.html
	
	Copyright: (c) 2013 Alexander "Alx" Agnarson, http://alx.media
*/

"use strict";

jQuery(document).ready(function($) {

/*  Toggle header search
/* ------------------------------------ */
	$('.toggle-search').on('click', function() {
		$('.toggle-search').toggleClass('active');
		$('.search-expand').fadeToggle(250);
            setTimeout(function(){
                $('.search-expand input').focus();
            }, 300);
	});

/*  Scroll to top
/* ------------------------------------ */
	$('a#back-to-top').on('click', function() {
		$('html, body').animate({scrollTop:0},'slow');
		return false;
	});
	
/*  Tabs widget
/* ------------------------------------ */	
	(function() {
		var $tabsNav       = $('.alx-tabs-nav'),
			$tabsNavLis    = $tabsNav.children('li'),
			$tabsContainer = $('.alx-tabs-container');

		$tabsNav.each(function() {
			var $this = $(this);
			$this.next().children('.alx-tab').stop(true,true).hide()
			.siblings( $this.find('a').attr('href') ).show();
			$this.children('li').first().addClass('active').stop(true,true).show();
		});

		$tabsNavLis.on('click', function(e) {
			var $this = $(this);

			$this.siblings().removeClass('active').end()
			.addClass('active');
			
			$this.parent().next().children('.alx-tab').stop(true,true).hide()
			.siblings( $this.find('a').attr('href') ).fadeIn();
			e.preventDefault();
		}).children( window.location.hash ? 'a[href="' + window.location.hash + '"]' : 'a:first' ).trigger('click');

	})();
	
/*  Comments / pingbacks tabs
/* ------------------------------------ */	
	$('.comment-tabs li').on('click', function() {
		$('.comment-tabs li').removeClass('active');
		$(this).addClass('active');
		$('.comment-tab').hide();
		var selected_tab = $(this).find('a').attr('href');
		$(selected_tab).fadeIn();
		return false;
	});

/*  Table odd row class
/* ------------------------------------ */
	$('table tr:odd').addClass('alt');

/*  Fitvids
/* ------------------------------------ */
	function responsiveVideo() {
			if ( $().fitVids ) {
				$('#wrapper').fitVids();
			}	
		}
		
	responsiveVideo();

/*  Slick featured posts
/* ------------------------------------ */
	$.fn.randomize = function (selector) {
		var $elems = selector ? $(this).find(selector) : $(this).children(),
			$parents = $elems.parent();

		$parents.each(function () {
			$(this).children(selector).sort(function (childA, childB) {
				// * Prevent last slide from being reordered
				if($(childB).index() !== $(this).children(selector).length - 0.5) {
					return Math.round(Math.random()) - 0.5;
				}
			}.bind(this)).detach().appendTo(this);
		});

		return this;
	};

	$(".slick-posts").randomize().slick({
	  centerMode: true,
	  centerPadding: '0',
	  slidesToShow: 1,
	  appendArrows: '.slick-posts-nav',
	});
	$('.slick-posts-wrap-outer').show();	

/*  Slick image slide
/* ------------------------------------ */	
	$('.slick-image-slide').each( function() {
        $( this ).slick( {
            dots: true,
			adaptiveHeight: true,
            appendArrows: $(this).parents('.slick-image-slide-wrapper').find('.slick-image-slide-nav'),
			appendDots: $(this).parents('.slick-image-slide-wrapper').find('.slick-image-slide-dots')
        } );
    } );
	
/*  Move sidebar
/* ------------------------------------ */
	$(window).on('load resize',function(){		
		if ($(window).width() < 960) {   
			$(".sidebar.s1").appendTo("#move-sidebar-content");
		}
		else {  
			$(".sidebar.s1").appendTo("#move-sidebar-header");
		}
	});
	
/*  Magic grid
/* ------------------------------------ */	
	let magicGrid = new MagicGrid({
        container: '.magic-grid',
        animate: true,
        gutter: 20,
        static: true,
        useMin: true
      });

      magicGrid.listen();
	
});