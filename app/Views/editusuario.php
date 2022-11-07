<?php echo $this->extend('layout') ?>
<?php echo $this->section('content') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Minha Conta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .container {
      max-width: 500px;
    }
    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style>
  </head>

<body>
    <div class="container mt-5">
        <p><h2>Minha Conta</h2></p>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <form method="post" id="update_usuario" name="update_usuario" action="<?= site_url('/update')?>">
                    <input type="hidden" name="idUsuario" id="idUsuario" value="<?php echo $user_obj['idUsuario']; ?>">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="nome" class="form-control" value="<?php echo $user_obj['nome']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="<?php echo $user_obj['email']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Número de telefone</label>
                        <input type="tel" name="num_tel" class="form-control" value="<?php echo $user_obj['num_tel']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Descrição</label>
                        <input type="text" name="descricao" class="form-control" value="<?php echo $user_obj['descricao']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Senha</label>
                        <input type="password" name="senha" class="form-control" value="<?php echo $user_obj['senha']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Tipo</label>
                        <input type="text" name="tipo" class="form-control" value="<?php echo $user_obj['tipo']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="image" name="fotoUser" class="form-control" value="<?php echo $user_obj['fotoUser']; ?>">
                    </div>
                    <div class="form-group"><br/>
                    <button type="submit" class="btn btn-info btn-block">Salvar alterações</button>
                    </div>
                </form>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
        if($("#update_usuario").length>0){
            $("update_usuario").validate({
                rules: {
                    nome:{
                        required: true,
                    },
                    email:{
                        required: true,
                        maxlength:60,
                        email: true,
                    },
                },
                    messages: {
                        nome:{
                            required: "É necessário digitar seu nome.",
                        },
                        email: {
                            required:"É necessário digitar seu email.",
                            email: "Isso não parece um endereço válido de email.",
                            maxlength: "O email deve ter no máximo 60 caracteres.",
                        },
                    },
            })
        }
    </script>
</body>

</html>
<?php echo $this->endSection() ?>