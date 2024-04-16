$(document).ready(() => { // DOM готов к взаимодейтсвию
	let chosen,chosenMain;
	$('.second__block .div__about__text4').each(function(){
		if ($(this).hasClass("second__chosen")) {
			chosen = $(this);
		}
	});

	$('.main__column .div__about__text4').each(function(){
		
		if ($(this).hasClass("second__chosen")) {
			chosenMain = $(this);
		}
		if (chosenMain.is("#holding")) {
				$(".russiaMap").stop().fadeIn(300);
				$(".omsk").stop().fadeIn(300);
				$("#holding__desc").stop().fadeIn(300);
			}
	});

	$('.main__column .div__about__text4').each(function(){
		
		$(this).click(function(){

			chosenMain.removeClass("second__chosen");
			$(this).addClass("second__chosen");
			chosenMain = $(this);

			$('.trianglesDiv img').each(function(){
				$(this).stop().fadeOut(300);
			});

			$('.company__description').each(function(){
				$(this).css("display","none");
			});

			if (chosenMain.is("#holding")) {
				$(".russiaMap").stop().fadeIn(300);
				$(".omsk").stop().fadeIn(300);
				$("#holding__desc").stop().fadeIn(300);
			}

			if (chosenMain.is("#sumka")) {
				$(".kzMap").stop().fadeIn(300);
				$(".astana").stop().fadeIn(300);
				$("#sumka__desc").stop().fadeIn(300);
			}

			if (chosenMain.is("#gruz")) {
				$(".russiaMap").stop().fadeIn(300);
				$(".omsk").stop().fadeIn(300);
				$("#gruz__desc").stop().fadeIn(300);
			}
			if (chosenMain.is("#asib")) {
				$(".russiaMap").stop().fadeIn(300);
				$(".omsk").stop().fadeIn(300);
				$("#asib__desc").stop().fadeIn(300);
			}
			if (chosenMain.is("#askagro")) {
				$(".kzMap").stop().fadeIn(300);
				$(".astana").stop().fadeIn(300);
				$("#askagro__desc").stop().fadeIn(300);
			}
			if (chosenMain.is("#ack")) {
				$(".kzMap").stop().fadeIn(300);
				$(".astana").stop().fadeIn(300);
				$("#ack__desc").stop().fadeIn(300);
			}
			if (chosenMain.is("#ask")) {
				$(".kzMap").stop().fadeIn(300);
				$(".astana").stop().fadeIn(300);
				$("#ask__desc").stop().fadeIn(300);
			}
			if (chosenMain.is("#pkMir")) {
				$(".kzMap").stop().fadeIn(300);
				$(".astana").stop().fadeIn(300);
				$("#pkMir__desc").stop().fadeIn(300);
			}
			if (chosenMain.is("#shubarCoal")) {
				$(".kzMap").stop().fadeIn(300);
				$(".astana").stop().fadeIn(300);
				$("#shubarCoal__desc").stop().fadeIn(300);
			}
			if (chosenMain.is("#sugar")) {
				$(".kzMap").stop().fadeIn(300);
				$(".astana").stop().fadeIn(300);
				$("#sugar__desc").stop().fadeIn(300);
			}
			if (chosenMain.is("#nurkaz")) {
				$(".kzMap").stop().fadeIn(300);
				$(".astana").stop().fadeIn(300);
				$("#nurkaz").stop().fadeIn(300);
				$("#nurkaz__desc").stop().fadeIn(300);
			}
			if (chosenMain.is("#secerprom")) {
				$(".uzMap").stop().fadeIn(300);
				$(".tashkent").stop().fadeIn(300);
				$("#secerprom__desc").stop().fadeIn(300);
			}
			if (chosenMain.is("#pteltd")) {
				$(".singapore").stop().fadeIn(300);
				$("#pteltd__desc").stop().fadeIn(300);
			}
			if (chosenMain.is("#npkmir")) {
				$(".russiaMap").stop().fadeIn(300);
				$(".moscow1").stop().fadeIn(300);
				$(".moscow2").stop().fadeIn(300);
				$("#npkmir__desc").stop().fadeIn(300);
			}
			if (chosenMain.is("#askport")) {
				$(".turkeyMap").stop().fadeIn(300);
				$(".stambul").stop().fadeIn(300);
				$("#askport__desc").stop().fadeIn(300);
				
			}
			if (chosenMain.is("#askconst")) {
				$(".kzMap").stop().fadeIn(300);
				$(".almata").stop().fadeIn(300);
				$("#askconst__desc").stop().fadeIn(300);
			}
		});

			
	});

	$('.second__block .div__about__text4').each(function(){
		
		$(this).click(function(){
			chosen.removeClass("second__chosen");
			$(this).addClass("second__chosen");
			chosen = $(this);
			if (chosen.hasClass("all_chose")) {
				$('.a__black').each(function(){
					$(this).show();
				});
			}
			if (chosen.hasClass("prod_choose")) {
				$('.a__black').each(function(){
					if (! ($(this).hasClass("prod"))) {
						$(this).hide();
					}
					else{
						$(this).show();
					}
				});
			}
			if (chosen.hasClass("agro_choose")) {
				$('.a__black').each(function(){
					if (! ($(this).hasClass("agro"))) {
						$(this).hide();
					}
					else{
						$(this).show();
					}
				});
			}
			if (chosen.hasClass("stroi_choose")) {
				$('.a__black').each(function(){
					if (! ($(this).hasClass("stroi"))) {
						$(this).hide();
					}
					else{
						$(this).show();
					}
				});
			}
			if (chosen.hasClass("invest_choose")) {
				$('.a__black').each(function(){
					if (! ($(this).hasClass("invest"))) {
						$(this).hide();
					}
					else{
						$(this).show();
					}
				});
			}
			if (chosen.hasClass("log_choose")) {
				$('.a__black').each(function(){
					if (! ($(this).hasClass("log"))) {
						$(this).hide();
					}
					else{
						$(this).show();
					}
				});
			}
		});
	});




  const header1 = $('.header')
  header1.bind("transitionend",function(){header1.css("visibility","visible");})
anim($('.third__invest_cost'))
  header1.addClass('header_hidden')
  header1.css("background","linear-gradient(166.89deg, #002148 -4.84%, #00489D 105.24%)")


  $('.second__elem4').each(function() {
	    const _this = $(this),
	        selectOption = _this.find('option'),
	        selectOptionLength = selectOption.length,
	        selectedOption = selectOption.filter(':selected'),
	        duration = 450; // длительность анимации 

	    _this.hide();
	    _this.wrap('<div class="select"></div>');
	    $('<div>', {
	        class: 'new-select',
	        text: _this.children('option:disabled').text()
	    }).insertAfter(_this);

	    const selectHead = _this.next('.new-select');
	    $('<div>', {
	        class: 'new-select__list'
	    }).insertAfter(selectHead);

	    const selectList = selectHead.next('.new-select__list');
	    for (let i = 1; i < selectOptionLength; i++) {
	        $('<div>', {
	            class: 'new-select__item',
	            html: $('<span>', {
	                text: selectOption.eq(i).text()
	            })
	        })
	        .attr('data-value', selectOption.eq(i).val())
	        .appendTo(selectList);
	    }

	    const selectItem = selectList.find('.new-select__item');
	    selectList.slideUp(0);
	    selectHead.on('click', function() {
	        if ( !$(this).hasClass('on') ) {
	            $(this).addClass('on');
	            selectList.slideDown(duration);

	            selectItem.on('click', function() {
	                let chooseItem = $(this).data('value');

	                $('select').val(chooseItem).attr('selected', 'selected');
	                selectHead.text( $(this).find('span').text() );

	                selectList.slideUp(duration);
	                selectHead.removeClass('on');
	            });

	        } else {
	            $(this).removeClass('on');
	            selectList.slideUp(duration);
	        }
	    });
	});
  	$(".new-select__list").css("width",$(".container").css("width"));
  	$(window).resize(() => {
  		$(".new-select__list").css("width",$(".container").css("width"));
  	});


});