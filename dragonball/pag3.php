<?php

$pergunta2 = $_POST['pergunta2'];
$resposta8 = "resposta8";

session_start(); // Inicia a sessão

$erros = isset($_SESSION['erros']) ? $_SESSION['erros'] : 0;
$acertos = isset($_SESSION['acertos']) ? $_SESSION['acertos'] : 0;

$_SESSION["pergunta2"] = $pergunta2;
$_SESSION["resposta8"] = $resposta8;


if (isset($_POST['submit'])) {
    // Verifica a resposta
    if ($pergunta2  === $resposta8) { 
        $_SESSION['acertos'] = $_SESSION['acertos'] + 1;
    } else {
        $_SESSION['erros'] =  $_SESSION['erros'] + 1;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <title>Quiz</title>
</head>
<body>
  <div class="container">
    <h1>QUIZ</h1>
    <div class="question">
      <img class="img" src="images/freeza.jpg">
      <h2>Pergunta 3: Como se chama o pai de Freeza?</h2>
  <form method="POST" action="pag4.php">
      <ul>
        <li><input type="radio" name="pergunta3" id="resposta9"> <label for="resposta9">Rei Colde</label></li>
        <li><input type="radio" name="pergunta3" id="resposta10"> <label for="resposta10">Rei Cold</label></li><!--resposta certa-->
        <li><input type="radio" name="pergunta3" id="resposta11"> <label for="resposta11">Rei Coola</label></li>
        <li><input type="radio" name="pergunta3" id="resposta12"> <label for="resposta12">Rei Cooller</label></li>
      </ul>
      <a href="pag4"><button type="submit" name="submit" class="submit-btn">Próxima Pergunta</button></a>
      </form>
    </div>
   
   
    
  </div>
</body>
</html>