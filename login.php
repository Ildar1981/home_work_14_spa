<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/form-dialog.css">
    <title>Авторизация на странице</title>
</head>
<body>
    <section>
        <form action="sign_in.php" method="post">
<label>login</label>
<input type="text" name="login" placeholder="Введите логин">
<label>password</label>
<input type="password" name="password" placeholder="Введите пароль">
<label>Выберите дату рождения</label>
<input type="date" name="datebirthday" placeholder="Ваша дата рождения">
<button type="submit">Вход на сайт</button>
<?php
    if (isset($_SESSION['message'])) {
        echo '<p class="message">'.$_SESSION['message'].'</p>';
    }
    unset($_SESSION['message']);
?>
        </form>
    </section>
</body>
</html>