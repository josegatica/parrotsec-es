<!DOCTYPE html>
<html>
<head>
  <title>Proyecto ParrotSec</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author"   content="Lorenzo Faletra - José Gatica - Alejandro Franco - Claudio Peon">
  <!-- Meta data to help Facebook generate the right advertisement -->
  <meta property="og:type"        content="article" />
  <meta property="og:title"       content="Esperemos ansiosos el lanzamiento de "Migración", la segunda edición de nuestra documentacin oficial." />
  <meta property="og:site_name"   content="Parrot Security"/>
  <meta property="og:url"         content="https://www.parrotsec-es.org" />
  <meta property="og:image"       content="https://www.parrotsec.org/img/facebook-preview.png" />
  <meta property="og:description" content="Descubre nuestro increíble entorno GNU/Linux de ciber seguridad. Incluye un laboratorio portable completo para expertos forenses digitales y de seguridad, pero también incluye todo lo que necesitas para desarrollar tus propios programas o proteger tu privacidad con anonimato y crypto-herramientas." />
  <meta property="fb:app_id"      content="">
  <link href="css/parrot.min.css" type="text/css" rel="stylesheet" />
  <!--external libraries CSS -->
  <link href="css/vendor.min.css"   type="text/css" rel="stylesheet" />
  <!--custom + external libraries JS -->
  <!--<script src="js/main.min.js"      type="text/javascript"></script>-->
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <link rel="shortcut icon" href="img/logo.png">
</head>
<body>
  <div class="finger-detection-open-menu visible-xs"></div>
  <header>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-2 logo">
          <a href="#">
            <img src="img/logo.png" class="wow fadeIn smoothScroll" data-linkto='parrot-os' id="parrotLogo"/>
          </a>
          <i class="fa fa-bars fa-lg pull-left visible-xs" id="open_main_menu"></i>
        </div>
        <nav class="hidden-xs col-sm-10 text-right wow fadeIn" id="main-menu">
          <ul>
            <li>
              <a class='smoothScroll' id="home" data-linkto='parrot-os' href="https://www.parrotsec-es.org/">Inicio</a>
            </li>
            <li>
              <a class='smoothScroll' data-linkto='parrot-download' href="https://www.parrotsec-es.org/download.php">Descargas</a>
            </li>
            <li>
              <a class='smoothScroll' data-linkto='parrot-news' href="https://blog.parrotsec.org" target="blank">Noticias</a>
            </li>
            <li>
              <a class='smoothScroll' data-linkto='parrot-documentation' href="https://docs.parrotsec-es.org/" target="blank">Documentación</a>
            </li>
            <li>
              <a class='smoothScroll' data-linkto='parrot-community' href="https://community.parrotsec.org/viewforum.php?id=25" target="blank">Comunidad</a>
            </li>
            <li>
              <a class='smoothScroll' data-linkto='parrot-faq' href="https://github.com/josegatica/parrot-docu-es/blob/master/00.-%20FAQ.md" target="blank">F.A.Q.</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <aside>
    <!--grabs content from #main-menu on mobile devices or small screens only -->
  </aside>

  <a href="#" class='smoothScroll go-to-top' data-linkto='parrot-os'>
    <i class="fa-chevron-up fa"></i>
    Up
  </a>

  <section id="parrot-os">
    <article class="container-fluid">
      <h1 class="text-center wow fadeInUp">Esperemos ansiosos a <b>MIGRACIÓN</b>, la segunda edición de nuestra documentación en español.</h1>
      <h2 class="text-center wow fadeInUp">Descubre el <b>Universo Parrot</b> y obtén el máximo de nuestra increíble plataforma basada en Debian.</h2>
      <h3 class="text-center wow fadeInUp">Herramientas profesionales para pruebas de seguridad, desarrollo de software y defensa de la privacidad, todo en un solo lugar.</h3>
      <div class="row os-main">
        <div class="col-sm-6 text-center wow fadeIn" data-wow-delay=".2s">
          <div id="security">
            <div class="distributions-icon">
              <img src="img/logo-black.png" class="wow bounceInDown"  data-wow-delay=".7s" />
            </div>
            <h1 class="wow fadeIn" data-wow-delay=".5s">Security</h1>
            <h4 class="wow fadeIn" data-wow-delay=".6s">Un entorno completo que proporciona variadas herramientas de seguridad y un completo entorno para anonimato y desarrollo de software.</h4>
            <a href="https://www.parrotsec-es.org/features.php" class="moreinfo btn btn-default">Más información</a>
            <a href="https://www.parrotsec-es.org/download.php#security" class="moreinfo btn btn-primary">
              <span>Instalar Parrot Security</span>
            </a>
          </div>
        </div>
        <div class="col-sm-6 text-center">
          <div id="parrot">
            <div class="distributions-icon">
              <img src="img/logo-white.png" class="distributions-icon wow bounceInDown"  data-wow-delay=".7s" />
            </div>
            <h1 class="wow fadeIn" data-wow-delay=".5s">Home</h1>
            <h4 class="wow fadeIn" data-wow-delay=".6s" lang="en">Aprovecha al máximo el núcleo de Parrot sin herramientas específicas, con un sistema básico y completamente personalizable.</h4>
            <a href="https://www.parrotsec-es.org/download.php#lite" class="moreinfo btn btn-primary">
              <span>Instalar Parrot Lite</span>
            </a>
          </div>
        </div>
      </div>
    </article>
  </section>

  <section id="parrot-os">
    <article class="container-fluid">
      <div class="row os-main">
        <div class="col-sm-6 text-center wow fadeIn" data-wow-delay=".2s">
          <div id="security">
            <div class="distributions-icon">
              <img src="img/air.png" class="wow bounceInDown"  data-wow-delay=".7s" />
            </div>
            <h1 class="wow fadeIn" data-wow-delay=".5s">Air</h1>
            <h4 class="wow fadeIn" data-wow-delay=".6s">Un especial derivado de Parrot enfocado en pruebas Wireless</h4>
            <a href="https://www.parrotsec-es.org/download.php#air" class="moreinfo btn btn-primary">
              <span>Instalar Parrot Air</span>
            </a>
          </div>
        </div>
        <div class="col-sm-6 text-center">
          <div id="parrot">
            <div class="distributions-icon">
              <img src="img/workstation.png" class="distributions-icon wow bounceInDown"  data-wow-delay=".7s" />
            </div>
            <h1 class="wow fadeIn" data-wow-delay=".5s">Studio</h1>
            <h4 class="wow fadeIn" data-wow-delay=".6s" lang="en">Obtén la más completa y liviana distribución basada en Debian GNU/Linux para tu estación de trabajo.</h4>
            <a href="https://www.parrotsec-es.org/download.php#studio" class="moreinfo btn btn-primary">
              <span>Instalar Parrot Studio</span>
            </a>
          </div>
        </div>
      </div>
    </article>
  </section>

  <section id="parrot-os">
    <article class="container-fluid">
      <div class="row os-main">
        <div class="col-sm-6 text-center wow fadeIn" data-wow-delay=".2s">
          <div id="security">
            <div class="distributions-icon">
              <img src="img/servers.png" class="wow bounceInDown"  data-wow-delay=".7s" />
            </div>
            <h1 class="wow fadeIn" data-wow-delay=".5s">Cloud</h1>
            <h4 class="wow fadeIn" data-wow-delay=".6s">Mezcla las herramientas de Parrot con el poder de la nube y haz tus pruebas de penetración más fácil con una de nuestras cajas de pentesting en la nube.</h4>
            <a href="https://www.parrotsec-es.org/features.php#cloud" class="moreinfo btn btn-default">More information</button>
            <a href="https://core.dasaweb.net/cart.php?gid=18" class="moreinfo btn btn-primary">
              <span>Obtener Parrot Cloud</span>
            </a>
          </div>
        </div>
        <div class="col-sm-6 text-center">
          <div id="parrot">
            <div class="distributions-icon">
              <img src="img/iot.png" class="distributions-icon wow bounceInDown"  data-wow-delay=".7s" />
            </div>
            <h1 class="wow fadeIn" data-wow-delay=".5s">Iot</h1>
            <h4 class="wow fadeIn" data-wow-delay=".6s" lang="en">¿Quieres arrancar Parrot en una Raspberry Pi, Pine64 u otro dispositivo integrado? Descubre qué ocurre cuando Parrot conoce tus placas SoC favoritas.</h4>
            <a href="https://www.parrotsec-es.org/download.php#iot" class="moreinfo btn btn-primary">
              <span>Obtener Parrot IoT</span>
            </a>
          </div>
        </div>
      </div>
    </article>
  </section>


  <section id="parrot-conferences">
    <div class="section-background"></div>
    <article>
      <h2 class="strong-title wow slideInDown" lang="en">Conócenos en algún evento.</h2>
      <a href="https://blog.parrotsec.org/category/events/" target="_blank" class="btn btn-default wow zoomIn"><span lang="en">Ver eventos globales</span></a>
    </article>
  </section>
  <footer>
    <div class="container-fluid">
      <div class="row footer-links-area">
        <div class="col-sm-5">
          <div class="row">
            <div class="col-xs-4">
              <ul>
                <li>
                  <a href="https://docs.parrotsec.org/what-is-parrot">
                    <span>About</span>
                  </a>
                </li>
                <li>
                  <a href="https://docs.parrotsec.org/terms-and-conditions">
                    <span>Terms</span>
                  </a>
                </li>
                <li>
                  <a href="https://docs.parrotsec.org/partners">
                    <span>Partners</span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-xs-4">
              <ul>
                <li>
                  <a href="https://en.wikipedia.org/wiki/Parrot_Security_OS">
                    <span>Wikipedia</span>
                  </a>
                </li>
                <li>
                  <a href="https://distrowatch.com/table.php?distribution=parrotsecurity">
                    <span>Distrowatch</span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-xs-4">
              <ul>
                <li>
                  <a href="http://chat.frozenbox.org:3989/?nick=parrot_....&channels=parrot&prompt=1">
                    <span>IRC</span>
                  </a>
                </li>
                <li>
                  <a href="https://telegram.me/joinchat/AerigkC4pztMc7Hus7vRZg">
                    <span>Telegram</span>
                  </a>
                </li>
                <li>
                  <a href="http://lists.parrotsec.org/listinfo">
                    <span>Mailing lists</span>
                  </a>
                </li>
                <li>
                  <a href="https://www.facebook.com/groups/parrotsec/">
                    <span>Facebook Group</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-5 col-sm-offset-2 social-networks">
          <a href="https://www.facebook.com/parrot.es/" target="_blank" class="wow fadeIn" data-wow-delay=".6s">
            <i class="fa fa-facebook-square"></i>
          </a>
          <a href="https://twitter.com/parrotsec" target="_blank" class="wow fadeIn">
            <i class="fa fa-twitter-square"></i>
          </a>
          <a href="https://plus.google.com/111027400980207179581" target="_blank" class="wow fadeIn" data-wow-delay=".3s">
            <i class="fa fa-google-plus-square"></i>
          </a>
          <a href="https://www.youtube.com/channel/UCj2dezzTc_Oy9eAEwBBodpw" target="_blank" class="wow fadeIn" data-wow-delay=".9s">
            <i class="fa fa-youtube-square"></i>
          </a>
        </div>
      </div>
      <div class="blue-triangular-division wow slideInDown"></div>
      <p class="text-center">© Lorenzo Faletra & ParrotSec Spanish Community Algunos derechos reservados.</span> - <a href="https://www.gnu.org/licenses/gpl-3.0.en.html">GNU/GPL v3</a></p>
      <p class="text-center">¡Orgullosamente desarrollado por la comunidad de habla hispana de Parrot Security OS!</p>
      </p>
    </div>
  </footer>
  <!-- End Piwik Code -->
  <div class="hidden-content">
     <!-- FIXME: text is in ./assets/js/parrot-theme.js -->
    <span lang="en">Back to main page</span>
  </div>
</body>
</html>
