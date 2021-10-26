<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/acebed_HF.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet"
    href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body>
    <header>
        <div class="h_top">
            <ul class="h_top_btn">
                <?php 
                    if(isset($_SESSION["login_email"])) {
                        echo "
                        <li class=\"join\"><a href=\"logout.php\">로그아웃</a></li>
                        <li class=\"join\"><a href=\"join.html\">마이페이지</a></li>
                        ";
                    } else {
                        echo "
                        <li class=\"join\"><a href=\"member.html\">로그인</a></li>
                        <li class=\"join\"><a href=\"join.html\">회원가입</a></li>
                        ";
                    }
                ?>
                <li class="radius_btn wedding">
                    <a href="member.html">웨딩멤버스</a>
                </li>
                <li class="radius_btn"><a href="#">에이스 침대몰</a></li>
            </ul>
        </div>
        <div class="h_bot">
            <nav class="h_left">
                <ul>
                    <li><a class="eng" href="#">BED</a>
                        <a class="kor" href="#">침대</a>
                        <ul class="sub">
                            <li>
                                <a href="acebed_frame.html">프레임</a>
                            </li>
                            <li>
                                <a href="#">매트리스</a>
                            </li>
                            <li>
                                <a href="#">신제품</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="eng" href="#">FURNITURE</a>
                        <a class="kor" href="#">가구</a>
                        <ul class="sub">
                            <li>
                                <a href="#">룸 세트</a>
                            </li>
                            <li>
                                <a href="#">리빙가구</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="eng" href="#">STRESSLESS</a>
                        <a class="kor" href="#">스트레스리스</a>
                        <ul class="sub">
                            <li>
                                <a href="#">1인용 리클라이너</a>
                            </li>
                            <li>
                                <a href="#">오피스 체어</a>
                            </li>
                            <li>
                                <a href="#">소파</a>
                            </li>
                            <li>
                                <a href="#">테이블&악세사리</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="eng" href="#">SLEEP CARE</a>
                        <a class="kor" href="#">슬립케어</a>
                        <ul class="sub">
                            <li>
                                <a href="#">마이크로케어</a>
                            </li>
                            <li>
                                <a href="#">스마트슬리브</a>
                            </li>
                            <li>
                                <a href="#">보이로패드</a>
                            </li>
                            <li>
                                <a href="#">마이크로가드 eco</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <h1 class="h_logo">
                <a href="index.html">
                    <img src="img/header-logo.png" alt="ace logo">
                </a>
            </h1>
            <nav class="h_right">
                <ul>
                    <li><a href="acebed_spring.html">침대과학</a>
                        <ul class="sub">
                            <li>
                                <a href="acebed_spring.html">스프링</a>
                            </li>
                            <li>
                                <a href="#">기술력</a>
                            </li>
                            <li>
                                <a href="#">특허 및 수상내역</a>
                            </li>
                            <li>
                                <a href="#">침대공학 연구소</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">에이스 스토리</a>
                        <ul class="sub">
                            <li>
                                <a href="#">NOW SNS</a>
                            </li>
                            <li>
                                <a href="#">고객후기</a>
                            </li>
                            <li>
                                <a href="#">뉴스룸</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">고객체험</a>
                        <ul class="sub">
                            <li>
                                <a href="#">매트리스 체험존</a>
                            </li>
                            <li>
                                <a href="#">이동수면공간 연구소</a>
                            </li>
                            <li>
                                <a href="#">공장 견학 신청</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="notice_list.php">공지/이벤트</a>
                        <ul class="sub">
                            <li>
                                <a href="#">이벤트</a>
                            </li>
                            <li>
                                <a href="event.html">당첨자 안내</a>
                            </li>
                            <li>
                                <a href="notice_list.php">공지사항</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">매장안내</a>
                        <ul class="sub">
                            <li>
                                <a href="#">매장찾기</a>
                            </li>
                            <li>
                                <a href="#">에이스 스퀘어</a>
                            </li>
                            <li>
                                <a href="#">에이스 에비뉴</a>
                            </li>
                        </ul>
                    </li>
                    <li class="search">검색</li>
                    <li class="nav">매뉴</li>
                </ul>
            </nav>
        </div>
        <div id="search_wrap">
            <div class="search_txt">
                <input type="text" placeholder="궁금하신 제품이나 정보를 빠르게 찾아보세요">
                <a href="#"><span class="search_box_icon"></span></a>
            </div>
        </div>
    </header>
    <div class="search_close"><span>X</span></div>

    <main>
        <section id="sec1">
            <div class="swiper-container mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="#"><img src="img/bese_review.jpg"></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#"><img src="img/banner_event.jpg"></a>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>

        <section id="science" class="title_name">
            <h2>ACE SCIENCE</h2>
            <a href="#">more</a>
            <article id="science_box">
                <div class="left_arrow arrow"></div>
                <div class="right_arrow arrow"></div>
                <div id="hybrid">
                    <span class="text_point"><a href="#">HYBRID Z SPRING</a></span>
                    <span class="tap"><a href="#">5 ZERO SYSTEM</a></span>
                    <span class="tap"><a href="#">NEW MATHERIAL</a></span>
                    <span class="tap"><a href="#">ECO & HEALTH</a></span>
                </div>
                <div class="video">
                    <video loop autoplay muted>
                        <source src="img/spring_motion.mp4" type="video/mp4">
                    </video>
                </div>
                <div id="tonight">
                    <h2>
                        오늘 밤 어떤 스프링에서<br>
                        만든 침대에서<br>
                        주무시겠습니까?
                    </h2>
                    <p>
                        에이스만의 첨단 공업이 적용된 스프링은<br>
                        인체 곡선과 하중 분포에 따라 위에서 한 번<br>
                        부드럽게 맞춰주고 밑에서 한 번<br>
                        단단하게 받쳐줍니다.
                    </p>
                </div>
            </article>
        </section>

        <section id="collection" class="title_name">
            <h2>ACE COLLECTION</h2>
            <a href="#">more</a>
            <article>
                <article>
                    <div class="col_btn">
                        <ul>
                            <li class="text_point"><a href="">신제품</a> |</li>
                            <li class="recommend"><a href="#">추천제품</a></li>
                        </ul>
                    </div>
                </article>
                <div id="col_wrap">
                    <div class="col">
                        <p>
                            <img src="img/foglia.jpg">
                        </p>
                        <div class="col_txt">
                            <ul>
                                <li>라틴인테리어</li>
                                <li>엔틱스타일</li>
                                <li>클래식디자인</li>
                            </ul>
                            <h3>FOGLIA</h3>
                            <p>오리엔탈 휴양지 감성을 느낄 수 있는 FOGLIA</p>
                            <div>
                                <a href="">VIEW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <p>
                            <img src="img/omaggio.jpg">
                        </p>
                        <div class="col_txt">
                            <ul>
                                <li>1인가구</li>
                                <li>싱글침대</li>
                                <li>수납형침대</li>
                                <li>아이침대추천</li>
                            </ul>
                            <h3>OMAGGIO</h3>
                            <p>침실 분위기를 다채롭게 연출할 수 있는 침대 OMAGGIO</p>
                            <div>
                                <a href="">VIEW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <p>
                            <img src="img/teenster.jpg">
                        </p>
                        <div class="col_txt">
                            <ul>
                                <li>1인가구</li>
                                <li>싱글침대</li>
                                <li>수납형침대</li>
                                <li>아이침대추천</li>
                            </ul>
                            <h3>TEENSTER</h3>
                            <p>공간 활용도와 실용성을 높힌 TEENSTER</p>
                            <div>
                                <a href="">VIEW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col_scroll">
                    <div class="scrollbar"></div>
                </div>
                <div class="col_arrow left_arrow arrow"></div>
                <div class="col_arrow right_arrow arrow"></div>
            </article>
        </section>

        <section id="news" class="title_name">
            <h2>ACE NEWS</h2>
            <article>
                <div class="news_txt">
                    <p>
                        에이스 침대의<br>
                        새로운 소식을 알려드립니다
                    </p>
                </div>
                <div class="news_img">
                    <img src="img/acesqure_ilsan.jpg" art="new store open">
                </div>
                <div class="news_list">
                    <ul>
                        <li class="news_event_text_color" data-img="img/acesqure_ilsan.jpg">
                                <h4>매장오픈소식</h4>
                                <p>에이스스퀘어 일산점 OPEN</p>
                        </li>
                        <li data-img="img/acenews_summer.jpg">
                                <h4>EVENT</h4>
                                <p>에이스침대몰 '침대가 왔썸머'</p>
                        </li>
                        <li data-img="img/acenews_event.jpg">
                                <h4>EVENT</h4>
                                <p>LG전자 베스트샵 제휴 이벤트</p>
                        </li>
                    </ul>
                </div>
            </article>
        </section>

        <section id="sns" class="title_name">
            <h2>NOW SNS</h2>
            <article>
                <ul class="sns_pic">
                    <li>
                        <a href="#">
                            <img src="img/21062108300280183200.png">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/21062208271981827585.jpg">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/21062902332877033646.png">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/21063011083763716392.png">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/21070108470914995087.png">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/21071203140315004255.png">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/21071404195615984780.png">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/21071505185169025065.png">
                        </a>
                    </li>
                </ul>
                <ul class="sns_logo">
                    <li>
                        <a href="#">
                            <img src="img/instargram-bts1.png">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/facebook-bts2.png">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/blog-bts3.png">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/youtube-bts4.png">
                        </a>
                    </li>
                </ul>
            </article>
        </section>

        <section id="info">
            <article class="map">
                <img src="img/store-map.jpg">
                <div>
                    <p id="info_box_txt">
                        현재 고객님과 가까운<br>
                        매장을 안내해 드립니다.
                    </p>
                    <div id="info_box_sarch">
                        <p>
                            <input type="text" placeholder="매장명 및 지역검색">
                            <a href="#"><span class="map_search"></span></a>
                        </p>
                    </div>
                </div>
            </article>
            <article id="customer">
                <div>
                    <a href="#">
                        <img src="img/mainsec8-icon1.png" alt="product manual">
                        <span>제품 메뉴얼</span>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="img/mainsec8-icon2.png" alt="a/s service">
                        <span>A/S 및 상담</span>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="img/mainsec8-icon3.png" alt="Q&A">
                        <span>자주 묻는 질문</span>
                    </a>
                </div>
            </article>
            <article id="customer_center">
                <div id="customer_center_left">
                    <ul>
                        <li>
                            <h5>고객센터</h5>
                            <p>1599-7121</p>
                            <div>(09:30~18:30, 토요일&공휴일 휴무)</div>
                        </li>
                        <li>
                            <h5>A/S 문의</h5>
                            <p>080-735-7123</p>
                            <div>(09:30~18:30, 토요일&공휴일 휴무)</div>
                        </li>
                    </ul>
                </div>
                <div id="customer_center_right">
                    <div>
                        <h2>
                            언제 어디서든 에이스침대의<br>
                            침대과학을 AR APP으로 만나보세요!
                        </h2>
                        <ul id="app_store_button">
                            <li><a href="#">APP STORE</a></li>
                            <li><a href="#">GOOGLE STORE</a></li>
                        </ul>
                        <a class="more_btn" href="#">more</a>
                    </div>
                </div>
            </article>
        </section>
    </main>

    <div id="top_wrap">
        <p class="top">TOP</p>
        <div class="top_btn">+</div>
    </div>

    <footer>
        <div id="f_left">
            <div class="f_nav">
                <ul>
                    <li><a href="#">기업정보</a></li>
                    <li><a href="#">이용약관</a></li>
                    <li><a href="#"
                        class="priv">개인정보처리방침</a></li>
                    <li><a href="#">매장개설안내</a></li>
                    <li><a href="#">특판사업</a></li>
                    <li><a href="#">고객지원</a></li>
                    <li><a href="#">구매인증센터</a></li>
                </ul>
            </div>
            <div class="adress">
                <address>본사 : 경기도 성남시 중원구 사기막골로 105번길 42(상대원동) / 서울영업본부 : 서울특별시 강남구 도산대로 218 / FAX : 02-544-8788</address>
                <p>COPYRIGHT (C) ACE BED CORPORATION ALL RIGHTS RESERVED</p>
            </div>
        </div>

        <div id="f_right">
            <div>
                <span id="family_click">FAMILY SITE</span><span id="family_btn"></span></span>
                <div class="famliy_site_box">
                    <span class="famliy_site_box_span" id="eng_btn">ENGLISH</span>
                    <spna class="famliy_site_box_span">에이스 에비뉴</spna>
                    <spna class="famliy_site_box_span">에이스 헤리츠</spna>
                    <spna class="famliy_site_box_span">에이스 침대몰</spna>
                    <span id="family_site_box_btn"></span>
                </div>
            </div>
        </div>
    </footer>

    <!--제이쿼리 CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/acebed_HF.js"></script>
    <script src="js/main.js"></script>
</body>
</html>