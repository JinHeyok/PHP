<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>





<body>
    <?php
    include("main.php"); //body부분안에 넣기
    ?>
    <h2>회원가입 화면</h2>
    <form action="login/memberadd.php" method="POST"><br>

        아이디 : <input type="text" name="id" id="id"> <br>
        비밀번호 : <input type="password" name="password" id="password"><br>
        비밀번호 확인 : <input type="password" name="passwordcheck" id="passwordcheck"><br>
        이름 : <input type=" text" name="name" id="name"><br>
        이메일 : <input type=" text" name="email" id="email">
        @<input type="text" name="eamil2" id="email2"><br>
        생년월일 :<input type=" date" name="date" id="date"><br>
        <hr>
        <input type="submit" value="회원가입" id="memberadd">
        <input type="reset" value="다시하기">
        <a href="main.php">뒤로가기</a>
    </form>



    <script type="text/javascript" src="js/login.js"></script>
</body>


</html>