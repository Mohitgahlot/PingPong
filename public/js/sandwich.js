$('.sandwich-right').click(function () {
    $("nav").css("margin-left","-26%");
    $(".nav-open").fadeIn(1500);
    $('.main-wrapper').animate({"opacity":1},1000);
    $('.right-scroll').animate({"opacity":1},1000);
});

$(window).on("scroll",function() {
    var offset = $('.sandwich:first-of-type').offset().top;
    var scroll = $(window).scrollTop();

    var bottom = $('.sandwich:last-of-type').offset().top+250;
    if(scroll>bottom) {
        $('.sandwich-right').css({'margin-right': "-9.5%"});
    }
    else if(scroll > offset-100) {
        $('.sandwich-right').css({'margin-right':0});
    }
    else {
        $('.sandwich-right').css({'margin-right':"-9.5%"});
    }

    if(scroll<offset-100){
        $(".radio+label").css('border-left',0);
    }
    else if(scroll>$('.sandwich:first-of-type').offset().top-100&&scroll<$('.sandwich:nth-of-type(2)').offset().top-100){
        $(".radio+label").css('border-left',0);
        $(".radio:first-of-type+label").css('border-left','5px solid white');
    }
    else if(scroll>$('.sandwich:nth-of-type(2)').offset().top-100&&scroll<$('.sandwich:nth-of-type(3)').offset().top-100){
        $(".radio+label").css('border-left',0);
        $(".radio:nth-of-type(2)+label").css('border-left','5px solid white');
    }
    else if(scroll>$('.sandwich:nth-of-type(3)').offset().top-100&&scroll<$('.sandwich:nth-of-type(4)').offset().top-100){
        $(".radio+label").css('border-left',0);
        $(".radio:nth-of-type(3)+label").css('border-left','5px solid white');
    }
    else if(scroll>$('.sandwich:nth-of-type(4)').offset().top-100){
        $(".radio+label").css('border-left',0);
        $(".radio:nth-of-type(4)+label").css('border-left','5px solid white');
    }

});

$(":radio").change(function () {
    var value=this.value;
    var value2=$('.sandwich:nth-of-type('+value+')').offset().top;
    $('html body').animate({scrollTop:value2+2},800);
});
