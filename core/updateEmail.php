<?php

include_once '../db/dbConnect.php';

$emailToDelete = $_POST['idEmailEdit'];
$newEmail = $_POST['newEmail'];

$sql = "UPDATE `shopmee_challenge`.`emailscolected`
        SET `email` = '" . $newEmail . "'
        WHERE `idEmailColected` = $emailToDelete;";

echo "<br>" . $sql . "<br>";

if ($conn->query($sql) === TRUE) {
    header('Location: emailList.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
