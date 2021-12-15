<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Home Screen</title>

    <!-- Format -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=7" />

    <!-- View Port -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@500;700&display=swap" rel="stylesheet" />

    <!-- Style Sheets -->
    <link rel="stylesheet" href="../public/style/bootstrap.min.css">

<body>

    <!-- Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg fixed-top bg-dark navbar-$blue-900 ">
            <div class="container">
                <a href="./index.php" class="navbar-brand"><p class="fs-3 fw-bold">Aplique Aqui</p></a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item me-3">
                            <a href="./index.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="#about" class="nav-link">Sobre</a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="#forum" class="nav-link">Noticia</a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="#contact" class="nav-link">Contato</a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="#help" class="nav-link">Ajuda</a>
                        </li>
                    </ul>
                    <form class="ms-auto">
                        <a>
                            <button class="btn btn-outline-primary me-2" data-bs-toggle="modal" data-bs-target="#loginModal" type="button">Logar</button>
                        </a>
                        <a href="./app/view/geral/cadastroUsuario.php"><button class="btn btn-primary me-2" type="button">Criar
                                conta</button></a>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <!-- Introduction -->
    <section class="bg-dark text-light p-5 text-center text-sm-start mt-5">
        <div id="introduction" class="container">
            <div class="d-sm-flex align-items-center justify-items-center">
                <div>
                    <h1>Mais <spam class="text-warning">praticidade</spam> , agilidade e segurança</h1>
                    <p class="lead my-4"><strong>
                            Com a nossa ajuda, você tem sua carteira de vacinação online e pode fazer as reservas das suas vacinas sem sair de casa! Com poucos cliques você fica mais perto de ser imunizado, então o que está esperando? Faça o acesso e agende já a sua!!!
                        </strong>
                    </p>
                    <a>
                        <button class="btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#loginModal" type="button">Logar</button>
                    </a>
                </div>
                <img class="img-fluid w-50 d-none d-sm-block" src="../public/image/undraw_medicine_b-1-ol.svg" alt="">
            </div>
        </div>
    </section>

    <!-- Sobre nós -->
    <section class="bg-white text-light p-5 text-center text-sm-start">
        <div id="about" class="container">
            <div class="d-sm-flex align-items-center justify-items-center">
                <img class="img-fluid w-50 d-none d-sm-block m-5" src="../public/image/undraw_team_work_k-80-m.svg" alt="">
                <div>
                    <h1 class="text-dark">Sobre nós</h1>
                    <p class="lead my-4 text-dark">
                        <strong>
                            Somos alunos da Etec Hortolândia em busca de uma melhor saúde não só para nossos amigos e familiares, mas para muitas pessoas! E por isso desenvolvemos o ApliqueAqui, com a contribuição de nossos colegas de classe e professores.
                        </strong>
                    </p>
                    <a>
                        <button class="btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#loginModal" type="button">Logar</button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Forum -->
    <section class="bg-dark text-light p-5 text-center text-sm-start">
        <div id="forum" class="container">
            <div class="d-sm-flex align-items-center justify-items-center">
                <div>
                    <h1 class="text-primary">Noticia</h1>
                    <p class="lead my-4">
                        <strong>
                            As mais frescas notícias do mundo da saúde e da vacinação!
                        </strong>
                    </p>
                    <a href="https://g1.globo.com/bemestar/vacina/">
                        <button class="btn-primary btn-lg" type="button">Ver mais</button>
                    </a>
                </div>
                <img class="img-fluid w-50 d-none d-sm-block" src="../public/image/undraw_online_discussion_-5-wgl.svg" alt="">
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section class="bg-white text-light p-5 text-center text-sm-start">
        <div id="contact" class="container">
            <div class="d-sm-flex align-items-center justify-items-center">
                <img class="img-fluid w-50 d-none d-sm-block m-5" src="../public/image/undraw_personal_file_-222-m.svg" alt="">
                <div>
                    <h1 class="text-primary">Contato</h1>
                    <p class="lead my-4 text-dark">
                        <strong>
                            Alisson Araujo - alisson.araujo9@etec.sp.gov.br <br>
                            Danilo Almeida - danilo.almeida86@etec.sp.gov.br <br>
                            Gustavo Alencar - gustavo.alencar01@etec.sp.gov.br <br>
                            Gustavo Santos - gustavo.santos976@etec.sp.gov.br
                        </strong>
                    </p>
                    <a>
                        <button class="btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#loginModal" type="button">Logar</button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Help -->
    <section class="bg-dark text-light p-5 text-center text-sm-start">
        <div id="help" class="container">
            <div class="d-sm-flex align-items-center justify-items-center">
                <div>
                    <h1 class="text-primary">Ajuda</h1>
                    <p class="lead my-4">
                        <strong>
                        Se tiver qualquer dúvida sobre o nosso site, por favor tente contatar um dos emails que estão na sessão de "Contato".
                        </strong>
                    </p>
                    <a>
                        <button class="btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#loginModal" type="button">Logar</button>
                    </a>
                </div>
                <img class="img-fluid w-50 d-none d-sm-block" src="../public/image/undraw_different_love_a-3-rg.svg" alt="">
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="container py-5">
        <div class="row">
            <div class="col-12 col-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24">
                    <title>Product</title>
                    <circle cx="12" cy="12" r="10"></circle>
                    <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94">
                    </path>
                </svg>
                <small class="d-block mb-3 text-muted">© 2017–2021</small>
            </div>
            <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary" href="#">Cool stuff</a></li>
                    <li><a class="link-secondary" href="#">Random feature</a></li>
                    <li><a class="link-secondary" href="#">Team feature</a></li>
                    <li><a class="link-secondary" href="#">Stuff for developers</a></li>
                    <li><a class="link-secondary" href="#">Another one</a></li>
                    <li><a class="link-secondary" href="#">Last time</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary" href="#">Resource name</a></li>
                    <li><a class="link-secondary" href="#">Resource</a></li>
                    <li><a class="link-secondary" href="#">Another resource</a></li>
                    <li><a class="link-secondary" href="#">Final resource</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary" href="#">Business</a></li>
                    <li><a class="link-secondary" href="#">Education</a></li>
                    <li><a class="link-secondary" href="#">Government</a></li>
                    <li><a class="link-secondary" href="#">Gaming</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary" href="#">Team</a></li>
                    <li><a class="link-secondary" href="#">Locations</a></li>
                    <li><a class="link-secondary" href="#">Privacy</a></li>
                    <li><a class="link-secondary" href="#">Terms</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" method="POST" action="./app/core/login.php">
                        <div class="mb-3">
                            <label clas="" for="email">Email:</label>
                            <input class="form-control form-control-sm bg-light" type="email" name="email" placeholder="E-mail" id="" maxlength="100" required>
                        </div>
                        <div class="mb-3">
                            <label for="senha">Senha:</label>
                            <input class="form-control form-control-sm bg-light" maxlength="20" type="password" name="senha" placeholder="Senha" id="senha" required>
                        </div>
                        <div>
                            <div class="text-center">
                                <a href="../src/app/view/geral/esqueciSenha.php" class="">Esqueci minha senha</a>
                            </div>
                            <div class="text-center">
                                <a href="./app/view/geral/cadastroUsuario.php" class="">Não tem conta? Crie sua conta</a>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" name="logar" value="   logar   " id="logar" class="btn btn-primary btn-md">
                            <input type="reset" name="cancelar" value="cancelar" id="cancelar" class="btn btn-outline-primary btn-md">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="../public/js/bootstrap.bundle.min.js"></script>
</body>

</html>