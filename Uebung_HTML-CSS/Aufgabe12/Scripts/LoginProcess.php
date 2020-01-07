<?php
require '../db_config.php';
session_start();
session_unset();
$mail = $_POST['email'];
$password = $_POST['passwort'];

$sql = "SELECT * FROM `Mitglieder` WHERE `EMail` = '$mail'";

$result = $conn->query($sql);

//Fehler: falsches PW oder E-Mail, wenn statt $user $user[] geschrieben wird
if ($result->num_rows > 0)
    $user = $result->fetch_all(MYSQLI_ASSOC)[0];


//existiert kein User mit angegebener E-Mail, wird eine entsprechende Fehlermeldung angezeigt
if ($user == null) {
    var_dump($user );
    //header('Location: wrongpassword.php');                     //header verlinkt auf neue URL
} else {
    if (password_verify($password, $user['Passwort'])) {             //Falls PW und Hash übereinstimmen
        session_start();
        $_SESSION['userEmail'] = $mail;
        $_SESSION['loginstatus'] = true;
        header('Location: ../Projektauswahl.php');
    } else if (!password_verify($password, $user['Passwort'])) {     //Falls PW und Hash nicht übereinstimmen
        echo "FAAALSCH";
    }
}