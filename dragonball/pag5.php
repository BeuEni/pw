<?php
$pergunta4 = $_POST['pergunta4'];
$resposta14 = "resposta14";

session_start(); // Inicia a sessão

$_SESSION["pergunta4"] = $pergunta4;
$_SESSION["resposta14"] = $resposta14;

// Inicializa as variáveis de acertos e erros
if (!isset($_SESSION['acertos'])) {
    $_SESSION['acertos'] = 0;
}

if (!isset($_SESSION['erros'])) {
    $_SESSION['erros'] = 0;
}

if (isset($_POST['submit'])) {
    // Verifica a resposta
    if ($pergunta4 === $resposta14) { // 'resposta19' é o ID da resposta correta
        $_SESSION['acertos'] =  $_SESSION['acertos'] +1; // Incrementa os acertos
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
      <img class="img" src="images/majin.jpg">
      <h2>Pergunta 5: Como Goku derrotou Majin Boo?</h2>
      <form method="POST" action="pag6.php">
      <ul>
        <li><input type="radio" name="pergunta5" id="resposta17"> <label for="resposta17">Utilizando o Kamehameha</label></li>
        <li><input type="radio" name="pergunta5" id="resposta18"> <label for="resposta18">Utilizando Kaioken 20x</label></li>
        <li><input type="radio" name="pergunta5" id="resposta19"> <label for="resposta19">Utilizando GenkiDama</label></li><!--resposta certa-->
        <li><input type="radio" name="pergunta5" id="resposta20"> <label for="resposta20">Utilizando o SSJ 3</label></li>
      </ul>
      <a href="pag6.php"><button type="submit" name="submit" class="submit-btn">Próxima Pergunta</button></a>
      </form>
    </div>
   
    
   
  </div>
</body>
</html>