<?php
require '../db_config.php';
session_start();
session_unset();
$mail = $_POST['email'];
$password = $_POST['passwort'];
$id = $_POST['ID'];

$sql = "SELECT * FROM `Mitglieder` WHERE `EMail` = '$mail'";

$result = $conn->query($sql);

if ($result->num_rows > 0)
    $user = $result->fetch_all(MYSQLI_ASSOC)[0];

if($user == null)
header('Location: ../Login.php?error=true');

if (password_verify($password, $user['Passwort']))
{
    $_SESSION['userEmail'] = $mail;
    $_SESSION['ID'] = $id;
    $_SESSION['loginstatus'] = true;
    header('Location: ../Projektauswahl.php');
} else if (!password_verify($password, $user['Passwort']))
{
    header('Location: ../Login.php?error=true');
}