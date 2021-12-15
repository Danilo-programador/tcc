<?php
include('../../core/buscaDadosClinica.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinica</title>
    <link rel="stylesheet" href="../../../../public/style/bootstrap.min.css">
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
                    <a class="navbar-brand nav-link" href="./clinica.php"><h2>Clínicas</h2></a>
                    <a class="navbar-brand nav-link bg-danger" href="../../core/logout.php">Sair</a>
                </div>
            </nav>
            <div class="offcanvas offcanvas-start d-flex flex-column flex-shrink-0 p-3 bg-light" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="width: 280px;">
                <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                    <img src="../../../../public/image/usuario.svg" alt="" width="50" height="50" class="rounded-circle me-4">
                    <span class="fs-4">Administrador</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="./painelAdm.php" class="nav-link link-dark" aria-current="page">
                            <i class="bi bi-house-door-fill me-2"></i>
                            Cadastrar Clinica
                        </a>
                    </li>
                    <li>
                        <a href="./clinica.php" class="nav-link link">
                            <i class="bi bi-list-ul me-2"></i>
                            Clinicas
                        </a>
                    </li>
                    <li>
                        <a href="../../core/logout.php" class="nav-link link-dark bg-danger w-47">
                            <i class="bi bi-list-ul me-2"></i>
                            Sair
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <br>
        <br>
        <div id="tabela" class="m-5 tabela">
            <div class="container text-center">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            foreach ($result as $dados) {
                                echo '<tr>

                            <td>' . $dados['nome'] . '</td>
                            
                            <td>' . $dados['email'] . '</td>
                            
                            <td>' . $dados['telefone'] . '</td>
                            
                            </tr>';
                            }
                            ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <script src="../../../../public/js/bootstrap.bundle.min.js"></script>
    <?php
    } else {
        header("location: //localhost/TCC_2021-main/src/");
    }
    ?>
</body>

</html>