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
    $i = 3 + 4 * 5; //23 순서 : 4 * 5 먼저 계산후  + 3을 더한다.
    $i2 = (3 + 4) * 5; //35 순서 : (3 + 4) 을 먼저 연산 후 *5을 한다.
    $i3 = 3 + 4 - 5; // 2 연산은 왼쪽에서 오른쪽으로 연산된다.
    $x = $i = $i2; //35 대입시 오른쪽에서 왼쪽으로 결합한다. 나$i 도 35가 된다.

    echo $i . "<br>";
    echo $i2 . "<br>";
    echo $i3 . "<br>";
    echo $x



    ?>



</body>

</html>