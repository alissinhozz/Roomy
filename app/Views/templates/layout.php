<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Roomy | Aluguel para estudantes</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets\favicon.png" />
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

                            
                    </ul>
                    <form class="d-flex" action="login">
                        <button href="" class="btn btn-outline-dark" type="submit">
                            Login
                        </button>
                        </form>
                        <form class="d-flex" action="register">
                        <button onclick="cadastro" class="btn btn-outline-dark" type="submit">
                            Cadastre-se
                        </button></form> 
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-danger py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Roomy</h1>
                    <p class="lead fw-normal text-50 mb-0">O seu novo lar está aqui!</p>
                </div>
            </div>
        </header>
        
        <?php echo $this->renderSection('content') ?>


        <!-- Footer-->
        <footer class="py-5 bg-dark">
        <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6" style="color: white">
            <h6>Sobre</h6>
            <p class="text-justify" style="color: white"> O Roomy chegou para ajudar estudantes e universitários a encontrarem um lar aconchegante e adequado, garantindo a viabilidade de uma moradia segura e seu conforto durante seus estudos!
          </div>
          <div class="col-xs-6 col-md-3" style="color: white">
            <h6>Acesso rápido</h6>
            <ul class="footer-links">
              <li><a href="http://localhost:8080">Home</a></li>
              <li><a href="http://localhost:8080/pesquisa">Pesquisar</a></li>
              <li><a href="http://localhost:8080/minhaconta">Minha conta</a></li>
            </ul>
          </div>
        <div class="col-xs-6 col-md-3" style="color: white">
        <a><img href="#https://www.instagram.com/ifscchapeco/" src="/assets/loguinho.png" style="width: 230px; height: auto; align-items:center" ></a>
        <hr>
        </div>
        
        <div class="col l4 offset-l2 s12">
                <h5 class="white-text" style="text-align: right" Siga nossas redes sociais</h5>
                <ul>
                
                 <h6 class="white-text" style="width: 10px;">Redes socias<h6>
                    
                 <a><img href="#https://www.instagram.com/ifscchapeco/" src="/assets/insta.webp" style="width: 40px; height: auto;" ></a>
                 <a><img href="#https://www.facebook.com/ifscchapeco/" src="/assets/face.png" style="width: 40px; height: auto;"></a>
                 <a><img href="#!" src="/assets/linkedin.png" style="width: 40px; height: auto;"></a>
                 <a><img href="#!" src="/assets/gambi.png" style="width: 40px; height: auto;"></a>
                 <a><img href="#!" src="/assets/gambi.png" style="width: 40px; height: auto;"></a
                 <div class="col l4 offset-l2 s12">
                <h5 class="white-text" style="text-align: right" Siga nossas redes sociais</h5>
                <ul>
                
                </ul>
              </div>
            </div>
          </div>
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; by Roomy</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>