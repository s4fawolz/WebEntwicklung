<?php
require "db_config.php";
session_start();


if(isset($_SESSION["loginstatus"] ) && $_SESSION["loginstatus"] == true)
{
    $projekt = $_SESSION["projekt"];
    $sql ="SELECT * 
                FROM Mitglieder m, projekte p, Projekte_Mitglieder pm
                WHERE '$projekt' = p.Name and p.ID = pm.ProjektID and m.ID = pm.MitgliedsID";
}else
    $sql = "SELECT * FROM `Mitglieder`";


$result = $conn->query($sql);
$mitarbeiter = $result->fetch_all(MYSQLI_ASSOC);
?>
<!doctype html>
<html lang=de:DE>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" type="text/css" href="\Uebung_HTML-CSS\css\Ue2A4.css">-->
    <title>Mitglieder</title>
</head>
<body>
<div class="container-fluid">
    <?php include "header.php"; ?>
    <div class = "row">
        <?php
        include "Navigation.php";
        ?>
        <div class="col">
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">EMail</th>
                    <th scope="col">In Projekt</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($mitarbeiter  as $value)
                {?>
                <tr>
                    <td><?=$value["Username"]?> </td>
                    <td><?=$value["EMail"]?></td>
                    <td><i class="fa fa-square"></i></td>
                    <td><a href="MitgliedBearbeiten.php?delID=<?=$value['ID']?>"><i class="fa fa-clipboard"></i></a></td>
                    <td><a href="Scripts/Actions.php?delID=<?=$value['ID']?>"> <i class="fa fa-trash"></a></i></td>
                </tr>
                <?php }?>
                </tbody>
            </table>
            <br>
            <h2>Beabeiten/Erstellen</h2>
            <form action="Scripts/Actions.php" method="post">

                <div class="form-group">
                    <label for="username">Username:</label>
                    <input class="form-control" type="text" name="newUsername" id="username" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input class="form-control" type="email" name="newUserEmail" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="passwort">Passwort:</label>
                    <input class="form-control" type="password" name="newUserPasswort" id="passwort" placeholder="Passwort">
                </div>
                <div class="form-check" style="margin-bottom: 10px">
                    <input class="form-check-input" type="checkbox" name="applyProject" value="true" id="checkB">
                    <label class="form-check-label" for="checkB">
                        Dem Projekt zugeordnet
                    </label>
                </div>
                <button name = "createUser" type="submit" class="btn btn-primary" value="true">Submit</button>
                <button type="button" class="btn btn-info">Reset</button>
            </form>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>
</body>
</html>