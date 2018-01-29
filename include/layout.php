<?php

echo
'<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <title>',CONFIG_SITE_NAME, ' - ', CONFIG_SITE_SLOGAN,'</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="',CONFIG_SITE_DESCRIPTION,'">
  <meta name="author"   content="',CONFIG_SITE_AUTOR,'">
  <!-- Meta data to help Facebook generate the right advertisement -->
  <meta property="og:type"        content="article" />
  <meta property="og:title"       content="La mejor elección para expertos en Seguridad, desarrolladores y crypto-adictos." />
  <meta property="og:site_name"   content="Parrot Security"/>
  <meta property="og:url"         content="https://www.parrotsec-es.org" />
  <meta property="og:image"       content="https://www.parrotsec.org/img/facebook-preview.png" />
  <meta property="og:description" content="Descubre nuestro increíble entorno GNU/Linux de ciber seguridad. Incluye un laboratorio portable completo para expertos forenses digitales y de seguridad, pero también incluye todo lo que necesitas para desarrollar tus propios programas o proteger tu privacidad con anonimato y crypto-herramientas." />
  <meta property="fb:app_id"      content="">
  <link rel="stylesheet" href="',CONFIG_SITE_URL_STATIC_RESOURCES,'css/bootstrap.min.css" />
  <link rel="stylesheet" href="',CONFIG_SITE_URL_STATIC_RESOURCES,'css/animate.min.css" />
  <link rel="stylesheet" href="',CONFIG_SITE_URL_STATIC_RESOURCES,'css/ionicons.min.css" />
  <link rel="stylesheet" href="',CONFIG_SITE_URL_STATIC_RESOURCES,'css/features-table.css" />
  <link rel="stylesheet" href="',CONFIG_SITE_URL_STATIC_RESOURCES,'css/panel-download.css" />
  <link rel="stylesheet" href="',CONFIG_SITE_URL_STATIC_RESOURCES,'css/font-awesome.min.css">
  <link rel="stylesheet" href="',CONFIG_SITE_URL_STATIC_RESOURCES,'css/styles.css" />
  <link rel="icon" href="',CONFIG_SITE_URL_STATIC_RESOURCES,'img/logo.png" type="image/png" />
</head>

<body>
  <nav id="topNav" class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar">
                  <span class="sr-only">',$lang['nav-1'],'</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand page-scroll" href="index.php">
                <b><img src="',CONFIG_SITE_URL_STATIC_RESOURCES,'img/logo.png" width="20" height="20" /> ',$lang['nav-2'],'</b>
              </a>
          </div>
          <div class="navbar-collapse collapse" id="bs-navbar">
              <ul class="nav navbar-nav">
                  <li>
                      <a class="page-scroll" href="download.php">',$lang['nav-3'],'</a>
                  </li>
                  <li>
                      <a class="page-scroll" href="https://blog.parrotsec.org">',$lang['nav-4'],'</a>
                  </li>
                  <li>
                      <a class="page-scroll" href="https://docs.parrotsec-es.org/">',$lang['nav-5'],'</a>
                  </li>
                  <li>
                      <a class="page-scroll" href="https://dev.parrotsec.org" target="_blank">',$lang['nav-6'],'</a>
                  </li>
                  <li>
                      <a class="page-scroll" href="https://docs.parrotsec.org/community">',$lang['nav-7'],'</a>
                  </li>
                  <li>
                      <a class="page-scroll" href="https://docs.parrotsec.org/partners">',$lang['nav-8'],'</a>
                  </li>
                  <li>
                      <a class="page-scroll" href="https://docs.parrotsec.org/developers">',$lang['nav-9'],'</a>
                  </li>
                  <li>
                      <a class="page-scroll" href="https://docs.parrotsec.org/donate">',$lang['nav-10'],'</a>
                  </li>
                  <li>
                      <a class="page-scroll" href="https://docs.parrotsec.org/FAQ">',$lang['nav-11'],'</a>
                  </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                  <li>
                      <a class="page-scroll" href="https://github.com/josegatica/parrotsec-es" target="_blank">',$lang['nav-12'],'</a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>';

  ?>
