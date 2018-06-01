var _scrollTop;
var _headerH;
/*
$(document).ready(function(){
    scrollCheck();
    $('#telefoneResp, input[type="tel"]').mask('(00) 0 0000-0000');

    _headerH = $('.navbar-default').css('height');

    $('.jumbotron, #inscreva').css('margin-top', _headerH);

});
*/
$(window).scroll(function(){
    scrollCheck();
});

$(window).on('resize', function(){
    _headerH = $('.navbar-default').height();

    $('.jumbotron, #inscreva').css('margin-top', _headerH);
});


function scrollCheck(){
    _scrollTop = $(window).scrollTop();

    if(_scrollTop >= 150){
        $('#toTop').fadeIn('slow');
    } else {
        $('#toTop').fadeOut('slow');
    }
}

$("#toTop").on('click tap', function(){
   $(window).scrollTop(0);
});