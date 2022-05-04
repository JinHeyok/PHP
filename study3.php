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
    $id = $_GET["id"];
    $password = $_GET["password"];

    echo "아이디는" . $id . "비밀번호는" . $password;

    // $name = $_COOKIE["name"];
    // $address = $_COOKIE["address"];
    // $age = $_COOKIE["age"];
    // echo "<br>";
    // echo $name . PHP_EOL . $address . PHP_EOL . $age;

    // unset($_COOKIE["name"], $_COOKIE["age"], $_COOKIE["address"]);

    session_start();

    $name = $_SESSION["name"];
    $age = $_SESSION["age"];
    $address = $_SESSION["address"];

    echo "이름은 {$name} 이고 나이는 {$age}이고 사는곳은 {$address}";

    session_unset();
    session_destroy();
    ?>

</body>

</html>