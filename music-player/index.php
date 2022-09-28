<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>JúlioBatera</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="../index.php">Voltar para Home</a>
            </div>
          </div>
        </div>
      </nav>
</header>
<div class="player-musica">
    <img src="imgens/skillet.jpg">
        <div class="descricao">
            <h2>music name</h2>
            <i>Riann Batista</i>
        </div>
        <div class="duracao">
            <div class="barra">
                <progress value="0" max="1"></progress>
                <div class="ponto"></div>
            </div>
            <div class="tempo">
                <p class="inicio">0:00</p>
                <p class="fim">3:40</p>
            </div>
        </div>
        <div class="player">
            <i class="fas fa-step-backward setas anterior"></i>
            <i class="fas fa-play-circle botao-play"></i>
            <i class="fas fa-pause-circle botao-pause"></i>
            <i class="fas fa-step-forward setas proxima"></i>
        </div>
        <audio src="musicas/skillet-feel-invincible.mp3"></audio>
</div>
    
    <script src="script.js"></script>

    <!--
        Desenvolvido por Riann Rodrigues Batista
    -->
</body>
</html>