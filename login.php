<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="pl" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="author" content="Jakub Wiśniewski">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CherryDesign</title>
  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="css/login.css">
  <link href="https://fonts.googleapis.com/css?family=Baumans|Montserrat:400,700&amp;subset=latin-ext" rel="stylesheet">
  <link rel="shortcut icon" href="img/Logo_I.png">
  <script src="scripts/loading.js"></script>
</head>

  <body>
    <div id="loader">
      <div id="anim"></div>
    </div>
    <header id="header" class="header-transparent">
      <a href="index.php">
        <div id="icon"></div>
      </a>
      <div id="menu-button" onclick="toggleMenu()"></div>
      <nav id="menu" class="menu-hidden">
        <ul>
          <a href="index.php"><li>strona główna</li></a>
          <a href="uslugi.html"><li>usługi</li></a>
          <a href="kontakt.html"><li>kontakt</li></a>
        </ul>
      </nav>
    </header>

    <section>
      <div id="logo"></div>
      <div id="login">
        <form action="scripts/login.php" method="POST">
          <input type="text" name="mailuid" placeholder="Login/E-mail">
          <input type="password" name="pwd" placeholder="Hasło">
          <button type="submit" name="submit">Zaloguj się!</button>
        </form>
      </div>
    </section>
  </body>
</html>
