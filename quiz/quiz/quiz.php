<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Quiz</title>
<link rel="stylesheet" href="estilo.css">
<link rel="icon" type="image/png" href="img/quizi.png">
</head>
<body>

<h1 class="tt">Quiz Geek</h1>

<form action="resultado.php" method="POST">

<h3>Nome do jogador</h3>
<input type="text" name="nome" required>

<div class="pergunta">

<h3>Pergunta 1</h3>
<p>O que você prefere programar?</p>

<input type="radio" name="p1" value="frontend" required> Interfaces bonitas para usuários<br>
<input type="radio" name="p1" value="backend"> Sistemas que fazem tudo funcionar<br>
<input type="radio" name="p1" value="jogos"> Mecânicas e interações de jogos<br>
<input type="radio" name="p1" value="dados"> Analisar muitos dados e informações<br>

</div>

<div class="pergunta">

<h3>Pergunta 2</h3>
<p>Você gosta mais de:</p>

<input type="radio" name="p2" value="frontend" required> Design e experiência do usuário<br>
<input type="radio" name="p2" value="backend"> Lógica e estrutura do sistema<br>
<input type="radio" name="p2" value="jogos"> Criar mundos e mecânicas<br>
<input type="radio" name="p2" value="dados"> Resolver problemas com dados<br>

</div>

<div class="pergunta">

<h3>Pergunta 3</h3>
<p>Qual projeto parece mais interessante para você?</p>

<input type="radio" name="p3" value="frontend" required> Criar um site moderno e interativo<br>
<input type="radio" name="p3" value="backend"> Fazer o servidor de um site funcionar<br>
<input type="radio" name="p3" value="jogos"> Criar um jogo do zero<br>
<input type="radio" name="p3" value="dados"> Criar um sistema que analisa dados<br>

</div>

<div class="pergunta">

<h3>Pergunta 4</h3>
<p>Qual ferramenta você gostaria mais de usar?</p>

<input type="radio" name="p4" value="frontend" required> HTML, CSS ou JavaScript<br>
<input type="radio" name="p4" value="backend"> PHP ou Python<br>
<input type="radio" name="p4" value="jogos"> Motores de jogos como Unity ou Unreal Engine<br>
<input type="radio" name="p4" value="dados"> Linguagens como Python para análise de dados<br>

</div>

<div class="pergunta">

<h3>Pergunta 5</h3>
<p>O que você mais gosta de fazer quando está no computador?</p>

<input type="radio" name="p5" value="frontend" required> Criar páginas bonitas e interativas<br>
<input type="radio" name="p5" value="backend"> Resolver problemas e fazer sistemas funcionarem<br>
<input type="radio" name="p5" value="jogos"> Criar jogos ou pensar em mecânicas divertidas<br>
<input type="radio" name="p5" value="dados"> Analisar informações e descobrir padrões em dados<br>

</div>

<br>

<button type="submit">Descobrir meu perfil</button>

</form>

</body>
</html>