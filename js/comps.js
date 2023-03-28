$(document).ready(() => { // DOM готов к взаимодейтсвию

	let img = new Image();

img.onload = function(){
  let height = img.height;
  let width = img.width;
  $(".second__block img").css('width',width);
  $(".second__block img").css('height',height);
}

img.src = $(".second__block img").attr('src');


  const header1 = $('.header')

  header1.bind("transitionend",function(){header1.css("visibility","visible");})

  header1.addClass('header_hidden')
  header1.css("background","linear-gradient(166.89deg, #002148 -4.84%, #00489D 105.24%)")
});