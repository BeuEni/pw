<?php
$pergunta9 = $_POST['pergunta9'];
$resposta33 = "resposta33";

session_start(); // Inicia a sessão

$_SESSION["pergunta9"] = $pergunta9;
$_SESSION["resposta33"] = $resposta33;

// Inicializa as variáveis de acertos e erros
if (!isset($_SESSION['acertos'])) {
    $_SESSION['acertos'] = 0;
}

if (!isset($_SESSION['erros'])) {
    $_SESSION['erros'] = 0;
}

if (isset($_POST['submit'])) {
    // Verifica a resposta
    if ($pergunta9 === $resposta33) { // 'resposta38' é o ID da resposta correta
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
      <img class="img" src="images/planeta.png">
      <h2>Pergunta 10: Qual o planeta natal de Goku e Vegeta?</h2>
      <form method="POST" action="resultados.php">
      <ul>
        <li><input type="radio" name="pergunta10" id="resposta37"> <label for="resposta37">Planeta Terra</label></li>
        <li><input type="radio" name="pergunta10" id="resposta38"> <label for="resposta38">Planeta Vegeta</label></li><!--resposta certa-->
        <li><input type="radio" name="pergunta10" id="resposta39"> <label for="resposta39">Planeta Namekusei</label></li>
        <li><input type="radio" name="pergunta10" id="resposta40"> <label for="resposta40">Desconhecido</label></li>
      </ul>
      <a href="resultados.php"><button type="submit" name="submit" class="submit-btn">Próxima Pergunta</button></a>
      </form>
    </div>
   
    
    
  </div>
</body>
</html>