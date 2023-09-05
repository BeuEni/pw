<?php

$pergunta3 = $_POST['pergunta3'];
$resposta10 = "resposta10";
session_start(); // Inicia a sessão

$erros = isset($_SESSION['erros']) ? $_SESSION['erros'] : 0;
$acertos = isset($_SESSION['acertos']) ? $_SESSION['acertos'] : 0;

$_SESSION["pergunta3"] = $pergunta3;
$_SESSION["resposta10"] = $resposta10;

// Inicializa as variáveis de acertos e erros
if (isset($_POST['submit'])) {
    // Verifica a resposta
    if ($pergunta3 === $resposta10) { 
        $_SESSION['acertos'] = $_SESSION['acertos'] +1; // Incrementa os acertos
    } else {
        $_SESSION['erros'] = $_SESSION['erros'] +1; // Incrementa os erros
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
      <img class="img" src="images/super.jpg">
      <h2>Pergunta 4: Em que ano Dragon Ball Super foi feito?</h2>
      <form method="POST" action="pag5.php">
      <ul>
        <li><input type="radio" name="pergunta4" id="resposta13"> <label for="resposta13">2017</label></li>
        <li><input type="radio" name="pergunta4" id="resposta14"> <label for="resposta14">2015</label></li><!--resposta certa-->
        <li><input type="radio" name="pergunta4" id="resposta15"> <label for="resposta15">1998</label></li>
        <li><input type="radio" name="pergunta4" id="resposta16"> <label for="resposta16">1999</label></li>
      </ul>
      <a href="pag5.php"><button type="submit" name="submit" class="submit-btn">Próxima Pergunta</button></a>
      </form>
    </div>
   
    
    
  </div>
</body>
</html>