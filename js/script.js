var $ = require("jquery");


// =============================================
// ヒーローバナー
// =============================================
var pic_change = (function(){
	var $pic = $('.js-size-change');
	var picNum = $('.js-size-change').length;
	var currentPicNum = 1;
	
	return{
		nextPic: function(){
			if (currentPicNum < picNum) {
				$pic.eq(currentPicNum - 2).removeClass('is-active');
				$pic.eq(currentPicNum - 1).addClass('is-active');
				currentPicNum++;
			}else if(currentPicNum === picNum){
				$pic.eq(currentPicNum - 2).removeClass('is-active');
				$pic.eq(currentPicNum - 1).addClass('is-active');
				currentPicNum = 1;
			}
		},
		init: function(){
			$pic.eq(0).addClass('is-active');
			currentPicNum++;
		}
	}
})();

window.onload = function(){
	pic_change.init();
}

var changeStart = (function(){
	window.setInterval(pic_change.nextPic, 4000);
})();

// =============================================
// ヘッダー 
// =============================================
var targetHeight = $(window).height();

$(window).on('scroll', function(){
	$('.js-header').toggleClass('is-active', $(this).scrollTop() > targetHeight);

});

// =============================================
// セクションリンク
// =============================================
var link = (function(){
	var $destination = $('.js-link');

	return{
		linkJump: function(){
			$destination.on('click',function(){
				var getClass = $(this).attr("class");
				var classArray = getClass.split(" ");
				var targetHeight = $("section" + '.' + classArray[1]).offset().top;
				
				if(classArray[1] === 'js-top-link'){
					$("html").animate({
						scrollTop: 0
					},500);
				}else{
					$("html").animate({
						scrollTop: targetHeight
					},500);
				}
			});
		}
	}

})();

link.linkJump();

// =============================================
// ハンバーガー
// =============================================
var burger = (function(){
	var $hamburger = $('.js-hamburger');
	var $header = $('.js-header-right');
	var $link = $('.js-link');

	return {
		burgerLink: function(){
			$hamburger.on('click', function(){
				$hamburger.toggleClass('active');
				$header.toggleClass('active');
			});
		},
		pushLink: function(){
			$link.on('click', function(){
				$hamburger.toggleClass('active');
				$header.toggleClass('active');
			});
		}
	}
})();
burger.burgerLink();
burger.pushLink();

// =============================================
// メッセージ 
// =============================================
$(window).on('scroll', function(){
	if ($(this).scrollTop() > targetHeight / 3 * 2) {
		// ここから文字を<span></span>で囲む記述
		$('.js-message').contents().each(function() {
			if (this.nodeType == 3) {
			  $(this).replaceWith($(this).text().replace(/(\S)/g, '<span>$1</span>'));
			}
		  });
		  
		// ここから一文字ずつフェードインさせる記述
		$('.js-message').css({'opacity':1});
		
		for (var i = 0; i <= $('.js-message').children().length; i++) {
		  $('.js-message').children('span:eq('+i+')').delay(80*i).animate({'opacity':1},0);
		  if (i === $('.js-message').children().length) {
			$('.js-person').delay(80*i+500).animate({
				'opacity': 1
			}, 1500);
		  }
		};

	}
});

// =============================================
// セクションフェードイン
// =============================================
//intro
var $introBody = $('.js-intro-body');
var introHeight = $('.js-intro').offset().top;
var $blog = $('.js-blog');
var blogHeight = $('.js-blog-height').offset().top;
var $portfolio = $('.js-portfolio');
var portfolioHeight = $('.js-portfolio-height').offset().top;
var $skill = $('.js-skill');
var skillHeight = $('.js-skill-height').offset().top;
var $contact = $('.js-contact');
var contactHeight = $('.js-contact-height').offset().top;
var height = $(window).height();

$(window).on('scroll', function(){
	if ($(this).scrollTop() > introHeight - height/2) {
		$introBody.addClass('move');
	}
});

$(window).on('scroll', function(){
	if ($(this).scrollTop() > blogHeight - height/2) {
		$blog.addClass('move');
	}
});

$(window).on('scroll', function(){
	if ($(this).scrollTop() > portfolioHeight - height/2) {
		$portfolio.addClass('move');
	}
});

$(window).on('scroll', function(){
	if ($(this).scrollTop() > skillHeight - height/2) {
		$skill.addClass('move');
	}
});

$(window).on('scroll', function(){
	if ($(this).scrollTop() > contactHeight - height/2) {
		$contact.addClass('move');
	}
});


// =============================================
// スライド
// =============================================
var slider = (function(){
	var $leftButton = $('.js-left-button');
	var $rightButton = $('.js-right-button');
	var $allSlide = $('.js-slides');
	var duration = 500;
	var width = $('.js-slide').width();
	var len = $('.js-slide').length;
	var screenLen = $(window).width();
	var count = 0;
	
	return{
		slidePrev: function(){
			$allSlide.animate({left: '+=' + width + 'px'}, duration);
		},
		slideNext: function(){
			$allSlide.animate({left: '-=' + width + 'px'}, duration);
		},
		init: function(){
			var that = this;
			$leftButton.css('display', 'none');

			$leftButton.on('click', function(){
				that.slidePrev();
				$rightButton.css('display', 'block');
				count--;
				if (count === 0) {
					$leftButton.css('display', 'none');
				}else if (count !== 0) {
					$leftButton.css('display', 'block');
				}
			});
			$rightButton.on('click', function(){
				that.slideNext();
				$leftButton.css('display', 'block');
				count++;
				if (count === len - 2 && screenLen > 414) {
					$rightButton.css('display', 'none');
				}else if (count !== len - 2 && screenLen > 414) {
					$rightButton.css('display', 'block');
				}else if (count === len - 1 && screenLen <= 414) {
					$rightButton.css('display', 'none');
				}else if (count !== len - 1 && screenLen <= 414) {
					$rightButton.css('display', 'block');
				}
			});
		}
	}
})();

slider.init();

// =============================================
// メーター
// =============================================
var $meter = $('.js-skill-meter');

$(window).on('scroll', function(){
	if ($(this).scrollTop() > skillHeight - height/5) {
		$meter.addClass('move');
	}
});