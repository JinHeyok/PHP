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
    session_start();

    if ($_SESSION['login'] != null) {
        session_destroy(); //로그인키로 특정 세션삭제
    ?>
        <script>
            alert("로그아웃 성공");
            location.href = "../main.php";
        </script>

    <?php } else { ?>
        <script>
            alert("로그아웃 실패");
        </script>
    <?php } ?>

</body>

</html>