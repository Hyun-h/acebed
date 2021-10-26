$(document).ready(function(){
    $(".serch_section p").click(function(){
        $(".serch_section ul").slideToggle(300);
    })

    $(".page_move>ul>li").click(function(){
        $(this).addClass("p_active");
        $(this).siblings().removeClass("p_active");
    })
})