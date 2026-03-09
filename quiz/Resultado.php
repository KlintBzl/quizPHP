<?php

$nome = $_POST['nome'];
$p1 = $_POST['p1'];
$p2 = $_POST['p2'];
$p3 = $_POST['p3'];
$p4 = $_POST['p4'];
$p5 = $_POST['p5'];

$frontend = 0;
$backend = 0;
$jogos = 0;
$dados = 0;



if($p1 == "frontend"){
    $frontend++;
}

if($p1 == "backend"){
    $backend++;
}

if($p1 == "jogos"){
    $jogos++;
}

if($p1 == "dados"){
    $dados++;
}


if($p2 == "frontend"){
    $frontend++;
}

if($p2 == "backend"){
    $backend++;
}

if($p2 == "jogos"){
    $jogos++;
}

if($p2 == "dados"){
    $dados++;
}


if($p3 == "frontend"){
    $frontend++;
}

if($p3 == "backend"){
    $backend++;
}

if($p3 == "jogos"){
    $jogos++;
}

if($p3 == "dados"){
    $dados++;
}


if($p4 == "frontend"){
    $frontend++;
}

if($p4 == "backend"){
    $backend++;
}

if($p4 == "jogos"){
    $jogos++;
}

if($p4 == "dados"){
    $dados++;
}


if($p5 == "frontend"){
    $frontend++;
}

if($p5 == "backend"){
    $backend++;
}

if($p5 == "jogos"){
    $jogos++;
}

if($p5 == "dados"){
    $dados++;
}

if($p6 == "frontend"){
    $frontend++;
}

if($p6 == "backend"){
    $backend++;
}

if($p6 == "jogos"){
    $jogos++;
}

if($p6 == "dados"){
    $dados++;
}

if($p7 == "frontend"){
    $frontend++;
}

if($p7 == "backend"){
    $backend++;
}

if($p7 == "jogos"){
    $jogos++;
}

if($p7 == "dados"){
    $dados++;
}

if($p8 == "frontend"){
    $frontend++;
}

if($p8 == "backend"){
    $backend++;
}

if($p8 == "jogos"){
    $jogos++;
}

if($p8 == "dados"){
    $dados++;
}

if($p9 == "frontend"){
    $frontend++;
}

if($p9 == "backend"){
    $backend++;
}

if($p9 == "jogos"){
    $jogos++;
}

if($p9 == "dados"){
    $dados++;
}

if($p10 == "frontend"){
    $frontend++;
}

if($p10 == "backend"){
    $backend++;
}

if($p10 == "jogos"){
    $jogos++;
}

if($p10 == "dados"){
    $dados++;
}



if($frontend > $backend && $frontend > $jogos && $frontend > $dados){
    $perfil = "Front-End";
    $img = "./img/front.png";
    $sobre = "Você gosta da parte visual e interativa dos sites.<br> Esse tipo de programador
    cria tudo aquilo que o usuário vê e usa na tela. <br><br> Ele trabalha com:<br><br>
    HTML para estruturar páginas<br>CSS para o estilo e design<br>JavaScript para animações e interações";
}

elseif($backend > $frontend && $backend > $jogos && $backend > $dados){
    $perfil = "Back-End";
    $img = "./img/Back-end.avif";
    $sobre = "Você gosta da lógica e funcionamento por trás do sistema.<br><br>
     O back-end faz tudo que acontece por trás do site, como:<br><br>salvar dados<br>criar sistemas
     <br>conectar banco de dados<br><br>Tecnologias comuns:<br><br>PHP<br>Python";
}

elseif($jogos > $frontend && $jogos > $backend && $jogos > $dados){
    $perfil = "Desenvolvedor de jogos";
    $img = "./img/dev.webp";
    $sobre = "Você provavelmente gosta de criatividade, lógica e diversão ao mesmo tempo.<br><br>
     Esse profissional cria:<br><br>personagens<br>mundos
     <br>mecânicas de jogo<br>desafios<br><br>Ferramentas comuns:<br><br>Unity<br>Unreal Engine";
}

else{
    $perfil = "Cientistas de dados";
    $img = "./img/dados.jpg";
    $sobre = "Você gosta de analisar informações e encontrar padrões.<br><br>
     Esse profissional trabalha com:<br><br>grandes quantidades de dados<br>estatísticas
     <br>previsões<br><br>Ferramenta comun:<br><br>Python";
}


setcookie("jogador",$nome,time()+3600);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Resultado do Quiz</title>
<link rel="stylesheet" href="estilo.css">
<link rel="icon" type="image/png" href="img/quizi.png">
</head>

<body>

<h1 class="tt">Resultado do Quiz</h1>

<p class="tt">Jogador: <?php echo $nome; ?></p>

<h2 class="tt">Seu perfil é: </h2>
<h2 class="bla"> <?php echo $perfil; ?></h2>

<img src="" alt="">

<br>

<h3 class="tt"><?php echo $sobre; ?></h3>

<h2 class="tt">Gostou do resultado? Compartilhe com seus amigos e descubra que tipo de programador eles seriam!</h2>

<a href="index.php">
<button id="JN">Jogar novamente</button>
</a>

</body>
</html>