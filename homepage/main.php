<h2><a href="main.php" style="text-decoration: none; color: green;">main</a></h2>
<?php
session_start();


if (isset($_SESSION["login"]) != null) {

?>
    <p><?= $_SESSION["login"]["name"] ?>님 안녕하세요</p>
<?php
}
?>
<a href="loginform.php">회원가입</a><br>

<?php
if (isset($_SESSION["login"]) == null) {
?>
    <a href="login.php">로그인</a>
<?php
} else {
?>
    <a href="login/logout.php">로그아웃</a>
<?php
}
?>