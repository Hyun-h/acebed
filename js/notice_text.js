window.onload = function() {
    document.getElementById("password").onkeyup = function(e) {
        if( document.getElementById("password").value != "" && e.keyCode == 13) {
            // e.keyCode 는 엔터키를 의미합니다.
            alert("비밀번호는 : " + document.getElementById("password").value);
        } else {
            document.getElementById("password").value = numberOnly(document.getElementById("password").value);
        }
    }
}

function numberOnly(input) {
    return input.replace(/[^0-9]/g,"");
}