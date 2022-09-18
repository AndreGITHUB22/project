<html>
<head>
<meta charset="utf-8">
<title>About </title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container mt-1">
		<?php 
		if ($_COOKIE['user'] = ''):
			?>
		<h1><center>Реєстрація</h1>
		<form action="check_post.php" method="post">
			<input  id="name" type="text" name="username" placeholder="Введіть Ім'я" class="form-control"><br>
			<input id="email" type="email" name="email" placeholder="Введіть пошту" class="form-control"><br>
			<input id="password" type="password" name="password" placeholder="Введіть пароль" class="form-control"><br>
			<textarea name="message" class="form-control" placeholder="Введіть повідомлення"></textarea><br>
			<input type="submit" value="Зареєструватися" class="btn btn-success">
		</form>
		<h2><a href="index.php">Головна сторінка</a></h2>
		<h2><a href="login.php">Увійти</a></h2><br>
		<?php 
	else:?>
		<p>Вітаємо, <?=$_COOKIE['email']?>.Для виходу натисніть<a href="logout.php"> тут</a>. </p>
		<?php 
	endif; 
		?>
		</h4>&copy;Всі права захищено</h4>
	</div>
</body>
</html>