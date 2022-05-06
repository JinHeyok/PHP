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
    $name = $_POST["name"];
    $email = $_POST["email"];
    $date = $_POST["date"];

    $con = mysqli_connect("localhost", "root", "root", 'shopping');
    $sql = "insert into member values('{$id}' , '{$password}', '{$name}' ,'{$email}', '{$date}');";

    $result = mysqli_query($con, $sql);


    if ($result != null) {
        echo "회원가입 완료" . "<br>";
    } else {
        echo "회원가입 실패" . "<br>";
    }

    $result = null;
    ?>

    <a href="../main.php">메인</a><br>
    <a href="../loginform">다시 회원가입하기 </a><br>


</body>

</html>