<?php
session_start();
include 'functions.php';

$login_enter = $_POST['login'];
$password_enter = $_POST['password'];
$datebirthday = $_POST['daybirthday'];

if($_POST['login'] !== '' && $_POST['password'] !== '' && $_POST['daybirthday'] !== '') {

    $_SESSION['checkBirthDay'] = getDateDifferent($datebirthday);

    if(checkPassword($login_enter, $password_enter)) {
        $_SESSION['authorized'] = true;
        $_SESSION['currentUser'] = $login_enter;
        header('Location: index.php');
    } else {
        $_SESSION['message'] = 'Неверно введены логин или пароль. Проверьте еще раз вводимые значения.';
        header('Location: login.php');
    } 
} else {
    $_SESSION['message'] = 'Не заполнено одно из обязательных полей логин, пароль или дата рождения.';
    header('Location: login.php');
}