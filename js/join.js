function validate() {
    var re = /^[a-zA-Z0-9]{4,12}$/ // 아이디와 패스워드가 적합한지 검사할 정규식
    var re2 = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;
    // 이메일이 적합한지 검사할 정규식

    
    var pw1 = document.getElementById("pw1");                      
    var pw2 = document.getElementById("pw2");                      

    if(join.pw1.value != join.pw2.value) {
        alert("비밀번호가 다릅니다. 다시 확인해 주세요.");
        join.pw2.value = "";
        join.pw2.focus();
        return false;
    }
}