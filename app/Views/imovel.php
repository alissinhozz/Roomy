<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Roomy | Aluguel para estudantes</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="public\assets\loguinho.ico" />
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
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="pesquisa">Pesquisar</a></li>
                        <li class="nav-item"><a class="nav-link" href="minhaconta">Minha conta</a></li>
                        <li class="nav-item"><a class="nav-link" href="meusvinculos">Meus vínculos</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" action="login">
                        <button href="" class="btn btn-outline-dark" type="submit">
                            Login
                        </button>
                        </form>
                        <form class="d-flex" action="cadastro">
                        <button onclick="cadastro" class="btn btn-outline-dark" type="submit">
                            Cadastre-se
                        </button></form> 
                </div>
            </div>
        </nav>
        
    <center>
    <div class="card" style="width: 50rem;  margin-top: 40px;">
  <img class="card-img-top" src=".../100px180/?text=Image cap" alt="">
  <div class="card-body">
    <h5 class="card-title"><?php echo $imovel['cidade']?></h5>
    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Link do card</a>
    <a href="#" class="card-link">Outro link</a>
  </div>
</div>
</center>
<h4>Cidade:<?php echo $imovel['cidade']?></h4>
<h4>Estado:<?php echo $imovel['estado']?></h4>
<h4>Bairro:<?php echo $imovel['bairro']?></h4>
<h4>Instituição Próxima:<?php echo $imovel['inst_prox']?></h4>
<h4>Tamanho do Imóvel:<?php echo $imovel['tam_imovel']?></h4>
<h4>Tamanho do quarto:<?php echo $imovel['tam_imovel']?></h4>
<h4>Quantidade de pessoas:<?php echo $imovel['qtd_pessoas']?></h4>
<h4>Quantidade de banheiros:<?php echo $imovel['qtd_ban']?></h4>
<h4>Tipo do Imóvel:<?php echo $imovel['tipo']?></h4>
<h4>Descrição:<?php echo $imovel['descricao']?></h4>
<h4>Contato do Usuário:<?php echo $imovel['contatoUser']?></h4>




