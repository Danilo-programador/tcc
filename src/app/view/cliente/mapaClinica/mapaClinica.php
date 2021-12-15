<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa clinica</title>
    <link rel="stylesheet" href="../../../../../public/style/bootstrap.min.css">
    <script src="../../../../../public/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['usuario'])) {
        ?>
        <!-- Constainer basic -->
        <div class="container">

            <!-- Navegation bar -->
            <nav class="navbar shadow navbar-dark bg-primary fixed-top">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand nav-link" href="../../core/logout.php">
                        <h2>Mapa Clinica</h2>
                    </a>
                    <a class="navbar-brand nav-link bg-danger" href="../../../core/logout.php">Sair</a>
                </div>
            </nav>

            <!-- Left navgation bar -->
            <div class="offcanvas offcanvas-start d-flex flex-column flex-shrink-0 p-3 bg-light" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="width: 280px;">
                <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                    <img src="../../../../../public/image/usuario.svg" alt="" width="50" height="50" class="rounded-circle me-4">
                    <span class="fs-4">Usuario</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li>
                        <a href="../painelCliente.php" class="nav-link link-dark">
                            <i class="bi bi-list-ul me-2"></i>
                            Carteira de vacina
                        </a>
                    </li>
                    <li>
                        <a href="../reserva/reserva.php" class="nav-link link-dark">
                            <i class="bi bi-list-ul me-2"></i>
                            Reserva de vacina
                        </a>
                    </li>
                    <li>
                        <a href="../mapaClinica/mapaClinica.php" class="nav-link link-dark">
                            <i class="bi bi-list-ul me-2"></i>
                            Mapa de Clinica
                        </a>
                    </li>
                    <li>
                        <a href="../calendario/calendario.php" class="nav-link link-dark">
                            <i class="bi bi-list-ul me-2"></i>
                            Calendário
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../configuracao/alterarSenha.php" class="nav-link link-dark" aria-current="page">
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


            <!-- Divider to adjust the content -->
            <div class="divide mt-5"><br></div>

            <div id="tabela" class="m-5 tabela">
                <div class="container text-center">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Rua</th>
                                <th scope="col">Numero</th>
                                <th scope="col">bairro</th>
                                <th scope="col">Cidade</th>
                                <th scope="col">UF</th>
                                <th scope="col">Localização</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                    include_once('../../../common/fcq.php');
                                    $result = takeLocation();
                                    foreach ($result as $data) {
                                        echo  '<tr>
                                    <th scope="row">' . $data['nome'] . '</th>
                                    <td>' . $data['rua'] . '</td>
                                    
                                    <td>' . $data['numero'] . '</td>
                                    
                                    <td>' . $data['bairro'] . '</td>

                                    <td>' . $data['cidade'] . '</td>

                                    <td>' . $data['uf'] . '</td>

                                    <td><a href="https://www.google.com.br/maps/place/ ' . $data['rua'] . ',+' . $data['numero'] . ' +-+ ' . $data['bairro'] . ',+' . $data['cidade'] . '+-+' . $data['uf'] . '"target="_blank"><button class="border"><img src="../../../../../public/image/mapa.png" alt="Map"></button></a></td>
                                    
                                    </tr>';
                                    }
                                    ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php
    } else {
        header("location: //localhost/TCC_2021-main/src/");
    }
    ?>

</body>

</html>