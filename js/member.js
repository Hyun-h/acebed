$(document).ready(function(){
    $(".single_member").mouseover(function(){
        $(".single_icon").hide();
        $(".single_icon_on").css({
            opacity: "1"
        });
        $(".single_member > p").css({
            color: "#0890c0"
        });
    })

    $(".single_member").mouseleave(function(){
        $(".single_icon").show();
        $(".single_icon_on").css({
            opacity: "0"
        });
        $(".single_member > p").css({
            color: "#333"
        });
    })
})