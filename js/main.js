// всплывающий блок с контактами
    $(function(f) {
        var element = f('#hidden-box');
        f(window).scroll(function(){
            element['fade'+ (f(this).scrollTop() > 55 ? 'In': 'Out')](500);
        });
    });