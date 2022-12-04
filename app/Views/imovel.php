
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Roomy | Aluguel para estudantes</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="\assets\favicon.png" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="\css\styles.css" rel="stylesheet" />
    </head>
    <body style="background-color: #fff3e6;">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
            <img src="\assets\loguinho.png" alt="logo" width=180 height=90>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?php echo base_url()?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="pesquisa">Pesquisar</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?= base_url('main/list') ?>">Lista Imóveis</a></li>
                        <li class="nav-item"><a class="nav-link" href="minhaconta">Minha conta</a></li>
                            
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
        <aside style="background-color: #fff3e6">
            <ul class="nav justify-content-center mt-4">
            <h2 style="text-align:center">Quem está aqui?</h2>

<div class="card" style="background-color:white">
  <img src="/assets/pessoa.jpg" style="width:30%; margin: auto;" >
  <p class="title">Proprietária da casa</p>
  <p>Estuda em Unochapecó</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button>Entre em contato!</button></p>
</div>
<style>
.card {
  box-shadow: 0 4px 8px 0;
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
        </aside>  
    <center>
    <div class="card" style="width: 50rem;  margin-top: 40px; background-color: aliceblue;">
 
  <div class="card-footer">
  <ul class="list-group list-group-flush">
  <img class="card-img-top" src="\assets\home.jpg" width=400 height=100%>
    <li class="list-group-item"><?php echo $imovel['cidade']?> - <?php echo $imovel['estado']?></li>
    <li class="list-group-item"><?php echo $imovel['tipo']?> próximo (a) a (ao) <?php echo $imovel['inst_prox']?> e no bairro <?php echo $imovel['bairro']?></li>
    <li class="list-group-item">Quatidade de banheiros: <?php echo $imovel['qtd_ban']?></li>
    <li class="list-group-item">Quatidade de pessoas: <?php echo $imovel['qtd_pessoas']?></li>
    <li class="list-group-item">Tamanho do imóvel: <?php echo $imovel['tam_imovel']?>m²</li>
    <li class="list-group-item">Tamanho do quarto: <?php echo $imovel['tamquarto']?>m²</li>
    <li class="list-group-item"><?php echo $imovel['descricao']?></li>
  </ul>
</div>
<h4>Se interessou? Entre em contato com <?php echo $imovel['contatoUser']?></h4>
<button class="button button2">Quero esse!</button>

</center>

