<?php
$servername = "localhost";
$username = "ladiesin_b1";
$password = "b1@2019";
$dbname = "ladiesin_batch1";

// Create connection
$db = new mysqli($servername,$username,$password,$dbname);
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 

// sql to create table
$sql1 = "CREATE TABLE post (
id INT(15) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Name TEXT(255) NOT NULL,
Description VARCHAR(200) NOT NULL,
Image LONGBLOB,
Website VARCHAR(255)
)";

if ($db->query($sql1) === TRUE) {
    echo "Table posts created successfully";
} else {
    echo "Error creating table: " . $db->error;
}

// sql to create table
$sql2 = "CREATE TABLE user (
id INT(15) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Name TEXT(255) NOT NULL,
Password VARCHAR(255) NOT NULL

)";

if ($db->query($sql2) === TRUE) {
    echo "Table users created successfully";
} else {
    echo "Error creating table: " . $db->error;
}

$db->close();
?>