<!DOCTYPE html>
<html>
<head>
	<title>Bombons TR</title>
</head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="icons/home.svg" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<body>

	<div class="container-index">

		<form class="form" action="php/CRUD/login.php" method="POST">

			<fieldset>

				<a class="link" href="">Cadastre-se aqui</a>
				
				<div class="inputs">
					<input type="text" name="user" placeholder="E-mail ou Usuário">	
					<div class="inputs">
						<input type="password" name="pass" placeholder="Senha">
						<div class="password-text">
							<a class="link" href="">Esqueceu sua senha?</a>
						</div>
					</div>
				</div>

					<button type="submit">Adicionar à sacola</button>
			</fieldset>
		</form>
	</div>
</body>
</html>