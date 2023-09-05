<?php
session_start();

$_SESSION['acertos'] = 0;  // Inicializa os acertos
$_SESSION['erros'] = 0;    // Inicializa os erros


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
      <img class="img" src="images/akira.webp">
      <h2>Pergunta 1: Qual o nome do criador de Dragon Ball?</h2>
      <form method="POST" action="pag2.php">
      <ul>
        <li><input type="radio" name="pergunta1" id="resposta1" value="resposta1"> <label for="resposta1">Masashi Kishimoto</label></li>
        <li><input type="radio" name="pergunta1" id="resposta2" value="resposta2"> <label for="resposta2">Kohei Horikoshi</label></li>
        <li><input type="radio" name="pergunta1" id="resposta3" value="resposta3"> <label for="resposta3">Akira Toriyama</label></li><!--resposta certa-->
        <li><input type="radio" name="pergunta1" id="resposta4" value="resposta4"> <label for="resposta4">Tite Kubo</label></li>
      </ul>

    <a href="pag2.php"><button type="submit" name="submit" class="submit-btn">Próxima Pergunta</button></a>
      </form>
    </div>
  </div>
</body>
</html>
