<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cliente</title>
  <link rel="stylesheet" href="../../../../public/style/bootstrap.min.css">
  <script src="../../../../public/js/bootstrap.bundle.min.js"></script>


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
            <h2>Carteira de vacina</h2>
          </a>
          <a class="navbar-brand nav-link bg-danger" href="../../core/logout.php">Sair</a>
        </div>
      </nav>

      <!-- Left navgation bar -->
      <div class="offcanvas offcanvas-start d-flex flex-column flex-shrink-0 p-3 bg-light" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="width: 280px;">
        <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
          <img src="../../../../public/image/usuario.svg" alt="" width="50" height="50" class="rounded-circle me-4">
          <span class="fs-4">Usuario</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li>
            <a href="./painelCliente.php" class="nav-link link-dark">
              <i class="bi bi-list-ul me-2"></i>
              Carteira de vacina
            </a>
          </li>
          <li>
            <a href="./reserva/reserva.php" class="nav-link link-dark">
              <i class="bi bi-list-ul me-2"></i>
              Reserva de vacina
            </a>
          </li>
          <li>
            <a href="./mapaClinica/mapaClinica.php" class="nav-link link-dark">
              <i class="bi bi-list-ul me-2"></i>
              Mapa de Clinica
            </a>
          </li>
          <li>
            <a href="./calendario/calendario.php" class="nav-link link-dark">
              <i class="bi bi-list-ul me-2"></i>
              Calendário
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


      <!-- Divider to adjust the content -->
      <div class="divide mt-5"><br></div>

      <!-- Contente of grup of cards -->
      <section id="vaccinationCards">

        <?php
          include_once('../../common/fcq.php');
          $idUsuario = $_SESSION['usuario']['id'];
          $history = historico($idUsuario);

          echo '<div class="card-group mt-5">';
          $qtdCards = 0;
          if ($history == null) {
            echo '<div class="constainer-fluid text-center p-5 m-5">
            <div class="d-sm-flex align-items-center justify-items-center"><div> 
            <p>
            <div class="alert alert-info text-center" role="alert">Aguarde, você não possui vacinas no seu Histórico de vacinas!!</div>
            </p>
            <img class="img-fluid w-50 d-none d-sm-block" src="../../../../public/image/undraw_warning_cyit.svg" alt=""></div></div>
            </div>';
          } else {
            foreach ($history as $dados) {

              // Limita a 3 cards por linha
              if ($qtdCards % 3 == 0) {
                echo '</div>';
                echo '<div class="card-group mt-5">';
              }
              // Esse echo desenha um card
              echo
                '<div class="card">',
                '<div class="card-body">',
                '<h5 class="card-title">' . $dados['nome'] . '</h5>',
                '<p class="card-text">' . $dados['descricao'] . '</p>',
                '</div>',
                '<div class="card-footer">',
                '<small class="text-muted">' . $dados['data_reserva'] . '</small>',
                '</div>',
                '</div>';
              $qtdCards++;
            }
          }
          echo '</div>';
          ?>

      </section>

      </section>

    </div>
  <?php
  } else {
    header("location: //localhost/TCC_2021-main/src/");
  }
  ?>
</body>

</html>