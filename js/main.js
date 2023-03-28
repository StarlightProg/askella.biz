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

  anim($('.about__company'))
  anim($('.actives'))
  anim($('.third__invest_cost'))


  setTimeout(()=>$('.menuTop').animate({opacity:1},500),1500)
  setTimeout(()=>$('.main__row').animate({opacity:1},300),2000)
  setTimeout(()=>$('.main__text').animate({opacity:1},300),2300)


  document.getElementById('main__video').addEventListener('ended',videoHandler,false);
  function videoHandler(e) {
      $('.areamapImg').attr('usemap','#videomap');

      setTimeout(()=>$('.dotFinance').fadeIn(150),0)
      setTimeout(()=>$('.dotOtrasli').fadeIn(150),50)
      setTimeout(()=>$('.dotTeam').fadeIn(150),150)
      setTimeout(()=>$('.dotStrategy').fadeIn(150),200)
      setTimeout(()=>$('.dotMission').fadeIn(150),250)
  }




  const area1 = $('#otrasli')
  area1.hover(
    function() {$('.otrasliTriangle').stop().fadeIn(300);}, 
    function() {$('.otrasliTriangle').stop().fadeOut(300);}
  );

  const area2 = $('#result')
  area2.hover(
    function() {$('.resultTriangle').stop().fadeIn(300);}, 
    function() {$('.resultTriangle').stop().fadeOut(300);}
  );

  const area3 = $('#strategy')
  area3.hover(
    function() {$('.strategyTriangle').stop().fadeIn(300);}, 
    function() {$('.strategyTriangle').stop().fadeOut(300);}
  );

  const area4 = $('#team')
  area4.hover(
    function() {$('.teamTriangle').stop().fadeIn(300);}, 
    function() {$('.teamTriangle').stop().fadeOut(300);}
  );

  const area5 = $('#mission')
  area5.hover(
    function() {$('.missionTriangle').stop().fadeIn(300);}, 
    function() {$('.missionTriangle').stop().fadeOut(300);}
  );

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

})