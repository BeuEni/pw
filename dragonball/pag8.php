<?php
$pergunta7 = $_POST['pergunta7'];
$resposta27 = "resposta27";
session_start(); // Inicia a sessão

$_SESSION["pergunta7"] = $pergunta7;
$_SESSION["resposta27"] = $resposta27;

// Inicializa as variáveis de acertos e erros
if (!isset($_SESSION['acertos'])) {
    $_SESSION['acertos'] = 0;
}

if (!isset($_SESSION['erros'])) {
    $_SESSION['erros'] = 0;
}

if (isset($_POST['submit'])) {
    // Verifica a resposta
    if ($pergunta7 === $resposta27) { // 'resposta31' é o ID da resposta correta
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
      <img class="img" src="images/freeza2.jpg">
      <h2>Pergunta 8: Quem matou Freeza?</h2>
      <form method="POST" action="pag9.php">
      <ul>
        <li><input type="radio" name="pergunta8" id="resposta29"> <label for="resposta29">Gohan</label></li>
        <li><input type="radio" name="pergunta8" id="resposta30"> <label for="resposta30">Goku</label></li>
        <li><input type="radio" name="pergunta8" id="resposta31"> <label for="resposta31">Trunks do futuro</label></li><!--resposta certa-->
        <li><input type="radio" name="pergunta8" id="resposta32"> <label for="resposta32">Picollo</label></li>
      </ul>
      <a href="pag9.php"><button type="submit" name="submit" class="submit-btn">Próxima Pergunta</button></a>
      </form>
    </div>
   
    
   
  </div>
</body>
</html>