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
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; by Roomy</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
