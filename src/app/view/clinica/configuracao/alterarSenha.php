<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
    <link rel="stylesheet" href="../../../../../public/style/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../../public/js/bootstrap.bundle.min.js">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        .config {
            margin-top: 90px;
        }

        section {
            margin-top: 90px;
            margin-left: 80px;
            margin-right: 0 px;
        }

        .form {
            width: 600px;
            height: 400px;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['usuario'])) {
    ?>
        <div>
            <nav class="navbar shadow navbar-dark bg-primary fixed-top">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand nav-link" href="painelClinica.php">
                        <h2>Configuração</h2>
                    </a>
                    <a class="navbar-brand nav-link bg-danger" href="../../../core/logout.php">Sair</a>
                </div>
            </nav>
            <div class="offcanvas offcanvas-start d-flex flex-column flex-shrink-0 p-3 bg-light" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="width: 280px;">
                <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                    <img src="../../../../../public/image/usuario.svg" alt="" width="50" height="50" class="rounded-circle me-4">
                    <span class="fs-4">Clinica</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li>
                        <a href="../cadastro/cadastroVacina.php" class="nav-link link-dark">
                            <i class="bi bi-list-ul me-2"></i>
                            Cadastro vacina
                        </a>
                    </li>
                    <li>
                        <a href="../cadastro/cadastroFuncionario.php" class="nav-link link-dark">
                            <i class="bi bi-list-ul me-2"></i>
                            Cadastro funcionário
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="./vacina.php" class="nav-link link-dark" aria-current="page">
                            <i class="bi bi-house-door-fill me-2"></i>
                            Configuração
                        </a>
                    </li>
                    <li>
                        <a href="../../../core/logout.php" class="nav-link link-dark bg-danger w-47">
                            <i class="bi bi-list-ul me-2"></i>
                            Sair
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="config">
            <ul class="nav nav-tabs justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../configuracao/vacina.php">Vacina</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../configuracao/funcionario.php">Funcionario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="../configuracao/alterarSenha.php">Alterar Senha</a>
                </li>
            </ul>
        </div>
        <div class="container form">
            <section class="w-75 p-3 border justify-items-center justify-content-center">
                <form class="row g-3" method="POST" action="../../../core/alterarSenha.php">
                    <div>
                        <div class="col-mb-6">
                            <label for="inputCity" class="form-label">Senha atual</label>
                            <input type="password" name="senhaAtual" class="form-control" id="inputCity" maxlength="20" required />
                        </div>
                        <br>
                        <div class="col-mb-6">
                            <label for="inputCity" class="form-label">Nova senha</label>
                            <input type="password" name="senhaNova" class="form-control" id="inputCity" maxlength="20" required />
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="criar" value="Alterar" class="btn btn-primary w-23">
                        <input type="reset" id="criar" onclick="myFunction()" class="btn btn-primary w-20" name="limpar" value="Limpar" placeholder="Last name" aria-label="Last name">
                    </div>
                </form>
            </section>
        </div>
    <?php
    } else {
        header("location: //localhost/TCC_2021-main/src/");
    }
    ?>
</body>

</html>