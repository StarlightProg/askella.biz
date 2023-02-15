function anim(e){
  let currentScroll;
  e.css("paddingTop","+=5")
  // e.css("marginTop","+=5")
  if ( (($(window).scrollTop() + window.innerHeight>=e.position().top+300) && ($(window).scrollTop()<=e.position().top+e.height()-300)) && (e.css("opacity")==0) ) {
    e.animate({opacity:1,paddingTop:"-=5"})
  }

  $(window).scroll(() => {
    currentScroll = $(window).scrollTop()
    if ( ((currentScroll + window.innerHeight>=e.position().top+300) && (currentScroll<=e.position().top+e.height()-300)) && (e.css("opacity")==0) ) {
      e.animate({opacity:1,paddingTop:"-=5"})
    }
  })

}

function submitHead(){
  if (!$("#utel__head").val()) {
    $("#utel__head").css("border-color","#F37474")
    return false;
  }
  else{
    $("#utel__head").css("border-color","#CFDCFD")
    $(location).attr('href','#thanks');
    setTimeout(()=>{$(location).attr('href','#');$("body").css("overflow","visible");},3000)
  }
 // $('#submit__input__with__tel__head').click(
  //);
}
 
function submitSugg(){
  //if ($("#utel__sugg")) {}
  if (!$("#utel__sugg").val()) {
    $("#utel__sugg").css("border-color","#F37474")
    return false;
  }
  else{
    $("#utel__head").css("border-color","#CFDCFD")
    $(location).attr('href','#thanks');
    setTimeout(()=>{$(location).attr('href','#');$("body").css("overflow","visible");},3000)
  }
} 

  (function($){
// пишем функцию с именем нашего плагина
$.fn.touchanddrag = function(){
    // оборачиваем содержимое нашего элемента в дочерний элемент, который и будем перемещать
    // исходный же элемент сохраняет свою разметку и свойства, заданные ему в css
    this.wrapInner('<div>');
    // исходный элемент теперь стал контейнером, а новый элемент - обертка для его данных
    // то есть исходный элемент (box) - родитель, а новый элемент (data) - дочерний
    var box = this,
        data = this.children();
    // прячем полосу прокрутки
    box.css({overflow:'hidden'});
    // позиционируем элемент data
    data.css({position:'absolute',cursor:'default'});
    // событие касания на элементе
    data.mousedown(function(e){
        // высота элементов для дальнейших вычислений
        var hgtBox = box.height(),
            hgtData = data.height();
        // проверяем, достаточно ли контента для прокрутки
        if (hgtData>hgtBox) {
            // позиция касания
            var posTap = e.pageX,
                // позиция элемента data относительно элемента box
                posData = data.position().left,
                posShift,
                // событие скольжения в пределах документа
                mouseMove = function(e){
                    // проверяем, нажата ли еще кнопка мыши
                    if (e.which==1){
                        // расстояние, пройденное относительно первого касания
                        posShift = e.pageX-posTap;
                        // если прокрутили контент выше верхнего края
                        if (data.position().left>0){
                            // перемещаем контент, но в 5 раз медленнее
                            // фрагмент имитации кинетической прокрутки
                            data.css({left:(posData+posShift)/5});
                        // если прокрутили контент ниже нижнего края
                        } else if ((data.position().left+hgtData)<hgtBox){
                            // замедляем перемещение в пять раз
                            data.css({left:(hgtBox-hgtData)+(posShift/5)});
                        // прокрутка контента в пределах видимости родителя
                        } else {
                            // добавляем разницу к предыдущим координатам
                            data.css({left:posData+posShift});
                        }
                    } else {
                        mouseUp();
                    }
                },
                // событие отпускания
                mouseUp = function(){
                    // отменяем мониторинг перетаскивания и блокировку выделения
                    $(document).off('mousemove',mouseMove).off('mouseup',mouseUp);
                    $(document).off('mousedown',selection);
                    // возвращаем вид курсора
                    data.css({cursor:'default'});
                    // если после прокрутки контент оказался выше верхнего края           
                    if (data.position().left>0){
                        // плавно возвращаем его в крайнюю верхнюю позицию
                        // фрагмент имитации кинетической прокрутки
                        data.animate({left:0},250);
                    // если после прокрутки контент оказался ниже нижнего края
                    } else if ((data.position().left+hgtData)<hgtBox) {
                        // плавно возвращаем его в крайнюю нижнюю позицию
                        data.animate({left:hgtBox-hgtData},250);
                    }
                },
                // снятие выделения при перетаскивании контента
                selection = function(){
                    if (window.getSelection){window.getSelection().removeAllRanges()}
                    else {document.selection.empty()}
                    return false;
                };
            // меняем вид курсора на время перетаскивания
            data.css({cursor:'move'});
            // инициализируем мониторинг перетаскивания и блокировку выделения
            $(document).on('mousedown',selection).on('mousemove',mouseMove);
            $(document).on('mouseup',mouseUp).on('contextmenu',mouseUp);
            $(window).on('blur',mouseUp);
        }
    });
    return this;
};
})(jQuery);

