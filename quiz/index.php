<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="estilo.css">
<title>Início</title>
<link rel="icon" type="image/png" href="img/quizi.png">

</head>

<body>

<h1 class="tt">Como é sua performance na informática?</h1>

<p class="tt">Responda o quiz e descubra qual área se encaixa mais com você!.</p>

<?php

if(isset($_COOKIE['jogador'])){
    echo "<p class='tt'>Bem-vindo de volta, ".$_COOKIE['jogador']."! 👋</p>";
}

?>

<br><br>

<a href="quiz.php" class="botao">Começar Quiz</a>

</body>
</html>