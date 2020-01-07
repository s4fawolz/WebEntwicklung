<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Uebung C";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_set_charset($conn, "utf8");

    // Check connection
    if ($conn->connect_error) {
        die("Verbindung ist fehlgeschlagen (1): " . $conn->connect_error);
    }