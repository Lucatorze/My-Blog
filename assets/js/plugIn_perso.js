(function($){
    $.fn.tabSlide = function(divImage1,divImage2,divContainer){

        var i = 1;
        var param = {
            divImage1 :divImage1,
            divImage2 : divImage2,
            divContainer : divContainer
        };
        // BEFORE CLICK //////////////////////////////////
        $('.'+param.divImage1).css({
            'display' : 'none'
        })
        ///////////////////////////////////////////////////

        $(this).click(function () {
            i++;
            if (i % 2 == 0) {
                $('.'+param.divImage1).css({
                    'display':'inline-block'
                });
                $('.'+param.divImage2).css({
                    'display' : 'none'
                });
                $('.'+param.divContainer).slideUp();

            } else if (i % 2 != 0) {
                $('.'+param.divImage1).css({
                    'display':'none'
                });
                $('.'+param.divImage2).css({
                    'display' : 'inline-block'
                });
                $('.'+param.divContainer).slideToggle();
            }
        });



    };
    $.fn.tooltipAdd = function(whereAddAttr1,whereAddAttr2,textInfo1,textInfo2){
        z = 1;
        var paramTooltip = {
            whereAddAttr1 : whereAddAttr1,
            whereAddAttr2 : whereAddAttr2,
            textInfo1 : textInfo1,
            textInfo2 : textInfo2
        };

        $(this).mouseover(function () {
            z++;
            if(z % 2 == 0){
                $('.'+paramTooltip.whereAddAttr1).attr('title',paramTooltip.textInfo1);
            }else if (z % 2 !=0 ){
                $('.'+paramTooltip.whereAddAttr2).attr('title',paramTooltip.textInfo2);
            }
        });
    };
})(jQuery);

/* __________________READ ME __________________*/
/*
 BEFORE USE  1 PLUG - IN:

 * SELECT 1 BUTTON ID OR CLASS to event CLICK
 * DEFINE 2 CONTAINER FOR IMAGE
 * DEFINE 1 CONTAINER FOR SLIDE EFFECT

 */