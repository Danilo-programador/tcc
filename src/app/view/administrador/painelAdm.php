<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administrador</title>
  <link rel="stylesheet" href="../../../../public/style/bootstrap.min.css">
  <link rel="stylesheet" href="../../../../public/js/bootstrap.bundle.min.js">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <style>
    section {
      margin-top: 90px;
      margin-left: 130px;
      margin-right: 0px;
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
          <a class="navbar-brand nav-link" href="./painelAdm.php"><h2>Cadastro clínica</h2></a>
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
            <a href="./painelAdm.php" class="nav-link" aria-current="page">
              <i class="bi bi-house-door-fill me-2"></i>
              Cadastrar Clinica
            </a>
          </li>
          <li>
            <a href="./clinica.php" class="nav-link link-dark">
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
    <div class="container">
      <section class="w-75 p-3 border justify-items-center justify-content-center">
        <form class="row g-3" method="POST" action="../../core/cadastroClinica.php">
          <div class="col-md-6">
            <label for="inputNome" class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" id="inputEmail4" maxlength="40" required />
          </div>
          <div class="col-md-6">
            <label for="inputEmail" class="form-label">E-mail</label>
            <input type="email" name="email" class="form-control" id="inputPassword4" maxlength="100" required />
          </div>
          <div class="col-md-6">
            <label for="inputPassword" class="form-label">Senha</label>
            <input type="password" name="senha" class="form-control" id="inputEmail4" maxlength="20" required />
          </div>
          <div class="col-md-6">
            <label for="inputCity" class="form-label">Telefone</label>
            <input type="text" name="telefone" class="form-control" id="phone" maxlength="30" required />
          </div>
          <div class="col-md-2">
            <label for="inputZip" class="form-label">Cep</label>
            <input type="text" name="cep" onkeypress="pesquisarCep()" class="form-control" id="cep" maxlength="9" required />
          </div>
          <div class="col-10">
            <label for="inputAddress" class="form-label">Rua</label>
            <input type="text" name="rua" class="form-control" id="rua" maxlength="100" required />
          </div>
          <div class="col-md-2">
            <label for="inputZip" class="form-label">Numero</label>
            <input type="text" name="numero" class="form-control" id="inputZip" maxlength="5" required />
          </div>
          <div class="col-md-4">
            <label for="inputState" class="form-label">Bairro</label>
            <input type="text" name="bairro" class="form-control" id="bairro" maxlength="100" required />
          </div>
          <div class="col-md-4">
            <label for="inputState" class="form-label">Cidade</label>
            <input type="text" name="cidade" class="form-control" id="cidade" maxlength="40" required />
          </div>
          <div class="col-md-2">
            <label for="inputZip" class="form-label">Uf</label>
            <input type="text" name="uf" class="form-control" id="uf" maxlength="2" required />
          </div>
          <div class="col-md-4">
            <label for="inputState" class="form-label">Complemento</label>
            <input type="text" name="complemento" class="form-control" id="inputCity" maxlength="100" />
          </div>
          <div class="col-12">
            <input type="submit" name="cadastrar" value="Cadastrar" class="btn btn-primary w-23">
            <input type="reset" id="criar" onclick="myFunction()" class="btn btn-primary w-20" name="limpar" value="Limpar" placeholder="Last name" aria-label="Last name">
          </div>
        </form>
      </section>
    </div>
    </div>
  <?php
  } else {
    header("location: //localhost/TCC_2021-main/src/");
  }
  ?>
<script src="../../../../public/js/consultaCep.js"></script>
<script src="../../../../public/js/bootstrap.bundle.min.js"></script>
<script>
        document.getElementById('phone').addEventListener('input', function (e) {
        var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,5})(\d{0,4})/);
        e.target.value = '(' +x[1] + ') '+ x[2] + '-' + x[3]
      });
</script>
</body>

</html>