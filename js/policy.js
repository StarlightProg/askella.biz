$(document).ready(() => { // DOM готов к взаимодейтсвию

  const header1 = $('.header')

  header1.bind("transitionend",function(){header1.css("visibility","visible");})

  header1.addClass('header_hidden')
  header1.css("background","linear-gradient(166.89deg, #002148 -4.84%, #00489D 105.24%)")
});