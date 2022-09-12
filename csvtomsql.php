<?php
$mysqli = new mysqli("localhost", "root", "", "csv-to-mysql");

$csvFilePath = "contact_data.csv";
$file = fopen($csvFilePath, "r");
while (($row = fgetcsv($file)) !== FALSE) 
{
    $stmt = $mysqli->prepare("INSERT INTO tbl_users (name, email,phno) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $row[1], $row[2], $row[3]);
    $stmt->execute();
}
?>