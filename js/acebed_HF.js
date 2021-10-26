$(document).ready(function(){
    //왼쪽 상단 네브
    $(".sub, .kor").hide();
    $(".h_left").mouseenter(function(){
        $(".sub").fadeIn(500);
        $(".sub").slideDown(500);
        $(".sub").animate({height: "300px"});
        $("header").animate({height: "400px"});
        //$(".h_logo").fadeOut();
        $(".h_logo").hide();
        $(".eng").hide();
        $(".kor").show();
        $(".h_right").css({ visibility: "hidden"});
    });

    $(".h_left").mouseleave(function(){
        //$(".h_logo").fadeIn();
        $(".h_logo").show();
        $(".sub").hide(100);
        $("header").animate({height: "150px"});
        $(".eng").show();
        $(".kor").hide();
        $(".h_right").css({ visibility: "visible"});
    })

    //오른쪽 상단 네브
    $(".h_right").mouseenter(function(){
        $(".sub").fadeIn(500);
        $(".sub").slideDown(500);
        $(".sub").animate({height: "300px"});
        $("header").animate({height: "400px"});
        //$(".h_logo").fadeOut();
        $(".h_logo").hide();
        $(".eng").hide();
        $(".kor").show();
        $(".h_left").css({ visibility: "hidden"});
        $(".h_right").animate({width: "50%"});
    })

    $(".h_right").mouseleave(function(){
        //$(".h_logo").fadeIn();
        $(".h_logo").show();
        $(".sub").hide(100);
        $("header").animate({height: "150px"});
        $(".eng").show();
        $(".kor").hide();
        $(".h_left").css({ visibility: "visible"});
        $(".h_right").animate({width: "40%"});
    })

    $("#search_wrap, .search_close").hide();
    $(".search").click(function(){
        $("#search_wrap, .search_close").slideDown();
        $("header").animate({height: "400px"});
    })
    $(".search_close").click(function(){
        $("#search_wrap, .search_close").slideUp();
        $("header").animate({height: "150px"});
    })


    //스크롤 버튼
    $(".top").hide();
    $(window).scroll(function(){
        var sct = $(window).scrollTop();
            if(sct > 100){
                $(".top").show(700);
            }
    })

    $(".famliy_site_box").hide();
    $(".family_click").click(function(){
        $(".famliy_site_box").show();
    })
    $(".famliy_site_box").click(function(){
        $(".famliy_site_box").hide();
    })


})

/*
$(document).ready(function(){
    $(".sub, .kor").hide();
    $(".h_left>ul>li").mouseenter(function(){
        $(".sub").fadeIn(500);
        $(".sub").animate({height: "300px"});
        $("header").animate({height: "400px"});
        $(".h_logo").fadeOut(300);
        $(".eng").hide();
        $(".kor").show();
    });

    $(".h_left").mouseleave(function(){
        $(".h_logo").fadeIn(0);
        $(".sub").hide(500);
        $("header").animate({height:"150px"});
        $(".eng").show();
        $(".kor").hide();
    })


}) */

