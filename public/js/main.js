$('.nav-open').click(function () {
    $("nav").css("margin-left",0);
    $(this).fadeOut(300);
    $('.main-wrapper').animate({"opacity":0.7},1000);
    $('.right-scroll').animate({"opacity":1},1000);
});

$('.nav-close').click(function () {
    $("nav").css("margin-left","-26%");
    $(".nav-open").fadeIn(1500);
    $('.main-wrapper').animate({"opacity":1},1000);
    $('.right-scroll').animate({"opacity":1},1000);
});

$('.main-wrapper').click(function () {
    $("nav").css("margin-left","-26%");
    $(".nav-open").fadeIn(1500);
    $('.main-wrapper').animate({"opacity":1},1000);
    $('.right-scroll').animate({"opacity":1},1000);
});

$('.right-scroll').click(function () {
    $("nav").css("margin-left","-26%");
    $(".nav-open").fadeIn(1500);
    $('.main-wrapper').animate({"opacity":1},1000);
    $('.right-scroll').animate({"opacity":1},1000);
});

$('.scroll-arrow').on('click',function () {
    var infoTop=$('.section-info').offset().top;
    $('html body').animate({
        scrollTop:infoTop
    },600)
});

$("#contactUs").on("click",function () {
    var newsTop=$(".section-newsletter").offset().top;
    $('html body').animate({
        scrollTop:newsTop
    },600)
});
$(document).ready(function () {
    $('.hero-container').animate({
        top: '47%'
    });
    $('.scroll-arrow').animate({
        top: '94%'
    });
});

$('.cross-pop').on("click",function () {
   $('.pop-menu').css('display','none');
});

$('#pop-overlay').on("click",function () {
    $('.pop-menu').css('display','block');
    $("nav").css("margin-left","-26%");
    $(".nav-open").fadeIn(1500);
    $('.main-wrapper').animate({"opacity":1},1000);
    $('.right-scroll').animate({"opacity":1},1000);
    return false;
});
