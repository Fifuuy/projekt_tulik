<!DOCTYPE html>
<html lang="pl-PL">
  <head>
    <title>SUPERSAYIAN GYM</title>
    <link rel="stylesheet" href="../styles/main.css" />
    <link rel="stylesheet" href="../styles/navbar.css">
  </head>
  <body>
    <?php
    include "navbar.php";
    ?>

    <div class="main">
      <p class="nazwa">
        SŁOWIKS'S <span style="color: rgb(184, 40, 40)">PREMIUM</span> 24 HOUR
        <span style="color: rgb(184, 40, 40)">GYM</span>
      </p>
      <span class="fabryka"> <p>ŚWIĄTYNIA FORMY I SIŁY</p> </span>
    </div>
    <div class="holder">
      <?php
      session_start();
      if(isset($_SESSION['user_id']))
      {
          echo '<div class="main__btn">
          <a href="profil.php">PROFIL</a>
        </div>';
      }
      else{
        echo '
        <div class="main__btn">
          <a href="registerForm.php">ZAREJESTRUJ SIĘ</a>
        </div>
        <div class="main__btn">
          <a href="login.php">ZALOGUJ SIĘ</a>
        </div>';
      }
      ?>

    </div>
  </body>
</html>
