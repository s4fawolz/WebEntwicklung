<?php
if(!isset($_SESSION))
    session_start()
?>
<div class="col-2">
    <nav>
        <ul class="list-group">
            <li class="list-group-item"><a href="Login.php">Login</a></li>
            <li class="list-group-item"><a href="Projekte.php">Projekte</a></li>
            <li class="list-group-item"><a href="AktuellesProjekt.php">Aktuelles Projekt(<?= isset($_SESSION["projekt"]) ? $_SESSION["projekt"] :""?>)</a></li>
            <ul>
                <li class="list-group-item"><a href="Reiter.php">Reiter</a></li>
                <li class="list-group-item"><a href="Aufgaben.php">Aufgaben</a></li>
                <li class="list-group-item"><a href=Mitglieder.php>Mitglieder</a></li>
            </ul>
        </ul>
    </nav>
</div>