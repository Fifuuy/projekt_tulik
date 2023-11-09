<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/profil.css" />
    <link rel="stylesheet" href="../styles/navbar.css">
    <title>PROFIL</title>
</head>
<body>
    <?php
        include "navbar.php";
    ?>
    <div class="profile__tab">
            <h1 class= "profile__title">TWOJ PROFIL</h1>
    <div class=profile__info>
        <table>
            <tr>
                <th>imie</th>
                <th>nazwisko</th>
                <th>email</th>
                <th>login</th>
                <th>haslo</th>
                <th>data_urodzenia</th>
            </tr>
        <?php
           $c = mysqli_connect("localhost","root","","silownia");

            $user_id = $_SESSION['user_id'];
            $q = "SELECT uzytkownicy.imie,uzytkownicy.nazwisko,uzytkownicy.email,uzytkownicy.login,uzytkownicy.haslo,uzytkownicy.data 
            FROM uzytkownicy WHERE uzytkownicy.id = $user_id ";

            $wynik = mysqli_query($c,$q);
            for($i=0;$i < mysqli_num_rows($wynik);$i++);
            {
                $row = mysqli_fetch_row($wynik);
                echo "<tr><td>$row[0]</td></tr>";
            }
            
        ?>
        </table>
    </div>
    <div class="log_out">
            <a href="index.php">WYLOGUJ</a>
    </div>
    </div>
</body>
</html>