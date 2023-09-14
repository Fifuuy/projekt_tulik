<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rejestracja</title>
    <link rel="stylesheet" href="../styles/registerForm.css">
    <link rel="stylesheet" href="../styles/navbar.css">
</head>
<body>
    <?php
    include "navbar.php";
    ?>
    <div class="register__container">
        <h1 class="register__title">Rejestracja użytkownika</h1>
        <form class="register__form" action="rejstracja.php" method="post">
                <input class = "register__input" type="text" name="imie" placeholder="Imie">    
                <input class = "register__input" type="text" name="Nazwisko" placeholder="Nazwisko"> 
                <input class = "register__input" type="email" name="email" placeholder="E-mail">  
                <input class = "register__input" type="text" name="login" placeholder="Login"> 
                <input class = "register__input" type="password" name="haslo" placeholder="Hasło">    
                <input class = "register__input" type="date" name="dataur" placeholder="Data urodzenia">  
            <input class="register__button" type="submit" value="Utwórz konto" name="rejestruj">
        </form>
    </div>
</body>
</html>