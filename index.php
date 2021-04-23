<?php
header("Access-Control-Allow-Origin: *");
?>

<!-- ケンミル -->
<!-- 神様最高 -->
<!DOCTYPE html>
<html lang="en">
<!-- メタ情報 -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
  <!-- CSSファイルのリンクです。内部の場合は <style></style> に置き換えます。 -->
  <link rel="stylesheet" type="text/css" href="assets/css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <!-- JSファイルのリンク。内部の場合は<script></script>に置き換えます。 -->
  <script defer src="assets/js/materialize.min.js"></script>
  <script defer src="assets/js/all.min.js"></script>
  <script defer src="assets/js/articles.js"></script>
  <script defer src="assets/js/main.js"></script>
  <link rel="shortcut icon" href="#">
  <title>Newser</title>
</head>
<!-- アプリのマークアップ -->

<body>
  <!-- Header -->
  <header class="navbar-fixed">
    <nav class="green darken-2">
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo">&nbsp;<i class="far fa-newspaper"></i> Newser</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="fas fa-bars"></i></i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="https://www.kennyfully.com" target="_blank">Kenny Fully</a></li>
        </ul>
      </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
      <li><a href="#home">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="https://www.kennyfully.com" target="_blank">Kenny Fully</a></li>
    </ul>
  </header>

  <!-- Main -->
  <main id="home">
    <!-- News Articles -->
    <section>
      <!-- News Article Cont -->
      <div class="row news-articles-cont"></div>
    </section>
  </main>

  <!-- Footer -->
  <footer id="about" class="page-footer green darken-2">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Newser</h5>
          <p class="grey-text text-lighten-4">The latest news for me and you. This app was made with HTML, CSS, Materialize UI, JS, JSON, and News API. News API only allows a limited amount of calls a day. If you don't see the current news update, please comeback later when the call limit has reset.</p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Links</h5>
          <ul>
            <li><a class="grey-text text-lighten-3" href="#home">Home</a></li>
            <li><a class="grey-text text-lighten-3" href="#about">About</a></li>
            <li><a class="grey-text text-lighten-3" href="https://www.kennyfully.com" target="_blank">Kenny Fully</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        ©2021 KenMil
        <a class="grey-text text-lighten-4 right" href="https://www.kennyfully.com" target="_blank">kennyfully.com</a>
      </div>
    </div>
  </footer>
</body>

</html>
<!-- HTMLの終わり。 -->