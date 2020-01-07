<?php
session_start();
require "../db_config.php";

$id = $_SESSION["changeUserID"];
$username = $_POST['newUsername'];
$mail = $_POST['newUserEmail'];

var_dump($_POST);
if (isset($_POST['newUserPasswort']))
{
    echo "Hallo";
    //Update so, falls das PW-Feld nicht leer war
    if (!$_POST['newUserPasswort'] == "")
    {
        $pw = password_hash($_POST['newUserPasswort'], PASSWORD_BCRYPT);

        $sql = "UPDATE `Mitglieder` 
                SET `Username`= '$username',`EMail`= '$mail',`Passwort`='$pw' 
                WHERE `ID` = '$id'";
        echo $sql;
        $conn->query($sql);


    }

    if ($_POST['newUserPasswort'] == "")
    {
        $sql = "UPDATE `Mitglieder` SET `Username`= $username,`EMail`=$mail
                 WHERE `ID` = '$id'";
        echo $sql;
       $conn->query($sql);

    }
}

if (!isset($_POST['newUserPasswort']))
{
    $sql = "UPDATE `Mitglieder` 
                 SET `Username`= '$username',`EMail`= '$mail' 
                 WHERE `ID` =".$id;
    echo $sql;
    $conn->query($sql);

}
header("Location: ../Mitglieder.php");