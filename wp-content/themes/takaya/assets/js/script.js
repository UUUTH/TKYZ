
// ANIMATION
function cssAnime() {
	$('.anime').each(function () {
		var elemPos = $(this).offset().top - 50;
		var scroll = $(window).scrollTop();
		var windowHeight = $(window).height();
		if (scroll >= elemPos - windowHeight) {
			$(this).addClass('is-animated');
		} else {
			//$(this).removeClass('start');
		}
	});
}
$(window).scroll(function () {
	cssAnime();
});
$(window).on('load', function () {
	cssAnime();
});

$(function(){
    
    //SCROLL
	$('a[href^="#"]').click(function () {
		let speed = 500;
		let href = $(this).attr("href");
		let target = $(href == "#" || href == "" ? 'html' : href);
		let position = target.offset().top;
		$("html, body").animate({
			scrollTop: position
		}, speed, "swing");
		return false;
	});
    
    //PAGETOP
	const topBtn = $("#pagetop");
	topBtn.hide();
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			topBtn.fadeIn();
		} else {
			topBtn.fadeOut();
		}
	});
	topBtn.click(function () {
		$("body,html").animate({
				scrollTop: 0,
			},
			500
		);
		return false;
	});
    
    //RELOAD
    var timer = false;
    var $winWidth = $(window).width();
    $(window).on('resize', function(){
        if (timer !== false) {
            clearTimeout(timer);
        }
        var $winWidthResize = $(window).width();
        timer = setTimeout(function() {
            if($winWidth !== $winWidthResize) {
                location.reload();
            }
        }, 200);
    });
    
    //PC
    if (window.matchMedia( "(min-width: 897px)" ).matches) {
        $('.li-service').hover(function () {
            $('.nav-service').fadeToggle();
            $('.nav-service').toggleClass('open');
        });
    }
    
    //SP
    if (window.matchMedia( "(max-width: 896px)" ).matches) {
        var state = false;
        var pos;
        $('#nav-toggle').click(function(){
            $("header").toggleClass('open');
            $(".nav-header").fadeToggle(500);
            if (state == false) {
                pos = $(window).scrollTop();
                $('body').addClass('fixed').css({'top': -pos});
                state = true;
            } else {
                $('body').removeClass('fixed').css({'top': 0});
                window.scrollTo(0, pos);
                state = false;
            }
        });
    }
    
});

//電話番号タップ解析
$('a[href^="tel:"]').on('click', function(e) {
  var self = $(this);
  var href = self.attr('href');
  var tel = href.replace('tel:', '');
  var label = self.attr('data-label');

  if (typeof gtag === 'function') {
    gtag(
      'event',
      'click',
      {
        'event_category': '電話番号',
        'event_label': label
      }
    );
  }
});
