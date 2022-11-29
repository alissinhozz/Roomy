<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>Cadastro de usuário | Roomy</title>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-md-center">

            <div class="col-6">

                <h1>Cadastre-se</h1>


                <?php if(isset($validation)):?>
                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                <?php endif;?>
                <form action="/register/save" method="post">
                    <div class="mb-3">
                        <label for="InputForName" class="form-label">Nome</label>
                        <input type="text" name="nome" class="form-control" id="InputForName" value="<?= set_value('name') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForEmail" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForCell" class="form-label">Número de telefone</label>
                        <input type="tel" name="num_tel" class="form-control" id="InputForCell" value="<?= set_value('num_tel') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForDescricao" class="form-label">Descrição</label>
                        <textarea id="descricao" name="descricao" rows="4" cols="50" value="<?= set_value('descricao') ?>"></textarea>
                        
                    </div>
                    <div class="mb-3">
                        <label for="InputForGenero" class="form-label">Gênero</label>
                        <input type="text" name="genero" class="form-control" id="InputForGenero" value="<?= set_value('genero') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForNas" class="form-label">Data de nascimento</label>
                        <input type="date" name="data_nas" class="form-control" id="InputForNas" value="<?= set_value('data_nas') ?>">
                    </div>
                    <label for="tipo">Tipo</label>
	                <select id="tipo" name="tipo">
		            <option value="1">Locatário</option>
		            <option value="2">Inquilino</option>    
	                </select>
                    <div class="mb-3">
                        <label for="InputForimg" class="form-label">Uma foto sua</label>
                        <input type="file" name="foto" class="form-control" id="InputForimg">
                    </div>
                    <div class="mb-3">
                        <label for="InputForPassword" class="form-label">Senha</label>
                        <input type="password" name="senha" class="form-control" id="InputForPassword" value="">
                    </div>
                    <div class="mb-3">
                        <label for="InputForPassword" class="form-label">Confirmar a Senha</label>
                        <input type="password" name="confsenha" class="form-control" id="InputForPassword" value="">
                    </div>
                    <button type="submit">Cadastrar</button>
  </body>