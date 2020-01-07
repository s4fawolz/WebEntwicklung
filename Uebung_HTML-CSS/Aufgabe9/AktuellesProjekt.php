<!doctype html>
<html lang=de:DE>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--<link rel="stylesheet" type="text/css" href="\Uebung_HTML-CSS\css\Ue2A4.css">-->
    <title>Aktuelles Projekt</title>
</head>
<body>
<div class="container-fluid">
    <?php include "header.php"; ?>
    <div class = "row">
        <div class="col-2">
            <nav>
                <ul class="list-group">
                    <li class="list-group-item"><a href="Login.php">Login</a></li>
                    <li class="list-group-item"><a href="Projekte.php">Projekte</a></li>
                    <li class="list-group-item"><a href="AktuellesProjekt.php">Aktuelles Projekt</a></li>
                    <ul>
                        <li class="list-group-item"><a href="Reiter.php">Reiter</a></li>
                        <li class="list-group-item"><a href="Aufgaben.php">Aufgaben</a></li>
                        <li class="list-group-item"><a href=Mitglieder.php>Mitglieder</a></li>
                    </ul>
                </ul>
            </nav>
        </div>

        <div class="col">
            Dies ist eine ToDo-List:<br>
            <div class="row">
                <div class="col">
                    <p class="card-header"><b>ToDo:</b></p>
                    <ul class="list-group">
                        <li class="list-group-item">HTML Datei erstellen</li>
                        <li class="list-group-item">CSS Datei erstellen</li>
                    </ul>
                </div>
                <div class="col">
                    <p class="card-header"><b>Erledigt:</b></p>
                    <ul class="list-group">
                        <li class="list-group-item">PC eingeschaltet</li>
                        <li class="list-group-item"> Kaffee trinken</li>
                    </ul>
                </div>
                <div class="col">
                    <p class="card-header"><b>Verschieben</b></p>
                    <ul class="list-group">
                        <li class="list-group-item">Für die Uni lernen</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>
</body>
</html>