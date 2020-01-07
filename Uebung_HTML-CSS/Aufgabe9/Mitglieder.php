<!doctype html>
<html lang=de:DE>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" type="text/css" href="\Uebung_HTML-CSS\css\Ue2A4.css">-->
    <title>Reiter</title>
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
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Beschreibung</th>
                    <th scope="col">In Projekt</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Max Mustermann</td>
                    <td>mustermann@muster.de</td>
                    <td><i class="fa fa-square"></i></td>
                    <td><i class="fa fa-clipboard"></i></td>
                    <td><i class="fa fa-trash"></i></td>
                </tr>
                </tbody>
            </table>
            <br>
            <h2>Beabeiten/Erstellen</h2>

            <form>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input class="form-control" type="text" name="Name" id="username" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input class="form-control" type="email" name="Name" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="passwort">Passwort:</label>
                    <input class="form-control" type="password" name="Name" id="passwort" placeholder="Passwort">
                </div>

                <div class="form-check" style="margin-bottom: 10px">
                    <input class="form-check-input" type="checkbox" value="Mitbewohner2" id="pers2">
                    <label class="form-check-label" for="pers2">
                        Dem Projekt zugeordnet
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-info">Reset</button>
            </form>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>
</body>
</html>