$(document).ready(() => {
    anim($('.footerMain .flex__row'))
    anim($('.footer1290 .flex__row'))
    anim($('.footer960 .flex__row'))
    anim($('.footer640 .flex__row'))
    anim($('.footer480 .flex__row'))

    setTimeout(function(){
    if(sessionStorage.hasOwnProperty('lang')){
            if(sessionStorage.getItem('lang')=="ru"){
                $('font').each(function(index){
                  let t = $(this).text();
                  if (t.indexOf('st')!=-1) {
                    t = t.replaceAll('st','<span style="font-family:\''+"gilroy"+'\';\">'+'st'+'</span>');
                    $(this).html(t);
                  }  
                  if (t.indexOf('ct')!=-1) {
                    t = t.replaceAll('ct','<span style="font-family:\''+"gilroy"+'\';\">'+'st'+'</span>');
                    $(this).html(t);
                  }                 
                });
            }
    }},3000);

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

    const onScrollHeader = () => { // объявляем основную функцию onScrollHeader


    const header = $('.header') // находим header и записываем в константу

    // $('.header').hover(()=>{
    //   alert("21321")
    // })

    let prevScroll = $(window).scrollTop() // узнаем на сколько была прокручена страница ранее
    let currentScroll // на сколько прокручена страница сейчас (пока нет значения)

    $(window).scroll(() => { // при прокрутке страницы
      
      // alert("14214")
      //alert(header.css("opacity"))
      currentScroll = $(window).scrollTop() // узнаем на сколько прокрутили страницу
      // alert($('.about__company').position().top)

      const headerHidden = () => header.hasClass('header_hidden') // узнаем скрыт header или нет

      if (currentScroll > prevScroll && !headerHidden() && $(".menu").css("display")=="none") { // если прокручиваем страницу вниз и header не скрыт
        header.addClass('header_hidden') // то скрываем header
      }
      if (currentScroll < (prevScroll-5) && headerHidden() && $(".menu").css("display")=="none") { // если прокручиваем страницу вверх и header скрыт
        header.removeClass('header_hidden') // то отображаем header
      }
    //   if(Number(currentScroll)>(Number(header.css("height").replace("px",""))+663)){
        
    //     // header.addClass('header_background')
    //     //header.css("display","flex")
    //     //header.css("opacity")
    //     header.removeClass('header_hidden')
    //     if (header.css("opacity")==0){
    //       header.css("opacity",1)
    //       header.stop().fadeIn(300);
    //     }
    //     header.css("background","linear-gradient(166.89deg, #002148 -4.84%, #00489D 105.24%)")
    //   }
     if (Number(currentScroll)==0) {
          header.stop().animate({opacity:0},400,function(){
            header.addClass('header_hidden')
            header.bind("transitionend",function(){header.css('opacity',1);})
          })
     }

      prevScroll = currentScroll // записываем на сколько прокручена страница на данный момент

    })

  }

  onScrollHeader() // вызываем основную функцию onScrollHeader

})