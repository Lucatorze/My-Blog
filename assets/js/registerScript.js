$(function () {
    $(':text[name="firstname"]').focus();
    $('input').mouseover(function () {
        $(this).css({
            'backgroundColor': 'white',
            'transition': '0.8s'
        });
    });
    /*
     $('.titleTooltip').mouseover(function (){
     $('.titleTooltip').tooltip();
     })
     $('.titleTooltip').mouseout(function (){
     $('.titleTooltip').tooltip( "destroy" );
     })
     */
});