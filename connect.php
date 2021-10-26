<?php
//("서버:", "아이디", "비밀번호", "DB:이름")
$conn = mysqli_connect("localhost","dotdot964","HT^6w!7e^%^4c54","dotdot964");
// Check connection
if(mysqli_connect_errno()){
    echo "MySQL 연결에 실패하였습니다 : " . mysqli_connect_error();
}
?>