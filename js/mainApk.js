"use strict";



// function modulOverflow(e){
//   $("body").css("overflow","hidden")
//     if (!($('.header').hasClass('header_hidden'))) {
//       $('.header').addClass('header_hidden')
//     }
// }

$(document).ready(() => { // DOM готов к взаимодейтсвию

  const header1 = $('.header')

  header1.bind("transitionend",function(){header1.css("visibility","visible");})
  anim($('.second__block'))
  anim($('.third__block'))
  anim($('.fourth__block'))
  anim($('.fifth__block'))
  anim($('.sixth__block'))
  //alert(header1.css("height")[header1.css("height").length - 1] - header1.css("height")[header1.css("height").length - 2])
  
        header1.addClass('header_hidden')
        header1.css("background","linear-gradient(166.89deg, #002148 -4.84%, #00489D 105.24%)")

  // $(".header__foot__head").click(() =>{
  //    alert(!($('.header').hasClass('header_hidden')))
  //   if (!($('.header').hasClass('header_hidden'))) {
  //     $('.header').addClass('header_hidden')
  //   }
  // });

  // $("#modalOpener").click(function(index, element){alert($( this ).html())})
  $(".modalOpener").each(function(index, element){
      $( element ).click(() =>{
        //alert(!($('.header').hasClass('header_hidden')))
          $("body").css("overflow","hidden")
          if (!($('.header').hasClass('header_hidden'))) {
            //alert("NO HIDDEN")
            $('.header').addClass('header_hidden')
          }
      });
  });

  $(".bgPopup, .imgClose, .modalClose").each(function(index, element){
      $( element ).click(() =>{
         // alert("VISIBLE")
          $("body").css("overflow","visible")
      });
  });
  // $(".modalOpener").click(() =>{
  //     alert("123")
  //     $("body").css("overflow","hidden")
  //     if (!($('.header').hasClass('header_hidden'))) {
  //       $('.header').addClass('header_hidden')
  //     }
  // });

  // modulOverflow("#companies__structures")



$('#historyLine').touchanddrag();
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

    //$(".new-select__list").css("width",$(".select").css("width"));
    $(".new-select").click(()=>{
      $(".new-select__list").css("width",$(".select").css("width"));
    })
    $(window).resize(() => {
      $(".new-select__list").css("width",$(".select").css("width"));
    });
    
})