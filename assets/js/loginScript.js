$(function () {
    $('#nickname').focus();
    $('input').mouseover(function (){
        $(this).css({
            'backgroundColor' : 'white',
            'transition' : '0.8s'
        });
    });
    $('.elevator').css({
        'display' : 'none'
    });
});