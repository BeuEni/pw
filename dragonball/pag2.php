<?php


 $pergunta1 = $_POST['pergunta1'];
 $resposta3="resposta3";

session_start(); // Inicia a sessão

$erros = isset($_SESSION['erros']) ? $_SESSION['erros'] : 0;
$acertos = isset($_SESSION['acertos']) ? $_SESSION['acertos'] : 0;

$_SESSION["pergunta1"] = $pergunta1;
$_SESSION["resposta3"] = $resposta3;


if (isset($_POST['submit'])) {
    // Verifica a resposta
    if ($pergunta1 === $resposta3) { 
        $_SESSION['acertos'] = $_SESSION['acertos'] + 1; // Incrementa os acertos
    } else {
        $_SESSION['erros'] = $_SESSION['erros'] + 1; // Incrementa os erros
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
      <img class="img" src="images/vegeta.jpg">
      <h2>Pergunta 2: Quem é o melhor amigo de Goku?</h2>
      <form method="POST" action="pag3.php">
      <ul>
        <li><input type="radio" name="pergunta2" id="resposta5"> <label for="resposta5">Vegeta</label></li>
        <li><input type="radio" name="pergunta2" id="resposta6"> <label for="resposta6">Friezza</label></li>
        <li><input type="radio" name="pergunta2" id="resposta7"> <label for="resposta7">Oob</label></li>
        <li><input type="radio" name="pergunta2" id="resposta8"> <label for="resposta8">Kuririn</label></li><!--resposta certa-->
      </ul>
      <button type="submit" name="submit" class="submit-btn">Próxima Pergunta</button>
      </form>
    </div>
   
    
    
   
  </div>
</body>
</html>