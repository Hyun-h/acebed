<?php
    //DB 연결
    include "connect.php";

    //login.html에서 email, pw 가져오기
    $email = $_POST["login_email"];
    $password = $_POST["login_pw"];

    //DB에서 email, pw 가져오기
    $sql = "SELECT * FROM membership_join WHERE email = '{$email}'";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($result);
    $hash_pw = $row["pw"];
    $row["email"];

    //검증의 시간
    $passwordResult = password_verify($password, $hash_pw);
    var_dump($passwordResult);

    if($passwordResult === true) {
        //session에 email 저장
        session_start();
        $_SESSION["login_email"] = $row["email"];
?>
    <script>
        alert ("로그인에 성공하였습니다.");
        location.href = "index.php";
    </script>
<?php
    } else {
?>
    <script>
        alert("로그인에 실패하였습니다.")
        location.href = "login.html";
    </script>
<?php
    }
?>