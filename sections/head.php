<?php

#if (session_status() !== PHP_SESSION_ACTIVE) {
ini_set('session.cookie_httponly', true);
ini_set('session.cookie_secure', true);
ini_set('session.cookie_domain', '.masafat.co');
session_name('__Secure-PHPSESSID');

    session_start();
    $_SESSION['_token']=bin2hex(openssl_random_pseudo_bytes(16));

#}

?>

<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="token" content="<?php if(isset($_SESSION['_token'])) { echo $_SESSION['_token']; } ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="css/style.css">
	<script src='https://www.google.com/recaptcha/api.js?hl=ar'></script>
	<noscript><meta HTTP-EQUIV="refresh" content=0;url="javascriptErr.php"></noscript>

	<meta name="description" content="موقع بسيط، يهدف لتوعية الأفراد عن أهمية حماية ممتلكاتهم الإلكترونية، وتوفير أسهل الطرق لدعم هذه الفكرة، وتشجيع الأفراد على ذلك.">
	<meta name="author" content="Made by Masafat">
	<meta property="og:title" content="Protect Your Self | إحم نفسك">
	<meta property="og:site_name" content="Protect Your Self | إحم نفسك">
	<meta property="og:description" content="موقع بسيط، يهدف لتوعية الأفراد عن أهمية حماية ممتلكاتهم الإلكترونية، وتوفير أسهل الطرق لدعم هذه الفكرة، وتشجيع الأفراد على ذلك.">
	<meta property="og:type" content="website">
	<meta property="og:url" content="masafat.co">
	<meta property="og:image" content="https://masafat.co/other/protecturself/imgs/micon.png">
	<link rel="icon" href="https://masafat.co/other/protecturself/imgs/micon.png">
    <link rel="apple-touch-icon-precomposed" href="https://masafat.co/other/protecturself/imgs/micon.png">

    <title>Protect Your Self | إحم نفسك</title>
  </head>
  <body>
    <div class="preload d-flex justify-content-center align-items-center">
      <div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
    </div>
