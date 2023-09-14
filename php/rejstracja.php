
<?php
    $c = mysqli_connect("localhost","root","","silownia");
    
        if(mysqli_num_rows(mysqli_query( $c, "SELECT 'login' FROM uzytkownicy WHERE login = '".$login."';"))==0)

        mysqli_query($c,"INSERT INTO 'uzytkownicy' ('imie','nazwisko','email','login','haslo','data_urodzenia')
        VALUES(
        '".$imie."',
        '".$nazwisko."',
        '".$email."',
        '".$login."',
        '".$haslo."',
        '".$data_urodzenia."',);
        ");

    mysqli_close($c);
?>