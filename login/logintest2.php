<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    $id = $_SESSION["id"];
    $password = $_SESSION["password"];

    echo "세션에 담긴 아이디는 ${id}이고 비밀번호는 {$password}";

    session_destroy();

    echo "<br>";

    $id2 = $_GET["id2"];
    $password2 = $_GET["password2"];

    echo "전송받은 데이터는 {$id2} 하고 {$password2} 이전과 동일하다.";

    ?>
</body>

</html>