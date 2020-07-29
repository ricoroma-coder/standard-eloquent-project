<!DOCTYPE html>
<html>
<head>
	<?php require __DIR__.'/../layout/links.php'; ?>
	<title>Eloquent Project - Login</title>
</head>
<body>

	<?php  require __DIR__.'/../../preparation/header.php'; ?>	

	<?php require __DIR__.'/../components/navbar.php'; ?>

	<div id="content">
		
		<div class="row m-0 mt-5 pt-5">
			
			<form class="form-group row col-sm-6 m-auto p-4 border border-secondary rounded" method="POST" action="/cadastrar/auth">
				<div class="col-sm-12 mb-2">
					<label class="font4" for="name-input">Nome</label>
    				<input type="text" class="form-control" id="name-input" placeholder="Nome" name="name">
				</div>

                <div class="col-sm-12 mb-2">
					<label class="font4" for="username-input">Nome de usuário</label>
    				<input type="text" class="form-control" id="username-input" placeholder="Nome de usuário" name="username">
				</div>

				<div class="col-sm-12 mb-2">
					<label class="font4" for="password-input">Senha</label>
    				<input type="password" class="form-control" id="password-input" placeholder="Senha" name="password">
				</div>

                <div class="col-sm-12 mb-2">
					<label class="font4" for="email-input">E-mail</label>
    				<input type="text" class="form-control" id="email-input" placeholder="E-mail" name="email">
				</div>

				<div class="col-sm-12 mb-2 text-right">
					<button class="btn btn-primary">Entrar</button>
				</div>
				
			</form>

		</div>

	</div>

	<?php require __DIR__.'/../layout/scripts.php'; ?>
</body>
</html>