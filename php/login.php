<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rejestracja</title>
    <link rel="stylesheet" href="../styles/login.css">
    <link rel="stylesheet" href="../styles/navbar.css">
</head>
<body>
    <?php
    include "navbar.php";
    ?>
    <div class="login__container">
        <h1 class="login__title">LOGOWANIE</h1>
        <form class="login__form" action="" method="post">
                <input class = "login__input" type="text" name="login" placeholder="login">    
                <input class = "login__input" type="text" name="haslo" placeholder="haslo"> 
            <input class="login__button" type="submit" value="Zaloguj sie" name="rejestruj">
        </form>
    </div>
    <?php
        if(isset($_POST['login'])){
            $login = $_POST['login'];
            $haslo = $_POST['haslo'];

            $c = mysqli_connect("localhost","root","","silownia");

            $q = "SELECT id FROM uzytkownicy WHERE login = '$login' AND haslo = '$haslo'";

            $wynik = mysqli_query($c, $q);
            $ile_wierszy = mysqli_num_rows($wynik);
            if($ile_wierszy==0){
                header('Location: login.php');
            }else{
                session_start();
                $row = mysqli_fetch_row($wynik);
                $_SESSION['user_id'] = $row[0];
                header('Location: profil.php');
            }
            mysqli_close($c);
        }
    ?>
</body>
</html>