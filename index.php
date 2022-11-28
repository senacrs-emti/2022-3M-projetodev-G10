<?php 
  include_once "includes/head.php";
?>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="music-player/index.php">Ouvir música</a>
          <a class="navbar-brand" href="bateria.php">Tocar bateria</a>
            </div>
          </div>
        </div>
      </nav>
</header>

<img src="https://a-static.mlcdn.com.br/800x560/bateria-infantil-banco-baqueta-rock-star-prato-chimbal-com-baquetas-iniciante-instrumento-brinquedo-toy-brow/mundodocomercio/15831158100/bb6658d6d771c13809518f7d89bdd198.jpg" alt="Minha bateria!" title="Batera braba!!!" width="300px" height="300px" vspace="50px" hspace=" 40px" align="left"/>
<h1 style="color: white; margin-top:150px; font-size: 30px; height:200px; display: flex;";>Olá, sejam bem-vindos ao nosso site. Aqui você poderá desfrutar da nossa bateria "eletrônica". No nosso site também tem a opção de ouvir musicas, como se fosse um spotfy.</h1>



<script>
  function typeWriter(elemento) {
    const textoArray = elemento.innerHTML.split('');
    elemento.innerHTML = '';
    textoArray.forEach((letra, i) => {
      setTimeout(() => elemento.innerHTML += letra, 75 * i);
    });
  }

  // Se estiver tendo problemas com performance, utilize o FOR loop como abaixo no local do forEach
  // function typeWriter(elemento) {
  //   const textoArray = elemento.innerHTML.split('');
  //   elemento.innerHTML = '';
  //   for(let i = 0; i < textoArray.length; i++) {
  //     setTimeout(() => elemento.innerHTML += textoArray[i], 75 * i);
  //   }
  // }

  const titulo = document.querySelector('h1');
  typeWriter(titulo);
</script>

<?php 
  include_once "includes/footer.php";
?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>