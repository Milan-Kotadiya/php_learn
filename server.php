<?php
include './connection/sqlConnection.php';
include './functions/functions.php';


if (isset($_POST["username"])) {
    $userName = $_POST["username"];
    echo $userName;
} 

// $dbFunctions->createDb('sqlmilandatabase');
// $dbFunctions->dropDb('sqlmilandatabase');
// $dbFunctions->closeConnection();
// $dbFunctions->createDb('sqlmilandatabase');
// $dbFunctions->dropDb('sqlmilandatabase');
// $dbFunctions->closeConnection();
// $dbFunctions->useDb('sqlmilandatabase');
// $dbFunctions->createTable('testtable','sqlmilandatabase');
// $dbFunctions->deleteTable('testtable', 'sqlmilandatabase');
// $dbFunctions->selectAllfromTable('neo_project', 'migrations');

// CLOSE SQL CONNECTION
// $connect->close();
