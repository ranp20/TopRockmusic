<?php 
	$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
  $principal_url =  $actual_link . "/" ."TopRockMusic/";
?>
<meta name="description" content="La auténtica música. Excelentes álbumes, playList y mejores songs de tus artistas favoritos."/>
<!--<link rel="icon" type="image/x-icon" href="./assets/img/favicon/Logo_RESTAURANT_proyect.ico">-->
<!--<link rel="apple-touch-icon" href="./assets/img/favicon/Logo_RESTAURANT_proyect.ico">-->
<link rel="canonical" href="https://localhost/TopRockMusic">
<meta name="theme-color" content="#FFBD59">
<meta name="author" content="R@np-2021"/>
<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
<meta name="twitter.card" content="summary">
<meta property="og:title" name="twitter.title" content="TopRockMusic - Mejores PlayList">
<!--<meta property="og:image" name="twitter.image" content="./assets/img/favicon/Logo_RESTAURANT_proyect_100x100.png">-->
<meta property="og:url" name="twitter.url" content="https://localhost/TopRockMusic">
<meta property="og:description" name="twitter.description" content="Las mejores canciones. Excelentes playList, lo más pedido.">
<meta property="og:type" content="website"/>
<meta property="og:locale" content="es_ES"/>
<meta property="og:site_name" content="TopRockMusic"/>
<link rel="stylesheet" href="<?= $principal_url; ?>views/assets/css/styles.min.css">
<link rel="stylesheet" href="<?= $principal_url; ?>views/assets/font-awesome-4.7.0/css/font-awesome.css">
<script src="<?= $principal_url; ?>views/assets/js/jquery-3.6.0.min.js"></script>