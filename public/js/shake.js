$('.shake-right').click(function () {
    $("nav").css("margin-left","-26%");
    $(".nav-open").fadeIn(1500);
    $('.main-wrapper').animate({"opacity":1},1000);
    $('.right-scroll').animate({"opacity":1},1000);
});

$(window).on("scroll",function() {
    var first=$('.shakes:first-of-type');
    var offset = first.offset().top;
    var scroll = $(window).scrollTop();

    var bottom = $('.shakes:last-of-type').offset().top+80;
    if(scroll>bottom) {
        $('.shake-right').css({'margin-right': "-9.5%"});
    }
    else if(scroll > offset-100) {
        $('.shake-right').css({'margin-right':0});
    }
    else {
        $('.shake-right').css({'margin-right':"-9.5%"});
    }

    if(scroll<offset-100){
        $(".radio1+label").css('border-left','5px solid transparent');
    }
    else if(scroll>first.offset().top-100&&scroll<$('.shakes:nth-of-type(2)').offset().top-100){
        $(".radio1+label").css('border-left',0);
        $(".radio1:first-of-type+label").css('border-left','5px solid white');
    }
    else if(scroll>$('.shakes:nth-of-type(2)').offset().top-100&&scroll<$('.shakes:nth-of-type(3)').offset().top-100){
        $(".radio1+label").css('border-left',0);
        $(".radio1:nth-of-type(2)+label").css('border-left','5px solid white');
    }
    else if(scroll>$('.shakes:nth-of-type(3)').offset().top-100&&scroll<$('.shakes:nth-of-type(4)').offset().top-100){
        $(".radio1+label").css('border-left',0);
        $(".radio1:nth-of-type(3)+label").css('border-left','5px solid white');
    }
    else if(scroll>$('.shakes:nth-of-type(4)').offset().top-100&&scroll<$('.shakes:nth-of-type(5)').offset().top-100){
        $(".radio1+label").css('border-left',0);
        $(".radio1:nth-of-type(4)+label").css('border-left','5px solid white');
    }
    else if(scroll>$('.shakes:nth-of-type(5)').offset().top-100&&scroll<$('.shakes:nth-of-type(6)').offset().top-100){
        $(".radio1+label").css('border-left',0);
        $(".radio1:nth-of-type(5)+label").css('border-left','5px solid white');
    }
    else if(scroll>$('.shakes:nth-of-type(6)').offset().top-100&&scroll<$('.shakes:nth-of-type(7)').offset().top-100){
        $(".radio1+label").css('border-left',0);
        $(".radio1:nth-of-type(6)+label").css('border-left','5px solid white');
    }
    else if(scroll>$('.shakes:nth-of-type(7)').offset().top-100&&scroll<$('.shakes:nth-of-type(8)').offset().top-100){
        $(".radio1+label").css('border-left',0);
        $(".radio1:nth-of-type(7)+label").css('border-left','5px solid white');
    }
    else if(scroll>$('.shakes:nth-of-type(8)').offset().top-100&&scroll<$('.shakes:nth-of-type(9)').offset().top-100){
        $(".radio1+label").css('border-left',0);
        $(".radio1:nth-of-type(8)+label").css('border-left','5px solid white');
    }
    else if(scroll>$('.shakes:nth-of-type(9)').offset().top-100){
        $(".radio1+label").css('border-left',0);
        $(".radio1:nth-of-type(9)+label").css('border-left','5px solid white');
    }
});

$(":radio").change(function () {
    var value=this.value;
    var value2=$('.shakes:nth-of-type('+value+')').offset().top;
    $('html body').animate({scrollTop:value2+2},800);
});