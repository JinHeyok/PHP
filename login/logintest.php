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

    echo $id . PHP_EOL . $password;



    ?>
    <form action="logintest2.php" method="GET">
        아이디 : <input type="text" name="id2" value="<?= $id ?>"><br>
        비밀번호: <input type="text" name="password2" value="<?= $password ?>"><br>
        <input type="submit" value="전송">
    </form>

    <?php
    session_start();

    $_SESSION["id"] = $id;
    $_SESSION["password"] = $password;
    ?>

</body>

</html>