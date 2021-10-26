<?php
    session_start();
    $_SESSION["names"] = $_POST["names"];
    $_SESSION["email"] = $_POST["email"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>join.php</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/acebed_HF.css">
    <link rel="stylesheet" href="css/join.css">
</head>
<body>
<header>
<header>
        <div class="h_top">
            <ul class="h_top_btn">
                <li class="join"><a href="login.html">로그인</a></li>
                <li class="join"><a href="join.html">회원가입</a></li>
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
                    <li><a href="notice.html">공지/이벤트</a>
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
        <div class="h_bot">
            <nav class="h_left">
                <ul>
                    <li><a class="eng" href="#">BED</a>
                        <a class="kor" href="#">침대</a>
                        <ul class="sub">
                            <li>
                                <a href="#">프레임</a>
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
                <img src="img/header-logo.png" alt="ace logo">
            </h1>
            <nav class="h_right">
                <ul>
                    <li><a href="#">침대과학</a>
                        <ul class="sub">
                            <li>
                                <a href="#">스프링</a>
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
                    <li><a href="#">공지/이벤트</a>
                        <ul class="sub">
                            <li>
                                <a href="#">이벤트</a>
                            </li>
                            <li>
                                <a href="#">당첨자 안내</a>
                            </li>
                            <li>
                                <a href="#">공지사항</a>
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
        <h2>회원가입 완료</h2>
        <section>
            <div id="membership_wrap">
                <article id="cust_info_wrap">
                    <aside>가입 정보</aside>
                    <div class="cust_info">
                        <div class="cust_info_check">
                            <?php
                                $name = $_POST['names'];
                                $tel = $_POST['phone_num'];
                                $email = $_POST['email'];
                                $pw = $_POST['pw'];
                            ?>
                            <ul>
                                <li>
                                    정보 제공 동의 : 
                                    <?php
                                        $agree = count($_POST['agree']);
                                        for($i=0; $i<$agree; $i++){
                                            echo $_POST['agree'][$i];
                                            if($i != $agree-1){
                                                echo ", ";
                                            }
                                        }
                                    ?>
                                </li>
                                <li>
                                    이름 : 
                                    <?= $name?>
                                </li>
                                <li>
                                    휴대전화 번호 : 
                                    <?= $tel?>
                                </li>
                                <li>
                                    이메일 : 
                                    <?= $email?>
                                </li>
                                <li>
                                    비밀번호 : 
                                    <?= $pw?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </main>

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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/acebed_HF.js"></script>
</body>
</html>