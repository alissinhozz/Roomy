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
                <h1>Cadastrar Usuário</h1>
                <?php if(isset($validation)):?>
                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                <?php endif;?>
                <form action="/register/save" method="post">
                    <div class="mb-3">
                        <label for="InputForName" class="form-label">Nome completo</label>
                        <input type="text" name="nome" class="form-control" id="InputForName" value="<?= set_value('name') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForEmail" class="form-label">E-mail</label>
                        <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForPassword" class="form-label">Senha</label>
                        <input type="password" name="senha" class="form-control" id="InputForPassword">
                    </div>
                    <div class="mb-3">
                        <label for="InputForConfPassword" class="form-label">Confirme sua senha</label>
                        <input type="password" name="confsenha" class="form-control" id="InputForConfPassword">
                    </div>
                    <!--
                    <div class="mb-3">
                        <label for="InputForTelefone" class="form-label">Número de telefone</label>
                        <input type="text" name="telefone" class="form-control" id="InputForTelefone">
                    </div>
                    <div class="mb-3">
                        <label for="InputForNascimento" class="form-label">Data de nascimento</label>
                        <input type="date" name="nascimento" class="form-control" id="InputForNascimento">
                    </div>
                    <div class="mb-3">
                        <label for="InputForGenero" class="form-label">Gênero</label>
                        <select name="genero" class="form-control" id="InputForGenero">
                            <option value="0">Masculino</option>
                            <option value="1">Feminino</option>
                            <option value="2">Outro</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="InputForTipo" class="form-label">Tipo de usuário</label>
                        <select name="tipo" class="form-control" id="InputForTipo">
                            <option value="0">Locatário</option>
                            <option value="1">Cliente</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="InputForFoto" class="form-label">Foto de perfil</label>
                        <input type="file" accept="image/*" name="foto" class="form-control" id="InputForFoto">
                    </div>
                    <div class="mb-3">
                        <label for="InputForDescricao" class="form-label">Fale um pouco sobre você</label>
                        <textarea name="descricao" class="form-control" id="InputForDescricao" cols="15" rows="5"></textarea>
                    </div>
                    -->
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
            </div>
            
        </div>
    </div>
    