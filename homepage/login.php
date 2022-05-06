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
    include("main.php");
    ?>
    <hr>로그인 화면 </h2>
    <form action="login/login.php" method="POST">
        아이디: <input type="text" name="id"><br>
        비밀번호 : <input type="text" name="password"><br>
        <input type="submit" value="로그인"><br>
    </form>



</body>

</html>