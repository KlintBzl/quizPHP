<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Quiz</title>
<link rel="stylesheet" href="estilo.css">
<link rel="icon" type="image/png" href="img/quizi.png">
</head>
<body>

<h1 id="quizi">Quiz Geek</h1>

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

<div class="pergunta">

<h3>Pergunta 6</h3>
<p>O que você prefere criar?</p>

<input type="radio" name="p6" value="frontend" required> Um site bonito e fácil de usar<br>
<input type="radio" name="p6" value="backend"> Um sistema que funcione perfeitamente<br>
<input type="radio" name="p6" value="jogos"> Um jogo divertido<br>
<input type="radio" name="p6" value="dados"> Um sistema que analisa dados<br>

</div>
<div class="pergunta">

<h3>Pergunta 7</h3>
<p>Qual dessas atividades parece mais interessante?</p>

<input type="radio" name="p7" value="frontend" required> Ajustar cores, botões e layout de um site<br>
<input type="radio" name="p7" value="backend"> Programar como um sistema funciona por trás<br>
<input type="radio" name="p7" value="jogos"> Criar personagens e fases de um jogo<br>
<input type="radio" name="p7" value="dados"> Estudar gráficos e informações<br>

</div>

<div class="pergunta">

<h3>Pergunta 8</h3>
<p>Quando você usa um site, o que mais chama sua atenção?</p>

<input type="radio" name="p8" value="frontend" required> O design e a aparência<br>
<input type="radio" name="p8" value="backend"> A velocidade e funcionamento<br>
<input type="radio" name="p8" value="jogos"> As interações e animações<br>
<input type="radio" name="p8" value="dados"> As informações e estatísticas<br>

</div>

<div class="pergunta">

<h3>Pergunta 9</h3>
<p>Qual projeto você escolheria fazer?</p>

<input type="radio" name="p9" value="frontend" required> Criar um portfólio pessoal na internet<br>
<input type="radio" name="p9" value="backend"> Criar um sistema de login para um site<br>
<input type="radio" name="p9" value="jogos"> Criar um mini jogo<br>
<input type="radio" name="p9" value="dados"> Criar um programa que analisa dados<br>

</div>

<div class="pergunta">

<h3>Pergunta 10</h3>
<p>O que você acha mais legal aprender?</p>

<input type="radio" name="p10" value="frontend" required> Como criar páginas interativas<br>
<input type="radio" name="p10" value="backend"> Como criar sistemas complexos<br>
<input type="radio" name="p10" value="jogos"> Como desenvolver jogos<br>
<input type="radio" name="p10" value="dados"> Como analisar grandes quantidades de dados<br>

</div>

<br>

<button type="submit">Descobrir meu perfil</button>

</form>

</body>
</html>