<?php
session_start();
require "db_config.php";

$sql = "SELECT * FROM `projekte`";
$result = $conn->query($sql);
$mitarbeiter = $result->fetch_all(MYSQLI_ASSOC);


if(isset($_POST["sessionButton"]))
{
    $_SESSION["projekt"] = $_POST["list"];
    header('Location: AktuellesProjekt.php');
}


?>
<!doctype html>
<html lang=de:DE>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Projekte</title>
</head>
<body>
<div class="container-fluid">
    <?php include "header.php"; ?>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h2>Projekt Auswählen</h2>
            <form method="post">
                <div class="form-group">
                    <select name="list"class="form-control" id="projektAuswahl">
                        <?php foreach ($mitarbeiter  as $value)
                        {?>
                        <option><?=$value["Name"]?><option>
                            <?php }?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" name="sessionButton" value="true" style="margin-bottom: 10px;">Submit</button>
                <button type="button" class="btn btn-primary" style="margin-bottom: 10px;">Bearbeiten</button>
                <button type="button" class="btn btn-danger" style="margin-bottom: 10px;">Löschen</button>
            </form>
        </div>
    </div>
    </div>
</div>
</body>
<?php include "footer.php"; ?>
</html>