<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php


    $conn = mysqli_connect("localhost", "root", "root", "scott"); //DB 아이피, 아이디, 비밀번호, 스키마(DB명), 포트번호 입력
    //$sql = "select * from emp;" //SQL 쿼리입력
    $sql = "select EMPNO, ENAME, JOB, HIREDATE, SAL, COMM, DEPTNO from emp;" //SQL 쿼리입력


    ?>
</head>

<body>
    <?php
    // $board = array();
    $result = mysqli_query($conn, $sql); //설정과 쿼리문 저장 넘김

    ?>
    <table border="1">
        <tr>
            <td>사원번호</td>
            <td>사원이름</td>
            <td>직업</td>
            <td>입사날짜</td>
            <td>월급</td>
            <td>보너스</td>
            <td>부서번호</td>
        </tr>
        <?php while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
            <!-- 일차원 배열을 나눠준다  -->
            <tr>
                <?php foreach ($row as $value) { ?>

                    <!-- 나눈 데이터를 하나씩 출력한다.하나의 레코드가 끝나면 두번째 레코드부터 다시 -->
                    <td><?= $value ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>


</html>