<?php echo $this->extend('layout') ?>
<?php echo $this->section('content') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Minha Conta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <p>
        <h2>Minha Conta</h2>
        </p>
        <table class="table table-bordered table-striped" id="users-list">
            <thead>
            <tr>
                <th>Id usuario</th>
                <!--</tr>
                <tr>-->
                    <th>Nome</th>
                <!--</tr>
                <tr>-->
                    <th>Email</th>
                <!--</tr>
                <tr>-->
                    <th>Senha</th>
                <!--</tr>
                <tr>-->
                    <th>Foto</th> 
                <!--</tr>
                <tr>-->
                    <th>Gênero</th>
                <!--</tr>
                <tr>-->
                    <th>Número de telefone</th>
               <!-- </tr>
                <tr>-->
                    <th>Data de Nascimento</th>
               <!-- </tr>
                <tr>-->
                    <th>Tipo</th>
               <!-- </tr>
                <tr>-->
                    <th>Descrição</th>
                </tr>
                
            </thead>
            <tbody>
                <?php if($usuario): ?>
                <?php foreach($usuario as $usu): ?>
                <tr>
                    <td><?php echo $usu['id'];?></td>
                <!--</tr>
                <tr>-->
                    <td><?php echo $usu['nome']; ?></td>
               <!-- </tr>
                <tr>-->
                    <td><?php echo $usu['email']; ?></td>
               <!-- </tr>
                <tr>-->
                    <td><?php echo $usu['senha']; ?></td>
                <!--</tr>
                <tr>-->
                    <td><?php echo $usu['genero']; ?></td>
               <!-- </tr>
                <tr>-->
                    <td><?php echo $usu['num_tel']; ?></td>
                <!--</tr>
                <tr>-->
                    <td><?php echo $usu['data_nas']; ?></td>
                <!--</tr>                
                <tr>-->
                    <td><?php echo $usu['tipo']; ?></td>
                <!--</tr>
                <tr>-->
                    <td><?php echo $usu['descricao']; ?></td>
               <!--</tr>
                <tr>-->
                    <td>
                    <a href="<?php echo base_url('edit-view/'.$usu['id']);?>" class="btn btn-primary btn-sm">Editar</a>
                    <a href="<?php echo base_url('delete/'.$usu['id']);?>" class="btn btn-danger btn-sm">Excluir Conta</a>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
      $('#users-list').DataTable();
  } );
</script>
</body>

</html>
<?php echo $this->endSection() ?>