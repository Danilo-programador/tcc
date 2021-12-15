<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Cadastro Usuario</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
     <!-- Icons -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

     <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@500;700&display=swap"
    rel="stylesheet" />
    <link rel="stylesheet" href="../../../../public/style/bootstrap.min.css">
    <style>
        section { 
            margin-top: 80px;
            margin-left: 230px;
            margin-right: 0px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg fixed-top bg-dark navbar-$blue-900 ">
            <div class="container">
                <a href="./index.php" class="navbar-brand"><p class="fs-3 fw-bold">Aplique Aqui</p></a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item me-3">
                            <a href="../../../index.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="../../../index.php" class="nav-link">Sobre</a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="../../../index.php" class="nav-link">Noticia</a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="../../../index.php" class="nav-link">Contato</a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="../../../index.php" class="nav-link">Ajuda</a>
                        </li>
                    </ul>
                    <form class="ms-auto">
                        <a>
                            <button class="btn btn-outline-primary me-2" data-bs-toggle="modal"
                                data-bs-target="#loginModal" type="button">Logar</button>
                        </a>
                        <a href="./cadastroUsuario.php"><button class="btn btn-primary me-2" type="button">Criar
                                conta</button></a>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <!-- Formulário -->
    <div class="container">
        <section class="">
            <div class="w-75 p-3 border justify-items-center justify-content-center">
                <div class="m-2">
                <p class="fw-normal fs-2">Criar conta</p>
                </div>
              <form class="row g-3" action="../../core/cadastroUsuario.php" method="POST">
                <div class="col-md-6">
                   <label for="inputNome" class="form-label">Nome</label>
                   <input type="text"  name="nome" class="form-control" id="inputEmail4" maxlength="40" required/>
                  </div>
                  <div class="col-md-6">
                      <label for="inputEmail" class="form-label">E-mail</label>
                      <input type="email"  name="email" class="form-control" id="inputPassword4" maxlength="100" required/>
                  </div>
                <div class="col-md-6">
                  <label for="inputPassword" class="form-label">Senha</label>
                  <input type="password" name="senha" class="form-control" id="inputEmail4" maxlength="20" required/>
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Confirmar-senha</label>
                  <input type="password" name="confSenha" class="form-control" id="inputPassword4" maxlength="20" required/>
                </div>
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Telefone</label>
                  <input type="text" name="telefone" class="form-control" id="phone" maxlength="17" required/>
                </div>
                <div class="col-md-4">
                  <label for="inputState" class="form-label">Cpf</label>
                  <input type="text" name="cpf" class="form-control" id="inputCity" maxlength="20" required/>
                </div>
                <div class="col-md-2">
                  <label for="inputZip" class="form-label">Cep</label>
                  <input type="text" name="cep" onkeypress="pesquisaCep()" class="form-control" id="cep" maxlength="9" required/>
                </div> 
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Rua</label>
                  <input type="text" name="rua" class="form-control" id="rua"  maxlength="100" required/>
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Numero</label>
                    <input type="text" name="numero" class="form-control" id="numero" maxlength="5" required/>
                </div> 
                <div class="col-md-4">
                    <label for="inputState" class="form-label">Bairro</label>
                    <input type="text" name="bairro" class="form-control" id="bairro" maxlength="100" required/>
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">Cidade</label>
                    <input type="text" name="cidade" class="form-control" id="cidade" maxlength="40" required/>
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Uf</label>
                    <input type="text" name="uf" class="form-control" id="uf" maxlength="2" required/>
                </div> 
                <div class="col-md-4">
                    <label for="inputState" class="form-label">Complemento</label>
                    <input type="text" name="complemento" class="form-control" id="complemento" maxlength="100"/>
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">Data de Nascimento</label>
                    <input type="date" name="dataNascto" class="form-control" id="inputCity" required/>
                </div>
                <div class="col-12">
                  <input type="submit" name="criar" value="Criar" class="btn btn-primary w-25">
                </div>
              </form>
            </div>
          </section>
    </div>

     <!-- Modal -->
     <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" method="POST" action="../../core/login.php">
                        <div class="mb-3">
                            <label for="email">Email:</label>
                            <input class="form-control form-control-sm bg-light" type="email" name="email"
                                placeholder="E-mail" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="senha">Senha:</label>
                            <input class="form-control form-control-sm bg-light" type="password" name="senha"
                                placeholder="Senha" id="senha" required>
                        </div>
                        <div>
                            <div class="text-center">
                                <a href="../../view/geral/esqueciSenha.php" class="">Esqueci minha senha</a>
                            </div>
                            <div class="text-center">
                                <a href="./cadastroUsuario.php" class="">Não tem conta? Crie sua conta</a>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" name="logar" value="   logar   " id="logar"
                                class="btn btn-primary btn-md">
                            <input type="reset" name="cancelar" value="cancelar" id="cancelar"
                                class="btn btn-outline-primary btn-md">
                    </form>
                </div>
            </div>
        </div>
    </div>
<script src="../../../../public/js/consultaCep.js"></script>
<script src="../../../../public/js/funcao.js"></script>
<script src="../../../../public/js/bootstrap.bundle.min.js"></script>
<script>
        document.getElementById('phone').addEventListener('input', function (e) {
        var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,5})(\d{0,4})/);
        e.target.value = '(' +x[1] + ') '+ x[2] + '-' + x[3]
      });
    </script>
</body>
</html>