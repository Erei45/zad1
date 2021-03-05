
<?php
include_once ("polaczenie.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <fieldset>
        <legend>
           Sklep rowerowy
        </legend>
        <table>
            <form action="rejestracja.php" method="post">
                <tr>
                    <td>Login </td> <td><input type="text" name="login" required></td>
                </tr>

                <tr>
                    <td>Halso </td> <td><input type="password" name="haslo1" required></td>
                </tr>

                <tr>
                    <td>Powtorz haslo </td> <td><input type="password" name="haslo2" required></td>
                </tr>


                <tr>
                    <td>imie </td> <td><input type="text" name="imie" required></td>
                </tr>


                <tr>
                    <td>nazwisko </td> <td><input type="text" name="nazwisko" required></td>
                </tr>

                <tr>
                    <td>adres email  </td> <td><input type="email" name="email" required></td>
                </tr>

                <tr>
                    <td>kod pocztowy </td> <td><input type="text" name="kod" required></td>
                </tr>


                <tr>
                    <td>pesel </td> <td><input type="text" name="pesel" required></td>
                </tr>


                <tr>
                    <td> </td> <td><input type="submit"name="submit" value="rejestruj" required></td>
                </tr>

                <tr>
                    <td> Logowanie</td> <td>  <a href="logowanie.php"> logowanie</a> </td>
                </tr>
            
            </form>
        </table>
    </fieldset>
</div>

<?php

    if(isset($_POST['submit'])){
        if($_POST['haslo1'] == $_POST['haslo2']){

        $login = htmlspecialchars($_POST['login']);
        $haslo1 = htmlspecialchars($_POST['haslo1']);
        $imie = htmlspecialchars($_POST['imie']);
        $nazwisko = htmlspecialchars($_POST['nazwisko']);
        $email = htmlspecialchars($_POST['email']);
        $pesel = htmlspecialchars($_POST['pesel']);
        $kod = htmlspecialchars($_POST['kod']);
        $zapytanie_sprawdzajace_czyistnieje_login=$polaczenie->query("SELECT login FROM klienci WHERE login='$login'");

        if(mysqli_num_rows($zapytanie_sprawdzajace_czyistnieje_login)==1){

echo("Podany login jest zajety");

      



          }


          else{




            $dodaj_do_bazy= $polaczenie->query("INSERT INTO klienci(login,haslo,imie,nazwisko,adres,kodpocztowy,pesel) values('$login','$haslo1','$imie','$nazwisko','$email','$kod','$pesel')");


            if (mysqli_affected_rows($polaczenie)) {
                echo "Dodano";
                # code...
            }

          }

    }}



?>
    
</body>
</html>

<?php $polaczenie->close();
?>