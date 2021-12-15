 <?php
    $idUsuario = $_GET['idUsuario'];
    $idFuncionario = $_GET['idFuncionario'];
    $idClinica = $_GET['idClinica'];
    $vacina = $_GET['vacina'];

    $dataAtual = date('Y/d/m');

    include('C:\\xampp\htdocs\TCC_2021-main\src/app/controller/funcionario.php');

    $funcionario = new Funcionario();
    include('C:\\xampp\htdocs\TCC_2021-main\src/app/common/fcq.php');

    $funcionario->inseriVacinação($vacina,$idFuncionario,$idUsuario,$idClinica,$dataAtual);
    $msg = "Baixa realizada";
    $url = "//localhost/TCC_2021-main/src/app/view/funcionario/painelFuncionario.php";
    createAlert($msg, $url);
    die();

   /* echo $idUsuario . "<br>";
    echo $idClinica . "<br>";
    echo $idFuncionario . "<br>";
    echo $vacina . "<br>";
    echo $dataAtual . "<br>";*/
  
?>