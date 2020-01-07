<?php
require "../db_config.php";
if(isset($_GET["delID"]))
{
    $sql = 'DELETE FROM `Mitglieder` WHERE `ID` = '.$_GET["delID"];
    $conn->query($sql);
    header("Location: ../Mitglieder.php");
}
if($_POST["createUser"] == "true")
{
    $sql = "INSERT INTO `Mitglieder`(`Username`, `EMail`, `Passwort`) VALUES ('".$_POST['newUsername']."','".$_POST['newUserEmail']."','".password_hash($_POST['newUserPasswort'],PASSWORD_BCRYPT)."')";
    $conn->query($sql);

    header("Location: ../Mitglieder.php");
}

?>