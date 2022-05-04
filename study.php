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
    $var = 10; //전역변수로 지정
    function test()
    {
        echo "tset()함수에서 호출한 전역변수 {$GLOBALS['var']}"; //global 전역변수를 선언하지 않았기 때문에 오류 및 출력 불가능
        //{$GLOBALS['var']} 바로 전역변수로호출 가능 ($GLOBALS 대문자주의)
        echo "<hr>";
        global $var; // 함수내에서 사용 할 전역 변수를 명시함
        echo "global 전역변수 선언후 호출 {$var}"; // {$var} 출력
    }

    echo "문장열에 변수 var를 선언하기 위해서는 중괄호{}안에 변수값을 넣어줘야한다.${var} <= 변수값";
    echo "<hr>";

    function counrt()
    {
        static $count = 0;
        echo "함수 내부에서 호출한 static 변수 선언 count의 값은 {$count}";
        $count++; //변수의 호출이 종료되더라도 static이 선언된 변수는 메모리에 사라지지않는다.(값이 변하지않음)
        //함수내에서 사용할 경우 함수 내부에서만 접근 가능
    }

    echo "<hr>";
    function definetest()
    {
        define("PHP", "ABCDEFG");
        //상수 함수 밖에서 함수 호출 후 출시 사용이 가능하다.
    }






    // echo __FILE__;  // 파알 위치
    // echo __LINE__ . "<br>"; // 현재 라인의 위치
    // echo __DIR__ . "<br>"; // 디렉토리 위치 
    // echo __FUNCTION__ . "<br>";
    // echo __CLASS__;
    // echo __TRAIT__;
    // echo __METHOD__;
    // echo __NAMESPACE__;

    // $float_01 = 3.14;
    // echo $float_01 . "<br>";

    // $str_01 = "PHP";
    // $num = 1234;
    // echo strlen($str_01) . "<br>"; //문자열 길이 strlen
    // echo strlen($num) . "<br>"; // 정수도 길이 가능

    echo "<hr>";
    $arr = array( // 배열은 key 와value 값으로 맵형식으로 저장된다.
        1 => "첫번째 값",
        '1' => "두 번째 값", // 같은 키값을 선언해서 다시 초기화
        10 => "세번 째 값",
        -10 => "네번쨰 값"
    );
    // var_dump($arr); //브라우저에 배열 전체룰 출력
    echo $arr[1] . "<br>";
    echo $arr[10] . "<br>";
    echo $arr[-10];

    echo "<hr>";

    $php = "html"; //php <-html
    $html = "css"; //html <- css 
    $css = "javascript"; // css <- javascript
    $javascript = "Ajax"; // javascript <- Ajax

    echo $php;
    echo $$php;
    echo $ $$php;
    echo $ $ $$php;

    echo "<br>";

    $var = 10;
    $var2 = 20;

    $result = ($var == $var2) ? "같다" : "다르다";
    echo $result; //다르다ㅣ

    echo "<br>";

    $var = 0;
    do {
        echo "반복값은 " . (++$var);
    } while ($var > 5);

    for ($i = 0; $i < 5; $i++) {
        echo $i;
    }

    echo "<br>";

    $arr = array(2, 4, 5, 6);
    foreach ($arr as $x) {
        echo $x;
    }
    unset($x);

    $arr2 = array(
        "둘" => 2,
        "넷" => 4,
        "여섯" => 6,
        "여덟" => 8
    );

    foreach ($arr2 as $key => $value) {
        echo "배열 arr2에 대하여 key값은 {$key}에 대한 값은 {$value}입니다." . "<br>";
    }

    $exceptNum = 4;
    for ($i = 0; $i <= 100; $i++) {
        if ($i % $exceptNum == 0)
            continue;
        echo "{$i} ";
    }
    echo "<br>";

    $sum = 0;
    $startNum = 1;
    $endNum = 100;
    $i = $startNum;
    while (true) { // 일부러 만든 무한 루프임.
        $sum += $i;
        if ($i == $endNum)
            break;  //if의 조건식이 같아지면 break가 실행된다.
        $i++;
    }
    echo "{$startNum}에서부터 {$endNum}까지 더한 값은 {$sum}입니다.";
    echo "<br>";

    $arr = array(1, 2, 3, 4);            // 배열의 생성

    echo count($arr); //배열의 요소 갯수를 

    //다차원 배열

    ?>
    <form action="study2.php" method="POST">
        이름: <input type="text" name="name"><br>
        이메일 : <input type="text" name="email"><br>
        <input type="submit">
    </form>
    <?php
    // $name = "방진혁";
    // $age = 27;
    // $address = "부천";

    // setcookie("name", $name);
    // setcookie("address", $address);
    // setcookie("age", $age);

    session_start();

    $_SESSION["name"] = "방진혁";
    $_SESSION["age"] = 27;
    $_SESSION["address"] = "부천";

    //session_unset();


    ?>
    <form action="study3.php" method="GET">

        아이디 : <input type="text" name="id"><br>
        비밀번호 : <input type="text" name="password"><br>
        <input type="submit" value="로그인">
    </form>
    <?php
    $x = 5;
    echo gettype($x); //integer

    echo "<br>";
    settype($x, "string"); //문자열로 데이터변환
    echo gettype($x); // 문자열 5가 된다.

    echo "<br>";

    $s = 10;

    if (empty($s)) {
        echo "비어있다.";
    } else {
        echo "비어있지않다.";
    }

    $x1 = 10;

    echo "<br>";

    var_dump(intval($x1));
    var_dump(strval($x1));

    echo "<br>";

    $arr9 = array(1, 3, 4, 5, 1, 2, 3, 2);

    echo "배열의 갯수는 " . count($arr9) . "입니다.";
    echo "배열의 갯수는 " . sizeof($arr9) . "입니다.";

    $gun = array_count_values($arr9);
    echo $gun;

    sort($arr9);

    foreach ($arr9 as $x) {
        echo $x;
    }

    echo "<br>";

    echo strcmp("abc", "ABC");     // 양수 1
    echo strcasecmp("abc", "ABC"); // 0
    echo strcmp("2", "10");        // 양수 1
    echo strnatcmp("2", "10");     // 음수 -1

    echo "<br>";
    $str = "Hello, World!";
    echo substr($str, 3) . "<br>";     // 네 번째 문자부터 끝까지 출력
    echo substr($str, -3) . "<br>";    // 끝에서부터 세 글자 출력
    echo substr($str, 1, 5) . " <br>";  // 두 번째 문자부터 다섯 글자 출력
    echo substr($str, 1, -5) . "<br>"; // 두 번째 문자부터 뒤에서 여섯 번째 문자까지 출력

    echo "<br>";

    echo date("y/m/d");

    echo "<br>";

    echo mktime(0, 0, 0, 1, 1, 2000) . "<br>";  // 2000년 1월 1일을 나타내는 타임스탬프
    echo time();


    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        이름 : <input type="text" name="name">

        성별 :

        <input type="radio" name="gender" value="female">여자

        <input type="radio" name="gender" value="male">남자

        이메일 : <input type="text" name="email">

        홈페이지 : <input type="text" name="website">

        관심 있는 분야 :

        <input type="checkbox" name="favtopic[]" value="movie"> 영화

        <input type="checkbox" name="favtopic[]" value="music"> 음악

        <input type="checkbox" name="favtopic[]" value="game"> 게임

        <input type="checkbox" name="favtopic[]" value="coding"> 코딩

        기타 : <textarea name="comment"></textarea>

        <input type="submit" value="전송">

    </form>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) { // 비어있으면
            $nameMsg = "이름을 입력해주세요";
        } else {
            $name = $_POST["name"];
        }
        //성별 검ㅈ으
        if (empty($_POST["gender"] == true)) {
            $genderMsg = "성별을 입력해주세요";
        } else {
            $gender = $_POST["gender"];
        }
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        <p class="alert">* : 필수 입력 사항</p>

        이름 : <input type="text" name="name"><span class="alert"> * <?php echo $nameMsg ?></span>

        성별 :

        <input type="radio" name="gender" value="female">여자

        <input type="radio" name="gender" value="male">남자 <span class="alert"> * <?php echo $genderMsg ?></span>

        이메일 : <input type="text" name="email">

        홈페이지 : <input type="text" name="website">

        관심 있는 분야 :

        <input type="checkbox" name="favtopic[]" value="movie"> 영화

        <input type="checkbox" name="favtopic[]" value="music"> 음악

        <input type="checkbox" name="favtopic[]" value="game"> 게임

        <input type="checkbox" name="favtopic[]" value="coding"> 코딩

        <span class="alert"> * <?php echo $favtopicMsg ?></span>

        기타 : <textarea name="comment"></textarea>

        <input type="submit" value="전송">

    </form>
</body>

</html>