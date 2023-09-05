<?php
$pergunta6 = $_POST['pergunta6'];
$resposta21 = "resposta21";

session_start(); // Inicia a sessão

$_SESSION["pergunta6"] = $pergunta6;
$_SESSION["resposta21"] = $resposta21;

// Inicializa as variáveis de acertos e erros


if (!isset($_SESSION['acertos'])) {
    $_SESSION['acertos'] = 0;
}

if (!isset($_SESSION['erros'])) {
    $_SESSION['erros'] = 0;
}

if (isset($_POST['submit'])) {
    // Verifica a resposta
    if ($pergunta6 === $resposta21) { 
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
      <img class="img" src="images/gokubb.jpg">
      <h2>Pergunta 7: Quem é o avô adotivo de Goku?</h2>
      <form method="POST" action="pag8.php">
      <ul>
        <li><input type="radio" name="pergunta7" id="resposta25"> <label for="resposta25">Mestre Kame</label></li>
        <li><input type="radio" name="pergunta7" id="resposta26"> <label for="resposta26">Senhor Popo</label></li>
        <li><input type="radio" name="pergunta7" id="resposta27"> <label for="resposta27">Son Gohan</label></li><!--resposta certa-->
        <li><input type="radio" name="pergunta7" id="resposta28"> <label for="resposta28">Bardock</label></li>
      </ul>
      <a href="pag8.php"><button type="submit" name="submit" class="submit-btn">Próxima Pergunta</button></a>
      </form>
    </div>
   
    
    
  </div>
</body>
</html>