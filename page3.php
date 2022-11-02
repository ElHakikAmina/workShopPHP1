<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/formulaire.css">
    <title>Document</title>
</head>
<body>
    <div class="amina">
<table>
            <tr>
                <td>Nom</td> <td>:</td> <td><?php if (isset ($_POST["nom"]) && !empty($_POST["nom"]) ) { echo $_POST["nom"];}else{ echo "Vous devez remplir le formulaire";}?></td>
            </tr>
            <tr>
                <td>Prenom</td> <td>:</td> <td><?php if (isset ($_POST["prenom"]) && !empty($_POST["prenom"])) { echo $_POST["prenom"];}else{ echo "Vous devez remplir le formulaire";} ?></td>
                </tr>
            <tr>
                <td>Email</td> <td>:</td> <td><?php if (isset ($_POST["email"]) && !empty($_POST["email"])) { echo $_POST["email"];}else{ echo "Vous devez remplir le formulaire";} ?></td>
                </tr>
            <tr>
                <td>Tel</td> <td>:</td> <td><?php if (isset ($_POST["tel"]) && !empty($_POST["tel"])) { echo $_POST["tel"];}else{ echo "Vous devez remplir le formulaire";} ?></td>
                </tr>
            
        </table>
        </div>
</body>
</html>