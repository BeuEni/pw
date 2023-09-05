<?php
$pergunta10 = $_POST['pergunta10'];
$resposta38 = "resposta38";

session_start();

if (!isset($_SESSION['acertos'])) {
  $_SESSION['acertos'] = 0;
}

if (!isset($_SESSION['erros'])) {
  $_SESSION['erros'] = 0;
}

if (isset($_POST['submit'])) {
  // Verifica a resposta
  if ($pergunta10 === $resposta38) { // 'resposta38' é o ID da resposta correta
      $_SESSION['acertos'] = $_SESSION['acertos'] +1; // Incrementa os acertos
  } else {
      $_SESSION['erros'] =  $_SESSION['erros'] +1; // Incrementa os erros
  }
}

echo

$totalPerguntas = 10; // número total de perguntas

$porc_acertos = ($_SESSION['acertos'] * (100/ ( $_SESSION['acertos'] + $_SESSION['erros'])));
	  
$porc_erros = ($_SESSION['erros'] * (100/ ( $_SESSION['acertos'] + $_SESSION['erros'])));


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <title>Resultados</title>
</head>
<body>
  <div class="container">
    <h1>Resultados</h1>
    <div class="result">
      <center><h2>Acertos</h2></center>
      <ul>
        <li>Você acertou: <?php echo $_SESSION['acertos']; ?> perguntas</li>
        <li>Porcentagem de acertos: <?php echo $porc_acertos; ?>%</li>
      </ul>
    </div>
    <div class="result">
      <center><h2>Erros</h2></center>
      <ul>
        <li>Você errou: <?php echo $_SESSION['erros']; ?> perguntas</li>
        <li>Porcentagem de erros: <?php echo $porc_erros; ?>%</li>
      </ul>
      <?php
      if ( $_SESSION['acertos'] == $totalPerguntas) {
          echo "<h1>Parabéns, você é um verdadeiro fã de Dragon Ball! :)</h1>";
      } else {
          echo "<h1>Que pena, você precisa assistir Dragon Ball novamente :(</h1>";
      }
      ?>
    </div>
    <a href="index.php" class="back-btn">Voltar ao Quiz</a>
  </div>
</body>
</html>

