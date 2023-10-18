/**************
maskedinput START
**************/
jQuery(function($) {
 $(document).ready(function() {
     var x = {
                 rules: {
                     user_name: {
                         required: true,
                         minlength: 2
                     },
                     user_email: {
                         required: true,
                         email: true
                     },
                     user_phone: {
                         required: true,
                         minlength: 18
                     }


                 },
                 errorPlacement: function(error, element){},
             };

     $("#questions__form").validate(x);
     $("#ration__form").validate(x);
     $("#popup__form").validate(x);
 });


 $('input[type="tel"]').mask("?+7 (999) 999-99-99", {autoclear: false});


  
  /*
  * Select ration.
  */
  
  $('.ration__tab:not(:last-child)').on('click', function(){
	  var selectedRation = $(this).find('.ration__name').text();
	  $('input[name="ration-view"]').val(selectedRation);
  });
  
  $('.ration__period-item').on('click', function(){
	  var selectedPeriod = $(this).text();
	  $('input[name="ration-period"]').val(selectedPeriod);
  });

/**************
maskedinput END
**************/

/**************
sidebar-desc START
**************/

$(function(){
    $(".how__button").click(function(){
            var hrefBut = $(this).attr("href");
            $hrefBut = $(hrefBut);
            $('html, body').stop().animate({
            			'scrollTop': $hrefBut.offset().top+2
            		}, 500, 'swing', function () {
            			window.location.hash = hrefBut;
            			//$(document).on("scroll", onScroll);
            		});
    });
});

if(!document.querySelector("body").classList.contains("thanks")) {
    $(document).ready(function () {
        $(document).on("scroll", onScrollDesc);

        $('.header__link').on('click', function (e) {
            e.preventDefault();
            $(document).off("scroll");

            $('.header__link').each(function () {
                $(this).parent('.header__item').removeClass('header__link--active');
            });
            $(this).parent('.header__item').addClass('header__link--active');

            var target = this.hash;
            $target = $(target);
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top + 2
            }, 500, 'swing', function () {
                window.location.hash = target;
                $(document).on("scroll", onScrollDesc);
            });
        });
    });
}

function onScrollDesc(event){
	var scrollPosition = $(document).scrollTop();
	$('#sidebar-desc a').each(function () {
		var currentLink = $(this);
		var x = currentLink.attr("href");
		var refElement = $(`section:has(${x})`);
		var refPos = refElement.position().top - 120;
		var refHeight = refElement.height() + 140;
		if (refPos <= scrollPosition && refPos + refHeight > scrollPosition) {
			$('ul#sidebar-desc li a').removeClass("header__link--active");
			currentLink.addClass("header__link--active");
			
		}
		else{
			currentLink.removeClass("header__link--active");
		}
	});
}

/**************
sidebar-desc END
**************/

/**************
sidebar-desc START
**************/
// $(function(){
//     $(".how__button").click(function(){
//             var hrefBut = $(this).attr("href");
//             $hrefBut = $(hrefBut);
//             $('html, body').stop().animate({
//             			'scrollTop': $hrefBut.offset().top+2
//             		}, 500, 'swing', function () {
//             			window.location.hash = hrefBut;
//             			$(document).on("scroll", onScroll);
//             		});
//     });
// });

/*if(!document.querySelector("body").classList.contains("thanks")) {
    $(document).ready(function () {
        $(document).on("scroll", onScroll);

        $('.header__link').on('click', function (e) {
            e.preventDefault();
            $(document).off("scroll");

            $('.header__link').each(function () {
                $(this).removeClass('header__link-mobile--active');
            })
            $(this).addClass('header__link-mobile--active');

            var target = this.hash;
            $target = $(target);
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top + 2
            }, 500, 'swing', function () {
                window.location.hash = target;
                $(document).on("scroll", onScroll);
            });
        });
    });
}*/

function onScroll(event){
	var scrollPosition = $(document).scrollTop();
	$('#sidebar-mobile a').each(function () {
		var currentLink = $(this);
		var x = currentLink.attr("href");
		var refElement = $(`section:has(${x})`);
		var refPos = refElement.position().top - 120;
		var refHeight = refElement.height() + 140;

		if (refPos <= scrollPosition && refPos + refHeight > scrollPosition) {
			$('ul#sidebar-mobile li a').removeClass("header__link-mobile--active");
			currentLink.addClass("header__link-mobile--active");
		}
		else{
			currentLink.removeClass("header__link-mobile--active");
		}
	});
}

/**************
sidebar-desc END
**************/

/***********************
magnificPopup Start
***********************/

$(document).ready(function() {
    $('.privacy-popup').magnificPopup({
        type: 'inline',
        closeBtnInside: false,
        overflowY: 'auto' 
    });
	
	var mainSection = $('.main[data-background]'),
		mainSectionBackground = mainSection.attr('data-background'),
		decorBlock = $('.main__apple[data-background]'),
		decorBlockBackground = decorBlock.attr('data-background'),
		questionsSectionForm = $('.general__form[data-background]'),
		questionsSectionFormBackground = questionsSectionForm.attr('data-background'),
		decorBlock2 = $('.questions__tomato[data-background]'),
		decorBlock2Background = decorBlock2.attr('data-background');
		
	if(mainSectionBackground){
		mainSection.css('background', 'url("' + mainSectionBackground + '") no-repeat center');
	}
	
	if(decorBlockBackground){
		decorBlock.css('background', 'url("' + decorBlockBackground + '") no-repeat center / contain');
	}
	
	if(questionsSectionFormBackground){
		questionsSectionForm.css('background', '#fff url("' + questionsSectionFormBackground + '") no-repeat 99% 12%');
	}
	
	if(decorBlock2Background){
		decorBlock2.css('background', 'url("' + decorBlock2Background + '") no-repeat center / contain');
	}
});


	// Site choose.

	var siteChoose = jQuery('.site-choose');
	
	jQuery(document).on('click', function(e){
		var chooseList = jQuery('.site-choose__list');
		
		if(siteChoose.has(e.target).length && !siteChoose.hasClass('site-choose_opened')){
			siteChoose.addClass('site-choose_opened');
        } else if(!chooseList.is(e.target) && chooseList.has(e.target).length === 0) {
			siteChoose.removeClass('site-choose_opened');
        }
    });
	
	var siteChooseQuestion = jQuery('.site-choose-question'),
        siteChooseQuestionTrue = siteChooseQuestion.find('.site-choose-question__btn-true'),
		siteChooseQuestionFalse = siteChooseQuestion.find('.site-choose-question__btn-false');

    if(siteChooseQuestion.length){
        setTimeout(function(){
            siteChooseQuestion.addClass('site-choose-question_opened');
        }, 2000);

        siteChooseQuestionTrue.on('click', function(){
            var date = new Date();
            date.setDate(date.getDate() + 60);
            document.cookie = "siteChooseQuestionClosed=closed; path=/; expires=" + date.toUTCString();
            siteChooseQuestion.remove();
        });
		
		siteChooseQuestionFalse.on('click', function(){
			siteChooseQuestion.removeClass('site-choose-question_opened');
			
			setTimeout(function(){
				siteChoose.addClass('site-choose_opened');
			}, 600);
		});
    }

	
	});

/***********************
    magnificPopup END
***********************/