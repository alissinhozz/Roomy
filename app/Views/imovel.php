
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Roomy | Aluguel para estudantes</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets\loguinho.png" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="\css\styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
            <img src="\assets\loguinho.png" alt="logo" width=180 height=90>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?php echo base_url()?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?php echo base_url("pesquisa")?>">Pesquisar</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url("minhaconta")?>">Minha conta</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url("meusvinculos")?>">Meus vínculos</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" action="<?php echo base_url("login")?>">
                        <button href="login" class="btn btn-outline-dark" type="submit">
                            Login
                        </button>
                        </form>
                        <form class="d-flex" action="<?php echo base_url("cadastro")?>">
                        <button onclick="cadastro" class="btn btn-outline-dark" type="submit">
                            Cadastre-se
                        </button></form> 
                </div>
            </div>
        </nav>
        <aside>Quem está aqui:
            <ul class="nav justify-content-center mt-4">
                <li class="nav-item">
                    <a class="nav-link active">Pessoa 1</a>
                </li>
        </aside>  
    <center>
    <div class="card" style="width: 50rem;  margin-top: 40px;">
  <img class="card-img-top" src=".../100px180/?text=Image cap" alt="">
  <div class="card-body">
    <h5 class="card-title"><img src="" alt=""></h5>

  </div>
  <div class="card-footer">
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?php echo $imovel['cidade']?> - <?php echo $imovel['estado']?></li>
    <li class="list-group-item"><?php echo $imovel['tipo']?> próximo (a) a (ao) <?php echo $imovel['inst_prox']?> e no bairro <?php echo $imovel['bairro']?></li>
    <li class="list-group-item">Quatidade de banheiros: <?php echo $imovel['qtd_ban']?></li>
    <li class="list-group-item">Quatidade de pessoas: <?php echo $imovel['qtd_pessoas']?></li>
    <li class="list-group-item">Tamanho do imóvel: <?php echo $imovel['tam_imovel']?>m²</li>
    <li class="list-group-item">Tamanho do quarto: <?php echo $imovel['tam_quarto']?>m²</li>
    <li class="list-group-item"><?php echo $imovel['descricao']?></li>
  </ul>
</div>
<h4>Se interessou? Entre em contato com <?php echo $imovel['contato']?></h4>
<button class="button button2">Quero esse!</button>

</center>

