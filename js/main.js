$(document).ready(function(){
    var swiper = new Swiper(".mySwiper", {
        navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
        },
    });

    /*
    $(".news_img2, .news_img3").hide();
    $(".news_list>ul>li").click(function(){
        $(".news_img>img").hide();
        $
    })
    */

    $(".news_list>ul>li").click(function(){
        $(this).addClass("news_event_text_color");
        $(this).siblings().removeClass("news_event_text_color");

        let srcs = $(this).attr("data-img");
        $(".news_img>img").attr({"src": srcs})
    })


})