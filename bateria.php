<!DOCTYPE html>
<html lang="pt" class="no-js">
<head>
<base href="https://www.musicca.com/pt/bateria" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="/modules/mod_ads/css/style.css?v=1664808718" rel="stylesheet" type="text/css" />
<script src="/media/jui/js/jquery.min.js?d1099a688fe8068dee368f9cd86a2d34"></script>
<script src="/modules/mod_ads/js/width_test.js?v=1664808718"></script>
<script src="/media/system/js/core.js?d1099a688fe8068dee368f9cd86a2d34"></script>
<script>
jQuery(window).on('load',  function() {
				
			});
</script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600&display=swap" rel="stylesheet">

<link rel="stylesheet" href="/templates/musicca/css/screen.min.css?v=1664808718">
<link rel="icon" type="image/png" href="/templates/musicca/images/favicon.png" />
<script defer src="/scripts/tooltip/opentip-native-excanvas.min.js"></script>
<script defer src="/templates/musicca/js/app.min.js?v=1664808718"></script>

<header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="http://localhost:8080/2022-3M-projetodev-G10/">Voltar para a home</a>
            </div>
          </div>
        </div>
      </nav>
</header>

<style>
.toggle-menu-mobile span > span{
	position: absolute;
	height: 1px;
	width: 1px;
	clip: rect(1px, 1px, 1px, 1px);
	padding: 0;
	border: 0;
	overflow: hidden;	
}

.header-content .navigation__lang .lang-menu{
	overflow-x: hidden;
}

</style>
<noscript>

<style>
.navigation__top {
    z-index: 9;
}

.navigation__mobile,

.fix__content{
    position: relative;
}

.mobile_menu__toggle{
	display: none;
}

.mobile__menu{
    display: block;
}

li.mobile_menu__item:hover ul {
    display: block;
}
.header-content .navigation__lang .lang_button .current-lang{
	cursor: auto;
}

.header-content .navigation__lang .lang_button .current-lang:hover > .sprite {
    opacity: 1;
}

</style>
</noscript>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<script>
									(function() {
										// ---------Header menu highlight active item--------

										var sideBarHeaderLink = jQuery('.navigation__left .left-nav a');

										if (sideBarHeaderLink.length) {
											var headerMenuLinks = jQuery('.navigation__top .menu__item .top_level');

											if (headerMenuLinks.length) {
												for (var i = 0; i < headerMenuLinks.length; i++) {
													headerMenuLinks[i].innerHTML == sideBarHeaderLink.text() ?
													headerMenuLinks[i].parentElement.classList.add('active') :
													headerMenuLinks[i].parentElement.classList.remove('active');
												}
											}
										}
										// ---------End Header menu highlight active item--------

									})();

								</script>

<div>
<h1 class="h1 default__page__title" itemprop="name">
Bateria virtual </h1>
</div>


<div itemprop="articleBody">
<div class="default__page__content">
<link href="/files/scripts/drumkit/static/css/main.chunk.css" rel="stylesheet" />
<script>
  window.translation = {
    shortcuts_button: {
      show: "Mostrar atalhos",
      hide: "Esconder atalhos"
    },
    keyCodes: {
      // an additional shortcuts can be assigned along with the existed
      keys: {
        87: "hihatLeft",
        69: "hihatRight",
        82: 'hihatLeftClosed',
        84: 'hihatRightClosed',
        67: 'hihatFoot',
        89: 'crash',
        85: 'ride',
        65: 'snareLeft',
        83: 'snareRight',
        68: 'snareLeftCrossStick',
        70: 'snareRightCrossStick',
        88: 'bass',
        90: 'bass',
        71: 'tom1',
        72: 'tom2',
        74: 'floor',
        73: 'snareRight' // an example of additional shortcut
      },
      names: {
        hihatRight: 'E',
        hihatRightClosed: 'R',
        hihatFoot: 'C',
        crash: 'Y',
        ride: 'U',
        snareRight: 'S',
        snareRightCrossStick: 'D',
        bass: 'X',
        tom1: 'G',
        tom2: 'H',
        floor: 'J',
      }
    }
  }
</script>
<div id="drum-kit"></div>
<script src="/files/scripts/drumkit/static/js/2.chunk.js"></script>
<script src="/files/scripts/drumkit/static/js/3.chunk.js"></script>
<script src="/files/scripts/drumkit/static/js/main.chunk.js"></script>
<script src="/files/scripts/drumkit/static/js/runtime-main.js"></script>
<div class="tools__page__content">

</article>
<div class="after__content">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<footer class="bg-light text-center text-lg-start">
  <div class="text-center p-5" style="background-color: rgba(0, 0, 0, 0.2); color:#333;">
    ?? 2020 Copyright:
    <a class="text-dark" href="https://pbs.twimg.com/ext_tw_video_thumb/1473664236572323840/pu/img/7jV-_-2dzIdxij-w.jpg">Luis e Riann</a>
</div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>
