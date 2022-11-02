
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/formulaire.css">
</head>
<body>
    <form  method="post" action="page3.php" name="form1" id="formulaire">
        <table class="tableContact">
            <h3 class="titleContact">CONTACT US</h3>
        <tr>
                <td>Nom</td> <td>:</td> <td><input type="text" placeholder="Entrer votre nom"  name="nom" ></td>
            </tr>
            <tr>
                <td>Prenom</td> <td>:</td> <td><input type="text" placeholder="Entrer votre prenom" name="prenom" ></td>
                </tr>
            <tr>
                <td>Email</td> <td>:</td> <td><input type="text" placeholder="Entrer votre Email" name="email" ></td>
                </tr>
            <tr>
                <td>Tel</td> <td>:</td> <td><input type="text" placeholder="Entrer votre numero de telephone" name="tel" ></td>
                </tr>
            <tr>
                <td></td> <td></td> <td><input type="submit" class="btn-envoyer" value="Envoyer" name="envoyer"></td>
            </tr>
        </table>
        
        
    </form>
</body>
</html>