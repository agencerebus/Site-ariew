(function ($, root, undefined) {

	$(function () {

		'use strict';

		init();

	});
	function init(){
		first_scroll();
		fixed_header();
		margin_top();
		copyright();
		absolute_center('#arrow');
		absolute_center('.calltoaction_text');
		absolute_center('.bloc_content5');
		details_toggle();
		slider_produit();
		click_produit();
		preco_resize();
		bullet_nav_post('.bullet-text');
		hover_home();
		var home_page = $('#home_bloc_2');
		if (home_page.length){
			nav_intern();
		}
	}
	$(window).resize(function() {
		preco_resize();
		fixed_header();
		margin_top();
		copyright();
		absolute_center('#arrow');
		absolute_center('.calltoaction_text');
		absolute_center('.bloc_content5');
	});
	function margin_top(){
		var height_1 = $('#home_bloc_intro').height();
		height_1 -=  $('.menu-home-wrapper').outerHeight();
		$('#home_bloc_2').css({'margin-top': height_1})
	}
	function hover_home(){
		$('#home_bloc_5 img').each(function(e){
    var src = $(this).attr('src');
    $(this).hover(function(){
      $(this).attr('src', src.replace('.png', '_hover.png'));
    }, function(){
      $(this).attr('src', src);
    });
  });
	}
	function first_scroll(){
		$("#arrow").click(function() {
			$('html, body').animate({
				scrollTop: $('#home_bloc_2').offset().top
			}, 500);
		});
	}
	function nav_intern(){
	if ($(this).scrollTop() <= $('#home_bloc_2').offset().top) {
       $('.bullet-nav').removeClass('bull-active');
		$('.bullet-nav[data-position="1"]').addClass('bull-active');
    }
		$('.bullet-nav').click(function(){
			var number = $(this).data("position");
			switch(number) {
				case 1:
				$('html, body').animate({
					scrollTop: $('body').offset().top
				}, 500);
				$('.bullet-nav').removeClass('bull-active');
				$(this).addClass('bull-active');
				break;
				case 2:
				$('html, body').animate({
					scrollTop: $('#home_bloc_2').offset().top
				}, 500);
				$('.bullet-nav').removeClass('bull-active');
				$(this).addClass('bull-active');
				break;
				case 3:
				$('html, body').animate({
					scrollTop: $('#home_bloc_3').offset().top
				}, 500);
				$('.bullet-nav').removeClass('bull-active');
				$(this).addClass('bull-active');
				break;
				case 4:
				$('html, body').animate({
					scrollTop: $('#home_bloc_4').offset().top
				}, 500);
				$('.bullet-nav').removeClass('bull-active');
				$(this).addClass('bull-active');
				break;

				case 5:
				$('html, body').animate({
					scrollTop: $('#home_bloc_5').offset().top
				}, 500);
				$('.bullet-nav').removeClass('bull-active');
				$(this).addClass('bull-active');
				break;
				case 6:
				$('html, body').animate({
					scrollTop: $('#home_bloc_6').offset().top
				}, 500);
				$('.bullet-nav').removeClass('bull-active');
				$(this).addClass('bull-active');
				break;

				default:

			}

		})
	$(window).scroll(function() {
	if ($(this).scrollTop() <= $('#home_bloc_2').offset().top) {
       $('.bullet-nav').removeClass('bull-active');
		$('.bullet-nav[data-position="1"]').addClass('bull-active');
    }
    if ($(this).scrollTop() >= ($('#home_bloc_2').offset().top)-250) {
       $('.bullet-nav').removeClass('bull-active');
		$('.bullet-nav[data-position="2"]').addClass('bull-active');
    }
    if ($(this).scrollTop() >= ($('#home_bloc_3').offset().top)-250) {
       $('.bullet-nav').removeClass('bull-active');
		$('.bullet-nav[data-position="3"]').addClass('bull-active');
    }
    if ($(this).scrollTop() >= ($('#home_bloc_4').offset().top)-250) {
       $('.bullet-nav').removeClass('bull-active');
		$('.bullet-nav[data-position="4"]').addClass('bull-active');
    }
    if ($(this).scrollTop() >= ($('#home_bloc_5').offset().top)-250) {
       $('.bullet-nav').removeClass('bull-active');
		$('.bullet-nav[data-position="5"]').addClass('bull-active');
    }
    if ($(this).scrollTop() >= ($('#home_bloc_6').offset().top)-250) {
       $('.bullet-nav').removeClass('bull-active');
		$('.bullet-nav[data-position="6"]').addClass('bull-active');
    }
	});

	}

	function absolute_center(el){
		elW = $(el).width();
		$(el).css({'margin-left': -elW/2})
	}
	function fixed_header(){
		var height = $(window).height();
		height -= $('.menu-home-wrapper').outerHeight();;
		$(window).scroll(function() {
			if ($(this).scrollTop() >= height){
				$('.menu-home-wrapper').addClass("fixedmenu");
			} else {
				$('.menu-home-wrapper').removeClass("fixedmenu");
			}

		});
	}
	function copyright(){
		var genWidth = $('body').width();
		if ( genWidth <= 992){
			$('#copyright').insertAfter('.socials');
		}
	}
	function preco_resize(){
		var genWidth = $('body').width();
		if ( genWidth <= 768){
			$('#form_preco').removeClass('medium-6').addClass('medium-12');
		}
	}
	function details_toggle(){
		$('#depassement').click(function(){
			$('#details2, #details3').hide();
			$('#details1').fadeIn('slow').show();
		})
		$('#plaisir').click(function(){
			$('#details1, #details3').hide();
			$('#details2').fadeIn('slow').show();
		})
		$('#communaute').click(function(){
			$('#details1, #details2').hide();
			$('#details3').fadeIn('slow').show();
		})
	}
	function slider_produit(){
		$('#li-elegance').click(function(){
			$('.li-active').removeClass('li-active');
			$(this).addClass('li-active');
			$('#img_free').hide();
			$('#img_defi').hide();
			$('#img_poursuite').hide();
			$('#img_montre').hide();
			$('.defi_wrapper').hide();
			$('.free_wrapper').hide();
			$('.montre_wrapper').hide();
			$('.poursuite_wrapper').hide();
			$('#img_elegance').fadeIn('slow').show();
			$('.elegance_wrapper').fadeIn('slow').show();
		})
		$('#li-free').click(function(){
			$('.li-active').removeClass('li-active');
			$(this).addClass('li-active');
			$('#img_elegance').hide();
			$('#img_defi').hide();
			$('#img_poursuite').hide();
			$('#img_montre').hide();
			$('.elegance_wrapper').hide();
			$('.poursuite_wrapper').hide();
			$('.defi_wrapper').hide();
			$('.montre_wrapper').hide();
			$('#img_free').fadeIn('slow').show();
			$('.free_wrapper').fadeIn('slow').show();
		})
		$('#li-poursuite').click(function(){
			$('.li-active').removeClass('li-active');
			$(this).addClass('li-active');
			$('#img_free').hide();
			$('#img_elegance').hide();
			$('#img_defi').hide();
			$('#img_montre').hide();
			$('.free_wrapper').hide();
			$('.elegance_wrapper').hide();
			$('.defi_wrapper').hide();
			$('.montre_wrapper').hide()
			$('#img_poursuite').fadeIn('slow').show();
			$('.poursuite_wrapper').fadeIn('slow').show();
		})
		$('#li-defi').click(function(){
			$('.li-active').removeClass('li-active');
			$(this).addClass('li-active');
			$('#img_free').hide();
			$('#img_elegance').hide();
			$('#img_poursuite').hide();
			$('#img_montre').hide();
			$('.free_wrapper').hide();
			$('.poursuite_wrapper').hide();
			$('.elegance_wrapper').hide();
			$('.montre_wrapper').hide();
			$('#img_defi').fadeIn('slow').show();
			$('.defi_wrapper').fadeIn('slow').show();
		})
		$('#li-montre').click(function(){
			$('.li-active').removeClass('li-active');
			$(this).addClass('li-active');
			$('#img_free').hide();
			$('#img_elegance').hide();
			$('#img_poursuite').hide();
			$('#img_defi').hide();
			$('.free_wrapper').hide();
			$('.poursuite_wrapper').hide();
			$('.elegance_wrapper').hide();
			$('.defi_wrapper').hide();
			$('#img_montre').fadeIn('slow').show();
			$('.montre_wrapper').fadeIn('slow').show();
		})
	}
	function click_produit(){
		$('.circle1').click(function (){
			$('#haute_def_title').hide();
			$('#haute_def_content').hide();
			$('#capacite_title').hide();
			$('#capacite_content').hide();
			$('#immersion_title').fadeIn('slow').show();
			$('#immersion_content').fadeIn('slow').show();
		})
		$('.circle2').click(function (){
			$('#haute_def_title').hide();
			$('#haute_def_content').hide();
			$('#immersion_title').hide();
			$('#immersion_content').hide();
			$('#capacite_title').fadeIn('slow').show();
			$('#capacite_content').fadeIn('slow').show();
		})
		$('.circle3').click(function (){
			$('#immersion_title').hide();
			$('#immersion_content').hide();
			$('#capacite_title').hide();
			$('#capacite_content').hide();
			$('#haute_def_title').fadeIn('slow').show();
			$('#haute_def_content').fadeIn('slow').show();
		})
	}
	function bullet_nav_post(el){
		$(el).each(function() {
			elW = $(this).width();
			$(this).css({'margin-left': - elW})
	});
	}


})(jQuery, this);
