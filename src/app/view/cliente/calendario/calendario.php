<!DOCTYPE html>
<html lang="pT-BR">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Histórico</title>

  <!-- Style Sheet -->
  <link rel="stylesheet" href="../../../../../public/style/bootstrap.min.css">

<body>
  <div class="container">
    <!-- Navegation bar -->
    <nav class="navbar shadow navbar-dark bg-primary fixed-top">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand nav-link" href="../../core/logout.php">
          <h2>Calendário</h2>
        </a>
        <a class="navbar-brand nav-link bg-danger" href="../../core/logout.php">Sair</a>
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
    <div class="divide mt-5"><br></div>

    <!-- Content -->
    <section>
      <div class="calendar">
        <div style="display: flex; width: 100%;">

          <button class="btn" data-bs-toggle="collapse" href="#multiCollapseKid" role="button" aria-expanded="false" aria-controls="multiCollapseKid">
            <div class="card" style="width: 15rem;">
              <img src="../../../../../public/image/undraw_fatherhood_-7-i19.svg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Entre 0 e 10 anos</p>
              </div>
            </div>
          </button>

          <button class="btn" data-bs-toggle="collapse" href="#multiCollapseTeen" role="button" aria-expanded="false" aria-controls="multiCollapseTeen">
            <div class="card" style="width: 15rem;">
              <img src="../../../../../public/image/undraw_girl_just_wanna_have_fun_-9-d5u.svg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Entre 11 e 19 anos</p>
              </div>
            </div>
          </button>

          <button class="btn" data-bs-toggle="collapse" href="#multiCollapseAdult" role="button" aria-expanded="false" aria-controls="multiCollapseAdult">
            <div class="card" style="width: 15rem;">
              <img src="../../../../../public/image/undraw_businessman_re_mlee.svg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Entre 20 e 59 anos</p>
              </div>
            </div>
          </button>

          <button class="btn" data-bs-toggle="collapse" href="#multiCollapseMother" role="button" aria-expanded="false" aria-controls="multiCollapseMother">
            <div class="card" style="width: 15rem;">
              <img src="../../../../.././public/image/undraw_baby_ja-7-a.svg" class="card-img-top" alt="...">
              <div class="card-body">+
                <p class="card-text">Periodo gestacional</p>
              </div>
            </div>
          </button>

          <button class="btn" data-bs-toggle="collapse" href="#multiCollapseOld" role="button" aria-expanded="false" aria-controls="multiCollapseOld">
            <div class="card" style="width: 15rem;">
              <img src="../../../../../public/image/undraw_scooter_aia8.svg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">60 + anos
                </p>
              </div>
            </div>
          </button>

        </div>
        <div class="collapse multi-collapse" id="multiCollapseKid">
          <div class="card-header">
            <h2>Vacinas Criança</h2>
          </div>
          <div class="card card-body">
            <h5>BCG (Bacilo Calmette-Guerin)</h5>
            <p>
              Previne as formas graves de tuberculose, principalmente
              miliar e meníngea
              <h6>Dose única</h6>
            </p>

            <h5>Hepatite B</h5>
            <p>
              Previne a hepatite
              do tipo B
              <h6>Dose única</h6>
            </p>

            <h5>
              Pentavalente (DTP/HB/Hib)
            </h5>
            <p>
              Previne difteria, tétano,
              coqueluche, hepatite B e meningite e infecções por HiB
              <h6>1ª dose</h6>
            </p>
            <h5>
              VIP (Poliomielite inativada)
            </h5>
            <p>
              Previne poliomielite ou paralisia
              infantil
              <h6>1ª dose</h6>
            </p>

            <h5>Pneumocócica 10V </h5>
            <p>
              Previne pneumonia, otite,
              meningite e outras doenças causadas pelo Pneumococo
              <h6>1ª dose</h6>
            </p>
            <h5>Vacina rotavírus humano G1P1 </h5>
            <p>
              Previne diarreia por rotavírus
              <h6>1ª dose</h6>
            </p>

            <h5>
              Meningocócica C
            </h5>
            <p>
              conjugada Previne a doença meningocócica C
              <h6>
                1ª dose
              </h6>
            </p>

            <h5>
              Pentavalente (DTP/HB/Hib)
            </h5>
            <p>
              Previne difteria, tétano, coqueluche, hepatite B e meningite e infecções por Haemóphilus influenza e tipo
              B
              <h6>
                2ª dose
              </h6>
            </p>

            <h5>
              VIP (Poliomielite inativada)
            </h5>
            <p>
              Previne a poliomielite ou paralisia infantil
              <h6>
                2ª dose
              </h6>
            </p>

            <h5>
              Pneumocócica 10V
            </h5>
            <p>
              Previne pneumonia, otite, meningite e outras doenças causadas pelo Pneumococo
              <h6>
                2ª dose
              </h6>
            </p>

            <h5>
              Vacina rotavírus
            </h5>
            <p>
              humano G1P1 Previne diarreia por rotavírus
              <h6>
                2ª dose
              </h6>
            </p>

            <h5>
              Meningocócica C conjugada
            </h5>
            <p>
              Previne doença meningocócica
              <h6>
                2ª dose
              </h6>
            </p>

            <h5>
              Pentavalente (DTP/HB/Hib)
            </h5>
            <p>
              Previne difteria, tétano, coqueluche, hepatite B e meningite e infecções por HiB
              <h6>
                3ª dose
              </h6>
            </p>

            <h5>
              VIP (Poliomielite inativada)
            </h5>
            <p>
              Previne poliomielite ou paralisia infantil 3ª dose Febre amarela Previne a febre amarela
              <h6>
                Uma dose
              </h6>
            </p>

            <h5>
              Pneumocócica 10 Valente
            </h5>
            <p>
              previne pneumonia, otite, meningite e outras doenças causadas pelo Pneumococo
              <h6>
                Reforço
              </h6>
            </p>

            <h5>
              Tríplice Viral
            </h5>
            <p>
              Previne sarampo, caxumba e rubéola
              <h6>
                1ª dose
              </h6>
            </p>

            <h5>
              Hepatite A
            </h5>
            <p>
              <h6>
                Dose única
              </h6>
            </p>

            <h5>
              Poliomielite oral VOP
            </h5>
            <p>
              Previne poliomielite ou paralisia infantil
              <h6>
                1º reforço
              </h6>
            </p>

            <h5>
              DTP
            </h5>
            <p>
              Difteria, tétano e coqueluche
              <h6>
                1º reforço
              </h6>
            </p>

            <h5>
              Tetra viral ou tríplice viral + varicela
            </h5>
            <p>
              Previne sarampo, rubéola, caxumba e varicela/catapora
              <h6>
                Uma dose
              </h6>
            </p>

            <h5>
              DTP
            </h5>
            <p>
              Difteria, tétano e coqueluche
              <h6>
                2º reforço
              </h6>
            </p>

            <h5>
              Vacina Oral Poliomielite (VOP)
            </h5>
            <p>
              Previne poliomielite ou paralisia infantil
              <h6>
                2º reforço
              </h6>
            </p>

            <h5>
              Varicela atenuada Previne
            </h5>
            <p>
              varicela/catapora
            </p>
          </div>
        </div>
      </div>
      <div class="collapse multi-collapse" id="multiCollapseTeen">
        <div class="card-header">
          <h2>Vacinas Adolescente</h2>
        </div>
        <div class="card card-body">
          <h5>
            Meninas HPV
          </h5>
          <p>
            Previne o papiloma, vírus humano que causa cânceres e verrugas genitais
            <h6>
              2 doses com seis meses de intervalo
            </h6>
          </p>

          <h5>
            HPV
          </h5>
          <p>
            Previne o papiloma, vírus humano que causa cânceres e verrugas genitais
            <h6>
              2 doses com seis meses de intervalo
            </h6>
          </p>

          <h5>
            Meningocócica C
          </h5>
          <p>
            Doença invasiva causada por Neisseria meningitidis do sorogrupo C
            <h6>
              Dose única ou reforço
            </h6>
          </p>

          <h5>
            Hepatite B
          </h5>
          <p>
            <h6>
              3 doses, de acordo com a situação vacinal
            </h6>
          </p>

          <h5>
            Febre Amarela
          </h5>
          <p>
            <h6>
              1 dose se nunca tiver sido vacinado
            </h6>
          </p>

          <h5>
            Dupla Adulto
          </h5>
          <p>
            Previne difteria e tétano
            <h6>
              Reforço a cada 10 anos
            </h6>
          </p>

          <h5>
            Tríplice viral
          </h5>
          <p>
            Previne sarampo, caxumba e rubéola
            <h6>
              2 doses, a depender da situação vacinal anterior
            </h6>
          </p>

          <h5>
            Pneumocócica 23 Valente
          </h5>
          <p>
            Previne pneumonia, otite, meningite e outras doenças causadas pelo Pneumococo
            <h6>
              1 dose a depender da situação vacinal
            </h6>
          </p>

          <p>
            A vacina Pneumocócica 23V está indicada para grupos-alvo específicos
          </p>
        </div>
      </div>

      <div class="collapse multi-collapse" id="multiCollapseAdult">
        <div class="card-header">
          <h2>Vacinas Adulto</h2>
        </div>
        <div class="card card-body">
          <h5>
            Hepatite B
          </h5>
          <p>
            <h6>
              3 doses, de acordo com a situação vacinal
            </h6>
          </p>

          <h5>
            Febre amarela
          </h5>
          <p>
            <h6>
              Dose única, verificar situação vacinal
            </h6>
          </p>

          <h5>
            Dupla adulto (DT)
          </h5>
          <p>
            Previne difteria e tétano
            <h6>
              Reforço a cada 10 anos
            </h6>
          </p>

          <h5>
            Tríplice viral
          </h5>
          <p>
            Previne sarampo, caxumba e rubéola
            <h6>
              Se nunca vacinado: 2 doses (20 a 29 anos) e 1 dose (30 a 49 anos)
            </h6>
          </p>

          <h5>
            Pneumocócica 23 Valente
          </h5>
          <p>
            previne pneumonia, otite, meningite e outras doenças causadas pelo Pneumococo
            <h6>
              1 dose é indicada para grupos-alvo específicos a depender da situação vacinal
            </h6>
          </p>

        </div>
      </div>

      <div class="collapse multi-collapse" id="multiCollapseMother">
        <div class="card-header">
          <h2>Vacinas Gestante</h2>
        </div>
        <div class="card card-body">

          <h5>
            Hepatite B
          </h5>
          <p>
            <h6>
              3 doses a depender da situação vacinal
            </h6>
          </p>

          <h5>
            Dupla adulto (DT)
          </h5>
          <p>
            Previne difteria e tétano
            <h6>
              3 doses, de acordo com a situação vacinal
            </h6>
          </p>

          <h5>
            dTPa (Tríplice bacteriana acelular do tipo adulto)
          </h5>
          <p>
            Previne difteria, tétano e coqueluche
            <h6>
              Uma dose a cada gestação a partir da 20ª semana de gestação ou no puerpério (até 45 dias após o parto)
            </h6>
          </p>


        </div>
      </div>


      <div class="collapse multi-collapse" id="multiCollapseOld">
        <div class="card-header">
          <h2>Vacinas Idoso</h2>
        </div>
        <div class="card card-body">

          <h5>
            Hepatite B
          </h5>
          <p>
            <h6>
              3 doses, de acordo com a situação vacinal
            </h6>
          </p>

          <h5>
            Febre amarela
          </h5>
          <p>
            <h6>
              Dose única, verificar situação vacinal
            </h6>
          </p>

          <h5>
            Tríplice viral
          </h5>
          <p>
            Previne sarampo, caxumba e rubéola
            <h6>
              se nunca vacinado: 2 doses (20 a 29 anos) e 1 dose (30 a 49 anos)
            </h6>
          </p>

          <h5>
            Dupla adulto (DT)
          </h5>
          <p>
            Previne difteria e tétano
            <h6>
              Reforço a cada 10 anos
            </h6>
          </p>

          <h5>
            Pneumocócica 23 Valente
          </h5>
          <p>
            Previne pneumonia, otite, meningite e outras doenças causadas pelo Pneumococo
            <h6>
              1 dose é indicada para grupos-alvo específicos a depender da situação vacinal
            </h6>
          </p>

        </div>
      </div>


    </section>
  </div>

  <script src="../../../../../public/js/bootstrap.bundle.min.js"></script>
</body>

</html>