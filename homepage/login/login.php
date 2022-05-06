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
    $id = $_POST["id"];
    $password = $_POST["password"];

    $con = mysqli_connect("localhost", "root", "root", "shopping");
    $sql = "select id , name from member where id = '{$id}' and pw = '{$password}';";

    $result = mysqli_query($con, $sql);

    $board = mysqli_fetch_array($result, MYSQLI_ASSOC);

    session_start();

    if ($board != null) {
    ?>
        <script>
            alert("로그인성공");
            <?php $_SESSION["login"] = $board; ?>
            location.href = "../main.php";
        </script>
    <?php

    } else {
    ?>
        <script>
            alert("로그인 실패");
        </script>
    <?php
    }
    unset($board);
    ?>

</body>

</html>