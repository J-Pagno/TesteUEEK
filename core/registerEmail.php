<?php

include_once '../db/dbConnect.php';

$collectedEmail = $_POST['emailField'];

$sql = "INSERT INTO `shopmee_challenge`.`emailscolected`
(`email`)
VALUES
('" . $collectedEmail . "');";

if ($conn->query($sql) === TRUE) {
    header('Location: emailList.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
