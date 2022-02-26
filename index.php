<?php
  require_once 'controllers/prcss_session_client.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>TopRockMusic - Tu música favorita en un solo lugar</title>
    <?php require_once "views/includes/header_links.php";?>
</head>
<body>
  <div>
    <!-- NAVIGATION CONTENT -->
    <div class="nav-bar">
      <a href="#"><img src="<?= $principal_url ?>views/assets/images/Logo/logo_rock.png" alt="logo-page" class="nav-logo"></a>
        <ul class="nav-menu">
          <li><a href="#">Inicio</a></li>
          <li><a href="#">Álbums</a></li>
          <li><a href="#">Hits</a></li>
          <li><a href="#">TOP Mejores bandas</a></li>
          <li><a href="#">Mejores Singles Songs</a></li>
          <li><a href="#">Más</a></li>
        </ul>
        <input type="text" placeholder="Buscar en TopMusic">
        <a href="#" class="nav-search"><i class="fa fa-search"></i></a>
      </div>
      <hr>
    </div>    
    <!-- PRINCIPAL HEADER -->
    <div>
      <header class="header-page">
        <h2>Siente la energía...</h2>
        <p>Revivie tus mejores momentos y ten siempre tu mejor música.</p>
        <a href="#" class="btn-page">Entérate más <i class="fa fa-angle-double-right"></i></a>
      </header>
    </div>
    <!-- TITLE-ONE -->
    <div class="title-page1">
      <div class="title-content">
        <h2 class="title-one">LAS MEJORES BANDAS DE ROCK</h2>
        <p>Disfruta de tus artistas favoritos y canta a coro todas sus canciones
        </p>
      </div>
    </div>
    <!-- NEWS CONTENT -->
    <div class="container">
      <div class="cards-page">
        <div>
          <img src="<?= $principal_url ?>views/assets/images/artists/artist1.jpg" alt="news 1">
          <h3>Pink Floyd</h3>
          <a href="#">Escúchalos&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i></a>
        </div>
        <div>
          <img src="<?= $principal_url ?>views/assets/images/artists/artist2.jpg" alt="news 2">
          <h3>Gun's Roses</h3>
          <a href="#">Escúchalos&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i></a>
        </div>
        <div>
          <img src="<?= $principal_url ?>views/assets/images/artists/artist3.jpg" alt="news 3">
          <h3>Metallica</h3>
          <a href="#">Escúchalos&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i></a>
        </div>
        <div>
          <img src="<?= $principal_url ?>views/assets/images/artists/artist4.jpg" alt="news 4">
          <h3>AC DC</h3>
          <a href="#">Escúchalos&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i></a>
        </div>
        <div>
          <img src="<?= $principal_url ?>views/assets/images/artists/artist5.jpg" alt="news 5">
          <h3>Rollings Stones</h3>
          <a href="#">Escúchalos&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i></a>
        </div>
        <div>
          <img src="<?= $principal_url ?>views/assets/images/artists/artist6.jpg" alt="news 6">
          <h3>Queen</h3>
          <a href="#">Escúchalos&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i></a>
        </div>
        <div>
          <img src="<?= $principal_url ?>views/assets/images/artists/artist7.jpg" alt="news 7">
          <h3>Quiet Riot</h3>
          <a href="#">Escúchalos&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i></a>
        </div>
        <div>
          <img src="<?= $principal_url ?>views/assets/images/artists/artist8.jpg" alt="news 8">
          <h3>Kiss</h3>
          <a href="#">Escúchalos&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i></a>
        </div>
        <div>
          <img src="<?= $principal_url ?>views/assets/images/artists/artist9.jpg" alt="news 9">
          <h3>Aerosmith</h3>
          <a href="#">Escúchalos&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i></a>
        </div>
        <div>
          <img src="<?= $principal_url ?>views/assets/images/artists/artist11.jpg" alt="news 10">
          <h3>Led Zeppelin</h3>
          <a href="#">Escúchalos&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i></a>
        </div>
      </div>
    </div>
    <!-- TITLE_TWO -->
    <div class="title-page2">
      <div class="title-two">
        <p>Lorem12</p>
      </div>
    </div>
</body>
</html>