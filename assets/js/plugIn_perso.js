(function($){
    $.fn.displayInfo = function(imgWidth,imgMarginTop,imgMarginleft,imgPosition){
        var i = 0;
        var imgParam = {
            width: imgWidth,
            marginTop: imgMarginTop,
            marginLeft: imgMarginleft,
            position: imgPosition
        };
        $('.btnDesc').click(function () {
            i++;
            if (i % 2 == 0) {
                $('.imageFlech').css({
                    'display':'inline-block',

                    'width': imgParam.imgWidth,
                    'marginTop': imgParam.imgMarginTop,
                    'marginLeft': imgParam.imgMarginleft,
                    'float' : imgParam.imgPosition
                });
                $('.imageFlech2').css({
                    'display' : 'none'
                });
                $('.descContainer').slideUp();
            } else if (i % 2 != 0) {
                $('.imageFlech').css({
                    'display':'none'
                });
                $('.imageFlech2').css({
                    'display' : 'inline-block',

                    'width': imgParam.imgWidth,
                    'marginTop': imgParam.imgMarginTop,
                    'marginLeft': imgParam.imgMarginleft,
                    'float' : imgParam.imgPosition

                });
                $('.descContainer').slideToggle();
            }
        });
    };
})(jQuery);
//
// URL image x 2
// CSS => image (width,height(auto),margin,position)