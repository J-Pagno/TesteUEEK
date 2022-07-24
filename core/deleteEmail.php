<?php

include_once '../db/dbConnect.php';

$emailToDelete = $_POST['idEmailDeleted'];

$sql = "DELETE FROM `shopmee_challenge`.`emailscolected`
WHERE idEmailColected = $emailToDelete;";

if ($conn->query($sql) === TRUE) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
