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
            <form action="rejestruj.php" method="post">
                <tr>
                    <td>Login </td> <td><input type="text" name="login" required></td>
                </tr>

                <tr>
                    <td>Halso </td> <td><input type="password" name="haslo1" required></td>
                </tr>

                <tr>
                    <td>Powtorz haslo </td> <td><input type="text" name="haslo2" required></td>
                </tr>


                <tr>
                    <td>imie </td> <td><input type="text" name="imie" required></td>
                </tr>


                <tr>
                    <td>nazwisko </td> <td><input type="text" name="nazwisko" required></td>
                </tr>

                <tr>
                    <td>email </td> <td><input type="email" name="email" required></td>
                </tr>


                <tr>
                    <td> </td> <td><input type="submit" value="rejestruj" required></td>
                </tr>
            
            </form>
        </table>
    </fieldset>
</div>
    
</body>
</html>