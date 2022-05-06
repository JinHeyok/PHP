let login = document.querySelector("#memberadd");
let id = document.querySelector("#id");
let password = document.querySelector("#password");
let passwordcheck = document.querySelector("#passwordcheck");
let email = document.querySelector("#email");
let email2 = document.querySelector("#email2");
let date = document.querySelector("#date");

login.addEventListener("click", function () {

    console.log("성공");
    if(id.value == "" && id.value.length <= 4){
        alert("아이디를 입력해주세요");
        event.preventDefault();
    }
});

