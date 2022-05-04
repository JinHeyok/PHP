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
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 이름에 대한 필수 입력 검증

    if (empty($_POST["name"])) {

        $nameMsg = "이름을 입력해 주세요!";

    } else {

        $name = $_POST["name"];

    }

    // 성별에 대한 필수 입력 검증

①  if (!isset($_POST["gender"]) || $_POST["gender"]==false) {

        $genderMsg = "성별을 선택해 주세요!";

    } else {

        $gender = $_POST["gender"];

    }

 

    $email = $_POST["email"];

    $website = $_POST["website"];

 

    // 관심 있는 분야에 대한 필수 입력 검증

    if (empty($_POST["favtopic"])) {

        $favtopicMsg = "하나 이상 골라주세요!";

    } else {

        $favtopic = $_POST["favtopic"];

    }

 

    $comment = $_POST["comment"];

}
?>
</body>

</html>