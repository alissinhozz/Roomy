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
                <th>Nome</th>
                <th>Email</th>
                <th>Senha</th>
                <th>Foto</th>
                <th>Gênero</th>
                <th>Número de telefone</th>
                <th>Data de Nascimento</th>
                <th>Tipo</th>
                <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
                <?php if($usuario): ?>
                    <tr>
                    <td><?php echo $usuario['id']; ?></td>
                    <td><?php echo $usuario['nome']; ?></td>
                    <td><?php echo $usuario['email']; ?></td>
                    <td><?php echo $usuario['data_nas']; ?></td>
                    <td><?php echo $usuario['num_tel']; ?></td>
                    <td><?php echo $usuario['genero']; ?></td>
                    <td><?php echo $usuario['descricao']; ?></td>
                    <td><?php echo $usuario['senha']; ?></td>                    
                    <td><?php echo $usuario['tipo']; ?></td>
            
                    <td>
                    <a href="<?php echo base_url('edit-view/'.$usuario['id']);?>" class="btn btn-primary btn-sm">Editar</a>
                    <a href="<?php echo base_url('delete/'.$usuario['id']);?>" class="btn btn-danger btn-sm">Excluir Conta</a>
                    </td>
                </tr>
                <?php //endforeach; ?>
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
