<!doctype html>
<html lang=de:DE>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
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
                    <th scope="col"></th>
                    <th scope="col"></th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>ToDo</td>
                    <td>Dinge die erledigt werden müssen</td>
                    <td><i class="fa fa-clipboard"></i></td>
                    <td><i class="fa fa-trash"></i></td>
                </tr>
                <tr>
                    <td>Erledigt</td>
                    <td>Dinge die erledigt sind</td>
                    <td><i class="fa fa-clipboard"></i></td>
                    <td><i class="fa fa-trash"></i></td>
                </tr>
                <tr>
                    <td>Verschoben</td>
                    <td>Dinge die später erledigt werden</td>
                    <td><i class="fa fa-clipboard"></i></td>
                    <td><i class="fa fa-trash"></i></td>
                </tr>
                </tbody>
            </table>
            <br>
            <h2>Beabeiten/Erstellen</h2>

           <form>
               <div class="form-group">
                   <label for="reiterBez">Bezeichnung des Reiters</label>
                   <input class="form-control" type="text" name="Name" id="reiterBez" placeholder="Bezeichnung">
               </div>

               <div class="form-group">
                   <label for="tArea1">Beschreibung:</label>
                   <textarea class="form-control"  id="tArea1" rows="3" placeholder="Beschreibung"></textarea>
               </div>

               <div class="form-group">
                   <label for="zugewiesenesProjekt">Zugewiesenes Projekt:</label>
                   <select name="list "class="form-control" id="zugewiesenesProjekt">
                       <option>ToDo</option>
                       <option>Erledigt</option>
                       <option>Verschieben</option>
                   </select>
               </div>

               <button type="button" class="btn btn-primary">Submit</button>
               <button type="button" class="btn btn-info">Reset</button>
           </form>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>
</body>
</html>