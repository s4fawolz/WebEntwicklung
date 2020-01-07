<?php


if (isset($pages)){
    foreach ($pages as $page => $pageContent){
        foreach ($pageContent as $tags => $tagcontent) {
            if (basename($_SERVER['REQUEST_URI'], ".php") == $page) {
                echo $tagcontent;
            }
        }
    }
}

$pages = array(
    "AktuellesProjekt" => array(
        "doctype" => "<!doctype html>",
        "html" => "<html lang=de:DE>",
        "head" => "<head>
                    <meta charset=\"UTF-8\">
                    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
                    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
                    <title>Aktuelles Projekt</title>
                </head>",
        "body" => "<body>
                    <div class=\"container-fluid\">
                        <header class=\"jumbotron\"><h1>Aufgabenplaner</h1></header>
                        <div class = \"row\">
                            <div class=\"col-2\">
                                <nav>
                                    <ul class=\"list-group\">
                                        <li class=\"list-group-item\"><a href=\"Login.php\">Login</a></li>
                                        <li class=\"list-group-item\"><a href=\"Projekte.php\">Projekte</a></li>
                                        <li class=\"list-group-item\"><a href=\"AktuellesProjekt.php\">Aktuelles Projekt</a></li>
                                        <ul>
                                            <li class=\"list-group-item\"><a href=\"Reiter.php\">Reiter</a></li>
                                            <li class=\"list-group-item\"><a href=\"Aufgaben.php\">Aufgaben</a></li>
                                            <li class=\"list-group-item\"><a href=Mitglieder.php>Mitglieder</a></li>
                                        </ul>
                                    </ul>
                                </nav>
                            </div>
                    
                            <div class=\"col\">
                                Dies ist eine ToDo-List:<br>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <p class=\"card-header\"><b>ToDo:</b></p>
                                        <ul class=\"list-group\">
                                            <li class=\"list-group-item\">HTML Datei erstellen</li>
                                            <li class=\"list-group-item\">CSS Datei erstellen</li>
                                        </ul>
                                    </div>
                                    <div class=\"col\">
                                        <p class=\"card-header\"><b>Erledigt:</b></p>
                                        <ul class=\"list-group\">
                                            <li class=\"list-group-item\">PC eingeschaltet</li>
                                            <li class=\"list-group-item\"> Kaffee trinken</li>
                                        </ul>
                                    </div>
                                    <div class=\"col\">
                                        <p class=\"card-header\"><b>Verschieben</b></p>
                                        <ul class=\"list-group\">
                                            <li class=\"list-group-item\">Für die Uni lernen</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </body>",
        "end" => "</html>"
    ),
    "Aufgaben" => array(
        "doctype" => "<!doctype html>",
        "html" => "<html lang=de:DE>",
        "head" => "<head>
                    <meta charset=\"UTF-8\">
                    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
                    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
                    <!--<link rel=\"stylesheet\" type=\"text/css\" href=\"\Uebung_HTML-CSS\css\Ue2A4.css\">-->
                    <title>Aufgaben</title>
                   </head>",
        "body" => "<body>
                    <div class=\"container-fluid\">
                        <header class=\"jumbotron\"><h1>Aufgabenplaner</h1></header>
                        <div class = \"row\">
                            <div class=\"col-2\">
                                <nav>
                                    <ul class=\"list-group\">
                                        <li class=\"list-group-item\"><a href=\"Login.php\">Login</a></li>
                                        <li class=\"list-group-item\"><a href=\"Projekte.php\">Projekte</a></li>
                                        <li class=\"list-group-item\"><a href=\"AktuellesProjekt.php\">Aktuelles Projekt</a></li>
                                        <ul>
                                            <li class=\"list-group-item\"><a href=\"Reiter.php\">Reiter</a></li>
                                            <li class=\"list-group-item\"><a href=\"Aufgaben.php\">Aufgaben</a></li>
                                            <li class=\"list-group-item\"><a href=Mitglieder.php>Mitglieder</a></li>
                                        </ul>
                                    </ul>
                                </nav>
                            </div>
                    
                            <div class=\"col\">
                                <table class=\"table\">
                                    <thead class=\"thead-light\">
                                    <tr>
                                        <th scope=\"col\">Aufgabenbezeichnung</th>
                                        <th scope=\"col\">Beschreibung der Aufgabe</th>
                                        <th scope=\"col\">Reiter</th>
                                        <th scope=\"col\"></th>
                                        <th scope=\"col\"></th>
                    
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>HTML Datei erstellen</td>
                                        <td>HTML Datei erstellen</td>
                                        <td>ToDo</td>
                                        <td><i class=\"fa fa-clipboard\"></i></td>
                                        <td><i class=\"fa fa-trash\"></i></td>
                                    </tr>
                                    <tr>
                                        <td>CSS Datei erstellen</td>
                                        <td>CSS Datei erstellen</td>
                                        <td>ToDo</td>
                                        <td><i class=\"fa fa-clipboard\"></i></td>
                                        <td><i class=\"fa fa-trash\"></i></td>
                                    </tr>
                                    <tr>
                                        <td>PC eingeschaltet</td>
                                        <td>PC einschalten</td>
                                        <td>Erledigt</td>
                                        <td><i class=\"fa fa-clipboard\"></i></td>
                                        <td><i class=\"fa fa-trash\"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Kaffee trinken</td>
                                        <td>Kaffee trinken</td>
                                        <td>Erledigt</td>
                                        <td><i class=\"fa fa-clipboard\"></i></td>
                                        <td><i class=\"fa fa-trash\"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Für die Uni lernen</td>
                                        <td>Für die Uni lernen</td>
                                        <td>Verschoben</td>
                                        <td><i class=\"fa fa-clipboard\"></i></td>
                                        <td><i class=\"fa fa-trash\"></i></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <br>
                                <h2>Beabeiten/Erstellen</h2>
                    
                                <form>
                                    <div class=\"form-group\">
                                        <label for=\"aufgabenBez\">Aufgabenbezeichnung</label>
                                        <input class=\"form-control\" type=\"text\" name=\"Name\" id=\"aufgabenBez\" placeholder=\"Aufgabe\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"tArea1\">Beschreibung der Aufgabe:</label>
                                        <textarea placeholder=\"Beschreibung\" class=\"form-control\" id=\"tArea1\" rows=\"3\"></textarea>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"erstellung\">Erstellt am:</label>
                                        <input name=\"erstelldatum\"class=\"form-control\" type=\"date\" id=\"erstellung\" placeholder=\"Erstellt am\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"faelligkeit\">Fällig bis:</label>
                                        <input name=\"faelligkeit\"class=\"form-control\" type=\"date\" id=\"faelligkeit\" placeholder=\"Fällig bis\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"zugehörigerReiter\">Zugehöriger Reiter:</label>
                                        <select name=list\" class=\"form-control\" id=\"zugehörigerReiter\">
                                            <option>ToDo</option>
                                            <option>Erledigt</option>
                                            <option>Verschoben</option>
                                        </select>
                                    </div>
                    
                                    <div>
                                        <p>Zugewiesen an:</p>
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"checkbox\" value=\"Mitbewohner1\" id=\"pers1\">
                                            <label class=\"form-check-label\" for=\"pers1\">
                                                Mitbewohner1
                                            </label>
                                        </div>
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"checkbox\" value=\"Mitbewohner2\" id=\"pers2\">
                                            <label class=\"form-check-label\" for=\"pers2\">
                                                Mitbewohner2
                                            </label>
                                        </div>
                                    </div>
                                    <br>
                                    <button type=\"submit\" class=\"btn btn-primary\" style=\"margin-bottom: 10px\">Submit</button>
                                    <button type=\"submit\" class=\"btn btn-info\" style=\"margin-bottom: 10px\">Reset</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    </body>",
        "end" => "</html>"
    ),
    "Login" => array(
        "doctype" => "<!doctype html>",
        "html" => "<html lang=de:DE>",
        "head" => "<head>
                        <meta charset=\"UTF-8\">
                        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
                    
                        <!--<link rel=\"stylesheet\" type=\"text/css\" href=\"\Uebung_HTML-CSS\css\Ue2A4.css\">-->
                        <title>Login</title>
                    </head>",
        "body" => "<body>
                    <div class=\"container-fluid\">
                    <header class=\"jumbotron\"><h1>Aufgabenplaner</h1></header>
                            <form style=\"margin-left: 50%; transform: translateX(-50%)\">
                                <div class=\"form-group\">
                                    <label for=\"emailLogin\">Email-Adresse:</label>
                                    <input class=\"form-control\" type=\"email\" name=\"email\" id=\"emailLogin\"
                                           placeholder=\"Email-Adresse eingeben\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"passwortLogin\">Passwort</label>
                                    <input class=\"form-control\" type=\"password\" name=\"passwort\" id=\"passwortLogin\" placeholder=\"Passwort\">
                                </div>
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" type=\"checkbox\" value=\"Mitbewohner2\" id=\"pers2\">
                                    <label class=\"form-check-label\" for=\"pers2\">
                                        AGBs und Datenschutzbedingung akzeptieren
                                    </label>
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary\">Einloggen</button>
                                <p>Noch nicht registriert? <a href=\"\">Registrierung</a></p>
                                <p>Da der Login Vorgang noch nicht realisiert wurde: <a href=\"Ue2A5.html\">Überspringen</a></p>
                            </form>
                        </div>
                    </div>
                    </body>",
        "end" => "</html>"
    ),
    "Mitglieder" => array(
        "doctype" => "<!doctype html>",
        "html" => "<html lang=de:DE>",
        "head" => "<head>
                        <meta charset=\"UTF-8\">
                        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
                        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
                        <!--<link rel=\"stylesheet\" type=\"text/css\" href=\"\Uebung_HTML-CSS\css\Ue2A4.css\">-->
                        <title>Reiter</title>
                    </head>",
        "body" => "<body>
                    <div class=\"container-fluid\">
                    <header class=\"jumbotron\"><h1>Aufgabenplaner</h1></header>
                        <div class = \"row\">
                            <div class=\"col-2\">
                                <nav>
                                    <ul class=\"list-group\">
                                        <li class=\"list-group-item\"><a href=\"Login.php\">Login</a></li>
                                        <li class=\"list-group-item\"><a href=\"Projekte.php\">Projekte</a></li>
                                        <li class=\"list-group-item\"><a href=\"AktuellesProjekt.php\">Aktuelles Projekt</a></li>
                                        <ul>
                                            <li class=\"list-group-item\"><a href=\"Reiter.php\">Reiter</a></li>
                                            <li class=\"list-group-item\"><a href=\"Aufgaben.php\">Aufgaben</a></li>
                                            <li class=\"list-group-item\"><a href=Mitglieder.php>Mitglieder</a></li>
                                        </ul>
                                    </ul>
                                </nav>
                            </div>
                    
                            <div class=\"col\">
                                <table class=\"table\">
                                    <thead class=\"thead-light\">
                                    <tr>
                                        <th scope=\"col\">Name</th>
                                        <th scope=\"col\">Beschreibung</th>
                                        <th scope=\"col\">In Projekt</th>
                                        <th scope=\"col\"></th>
                                        <th scope=\"col\"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Max Mustermann</td>
                                        <td>mustermann@muster.de</td>
                                        <td><i class=\"fa fa-square\"></i></td>
                                        <td><i class=\"fa fa-clipboard\"></i></td>
                                        <td><i class=\"fa fa-trash\"></i></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <br>
                                <h2>Beabeiten/Erstellen</h2>
                    
                                <form>
                                    <div class=\"form-group\">
                                        <label for=\"username\">Username:</label>
                                        <input class=\"form-control\" type=\"text\" name=\"Name\" id=\"username\" placeholder=\"Username\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"email\">Email:</label>
                                        <input class=\"form-control\" type=\"email\" name=\"Name\" id=\"email\" placeholder=\"Email\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"passwort\">Passwort:</label>
                                        <input class=\"form-control\" type=\"password\" name=\"Name\" id=\"passwort\" placeholder=\"Passwort\">
                                    </div>
                    
                                    <div class=\"form-check\" style=\"margin-bottom: 10px\">
                                        <input class=\"form-check-input\" type=\"checkbox\" value=\"Mitbewohner2\" id=\"pers2\">
                                        <label class=\"form-check-label\" for=\"pers2\">
                                            Dem Projekt zugeordnet
                                        </label>
                                    </div>
                                    <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                                    <button type=\"button\" class=\"btn btn-info\">Reset</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    </body>",
        "end" => "</html>"
    ),
    "Projekte" => array(
        "doctype" => "<!doctype html>",
        "html" => "<html lang=de:DE>",
        "head" => "<head>
                        <meta charset=\"UTF-8\">
                        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
                    
                        <!--<link rel=\"stylesheet\" type=\"text/css\" href=\"\Uebung_HTML-CSS\css\Ue2A4.css\">-->
                        <title>Projekte</title>
                    </head>",
        "body" => "<body>
                    <div class=\"container-fluid\">
                    <header class=\"jumbotron\"><h1>Aufgabenplaner</h1></header>
                        <div class = \"row\">
                            <div class=\"col-2\">
                                <nav>
                                    <ul class=\"list-group\">
                                        <li class=\"list-group-item\"><a href=\"Login.php\">Login</a></li>
                                        <li class=\"list-group-item\"><a href=\"Projekte.php\">Projekte</a></li>
                                        <li class=\"list-group-item\"><a href=\"AktuellesProjekt.php\">Aktuelles Projekt</a></li>
                                        <ul>
                                            <li class=\"list-group-item\"><a href=\"Reiter.php\">Reiter</a></li>
                                            <li class=\"list-group-item\"><a href=\"Aufgaben.php\">Aufgaben</a></li>
                                            <li class=\"list-group-item\"><a href=Mitglieder.php>Mitglieder</a></li>
                                        </ul>
                                    </ul>
                                </nav>
                            </div>
                    
                            <div class=\"col\">
                                <h2>Projekt Auswählen</h2>
                                <form>
                                    <div class=\"form-group\">
                                        <select name=\"list \"class=\"form-control\" id=\"projektAuswahl\">
                                            <option>ToDo-Liste</option>
                                        </select>
                                    </div>
                                    <button type=\"button\" class=\"btn btn-primary\" style=\"margin-bottom: 10px;\">Submit</button>
                                    <button type=\"button\" class=\"btn btn-primary\" style=\"margin-bottom: 10px;\">Bearbeiten</button>
                                    <button type=\"button\" class=\"btn btn-danger\" style=\"margin-bottom: 10px;\">Löschen</button>
                                </form>
                                <h2>Beabeiten/Erstellen</h2>
                                <form>
                                    <div class=\"form-group\">
                                        <label for=\"projektname\">Projektname</label>
                                        <input class=\"form-control\" type=\"text\" name=\"Name\" id=\"projektname\" placeholder=\"Projektname\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"tArea1\">Projektbeschreibung:</label>
                                        <textarea class=\"form-control\" placeholder=\"Beschreibung\" id=\"tArea1\" rows=\"3\"></textarea>
                                    </div>
                    
                                    <button type=\"button\" class=\"btn btn-primary\">Submit</button>
                                    <button type=\"button\" class=\"btn btn-info\">Reset</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    </body>",
        "end" => "</html>"
    ),
    "Reiter" => array(
        "doctype" => "<!doctype html>",
        "html" => "<html lang=de:DE>",
        "head" => "<head>
                        <meta charset=\"UTF-8\">
                        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
                        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
                        <title>Reiter</title>
                    </head>",
        "body" => "<body>
                    <div class=\"container-fluid\">
                    <header class=\"jumbotron\"><h1>Aufgabenplaner</h1></header>
                        <div class = \"row\">
                            <div class=\"col-2\">
                                <nav>
                                    <ul class=\"list-group\">
                                        <li class=\"list-group-item\"><a href=\"Login.php\">Login</a></li>
                                        <li class=\"list-group-item\"><a href=\"Projekte.php\">Projekte</a></li>
                                        <li class=\"list-group-item\"><a href=\"AktuellesProjekt.php\">Aktuelles Projekt</a></li>
                                        <ul>
                                            <li class=\"list-group-item\"><a href=\"Reiter.php\">Reiter</a></li>
                                            <li class=\"list-group-item\"><a href=\"Aufgaben.php\">Aufgaben</a></li>
                                            <li class=\"list-group-item\"><a href=Mitglieder.php>Mitglieder</a></li>
                                        </ul>
                                    </ul>
                                </nav>
                            </div>
                    
                            <div class=\"col\">
                                <table class=\"table\">
                                    <thead class=\"thead-light\">
                                    <tr>
                                        <th scope=\"col\">Name</th>
                                        <th scope=\"col\">Beschreibung</th>
                                        <th scope=\"col\"></th>
                                        <th scope=\"col\"></th>
                    
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>ToDo</td>
                                        <td>Dinge die erledigt werden müssen</td>
                                        <td><i class=\"fa fa-clipboard\"></i></td>
                                        <td><i class=\"fa fa-trash\"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Erledigt</td>
                                        <td>Dinge die erledigt sind</td>
                                        <td><i class=\"fa fa-clipboard\"></i></td>
                                        <td><i class=\"fa fa-trash\"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Verschoben</td>
                                        <td>Dinge die später erledigt werden</td>
                                        <td><i class=\"fa fa-clipboard\"></i></td>
                                        <td><i class=\"fa fa-trash\"></i></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <br>
                                <h2>Beabeiten/Erstellen</h2>
                    
                               <form>
                                   <div class=\"form-group\">
                                       <label for=\"reiterBez\">Bezeichnung des Reiters</label>
                                       <input class=\"form-control\" type=\"text\" name=\"Name\" id=\"reiterBez\" placeholder=\"Bezeichnung\">
                                   </div>
                    
                                   <div class=\"form-group\">
                                       <label for=\"tArea1\">Beschreibung:</label>
                                       <textarea class=\"form-control\"  id=\"tArea1\" rows=\"3\" placeholder=\"Beschreibung\"></textarea>
                                   </div>
                    
                                   <div class=\"form-group\">
                                       <label for=\"zugewiesenesProjekt\">Zugewiesenes Projekt:</label>
                                       <select name=\"list \"class=\"form-control\" id=\"zugewiesenesProjekt\">
                                           <option>ToDo</option>
                                           <option>Erledigt</option>
                                           <option>Verschieben</option>
                                       </select>
                                   </div>
                    
                                   <button type=\"button\" class=\"btn btn-primary\">Submit</button>
                                   <button type=\"button\" class=\"btn btn-info\">Reset</button>
                               </form>
                            </div>
                        </div>
                    </div>
                    </body>",
        "end" => "</html>"
    )

)

?>