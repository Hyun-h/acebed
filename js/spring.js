$(document).ready(function(){
    $(".spring_bg_img_txt").animate({
        borderWidth : "200px 80px 125px 80px",
        paddingTop : "265px"
    }, 2000);

    $(".five_system_box img").css("visibility", "hidden");
    $(".five_system_box strong").hide();
    $(".five_system_box p").css("visibility", "hidden");
    $(".five_system_box>div").mouseenter(function(){
        $(this).find("img").css("visibility", "visible");
        $(this).find("strong").show();
        $(this).find("p").css("visibility", "visible").animate({top:"0"});
        $(this).siblings().find("img").css("visibility", "hidden");
        $(this).siblings().find("strong").hide();
        $(this).siblings().find("p").css("visibility", "hidden").animatie({top:"50px"});
    });

    $(".s_list>ul>li").click(function(){
        $(this).addClass("s_active");
        $(this).siblings().removeClass("s_active");
    })

    var swiper = new Swiper(".s_list", {
        spaceBetween: 10,
        slidesPerView: 6,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".s_slide", {
        spaceBetween: 10,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
        },
        thumbs: {
          swiper: swiper
        }
    });

})