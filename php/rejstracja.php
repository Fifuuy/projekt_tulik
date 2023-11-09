
<?php
    $c = mysqli_connect("localhost","root","","silownia");
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $email = $_POST['email'];
        $login = $_POST['login'];
        $haslo = $_POST['haslo'];
        $data_urodzenia = $_POST['dataur'];
        // if(mysqli_num_rows(mysqli_query( $c, "SELECT 'login' FROM uzytkownicy WHERE login = '".$login."';"))==0)
        $query = "INSERT INTO uzytkownicy VALUES(NULL,'$imie','$nazwisko','$email','$login','$haslo','$data_urodzenia');";

        mysqli_query($c,$query);
        
        session_start();
        $_SESSION['user_id']=$c->insert_id; //wartos ostatniego wstawionego id

        header('Location: index.php'); //przekierowanie 

        

    mysqli_close($c);
?>