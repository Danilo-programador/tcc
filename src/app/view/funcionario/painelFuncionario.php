<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
    <link rel="stylesheet" href="../../../../public/style/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../public/js/bootstrap.bundle.min.js">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        section {
            margin-top: 90px;
            margin-left: 130px;
            margin-right: 0px;
        }

        .form {
            margin-top: 90px;
        }
    </style>
</head>

<body>
    <div class="container">
        <nav class="navbar shadow navbar-dark bg-primary fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand nav-link" href="painelFuncionario.php">
                    <h2>Reserva</h2>
                </a>
                <a class="navbar-brand nav-link bg-danger" href="../../../app/core/logout.php">Sair</a>
            </div>
        </nav>
        <div class="offcanvas offcanvas-start d-flex flex-column flex-shrink-0 p-3 bg-light" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="width: 280px;">
            <a href="" class="d-flex align-items-cente#r mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <img src="../../../../public/image/usuario.svg" alt="" width="50" height="50" class="rounded-circle me-4">
                <span class="fs-4">Funcionario</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="./painelFuncionario.php" class="nav-link link-dark" aria-current="page">
                        <i class="bi bi-house-door-fill me-2"></i>
                        Reserva
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./configuracao/alterarSenha.php" class="nav-link link-dark" aria-current="page">
                        <i class="bi bi-house-door-fill me-2"></i>
                        Configuração
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

        <div class="container form">
            <div class="container text-center mt-1">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Vacina</th>
                            <th scope="col">Data</th>
                            <th scope="col">Horario</th>
                            <th scope="col">Baixa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                         include('../../common/fcq.php');
                         session_start();
                         $idF = $_SESSION['usuario'];
                         $idFuncionario = $idF['id'];
                         $resultado = colocaReserva();
                         foreach($resultado as $dados) {
                            echo '<tr>
                              <th scope="row">'.$dados['nome'].'</th>
                              <td>'.$dados['vacina'].'</td>
                              <td>'.$dados['data_nascimento'].'</td>
                              <td>'.$dados['horario'].'</td>
                              <td><a href ="../../core/baixaReserva.php?idUsuario='.$dados['id'].' &&
                                  idFuncionario='.$idFuncionario.' && idClinica='.$dados['id_clinica'].' && vacina='.$dados['idVacina'].'"><button>baixa</button></a></td>
                             </tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>