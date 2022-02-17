<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <title>Форма для авторизации</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="./css/style.css" type="text/css">
</head>
<body>
	<div class="dws-wrapper">
		<div class="dws-form">
			<label class="tab active form-label" title="Вкладка 1">Авторизация</label>
			<label class="tab form-label" title="Вкладка 2">Регистрация</label>
			<form id="form-1" class="tab-form active" action="./php/auth.php" method="post">
				<input class="form-control mb-2" name="login" type="text" placeholder="Введите логин">
				<input class="form-control mb-2" name="pass" type="password" placeholder="Введите пароль">
				<button class="button btn btn-primary btn-block mb-2">Войти</button>
				<ul class="d-flex flex justify-content-between mb-3">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					<li><a href="#"><i class="fa fa-vk"></i></a></li>
					<li><a href="#"><i class="fa fa-youtube"></i></a></li>
				</ul>
				<a href="#" class="d-block w-100 text-center">Я забыл свой E-mail или пароль</a>
			</form>
			<form id="form-2" class="tab-form" action="./php/check.php" method="post">
				<input class="form-control mb-2" name="login" type="text" placeholder="Введите логин">
				<input class="form-control mb-2" name="name" type="text" placeholder="Введите свое имя">
				<input class="form-control mb-2" name="pass" type="password" placeholder="Введите пароль">
				<button class="button btn btn-primary mb-2 btn-block">Регистрация</button>
			</form>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	<script src="./js/script.js"></script>
</body>
</html>