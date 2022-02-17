<?php

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$mysql = new mysqli('localhost', 'root', 'root', 'register-bd');

$result = $mysql->query("SELECT * FROM `users` WHERE login = '{$login}'");
$user = $result->fetch_assoc(); // Конвертируем в массив
if(count($user) == 0){
    echo "Такой пользователь не найден.";
    exit();
} else if (!password_verify($pass, $user['pass'])) {
    echo "Неправильный пароль";
    exit();
}

setcookie('user', $user['name'], time() + 3600, "/");

$mysql->close();

header('Location: ../../html/page.html');

?>