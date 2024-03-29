<!doctype html>
<html lang=de:DE>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" type="text/css" href="\Uebung_HTML-CSS\css\Ue2A4.css">-->
    <title>Aufgaben</title>
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
                    <th scope="col">Aufgabenbezeichnung</th>
                    <th scope="col">Beschreibung der Aufgabe</th>
                    <th scope="col">Reiter</th>
                    <th scope="col"></th>
                    <th scope="col"></th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>HTML Datei erstellen</td>
                    <td>HTML Datei erstellen</td>
                    <td>ToDo</td>
                    <td><i class="fa fa-clipboard"></i></td>
                    <td><i class="fa fa-trash"></i></td>
                </tr>
                <tr>
                    <td>CSS Datei erstellen</td>
                    <td>CSS Datei erstellen</td>
                    <td>ToDo</td>
                    <td><i class="fa fa-clipboard"></i></td>
                    <td><i class="fa fa-trash"></i></td>
                </tr>
                <tr>
                    <td>PC eingeschaltet</td>
                    <td>PC einschalten</td>
                    <td>Erledigt</td>
                    <td><i class="fa fa-clipboard"></i></td>
                    <td><i class="fa fa-trash"></i></td>
                </tr>
                <tr>
                    <td>Kaffee trinken</td>
                    <td>Kaffee trinken</td>
                    <td>Erledigt</td>
                    <td><i class="fa fa-clipboard"></i></td>
                    <td><i class="fa fa-trash"></i></td>
                </tr>
                <tr>
                    <td>Für die Uni lernen</td>
                    <td>Für die Uni lernen</td>
                    <td>Verschoben</td>
                    <td><i class="fa fa-clipboard"></i></td>
                    <td><i class="fa fa-trash"></i></td>
                </tr>
                </tbody>
            </table>
            <br>
            <h2>Beabeiten/Erstellen</h2>

            <form>
                <div class="form-group">
                    <label for="aufgabenBez">Aufgabenbezeichnung</label>
                    <input class="form-control" type="text" name="Name" id="aufgabenBez" placeholder="Aufgabe">
                </div>
                <div class="form-group">
                    <label for="tArea1">Beschreibung der Aufgabe:</label>
                    <textarea placeholder="Beschreibung" class="form-control" id="tArea1" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="erstellung">Erstellt am:</label>
                    <input name="erstelldatum"class="form-control" type="date" id="erstellung" placeholder="Erstellt am">
                </div>
                <div class="form-group">
                    <label for="faelligkeit">Fällig bis:</label>
                    <input name="faelligkeit"class="form-control" type="date" id="faelligkeit" placeholder="Fällig bis">
                </div>
                <div class="form-group">
                    <label for="zugehörigerReiter">Zugehöriger Reiter:</label>
                    <select name=list" class="form-control" id="zugehörigerReiter">
                        <option>ToDo</option>
                        <option>Erledigt</option>
                        <option>Verschoben</option>
                    </select>
                </div>

                <div>
                    <p>Zugewiesen an:</p>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Mitbewohner1" id="pers1">
                        <label class="form-check-label" for="pers1">
                            Mitbewohner1
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Mitbewohner2" id="pers2">
                        <label class="form-check-label" for="pers2">
                            Mitbewohner2
                        </label>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary" style="margin-bottom: 10px">Submit</button>
                <button type="submit" class="btn btn-info" style="margin-bottom: 10px">Reset</button>
            </form>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>
</body>
</html>