<?php
$pergunta5 = $_POST['pergunta5'];
$resposta19 = "resposta19";
session_start(); // Inicia a sessão

$_SESSION["pergunta5"] = $pergunta5;
$_SESSION["resposta19"] = $resposta19;

// Inicializa as variáveis de acertos e erros
if (!isset($_SESSION['acertos'])) {
    $_SESSION['acertos'] = 0;
}

if (!isset($_SESSION['erros'])) {
    $_SESSION['erros'] = 0;
}

if (isset($_POST['submit'])) {
    // Verifica a resposta
    if ($pergunta5 === $resposta19) { 
        $_SESSION['acertos'] = $_SESSION['acertos'] +1; // Incrementa os acertos
    } else {
        $_SESSION['erros'] =  $_SESSION['erros'] +1; // Incrementa os erros
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
      <img class="img" src="images/dbz.png">
      <h2>Pergunta 6: Dragon Ball Z está em qual posição no ranking de animes mais conhecidos?</h2>
      <form method="POST" action="pag7.php">
      <ul>
        <li><input type="radio" name="pergunta6" id="resposta21"> <label for="resposta21">1º Lugar</label></li><!--resposta certa-->
        <li><input type="radio" name="pergunta6" id="resposta22"> <label for="resposta22">2º Lugar</label></li>
        <li><input type="radio" name="pergunta6" id="resposta23"> <label for="resposta23">3º Lugar</label></li>
        <li><input type="radio" name="pergunta6" id="resposta24"> <label for="resposta24">Nem está no ranking</label></li>
      </ul>
      <a href="pag7.php"><button type="submit" name="submit" class="submit-btn">Próxima Pergunta</button></a>
      </form>
    </div>
   
    
    
  </div>
</body>
</html>