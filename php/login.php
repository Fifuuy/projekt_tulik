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
        <form class="login__form" action="login.php" method="post">
                <input class = "login__input" type="text" name="login" placeholder="login">    
                <input class = "login__input" type="text" name="haslo" placeholder="haslo"> 
            <input class="login__button" type="submit" value="Zaloguj sie" name="rejestruj">
        </form>
    </div>
</body>
</html>