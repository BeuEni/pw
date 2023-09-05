<?php
$pergunta8 = $_POST['pergunta8'];
$resposta31 = "resposta31";

session_start(); // Inicia a sessão

$_SESSION["pergunta8"] = $pergunta8;
$_SESSION["resposta31"] = $resposta31;

// Inicializa as variáveis de acertos e erros
if (!isset($_SESSION['acertos'])) {
    $_SESSION['acertos'] = 0;
}

if (!isset($_SESSION['erros'])) {
    $_SESSION['erros'] = 0;
}

if (isset($_POST['submit'])) {
    // Verifica a resposta
    if ($pergunta8 === $resposta31) { // 'resposta33' é o ID da resposta correta
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
      <img class="img" src="images/torneio.jpg">
      <h2>Pergunta 9: Qual univérso o mundo Dragon Ball pertence?</h2>
      <form method="POST" action="pag10.php">
      <ul>
        <li><input type="radio" name="pergunta9" id="resposta33"> <label for="resposta33">Universo 7</label></li><!--resposta certa-->
        <li><input type="radio" name="pergunta9" id="resposta34"> <label for="resposta34">Universo 11</label></li>
        <li><input type="radio" name="pergunta9" id="resposta35"> <label for="resposta35">Universo 2</label></li>
        <li><input type="radio" name="pergunta9" id="resposta36"> <label for="resposta36">Universo 6</label></li>
      </ul>
      <a href="pag10.php"><button type="submit" name="submit" class="submit-btn">Próxima Pergunta</button></a>
      </form>
    </div>
   
    
    
  </div>
</body>
</html>