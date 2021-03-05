<?php

session_start();

echo ("logowanie do panelu");
include_once("polaczenie.php");


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
            formularz rejestracji 
        </legend>
        <table>
            <form action="logowanie.php" method="post">
                <tr>
                    <td>Login </td> <td><input type="text" name="login" required></td>
                </tr>

                <tr>
                    <td>Haslo </td> <td><input type="password" name="haslo" required></td>
                </tr>

            
                <tr>
                    <td> </td> <td><input type="submit"name="submit" value="zaloguj" ></td>
                </tr>

                <tr>
                <td> Logowanie</td> <td>   <a href="zarejestruj.php" ></td>
                </tr>
            
            </form>
        </table>
    </fieldset>
</div>

<?php
if(isset($_POST['submit'])){
    if(!empty($_POST['login']) and !empty ($_POST['haslo'])){
        $login = htmlspecialchars($_POST['login']);
        $haslo = htmlspecialchars($_POST['haslo']);

$zapytanie =$polaczenie->query("SELECT imie,nazwisko,email FROM rejestracja WHERE login= '$login' and haslo='$haslo';");

if (mysqli_num_rows($zapytanie)==1) {
    list($imie,$nazwisko,$email)= mysqli_fetch_array($zapytanie);

    echo("imie:$imie nazwisko $nazwisko email$email");

    $_SESSION["zalogowany"] =1;
    $_SESSION["login"] =$login;
}

else{
    echo("niepoprawne dane");
}

    }}
?>
    

</body>
</html>


<?php $polaczenie->close();
?>