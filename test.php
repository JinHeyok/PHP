<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php


    $conn = mysqli_connect("localhost", "root", "root", "scott"); //DB 아이피, 아이디, 비밀번호, 스키마(DB명), 포트번호 입력
    $sql = "select * from emp;" //SQL 쿼리입력


    ?>
</head>

<body>
    <?php
    // $board = array();
    $result = mysqli_query($conn, $sql); //설정과 쿼리문 저장 넘김
    //$board = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $board = mysqli_fetch_array($result, MYSQLI_ASSOC);



    $result_list =   array();
    while ($row = mysqli_fetch_array($result)) {

        // foreach ($row as $key => $rows) {
        //     echo $rows;
        // }



    ?>
        <table border="1">
            <tr>
                <td>사원번호</td>
                <td>사원이름</td>
                <td>직업</td>S
                <td>입사날짜</td>
                <td>월급</td>
                <td>보너스</td>
                <td>부서번호</td>
            </tr>
            <tr>
                <td><?= $row["EMPNO"]; ?></td>
                <td><?= $row["ENAME"]; ?></td>
                <td><?= $row["JOB"]; ?></td>
                <td><?= $row["MGR"]; ?></td>
                <td><?= $row["HIREDATE"]; ?></td>
                <td><?= $row["SAL"]; ?></td>
                <td><?= $row["COMM"]; ?></td>
                <td><?= $row["DEPTNO"]; ?></td>
                </td>
            </tr>
        <?php
    }
        ?>
        <tr>
        </tr>

        </table>


</html>