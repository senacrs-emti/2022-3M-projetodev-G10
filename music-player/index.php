<?php 
    include_once "includes/head.php";
?>
<body>
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
    <script src="script.js"></script>

    <!--
        Desenvolvido por Riann Rodrigues Batista
    -->
</body>
</html>