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

// CLOSE SQL CONNECTION
// $connect->close();

// createDb('sqlmilandatabase');
// dropDb('sqlmilandatabase');
// useDb('sqlmilandatabase');
// createTable('testtable','sqlmilandatabase');
// deleteTable('testtable', 'sqlmilandatabase');
// selectAllfromTable('neo_project', 'migrations');
