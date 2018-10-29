$(".nl-btn").on("click",function () {
    var name = null;
    var email = null;
    name = $('.nl:first-of-type').val();
    email = $('.nl:nth-of-type(2)').val();
    if (name == "") {
        if($(".subscribe-msg").hasClass("slideInUp")){
            $(".subscribe-msg").removeClass("slideInUp");
        }
        $(".subscribe-msg").css('color', 'red').addClass("animated shake").fadeIn();
        $(".subscribe-msg").text("Name is required!");
    }
    else if (email == "") {
        $(".subscribe-msg").addClass("animated shake").fadeIn();
        $(".subscribe-msg").text("Email is required!");
    }
    else {
        $.ajax({
            method:'POST',
            url:url,
            data:{name:name,email:email,_token:token}
        }).done(function(msg) {
            $(".subscribe-msg").css('color', '#5cb85c').addClass("animated slideInUp").text("Subscribed Successfully").fadeIn().delay(3000).fadeOut();
            $('.nl').val("");
        });
    }
    return false;
});