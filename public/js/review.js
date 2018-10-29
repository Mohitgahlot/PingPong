var val=null;
var review=null;
$(".radio+label").hover(function(event) {
        event.preventDefault();
        var val2=event.target.parentNode.previousElementSibling.value;
        $(".radio+label").css("color","white");
        for(var i=1;i<=val2;i++){
            $("#val"+i+"+label").css("color","tomato");
        }
    },
    function(){
        $(".radio+label").css("color","white");
});



$(":radio").change(function() {
    val = this.value;
    console.log(val);
    $(".radio+label").unbind('mouseenter mouseleave');
    $(":radio").unbind('change');
});

$("#submit-rate").on("click",function () {

    review=$('.rate-textarea textarea').val();
    console.log(review);
    if(val!=null){
        $.ajax({
            method:'POST',
            url:url,
            data:{rate:val,review:review,_token:token}
        }).done(function(msg){
            if(msg['message']=="succeessful"){
                $('.userrate-wrapper').delay(1000).slideUp("slow");
            }
            else{
                $('.rate-textarea textarea').val("");
            }
        });
    }
});


